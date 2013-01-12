<?php
/**
 * Template Name: Sidebar Template
 * Description: A Page Template that adds a sidebar to pages
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
				<?php get_sidebar(); ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

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