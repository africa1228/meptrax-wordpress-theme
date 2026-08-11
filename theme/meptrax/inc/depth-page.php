<?php
/**
 * Shared depth-page atmosphere + editorial composition.
 *
 * Atmosphere: meptrax-depth.css (shared system; unchanged vocabulary).
 * Editorial: meptrax-depth-editorial.css + per-slug deterministic registry.
 *
 * Editorial primitives are a vocabulary, not a required sequence.
 * Each depth page is composed from its own argument.
 *
 * LOCKED references: operational-awareness (Pass 3), pricing-profitability.
 *
 * @package MEPtrax
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Depth page profiles (atmosphere). Editorial layout is per registry below.
 *
 * @return array<string, string>
 */
function meptrax_depth_page_profiles() {
	return array(
		'operational-awareness'               => 'ops',
		'pricing-profitability'               => 'ops',
		'field-production'                    => 'ops',
		'change-orders'                       => 'ops',
		'performance-learning'                => 'ops',
		'business-control'                    => 'ops',
		'takeoff-requires-your-knowledge'     => 'takeoff',
		'what-does-it-cost-you-to-win-a-job'  => 'takeoff',
		'products'                            => 'products',
	);
}

/**
 * Deterministic editorial layout map (per-page; content-justified).
 *
 * LOCKED:
 *  operational-awareness (Pass 3)
 *  pricing-profitability
 *
 * @return array<string, array<int, string|array{layout:string,span:int}>>
 */
function meptrax_depth_editorial_registry() {
	return array(
		/* ---- LOCKED references ---- */
		'operational-awareness'   => array(
			0 => 'hero',
			2 => 'wide',
			3 => array(
				'layout' => 'contrast',
				'span'   => 2,
			),
			5 => 'wide',
			8 => 'pull',
			9 => 'wide',
		),
		'pricing-profitability'   => array(
			0 => 'hero',
			2 => 'wide',
			4 => array(
				'layout' => 'contrast',
				'span'   => 2,
			),
			6 => 'wide',
			8 => 'pull',
			10 => 'pull',
			11 => 'wide',
		),

		/* ---- Remaining depth pages ---- */
		'field-production' => array(
			0  => 'hero',
			2  => 'wide',
			// behind (short) → ahead (substantial)
			7  => array(
				'layout' => 'contrast',
				'span'   => 2,
			),
			11 => 'pull',
			16 => 'wide',
		),
		'change-orders' => array(
			0  => 'hero',
			3  => 'wide',
			// lifecycle already in copy (Recognized→…→Collected)
			7  => 'pull',
			// lost money (short) → made money (substantial)
			11 => array(
				'layout' => 'contrast',
				'span'   => 2,
			),
			16 => 'wide',
		),
		'performance-learning' => array(
			0  => 'hero',
			5  => 'wide',
			// wrong (short) → right (substantial)
			11 => array(
				'layout' => 'contrast',
				'span'   => 2,
			),
			15 => 'pull',
			23 => 'wide',
		),
		'business-control' => array(
			0  => 'hero',
			// not control (compact) → need what matters (substantial)
			4  => array(
				'layout' => 'contrast',
				'span'   => 2,
			),
			14 => 'pull',
			21 => 'wide',
			25 => 'pull',
		),
		'takeoff-requires-your-knowledge' => array(
			0  => 'hero',
			// AI found N (short) → installations/assemblies (substantial)
			2  => array(
				'layout' => 'contrast',
				'span'   => 2,
			),
			8  => 'pull',
			17 => 'wide',
			26 => 'pull',
		),
		'what-does-it-cost-you-to-win-a-job' => array(
			0  => 'hero',
			1  => 'pull',
			13 => 'wide',
			15 => 'pull',
			22 => 'wide',
		),
		'products' => array(
			0  => 'hero',
			// Three products / continuous story (in-chapter progression already present)
			16 => 'pull',
			// Know bid → happening → made
			17 => array(
				'layout' => 'sequence',
				'span'   => 3,
			),
			20 => 'wide',
		),
	);
}

/**
 * Hero eyebrow for a depth slug (derived label, not new marketing copy).
 *
 * @param string $slug Page slug.
 * @return string
 */
