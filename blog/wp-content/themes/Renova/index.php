<?php get_header(); ?>

<!--Content Start-->
<div id="content" >


<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php if (is_sticky()) {?>  
<!--Sticky Post Start-->
<div class="first-post sticky" >
 								
                        <!-- Post Time Info , Category and Comments Start-->
                        <div class="info_index">
                        
                        
                        <div class="info_time">
                        <?php the_time('j') ?>
                        <?php the_time(' F ') ?>
                        </div>
                        
                        <div class="info_category"> Posted in
                        <?php the_category(', ') ?>
                        
                        </div>
                        
                        <div class="info_sticky">
                        In evidence
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
                        <div class="first-post-text">
                        <?php the_excerpt('excerpt_length', 'new_excerpt_length'); ?>
                        </div>
                        <!-- Text End-->

</div>
<!--Sticky Post End-->
<?php } else { ?>
<!--First Post Start-->
<div class="first-post">
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
                        <div class="first-post-text">
                        <?php the_excerpt('excerpt_length', 'new_excerpt_length'); ?>
                        </div>
                        <!-- Text End-->

</div>
<!--First Post End-->
<?php } ?>
<?php endwhile; else: ?>
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
