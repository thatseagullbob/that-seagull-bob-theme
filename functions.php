<?php

// Load the main stylesheet
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', '', '5.0.0-beta1', 'all' );
wp_enqueue_style( 'style', get_stylesheet_uri(), '', '1.0.0' );

// Load the JS scripts
wp_enqueue_script( 'bootstap', get_template_directory_uri() . '/js/bootstrap.js', '', '5.0.0-beta1', true);
wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/script.js', '', null, true);
?>
