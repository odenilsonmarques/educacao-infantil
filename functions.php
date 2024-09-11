<?php

function load_scripts(){
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), 1.0, 'all');
    wp_enqueue_style('bootstrap-min', get_template_directory_uri(). '/assets/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-min', get_template_directory_uri(). '/assets/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'load_scripts');


