<?php
/**
 * Contractor features grid (mockup layout).
 *
 * @package MEPtrax
 */

return array(
	'title'       => __( 'Contractor Features', 'meptrax' ),
	'description' => __( 'Three-column Find, Mark, Track feature section.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => '<!-- wp:group {"align":"full","className":"meptrax-features-section","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull meptrax-features-section" id="features">
	<!-- wp:group {"className":"meptrax-features-section__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group meptrax-features-section__inner">
		<!-- wp:paragraph {"className":"meptrax-features-eyebrow"} -->
		<p class="meptrax-features-eyebrow">Built for electrical contractors</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":2} -->
		<h2 class="wp-block-heading has-text-align-center">Everything in one place. Nothing gets missed.</h2>
		<!-- /wp:heading -->

		<!-- wp:group {"className":"meptrax-features-grid","layout":{"type":"default"}} -->
		<div class="wp-block-group meptrax-features-grid">
			<!-- wp:group {"className":"meptrax-feature-card","layout":{"type":"default"}} -->
			<div class="wp-block-group meptrax-feature-card">
				<!-- wp:paragraph {"className":"meptrax-feature-icon meptrax-feature-icon--find"} -->
				<p class="meptrax-feature-icon meptrax-feature-icon--find"></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Find it fast</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Search across sheets and specs in seconds.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"meptrax-feature-card","layout":{"type":"default"}} -->
			<div class="wp-block-group meptrax-feature-card">
				<!-- wp:paragraph {"className":"meptrax-feature-icon meptrax-feature-icon--mark"} -->
				<p class="meptrax-feature-icon meptrax-feature-icon--mark"></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Mark with confidence</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Place markers, notes, and counts that stay organized.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"meptrax-feature-card","layout":{"type":"default"}} -->
			<div class="wp-block-group meptrax-feature-card">
				<!-- wp:paragraph {"className":"meptrax-feature-icon meptrax-feature-icon--track"} -->
				<p class="meptrax-feature-icon meptrax-feature-icon--track"></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Track everything</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Real-time totals and exports you can trust.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
