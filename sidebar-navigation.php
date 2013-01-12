<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Happy_Homes
 * @since Happy Homes 1.0
 */
?>
	<?php if ( is_active_sidebar( 'sidebar-navigation' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-navigation' ); ?>
	<?php endif; ?>