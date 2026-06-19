<?php
/**
 * MEPtrax theme bootstrap.
 *
 * @package MEPtrax
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup.
 */
function meptrax_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/theme.css' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
}
add_action( 'after_setup_theme', 'meptrax_setup' );

/**
 * Enqueue Inter and supplemental styles.
 */
function meptrax_enqueue_assets() {
	wp_enqueue_style(
		'meptrax-inter',
		'https://fonts.bunny.net/css?family=inter:400,500,600,700,800',
		array(),
		null
	);

	wp_enqueue_style(
		'meptrax-theme',
		get_template_directory_uri() . '/assets/css/theme.css',
		array( 'meptrax-inter' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'meptrax_enqueue_assets' );
add_action( 'enqueue_block_editor_assets', 'meptrax_enqueue_assets' );

/**
 * Register block pattern category.
 */
function meptrax_register_pattern_category() {
	register_block_pattern_category(
		'meptrax',
		array(
			'label' => __( 'MEPtrax', 'meptrax' ),
		)
	);
}
add_action( 'init', 'meptrax_register_pattern_category' );

/**
 * Register block patterns from /patterns.
 */
function meptrax_register_block_patterns() {
	$pattern_files = glob( get_template_directory() . '/patterns/*.php' );

	if ( ! $pattern_files ) {
		return;
	}

	foreach ( $pattern_files as $pattern_file ) {
		$pattern = require $pattern_file;

		if ( ! is_array( $pattern ) || empty( $pattern['title'] ) || empty( $pattern['content'] ) ) {
			continue;
		}

		register_block_pattern(
			'meptrax/' . basename( $pattern_file, '.php' ),
			array(
				'title'       => $pattern['title'],
				'description' => $pattern['description'] ?? '',
				'categories'  => $pattern['categories'] ?? array( 'meptrax' ),
				'content'     => meptrax_replace_url_placeholders( $pattern['content'] ),
			)
		);
	}
}
add_action( 'init', 'meptrax_register_block_patterns' );

/**
 * Fallback logo when Site Identity logo is not uploaded yet.
 *
 * @param string $html Custom logo markup.
 * @return string
 */
function meptrax_default_custom_logo( $html ) {
	if ( has_custom_logo() ) {
		return $html;
	}

	$logo_url = get_template_directory_uri() . '/assets/images/logo-mark.svg';
	$home     = esc_url( home_url( '/' ) );
	$name     = esc_attr( get_bloginfo( 'name', 'display' ) );

	return sprintf(
		'<a href="%1$s" class="custom-logo-link meptrax-default-logo" rel="home" aria-label="%2$s"><img src="%3$s" class="custom-logo" alt="" width="48" height="48" decoding="async" /></a>',
		$home,
		$name,
		esc_url( $logo_url )
	);
}
add_filter( 'get_custom_logo', 'meptrax_default_custom_logo' );
