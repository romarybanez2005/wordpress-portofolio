<?php
/**
 * Title: Services — Rate Sheet
 * Slug: ink-st/services
 * Categories: ink-st
 * Keywords: tattoo, prices, rates, services
 * Description: Flash-sheet pricing — each service is a full-width row with a numeric index, the service name and description, and a huge display-type starting price.
 */
?>
<!-- wp:group {"metadata":{"name":"Rates"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"surface-lowest","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div id="rates" class="wp-block-group alignfull has-surface-lowest-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fixed","flexSize":"560px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.35em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.35em;text-transform:uppercase"><?php esc_html_e( '№ 04 — Rate Sheet', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--display)","lineHeight":"0.9","letterSpacing":"-0.04em"}}} -->
<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--display);letter-spacing:-0.04em;line-height:0.9"><?php esc_html_e( 'Work & Rates', 'ink-st' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","lineHeight":"1.7","fontStyle":"italic"},"layout":{"selfStretch":"fixed","flexSize":"380px"}},"textColor":"on-surface-variant","fontFamily":"accent"} -->
<p class="has-on-surface-variant-color has-text-color has-accent-font-family" style="font-size:0.9375rem;font-style:italic;line-height:1.7"><?php esc_html_e( 'Starting rates below. Final quotes come after a free consult and depend on size, placement and detail. A $100 deposit holds your date and comes off the final price.', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"0"},"border":{"top":{"color":"var:preset|color|on-surface","width":"2px","style":"solid"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"},"left":{"style":"none","width":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--on-surface);border-top-style:solid;border-top-width:2px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"layout":{"selfStretch":"fixed","flexSize":"96px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;line-height:1;text-transform:uppercase"><?php esc_html_e( 'Idx', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"on-surface-variant","fontFamily":"headline"} -->
<p class="has-on-surface-variant-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;line-height:1;text-transform:uppercase"><?php esc_html_e( 'Service', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"on-surface-variant","fontFamily":"headline"} -->
<p class="has-text-align-right has-on-surface-variant-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;line-height:1;text-transform:uppercase"><?php esc_html_e( 'From', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ink-st-row ink-st-rate-row","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"},"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"},"left":{"style":"none","width":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide ink-st-row ink-st-rate-row" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xx-large)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.03em","lineHeight":"1"},"layout":{"selfStretch":"fixed","flexSize":"96px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"outline","fontFamily":"headline"} -->
<p class="has-outline-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xx-large);font-style:normal;font-weight:700;letter-spacing:-0.03em;line-height:1"><?php esc_html_e( '01', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-large)","lineHeight":"1.05","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--x-large);letter-spacing:-0.02em;line-height:1.05"><?php esc_html_e( 'Consultation', 'ink-st' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","lineHeight":"1.6"}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color" style="font-size:0.9375rem;line-height:1.6"><?php esc_html_e( '20 minutes with an artist, in the studio or on video. Bring references, talk placement, leave with a fixed quote.', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"right","className":"ink-st-price","style":{"typography":{"fontSize":"var(--wp--preset--font-size--display)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.03em","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-text-align-right ink-st-price has-primary-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--display);font-style:normal;font-weight:700;letter-spacing:-0.03em;line-height:1"><?php esc_html_e( 'Free', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ink-st-row ink-st-rate-row","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"},"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"},"left":{"style":"none","width":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide ink-st-row ink-st-rate-row" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xx-large)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.03em","lineHeight":"1"},"layout":{"selfStretch":"fixed","flexSize":"96px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"outline","fontFamily":"headline"} -->
<p class="has-outline-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xx-large);font-style:normal;font-weight:700;letter-spacing:-0.03em;line-height:1"><?php esc_html_e( '02', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-large)","lineHeight":"1.05","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--x-large);letter-spacing:-0.02em;line-height:1.05"><?php esc_html_e( 'Flash Friday', 'ink-st' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","lineHeight":"1.6"}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color" style="font-size:0.9375rem;line-height:1.6"><?php esc_html_e( 'Pre-drawn designs from the wall, walk-in only, first come first inked. Every Friday from 14:00.', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"right","className":"ink-st-price","style":{"typography":{"fontSize":"var(--wp--preset--font-size--display)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.03em","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-text-align-right ink-st-price has-primary-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--display);font-style:normal;font-weight:700;letter-spacing:-0.03em;line-height:1"><?php esc_html_e( '$140', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ink-st-row ink-st-rate-row","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"},"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"},"left":{"style":"none","width":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide ink-st-row ink-st-rate-row" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xx-large)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.03em","lineHeight":"1"},"layout":{"selfStretch":"fixed","flexSize":"96px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"outline","fontFamily":"headline"} -->
<p class="has-outline-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xx-large);font-style:normal;font-weight:700;letter-spacing:-0.03em;line-height:1"><?php esc_html_e( '03', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-large)","lineHeight":"1.05","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--x-large);letter-spacing:-0.02em;line-height:1.05"><?php esc_html_e( 'Fine Line Piece', 'ink-st' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","lineHeight":"1.6"}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color" style="font-size:0.9375rem;line-height:1.6"><?php esc_html_e( 'Small single-needle work — botanicals, micro portraits, script. Up to palm size.', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"right","className":"ink-st-price","style":{"typography":{"fontSize":"var(--wp--preset--font-size--display)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.03em","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-text-align-right ink-st-price has-primary-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--display);font-style:normal;font-weight:700;letter-spacing:-0.03em;line-height:1"><?php esc_html_e( '$220', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ink-st-row ink-st-rate-row","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"},"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"},"left":{"style":"none","width":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide ink-st-row ink-st-rate-row" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xx-large)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.03em","lineHeight":"1"},"layout":{"selfStretch":"fixed","flexSize":"96px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"outline","fontFamily":"headline"} -->
<p class="has-outline-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xx-large);font-style:normal;font-weight:700;letter-spacing:-0.03em;line-height:1"><?php esc_html_e( '04', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-large)","lineHeight":"1.05","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--x-large);letter-spacing:-0.02em;line-height:1.05"><?php esc_html_e( 'Custom, Hourly', 'ink-st' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","lineHeight":"1.6"}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color" style="font-size:0.9375rem;line-height:1.6"><?php esc_html_e( 'Blackwork, colour and larger custom pieces, billed per hour once the design is approved.', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"right","className":"ink-st-price","style":{"typography":{"fontSize":"var(--wp--preset--font-size--display)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.03em","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-text-align-right ink-st-price has-primary-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--display);font-style:normal;font-weight:700;letter-spacing:-0.03em;line-height:1"><?php esc_html_e( '$180/hr', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ink-st-row ink-st-rate-row","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"},"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"},"left":{"style":"none","width":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide ink-st-row ink-st-rate-row" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xx-large)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.03em","lineHeight":"1"},"layout":{"selfStretch":"fixed","flexSize":"96px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"outline","fontFamily":"headline"} -->
<p class="has-outline-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xx-large);font-style:normal;font-weight:700;letter-spacing:-0.03em;line-height:1"><?php esc_html_e( '05', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-large)","lineHeight":"1.05","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--x-large);letter-spacing:-0.02em;line-height:1.05"><?php esc_html_e( 'Cover-Up & Rework', 'ink-st' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","lineHeight":"1.6"}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color" style="font-size:0.9375rem;line-height:1.6"><?php esc_html_e( 'Blasting over or reviving old ink. Needs a consult and photos of the existing tattoo.', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"right","className":"ink-st-price","style":{"typography":{"fontSize":"var(--wp--preset--font-size--display)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.03em","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-text-align-right ink-st-price has-primary-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--display);font-style:normal;font-weight:700;letter-spacing:-0.03em;line-height:1"><?php esc_html_e( '$300', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ink-st-row ink-st-rate-row","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"},"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"},"left":{"style":"none","width":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide ink-st-row ink-st-rate-row" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xx-large)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.03em","lineHeight":"1"},"layout":{"selfStretch":"fixed","flexSize":"96px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"outline","fontFamily":"headline"} -->
<p class="has-outline-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xx-large);font-style:normal;font-weight:700;letter-spacing:-0.03em;line-height:1"><?php esc_html_e( '06', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-large)","lineHeight":"1.05","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--x-large);letter-spacing:-0.02em;line-height:1.05"><?php esc_html_e( 'Full Day / Sleeve', 'ink-st' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","lineHeight":"1.6"}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color" style="font-size:0.9375rem;line-height:1.6"><?php esc_html_e( 'Six-hour session at a flat day rate. Multi-session sleeves and back pieces.', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"right","className":"ink-st-price","style":{"typography":{"fontSize":"var(--wp--preset--font-size--display)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.03em","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-text-align-right ink-st-price has-primary-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--display);font-style:normal;font-weight:700;letter-spacing:-0.03em;line-height:1"><?php esc_html_e( '$1,400', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ink-st-row ink-st-rate-row","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"},"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|on-surface","width":"2px","style":"solid"},"left":{"style":"none","width":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide ink-st-row ink-st-rate-row" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--on-surface);border-bottom-style:solid;border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xx-large)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.03em","lineHeight":"1"},"layout":{"selfStretch":"fixed","flexSize":"96px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"outline","fontFamily":"headline"} -->
<p class="has-outline-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--xx-large);font-style:normal;font-weight:700;letter-spacing:-0.03em;line-height:1"><?php esc_html_e( '07', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-large)","lineHeight":"1.05","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--x-large);letter-spacing:-0.02em;line-height:1.05"><?php esc_html_e( 'Touch-Up', 'ink-st' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","lineHeight":"1.6"}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color" style="font-size:0.9375rem;line-height:1.6"><?php esc_html_e( 'A refresh on our own work within 12 months of your session.', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"var(--wp--preset--font-size--display)","fontStyle":"italic","fontWeight":"500","letterSpacing":"-0.02em","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"accent"} -->
<p class="has-text-align-right has-primary-color has-text-color has-accent-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--display);font-style:italic;font-weight:500;letter-spacing:-0.02em;line-height:1"><?php esc_html_e( 'on us', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
