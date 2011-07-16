<?php get_header(); ?>

<!--Content Start-->
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--Page Start-->
<div class="post" id="post-<?php the_ID(); ?>">

                                <h1 class="titlepage"><!--Title Start -->
                                <?php the_title(); ?>
                                </h1><!--Title End -->
                                
                                <!--Facebook Like and Tweet Button Div Start -->
                                <div id="post_social">
                                <ul>
                                <li ><!--Tweet Button -->
                                <div class="retweet"><a href="http://twitter.com/share?<?php the_permalink() ?>" class="twitter-share-button" data-count="horizontal" data-via="llowit">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script> </div>
                                </li>
                                
                                <li style="float:left;"> <!--Facebook Like Button -->
                                <iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>& layout=standard&amp&show_faces=false&amp&width=450&amp&action=like&amp&colorscheme=light&amp&height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:35px;" allowTransparency="true"></iframe>
                                </li>
                                </ul>
                                </div>
                                <!--Facebook Like and Tweet Button Div End -->
                                
                                <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                                <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>
<!--Page End-->
<?php endwhile; endif; ?>
</div>
<!--Content End-->
<?php get_footer(); ?>