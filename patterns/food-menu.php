<?php
/**
 * Title: Food menu
 * Slug: cafelia/food-menu
 * Categories: cafelia
 * Description: Two-column food and pastry menu with prices and photo.
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
			<figure class="wp-block-image is-style-soft-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pastries-croissants.jpg" alt="Fresh croissants and pastries at Cafelia"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph -->
			<p><span class="cafelia-badge cafelia-badge--sage">Fresh daily</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
			<h2 class="wp-block-heading">Baked this morning.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><strong>Butter Croissant</strong> — flaky, golden, French-style <span style="float:right;color:#c68b4e;font-weight:700">$3.75</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><strong>Almond Croissant</strong> — frangipane, toasted almonds <span style="float:right;color:#c68b4e;font-weight:700">$4.50</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><strong>Banana Bread</strong> — walnuts, brown butter <span style="float:right;color:#c68b4e;font-weight:700">$4.00</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><strong>Avocado Toast</strong> — sourdough, chili flakes, lime <span style="float:right;color:#c68b4e;font-weight:700">$9.50</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><strong>Shakshuka Brunch</strong> — baked eggs, feta, flatbread <span style="float:right;color:#c68b4e;font-weight:700">$13.00</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><strong>Chocolate Cake Slice</strong> — 70% dark ganache <span style="float:right;color:#c68b4e;font-weight:700">$5.25</span></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
