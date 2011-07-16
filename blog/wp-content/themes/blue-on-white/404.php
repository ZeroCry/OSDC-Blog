<?php get_header(); ?>

<div id="bd" class="notfound">
<div id="yui-main"><div class="yui-b">
	<h2 class="post-title"><?php _e('404 - Page Not Found'); ?></h2>
	<p><?php _e('Try use the search box below.'); ?></p>
	<?php @include(TEMPLATEPATH . '/searchform.php'); ?>
</div>
</div>
<?php get_footer(); ?>