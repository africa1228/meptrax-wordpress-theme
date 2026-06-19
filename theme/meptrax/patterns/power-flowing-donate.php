<?php
/**
 * Optional contribution / Stripe placeholder pattern.
 *
 * @package MEPtrax
 */

return array(
	'title'       => __( 'Help Keep the Power Flowing', 'meptrax' ),
	'description' => __( 'Optional donation section with Stripe plugin placeholder.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => '<!-- wp:group {"align":"wide","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Help keep the Power flowing</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">MEPtrax is free during early access. If the tool saves you time on takeoff, an optional contribution helps cover hosting and development. Thank you — no account features change either way.</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"className":"meptrax-donate-zone","layout":{"type":"constrained"}} -->
	<div class="wp-block-group meptrax-donate-zone">
		<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size"><strong>Stripe plugin goes here.</strong> After installing WP Simple Pay or the Stripe plugin, replace this group with your Payment Link button or donation form block.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
