<?php
/**
 * Wilson Landing Theme Functions
 *
 * @package Wilson_Landing
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Theme version
define('WILSON_VERSION', '1.0.0');

/**
 * Setup theme defaults and register support for various WordPress features
 */
function wilson_setup() {    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    
    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'wilson_setup');

/**
 * Enqueue scripts and styles
 */
function wilson_scripts() {
    // Compile SCSS if needed
    wilson_compile_scss();
    
    // Main stylesheet (compiled from SCSS or fallback to minified)
    $css_file = get_template_directory() . '/assets/dist/style.css';
    $css_uri = file_exists($css_file) 
        ? get_template_directory_uri() . '/assets/dist/style.css'
        : get_template_directory_uri() . '/assets/dist/style.min.css';
    
    wp_enqueue_style(
        'wilson-style',
        $css_uri,
        array(),
        WILSON_VERSION
    );

    // Google Fonts
	wp_enqueue_style(
		'google-fonts',
		'https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Lato:wght@300;400;700&display=swap',
		array(),
		null
	);
    
    // Main JavaScript (minified in production)
    wp_enqueue_script(
        'wilson-main',
        get_template_directory_uri() . '/assets/dist/main.min.js',
        array('jquery'),
        WILSON_VERSION,
        true
    );
    
    // Localize script for AJAX
    wp_localize_script('wilson-main', 'wilsonData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('wilson-nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'wilson_scripts');


/**
 * Automatically create and set up the Home page on theme activation
 */
add_action( 'after_switch_theme', 'wilson_create_home_page' );

function wilson_create_home_page() {

	// Check if a "Home" page already exists.
	$home_page = get_page_by_title( 'Home' );

	// Create the Home page if it doesn't exist.
	if ( ! $home_page ) {

		$home_page_id = wp_insert_post(
			array(
				'post_title'   => 'Home',
				'post_content' => '',
				'post_status'  => 'publish',
				'post_type'    => 'page',
			)
		);

		// Set the new Home page as the front page.
		if ( ! is_wp_error( $home_page_id ) ) {
			update_option( 'page_on_front', $home_page_id );
			update_option( 'show_on_front', 'page' );
		}
	}

	// Set permalink structure to "Post name" if not already set.
	if ( get_option( 'permalink_structure' ) !== '/%postname%/' ) {
		global $wp_rewrite;
		$wp_rewrite->set_permalink_structure( '/%postname%/' );
		$wp_rewrite->flush_rules();
	}
}

/**
 * SCSS Compiler
 */
require get_template_directory() . '/inc/scss-compiler.php';

/**
 * Compile SCSS on theme activation and updates
 */
function wilson_compile_on_activation() {
    wilson_compile_scss();
}
add_action('after_switch_theme', 'wilson_compile_on_activation');
add_action('upgrader_process_complete', 'wilson_compile_on_activation');