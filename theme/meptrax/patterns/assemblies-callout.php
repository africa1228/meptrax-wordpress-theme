<?php
/**
 * Electrical assemblies emphasis section.
 *
 * Supported by current product: count/select devices and assemblies on the plan.
 *
 * @package MEPtrax
 */

return array(
	'title'       => __( 'Assemblies Callout', 'meptrax' ),
	'description' => __( 'Highlight counting with devices and assemblies the way electricians estimate.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => '<!-- wp:group {"align":"full","className":"meptrax-assemblies-section","layout":{"type":"default"},"anchor":"assemblies"} -->
<div class="wp-block-group alignfull meptrax-assemblies-section" id="assemblies">
	<!-- wp:group {"className":"meptrax-assemblies-section__inner","layout":{"type":"constrained"}} -->
	<div class="wp-block-group meptrax-assemblies-section__inner">
		<!-- wp:heading {"textAlign":"center","level":2} -->
		<h2 class="wp-block-heading has-text-align-center">Count the Way Electricians Estimate</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">A symbol is only the beginning. MEPtrax lets you count using the devices and assemblies that match the way you estimate the job.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
