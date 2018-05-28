<?php
	//Register Nav Walker class_alias
	require_once('wp_bootstrap_navwalker.php');

	//Theme support
	function wpb_theme_setup(){
		add_theme_support('post-thumbnails');

		//Nav menus
		register_nav_menus(array(
			'primary' => __('Primary Menu')

		));

		//Post formats
		add_theme_support('post-formats', array('aside', 'gallery'));
	}

	add_action('after_setup_theme', 'wpb_theme_setup');

	function wpb_theme_scripts() {
	
	wp_enqueue_style( 'style', get_stylesheet_uri());

	wp_enqueue_style('strap', get_template_directory_uri(), '/css/strap.css');

	wp_enqueue_script('bootstrap', get_template_directory_uri(), '/js/bootstrap.js');

	}
	add_action('wp_enqueue_scripts', 'wpb_theme_scripts');



	//Excerpt length control
	function set_excerpt_length(){
		return 45;
	}

	add_filter('excerpt_length', 'set_excerpt_length');

	//Widget Locations
	function wpb_init_widgets($id){
		register_sidebar(array(
			"name" => "Sidebar",
			"id" => "sidebar",
			"before_widget" => '<div class="sidebar-module">',
			"after_widget" => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		));

				register_sidebar(array(
			"name" => "Box1",
			"id" => "box1",
			"before_widget" => '<div class="box">',
			"after_widget" => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));				
			register_sidebar(array(
			"name" => "Box2",
			"id" => "box2",
			"before_widget" => '<div class="box">',
			"after_widget" => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));				
			register_sidebar(array(
			"name" => "Box3",
			"id" => "box3",
			"before_widget" => '<div class="box">',
			"after_widget" => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));
	}

	add_action('widgets_init', 'wpb_init_widgets');

	// Customizer file

	require get_template_directory() . '/inc/customizer.php';  
?>