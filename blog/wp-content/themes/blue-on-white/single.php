<?php get_header(); ?>

<div id="bd" class="single">
<div id="yui-main"><div class="yui-b">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	</div>
<div class="post-date"><span class="post-month"><?php the_time('M') ?></span> <span class="post-day"><?php the_time('d') ?><br />
<?php the_time('Y') ?></span></div>
	<div class="post-wrap" id="post">
		<h1 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<div class="story-content">
			<?php the_content(); ?>
			</div>
		<div class="metawrap">
		<p>
			<?php the_tags('tags: ', ', ', '<br />'); ?>
			posted by <?php the_author() ?>
			<?php edit_post_link('Edit', ' | ', ''); ?>
		</p>
		<p class="interact"><?php if('open' == $post->comment_status || 'open' == $post->ping_status) { _e(' Follow comments via the '); comments_rss_link('RSS Feed'); } if('open'==$post->comment_status) { ?> | <a href="#respond"><?php _e('Leave a comment'); ?></a> <?php } if('open' == $post->ping_status) { ?>| <a href="<?php trackback_url(true); ?>">Trackback URL</a> <?php } ?></p>
		</div>
	</div>
<?php comments_template(); endwhile; else: ?>
		<h2 class="post-title"><?php _e('Not Found'); ?></h2>
		<p class="center"><?php _e("Sorry, but the post you are looking for couldn't be found. Please check your URL again."); ?></p>
		<?php @include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>