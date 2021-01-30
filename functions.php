<?php

// Load the main stylesheet
wp_enqueue_style( 'style', get_stylesheet_uri() );

// Load the JS scripts
wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', '', null, true);

?>
