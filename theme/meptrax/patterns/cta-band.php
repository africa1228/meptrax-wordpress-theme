<?php
/**
 * Closing CTA band — Homepage V5.
 *
 * @package MEPtrax
 */

return array(
	'title'       => __( 'CTA Band', 'meptrax' ),
	'description' => __( 'Closing conversion strip.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => '<!-- wp:group {"align":"full","className":"meptrax-cta-band meptrax-cta-band--v5","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-cta-band meptrax-cta-band--v5">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Built by electricians, for electricians.</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">MEPTrax Takeoff works today.</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">We\'re releasing the larger MEPTrax system in stages—connecting estimating, the field and the business instead of treating them as unrelated pieces.</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Use what you need today. Add more when you\'re ready.</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull meptrax-cta-band__pull"} -->
	<p class="has-text-align-center meptrax-v5-pull meptrax-cta-band__pull">Start with Takeoff. Grow with MEPTrax.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"meptrax-btn-primary meptrax-btn-lg","url":"{{MEPTRAX_APP_SIGNUP_URL}}"} -->
		<div class="wp-block-button meptrax-btn-primary meptrax-btn-lg"><a class="wp-block-button__link wp-element-button" href="{{MEPTRAX_APP_SIGNUP_URL}}">Try MEPTrax Takeoff Free for 30 Days</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- wp:paragraph {"align":"center","className":"meptrax-cta-privacy","fontSize":"small"} -->
	<p class="has-text-align-center meptrax-cta-privacy has-small-font-size">30 days free. No credit card required.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->',
);
