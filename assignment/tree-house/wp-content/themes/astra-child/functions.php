<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent' );

function enqueue_parent() {
    wp_enqueue_style('abc' , get_stylesheet_directory_uri().'/style.css');
}
?>