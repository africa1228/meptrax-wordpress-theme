<?php
/**
 * Homepage body — map of Takeoff today + links to depth pages.
 *
 * Status law:
 * - Takeoff: AVAILABLE NOW
 * - Quote: RELEASING SOON
 * - Business / domain modules: IN DEVELOPMENT
 *
 * @package MEPtrax
 */

return array(
	'title'       => __( 'Homepage Map Body', 'meptrax' ),
	'description' => __( 'Compressed homepage sections 2–9 with CTAs to existing depth pages.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => '
<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--products","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--products">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Start with Takeoff.<br>Grow with MEPTrax.</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">The same work should not have to start over every time it moves to another part of your company.</p>
	<!-- /wp:paragraph -->
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
			<!-- wp:paragraph {"className":"meptrax-product-card__flow"} -->
			<p class="meptrax-product-card__flow">Plans → assemblies → quantities</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Work directly from PDF electrical plans. Count the work, organize it by room or area, use assemblies, review quantities and export the takeoff.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"meptrax-text-cta"} -->
			<p class="meptrax-text-cta"><a href="{{MEPTRAX_APP_SIGNUP_URL}}">Try Takeoff Free →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"meptrax-product-card","layout":{"type":"default"}} -->
		<div class="wp-block-group meptrax-product-card">
			<!-- wp:paragraph {"className":"meptrax-status-badge meptrax-status-badge--soon"} -->
			<p class="meptrax-status-badge meptrax-status-badge--soon">Releasing soon</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">MEPTrax Quote</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"meptrax-product-card__tagline"} -->
			<p class="meptrax-product-card__tagline">Know what you\'re selling.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"meptrax-product-card__flow"} -->
			<p class="meptrax-product-card__flow">Takeoff → cost → price → proposal → accepted work</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Carry the work you already took off into costing, pricing and the proposal — without rebuilding the job from scratch.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"meptrax-text-cta"} -->
			<p class="meptrax-text-cta"><a href="/products/">See the product path →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"meptrax-product-card","layout":{"type":"default"}} -->
		<div class="wp-block-group meptrax-product-card">
			<!-- wp:paragraph {"className":"meptrax-status-badge meptrax-status-badge--stages"} -->
			<p class="meptrax-status-badge meptrax-status-badge--stages">In development</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">MEPTrax Business</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"meptrax-product-card__tagline"} -->
			<p class="meptrax-product-card__tagline">Know what\'s happening — and what you actually made.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"meptrax-product-card__flow"} -->
			<p class="meptrax-product-card__flow">Production → labor → Change Orders → cost → profitability → learning</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Connect what you expected with what actually happens while the job is being built.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"meptrax-text-cta"} -->
			<p class="meptrax-text-cta"><a href="/products/">See where MEPTrax is going →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-note"} -->
	<p class="has-text-align-center meptrax-v5-note">MEPTrax Takeoff is available today. Quote and Business are separate products being developed and are not included with a Takeoff subscription unless explicitly stated.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--takeoff-econ","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--takeoff-econ">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">How many bids does it take you to win a job?</h2>
	<!-- /wp:heading -->
	<!-- wp:list {"className":"meptrax-v5-question-list"} -->
	<ul class="meptrax-v5-question-list wp-block-list">
		<li>How long does each takeoff take?</li>
		<li>How do you value your time?</li>
	</ul>
	<!-- /wp:list -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">Your established customers may give you most of what you bid.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">Growth is different.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">Finding your next good customer may mean taking off several projects that never become your jobs.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull"} -->
	<p class="has-text-align-center meptrax-v5-pull">The work you win has to support the estimating time spent on the work you don\'t.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-text-cta"} -->
	<p class="has-text-align-center meptrax-text-cta"><a href="/what-does-it-cost-you-to-win-a-job/">What does it cost you to win a job? →</a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--knowledge","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--knowledge">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Takeoff requires your knowledge.</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull"} -->
	<p class="has-text-align-center meptrax-v5-pull">It shouldn\'t consume your life.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">AI can recognize a receptacle symbol.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">An electrician knows that identical symbols can represent different installations.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">Drywall. Block. Tile. Surface mount. Outdoor. Different conditions can mean different assemblies.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull"} -->
	<p class="has-text-align-center meptrax-v5-pull">The symbol didn\'t change.<br>The assembly did.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">MEPTrax isn\'t being built around pretending AI already knows your trade.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">We\'re building toward software that learns from the decisions electricians actually make.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-text-cta"} -->
	<p class="has-text-align-center meptrax-text-cta"><a href="/takeoff-requires-your-knowledge/">See why MEPTrax takes a different approach →</a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--transition","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--transition">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">What if the takeoff didn\'t end when you exported it?</h2>
	<!-- /wp:heading -->
	<!-- wp:list {"className":"meptrax-v5-connect-list"} -->
	<ul class="meptrax-v5-connect-list wp-block-list">
		<li>What you count becomes what you quote.</li>
		<li>What you quote becomes what you expect.</li>
		<li>What you expect meets reality in the field.</li>
		<li>And what actually happens should make the next job better.</li>
	</ul>
	<!-- /wp:list -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull"} -->
	<p class="has-text-align-center meptrax-v5-pull">The job is one story.<br>MEPTrax is being built to keep it connected.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-text-cta"} -->
	<p class="has-text-align-center meptrax-text-cta"><a href="/products/">Explore MEPTrax →</a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--biz-buttons","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--biz-buttons">
	<!-- wp:group {"className":"meptrax-biz-grid","layout":{"type":"default"}} -->
	<div class="wp-block-group meptrax-biz-grid">
		<!-- wp:group {"className":"meptrax-product-card","layout":{"type":"default"}} -->
		<div class="wp-block-group meptrax-product-card">
			<!-- wp:paragraph {"className":"meptrax-status-badge meptrax-status-badge--stages"} -->
			<p class="meptrax-status-badge meptrax-status-badge--stages">In development</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">How low can you bid — and still be glad you won the job?</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Knowing what you need to charge is one thing. The market decides what it will pay. If those numbers don\'t meet, where can you improve the cost of producing the work?</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>And when a job performs better than expected — do you know why?</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"meptrax-text-cta"} -->
			<p class="meptrax-text-cta"><a href="/pricing-profitability/">Explore Pricing &amp; Profitability →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"meptrax-product-card","layout":{"type":"default"}} -->
		<div class="wp-block-group meptrax-product-card">
			<!-- wp:paragraph {"className":"meptrax-status-badge meptrax-status-badge--stages"} -->
			<p class="meptrax-status-badge meptrax-status-badge--stages">In development</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Your electricians worked all day.</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"meptrax-product-card__tagline"} -->
			<p class="meptrax-product-card__tagline">What did they actually accomplish?</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>A timecard tells you how many hours you paid for. It doesn\'t tell you whether those hours produced more or less work than you expected.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Hours tell you what you spent. Production helps tell you what you got for it.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"meptrax-text-cta"} -->
			<p class="meptrax-text-cta"><a href="/field-production/">Explore Field Production →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"meptrax-product-card","layout":{"type":"default"}} -->
		<div class="wp-block-group meptrax-product-card">
			<!-- wp:paragraph {"className":"meptrax-status-badge meptrax-status-badge--stages"} -->
			<p class="meptrax-status-badge meptrax-status-badge--stages">In development</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Every Change Order changes your profit.</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"meptrax-product-card__tagline"} -->
			<p class="meptrax-product-card__tagline">The question is which way.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Changed work can become profitable additional business. Or it can consume labor and material you never recover.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Approval protects the price. It doesn\'t guarantee the profit.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"meptrax-text-cta"} -->
			<p class="meptrax-text-cta"><a href="/change-orders/">Explore Change Orders →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"meptrax-product-card","layout":{"type":"default"}} -->
		<div class="wp-block-group meptrax-product-card">
			<!-- wp:paragraph {"className":"meptrax-status-badge meptrax-status-badge--stages"} -->
			<p class="meptrax-status-badge meptrax-status-badge--stages">In development</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Your people learn every day.</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"meptrax-product-card__tagline"} -->
			<p class="meptrax-product-card__tagline">Does your company?</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>A job went badly? Learn from it. A job went exceptionally well? Learn from that too.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"meptrax-v5-pull meptrax-card-pull"} -->
			<p class="meptrax-v5-pull meptrax-card-pull">Don\'t make the next job relearn what the last job already taught you.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"meptrax-text-cta"} -->
			<p class="meptrax-text-cta"><a href="/performance-learning/">Explore Performance &amp; Learning →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"meptrax-product-card","layout":{"type":"default"}} -->
		<div class="wp-block-group meptrax-product-card">
			<!-- wp:paragraph {"className":"meptrax-status-badge meptrax-status-badge--stages"} -->
			<p class="meptrax-status-badge meptrax-status-badge--stages">In development</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">You built a company.</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"meptrax-product-card__tagline"} -->
			<p class="meptrax-product-card__tagline">Did you accidentally build yourself a bigger job?</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>As the company grows, you cannot personally know everything that\'s happening. You shouldn\'t have to.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>You don\'t need more information. You need to know what matters.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"meptrax-text-cta"} -->
			<p class="meptrax-text-cta"><a href="/business-control/">Explore Business Control →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--awareness","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--awareness">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Your questions don\'t stop where one piece of software ends.</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">Your estimating software knows the estimate. Your timekeeping software knows the hours. Your project software knows the job. Your accounting software knows the transactions.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">All useful. But the questions that determine whether you made money cross all of them.</p>
	<!-- /wp:paragraph -->
	<!-- wp:list {"className":"meptrax-v5-question-list meptrax-oa-sequence"} -->
	<ul class="meptrax-v5-question-list meptrax-oa-sequence wp-block-list">
		<li>What did we expect?</li>
		<li>What actually happened?</li>
		<li>What\'s different?</li>
		<li>Why?</li>
		<li>What should we correct?</li>
		<li>What should we reinforce?</li>
		<li>What should we know next time?</li>
	</ul>
	<!-- /wp:list -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">Most software records pieces of the answer.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">MEPTrax is being built to preserve the relationships between them.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull meptrax-v5-pull--oa-reveal"} -->
	<p class="has-text-align-center meptrax-v5-pull meptrax-v5-pull--oa-reveal">We call that Operational Awareness Software.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">Know what\'s happening while you can still do something about it.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-text-cta"} -->
	<p class="has-text-align-center meptrax-text-cta"><a href="/operational-awareness/">What is Operational Awareness? →</a></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"className":"meptrax-success-pair","layout":{"type":"default"}} -->
	<div class="wp-block-group meptrax-success-pair">
		<!-- wp:group {"className":"meptrax-product-card meptrax-success-card","layout":{"type":"default"}} -->
		<div class="wp-block-group meptrax-product-card meptrax-success-card">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Something went wrong?</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"meptrax-product-card__tagline"} -->
			<p class="meptrax-product-card__tagline">Find out why. Correct it.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"meptrax-product-card meptrax-success-card","layout":{"type":"default"}} -->
		<div class="wp-block-group meptrax-product-card meptrax-success-card">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Something went right?</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"meptrax-product-card__tagline"} -->
			<p class="meptrax-product-card__tagline">Find out why. Reinforce it.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">Operational Awareness isn\'t only about finding losses and overruns. Your best jobs, strongest crews and unexpectedly good results may contain some of the most valuable information your company produces.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-pull"} -->
	<p class="has-text-align-center meptrax-v5-pull">A good year shouldn\'t only produce money.<br>It should produce knowledge.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-text-cta"} -->
	<p class="has-text-align-center meptrax-text-cta"><a href="/performance-learning/">See how a company can learn →</a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"meptrax-v5-section meptrax-v5-section--honesty","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull meptrax-v5-section meptrax-v5-section--honesty">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">You don\'t have to buy the future to start today.</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">MEPTrax is being released in usable stages.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-prose"} -->
	<p class="has-text-align-center meptrax-v5-prose">Takeoff is available now. Quote is releasing soon. Business and broader Operational Awareness capabilities are in development.</p>
	<!-- /wp:paragraph -->
	<!-- wp:group {"className":"meptrax-status-row","layout":{"type":"default"}} -->
	<div class="wp-block-group meptrax-status-row">
		<!-- wp:paragraph -->
		<p><strong>MEPTrax Takeoff</strong><br><span class="meptrax-status-badge meptrax-status-badge--now">Available now</span></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><strong>MEPTrax Quote</strong><br><span class="meptrax-status-badge meptrax-status-badge--soon">Releasing soon</span></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><strong>MEPTrax Business</strong><br><span class="meptrax-status-badge meptrax-status-badge--stages">In development</span></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-v5-note"} -->
	<p class="has-text-align-center meptrax-v5-note">Buying MEPTrax Takeoff does not include Quote, Business or other future products unless explicitly stated.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","className":"meptrax-text-cta"} -->
	<p class="has-text-align-center meptrax-text-cta"><a href="/products/">See all MEPTrax products →</a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
',
);
