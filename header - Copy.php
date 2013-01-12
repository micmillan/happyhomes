<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Happy_Homes
 * @since Happy Homes 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if IE]>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style_ie.css" />
    <![endif]-->
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
    <div class="bgWrapper1">
    	<div id="page">
        	<div id="header">
            	<div class="headerLeftWrap">
                	<a href="http://www.limbrosrealty.com" target="_parent" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logoLimbros.png" alt="Limbros Realty" width="170" height="88" /></a>
                </div><!--end of headerLeftWrap-->
            	<div class="headerRightWrap">
                	<div class="dateWrap">
                    	<p><?php echo date('l, jS F Y'); ?></p>
                    </div><!--end of dateWrap-->
                    <div class="searchWrap"></div><!--end of searchWrap-->
                    <div class="socialMedia">
                    	<ul>
                        	<li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/iconFacebook.png" alt="Facebook" width="27" height="27" /></a></li>
                        	<li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/iconTwitter.png" alt="Twitter" width="27" height="27" /></a></li>
                        	<li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/iconYouTube.png" alt="YouTube" width="26" height="27" /></a></li>
                        	<li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/iconRss.png" alt="RSS" width="27" height="27" /></a></li>
                        </ul>
                    </div><!--end of socialMedia-->
                    <div class="clear"></div><!--end of clear-->
                    <div class="callAction">
                    	<p>CALL US TODAY!</p>
                        <div class="callNum">
                            <p>422-1000 <span>|</span> 422-9000</p>
                        </div><!--end of callNum-->
                        <div class="clear"></div><!--end of clear-->
                    </div><!--end of callAction-->
                    <div class="clear"></div><!--end of clear-->
                </div><!--end of headerRightWrap-->
                <div class="clear"></div><!--end of clear-->
            </div><!--end of header-->
            <div class="pageHeaderTop">
                <div class="pageHeaderBtm">
                    <div class="pageHeaderMid">
                        <div id="topNav">
                            <nav id="access" role="navigation">
                                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                            </nav>
                        </div><!--end of topNav-->
                        <div class="slideWrapper">
                            <?php if (function_exists("easing_slider")){ easing_slider(); }; ?>
                        </div><!--end of slideWrapper-->
                        <div class="threeColWrap">
                            <div class="column clr_marleft">
                                <?php $recent = new WP_Query("page_id=46"); while($recent->have_posts()) : $recent->the_post();?>
                                    <a href="?page_id=46" class="readmore">read more...</a>
                                    <h4><span>The</span>&nbsp;<?php the_title(); ?></h4>
                                    <?php 
                                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                          the_post_thumbnail();
                                        } 
                                    ?>
                                    <?php echo content(18); ?>
                                <?php endwhile; ?>
                            </div><!--end of column-->
                            <div class="column">
                                <?php $recent = new WP_Query("page_id=51"); while($recent->have_posts()) : $recent->the_post();?>
                                    <a href="?page_id=51" class="readmore">read more...</a>
                                    <h4><span>The</span>&nbsp;<?php the_title(); ?></h4>
                                    <?php 
                                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                          the_post_thumbnail();
                                        } 
                                    ?>
                                    <?php echo content(18); ?>
                                <?php endwhile; ?>
                            </div><!--end of column-->
                            <div class="column">
                                <?php $recent = new WP_Query("page_id=49"); while($recent->have_posts()) : $recent->the_post();?>
                                    <a href="?page_id=49" class="readmore">read more...</a>
                                    <h4><span>The</span>&nbsp;<?php the_title(); ?></h4>
                                    <?php 
                                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                          the_post_thumbnail();
                                        } 
                                    ?>
                                    <?php echo content(18); ?>
                                <?php endwhile; ?>
                            </div><!--end of column-->
                            <div class="clear"></div><!--end of clear-->
                        </div><!--end of threeColWrap-->
                    </div><!--end of pageHeaderMid-->
                </div><!--end of pageHeaderBtm-->
            </div><!--end of pageHeaderTop-->