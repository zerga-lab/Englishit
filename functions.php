<?php 
 
function register_styles() {

    wp_register_style('style', get_template_directory_uri() . 
 		'/style.css');
    wp_enqueue_style('style'); 
 
}
 
add_action( 'wp_enqueue_scripts', 'register_styles' );
 
 
function load_my_script() {
  
   wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . 
 		'/jquery.min.js');
    wp_enqueue_script('jquery');
	
    wp_register_script('jquerymask', get_template_directory_uri() . 
 		'/jquery.maskedinput.js');
    wp_enqueue_script('jquerymask');
	
	    wp_register_script('jqueryval', get_template_directory_uri() . 
 		'/jquery.validate.js');
    wp_enqueue_script('jqueryval');
	
		    wp_register_script('wow', get_template_directory_uri() . 
 		'/wow.js');
    wp_enqueue_script('wow');
		
		    wp_register_script('watch', get_template_directory_uri() . 
 		'/watch.js');
    wp_enqueue_script('watch');
		
		    wp_register_script('carousel', get_template_directory_uri() . 
 		'/owl.carousel.js');
    wp_enqueue_script('carousel');
			
		    wp_register_script('my', get_template_directory_uri() . 
 		'/my.js');
    wp_enqueue_script('my');
			
		    wp_register_script('bootstrap', get_template_directory_uri() . 
 		'/bootstrap.js');
    wp_enqueue_script('bootstrap');
 
  
 	
}
 
add_action('wp_enqueue_scripts', 'load_my_script');