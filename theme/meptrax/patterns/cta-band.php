<?php
/**
 * Closing CTA band — homepage map.
 *
 * @package MEPtrax
 */

return array(
	'title'       => __( 'CTA Band', 'meptrax' ),
	'description' => __( 'Final Takeoff trial CTA for homepage.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => '<!-- wp:group {"align":"full","className":"meptrax-cta-band meptrax-cta-band--v5","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-cta-band meptrax-cta-band--v5">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Start with the work.</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","className":"meptrax-cta-band__pull meptrax-v5-pull"} -->
	<p class="has-text-align-center meptrax-cta-band__pull meptrax-v5-pull">Start with MEPTrax Takeoff.</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Electrical takeoff built around the way electricians actually think about the work — and the first step in where MEPTrax is going.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"meptrax-btn-primary meptrax-btn-lg","url":"{{MEPTRAX_APP_SIGNUP_URL}}"} -->
		<div class="wp-block-button meptrax-btn-primary meptrax-btn-lg"><a class="wp-block-button__link wp-element-button" href="{{MEPTRAX_APP_SIGNUP_URL}}">Try MEPTrax Takeoff Free</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- wp:paragraph {"align":"center","className":"meptrax-cta-privacy","fontSize":"small"} -->
	<p class="has-text-align-center meptrax-cta-privacy has-small-font-size">30 days free. No credit card required.</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","className":"meptrax-text-cta meptrax-text-cta--on-dark"} -->
	<p class="has-text-align-center meptrax-text-cta meptrax-text-cta--on-dark"><a href="/products/">See MEPTrax Products →</a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->',
);
