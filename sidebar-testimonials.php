<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Happy_Homes
 * @since Happy Homes 1.0
 */
?>
	<?php if ( is_active_sidebar( 'sidebar-testimonials' ) ) : ?>
		<a href="?page_id=205" class="testiButton"><img src="<?php echo get_template_directory_uri(); ?>/images/button_testimonials.png" alt="Testimonials" /></a>
		<?php dynamic_sidebar( 'sidebar-testimonials' ); ?>
	<?php endif; ?>