<?php
/**
 * Title: Default Footer
 * Slug: twentytwentythree/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--90)"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--90)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--90)","bottom":"var(--wp--preset--spacing--90)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:site-title {"level":0} /-->

<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right">
<?php
printf(
	/* Translators: WordPress link. */
	esc_html__( 'Proudly powered by %s', 'twentytwentythree' ),
	'<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentythree' ) ) . '" rel="nofollow">WordPress</a>'
)
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
