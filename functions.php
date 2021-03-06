<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );


// CSS FILES

function theme_styles() {

	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	//wp_enqueue_style( 'bootstrap-theme_css', get_template_directory_uri() . '/css/bootstrap-theme.min.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Open+Sans:400,300,600,700,800|Covered+By+Your+Grace' );
		
	//wp_enqueue_style( 'font-awesome_css', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles' );


// JS FILES

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', '../../assets/js/html5shiv.js', '','', false );
	wp_register_script( 'respond_js', '../../assets/js/respond.min.js', '','', false );


	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	//wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery-1.11.3.min.js', array('jquery'), '', true ); 
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );

//add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );