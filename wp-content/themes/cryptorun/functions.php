<?php
function enqueue_cryptorun_styles() {
	wp_enqueue_style("bootstrap", "//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css");
	wp_enqueue_style("cryptorun-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "enqueue_cryptorun_styles")
?>