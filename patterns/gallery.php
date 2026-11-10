<?php
/**
 * Title: Gallery — Folio Mosaic
 * Slug: ink-st/gallery
 * Categories: ink-st
 * Keywords: tattoo, portfolio, gallery, work
 * Description: Portfolio mosaic — a 60/40 feature row (tall image plus two squares) over a three-column row, every piece captioned with style and artist.
 */
?>
<!-- wp:group {"metadata":{"name":"Gallery"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div id="work" class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.35em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.35em;text-transform:uppercase"><?php esc_html_e( '№ 03 — Folio', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--display)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--display);letter-spacing:-0.03em;line-height:0.95"><?php esc_html_e( 'Recent Work', 'ink-st' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ink-st-link","style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"on-surface","fontFamily":"headline"} -->
<p class="ink-st-link has-on-surface-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php /* Translators: 1. start of a link, 2. end of a link */ echo sprintf( esc_html__( '%1$sFull feed on Instagram &rarr;%2$s', 'ink-st' ), '<a href="#">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/back-piece-tattoo-dark-pxhere.jpg" alt="<?php esc_attr_e( 'Full ornamental back piece on a client standing in dark foliage', 'ink-st' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e( 'Full back, ornamental — Jonah Kress', 'ink-st' ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/color-tattoo-needle-in-progress-pxhere.jpg" alt="<?php esc_attr_e( 'Gloved hand packing blue colour into fresh linework', 'ink-st' ); ?>" style="aspect-ratio:1;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e( 'Colour packing, in progress — Mara Vesh', 'ink-st' ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tattooed-hands-silver-rings-pxhere.jpg" alt="<?php esc_attr_e( 'Heavily tattooed hands wearing silver and turquoise rings', 'ink-st' ); ?>" style="aspect-ratio:1;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e( 'Hands & knuckles, healed — Diego Salas', 'ink-st' ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wolf-back-tattoo-pxhere.jpg" alt="<?php esc_attr_e( 'Fresh tribal wolf tattoo between the shoulder blades', 'ink-st' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e( 'Tribal wolf, upper back — Jonah Kress', 'ink-st' ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bear-blackwork-forearm-tattoo-pxhere.jpg" alt="<?php esc_attr_e( 'Blackwork bear and crescent moon tattoo on a forearm', 'ink-st' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e( 'Bear & crescent, forearm — Diego Salas', 'ink-st' ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/lettering-tattoo-linework-in-progress-pxhere.jpg" alt="<?php esc_attr_e( 'Artist pulling the outline of a lettering tattoo', 'ink-st' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e( 'Hand-lettered script, linework — Nova Kerr', 'ink-st' ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