function meptrax_depth_page_eyebrow( $slug ) {
	$labels = array(
		'operational-awareness'              => 'Operational Awareness',
		'pricing-profitability'              => 'Pricing & Profitability',
		'field-production'                   => 'Field Production',
		'change-orders'                      => 'Change Orders',
		'performance-learning'               => 'Performance & Learning',
		'business-control'                   => 'Business Control',
		'takeoff-requires-your-knowledge'    => 'Takeoff Requires Your Knowledge',
		'what-does-it-cost-you-to-win-a-job' => 'What Does It Cost You to Win a Job?',
		'products'                           => 'Products',
	);
	return $labels[ $slug ] ?? '';
}

/**
 * @param string|null $slug Optional.
 * @return bool
 */
function meptrax_is_depth_page( $slug = null ) {
	$profiles = meptrax_depth_page_profiles();
	if ( null !== $slug ) {
		return isset( $profiles[ $slug ] );
	}
	if ( ! is_page() ) {
		return false;
	}
	$page = get_queried_object();
	if ( ! $page || empty( $page->post_name ) ) {
		return false;
	}
	return isset( $profiles[ $page->post_name ] );
}

/**
 * @param string $slug Slug.
 * @return string|null
 */
function meptrax_depth_page_profile( $slug ) {
	$profiles = meptrax_depth_page_profiles();
	return $profiles[ $slug ] ?? null;
}

/**
 * @param string[] $classes Body classes.
 * @return string[]
 */
function meptrax_depth_body_classes( $classes ) {
	if ( ! meptrax_is_depth_page() ) {
		return $classes;
	}
	$page    = get_queried_object();
	$slug    = $page->post_name ?? '';
	$profile = meptrax_depth_page_profile( $slug );

	$classes[] = 'meptrax-depth-page';
	if ( $profile ) {
		$classes[] = 'meptrax-depth-page--' . sanitize_html_class( $profile );
	}
	if ( $slug ) {
		$classes[] = 'meptrax-depth-page--' . sanitize_html_class( $slug );
	}
	return $classes;
}
add_filter( 'body_class', 'meptrax_depth_body_classes' );

/**
 * Enqueue depth CSS. Editorial CSS only when registry maps the page.
 */
function meptrax_enqueue_depth_assets() {
	if ( is_admin() || ! meptrax_is_depth_page() ) {
		return;
	}

	$ver  = wp_get_theme()->get( 'Version' );
	$slug = get_queried_object()->post_name ?? '';

	wp_enqueue_style(
		'meptrax-depth',
		get_template_directory_uri() . '/assets/css/meptrax-depth.css',
		array( 'meptrax-theme' ),
		$ver
	);

	// First editorial pass: OA only.
	$registry = meptrax_depth_editorial_registry();
	if ( isset( $registry[ $slug ] ) ) {
		wp_enqueue_style(
			'meptrax-depth-editorial',
			get_template_directory_uri() . '/assets/css/meptrax-depth-editorial.css',
			array( 'meptrax-depth' ),
			$ver
		);
	}
}
add_action( 'wp_enqueue_scripts', 'meptrax_enqueue_depth_assets', 20 );

/**
 * @param string $html HTML.
 * @return string
 */
function meptrax_depth_heading_text( $html ) {
	if ( preg_match( '/<h[12]\b[^>]*>(.*?)<\/h[12]>/is', $html, $m ) ) {
		return strtolower( wp_strip_all_tags( $m[1] ) );
	}
	return '';
}

/**
 * Atmosphere stage for a chapter (background system — unchanged law).
 *
 * @param string $heading_text Heading.
 * @param int    $index Index.
 * @param int    $total Total.
 * @param string $profile Profile.
 * @return string
 */
