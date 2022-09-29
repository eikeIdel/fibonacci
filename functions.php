<?php
function stylos(){
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action( 'wp_head', 'stylos' );
?>