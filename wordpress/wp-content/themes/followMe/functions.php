<?php
function followLuciana_register_styles(){

    wp_enqueue_style('followLuciana-bootstrap', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'followLuciana_register_styles');
?>