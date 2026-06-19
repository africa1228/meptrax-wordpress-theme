<?php
/**
 * Early access notice pattern.
 *
 * @package MEPtrax
 */

return array(
	'title'       => __( 'Early Access Notice', 'meptrax' ),
	'description' => __( 'Visible early-access disclaimer.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => '<!-- wp:group {"align":"wide","className":"meptrax-notice","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide meptrax-notice">
	<!-- wp:paragraph -->
	<p><strong>Early access:</strong> MEPtrax is early-access software. Features change, bugs happen, and service may be interrupted. Export your work regularly (CSV/JSON). Do not use MEPtrax as your only copy of important takeoff data.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->',
);
