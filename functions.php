<?php
/**
 * Cafelia theme setup.
 *
 * @package Cafelia
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CAFELIA_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function cafelia_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support( 'custom-logo' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'cafelia' ),
			'footer'  => esc_html__( 'Footer', 'cafelia' ),
		)
	);

	load_theme_textdomain( 'cafelia', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'cafelia_setup' );

/**
 * Footer widget area.
 */
function cafelia_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'cafelia' ),
			'id'            => 'sidebar-footer',
			'description'   => esc_html__( 'Widgets shown in the footer area.', 'cafelia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'cafelia_widgets_init' );

/**
 * Enqueue front-end assets.
 */
function cafelia_enqueue_assets() {
	wp_enqueue_style( 'cafelia-style', get_stylesheet_uri(), array(), CAFELIA_VERSION );
	wp_enqueue_script( 'cafelia-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), CAFELIA_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'cafelia_enqueue_assets' );

/**
 * Enqueue editor assets.
 */
function cafelia_enqueue_editor_assets() {
	wp_enqueue_style( 'cafelia-editor', get_template_directory_uri() . '/assets/css/editor.css', array(), CAFELIA_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'cafelia_enqueue_editor_assets' );

/**
 * Register the Cafelia pattern category.
 */
function cafelia_register_pattern_category() {
	register_block_pattern_category(
		'cafelia',
		array( 'label' => esc_html__( 'Cafelia', 'cafelia' ) )
	);
}
add_action( 'init', 'cafelia_register_pattern_category' );

/**
 * Custom block styles.
 */
function cafelia_register_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'caramel-outline', 'label' => esc_html__( 'Caramel Outline', 'cafelia' ) ) );
	register_block_style( 'core/group', array( 'name' => 'menu-card', 'label' => esc_html__( 'Menu Card', 'cafelia' ) ) );
	register_block_style( 'core/image', array( 'name' => 'soft-frame', 'label' => esc_html__( 'Soft Frame', 'cafelia' ) ) );
	register_block_style( 'core/heading', array( 'name' => 'caramel-rule', 'label' => esc_html__( 'Caramel Rule', 'cafelia' ) ) );
}
add_action( 'init', 'cafelia_register_block_styles' );

/**
 * Custom excerpt length.
 */
function cafelia_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'cafelia_excerpt_length' );

/**
 * Simple inline SVG icon helper.
 *
 * @param string $name Icon name.
 * @return string SVG markup.
 */
function cafelia_icon( $name ) {
	$icons = array(
		'cup'      => '<path d="M17 8h1a4 4 0 1 1 0 8h-1"/><path d="M3 8h14v9a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4Z"/><line x1="6" x2="6" y1="2" y2="4"/><line x1="10" x2="10" y1="2" y2="4"/><line x1="14" x2="14" y1="2" y2="4"/>',
		'bean'     => '<path d="M10.5 20.5c-4.5-1.5-7-5.5-6.5-10.5C4.5 5.5 8 3 12 3c4.5 0 7.5 3 7.5 8 0 5.5-4 10.5-9 9.5z"/><path d="M12 3c-2 3-3 6-2.5 9.5.3 2.5 1 5 2.5 8"/>',
		'croissant'=> '<path d="M4.5 9.5C6 6 8.5 4 12 4s6 2 7.5 5.5c-1 3-3 4.5-5 4.5-1 1.5-2 3.5-2.5 6-.5-2.5-1.5-4.5-2.5-6-2 0-4-1.5-5-4.5z"/>',
		'phone'    => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.13.96.36 1.9.7 2.8a2 2 0 0 1-.45 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.25a2 2 0 0 1 2.1-.45c.9.34 1.84.57 2.8.7A2 2 0 0 1 22 16.9z"/>',
		'mail'     => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-10 6L2 7"/>',
		'pin'      => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
		'clock'    => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
		'shield'   => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/>',
		'star'     => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>',
		'check'    => '<path d="M20 6L9 17l-5-5"/>',
		'calendar' => '<rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/>',
		'leaf'     => '<path d="M11 20A7 7 0 0 1 4 13c0-4 3-8 9-9 4.5-.8 7-.5 7-.5s.3 2.5-.5 7c-1 6-5 9-8.5 9.5z"/><path d="M4 21c4-4 7-7 12-9"/>',
	);
	if ( ! isset( $icons[ $name ] ) ) {
		return '';
	}
	return '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $icons[ $name ] . '</svg>';
}
