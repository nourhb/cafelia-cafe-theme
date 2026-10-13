<?php
/**
 * Title: Catering CTA
 * Slug: cafelia/catering-cta
 * Categories: cafelia
 * Description: Full-width catering call-to-action with photo background.
 *
 * @package Cafelia
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coffee-beans.jpg","dimRatio":70,"overlayColor":"espresso","minHeight":420,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-espresso-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Roasted coffee beans" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coffee-beans.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display"},"color":{"text":"#ffffff"}}} -->
			<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Bring Cafelia to your event.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem"},"color":{"text":"#e8dcc8"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#e8dcc8;font-size:1.125rem">Weddings, office mornings, birthdays — our mobile espresso bar serves up to 200 guests.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/catering">Get a Catering Quote</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="tel:+14165550188" style="color:#ffffff;border-color:#ffffff">Call (416) 555-0188</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
