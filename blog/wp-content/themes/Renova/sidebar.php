<!--Don't Touch This-->
<?php global $options;
foreach ($options as $value) {
if (get_option( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); } }
?>

      
<!-- Subfooter Start -->
<div id="subfooter">

                <div id="widget1">
                        <?php if ( !function_exists('dynamic_sidebar')
			|| !dynamic_sidebar('widget1') ) : ?>
                        <?php endif; ?>
                </div>
                <div id="widget2">
                        <?php if ( !function_exists('dynamic_sidebar')
				|| !dynamic_sidebar('widget2') ) : ?>
                        <?php endif; ?>
                </div>
                <div id="widget3">
                        <?php if ( !function_exists('dynamic_sidebar')
				|| !dynamic_sidebar('widget3') ) : ?>
                        <?php endif; ?>
                </div>
                <div id="widget4">
                        <?php if ( !function_exists('dynamic_sidebar')
				|| !dynamic_sidebar('widget4') ) : ?>
                        <?php endif; ?>
                </div>
 
</div>
<!-- Subfooter End -->
        
       
        