function meptrax_depth_pick_modifier( $heading_text, $index, $total, $profile ) {
	$h = $heading_text;
	$t = ( $total <= 1 ) ? 0.0 : ( $index / ( $total - 1 ) );

	$is_plan_subject = (bool) preg_match(
		'/\b(plan|plans|drawing|drawings|takeoff|symbol|symbols|assembl(?:y|ies)|pdf|count|counting|blueprint)\b/',
		$h
	);
	$is_culmination = (bool) preg_match(
		'/\b(operational awareness|the relationship is where|pieces affect each other|understand how those pieces|connecting them|meaning appears|know what.?s happening while)\b/',
		$h
	);
	$is_clarity = (bool) preg_match(
		'/\b(start with takeoff|grow with meptrax|start somewhere|we.re starting with|try meptrax takeoff free|30 days free)\b/',
		$h
	);
	$is_connected = (bool) preg_match(
		'/\b(pieces of the answer|pieces of your business|don.?t stop where|one piece of software|software may already|train of thought|separate boxes)\b/',
		$h
	);
	$is_path = (bool) preg_match(
		'/\b(why\b|what actually happened|while you can still|change the ending|cost you to win|how many bids|what did we expect|what should we)\b/',
		$h
	);

	if ( 0 === $index ) {
		return ( 'takeoff' === $profile ) ? 'blueprint' : 'plain';
	}
	if ( 'products' === $profile ) {
		if ( $t < 0.2 ) {
			return 'plain';
		}
		if ( $t < 0.55 ) {
			return 'soft';
		}
		if ( $t < 0.82 ) {
			return 'path';
		}
		return 'clarity';
	}
	if ( 'takeoff' === $profile ) {
		if ( $is_plan_subject && $t < 0.45 ) {
			return 'blueprint';
		}
		if ( $is_clarity || $t > 0.78 ) {
			return 'clarity';
		}
		if ( $t < 0.55 ) {
			return $is_plan_subject ? 'blueprint' : 'soft';
		}
		return 'path';
	}

	if ( $is_culmination ) {
		return 'culmination';
	}
	if ( $is_connected ) {
		return 'connected';
	}
	if ( $is_clarity || $t > 0.88 ) {
		return 'clarity';
	}
	if ( $is_plan_subject ) {
		return 'soft';
	}
	if ( $is_path || ( $t >= 0.28 && $t < 0.55 ) ) {
		return 'path';
	}
	if ( $t < 0.14 ) {
		return 'plain';
	}
	if ( $t < 0.32 ) {
		return 'soft';
	}
	if ( $t < 0.62 ) {
		return 'path';
	}
	if ( $t < 0.82 ) {
		return 'connected';
	}
	return 'clarity';
}

/**
 * @param string $content Content.
 * @return string[]
 */
function meptrax_depth_split_chapters( $content ) {
	$parts = preg_split( '/(?=<h1\b)/i', $content, -1, PREG_SPLIT_NO_EMPTY );
	if ( ! is_array( $parts ) || count( $parts ) < 1 ) {
		return array();
	}
	$h1_count = preg_match_all( '/<h1\b/i', $content );
	if ( $h1_count < 3 ) {
		$h2_parts = preg_split( '/(?=<h2\b)/i', $content, -1, PREG_SPLIT_NO_EMPTY );
		if ( is_array( $h2_parts ) && count( $h2_parts ) >= 3 ) {
			$parts = $h2_parts;
		}
	}
	$clean = array();
	foreach ( $parts as $part ) {
		$part = trim( $part );
		if ( $part !== '' ) {
			$clean[] = $part;
		}
	}
	return $clean;
}

/**
 * @param array $registry Registry for slug.
 * @param int   $index Chapter index.
 * @return array{layout:string,span:int}|null
 */
function meptrax_depth_editorial_at( $registry, $index ) {
	foreach ( $registry as $start => $spec ) {
		$start = (int) $start;
		if ( is_array( $spec ) ) {
			$span = max( 1, (int) ( $spec['span'] ?? 1 ) );
			if ( $index > $start && $index < $start + $span ) {
				return null;
			}
			if ( $index === $start ) {
				return array(
					'layout' => sanitize_html_class( $spec['layout'] ?? 'reading' ),
					'span'   => $span,
				);
			}
		} elseif ( $index === $start ) {
			return array(
				'layout' => sanitize_html_class( (string) $spec ),
				'span'   => 1,
			);
		}
	}
	return array(
		'layout' => 'reading',
		'span'   => 1,
	);
}

/**
 * OA-only: compose the Operational Awareness process without rewriting words.
 *
 * Layout (existing copy preserved):
 *   EXPECTED | ACTUAL   (pair)
 *        ↓  to
 *   DIFFERENCE → WHY → MEANING  (vertical sequence)
 *        ↓  and ultimately
 *   ACTION  (destination)
 *
 * @param string $html Chapter HTML.
 * @return string
 */
