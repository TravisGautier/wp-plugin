<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Cryptorun
 * @since 1.0
 * @version 1.2
 */
?>

<footer id="site-footer">
    <div class="container">
    <span class="site-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <?php bloginfo( 'name' ); ?></a>
    </span>
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cryptorun' ) ); ?>">
            <?php printf( __( 'Proudly powered by %s', 'cryptorun' ), 'WordPress' ); ?>
        </a>
    </div>
</footer>

<?php wp_footer(); ?>                                <!--Footer-->
</body>
</html>