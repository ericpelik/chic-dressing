<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );




 function dequeue_parent_fonts() {
    wp_dequeue_script('ashe-playfair-font');
    wp_dequeue_script('ashe-opensans-font');
    wp_dequeue_script('ashe-kalam-font');
    wp_dequeue_script('ashe-rokkitt-font');
 }

 add_action('wp_enqueue_scripts','dequeue_parent_fonts',999);