function meptrax_oa_compose_process_sequence( $html ) {
	// Entity-tolerant "What's"
	$whats = 'What(?:\'|&#8217;|&rsquo;)s';

	$pattern = '#(<p\b[^>]*>\s*<strong>\s*What did we expect\?\s*</strong>\s*</p>)\s*'
		. '(<p\b[^>]*>\s*to\s*</p>)\s*'
		. '(<p\b[^>]*>\s*<strong>\s*What actually happened\?\s*</strong>\s*</p>)\s*'
		. '(<p\b[^>]*>\s*to\s*</p>)\s*'
		. '(<p\b[^>]*>\s*<strong>\s*' . $whats . '\s*different\?\s*</strong>\s*</p>)\s*'
		. '(<p\b[^>]*>\s*to\s*</p>)\s*'
		. '(<p\b[^>]*>\s*<strong>\s*Why\?\s*</strong>\s*</p>)\s*'
		. '(<p\b[^>]*>\s*to\s*</p>)\s*'
		. '(<p\b[^>]*>\s*<strong>\s*What does that mean\?\s*</strong>\s*</p>)\s*'
		. '(<p\b[^>]*>\s*and ultimately:\s*</p>)\s*'
		. '(<h2\b[^>]*>\s*What should we do about it\?\s*</h2>)#iu';

	$out = preg_replace_callback(
		$pattern,
		static function ( $m ) {
			$connector = static function ( $p_html ) {
				return '<div class="meptrax-editorial-process__link">' . $p_html . '</div>'
					. '<div class="meptrax-editorial-process__arrow" aria-hidden="true">↓</div>';
			};

			// $m[1] expect, [2] to, [3] actual, [4] to, [5] different,
			// [6] to, [7] why, [8] to, [9] mean, [10] and ultimately, [11] action
			// Pair keeps the intermediate "to" between the two ideas; chain uses the rest.
			return '<div class="meptrax-editorial-process meptrax-editorial--sequence">'
				. '<div class="meptrax-editorial__panels meptrax-editorial__panels--pair meptrax-editorial__panels--pair-process">'
				. '<div class="meptrax-editorial__panel">' . $m[1] . '</div>'
				. '<div class="meptrax-editorial-process__pair-to">' . $m[2] . '</div>'
				. '<div class="meptrax-editorial__panel">' . $m[3] . '</div>'
				. '</div>'
				. $connector( $m[4] )
				. '<div class="meptrax-editorial__panel meptrax-editorial__panel--stage">' . $m[5] . '</div>'
				. $connector( $m[6] )
				. '<div class="meptrax-editorial__panel meptrax-editorial__panel--stage">' . $m[7] . '</div>'
				. $connector( $m[8] )
				. '<div class="meptrax-editorial__panel meptrax-editorial__panel--stage">' . $m[9] . '</div>'
				. $connector( $m[10] )
				. '<div class="meptrax-editorial__panel meptrax-editorial__panel--dest">' . $m[11] . '</div>'
				. '</div>';
		},
		$html,
		1
	);

	if ( ! is_string( $out ) || $out === $html ) {
		// Fallback: at least compose expect/actual pair if full sequence match fails.
		$pair_pattern = '#(<p\b[^>]*>\s*<strong>\s*What did we expect\?\s*</strong>\s*</p>)\s*'
			. '(?:<p\b[^>]*>\s*to\s*</p>\s*)?'
			. '(<p\b[^>]*>\s*<strong>\s*What actually happened\?\s*</strong>\s*</p>)#iu';
		$pair_out     = preg_replace(
			$pair_pattern,
			'<div class="meptrax-editorial__panels meptrax-editorial__panels--pair">'
			. '<div class="meptrax-editorial__panel">$1</div>'
			. '<div class="meptrax-editorial__panel">$2</div>'
			. '</div>',
			$html,
			1
		);
		return is_string( $pair_out ) ? $pair_out : $html;
	}

	return $out;
}

/**
 * Pricing-only: compose the bid→…→why reasoning chain already in the copy.
 * No new words — only wraps existing strong questions + “And then:” + Why.
 *
 * @param string $html Chapter HTML.
 * @return string
 */
