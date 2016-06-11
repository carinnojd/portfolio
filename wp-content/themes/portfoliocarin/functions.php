<?php


//Includes scripts
function add_theme_scripts() {
	wp_enqueue_script('main', get_template_directory_uri() . '/js/scripts.min.js', array('jquery'));

	wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');




//Child navigation menu
function get_child_li() {
	global $post;
	if($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}
	return $post->ID;
}

//Check if page has children
function has_children() {
	global $post;

	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
}

//Customize excerpt word count length
function custom_excerpt_length() {
	return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');

//Theme setup
function setup_theme() {

	//Navigation Menus
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Meny')
	));

	//Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, array('left', 'center'));
}

add_action('after_setup_theme', 'setup_theme');

