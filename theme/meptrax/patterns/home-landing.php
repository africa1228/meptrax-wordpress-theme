<?php
/**
 * Full home landing stack — Homepage V5.
 *
 * Theme authority: front-page.html inserts this pattern.
 * WordPress page body content is intentionally not used for the homepage.
 *
 * @package MEPtrax
 */

$hero = require __DIR__ . '/hero-split.php';
$body = require __DIR__ . '/homepage-v5-body.php';
$cta  = require __DIR__ . '/cta-band.php';

return array(
	'title'       => __( 'Home Landing (Full)', 'meptrax' ),
	'description' => __( 'Homepage V5: hero, stages, products, founding offer, CTA.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => $hero['content'] . "\n\n" . $body['content'] . "\n\n" . $cta['content'],
);
