<?php

// Enqueuing CSS 
function load_css() {
  wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/dist/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_css');


// Enqueuing JS
function load_js() {
  wp_register_script('bootstrap', get_template_directory_uri() . '/bootstrap/dist/js/bootstrap.min.js', array(), false, true);
  wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

?>