<?php
/**
 * Template Name: Home Page
 *
 *
 * @package CryptoRun
 * @since CryptoRun 1.0
 */
?>

<?php get_header(); ?>

<div class="jumbotron gradient-bg margin-neg-20">                                  <!--Jumbotron-->
	<div class="container text-center">
		<h1>Welcome To Our Custom  Site</h1>
	</div>
</div><!--.jumbotron-->

<div class="container">
	<div class="row">
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>

				<?php endwhile; ?>

			<?php endif; ?>
	</div><!--.row-->
</div><!--.container-->

<?php get_footer(); ?>
