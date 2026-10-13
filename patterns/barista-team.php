<?php
/**
 * Title: Barista team
 * Slug: cafelia/barista-team
 * Categories: cafelia
 * Description: Three-column barista team showcase.
 *
 * @package Cafelia
 */
?>
<!-- wp:group {"style":{"color":{"background":"#f5efe6"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f5efe6;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><span class="cafelia-badge cafelia-badge--espresso">The team</span></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
	<h2 class="wp-block-heading has-text-align-center">Meet your baristas.</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#6b5b4c"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#6b5b4c">Latte artists, early risers and genuinely lovely humans.</p>
	<!-- /wp:paragraph -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-menu-card cafelia-card","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-group is-style-menu-card cafelia-card has-background" style="background-color:#ffffff">
				<!-- wp:image {"align":"center","className":"is-style-rounded"} -->
				<figure class="wp-block-image aligncenter is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/barista-portrait.jpg" alt="Portrait of head barista Maya"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"textAlign":"center","level":3} -->
				<h3 class="wp-block-heading has-text-align-center">Maya</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#c68b4e"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#c68b4e;font-size:0.95rem"><strong>Head Barista</strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#6b5b4c"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#6b5b4c;font-size:0.95rem">Latte-art champion 2024. Ask her for the signature honey-oat flat white.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-menu-card cafelia-card","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-group is-style-menu-card cafelia-card has-background" style="background-color:#ffffff">
				<!-- wp:image {"align":"center","className":"is-style-rounded"} -->
				<figure class="wp-block-image aligncenter is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/barista-pour.jpg" alt="Barista pouring latte art"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"textAlign":"center","level":3} -->
				<h3 class="wp-block-heading has-text-align-center">Jonas</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#c68b4e"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#c68b4e;font-size:0.95rem"><strong>Brew Bar Lead</strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#6b5b4c"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#6b5b4c;font-size:0.95rem">Pour-over nerd. He will happily talk single-origins for twenty minutes.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-menu-card cafelia-card","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-group is-style-menu-card cafelia-card has-background" style="background-color:#ffffff">
				<!-- wp:image {"align":"center","className":"is-style-rounded"} -->
				<figure class="wp-block-image aligncenter is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pour-over.jpg" alt="Pour over coffee brewing"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"textAlign":"center","level":3} -->
				<h3 class="wp-block-heading has-text-align-center">Sofia</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#c68b4e"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#c68b4e;font-size:0.95rem"><strong>Pastry Chef</strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#6b5b4c"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#6b5b4c;font-size:0.95rem">The reason our croissants shatter perfectly. Arrives at 5 AM daily.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
