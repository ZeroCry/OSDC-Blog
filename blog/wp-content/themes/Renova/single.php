<?php get_header(); ?>

<!--Content Start-->
<div id="content">
								<?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                                        <!--Single Post Start -->
                                        <div id="post">
                                        
                                        <h1> <!--Title Start -->
                                        <a class="corner" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                        <?php the_title(); ?>
                                        </a>
                                        </h1> <!--Title End -->
                                        
                                        <!--Edit Class Start -->
                                        <div class="edit">
                                        <ul>
                                        
                                        <li>    <?php the_time('j') ?>
                                        <?php the_time('F') ?>,
                                        <?php the_time('Y') ?>
                                        - </li>
                                        <li>
                                        <?php the_category(', ') ?>
                                        - </li>
                                        <li>Tags :
                                        <?php the_tags(' ', ', ', ' '); ?>
                                        </li>
                                        <li class="com_left">
                                        <?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>
                                        </li>
                                        </ul>
                                        </div>
                                        <!--Edit Class End -->
                                        
                                        <!--Facebook Like and Tweet Button Div Start -->
                                        <div id="post_social">
                                        <ul>
                                        <li ><!--Tweet Button -->
                                        <div class="retweet"><a href="http://twitter.com/share?<?php the_permalink() ?>" class="twitter-share-button" data-count="horizontal" >Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script> </div>
                                        </li>
                                        
                                        <li style="float:left;"> <!--Facebook Like Button -->
                                        <iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>& layout=standard&amp&show_faces=false&amp&width=450&amp&action=like&amp&colorscheme=light&amp&height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:35px;" allowTransparency="true"></iframe>
                                        </li>
                                        </ul>
                                        </div>
                                        <!--Facebook Like and Tweet Button Div End -->
                                        
                                        
                                        
                                        <?php the_content();  ?>
                                        </div>
                                        <!--Single Post End -->



<!--Post Author Bio Start -->
<div id="author-info" class="corner">
<div> <a href="<?php the_author_meta('user_url'); ?>"> <?php echo get_avatar( get_the_author_meta('user_email'), '60', '' ); ?></a> </div>
<div id="author-bio">
<h5>Posted By
<?php the_author_link(); ?>
</h5>
<p>
<?php the_author_meta('description'); ?>
</p>
</div>
</div>
<!--Post Author Bio End -->



<!--Navigation Post Link Start -->
<div id="post_navigation">
<div class="nextpostright" > Next Post:  <?php next_post_link('<strong>%link</strong>'); ?> >>  </div>
<div class="prevpostleft" > << Previous Post: <?php previous_post_link('<strong>%link</strong>'); ?>  </div>
</div>
<!--Navigation Post Link End -->


<?php comments_template(); ?> <!--Comments -->
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


</div>
<!--Content End-->

<?php get_footer(); ?>