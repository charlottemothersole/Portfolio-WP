<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_action('wp_enqueue_scripts', 'charlotte_scripts');

function my_theme_enqueue_styles() {
 
    wp_enqueue_style( 'charlotte', get_template_directory_uri() . '/style.css' );
}

function charlotte_scripts() {
wp_enqueue_script('script',get_template_directory_uri(). '/script.js',);
}

//setting featured image function for posts
if(function_exists('add_theme_support')) {
add_theme_support('post-thumbnails');
set_post_thumbnail_size('category-thumbnail');

add_image_size('category-hero',300,9999);
add_image_size('category-thumbnail',200,200,array('left','top'));

}

/*to filter number of words in excerpt*/
function wpdocs_custom_excerpt_length($length) {
  return 40;
}
add_filter('excerpt_length','wpdocs_custom_excerpt_length');

/*to filter 'read more' suffix on excerpt*/
function wpdocs_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

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