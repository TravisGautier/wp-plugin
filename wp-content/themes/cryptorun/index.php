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
    <div class="jumbotron gradient-bg margin-neg-20">                                  <!--Jumbotron-->
        <div class="container text-center">
             <h1>Welcome To Our Custom  Site</h1>
        </div>
    </div><!--.jumbotron-->

    <div class="container">
        <?php if ( have_posts()) : ?>                        <!--Retrieve dynamic content from post-->
            <?php while ( have_posts()) : the_post(); ?>     <!--While there are posts, go through each post-->
                <?php the_title(); ?>
                <?php the_content(); ?>                      <!--Retrieve the title and content of the post-->
            <?php endwhile; ?>
        <?php endif; ?>

        <?php get_sidebar(); ?>
    </div><!--.container-->
<?php get_footer();?>