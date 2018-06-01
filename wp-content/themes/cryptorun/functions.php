<?php
function enqueue_cryptorun_styles() {           //loading in style sheets
	wp_enqueue_script( 'bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
	wp_enqueue_style("cryptorun-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "enqueue_cryptorun_styles");

function cryptorun_setup(){
	register_nav_menus(array("primary" => __( "Primary Menu", "cryptorun"))); //register a custom primary navigation menu
	add_theme_support( "title-tag");                                  //add theme support for document title tag
}
add_action("after_setup_theme", "cryptorun_setup");

function cryptorun_widgets() {                  //register a custom widget
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'cryptorun' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in the sidebar', 'cryptorun' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	) );
}
add_action( 'widgets_init', 'cryptorun_widgets' );

function three_columns( $atts , $content = null ) {
	return '<div class="col-sm-4">' . $content . '</div>';
}
add_shortcode( 'one_third', 'three_columns');
?>