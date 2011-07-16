<!DOCTYPE HTML>
<html><head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes">
<title>
<?php bloginfo('name'); ?>
<?php if ( is_single() ) { ?>
&raquo; Blog Archive
<?php } ?>
<?php wp_title(); ?>
</title>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php echo home_url() ?>/favicon.ico" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<!-- Don't touch this! -->
<?php global $options;
foreach ($options as $value) {
if (get_option( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); } }
?>



<!-- Stylesheet link -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/print.css" type="text/css" media="only print" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/color/style-<?php echo $pov_color; ?>.css" type="text/css" media="screen" />

<!-- For iPhone: -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/device.css" media="all and (max-width: 480px)" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/tablet.css" media="all and (min-width: 481px) and (max-width: 1024px)" type="text/css" />





<!-- Jquery Link -->
<?php wp_enqueue_script('jquery'); ?>

<!-- Javascript Link -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/javascript/renova_js.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/javascript/jquery-ui-personalized-1.5.2.packed.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/javascript/jquery.color.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/javascript/jquery.animate-colors.js" type="text/javascript"></script>


<!-- Funciont to change color background Start --> 
<?php if ($pov_disbody == "true") { ?> 
<style type="text/css">body{background:#eee;}</style>
<?php } else { ?>
<style type="text/css">body{background:#fff;}</style>
<?php } ?>

</head>

<body >
<div id="wrap_mobile">
 <?php wp_nav_menu(array( 'fallback_cb' => 'display_categories' , 'menu' => 'primary-menu', 'container_class' => 'main-menu', 'container_id' => 'wrap2', 'theme_location' => 'primary-menu' ) ); ?>
 <div class="close" ><img class="icon2" src="<?php bloginfo('template_directory'); ?>/images/close_16.png" alt="Add Me!" width="12" height="12" />Close Menu Navigation</div>
</div>

<!-- Header --> 
<div id="header">

                

                
                <div id="logo"> 
                        <!-- Don't Touch This -->
                        <?php global $options;
							foreach ($options as $value) {
							if (get_option( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); }
							}?>
                        <h1><a href="<?php echo get_option('home'); ?>/">
                                <?php if($pov_logo) { ?>
                                <img src="<?php echo $pov_logo;?>" alt="Go Home"/>
                                <?php } else { bloginfo('name'); } ?>
                                </a></h1>
                        <h2>
                                <?php if($pov_logo) { ?>
                                
                                <?php } else { bloginfo('description'); } ?>
                        </h2>
                </div>

</div>
<!--Header end -->
</div>

<!--Blog Description Text and Social Networks Links-->
<div id="me" >

                                <!--Slogan Description-->
                                <?php if ($pov_dislogan== "true") { } else { ?>
                                <h1>           
                                <?php $slogan_header="This is a free space where you can enter the text for your blog slogan, a description or whatever you want to say to your readers." ?>
                                <?php if (get_option('pov_slogan')) { $slogan_header = get_option('pov_slogan') ; } ?>
                                <?php echo $slogan_header; ?>
                                </h1>  
										  <?php } ?>  
                                <!--Slogan Description End-->
                                
                                
                                <ul>        
 										  <!--Optional Text-->
										  <?php if ($pov_disoptiontext== "true") { } else { ?>
                                <li class="nobullet optional" >       
                                <?php $option_header="Enter an optional text next to the social network links.Could be usefull for admin description." ?>
                                <?php if (get_option('pov_slogan')) { $option_header = get_option('pov_optiontext') ; } ?>
                                <?php echo $option_header; ?>
                                </li>
										  <?php } ?>          
										  <!--Optional Text End-->

										 <!--Feedburner -->
										 <?php $feedburner_account="#" ?><?php if (get_settings('pov_feedburner_account')) { $feedburner_account = get_settings('pov_feedburner_account') ; } ?>
                               <li class="nobullet">
                               <img class="icon2" src="<?php bloginfo('template_directory'); ?>/images/rss_16.png" alt="Subscribe!" width="12" height="12" />
                               <a href="http://feeds.feedburner.com/<?php echo $feedburner_account ?>"> Subscribe  </a>
                               </li>
                               
                               <!--Twitter -->
                               <?php $twit_user_name="#" ?><?php if (get_settings('pov_twitter_user_name')) { $twit_user_name = get_settings('pov_twitter_user_name') ; } ?>
                               <li class="nobullet">
                               <img class="icon2" src="<?php bloginfo('template_directory'); ?>/images/twitter_16.png" alt="Follow Me!" width="12" height="12" />
                               <a href="http://twitter.com/<?php echo $twit_user_name;  ?>">  Follow on Twitter </a>
                               </li>
                               
                               <!--Facebook -->
                               <?php $fac_user_name="#" ?><?php if (get_settings('pov_facebook_user_name')) { $fac_user_name = get_settings('pov_facebook_user_name') ; } ?>
                               <li class="nobullet">
                               <img class="icon2" src="<?php bloginfo('template_directory'); ?>/images/facebook_16.png" alt="Add Me!" width="12" height="12" />
                               <a href="http://facebook.com/<?php echo $fac_user_name;?>">  Add on Facebook </a>
                               </li>
<li class="nobullet" style="float:right"><?php wp_register("","");?></li>
										 </ul>
</div>
<!--Blog Description Text and Social Networks Links End-->



<!--Container Blog -->
<div id="container">

<!--Search Start -->
<div class="search" >
		  <?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div>
<!--Search End -->

<!--Menu Blog -->
<div class="open"><img class="icon2" src="<?php bloginfo('template_directory'); ?>/images/menu_16.png" alt="Add Me!" width="12" height="12" />Open Categories Menu </div>
<div id="wrap_container" >
                        <?php wp_nav_menu(array( 'fallback_cb' => 'display_categories' , 'menu' => 'primary-menu', 'container_class' => 'main-menu', 'container_id' => 'wrap', 'theme_location' => 'primary-menu' ) ); ?>

</div>

<!--Menu Blog end -->