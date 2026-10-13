<?php
/**
 * Title: About story
 * Slug: cafelia/about-story
 * Categories: cafelia
 * Description: Café story with photo, values and signature.
 *
 * @package Cafelia
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"className":"is-style-soft-frame"} -->
			<figure class="wp-block-image is-style-soft-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cafe-interior.jpg" alt="Warm wooden interior of the Cafelia café"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph -->
			<p><span class="cafelia-badge cafelia-badge--sage">Our story</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
			<h2 class="wp-block-heading">A little café with a big heart.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Cafelia began in 2015 with a secondhand espresso machine and a simple idea: great coffee deserves a warm room. Today we roast in small batches, bake our croissants every morning, and know most of our regulars by name — and by order.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Every cup supports local growers, every pastry is made in-house, and every table is a standing invitation to slow down for a while.</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"layout":{"type":"flex"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700"}}} -->
				<p style="font-size:0.95rem;font-weight:700">✓ Locally roasted beans</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700"}}} -->
				<p style="font-size:0.95rem;font-weight:700">✓ Baked fresh daily</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700"}}} -->
				<p style="font-size:0.95rem;font-weight:700">✓ Free Wi-Fi &amp; outlets</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/about">Read Our Full Story</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
