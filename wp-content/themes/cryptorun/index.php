<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <style>
            .jumbotron{
                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#b4e391+0,61c419+50,b4e391+100;Green+3D */
                background: #b4e391; /* Old browsers */
                background: -moz-linear-gradient(top, #b4e391 0%, #61c419 50%, #b4e391 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(top, #b4e391 0%,#61c419 50%,#b4e391 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to bottom, #b4e391 0%,#61c419 50%,#b4e391 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b4e391', endColorstr='#b4e391',GradientType=0 ); /* IE6-9 */
                color:white;
            }
        </style>
	    <?php wp_head(); ?>                                      <!--Important function for integration-->
    </head>
    <body>
        <div class="jumbotron">                                  <!--Jumbotron-->
            <div class="container text-center">
                 <h1>Welcome To Our Custom Site</h1>
            </div>
        </div>
        <div class="container">
            <?php if ( have_posts()) : ?>                        <!--Retrieve dynamic content from post-->
                <?php while ( have_posts()) : the_post(); ?>     <!--While there are posts, go through each post-->
                    <?php the_title(); ?>
                    <?php the_content(); ?>                      <!--Retrieve the title and content of the post-->
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_footer(); ?>                                <!--Footer-->
        </div>
    </body>
</html>