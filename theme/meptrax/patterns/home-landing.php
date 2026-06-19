<?php
/**
 * Full home landing stack (mockup-style).
 *
 * @package MEPtrax
 */

$hero         = require __DIR__ . '/hero-split.php';
$features     = require __DIR__ . '/contractor-features.php';
$donate       = require __DIR__ . '/power-flowing-donate.php';
$cta          = require __DIR__ . '/cta-band.php';

return array(
	'title'       => __( 'Home Landing (Full)', 'meptrax' ),
	'description' => __( 'Complete homepage: split hero, contractor features, donate, CTA.', 'meptrax' ),
	'categories'  => array( 'meptrax' ),
	'content'     => $hero['content'] . "\n\n" . $features['content'] . "\n\n" . $donate['content'] . "\n\n" . $cta['content'],
);
