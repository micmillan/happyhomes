<?php
/*
Template Name: News & Updates
*/
?>
<?php get_header(); ?>
            <div class="pageBodyTop">
                <div class="pageBodyBtm">
                    <div class="pageBodyMid">
                        <div class="pageBodyBgTop">
                            <div class="pageBodyBgBtm">
                                <div class="singleContentWrap newsUpdates">
                                    <div class="wrapper">
                                        <h1>Latest News & Updates</h1>
                                        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                        query_posts('cat=9&posts_per_page=5&paged='.$paged);
                                        while ( have_posts() ) : the_post(); ?>
                                        <div class="postTopWrap">
                                            <div class="postBtmWrap">
                                                <div class="postMidWrap">
                                                    <div class="postDate">
                                                        <p class="date"><?php the_time('d') ?></p>
                                                        <p class="month"><?php the_time('M') ?></p>
                                                        <p class="year"><?php the_time('Y') ?></p>
                                                    </div><!--end of postDate-->
                                                    <h3><?php the_title() ?></h3>
                                                    <p class="postedBy">posted by <span>Limbros Realty <?php the_author(); ?></span></p>
                                                    <?php echo content(100); ?>
                                                </div><!--end of postMidWrap-->
                                                <div class="postReadMore">
                                                    <a href="<?php echo get_permalink(); ?>">Read More</a>
                                                </div><!--end of postReadMore-->
                                            </div><!--end of postBtmWrap-->
                                        </div><!--end of postTopWrap-->
                                        <?php endwhile; ?>

                                        <div class="postPagination">
                                            <div class="postButton_leftWrap">
                                                <?php previous_posts_link( '&larr; Newer Updates' ); ?>
                                            </div><!--end of postButton_leftWrap-->
                                            <div class="postButton_rightWrap">
                                                <?php next_posts_link( 'Older Updates &rarr;' ); ?>
                                            </div><!--end of postButton_rightWrap-->
                                            <div class="clear"></div><!--end of clear-->
                                        </div><!--end of postPagination-->
                                    </div><!--end of wrapper-->
                                </div><!--end of singleContentWrap-->
                            </div><!--end of pageBodyBgBtm-->
                        </div><!--end of pageBodyBgTop-->
                    </div><!--end of pageBodyMid-->
                </div><!--end of pageBodyBtm-->
            </div><!--end of pageBodyTop-->
        </div><!--end of page-->

<?php get_footer(); ?>