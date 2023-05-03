<?php

/*
* Theme Functions.
*
* @package Antilla
*/

//function antilla_enqueue_scripts() {// wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), true);
//}
//add_action('wp_enqueue_scripts', 'antilla_enqueue_scripts');

if (!defined('ANTILLA_DIR_PATH')){
    define('ANTILLA_DIR_PATH', untrailingslashit(get_template_directory()));
}

require_once ANTILLA_DIR_PATH.'/inc/helpers/autoloader.php';

function antilla_get_theme_instance(){
    \ANTILLA_THEME\Inc\ANTILLA_THEME::get_instance();
}

antilla_get_theme_instance();

function antilla_enqueue_scripts() {
    
    // register Styles
    wp_register_style( 'stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_template_directory().'/style.css'), 'all' );
    wp_register_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );
    
    // Register Script
    wp_register_script( 'main-script', get_stylesheet_directory_uri() . '/assets/main.js', array(), filemtime(get_template_directory().'/assets/main.js'), true );
    wp_register_script( 'bootstrap-script', get_stylesheet_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true );
    
    //Enqueue Styles
    wp_enqueue_style('stylesheet');
    wp_enqueue_style('bootstrap');
    
    //Enqueue Script
    wp_enqueue_script('main-script');
    wp_enqueue_script('bootstrap-script');
}
add_action( 'wp_enqueue_scripts', 'antilla_enqueue_scripts' );
