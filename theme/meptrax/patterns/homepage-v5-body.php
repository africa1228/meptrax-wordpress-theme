<?php
/**
 * Homepage V5 body sections (after hero).
 *
 * Content + information architecture only.
 * No unfinished detail-page CTAs.
 *
 * @package MEPtrax
 */

return array(
	'title'       => __( 'Homepage V5 Body', 'meptrax' ),
	'description' => __( 'Remaining homepage V5 sections after hero.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => '
<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--software","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--software">
	<!-- wp:paragraph {"className":"meptrax-v5-eyebrow"} -->
	<p class="meptrax-v5-eyebrow">Software shouldn\'t become another job</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">You have an electrical business to run.</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">You shouldn\'t need days of setup, hours of training, or somebody else\'s idea of how an electrical contractor should work just to get something useful from your software.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">MEPTrax gives you practical starting points, then lets you make them fit your company.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull"} -->
	<p class="has-text-align-center meptrax-v5-pull">Your software should fit your company. Not the other way around.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--takeoff","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--takeoff">
	<!-- wp:paragraph {"className":"meptrax-status-badge meptrax-status-badge--now"} -->
	<p class="meptrax-status-badge meptrax-status-badge--now">Available now</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Start with MEPTrax Takeoff.</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">MEPTrax is a much larger system, and much of that system is already built. We\'re releasing it in logical stages so each piece is useful when it reaches your hands.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull"} -->
	<p class="has-text-align-center meptrax-v5-pull">Takeoff is available now.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">Upload your plans. Perform your takeoff. Work with electrical assemblies. Get your quantities.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">Then get back to estimating.</p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"meptrax-btn-primary meptrax-btn-lg","url":"{{MEPTRAX_APP_SIGNUP_URL}}"} -->
		<div class="wp-block-button meptrax-btn-primary meptrax-btn-lg"><a class="wp-block-button__link wp-element-button" href="{{MEPTRAX_APP_SIGNUP_URL}}">Try MEPTrax Takeoff Free</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-support"} -->
	<p class="has-text-align-center meptrax-v5-support">30 days free. No credit card required.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--assemblies","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--assemblies">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Start with ours. Make it yours.</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">Every electrical contractor has preferred parts, suppliers, prices and ways of doing the work.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">MEPTrax gives you practical electrical assemblies to start with and lets you create and organize assemblies around the way you work.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-note"} -->
	<p class="has-text-align-center meptrax-v5-note">We\'re expanding assembly customization to give contractors even more control over their own parts, pricing and labor.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--future meptrax-v5-section--changeorders","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--future meptrax-v5-section--changeorders">
	<!-- wp:paragraph {"className":"meptrax-status-badge meptrax-status-badge--coming"} -->
	<p class="meptrax-status-badge meptrax-status-badge--coming">Coming soon</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Don\'t let extra work become free work.</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">A GC asks for a change. Did anyone document it? Who requested it? Was it priced? Who needs to approve it? Is the field allowed to proceed?</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull"} -->
	<p class="has-text-align-center meptrax-v5-pull">Did it get billed? Did you get paid?</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">Every contractor handles changes differently. MEPTrax is being built to follow your company\'s rules.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">Capture the change. Add photos. Record who requested it. Route it to the right person. Get the right approval. Notify the field when they\'re clear to proceed. Then keep following it through billing and payment.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull"} -->
	<p class="has-text-align-center meptrax-v5-pull">Make doing it right faster than doing it wrong.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--future meptrax-v5-section--field","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--future meptrax-v5-section--field">
	<!-- wp:paragraph {"className":"meptrax-status-badge meptrax-status-badge--coming"} -->
	<p class="meptrax-status-badge meptrax-status-badge--coming">Coming soon</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Your electricians worked all day. What did they actually accomplish?</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">A timecard tells you how many hours you paid for. That\'s not the same as knowing what those hours accomplished.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">MEPTrax Field Control is being built to connect field work with what was estimated in the office.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">See what was accomplished. Compare expected labor with actual labor. Capture delays, changes and problems while they\'re happening.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull"} -->
	<p class="has-text-align-center meptrax-v5-pull">Find out where the labor is going while there\'s still time to do something about it.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--awareness","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--awareness">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Your business doesn\'t operate in separate boxes. Why should your software?</h2>
	<!-- /wp:heading -->
	<!-- wp:list {"className":"meptrax-v5-connect-list"} -->
	<ul class="meptrax-v5-connect-list wp-block-list">
		<li>Your estimate affects the job.</li>
		<li>Field productivity affects labor cost.</li>
		<li>Purchasing affects margin.</li>
		<li>Changes affect the contract.</li>
		<li>Billing affects cash.</li>
	</ul>
	<!-- /wp:list -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull"} -->
	<p class="has-text-align-center meptrax-v5-pull">It\'s all connected.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">MEPTrax is built around those connections. Instead of simply recording separate activities, MEPTrax relates what\'s happening across your business so you can understand what happened, why it happened, and what it means for everything else.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull"} -->
	<p class="has-text-align-center meptrax-v5-pull">We call it Operational Awareness.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--estimate","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--estimate">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Your estimate shouldn\'t disappear when you win the job.</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">You estimated labor. You estimated material. You accounted for overhead. You expected a profit. Then you won the job.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull"} -->
	<p class="has-text-align-center meptrax-v5-pull">That\'s when your estimate should become more useful.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">MEPTrax is being built to carry that information forward and compare what you expected with what actually happens.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--products","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--products">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Start with what you need. Add more when you\'re ready.</h2>
	<!-- /wp:heading -->
	<!-- wp:group {"className":"meptrax-product-grid","layout":{"type":"default"}} -->
	<div class="wp-block-group meptrax-product-grid">
		<!-- wp:group {"className":"meptrax-product-card meptrax-product-card--now","layout":{"type":"default"}} -->
		<div class="wp-block-group meptrax-product-card meptrax-product-card--now">
			<!-- wp:paragraph {"className":"meptrax-status-badge meptrax-status-badge--now"} -->
			<p class="meptrax-status-badge meptrax-status-badge--now">Available now</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">MEPTrax Takeoff</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"meptrax-product-card__tagline"} -->
			<p class="meptrax-product-card__tagline">Know the work.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Plans, takeoff, assemblies and quantities.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"meptrax-product-card","layout":{"type":"default"}} -->
		<div class="wp-block-group meptrax-product-card">
			<!-- wp:paragraph {"className":"meptrax-status-badge meptrax-status-badge--coming"} -->
			<p class="meptrax-status-badge meptrax-status-badge--coming">Coming soon</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">MEPTrax Quote</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"meptrax-product-card__tagline"} -->
			<p class="meptrax-product-card__tagline">Know what to charge.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Carry Takeoff quantities forward into material, labor, overhead, profit, pricing, proposal, contract and acceptance.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"meptrax-product-card","layout":{"type":"default"}} -->
		<div class="wp-block-group meptrax-product-card">
			<!-- wp:paragraph {"className":"meptrax-status-badge meptrax-status-badge--stages"} -->
			<p class="meptrax-status-badge meptrax-status-badge--stages">Released in stages</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">MEPTrax Business</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"meptrax-product-card__tagline"} -->
			<p class="meptrax-product-card__tagline">Know what\'s happening. Know what you\'re making.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Field control, productivity, change orders, materials, purchasing, inventory, job costs, billing, payments, AP/AR and profitability.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-note"} -->
	<p class="has-text-align-center meptrax-v5-note">Choose what your company needs. Add more MEPTrax when you\'re ready. Takeoff does not include Quote or Business.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--profit","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--profit">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Winning work doesn\'t mean you\'re making money.</h2>
	<!-- /wp:heading -->
	<!-- wp:list {"className":"meptrax-v5-question-list"} -->
	<ul class="meptrax-v5-question-list wp-block-list">
		<li>What did I expect to make?</li>
		<li>What am I actually making?</li>
		<li>Where did the difference go?</li>
	</ul>
	<!-- /wp:list -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">Examples contractors run into every week: labor running over estimate, material cost increasing, crew delays, extra work not billed, and overhead affecting true profitability.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull"} -->
	<p class="has-text-align-center meptrax-v5-pull">Don\'t find out after the job is over.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--learning","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--learning">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Every job should make the next estimate better.</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">If you estimated an installation at five hours and your crews consistently need seven, you should know.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">If one kind of project consistently makes money and another doesn\'t, you should know.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">If your estimate was right but productivity, material costs or missed changes ate the profit, you should know why.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull"} -->
	<p class="has-text-align-center meptrax-v5-pull">Know where you\'re making money. Know where you\'re losing it. Know why.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--founding","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--founding">
	<!-- wp:paragraph {"className":"meptrax-status-badge meptrax-status-badge--planned"} -->
	<p class="meptrax-status-badge meptrax-status-badge--planned">Founding offer</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Try MEPTrax Takeoff free for 30 days.</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-support"} -->
	<p class="has-text-align-center meptrax-v5-support">No credit card required.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">We\'re looking for our first <strong>100 verified electrical contracting companies</strong>.</p>
	<!-- /wp:paragraph -->
	<!-- wp:group {"className":"meptrax-founding-card","layout":{"type":"default"}} -->
	<div class="wp-block-group meptrax-founding-card">
		<!-- wp:heading {"textAlign":"center","level":3} -->
		<h3 class="wp-block-heading has-text-align-center">Founding 100 Takeoff pricing</h3>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","className":"meptrax-founding-price"} -->
		<p class="has-text-align-center meptrax-founding-price"><strong>$39.99</strong>/month &nbsp;·&nbsp; <strong>$399</strong>/year</p>
		<!-- /wp:paragraph -->
		<!-- wp:list {"className":"meptrax-founding-list"} -->
		<ul class="meptrax-founding-list wp-block-list">
			<li>2 users included</li>
			<li>Additional Takeoff users: $10/month each</li>
			<li>Subscribe during trial and keep remaining free-trial time</li>
			<li>Founding pricing applies to MEPTrax Takeoff</li>
			<li>Future MEPTrax products may have separate pricing</li>
			<li>Eligibility and business verification required</li>
		</ul>
		<!-- /wp:list -->
		<!-- wp:paragraph {"align":"center","className":"meptrax-v5-note"} -->
		<p class="has-text-align-center meptrax-v5-note">Planned founding offer — pricing information for Founding 100. Self-serve paid checkout is not live yet. Start with the free Takeoff trial today.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"meptrax-btn-primary meptrax-btn-lg","url":"{{MEPTRAX_APP_SIGNUP_URL}}"} -->
		<div class="wp-block-button meptrax-btn-primary meptrax-btn-lg"><a class="wp-block-button__link wp-element-button" href="{{MEPTRAX_APP_SIGNUP_URL}}">Try MEPTrax Takeoff Free</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
',
);
