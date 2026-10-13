<?php
/**
 * Title: Welcome hero
 * Slug: cafelia/hero-welcome
 * Categories: cafelia
 * Description: Full-width café hero with opening-hours badge, headline and call-to-action buttons.
 *
 * @package Cafelia
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-latte-art.jpg","dimRatio":60,"overlayColor":"espresso","minHeight":640,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-espresso-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Latte art in a ceramic cup at Cafelia" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-latte-art.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><span class="cafelia-badge cafelia-badge--caramel cafelia-pulse">☕ Open today · 7:00 AM – 9:00 PM</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|display"},"color":{"text":"#ffffff"}}} -->
			<h1 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Slow mornings, bold coffee.</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#e8dcc8"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#e8dcc8;font-size:1.25rem">Small-batch espresso, fresh-baked pastries and the coziest corner on Queen Street.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"typography":{"fontSize":"1.125rem"}}} -->
				<div class="wp-block-button" style="font-size:1.125rem"><a class="wp-block-button__link wp-element-button" href="/menu">Explore the Menu</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about" style="color:#ffffff;border-color:#ffffff">Our Story</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#dcae7c"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#dcae7c;font-size:0.95rem">★ 4.9/5 from 1,800+ happy guests &nbsp;·&nbsp; Locally roasted &nbsp;·&nbsp; Baked fresh daily</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
