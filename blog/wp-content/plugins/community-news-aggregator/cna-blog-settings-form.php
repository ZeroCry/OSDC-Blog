<?php
?>
<div id="cna-form-container">
<h2>Configure Your Blog on this Community</h2>
<?php
//get current logged in user
$user=wp_get_current_user();
$userid=$user->ID;
if(isset($_POST['cna-blog-address']))
{
	//Proceed with saving blog settings
	//Settings are saved as User Meta Data 
	//Blog address has a meta key 'cna-blog-address'
	//Blog service has a meta key 'cna-blog-service'
	$blog_service=$_POST['cna-service'];
	$blog_address=$_POST['cna-blog-address'];
	update_user_meta($userid,"cna_blog_service",$blog_service);
	update_user_meta($userid,"cna_blog_address",$blog_address);
	echo '<div class="updated">Blog settings updated</div>';
}
else
{
	//load saved blog config from user's meta data into the form variables
	$blog_service=get_user_meta($userid,"cna_blog_service",true);
	$blog_address=get_user_meta($userid,"cna_blog_address",true);
}

switch($blog_service)
	{
		case 'blogger':
			$blogger="selected";
			break;
		case 'wordpress':
			$wordpress="selected";
			break;
		default:
	}

?>
<link rel='stylesheet' type='text/css' href="<?echo $plugin_url.'/style.css'?>"/>
<form method='post' action=''>
<p>Select Your Blogging Service
<select name='cna-service' class='cna-input'>
<option value='wordpress' <?php echo $wordpress;?>>WordPress</option>
<option value='blogger' <?php echo $blogger;?>>Blogger</option>
</select>
</p>
<p>Enter Your Blog's Address
<input type='text' name='cna-blog-address' size='50' class='cna-input' id='cna-blog-address' value="<?echo $blog_address?>"/><span class='cna-info'>Example: yourblogaddress.com or yourblog.wordpress.com</span>
</p>
<?php
	$community_label=get_option('cna-community-label');
	if($community_label==false || $community_label=='') {$cna_note="The admin has not set the Community Label. You cannot see your content on this blog unless its done.";}
	else{$cna_note="To mark your blog posts to appear on this blog, just post them in a category with name same as <b>".$community_label."</b>.";}

?>
<div class='updated'>Note: <?echo $cna_note?></div>
<p><input id='cna-submit' type='submit' value="Save Settings" class='button'/></p>

</form>
</div>
<?php
// end
?>