function meptrax_pricing_compose_reasoning_sequence( $html ) {
	// Strong question paragraphs, then "And then:", then Why?
	$pattern = '#((?:<p\b[^>]*>\s*<strong>\s*[^<]+?\s*</strong>\s*</p>\s*){2,})'
		. '(<p\b[^>]*>\s*And then:\s*</p>)\s*'
		. '(<h2\b[^>]*>\s*Why\?\s*</h2>)#iu';

	$out = preg_replace_callback(
		$pattern,
		static function ( $m ) {
			$questions_block = $m[1];
			$and_then        = $m[2];
			$why             = $m[3];

			$q_parts = preg_split( '/(?=<p\b)/i', trim( $questions_block ), -1, PREG_SPLIT_NO_EMPTY );
			if ( ! is_array( $q_parts ) || count( $q_parts ) < 2 ) {
				return $m[0];
			}

			$stages = '';
			$count  = count( $q_parts );
			foreach ( $q_parts as $idx => $q_html ) {
				$q_html  = trim( $q_html );
				$stages .= '<div class="meptrax-editorial__panel meptrax-editorial__panel--stage">' . $q_html . '</div>';
				if ( $idx < $count - 1 ) {
					$stages .= '<div class="meptrax-editorial-process__arrow" aria-hidden="true">↓</div>';
				}
			}

			return '<div class="meptrax-editorial-process meptrax-editorial--sequence">'
				. $stages
				. '<div class="meptrax-editorial-process__link">' . $and_then . '</div>'
				. '<div class="meptrax-editorial-process__arrow" aria-hidden="true">↓</div>'
				. '<div class="meptrax-editorial__panel meptrax-editorial__panel--dest">' . $why . '</div>'
				. '</div>';
		},
		$html,
		1
	);

	return is_string( $out ) ? $out : $html;
}

/**
 * Change Orders only: wrap Recognized→…→Collected lifecycle already in copy.
 * Existing ↓ connectors become visual progression; no new labels.
 *
 * @param string $html Chapter HTML.
 * @return string
 */
function meptrax_co_compose_lifecycle_sequence( $html ) {
	if ( false === stripos( $html, 'Recognized' ) || false === stripos( $html, 'Collected' ) ) {
		return $html;
	}

	$pattern = '#(<p\b[^>]*>\s*<strong>\s*Recognized\s*</strong>\s*</p>[\s\S]*?<p\b[^>]*>\s*<strong>\s*Collected\s*</strong>\s*</p>(?:\s*<p\b[^>]*>[\s\S]*?</p>)?)#iu';

	$out = preg_replace_callback(
		$pattern,
		static function ( $m ) {
			$block  = $m[1];
			$chunks = preg_split( '#\s*<p\b[^>]*>\s*↓\s*</p>\s*#iu', $block );
			if ( ! is_array( $chunks ) || count( $chunks ) < 2 ) {
				return $m[0];
			}
			$inner = '<div class="meptrax-editorial-process meptrax-editorial--sequence">';
			$n     = count( $chunks );
			foreach ( $chunks as $idx => $chunk ) {
				$chunk  = trim( $chunk );
				$inner .= '<div class="meptrax-editorial__panel meptrax-editorial__panel--stage">' . $chunk . '</div>';
				if ( $idx < $n - 1 ) {
					// Preserve the existing ↓ character that was in the source paragraphs.
					$inner .= '<div class="meptrax-editorial-process__arrow" aria-hidden="true">↓</div>';
				}
			}
			$inner .= '</div>';
			return $inner;
		},
		$html,
		1
	);

	return is_string( $out ) ? $out : $html;
}

/**
 * Products only: wrap Takeoff → Quote → Business progression already linked by ↓.
 *
 * @param string $html Chapter HTML.
 * @return string
 */
