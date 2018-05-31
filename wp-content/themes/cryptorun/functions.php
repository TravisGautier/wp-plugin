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
?>
