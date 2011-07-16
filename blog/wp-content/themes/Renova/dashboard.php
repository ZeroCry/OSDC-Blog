<?php

$themename = "Renova";
$shortname = "pov";
$mx_categories_obj = get_categories('hide_empty=0');
$mx_categories = array();
foreach ($mx_categories_obj as $mx_cat) {
	$mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name;
}
$categories_tmp = array_unshift($mx_categories, "Select a category:");	
$indexscheme = array("minimal", "diary");
$colorscheme = array("Default", "Orange", "Magenta", "Green","Red","Cyan");

$options = array (

array(  "name" => "Header",
            "type" => "heading",
			"desc" => "Set your heading options",
       ),

array( 	"name" => "Logo Display",
			"desc" => "Insert the URL address of your logo(upload in your media gallery) Dimensions are 300px x 60px). If you leave the form empty will display your blog title and description",
			"id" => $shortname."_logo",
			"type" => "text",
			"std" => "http://www.llow.it/wordpress/wp-content/uploads/2011/03/logo_renova.png"),
					

array(  "name" => "Slogan Description",
					"desc" => "Enter the text for your blog slogan.",
					"id" => $shortname."_slogan",
					"type" => "text",
					"std" => "This is a free space where you can enter the text for your blog slogan, a description or whatever you want to say to your readers."),	
					
array(	"name" => "Disable Slogan Description",
					"desc" => "You can disable the slogan description on the header",
					"id" => $shortname."_dislogan",
					"std" => "false",
					"type" => "checkbox"),

array(  "name" => "Optional Text",
					"desc" => "Enter an optional text near the social network links",
					"id" => $shortname."_optiontext",
					"type" => "text",
					"std" => "Enter an optional text next to the social network links.Could be usefull for admin description."),	
					
array(	"name" => "Disable Optional Text",
					"desc" => "You can disable the optional text on the header",
					"id" => $shortname."_disoptiontext",
					"std" => "false",
					"type" => "checkbox"),
			
			
array(  "name" => "Theme Color Scheme",
            "type" => "heading",
			"desc" => "Choose your color scheme.",
       ),

array(   "name" => "Blog Color Scheme",
            "id" => $shortname."_color",
            "type" => "select",
            "std" => "Default",
            "options" => $colorscheme),
				
array(	"name" => "Background Body",
					"desc" => "You can choose from a white background and light gret background",
					"id" => $shortname."_disbody",
					"std" => "false",
					"type" => "checkbox"),	
				
					

array(  "name" => "FeedBurner Account",
            "type" => "heading",
			"desc" => "Insert your Feedbuner account",
			),	
array(  "name" => "Your FeedBurner address",
        	"desc" => "Enter your Feedburner account name",
        	"id" => $shortname."_feedburner_account",
        	"type" => "text",
        	"std" => ""),			
		
array(  "name" => "Social Networks Account",
            "type" => "heading",
			"desc" => "",
			),	
array(  "name" => "Your Twitter account",
        	"desc" => "Enter your Twitter account name",
        	"id" => $shortname."_twitter_user_name",
        	"type" => "text",
        	"std" => ""),
array(  "name" => "Your Facebook account",
        	"desc" => "Enter your Facebook account name ex: aldo.rossi",
        	"id" => $shortname."_facebook_user_name",
        	"type" => "text",
        	"std" => ""),	


array(  "name" => "Sidebar on Subfooter",
            "type" => "heading",
			"desc" => "Customize the sidebar with theme widgets .",
       ),	
			
array(	"name" => "Disable Subfooter",
					"desc" => "Disabgling Subfooter the homepage will be more shorter",
					"id" => $shortname."_disubfooter",
					"std" => "false",
					"type" => "checkbox"),

					
					
array(  "name" => "Footer",
         "type" => "heading",
			"desc" => "License for your blog .",
       ),
					

array(  "name" => "License Text on Footer",
					"desc" => "Enter the text for your license in the footer",
					"id" => $shortname."_footer_license",
					"type" => "text",
					"std" => "Enter the text for your license inside the footer"),

array(	"name" => "Disable Credit Link",
					"desc" => "It's completely optional , but if you like the Theme i would appreciate it if you keep the credit link at the bottom",
					"id" => $shortname."_discredit",
					"std" => "false",
					"type" => "checkbox"),
					

					
	
					
	

	
		array(  "name" => "Google Analytics",
            "type" => "heading",
			"desc" => "Please paste your Google Analytics (or other) tracking code here.",
       ),
	
	

	array(	"name" => "Google Analytics",
			"desc" => "",
			"id" => $shortname."_google_analytics",
			"std" => "",
			"type" => "textarea"),		
	array( "type" => "close"),	

);







