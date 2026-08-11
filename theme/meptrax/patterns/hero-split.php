<?php
/**
 * Split hero — Homepage map (Takeoff now + platform path).
 *
 * @package MEPtrax
 */

return array(
	'title'       => __( 'Hero Split', 'meptrax' ),
	'description' => __( 'Know what you bid hero with Takeoff CTA and product path link.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => '<!-- wp:group {"align":"full","className":"meptrax-landing-shell","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull meptrax-landing-shell">
	<!-- wp:group {"className":"meptrax-landing-backdrop","layout":{"type":"default"}} -->
	<div class="wp-block-group meptrax-landing-backdrop">
		<!-- wp:spacer {"height":"1px"} -->
		<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"meptrax-hero-split meptrax-hero-split--v5 meptrax-hero-split--map","layout":{"type":"default"}} -->
	<div class="wp-block-group meptrax-hero-split meptrax-hero-split--v5 meptrax-hero-split--map">
		<!-- wp:group {"className":"meptrax-hero-split__content","layout":{"type":"default"}} -->
		<div class="wp-block-group meptrax-hero-split__content">
			<!-- wp:paragraph {"className":"meptrax-hero-badge"} -->
			<p class="meptrax-hero-badge">Software built for electrical contractors</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"meptrax-hero-title-stack"} -->
			<h1 class="wp-block-heading meptrax-hero-title-stack">Know what you bid.<br>Know what\'s happening.<br>Know your actual profit.</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"meptrax-hero-lead"} -->
			<p class="meptrax-hero-lead">You already have software that records pieces of your business.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"meptrax-hero-lead"} -->
			<p class="meptrax-hero-lead">MEPTrax is being built to connect the story — from the work you count, to what you sell, to what actually happens, to your actual profit.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"meptrax-hero-start"} -->
			<p class="meptrax-hero-start">We\'re starting with MEPTrax Takeoff.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"meptrax-status-badge meptrax-status-badge--now"} -->
			<p class="meptrax-status-badge meptrax-status-badge--now">Available now</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"meptrax-hero-split__buttons","layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group meptrax-hero-split__buttons">
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"meptrax-btn-primary meptrax-btn-lg","url":"{{MEPTRAX_APP_SIGNUP_URL}}"} -->
					<div class="wp-block-button meptrax-btn-primary meptrax-btn-lg"><a class="wp-block-button__link wp-element-button" href="{{MEPTRAX_APP_SIGNUP_URL}}">Try MEPTrax Takeoff Free</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
				<!-- wp:paragraph {"className":"meptrax-text-cta"} -->
				<p class="meptrax-text-cta"><a href="/products/">See the MEPTrax product path →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"className":"meptrax-hero-trust"} -->
			<p class="meptrax-hero-trust">30 days free. No credit card required.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"meptrax-hero-split__visual","layout":{"type":"default"}} -->
		<div class="wp-block-group meptrax-hero-split__visual">
			<!-- wp:spacer {"height":"1px"} -->
			<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
