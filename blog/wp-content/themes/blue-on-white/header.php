<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if ( is_single() ) { ?>
<title><?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>
<meta name="description" content="<?php wp_title(''); ?>" />
<meta name="keywords" content="<?php wp_title(''); ?>" />
<?php } ?>
<?php if ( ! is_single() ) { ?>
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="keywords" content="<?php bloginfo('description'); ?>" />
<?php } ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body>
<div align="center">
<div id="wrapper">
<div id="<?php yui_doc() ?>" class="<?php yui_secondary_column() ?>">
<div id="hd">
	<div id="sitemeta">
		<ul>
     			<?php wp_register(); ?>
     			<li><?php wp_loginout(); ?></li>
     			<?php wp_meta(); ?>
     			<li class="rss"><a href="<?php bloginfo('rss2_url'); ?>">Subscribe to articles using RSS Feed</a></li>
  		</ul>
	</div>
	<div id="titlewrapper">
		<div id="blogtitle">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		</div>
		<div id="menu">
			<ul>
				<li><div id="blogdescription"><?php bloginfo('description'); ?></div></li>
				<li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
				<?php wp_list_pages('title_li'); ?>
			</ul>
		</div>
	</div>
	<div class="clear">&nbsp;</div>

	<div class="clear">&nbsp;</div>
</div>

<div id="sidebar" class="yui-b">
<?php get_sidebar(); ?>
</div>
