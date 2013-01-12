<?php
/*
Template Name: Testimonials
*/
?>
<?php get_header(); ?>
            <div class="pageBodyTop">
                <div class="pageBodyBtm">
                    <div class="pageBodyMid">
                        <div class="pageBodyBgTop">
                            <div class="pageBodyBgBtm">
                                <div class="singleContentWrap testimonials">
                                    <div class="testiWrapper">
                                        <h1>Testimonials</h1>
                                        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                        query_posts('cat=11&posts_per_page=4&paged='.$paged);
                                        while ( have_posts() ) : the_post(); ?>
                                        <div class="textBubble_TopWrap">
                                            <div class="textBubble_MidWrap">
                                                <?php the_content(); ?>
                                                <div class="clear"></div><!--end of clear-->
                                            </div><!--end of textBubble_MidWrap-->
                                            <div class="textBubble_BtmWrap">
                                                <?php 
                                                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                                      the_post_thumbnail();
                                                    } 
                                                ?>
                                                <h3><?php the_title() ?></h3>
                                                <p class="testiDate">Testimonial Date: <?php the_time('F j, Y') ?></p>
                                                <div class="clear"></div><!--end of clear-->
                                            </div><!--end of textBubble_BtmWrap-->
                                        </div><!--end of textBubble_TopWrap-->
                                        <?php endwhile; ?>

                                        <!-- then the pagination links -->
                                        <div class="testiPagination">
                                            <div class="testiButton_leftWrap">
                                                <?php previous_posts_link( '&larr; Newer Testimonials' ); ?>
                                            </div><!--end of testiButton_leftWrap-->
                                            <div class="testiButton_rightWrap">
                                                <?php next_posts_link( 'Older Testimonials &rarr;' ); ?>
                                            </div><!--end of testiButton_leftWrap-->
                                            <div class="clear"></div><!--end of clear-->
                                        </div><!--end of testiPagination-->
                                    </div><!--end of testiWrapper-->
                                </div><!--end of singleContentWrap-->
                            </div><!--end of pageBodyBgBtm-->
                        </div><!--end of pageBodyBgTop-->
                    </div><!--end of pageBodyMid-->
                </div><!--end of pageBodyBtm-->
            </div><!--end of pageBodyTop-->
        </div><!--end of page-->

<?php get_footer(); ?>