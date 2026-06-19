<?php
/**
 * Hero pattern.
 *
 * @package MEPtrax
 */

return array(
	'title'       => __( 'Hero', 'meptrax' ),
	'description' => __( 'Homepage hero with headline and CTAs.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"hero"} -->
	<h1 class="wp-block-heading has-text-align-center has-hero-font-size">Electrical plan takeoff on your PDFs.</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size">Upload plans, mark fixtures, count devices, draw areas, and export your takeoff—without spreadsheets glued to paper prints.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"url":"{{MEPTRAX_APP_SIGNUP_URL}}"} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="{{MEPTRAX_APP_SIGNUP_URL}}">Start free</a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline","url":"{{MEPTRAX_APP_LOGIN_URL}}"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="{{MEPTRAX_APP_LOGIN_URL}}">Log in</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->',
);
