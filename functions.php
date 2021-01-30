<?php

/* ------------------------------------------------------------------------ */
/* Load scripts and styles                                                  */
/* ------------------------------------------------------------------------ */

// Stylesheets
function tsb_styles(){
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', '', '5.0.0-beta1', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri(), '', '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'tsb_styles', 1 );

// Scripts
function tsb_scripts(){
    wp_enqueue_script( 'bootstap', get_template_directory_uri() . '/js/bootstrap.js', '', '5.0.0-beta1', true);
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/script.js', '', null, true);
}
add_action( 'wp_enqueue_scripts', 'tsb_scripts', 1 );

/* ------------------------------------------------------------------------ */
/* Setup theme images                                                       */
/* ------------------------------------------------------------------------ */

add_theme_support( 'post-thumbnails' );

/* ------------------------------------------------------------------------ */
/* Security stuff                                                           */
/* ------------------------------------------------------------------------ */

// Removes comments from post and pages
function tsb_remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
	remove_post_type_support( 'page', 'comments' );
	wp_deregister_script( 'comment-reply' ); 
}
add_action('init', 'tsb_remove_comment_support', 100);

// Remove comments from the admin area
function tsb_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'tsb_remove_admin_menus' );

function tsb_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('notes');
  }
  add_action( 'wp_before_admin_bar_render', 'tsb_admin_bar_render' );


/* ------------------------------------------------------------------------ */
/* Misc Admin stuff                                                         */
/* ------------------------------------------------------------------------ */

// Add custom footer to the admin area
function TSB_modify_footer_admin () {
	echo 'Developed by <a href="https://tonyedwardspz.co.uk">Tony Edwards</a> | ';
	echo 'For <a href="https://thatseagullbob.co.uk">That Seagull Bob</a> | ';
}
add_filter('admin_footer_text', 'TSB_modify_footer_admin');

?>
