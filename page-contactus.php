<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
            <div class="pageBodyTop">
                <div class="pageBodyBtm">
                    <div class="pageBodyMid">
                        <div class="pageBodyBgTop">
                            <div class="pageBodyBgBtm">
                            	<div class="singleContentWrap">
                                    <?php while ( have_posts() ) : the_post(); ?>
                                        <div class="wrapper contactPage">
                                            <header class="entry-header">
                                                <h1 class="entry-title"><?php the_title(); ?></h1>
                                            </header>
                                            <div class="leftWrap">
                                                <?php the_content(); ?>
                                            </div><!--end of leftWrap-->
                                            <div class="rightWrap">
                                                <?php echo do_shortcode( '[contact-form-7 id="152" title="Limbros Realty"]' ); ?>
                                            </div><!--end of rightWrap-->
                                            <div class="clear"></div><!--end of clear-->
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