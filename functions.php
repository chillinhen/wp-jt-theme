<?php

add_action('after_setup_theme', 'jt_theme_setup');

function jt_theme_setup() {
    //init scripts
    if (!function_exists("my_scripts")) {
	if (!is_admin()) {
	    function my_scripts() {
		//custom
		wp_register_script('custom', get_stylesheet_directory_uri() . '/library/js/custom.js', array('jquery'), '1.0');
		wp_enqueue_script('custom');
	    }
	}
    }
    
    add_action('wp_enqueue_scripts', 'my_scripts');
    
    //init styles
    if (!function_exists("my_styles")) {
	if (!is_admin()) {
	    wp_register_style('googlefonts', 'http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|PT+Sans+Narrow:400,700', 'style', '1.0', 'screen');
	    wp_enqueue_style('googlefonts');
	    
	    wp_register_style('custom', get_stylesheet_directory_uri() . '/library/css/custom.css', 'style', '1.0', 'screen');
	    wp_enqueue_style('custom');

	}
    }
    
    add_action('wp_enqueue_scripts', 'my_styles');
}

?>