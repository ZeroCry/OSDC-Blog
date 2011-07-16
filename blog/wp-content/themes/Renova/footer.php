<!--Don't Touch This-->
<?php global $options;
foreach ($options as $value) {
if (get_option( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); } }
?>

<!--Include SubFooter-->
<?php if ($pov_disubfooter== "true") { } else { ?>
<?php include(TEMPLATEPATH."/sidebar.php");?>
<?php } ?>
<!--Include SubFooter End-->


<!--Footer-->
<div id="footer"  >

                            <h1 class="right">
                            <img class="icon2" src="<?php bloginfo('template_directory'); ?>/images/wordpress_16.png" alt="Subscribe!" width="8" height="8" /> 
                            <a href="http://www.wordpress.org"> Wordpress </a> - Template: <a href="http://renova.llow.it">Renova</a> - 
                            
                            <!--Credit Link-->
									 <?php if ($pov_discredit== "true") { } else { ?>
                            Design by: <a href="http://www.llow.it">llowit</a> 
                            <?php } ?> 
                            <!--Credit Link End-->          
                            
                            </h1>

                				 <!--Text License-->
                            <h1>
                            <?php $footer_license="Insert Here your tipology of license" ?>
                            <?php if (get_option('pov_footer_license')) { $footer_license = get_option('pov_footer_license') ; } ?>
                            <a><?php echo date("Y"); ?>
                            <?php bloginfo('name'); ?>
                            </a> <?php echo $footer_license; ?> </h1>            
              					 <!--Text License End-->
                

						<ul>
                               <!--Feedburner -->
										 <?php $feedburner_account="#" ?><?php if (get_settings('pov_feedburner_account')) { $feedburner_account = get_settings('pov_feedburner_account') ; } ?>
                               <li class="nobullet">
                               <img class="icon2" src="<?php bloginfo('template_directory'); ?>/images/rss_16.png" alt="Subscribe!" width="8" height="8" />
                               <a href="http://feeds.feedburner.com/<?php echo $feedburner_account ?>"> Subscribe  </a>
                               </li>
                               
                               <!--Twitter -->
                               <?php $twit_user_name="#" ?><?php if (get_settings('pov_twitter_user_name')) { $twit_user_name = get_settings('pov_twitter_user_name') ; } ?>
                               <li class="nobullet">
                               <img class="icon2" src="<?php bloginfo('template_directory'); ?>/images/twitter_16.png" alt="Follow Me!" width="8" height="8" />
                               <a href="http://twitter.com/<?php echo $twit_user_name;  ?>">  Follow on Twitter </a>
                               </li>
                               
                               <!--Facebook -->
                               <?php $fac_user_name="#" ?><?php if (get_settings('pov_facebook_user_name')) { $fac_user_name = get_settings('pov_facebook_user_name') ; } ?>
                               <li class="nobullet">
                               <img class="icon2" src="<?php bloginfo('template_directory'); ?>/images/facebook_16.png" alt="Add Me!" width="8" height="8" />
                               <a href="http://facebook.com/<?php echo $fac_user_name;?>">  Add on Facebook </a>
                               </li>
                </ul>


</div> 
<!--Footer End-->

</div>
<!--Container End-->

</div>

<!--Google Analytics From Dashboard-->
<?php 
$pov_google_analytics = get_option('pov_google_analytics');
if ($pov_google_analytics != '') { echo stripslashes($pov_google_analytics); }
?>
<?php wp_footer(); ?>
<!--Google Analytics From Dashboard End-->



</body>

</html>