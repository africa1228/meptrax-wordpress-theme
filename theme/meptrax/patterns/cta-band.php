<?php
/**
 * CTA band pattern.
 *
 * @package MEPtrax
 */

return array(
	'title'       => __( 'CTA Band', 'meptrax' ),
	'description' => __( 'Bottom conversion strip.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => '<!-- wp:group {"align":"full","className":"meptrax-cta-band","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-cta-band">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Ready to take off on your next plan set?</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Create a free account and upload your first PDF.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"url":"{{MEPTRAX_APP_SIGNUP_URL}}"} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="{{MEPTRAX_APP_SIGNUP_URL}}">Start free</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->',
);