function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=dashboard.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); 
                update_option( $value['id'], $value['std'] );}

            header("Location: themes.php?page=dashboard.php&reset=true");
            die;

        }
    }

      add_theme_page($themename." Options", "$themename Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
    
?>

<div class="wrap">
<h2><b><?php echo $themename; ?> theme options</b></h2>
<form method="post">
        <table class="optiontable" >
                <?php foreach ($options as $value) { 
    
	
if ($value['type'] == "text") { ?>
                <tr align="left">
                        <th scope="row"><?php echo $value['name']; ?>:</th>
                        <td><input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" size="40" /></td>
                </tr>
                <tr>
                        <td colspan=2><small><?php echo $value['desc']; ?> </small>
                                <hr /></td>
                </tr>
                <?php } elseif ($value['type'] == "textarea") { ?>
                <tr align="left">
                        <th scope="row"><?php echo $value['name']; ?>:</th>
                        <td><textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" cols="40" rows="5"/>
                                <?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option($value['id'] )); } else { echo $value['std']; } ?>
                                </textarea></td>
                </tr>
                <tr>
                        <td colspan=2><small><?php echo $value['desc']; ?> </small>
                                <hr /></td>
                </tr>
                <?php } elseif ($value['type'] == "select") { ?>
                <tr align="left">
                        <th scope="top"><?php echo $value['name']; ?>:</th>
                        <td><select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
                                        <?php foreach ($value['options'] as $option) { ?>
                                        <option<?php if ( get_option( $value['id'] ) == $option) { echo ' selected="selected"'; }?>><?php echo $option; ?></option>
                                        <?php } ?>
                                </select></td>
                </tr>
                <tr>
                        <td colspan=2><small><?php echo $value['desc']; ?> </small>
                                <hr /></td>
                </tr>
                <?php } elseif ($value['type'] == "checkbox") { ?>
                <tr  >
                        <th scope="top" align="left"><?php echo __($value['name'],'thematic'); ?></th>
                        <td><?php
					if(get_option($value['id'])){
						$checked = "checked=\"checked\"";
					}else{
						$checked = "";
					}
				?>
                                <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                                <label for="<?php echo $value['id']; ?>"></label></td>
                </tr>
                <tr>
                        <td colspan=2><small><?php echo $value['desc']; ?> </small>
                                <hr /></td>
                </tr>
                <?php } elseif ($value['type'] == "heading") { ?>
                <tr valign="top">
                        <td colspan="2" style="text-align: left;"><h2 style="color:grey;"><?php echo $value['name']; ?></h2></td>
                </tr>
                <tr>
                        <td colspan=2><small>
                                <p style="color:green; margin:0 0;" > <?php echo $value['desc']; ?> </P>
                                </small>
                                <hr /></td>
                </tr>
                <?php } ?>
                <?php 
}
?>
        </table>
        <p class="submit">
                <input name="save" type="submit" value="Save changes" />
                <input type="hidden" name="action" value="save" />
        </p>
</form>
<form method="post">
        <p class="submit">
                <input name="reset" type="submit" value="Reset" />
                <input type="hidden" name="action" value="reset" />
        </p>
</form>
<p>Visit us: <a href="http://www.llow.it/" >llow.it</a>. </p>
<?php
}
add_action('admin_menu', 'mytheme_add_admin'); ?>
