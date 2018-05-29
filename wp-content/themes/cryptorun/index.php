<!doctype html>
<html>
    <head>
        <title>CryptoRun Theme</title>
    </head>
    <body>
        <?php if ( have_posts()) : ?>                        <!--Retrieve dynamic content from post-->
            <?php while ( have_posts()) : the_post(); ?>     <!--While there are posts, go through each post-->
                <?php the_title(); ?>
                <?php the_content(); ?>                      <!--Retrieve the title and content of the post-->
            <?php endwhile; ?>
        <?php endif; ?>
    </body>
</html>