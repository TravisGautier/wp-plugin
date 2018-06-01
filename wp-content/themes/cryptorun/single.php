<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Cryptorun
 * @since 1.0
 * @version 1.0
 */
?>

<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-8">                                   <!--left main content bar-->
				<?php if ( have_posts()) : ?>                        <!--Retrieve dynamic content from post-->
					<?php while ( have_posts()) : the_post(); ?>     <!--While there are posts, go through each post-->
						<?php get_template_part('template-parts/content', 'single'); ?>

						<?php
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
						?>
					<?php endwhile; ?>
				<?php endif; ?>

				<?php                                                //Blog post navigation
					if (is_singular( 'post')){
						the_post_navigation( array(
							'next_text' => 'Next',
							'prev_text' => 'Previous'
						));
					}
				?>
			</div><!--.col-md-8-->

			<div class="col-md-4">                                    <!--right sidebar-->
				<?php get_sidebar(); ?>
			</div><!--.col-md-4-->
		</div><!--.row-->
	</div><!--.container-->
<?php get_footer();?>