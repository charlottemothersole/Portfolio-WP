<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_action('wp_enqueue_scripts', 'charlotte_scripts');

function my_theme_enqueue_styles() {
 
    wp_enqueue_style( 'charlotte', get_template_directory_uri() . '/style.css' );
}

function charlotte_scripts() {
wp_enqueue_script('script',get_template_directory_uri(). '/script.js',);
}


/*function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );
   */