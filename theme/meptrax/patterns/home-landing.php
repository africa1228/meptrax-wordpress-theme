<?php
/**
 * Full home landing stack — homepage map.
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
	'description' => __( 'Homepage map: Takeoff available now, path to Quote/Business, depth-page CTAs.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => $hero['content'] . "\n\n" . $body['content'] . "\n\n" . $cta['content'],
);
