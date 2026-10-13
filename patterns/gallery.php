<?php
/**
 * Title: Café gallery
 * Slug: cafelia/gallery
 * Categories: cafelia
 * Description: Four-photo gallery of café vibes.
 *
 * @package Cafelia
 */
?>
<!-- wp:group {"style":{"color":{"background":"#2a1f18","text":"#f5efe6"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background has-text-color" style="background-color:#2a1f18;color:#f5efe6;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><span class="cafelia-badge cafelia-badge--sage">The vibe</span></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display"},"color":{"text":"#ffffff"}}} -->
	<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Step inside Cafelia.</h2>
	<!-- /wp:heading -->
	<!-- wp:gallery {"columns":2,"linkTo":"none","sizeSlug":"large"} -->
	<figure class="wp-block-gallery has-nested-images columns-2 is-cropped">
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cafe-window.jpg" alt="Morning light through the café window"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/espresso-machine.jpg" alt="Espresso machine pouring a fresh shot"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/friends-coffee.jpg" alt="Friends enjoying coffee together at Cafelia"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cappuccino-cup.jpg" alt="Cappuccino with heart latte art"/></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
