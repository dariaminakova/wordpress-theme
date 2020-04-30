<?php 

//load scss

function load_scss(){

	wp_register_style('style_scss', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
	wp_enqueue_style('style_scss');

	wp_enqueue_script('jquery');

	wp_register_script('app_js', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
	wp_enqueue_script('app_js');

}

add_action('wp_enqueue_scripts', 'load_scss');

// load js
function load_js(){

	wp_enqueue_script('jquery');

	wp_register_script('script', get_template_directory_uri() . '/js/script.js', ['jquery'], 1, true);
	wp_enqueue_script('script');

}

add_action('wp_enqueue_scripts', 'load_js');

//theme options
add_theme_support('menus');

//menus
register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
	)
);