<?php
/**
 * Title: Hero — Editorial Split
 * Slug: ink-st/hero
 * Categories: ink-st
 * Keywords: tattoo, hero, header, intro
 * Description: Editorial split hero — left half has the stacked “Fine line. Bold ink.” headline, intro and booking buttons; right half is a full-height photo of an artist at work. Ticker strip with studio facts below.
 */
?>
<!-- wp:group {"metadata":{"name":"Hero"},"align":"full","className":"ink-st-hero","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"dimensions":{"minHeight":"100vh"}},"backgroundColor":"surface","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ink-st-hero has-surface-background-color has-background" style="min-height:100vh;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":null,"align":"full","style":{"spacing":{"blockGap":{"left":"0","top":"0"}},"dimensions":{"minHeight":"100vh"}}} -->
<div class="wp-block-columns alignfull" style="min-height:100vh"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--70);flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"3rem"}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.35em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.35em;text-transform:uppercase"><?php esc_html_e('No. 01 / Ink St. Studio', 'ink-st');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(3rem, 8vw, 7rem)","lineHeight":"0.88","letterSpacing":"-0.04em","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h1 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-size:clamp(3rem, 8vw, 7rem);font-weight:700;letter-spacing:-0.04em;line-height:0.88"><?php esc_html_e('Fine line.', 'ink-st');?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"0.88","letterSpacing":"-0.04em","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"hero"} -->
<h1 class="wp-block-heading has-hero-font-size" style="margin-top:0;margin-bottom:0;font-weight:700;letter-spacing:-0.04em;line-height:0.88"><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the start of a 'mark' HTML element, 3. is the end of a 'mark' HTML element, 4. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( 'Bold %1$s%2$sink.%3$s%4$s', 'ink-st' ), '<em>', '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">', '</mark>', '</em>' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1.0625rem","lineHeight":"1.6","fontStyle":"italic"},"layout":{"selfStretch":"fixed","flexSize":"380px"}},"textColor":"on-surface-variant","fontFamily":"accent"} -->
<p class="has-on-surface-variant-color has-text-color has-accent-font-family" style="font-size:1.0625rem;font-style:italic;line-height:1.6"><?php esc_html_e( 'Custom tattoos on the second floor of an old East Village print shop — four resident artists, one long room, and an honest conversation before any needle touches skin.', 'ink-st' );?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#book' ) ); ?>"><?php esc_html_e( 'Book a Consult', 'ink-st' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"calc(1rem - 1px)","bottom":"calc(1rem - 1px)","left":"calc(2.25rem - 1px)","right":"calc(2.25rem - 1px)"}}},"borderColor":"on-surface"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-border-color has-on-surface-border-color wp-element-button" href="<?php echo esc_url( home_url( '/#artists' ) ); ?>" style="border-width:1px;padding-top:calc(1rem - 1px);padding-right:calc(2.25rem - 1px);padding-bottom:calc(1rem - 1px);padding-left:calc(2.25rem - 1px)"><?php esc_html_e( 'Meet the Artists', 'ink-st' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"50%","className":"ink-st-hero-media","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-stretch ink-st-hero-media" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tattoo-artist-at-work-gloves-pxhere.jpg","alt":"<?php esc_attr_e( 'Tattoo artist in blue gloves working on a colour piece', 'ink-st' ); ?>","dimRatio":30,"overlayColor":"surface","isUserOverlayColor":true,"focalPoint":{"x":0.62,"y":0.5},"minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:100vh"><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Tattoo artist in blue gloves working on a colour piece', 'ink-st' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tattoo-artist-at-work-gloves-pxhere.jpg" style="object-position:62% 50%" data-object-fit="cover" data-object-position="62% 50%"/><span aria-hidden="true" class="wp-block-cover__background has-surface-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.625rem","letterSpacing":"0.35em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","writingMode":"vertical-rl","lineHeight":"1"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"on-surface","fontFamily":"headline"} -->
<p class="has-on-surface-color has-text-color has-headline-font-family" style="margin-bottom:0;font-size:0.625rem;font-style:normal;font-weight:700;letter-spacing:0.35em;line-height:1;text-transform:uppercase;writing-mode:vertical-rl"><?php esc_html_e( 'Station 03 · Diego Salas at work', 'ink-st' );?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"},"bottom":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"},"left":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"}}},"backgroundColor":"surface-lowest","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull has-surface-lowest-background-color has-background" style="border-top-color:var(--wp--preset--color--outline-variant);border-top-style:solid;border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"on-surface-variant","fontFamily":"headline"} -->
<p class="has-on-surface-variant-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e('Custom Work', 'ink-st');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e('/', 'ink-st');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"on-surface-variant","fontFamily":"headline"} -->
<p class="has-on-surface-variant-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e( 'Flash Fridays', 'ink-st' );?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e('/', 'ink-st');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"on-surface-variant","fontFamily":"headline"} -->
<p class="has-on-surface-variant-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e('4 Residents', 'ink-st');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e('/', 'ink-st');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"on-surface-variant","fontFamily":"headline"} -->
<p class="has-on-surface-variant-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e( 'Since 2014', 'ink-st' );?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e('/', 'ink-st');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"on-surface-variant","fontFamily":"headline"} -->
<p class="has-on-surface-variant-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e('East Village, NYC', 'ink-st');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