function meptrax_products_compose_story_sequence( $html ) {
	if ( false === stripos( $html, 'Three products' ) ) {
		return $html;
	}
	if ( false === stripos( $html, 'MEPTrax Takeoff' ) || false === stripos( $html, 'MEPTrax Quote' ) ) {
		return $html;
	}

	// From first product h3 (Takeoff) through last ↓-linked block before “Then back…”.
	$pattern = '#((?:<h3\b[^>]*>[\s\S]*?</h3>\s*(?:<p\b[^>]*>[\s\S]*?</p>\s*)+)+)(?:\s*<p\b[^>]*>\s*↓\s*</p>\s*)?(?=<h3\b[^>]*>\s*Then back to the next job\.\s*</h3>)#iu';

	// Simpler: split continuous product segments by bare ↓ paragraphs between Takeoff and Then-back.
	$pattern = '#(<h3\b[^>]*>\s*MEPTrax Takeoff\s*</h3>[\s\S]*?)(?=<h3\b[^>]*>\s*Then back to the next job\.\s*</h3>)#iu';

	$out = preg_replace_callback(
		$pattern,
		static function ( $m ) {
			$block  = $m[1];
			$chunks = preg_split( '#\s*<p\b[^>]*>\s*↓\s*</p>\s*#iu', $block );
			if ( ! is_array( $chunks ) || count( $chunks ) < 2 ) {
				return $m[0];
			}
			$inner = '<div class="meptrax-editorial-process meptrax-editorial--sequence">';
			$n     = count( $chunks );
			foreach ( $chunks as $idx => $chunk ) {
				$chunk  = trim( $chunk );
				$class  = ( $idx === $n - 1 ) ? 'meptrax-editorial__panel meptrax-editorial__panel--stage' : 'meptrax-editorial__panel meptrax-editorial__panel--stage';
				$inner .= '<div class="' . $class . '">' . $chunk . '</div>';
				if ( $idx < $n - 1 ) {
					$inner .= '<div class="meptrax-editorial-process__arrow" aria-hidden="true">↓</div>';
				}
			}
			$inner .= '</div>';
			return $inner;
		},
		$html,
		1
	);

	return is_string( $out ) ? $out : $html;
}

/**
 * @deprecated Name kept for call-sites; use process sequence.
 * @param string $html HTML.
 * @return string
 */
function meptrax_oa_compose_expect_actual_pair( $html ) {
	return meptrax_oa_compose_process_sequence( $html );
}

/**
 * @param string $html_inner Inner HTML.
 * @param string $atmosphere Atmosphere class suffix.
 * @param string $layout Editorial layout.
 * @param string $eyebrow Optional eyebrow.
 * @return string
 */
function meptrax_depth_render_section( $html_inner, $atmosphere, $layout, $eyebrow = '' ) {
	$atmosphere = sanitize_html_class( $atmosphere );
	$layout     = sanitize_html_class( $layout );
	if ( $layout === '' ) {
		$layout = 'reading';
	}

	$classes = array(
		'meptrax-depth-section',
		'meptrax-depth-section--' . $atmosphere,
		'meptrax-editorial',
		'meptrax-editorial--' . $layout,
	);

	$out  = '<div class="' . esc_attr( implode( ' ', $classes ) ) . '"';
	$out .= ' data-depth-stage="' . esc_attr( $atmosphere ) . '"';
	$out .= ' data-editorial="' . esc_attr( $layout ) . '">';

	if ( $eyebrow !== '' && 'hero' === $layout ) {
		$out .= '<p class="meptrax-depth-eyebrow">' . esc_html( $eyebrow ) . '</p>';
	}

	$out .= $html_inner;
	$out .= '</div>';
	return $out;
}

/**
 * @param string $content Post content.
 * @return string
 */
