<?php get_header(); ?>

<!--Content Start-->
<div id="content">
		  <!--Current Browsing Title Start-->
        <div id="currentbrowsing">
                <h1>Currently Browsing</h1>
                <?php if (have_posts()) : ?>
                <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                <?php /* If this is a category archive */ if (is_category()) { ?>
                <h2>
                        <?php single_cat_title(); ?>
                </h2>
                <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                <h2>Posts Tagged &#8216;
                        <?php single_tag_title(); ?>
                        &#8217;</h2>
                <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                <h2>
                        <?php the_time('F jS, Y'); ?>
                </h2>
                <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                <h2>
                        <?php the_time('F, Y'); ?>
                </h2>
                <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                <h2>
                        <?php the_time('Y'); ?>
                </h2>
                <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                <h2>Author Archive</h2>
                <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <h2>Blog Archives</h2>
                <?php } ?>
        </div>
        <!--Current Browsing Title End-->
        
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        
        <!--Archive Post Start-->
        <div class="archive-post">
        
                <!-- Post Time Info , Category and Comments Start-->
                <div class="info_index">
                        <div class="info_time">
                                <?php the_time('j') ?>
                                <?php the_time(' F ') ?>
                        </div>

                        <div class="info_category"> Posted in
                                <?php the_category(', ') ?>

                			</div>
       		   </div>
               
                <div class="comments" >
                <?php comments_popup_link('0 ', '1 ', '%  '); ?>
                </div>
                
                <!-- Post Time Info , Category, Tags End-->
                
                <!-- Title Start-->
        			 <h1> <a  href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                <?php the_title(); ?>
                </a>  </h1>
                <!-- Title End-->
                
                <!-- Text Start-->
                <div class="archive-post-text">
                        <?php the_excerpt('excerpt_length', 'new_excerpt_length'); ?>
                </div>
                <!-- Text End-->
                
        </div>
        <!--Archive Post End-->
        
        <?php comments_template(); ?> <!--Comments-->
        <?php endwhile; else: ?>
        <h1>Not Found</h1>
        <p>
                <?php _e('Sorry, no posts matched your criteria.'); ?>
        </p>
        <?php endif; ?>

		  <!--Navigation Post Link Start -->
        <div id="navigation">
        <div class="nextright"><?php previous_posts_link('New Entries &raquo;') ?></div>
        <div class="prevleft"><?php next_posts_link(' &laquo; Older Entries','') ?></div>
        </div>
         <!--Navigation Post Link Start -->
        
        <?php endif; ?>
</div>
<!--Content End-->
<?php get_footer(); ?>
