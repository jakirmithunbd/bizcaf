<?php 


function bizcaf_default_function(){

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );          
add_theme_support( 'custom-header' );          
add_theme_support( 'custom-background' );
add_theme_support( 'editor' );


// Texdomain load

load_theme_textdomain( 'bizcaf', get_template_directory() . '/languages' ); 


//Menu Register

if (function_exists("register_nav_menus")) {
	register_nav_menus(array(
		'header_menu'	=>	__( 'Header Menu', 'bizcaf'),
		'footer_menu'	=>	__( 'Footer Menu', 'bizcaf'),
	));
}

//Register Post Type

function services_post_type(){
	register_post_type('services', array(
		'labels'	=>array(

				'name'			=>	__('Services', 'bizcaf'),
				'add_new_item'	=>	__('Add your new service'),
		),
		'public'	=>	true,
		'menu_icon'	=>	'dashicons-groups',
		'supports' 	=> array( 'title','editor','thumbnail')
	));

	function read_more($limit){
		$get_content = explode(' ', get_the_content());
		$less_content = array_slice($get_content, 0, $limit);
		echo implode(' ', $less_content);
	}

	
}
add_action('init', 'services_post_type');

//sidebar widgets

function bizcaf_widget(){
	register_sidebar(array(
		'tilte'			=>	'Sidebar',
		'id'			=>	'sidebar-1',
		'before_widget' => '<div class="categories">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="title"><h6>',
		'after_title'   => '</h6><span class="border-separator"></span></div>' 
	));

	register_sidebar(array(
		'tilte'			=>	'Sidebar',
		'id'			=>	'sidebar-2',
		'before_widget' => '<div class="categories tags">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="title"><h6>',
		'after_title'   => '</h6><span class="border-separator"></span></div>' 
	));

	register_sidebar(array(
		'tilte'			=>	'Footer widgets',
		'id'			=>	'footer',
		'before_widget' => '<div class="col-md-3 col-sm-6 col-xs-6 col widgets recent-post">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="title">',
		'after_title'   => '</h5>',
		));
}
add_action( 'widgets_init', 'bizcaf_widget' );


}
add_action( 'after_setup_theme', 'bizcaf_default_function');


function bizcaf_scripts_styles() {

	wp_enqueue_script('jquery');

	// Loads JavaScript file for modernizr.
	
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), false, true);
	wp_enqueue_script( 'counter', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), false, true);
	wp_enqueue_script( 'plugin', get_template_directory_uri() . '/js/plugins.js', array(), false, true);
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), false, true);

	// Add font stylesheet.
	wp_enqueue_style( 'magicmagagine-font', '//fonts.googleapis.com/css?family=Hind:400,500,600,700|PT+Sans:400,400i,700|Raleway:200i,300,300i,400,400i,500,500i,600,700" rel="stylesheet', array(), '1.0' );

	// Add slicknav stylesheet.
	wp_enqueue_style( 'plugins', get_template_directory_uri() . '/css/plugins.css', array());
	wp_enqueue_style( 'main_style', get_template_directory_uri() . '/css/main_style.css', array());
}

add_action( 'wp_enqueue_scripts', 'bizcaf_scripts_styles' );

require get_template_directory() . '/inc/options.php';