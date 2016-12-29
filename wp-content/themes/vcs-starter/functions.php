<?php

// Įjungiame post thumbnail

add_theme_support( 'post-thumbnails' );

// Apsibrėžiame stiliaus failus ir skriptus

if( !defined('ASSETS_URL') ) {
	define('ASSETS_URL', get_bloginfo('template_url'));
}

function theme_scripts(){

    if ( !is_admin() ) {
        
        wp_deregister_script('jquery');
        wp_register_script('chart', ASSETS_URL . '/assets/js/chart.js', false, '1.0', false);
        wp_register_script('jquery', ASSETS_URL . '/assets/js/jquery.js', false, '1.11.1', true);
        wp_register_script('bootstrap.min', ASSETS_URL . '/assets/js/bootstrap.min.js', false, '3.3.7', true);
        wp_register_script('scrolling-nav', ASSETS_URL . '/assets/js/scrolling-nav.js', false, '1.0', false);
        wp_register_script('jquery.easing.min', ASSETS_URL . '/assets/js/jquery.easing.min.js', array('jquery', 'chart', 'bootstrap.min', 'scrolling-nav'), '1.0', true);
        wp_enqueue_script('jquery.easing.min');
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_stylesheets(){

	$styles_path = ASSETS_URL . '/assets/css/font-awesome.minforcontact.css';

	if( $styles_path ) {
        
        wp_register_style('bootstrap.min', ASSETS_URL . '/assets/css/bootstrap.min.css', false, 'all');
        
        wp_register_style('scrolling-nav', ASSETS_URL . '/assets/css/scrolling-nav.css', false, 'all');
        
        wp_register_style('pure-min', ('//unpkg.com/purecss@0.6.1/build/pure-min.css'), false, 'all');
        
        wp_register_style('style', ASSETS_URL . '/assets/css/style.css', false, 'all');
        
        wp_register_style('mainfocontact', ASSETS_URL . '/assets/css/mainfocontact.css', false, 'all');
        
        wp_register_style('main-css', ASSETS_URL . '/assets/css/font-awesome.minforcontact.css', array('bootstrap.min', 'scrolling-nav', 'pure-min', 'style', 'mainfocontact'), 'all');
        wp_enqueue_style('main-css');
        
	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');

// Apibrėžiame navigacijas

function register_theme_menus() {
   
	register_nav_menus(array( 
        'primary-navigation' => __( 'Primary Navigation' ) 
    ));
}

add_action( 'init', 'register_theme_menus' );

// Custom posts

$themePostTypes = array(
//'Testimonials' => 'Testimonial'

);

function createPostTypes() {

	global $themePostTypes;
 
	$defaultArgs = array(
		'taxonomies' => array('category'), // uncomment this line to enable custom post type categories
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		#'menu_icon' => '',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => true, // to enable archive page, disabled to avoid conflicts with page permalinks
		'menu_position' => null,
		'can_export' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', /*'custom-fields', 'author', 'excerpt', 'comments'*/ ),
	);

	foreach( $themePostTypes as $postType => $postTypeSingular ) {

		$myArgs = $defaultArgs;
		$slug = 'vcs-starter' . '-' . sanitize_title( $postType );
		$labels = makePostTypeLabels( $postType, $postTypeSingular );
		$myArgs['labels'] = $labels;
		$myArgs['rewrite'] = array( 'slug' => $slug, 'with_front' => true );
		$functionName = 'postType' . $postType . 'Vars';

		if( function_exists($functionName) ) {
			
			$customVars = call_user_func($functionName);

			if( is_array($customVars) && !empty($customVars) ) {
				$myArgs = array_merge($myArgs, $customVars);
			}
		}

		register_post_type( $postType, $myArgs );

	}
}

if( isset( $themePostTypes ) && !empty( $themePostTypes ) && is_array( $themePostTypes ) ) {
	add_action('init', 'createPostTypes', 0 );
}


function makePostTypeLabels( $name, $nameSingular ) {

	return array(
		'name' => _x($name, 'post type general name'),
		'singular_name' => _x($nameSingular, 'post type singular name'),
		'add_new' => _x('Add New', 'Example item'),
		'add_new_item' => __('Add New '.$nameSingular),
		'edit_item' => __('Edit '.$nameSingular),
		'new_item' => __('New '.$nameSingular),
		'view_item' => __('View '.$nameSingular),
		'search_items' => __('Search '.$name),
		'not_found' => __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Bin'),
		'parent_item_colon' => ''
	);
}

?>