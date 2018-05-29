<?php if ( have_posts()) : ?>                        <!--Retrieve dynamic content from post-->
	<?php while ( have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
<?php endif; ?>
