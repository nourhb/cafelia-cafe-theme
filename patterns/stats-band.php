<?php
/**
 * Title: Stats band
 * Slug: cafelia/stats-band
 * Categories: cafelia
 * Description: Animated counters — cups served, rating, years, pastries.
 *
 * @package Cafelia
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#3e2f25","text":"#f5efe6"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background has-text-color" style="background-color:#3e2f25;color:#f5efe6;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","className":"cafelia-count","style":{"typography":{"fontSize":"2.75rem","fontWeight":"800"},"color":{"text":"#dcae7c"}}} -->
			<p class="has-text-align-center cafelia-count has-text-color" style="color:#dcae7c;font-size:2.75rem;font-weight:800" data-count="480" data-suffix="K+">0</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#c9bda9"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#c9bda9;font-size:0.95rem">Cups poured</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","className":"cafelia-count","style":{"typography":{"fontSize":"2.75rem","fontWeight":"800"},"color":{"text":"#dcae7c"}}} -->
			<p class="has-text-align-center cafelia-count has-text-color" style="color:#dcae7c;font-size:2.75rem;font-weight:800" data-count="11" data-suffix=" yrs">0</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#c9bda9"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#c9bda9;font-size:0.95rem">On Queen Street</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","className":"cafelia-count","style":{"typography":{"fontSize":"2.75rem","fontWeight":"800"},"color":{"text":"#dcae7c"}}} -->
			<p class="has-text-align-center cafelia-count has-text-color" style="color:#dcae7c;font-size:2.75rem;font-weight:800" data-count="49" data-suffix="">0</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#c9bda9"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#c9bda9;font-size:0.95rem">4.9-star rating</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.75rem","fontWeight":"800"},"color":{"text":"#dcae7c"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#dcae7c;font-size:2.75rem;font-weight:800">300+</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#c9bda9"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#c9bda9;font-size:0.95rem">Pastries baked weekly</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
