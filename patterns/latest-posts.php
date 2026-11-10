<?php
/**
 * Title: Journal — Feature & Stack
 * Slug: ink-st/latest-posts
 * Categories: ink-st
 * Description: Asymmetric journal feature — the latest post takes a 60% column with a large portrait image; the next two posts stack vertically in the right 40% as text-only list items.
 */
?>
<!-- wp:group {"metadata":{"name":"Journal"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div id="journal" class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.35em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.35em;text-transform:uppercase"><?php esc_html_e( '№ 05 — Journal', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--display)","lineHeight":"0.9","letterSpacing":"-0.04em"}}} -->
<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--display);letter-spacing:-0.04em;line-height:0.9"><?php esc_html_e( 'From the Chair', 'ink-st' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.3em","textTransform":"uppercase","textDecoration":"underline"}},"fontFamily":"headline"} -->
<p class="has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-decoration:underline;text-transform:uppercase"><?php /* Translators: 1. start of a link, 2. end of a link */
echo sprintf( esc_html__( '%1$sArchive &rarr;%2$s', 'ink-st' ), '<a href="' . esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70","top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:query {"queryId":12,"query":{"perPage":1,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"aspectRatio":"5/4","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.3em","textTransform":"uppercase"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e( 'Feature', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"0.7rem","fontWeight":"700","letterSpacing":"0.3em","textTransform":"uppercase"}},"textColor":"on-surface-variant"} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"0.7rem"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"textTransform":"uppercase","fontSize":"var(--wp--preset--font-size--xx-large)","letterSpacing":"-0.03em","lineHeight":"0.95"}},"fontFamily":"headline"} /-->

<!-- wp:post-excerpt {"excerptLength":36,"style":{"typography":{"fontSize":"1.0625rem","lineHeight":"1.7"}},"textColor":"on-surface-variant"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%"><!-- wp:query {"queryId":13,"query":{"perPage":2,"pages":1,"offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"var:preset|spacing|50"}},"border":{"bottom":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"},"top":{"style":"none","width":"0px"},"left":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"0.65rem","fontWeight":"700","letterSpacing":"0.3em","textTransform":"uppercase"}},"textColor":"primary"} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"0.65rem"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"textTransform":"uppercase","fontSize":"1.35rem","letterSpacing":"-0.01em","lineHeight":"1.15"}},"fontFamily":"headline"} /-->

<!-- wp:post-excerpt {"excerptLength":18,"style":{"typography":{"fontSize":"0.9375rem","lineHeight":"1.65"}},"textColor":"on-surface-variant"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
