<<<<<<< HEAD
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
function zeng_register_menus() {
	register_nav_menus ( array (
			'mainMenu' => "Верхнее меню",
			'extraMenu' => "Дополнительное меню" 
	) );
}

// дополнительные настройки
function zeng_customize_register($wp_customize) {
	$wp_customize->add_setting ( 'phone_number', array (
			'default' => ''
	) );
	$wp_customize->add_setting ( 'slogan2', array (
			'default' => ''
	) );

	$wp_customize->add_section( 'zeng_params' , array(
			'title'      => "Школьные настройки",
			'priority'   => 10,
	) );

	$wp_customize->add_control ( new WP_Customize_Control ( $wp_customize, 'phone_number', array (
			'label' => "Номер телефона",
			'section'=>'zeng_params'
	) ) );
	$wp_customize->add_control ( new WP_Customize_Control ( $wp_customize, 'slogan2', array (
			'label' => "Слоган под меню",
			'section'=>'zeng_params'
	) ) );

}
add_action ( 'customize_register', 'zeng_customize_register' );

add_action ( 'init', 'zeng_register_menus' );

add_action ( 'wp_enqueue_scripts', 'load_my_script' );

=======
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
function zeng_register_menus() {
	register_nav_menus ( array (
			'mainMenu' => "Верхнее меню",
			'extraMenu' => "Дополнительное меню" 
	) );
}

// дополнительные настройки
function zeng_customize_register($wp_customize) {
	$wp_customize->add_setting ( 'phone_number', array (
			'default' => ''
	) );
	$wp_customize->add_setting ( 'slogan2', array (
			'default' => ''
	) );

	$wp_customize->add_section( 'zeng_params' , array(
			'title'      => "Школьные настройки",
			'priority'   => 10,
	) );

	$wp_customize->add_control ( new WP_Customize_Control ( $wp_customize, 'phone_number', array (
			'label' => "Номер телефона",
			'section'=>'zeng_params'
	) ) );
	$wp_customize->add_control ( new WP_Customize_Control ( $wp_customize, 'slogan2', array (
			'label' => "Слоган под меню",
			'section'=>'zeng_params'
	) ) );

}
add_action ( 'customize_register', 'zeng_customize_register' );

add_action ( 'init', 'zeng_register_menus' );

add_action ( 'wp_enqueue_scripts', 'load_my_script' );

>>>>>>> b964b6642f840c38ff9744951eea91960022e55b
add_theme_support ( 'post-thumbnails' ); 