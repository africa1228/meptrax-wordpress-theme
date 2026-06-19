<?php
/**
 * Honesty list pattern.
 *
 * @package MEPtrax
 */

return array(
	'title'       => __( 'Honesty List', 'meptrax' ),
	'description' => __( 'What MEPtrax is not.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => '<!-- wp:group {"align":"wide","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading">What MEPtrax is not</h2>
	<!-- /wp:heading -->

	<!-- wp:list -->
	<ul class="wp-block-list">
		<li>Not a substitute for licensed engineering judgment or code compliance review.</li>
		<li>Not a full estimating, quoting, or job-costing system (Tradulix is the broader platform path later).</li>
		<li>Not a guaranteed backup or disaster-recovery service.</li>
	</ul>
	<!-- /wp:list -->
</div>
<!-- /wp:group -->',
);
