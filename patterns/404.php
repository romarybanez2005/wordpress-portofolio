<?php
/**
 * Title: 404
 * Slug: ink-st/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e( 'Error / 404', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"is-style-ink-outline","style":{"typography":{"fontSize":"clamp(6rem, 18vw, 16rem)","letterSpacing":"-0.05em","lineHeight":"0.85"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|40"}}}} -->
<h1 class="wp-block-heading is-style-ink-outline" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--40);font-size:clamp(6rem, 18vw, 16rem);letter-spacing:-0.05em;line-height:0.85"><?php esc_html_e('404', 'ink-st');?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e('This chair is empty.', 'ink-st');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.7","fontStyle":"italic"}},"textColor":"on-surface-variant","fontFamily":"accent"} -->
<p class="has-on-surface-variant-color has-text-color has-accent-font-family" style="font-size:1.125rem;font-style:italic;line-height:1.7"><?php esc_html_e('The page you&rsquo;re after has either been covered up, touched up, or never inked in the first place. Head back to the front and we&rsquo;ll get you sorted.', 'ink-st');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Back to the Studio', 'ink-st');?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","style":{"border":{"width":"1px"}},"borderColor":"on-surface"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-border-color has-on-surface-border-color wp-element-button" href="<?php echo esc_url( home_url( '/#book' ) ); ?>" style="border-width:1px"><?php esc_html_e('Book a Consult', 'ink-st');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->
