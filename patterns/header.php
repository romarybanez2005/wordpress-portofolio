<?php
/**
 * Title: header
 * Slug: ink-st/header
 * Inserter: no
 */
?>
<!-- wp:group {"className":"ink-st-header","style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"}},"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"left":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group ink-st-header has-surface-background-color has-background" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:group {"align":"full","className":"ink-st-header-inner","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull ink-st-header-inner" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0} /-->

<!-- wp:paragraph {"className":"ink-st-tagline","style":{"typography":{"fontSize":"0.625rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="ink-st-tagline has-primary-color has-text-color has-headline-font-family" style="font-size:0.625rem;font-style:normal;font-weight:700;letter-spacing:0.3em;line-height:1.2;text-transform:uppercase"><?php /* Translators: 1. is a 'br' HTML element */
echo sprintf( esc_html__( 'Est. 2014%1$sTattoo Studio', 'ink-st' ), '<br>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:navigation {"style":{"spacing":{"blockGap":"2.25rem"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Artists', 'ink-st' ); ?>","url":"<?php echo esc_url( home_url( '/#artists' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Work', 'ink-st' ); ?>","url":"<?php echo esc_url( home_url( '/#work' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'About', 'ink-st' ); ?>","url":"<?php echo esc_url( home_url( '/#about' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Rates', 'ink-st' ); ?>","url":"<?php echo esc_url( home_url( '/#rates' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Journal', 'ink-st' ); ?>","url":"<?php echo esc_url( home_url( '/#journal' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"className":"ink-st-header-cta"} -->
<div class="wp-block-buttons ink-st-header-cta"><!-- wp:button {"style":{"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"1.25rem","right":"1.25rem"}},"typography":{"fontSize":"0.7rem","letterSpacing":"0.25em"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/#book' ) ); ?>" style="padding-top:0.6rem;padding-right:1.25rem;padding-bottom:0.6rem;padding-left:1.25rem;font-size:0.7rem;letter-spacing:0.25em"><?php esc_html_e( 'Book Now', 'ink-st' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
