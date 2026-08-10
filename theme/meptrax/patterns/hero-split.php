<?php
/**
 * Split hero pattern — Homepage V5.1.
 *
 * @package MEPtrax
 */

return array(
	'title'       => __( 'Hero Split', 'meptrax' ),
	'description' => __( 'Profit-question hero with Takeoff bridge and trial CTA.', 'meptrax' ),
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

	<!-- wp:group {"className":"meptrax-hero-split meptrax-hero-split--v5","layout":{"type":"default"}} -->
	<div class="wp-block-group meptrax-hero-split meptrax-hero-split--v5">
		<!-- wp:group {"className":"meptrax-hero-split__content","layout":{"type":"default"}} -->
		<div class="wp-block-group meptrax-hero-split__content">
			<!-- wp:paragraph {"className":"meptrax-hero-badge"} -->
			<p class="meptrax-hero-badge">Built by electricians, for electricians</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1} -->
			<h1 class="wp-block-heading">You work too hard not to know where your money is going.</h1>
			<!-- /wp:heading -->

			<!-- wp:list {"className":"meptrax-hero-questions"} -->
			<ul class="meptrax-hero-questions wp-block-list">
				<li>Am I charging enough?</li>
				<li>Which kinds of jobs make me the most money?</li>
				<li>Where am I losing profit without realizing it?</li>
				<li>Is my labor taking longer than I estimated?</li>
				<li>What can I change to make more profit?</li>
			</ul>
			<!-- /wp:list -->

			<!-- wp:paragraph {"className":"meptrax-hero-bridge"} -->
			<p class="meptrax-hero-bridge">MEPTrax connects estimating, field performance and your actual costs—so you can see what\'s making you money, what\'s costing you money, and why.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"meptrax-hero-start"} -->
			<p class="meptrax-hero-start">We\'re starting with MEPTrax Takeoff.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"meptrax-hero-tagline"} -->
			<p class="meptrax-hero-tagline">Know what you bid. Know what\'s happening. Know what you actually made.</p>
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
