<?php
/**
 * The Template for displaying all single posts.
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

					<nav id="nav-single">
                        <h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
                        <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Prev', 'twentyeleven' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
                        <div class="clear"></div><!--end of clear-->
					</nav><!-- #nav-single -->

                    <div class="wrapper">
					   <?php get_template_part( 'content', 'single' ); ?>
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