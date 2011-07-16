<ul class="sidebar">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	<li id="search"><h2>Search</h2>
		<ul>
		<li>
			<?php @include(TEMPLATEPATH.'/searchform.php'); ?>
		</li>
		</ul>
	</li>
	<li id="followbox" class="widget"><h2 class="widgettitle">Follow Us</h2>
<iframe allowtransparency="true" frameborder="0" scrolling="no"
  src="http://platform.twitter.com/widgets/follow_button.html?screen_name=JIITOSDC&show_count=false"
  style="width:300px; height:20px;"></iframe>
</li>
	<li id="recentposts"><h2>Recent Articles</h2>
		<ul>
		<?php $postslist = get_posts('numberposts=5&order=DESC&orderby=date'); foreach ($postslist as $post) : setup_postdata($post);
		?> 
			<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a>
			</li>
		<?php endforeach; ?>
		</ul>
	</li>

		<li id="categories">
		<h2>Categories</h2>
			<ul>
			<?php wp_list_categories('title_li=&show_count=1') ; ?>
			</ul>
		</li>
	<li id="archives"><h2>Archives</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</li>
	<?php wp_list_bookmarks(); ?>

	<li id="tagcloud"><h2>Tag Cloud</h2>
		<ul>
			<li>
			<?php wp_tag_cloud('smallest=7&largest=9'); ?>
			</li>
		</ul>
	</li>
<?php endif; ?>
</ul>
