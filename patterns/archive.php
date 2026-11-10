<?php
/**
 * Title: archive
 * Slug: ink-st/archive
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"padding":{"bottom":"var:preset|spacing|50"}},"border":{"bottom":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:solid;border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e( 'Archive', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","style":{"typography":{"textTransform":"uppercase","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} /-->

<!-- wp:term-description {"textColor":"on-surface-variant","style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.7"}}} /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"bottom":"var:preset|spacing|60"}},"border":{"bottom":{"color":"var:preset|color|outline-variant","width":"1px","style":"dashed"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:dashed;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-featured-image {"aspectRatio":"16/9","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"-0.02em"}},"fontSize":"xx-large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"0.7rem","fontWeight":"700","letterSpacing":"0.25em","textTransform":"uppercase"}},"textColor":"primary"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"<?php esc_attr_e('Read more', 'ink-st');?>","excerptLength":30,"style":{"typography":{"fontSize":"0.9375rem","lineHeight":"1.7"}},"textColor":"on-surface-variant"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->
