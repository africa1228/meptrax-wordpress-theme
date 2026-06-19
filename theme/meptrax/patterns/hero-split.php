<?php
/**
 * Split hero pattern (mockup layout).
 *
 * @package MEPtrax
 */

return array(
	'title'       => __( 'Hero Split', 'meptrax' ),
	'description' => __( 'Two-column hero with early access badge, CTAs, and blueprint visual.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => '<!-- wp:group {"align":"full","className":"meptrax-hero-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull meptrax-hero-split">
	<!-- wp:group {"className":"meptrax-hero-split__content","layout":{"type":"default"}} -->
	<div class="wp-block-group meptrax-hero-split__content">
		<!-- wp:paragraph {"className":"meptrax-hero-badge"} -->
		<p class="meptrax-hero-badge">Early access is open</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading">Electrical plan takeoff that\'s faster, clearer, and actually easy to use.</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"meptrax-hero-lead"} -->
		<p class="meptrax-hero-lead">MEPtrax helps electrical contractors find, mark, and track everything that matters — from the first sheet to the final count.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"className":"meptrax-hero-split__buttons"} -->
		<div class="wp-block-buttons meptrax-hero-split__buttons">
			<!-- wp:button {"className":"meptrax-btn-primary meptrax-btn-lg","url":"{{MEPTRAX_APP_SIGNUP_URL}}"} -->
			<div class="wp-block-button meptrax-btn-primary meptrax-btn-lg"><a class="wp-block-button__link wp-element-button" href="{{MEPTRAX_APP_SIGNUP_URL}}">Start free</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"meptrax-btn-play meptrax-btn-lg","url":"/product/"} -->
			<div class="wp-block-button meptrax-btn-play meptrax-btn-lg"><a class="wp-block-button__link wp-element-button" href="/product/">See how it works</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:paragraph {"className":"meptrax-hero-trust"} -->
		<p class="meptrax-hero-trust">Free during early access. No credit card required.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"meptrax-hero-split__visual","layout":{"type":"default"}} -->
	<div class="wp-block-group meptrax-hero-split__visual"></div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
