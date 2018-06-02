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
           <div class="col-md-8"
        <?php if ( have_posts()) : ?>                        <!--Retrieve dynamic content from post-->
            <?php while ( have_posts()) : the_post(); ?>     <!--While there are posts, go through each post-->
                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                <?php the_content(); ?>                      <!--Retrieve the title and content of the post-->
            <?php endwhile; ?>
        <?php endif; ?>
       </div>

        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div><!--.col=md-4-->
    </div><!--.row-->
    </div><!--.container-->
<?php get_footer();?>