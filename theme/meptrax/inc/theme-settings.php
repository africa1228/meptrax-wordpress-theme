<?php
/**
 * Theme URL helpers and defaults.
 *
 * @package MEPtrax
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * App signup URL.
 */
function meptrax_app_signup_url() {
	return apply_filters( 'meptrax_app_signup_url', 'https://app.meptrax.com/signup' );
}

/**
 * App login URL.
 */
function meptrax_app_login_url() {
	return apply_filters( 'meptrax_app_login_url', 'https://app.meptrax.com' );
}

/**
 * Support email.
 */
function meptrax_support_email() {
	return apply_filters( 'meptrax_support_email', 'support@meptrax.com' );
}

/**
 * Legal entity name for footer copyright.
 */
function meptrax_legal_entity_name() {
	return apply_filters( 'meptrax_legal_entity_name', '[Legal Entity Name]' );
}

/**
 * Replace URL placeholders in pattern HTML at render time.
 *
 * @param string $content Pattern HTML.
 * @return string
 */
function meptrax_replace_url_placeholders( $content ) {
	$replacements = array(
		'{{MEPTRAX_APP_SIGNUP_URL}}' => esc_url( meptrax_app_signup_url() ),
		'{{MEPTRAX_APP_LOGIN_URL}}'  => esc_url( meptrax_app_login_url() ),
		'{{MEPTRAX_SUPPORT_EMAIL}}'  => esc_html( meptrax_support_email() ),
		'{{MEPTRAX_LEGAL_ENTITY}}'   => esc_html( meptrax_legal_entity_name() ),
	);

	return str_replace( array_keys( $replacements ), array_values( $replacements ), $content );
}

/**
 * Filter pattern content when patterns are registered.
 */
function meptrax_filter_pattern_content( $pattern_properties ) {
	if ( ! empty( $pattern_properties['content'] ) ) {
		$pattern_properties['content'] = meptrax_replace_url_placeholders( $pattern_properties['content'] );
	}

	return $pattern_properties;
}

/**
 * Wrap pattern registration to apply URL placeholders.
 */
function meptrax_init_url_placeholder_filters() {
	add_filter( 'register_block_pattern_args', function ( $args ) {
		if ( ! empty( $args['content'] ) ) {
			$args['content'] = meptrax_replace_url_placeholders( $args['content'] );
		}
		return $args;
	} );
}
add_action( 'init', 'meptrax_init_url_placeholder_filters', 5 );

/**
 * Replace URL placeholders in rendered block HTML (header/footer template parts).
 *
 * @param string $block_content Block HTML.
 * @return string
 */
function meptrax_filter_render_block_placeholders( $block_content ) {
	return meptrax_replace_url_placeholders( $block_content );
}
add_filter( 'render_block', 'meptrax_filter_render_block_placeholders' );
