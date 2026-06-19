<?php
/**
 * Three-column features pattern.
 *
 * @package MEPtrax
 */

return array(
	'title'       => __( 'Three Features', 'meptrax' ),
	'description' => __( 'Upload, mark, export value props.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => '<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">Upload multi-page PDFs</h3>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p>Keep plan sets organized by project.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">Mark and count on the plan</h3>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p>Count types, markers, and areas per page.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">Export when you need it</h3>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p>Take your takeoff data out in standard formats.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->',
);