function meptrax_depth_sectionize_content( $content ) {
	if ( ! is_string( $content ) || $content === '' ) {
		return $content;
	}
	if ( false !== strpos( $content, 'meptrax-depth-section' ) ) {
		return $content;
	}
	if ( ! meptrax_is_depth_page() ) {
		return $content;
	}

	$page    = get_queried_object();
	$slug    = $page->post_name ?? '';
	$profile = meptrax_depth_page_profile( $slug );
	if ( ! $profile ) {
		return $content;
	}

	$parts = meptrax_depth_split_chapters( $content );
	if ( ! $parts ) {
		return $content;
	}

	$registry = meptrax_depth_editorial_registry()[ $slug ] ?? array();
	$eyebrow  = meptrax_depth_page_eyebrow( $slug );
	$total    = count( $parts );
	$out      = '';
	$i        = 0;

	while ( $i < $total ) {
		$resolved = meptrax_depth_editorial_at( $registry, $i );
		if ( null === $resolved ) {
			++$i;
			continue;
		}

		$layout = $resolved['layout'];
		$span   = max( 1, (int) $resolved['span'] );
		$span   = min( $span, $total - $i );

		// Multi-chapter contrast / pair / sequence.
		if ( $span > 1 && in_array( $layout, array( 'pair', 'contrast', 'sequence' ), true ) ) {
			$panels = '<div class="meptrax-editorial__panels">';
			$atm0   = 'path';
			for ( $k = 0; $k < $span; $k++ ) {
				$chunk = $parts[ $i + $k ];
				$h     = meptrax_depth_heading_text( $chunk );
				$atm   = meptrax_depth_pick_modifier( $h, $i + $k, $total, $profile );
				if ( 0 === $k ) {
					$atm0 = $atm;
				}
				$panels .= '<div class="meptrax-editorial__panel">' . $chunk . '</div>';
			}
			$panels .= '</div>';
			if ( in_array( $atm0, array( 'plain', 'soft' ), true ) ) {
				$atm0 = 'path';
			}
			$out .= meptrax_depth_render_section( $panels, $atm0, $layout );
			$i   += $span;
			continue;
		}

		// Single chapter.
		$part        = $parts[ $i ];
		$heading     = meptrax_depth_heading_text( $part );
		$atmosphere  = meptrax_depth_pick_modifier( $heading, $i, $total, $profile );
		if ( 'hero' === $layout && 0 === $i ) {
			$atmosphere = ( 'takeoff' === $profile ) ? 'blueprint' : 'plain';
		}
		if ( 'pull' === $layout && 'plain' === $atmosphere ) {
			$atmosphere = 'culmination';
		}

		// OA: expect/actual process sequence inside the pull chapter.
		if ( 'operational-awareness' === $slug && 'pull' === $layout ) {
			$part = meptrax_oa_compose_expect_actual_pair( $part );
		}

		// Pricing: bid→…→why reasoning sequence.
		if ( 'pricing-profitability' === $slug && 'pull' === $layout ) {
			$part = meptrax_pricing_compose_reasoning_sequence( $part );
		}

		// Change Orders: Recognized→…→Collected lifecycle already in copy.
		if ( 'change-orders' === $slug && 'pull' === $layout ) {
			$part = meptrax_co_compose_lifecycle_sequence( $part );
		}

		// Products: Takeoff → Quote → Business progression already linked by ↓.
		if ( 'products' === $slug && 'pull' === $layout ) {
			$part = meptrax_products_compose_story_sequence( $part );
		}

		$out .= meptrax_depth_render_section(
			$part,
			$atmosphere,
			$layout,
			( 'hero' === $layout ) ? $eyebrow : ''
		);
		++$i;
	}

	return $out !== '' ? $out : $content;
}
add_filter( 'the_content', 'meptrax_depth_sectionize_content', 12 );

/**
 * Prefer theme file header/footer over Site Editor customizations so
 * deployable theme files own primary site-shell IA.
 *
 * @param WP_Block_Template|null $block_template Template object.
 * @param string                 $id             Template id.
 * @param string                 $template_type  Type.
 * @return WP_Block_Template|null
 */
function meptrax_prefer_theme_shell_template_parts( $block_template, $id, $template_type ) {
	if ( 'wp_template_part' !== $template_type || ! $block_template instanceof WP_Block_Template ) {
		return $block_template;
	}

	if ( ! in_array( $block_template->slug, array( 'header', 'footer' ), true ) ) {
		return $block_template;
	}

	$file = get_template_directory() . '/parts/' . $block_template->slug . '.html';
	if ( ! is_readable( $file ) ) {
		return $block_template;
	}

	$raw = file_get_contents( $file );
	if ( false === $raw || $raw === '' ) {
		return $block_template;
	}

	$block_template->content = meptrax_replace_url_placeholders( $raw );
	$block_template->source  = 'theme';

	return $block_template;
}
add_filter( 'get_block_template', 'meptrax_prefer_theme_shell_template_parts', 99, 3 );

/**
 * Same override when WP queries a list of templates (editor/preview paths).
 *
 * @param WP_Block_Template[] $query_result  Templates.
 * @param array               $query         Query.
 * @param string              $template_type Type.
 * @return WP_Block_Template[]
 */
function meptrax_prefer_theme_shell_template_parts_list( $query_result, $query, $template_type ) {
	if ( 'wp_template_part' !== $template_type || ! is_array( $query_result ) ) {
		return $query_result;
	}

	foreach ( $query_result as $i => $tpl ) {
		if ( ! $tpl instanceof WP_Block_Template ) {
			continue;
		}
		$query_result[ $i ] = meptrax_prefer_theme_shell_template_parts( $tpl, $tpl->id, $template_type );
	}

	return $query_result;
}
add_filter( 'get_block_templates', 'meptrax_prefer_theme_shell_template_parts_list', 99, 3 );
