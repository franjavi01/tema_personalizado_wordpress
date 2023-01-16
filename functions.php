<?php

// Siguiendo la documentación: https://developer.wordpress.org/themes/basics/including-css-javascript/#combining-enqueue-functions

function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all' );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), 1.1, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// Incluyendo Bootstrap CSS

function bootstrap_css()
{
    wp_enqueue_style('bootstrap_css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '5.2.3');
}
add_action('wp_enqueue_scripts', 'bootstrap_css');


// Incluyendo Bootstrap JS

function bootstrap_js()
{
    wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '5.2.3', true);
}
add_action('wp_enqueue_scripts', 'bootstrap_js');


//Esto es para que el usuario ponga título en la pestaña del navegador

add_theme_support ('title-tag');


//Esto es para que el usuario eliga que pginas van al menú´.
//Fuente: https://developer.wordpress.org/reference/functions/register_nav_menus/

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'text_domain' ),
			'secondary_menu' => __('Secondary Menu', 'text_domain'),
	    	'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0);
}







