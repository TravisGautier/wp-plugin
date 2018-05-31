<?php
/**
 * Template Name: Slim Page
 *
 *
 * @package CryptoRun
 * @since Version 1.0
 */
?>

<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
			</div><!--.col-md-6-->
		</div><!--.row-->
	</div><!--.container-->
<?php get_footer(); ?>