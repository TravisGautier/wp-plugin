<?php
/**
 * The template for displaying the sidebar
 *
 * Contains the sidebar display loop.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Cryptorun
 * @since 1.0
 * @version 1.2
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1')) : ?>                        <!--Display the sidebars-->
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside>
<?php endif; ?>