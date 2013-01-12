<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Happy_Homes
 * @since Happy Homes 1.0
 */

get_header(); ?>

            <div class="pageBodyTop">
                <div class="pageBodyBtm">
                    <div class="pageBodyMid">
                        <div class="pageBodyBgTop">
                            <div class="pageBodyBgBtm">
                            	<div class="singleContentWrap">
                                    <?php while ( have_posts() ) : the_post(); ?>
                                        <div class="wrapper">
                                            <?php get_template_part( 'content', 'page' ); ?>
                                        </div><!--end of wrapper-->
                                    <?php endwhile; // end of the loop. ?>
                                    <div class="clear"></div><!--end of clear-->
                                </div><!--end of singleContentWrap-->
                            </div><!--end of pageBodyBgBtm-->
                        </div><!--end of pageBodyBgTop-->
                    </div><!--end of pageBodyMid-->
                </div><!--end of pageBodyBtm-->
            </div><!--end of pageBodyTop-->
        </div><!--end of page-->

<?php get_footer(); ?>