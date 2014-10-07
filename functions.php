<?php

add_action('after_setup_theme', 'wp_jt_theme');

function wp_jt_theme() {

//init scripts
    if (!function_exists("my_scripts")) {
	if (!is_admin()) {

	    function my_scripts() {
		wp_register_script('equalHeights', get_stylesheet_directory_uri() . '/library/js/custom.js', array('jquery'), '1.2');
		wp_enqueue_script('equalHeights');
		
		wp_register_script('custom', get_stylesheet_directory_uri() . '/library/js/jQuery.equalHeights.js', array('jquery'), '1.2');
		wp_enqueue_script('custom');
	    }

	}
    } add_action('wp_enqueue_scripts', 'my_scripts');


    //init styles

    if (!function_exists("my_styles")) {
	if (!is_admin()) {

	    function my_styles() {
		wp_enqueue_style('fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
		wp_enqueue_style('fontawesome');
		wp_enqueue_style('googlefonts', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,600italic,400italic,300,300italic,200,200italic');
		wp_enqueue_style('googlefonts');
		//myStyle
		wp_register_style('custom', get_stylesheet_directory_uri() . '/library/css/custom.css', 'style', '1.0', 'screen');
		wp_enqueue_style('custom');
		
		wp_register_style('mediaqueries', get_stylesheet_directory_uri() . '/library/css/mediaqueries.css', 'style', '1.0', 'screen');
		wp_enqueue_style('mediaqueries');
		
		
		
	    }

	}
    } add_action('wp_enqueue_scripts', 'my_styles');
    
    
        //remove current sidebars
    function remove_sidebars() {
	unregister_sidebar('footer1');
	unregister_sidebar('footer2');
	unregister_sidebar('footer3');
	#unregister_sidebar('sidebar1');
	#unregister_sidebar('sidebar2');
    }
    add_action('init', 'remove_sidebars');
    
	function add_new_sidebars() {
	      register_sidebar(array(
		'name' => __('Language'),
		'id' => 'languages',
		'description' => _("Container für den Sprachschalter"),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>'
	    ));
	    register_sidebar(array(
		'name' => __('Adresse_Teil-1'),
		'id' => 'adress1',
		'description' => _("Container für die Adresse"),
		'before_widget' => '<div id="%1$s" class="widget col-md-4 %2$s">',
		'after_widget' => '</div>'
	    ));
	    register_sidebar(array(
		'name' => __('Adresse_Teil-2'),
		'id' => 'adress2',
		'description' => _("Container für die Adresse"),
		'before_widget' => '<div id="%1$s" class="widget col-md-4 %2$s">',
		'after_widget' => '</div>'
	    ));
	        register_sidebar(array(
		'name' => __('Login'),
		'id' => 'login',
		'description' => _("Container für den Login"),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>'
	    ));
	    register_sidebar(array(
		'name' => __('Auszeichnungen'),
		'id' => 'award',
		'description' => _("Container für das Anwaltsverein Logo"),
		'before_widget' => '<div id="%1$s" class="widget col-md-4 %2$s">',
		'after_widget' => '</div>'
	    ));
	} add_action('init', 'add_new_sidebars');

}

?>