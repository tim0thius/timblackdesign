<?php
/* =========================================
 * Enqueues parent theme stylesheet
 * ========================================= */

function zozo_enqueue_child_theme_styles() {
	wp_enqueue_style( 'zozo-child-theme-style', get_stylesheet_uri(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'zozo_enqueue_child_theme_styles' );