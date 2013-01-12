<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Happy_Homes
 */

get_header(); ?>
            <div class="pageBodyTop">
                <div class="pageBodyBtm">
                    <div class="pageBodyMid">
                        <div class="pageBodyBgTop">
                            <div class="pageBodyBgBtm">
                                <?php get_sidebar(); ?>
                                <div class="rightContentWrap">
                                    <?php
                                        $post_id = 168;
                                        $queried_post = get_post($post_id);
                                        $title = $queried_post->post_title;
                                    ?>
                                    <h4 class="large"><?php echo $title; ?></h4>
                                    <div class="contentWrapping">
                                        <?php echo $queried_post->post_content; ?>
                                        <div class="clear"></div>
                                    </div>

                                    <?php
                                        $post_id = 175;
                                        $queried_post = get_post($post_id);
                                        $title = $queried_post->post_title;
                                    ?>
                                    <h4><?php echo $title; ?></h4>
                                    <div class="contentWrapping">
                                        <?php echo $queried_post->post_content; ?>
                                        <div class="clear"></div>
                                    </div>
                                    
                                    <?php get_sidebar('testimonials')?>
                                </div><!--end of rightContentWrap-->
                                <div class="clear"></div><!--end of clear-->
                            </div><!--end of pageBodyBgBtm-->
                        </div><!--end of pageBodyBgTop-->
                    </div><!--end of pageBodyMid-->
                </div><!--end of pageBodyBtm-->
            </div><!--end of pageBodyTop-->
        </div><!--end of page-->

<?php get_footer(); ?>
