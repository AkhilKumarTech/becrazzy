<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function becrazzy_setup() {
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'becrazzy-featured-image', 2000, 1200, true );

	add_image_size( 'becrazzy-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'top'    => __( 'Top Menu', 'becrazzy' ),
			'social' => __( 'Social Links Menu', 'becrazzy' ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support(
		'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		)
	);

	// Add theme support for Custom Logo.
	add_theme_support(
		'custom-logo', array(
			'width'      => 250,
			'height'     => 250,
			'flex-width' => true,
		)
	);
}

/**
 * Enqueue scripts and styles.
 */
function becrazzy_scripts() {
	// Theme stylesheet.
	wp_enqueue_style( 'becrazzy--css-googleapis', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400', NULL, '1.0' );
	wp_enqueue_style( 'becrazzy--css-bootstrap', get_theme_file_uri( '/css/bootstrap.min.css' ), NULL, '1.0' );
	wp_enqueue_style( 'becrazzy--css-owl-carousel', get_theme_file_uri( '/css/owl.carousel.css' ), NULL, '1.0' );
	wp_enqueue_style( 'becrazzy--css-owl-theme-default', get_theme_file_uri( '/css/owl.theme.default.css' ), NULL, '1.0' );
	wp_enqueue_style( 'becrazzy--css-font-awesome', get_theme_file_uri( '/css/font-awesome.min.css' ), NULL, '1.0' );
	wp_enqueue_style( 'becrazzy--css-style', get_stylesheet_uri());

	wp_enqueue_script( 'becrazzy-js-jquery', get_theme_file_uri( '/js/jquery.min.js' ), NULL, '1.0', true );
	wp_enqueue_script( 'becrazzy-js-bootstrap', get_theme_file_uri( '/js/bootstrap.min.js' ), NULL, '1.0', true );
	wp_enqueue_script( 'becrazzy-js-owl-carousel', get_theme_file_uri( '/js/owl.carousel.min.js' ), NULL, '1.0', true );
	wp_enqueue_script( 'becrazzy-js-main', get_theme_file_uri( '/js/main.js' ), NULL, '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'becrazzy_scripts' );