<?php get_header(); ?>

<!--Content Start-->
<div id="content">
        <!--Current Browsing Title Start-->
        <div id="currentbrowsing">
        <h1>Posts founded for</h1>
        <h2>
        <?php the_search_query(); ?>
        </h2>
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
                                </li>
                                <li class="com_left">
                                <?php comments_popup_link('0 ', '1 ', '%  '); ?>
                                </li>
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
        
        
        <?php endwhile; ?>
        <?php else : ?>
        <p>No matching criteria. Please try a different search, or maybe browse through our most recent posts in the footer.</p>
        <?php endif; ?>
        
        <!--Navigation Post Link Start -->
        <div id="navigation">
        <div class="nextright"><?php previous_posts_link('New Entries &raquo;') ?></div>
        <div class="prevleft"><?php next_posts_link(' &laquo; Older Entries','') ?></div>
        </div>
        <!--Navigation Post Link Start -->
                 
</div>
<!--Content End-->
<?php get_footer(); ?>
