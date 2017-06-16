<?php
function register_styles() {
	wp_register_style ( 'style', get_stylesheet_directory_uri () . '/style.css' );
	wp_enqueue_style ( 'style' );
}

add_action ( 'wp_enqueue_scripts', 'register_styles' );
function load_my_script() {
	// нет нужды отдельно скрипт регистриовать, а так всё круто https://developer.wordpress.org/reference/functions/wp_enqueue_script/
	// jquery же комплекте, просто указываешь от него зависимость
	$js_uri = get_stylesheet_directory_uri () . '/js/';
	wp_enqueue_script ( 'watch', $js_uri . 'watch.js' );
	wp_enqueue_script ( 'bootstrap', $js_uri . 'bootstrap.js', array (
			'jquery' 
	) );
	wp_enqueue_script ( 'jqueryval', $js_uri . 'jquery.validate.js', array (
			'jquery' 
	) );
	wp_enqueue_script ( 'bootstrap', $js_uri . 'owl.carousel.js', array (
			'jquery' 
	) );
	wp_enqueue_script ( 'wow', $js_uri . 'wow.js', array (
			'jquery' 
	) );
	wp_enqueue_script ( 'carousel', $js_uri . 'owl.carousel.js', array (
			'jquery' 
	) );
	
	wp_enqueue_script ( 'jquerymask', $js_uri . 'jquery.maskedinput.js', array (
			'jquery' 
	), false, true );
	wp_enqueue_script ( 'my', $js_uri . 'my.js', array (
			'jquery' 
	), false, true );
}

add_action ( 'wp_enqueue_scripts', 'load_my_script' );

add_theme_support ( 'post-thumbnails' ); 