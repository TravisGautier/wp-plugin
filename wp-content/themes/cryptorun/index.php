<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	    <?php wp_head(); ?>                                      <!--Important function for integration-->
    </head>
    <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div><!--.navbar-header-->
            <div class="collapse navbar-collapse" id="bs=example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>   
                </ul>
            </div><!--.collapse navbar-collapse-->
        </div><!--.container-fluid-->
    </nav>
        <div class="jumbotron">                                  <!--Jumbotron-->
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
            <?php wp_footer(); ?>                                <!--Footer-->
        </div><!--.container-->
    </body>
</html>