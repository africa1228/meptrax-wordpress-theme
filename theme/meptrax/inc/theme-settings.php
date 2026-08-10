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
	return apply_filters( 'meptrax_app_login_url', 'https://app.meptrax.com/login' );
}

/**
 * Support email.
 */
function meptrax_support_email() {
	return apply_filters( 'meptrax_support_email', 'support@meptrax.com' );
}

/**
 * Homepage copyright line (dynamic year).
 */
function meptrax_copyright_line() {
	$year = (int) gmdate( 'Y' );
	$line = sprintf(
		/* translators: %d: current calendar year */
		__( '© %d MEPtrax. All rights reserved.', 'meptrax' ),
		$year
	);

	return apply_filters( 'meptrax_copyright_line', $line, $year );
}

/**
 * Future demo video URL.
 *
 * FUTURE DEMO URL: set a public video URL via the `meptrax_demo_video_url` filter
 * (or define MEPTRAX_DEMO_VIDEO_URL in wp-config) when a real 60-second demo exists.
 * Empty / false keeps the hero demo CTA disabled — never link a fake or dead URL.
 *
 * @return string Absolute URL or empty string.
 */
function meptrax_demo_video_url() {
	$default = defined( 'MEPTRAX_DEMO_VIDEO_URL' ) ? (string) MEPTRAX_DEMO_VIDEO_URL : '';
	$url     = apply_filters( 'meptrax_demo_video_url', $default );

	return is_string( $url ) ? trim( $url ) : '';
}

/**
 * Whether the Watch Demo CTA should be an active link.
 */
function meptrax_demo_cta_enabled() {
	return (bool) meptrax_demo_video_url();
}

/**
 * Markup for the hero secondary demo CTA.
 *
 * @return string
 */
function meptrax_demo_cta_markup() {
	$label = esc_html__( 'Watch 60-Second Demo', 'meptrax' );

	if ( meptrax_demo_cta_enabled() ) {
		$url = esc_url( meptrax_demo_video_url() );

		return sprintf(
			'<div class="wp-block-button meptrax-btn-play meptrax-btn-lg meptrax-btn-demo"><a class="wp-block-button__link wp-element-button" href="%1$s" target="_blank" rel="noopener noreferrer">%2$s</a></div>',
			$url,
			$label
		);
	}

	// Disabled by default so the public UI never exposes a broken demo link.
	return sprintf(
		'<div class="wp-block-button meptrax-btn-play meptrax-btn-lg meptrax-btn-demo is-disabled"><span class="wp-block-button__link wp-element-button" aria-disabled="true" tabindex="-1" title="%1$s">%2$s</span></div>',
		esc_attr__( 'Demo video coming soon', 'meptrax' ),
		$label
	);
}

/**
 * Replace URL placeholders in pattern HTML at render time.
 *
 * @param string $content Pattern HTML.
 * @return string
 */
function meptrax_replace_url_placeholders( $content ) {
	$replacements = array(
		'{{MEPTRAX_APP_SIGNUP_URL}}'  => esc_url( meptrax_app_signup_url() ),
		'{{MEPTRAX_APP_LOGIN_URL}}'   => esc_url( meptrax_app_login_url() ),
		'{{MEPTRAX_SUPPORT_EMAIL}}'   => esc_html( meptrax_support_email() ),
		'{{MEPTRAX_COPYRIGHT_LINE}}'  => esc_html( meptrax_copyright_line() ),
		// Legacy placeholder (older footer content still in DB).
		'{{MEPTRAX_LEGAL_ENTITY}}'    => 'MEPtrax',
		'{{MEPTRAX_DEMO_CTA}}'        => meptrax_demo_cta_markup(),
	);

	return str_replace( array_keys( $replacements ), array_values( $replacements ), $content );
}

/**
 * Filter pattern content when patterns are registered.
 *
 * @param array $pattern_properties Pattern args.
 * @return array
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
	add_filter(
		'register_block_pattern_args',
		function ( $args ) {
			if ( ! empty( $args['content'] ) ) {
				$args['content'] = meptrax_replace_url_placeholders( $args['content'] );
			}
			return $args;
		}
	);
}
add_action( 'init', 'meptrax_init_url_placeholder_filters', 5 );

/**
 * Replace URL placeholders in rendered block HTML (header/footer template parts).
 *
 * @param string $block_content Block HTML.
 * @return string
 */
function meptrax_filter_render_block_placeholders( $block_content ) {
	return meptrax_sanitize_public_copy( meptrax_replace_url_placeholders( $block_content ) );
}
add_filter( 'render_block', 'meptrax_filter_render_block_placeholders' );

/**
 * Remove unfinished / placeholder marketing copy that may still live in customized WP content.
 *
 * Theme patterns are the source of truth; this is a safety net for Site Editor leftovers.
 *
 * @param string $content HTML.
 * @return string
 */
function meptrax_sanitize_public_copy( $content ) {
	if ( ! is_string( $content ) || $content === '' ) {
		return $content;
	}

	// Footer legal placeholder → plain MEPtrax (no invented corporation name).
	$content = str_replace( '[Legal Entity Name]', 'MEPtrax', $content );

	// Absolute accuracy claim removed from public homepage messaging.
	$content = str_replace(
		'Everything in one place. Nothing gets missed.',
		'Your plans, marks, and counts in one place.',
		$content
	);

	// Unfinished Stripe / contribution instructions must never appear publicly.
	if (
		stripos( $content, 'Stripe plugin goes here' ) !== false
		|| stripos( $content, 'WP Simple Pay' ) !== false
		|| stripos( $content, 'Help keep the Power flowing' ) !== false
	) {
		$content = preg_replace(
			'/<div class="[^"]*meptrax-donate-zone[^"]*"[\s\S]*?<\/div>/i',
			'',
			$content
		);
		$content = preg_replace(
			'/<h2[^>]*>\s*Help keep the Power flowing\s*<\/h2>/i',
			'',
			$content
		);
		$content = preg_replace(
			'/<p[^>]*>[\s\S]*?(?:Stripe plugin goes here|WP Simple Pay|optional contribution helps cover hosting)[\s\S]*?<\/p>/i',
			'',
			$content
		);
	}

	return $content;
}

/**
 * Also sanitize classic post content if a customized front page still uses post-content.
 *
 * @param string $content Post content HTML.
 * @return string
 */
function meptrax_sanitize_the_content( $content ) {
	return meptrax_sanitize_public_copy( $content );
}
add_filter( 'the_content', 'meptrax_sanitize_the_content', 20 );

