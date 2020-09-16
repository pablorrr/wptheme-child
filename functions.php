<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'main-child-style', get_stylesheet_directory_uri() . '/style.css');
   //wp_enqueue_style( 'wptheme-child-style', get_stylesheet_directory_uri() . '/css/wptheme-child.css');
   //wp_enqueue_style( 'bts-child-style', get_stylesheet_directory_uri() . '/css/bootstrap-child.css');
}