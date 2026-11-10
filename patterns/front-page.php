<?php
/**
 * Title: front-page
 * Slug: ink-st/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0px"},"blockGap":"0px","padding":{"right":"0","left":"0"}}},"backgroundColor":"surface","layout":{"type":"default"}} -->
<main class="wp-block-group has-surface-background-color has-background" style="margin-top:0px;padding-right:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Hero"},"align":"full","className":"ink-st-hero","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"dimensions":{"minHeight":"100vh"}},"backgroundColor":"surface","layout":{"type":"default"}} -->
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

<!-- wp:group {"metadata":{"name":"Artists"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"surface-lowest","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div id="artists" class="wp-block-group alignfull has-surface-lowest-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fixed","flexSize":"560px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.35em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.35em;text-transform:uppercase"><?php esc_html_e( '№ 02 — The Roster', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--display)","lineHeight":"0.9","letterSpacing":"-0.04em"}}} -->
<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--display);letter-spacing:-0.04em;line-height:0.9"><?php esc_html_e( 'Resident Artists', 'ink-st' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","lineHeight":"1.7","fontStyle":"italic"},"layout":{"selfStretch":"fixed","flexSize":"380px"}},"textColor":"on-surface-variant","fontFamily":"accent"} -->
<p class="has-on-surface-variant-color has-text-color has-accent-font-family" style="font-size:0.9375rem;font-style:italic;line-height:1.7"><?php esc_html_e( 'Four residents share the long room. Each has their own chair, their own music and their own waiting list. Pick the one whose portfolio fits the piece in your head — or let us match you.', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|on-surface","width":"2px","style":"solid"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"},"left":{"style":"none","width":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--on-surface);border-top-style:solid;border-top-width:2px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"14%"} -->
<div class="wp-block-column" style="flex-basis:14%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--mega)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.05em","lineHeight":"0.85"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--mega);font-style:normal;font-weight:700;letter-spacing:-0.05em;line-height:0.85"><?php esc_html_e( '01', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"26%"} -->
<div class="wp-block-column" style="flex-basis:26%"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"ink-st-artist-photo"} -->
<figure class="wp-block-image size-full ink-st-artist-photo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tattoo-artist-portrait-woman-pxhere.jpg" alt="<?php esc_attr_e( 'Portrait of Mara Vesh, neo-traditional tattoo artist', 'ink-st' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e( 'Neo-Traditional · Colour · Botanical', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xx-large)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);letter-spacing:-0.03em;line-height:0.95"><?php esc_html_e( 'Mara Vesh', 'ink-st' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.75"}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color" style="font-size:1rem;line-height:1.75"><?php esc_html_e( 'Painterly colour, heavy botanicals and storybook compositions with a traditional backbone. Ten years behind the machine, six of them in this room.', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.25em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"on-surface-variant","fontFamily":"headline"} -->
<p class="has-on-surface-variant-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.25em;text-transform:uppercase"><?php esc_html_e( 'Books ~6 weeks out', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ink-st-link","style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"on-surface","fontFamily":"headline"} -->
<p class="ink-st-link has-on-surface-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php /* Translators: 1. start of a link, 2. end of a link */ echo sprintf( esc_html__( '%1$sPortfolio &rarr;%2$s', 'ink-st' ), '<a href="#">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}},"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"},"left":{"style":"none","width":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"14%"} -->
<div class="wp-block-column" style="flex-basis:14%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--mega)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.05em","lineHeight":"0.85"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--mega);font-style:normal;font-weight:700;letter-spacing:-0.05em;line-height:0.85"><?php esc_html_e( '02', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"26%"} -->
<div class="wp-block-column" style="flex-basis:26%"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"ink-st-artist-photo"} -->
<figure class="wp-block-image size-full ink-st-artist-photo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tattoo-artist-portrait-rings-pxhere.jpg" alt="<?php esc_attr_e( 'Portrait of Jonah Kress, blackwork tattoo artist, showing his rings', 'ink-st' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e( 'Blackwork · Ornamental · Geometry', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xx-large)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);letter-spacing:-0.03em;line-height:0.95"><?php esc_html_e( 'Jonah Kress', 'ink-st' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.75"}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color" style="font-size:1rem;line-height:1.75"><?php esc_html_e( 'Solid black, sacred geometry and ornamental pieces that wrap the body. Takes three clients a week and prefers big canvases — backs, sleeves, sternums.', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.25em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"on-surface-variant","fontFamily":"headline"} -->
<p class="has-on-surface-variant-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.25em;text-transform:uppercase"><?php esc_html_e( 'Large scale only', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ink-st-link","style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"on-surface","fontFamily":"headline"} -->
<p class="ink-st-link has-on-surface-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php /* Translators: 1. start of a link, 2. end of a link */ echo sprintf( esc_html__( '%1$sPortfolio &rarr;%2$s', 'ink-st' ), '<a href="#">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}},"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"},"left":{"style":"none","width":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"14%"} -->
<div class="wp-block-column" style="flex-basis:14%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--mega)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.05em","lineHeight":"0.85"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--mega);font-style:normal;font-weight:700;letter-spacing:-0.05em;line-height:0.85"><?php esc_html_e( '03', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"26%"} -->
<div class="wp-block-column" style="flex-basis:26%"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"ink-st-artist-photo"} -->
<figure class="wp-block-image size-full ink-st-artist-photo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tattoo-artist-flash-wall-traditional-pxhere.jpg" alt="<?php esc_attr_e( 'Diego Salas holding a coil machine in front of the studio flash wall', 'ink-st' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e( 'American Traditional · Flash · Japanese', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xx-large)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);letter-spacing:-0.03em;line-height:0.95"><?php esc_html_e( 'Diego Salas', 'ink-st' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.75"}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color" style="font-size:1rem;line-height:1.75"><?php esc_html_e( 'Bold line, solid colour, vintage flash. Eagles, roses, panthers and the odd wind-bar back piece — a love letter to the old sailor shops. Runs Flash Friday.', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.25em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"on-surface-variant","fontFamily":"headline"} -->
<p class="has-on-surface-variant-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.25em;text-transform:uppercase"><?php esc_html_e( 'Walk-ins on Fridays', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ink-st-link","style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"on-surface","fontFamily":"headline"} -->
<p class="ink-st-link has-on-surface-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php /* Translators: 1. start of a link, 2. end of a link */ echo sprintf( esc_html__( '%1$sPortfolio &rarr;%2$s', 'ink-st' ), '<a href="#">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}},"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|on-surface","width":"2px","style":"solid"},"left":{"style":"none","width":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--on-surface);border-bottom-style:solid;border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"14%"} -->
<div class="wp-block-column" style="flex-basis:14%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--mega)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.05em","lineHeight":"0.85"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--mega);font-style:normal;font-weight:700;letter-spacing:-0.05em;line-height:0.85"><?php esc_html_e( '04', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"26%"} -->
<div class="wp-block-column" style="flex-basis:26%"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"ink-st-artist-photo"} -->
<figure class="wp-block-image size-full ink-st-artist-photo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tattoo-artist-black-white-session-pxhere.jpg" alt="<?php esc_attr_e( 'Nova Kerr tattooing a client’s hand, black and white', 'ink-st' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e( 'Fine Line · Script · Micro', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xx-large)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);letter-spacing:-0.03em;line-height:0.95"><?php esc_html_e( 'Nova Kerr', 'ink-st' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.75"}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color" style="font-size:1rem;line-height:1.75"><?php esc_html_e( 'Single-needle specialist working between hand-lettered script, tiny botanicals and fine-line portraits. Patient, precise, and very good with first tattoos.', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.25em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"on-surface-variant","fontFamily":"headline"} -->
<p class="has-on-surface-variant-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.25em;text-transform:uppercase"><?php esc_html_e( 'Great for first-timers', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ink-st-link","style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"on-surface","fontFamily":"headline"} -->
<p class="ink-st-link has-on-surface-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php /* Translators: 1. start of a link, 2. end of a link */ echo sprintf( esc_html__( '%1$sPortfolio &rarr;%2$s', 'ink-st' ), '<a href="#">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

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

<!-- wp:group {"metadata":{"name":"Manifesto"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"surface-lowest","layout":{"type":"constrained","contentSize":"1000px"}} -->
<div id="about" class="wp-block-group alignfull has-surface-lowest-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.35em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-text-align-center has-primary-color has-text-color has-headline-font-family" style="font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.35em;text-transform:uppercase"><?php esc_html_e( '/ Manifesto', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var(--wp--preset--font-size--display)","lineHeight":"1.2","fontStyle":"italic","fontWeight":"400","letterSpacing":"-0.02em"}},"textColor":"on-surface","fontFamily":"accent"} -->
<p class="has-text-align-center has-on-surface-color has-text-color has-accent-font-family" style="font-size:var(--wp--preset--font-size--display);font-style:italic;font-weight:400;letter-spacing:-0.02em;line-height:1.2"><?php esc_html_e( '&ldquo;A tattoo is a conversation you carry for the rest of your life. We plan to be good company.&rdquo;', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"on-surface-variant","fontFamily":"headline"} -->
<p class="has-text-align-center has-on-surface-variant-color has-text-color has-headline-font-family" style="margin-top:var(--wp--preset--spacing--40);font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e( '— House rule, written on the wall in 2014', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"bottom":"var:preset|spacing|70"}},"border":{"top":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"},"bottom":{"color":"var:preset|color|outline-variant","width":"1px","style":"solid"},"left":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--outline-variant);border-top-style:solid;border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-bottom:var(--wp--preset--spacing--70);padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--mega)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.04em","lineHeight":"0.9"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--mega);font-style:normal;font-weight:700;letter-spacing:-0.04em;line-height:0.9"><?php esc_html_e( '10+', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"},"spacing":{"margin":{"bottom":"0.35rem"}}},"textColor":"on-surface-variant","fontFamily":"headline"} -->
<p class="has-on-surface-variant-color has-text-color has-headline-font-family" style="margin-bottom:0.35rem;font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;line-height:1.4;text-transform:uppercase"><?php /* Translators: 1. is a 'br' HTML element */
echo sprintf( esc_html__( 'Years%1$sticking', 'ink-st' ), '<br>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--mega)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.04em","lineHeight":"0.9"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--mega);font-style:normal;font-weight:700;letter-spacing:-0.04em;line-height:0.9"><?php esc_html_e( '04', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"},"spacing":{"margin":{"bottom":"0.35rem"}}},"textColor":"on-surface-variant","fontFamily":"headline"} -->
<p class="has-on-surface-variant-color has-text-color has-headline-font-family" style="margin-bottom:0.35rem;font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;line-height:1.4;text-transform:uppercase"><?php /* Translators: 1. is a 'br' HTML element */
echo sprintf( esc_html__( 'Resident%1$sartists', 'ink-st' ), '<br>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--mega)","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.04em","lineHeight":"0.9"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--mega);font-style:normal;font-weight:700;letter-spacing:-0.04em;line-height:0.9"><?php esc_html_e( '3.2k', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"},"spacing":{"margin":{"bottom":"0.35rem"}}},"textColor":"on-surface-variant","fontFamily":"headline"} -->
<p class="has-on-surface-variant-color has-text-color has-headline-font-family" style="margin-bottom:0.35rem;font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.3em;line-height:1.4;text-transform:uppercase"><?php /* Translators: 1. is a 'br' HTML element */
echo sprintf( esc_html__( 'Pieces%1$sinked', 'ink-st' ), '<br>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80","top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33%"} -->
<div class="wp-block-column" style="flex-basis:33%"><!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xx-large)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large);letter-spacing:-0.03em;line-height:0.95"><?php /* Translators: 1. is a 'br' HTML element */
echo sprintf( esc_html__( 'Ink with%1$sintent.', 'ink-st' ), '<br>' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"67%"} -->
<div class="wp-block-column" style="flex-basis:67%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1.0625rem","lineHeight":"1.8"}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color" style="font-size:1.0625rem;line-height:1.8"><?php esc_html_e( 'Ink St. opened in 2014 on the second floor of an old print shop on a quiet East Village block. We took the space for the north light and because the neighbours didn&rsquo;t mind the buzz. A decade on we&rsquo;re still here — four residents, one long room, a wall of flash, and a record player that runs most afternoons.', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.0625rem","lineHeight":"1.8"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"on-surface-variant"} -->
<p class="has-on-surface-variant-color has-text-color" style="margin-top:var(--wp--preset--spacing--40);font-size:1.0625rem;line-height:1.8"><?php esc_html_e( 'We work slowly and talk a lot. Every custom piece starts with a consult and is drawn for your body, not pulled off the internet. We say no when we think an idea won&rsquo;t age well, and yes — with enthusiasm — to the ones that will.', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Rates"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div id="rates" class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
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

<!-- wp:group {"metadata":{"name":"Journal"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"surface-lowest","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div id="journal" class="wp-block-group alignfull has-surface-lowest-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
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

<!-- wp:group {"metadata":{"name":"Visit"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"surface-low","layout":{"type":"default"}} -->
<div id="book" class="wp-block-group alignfull has-surface-low-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.7rem","letterSpacing":"0.35em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-text-align-center has-primary-color has-text-color has-headline-font-family" style="margin-bottom:var(--wp--preset--spacing--40);font-size:0.7rem;font-style:normal;font-weight:700;letter-spacing:0.35em;text-transform:uppercase"><?php esc_html_e( '№ 06 — Book the Chair', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--hero)","lineHeight":"0.9","letterSpacing":"-0.04em","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--hero);font-weight:700;letter-spacing:-0.04em;line-height:0.9"><?php esc_html_e( 'Come', 'ink-st' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--hero)","lineHeight":"0.9","letterSpacing":"-0.02em","fontStyle":"italic","fontWeight":"500","textTransform":"none"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontFamily":"accent"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-accent-font-family" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--hero);font-style:italic;font-weight:500;letter-spacing:-0.02em;line-height:0.9;text-transform:none"><?php esc_html_e( 'sit with us.', 'ink-st' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|on-surface","width":"2px","style":"solid"},"bottom":{"color":"var:preset|color|on-surface","width":"2px","style":"solid"},"left":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--on-surface);border-top-style:solid;border-top-width:2px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--on-surface);border-bottom-style:solid;border-bottom-width:2px;border-left-style:none;border-left-width:0px;margin-bottom:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.65rem","letterSpacing":"0.35em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.65rem;font-style:normal;font-weight:700;letter-spacing:0.35em;text-transform:uppercase"><?php esc_html_e( '01 / Address', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.55"}},"textColor":"on-surface"} -->
<p class="has-on-surface-color has-text-color" style="font-size:1.125rem;line-height:1.55"><?php esc_html_e( '88 Ink Street, 2F', 'ink-st' ); ?><br><?php esc_html_e( 'East Village', 'ink-st' ); ?><br><?php esc_html_e( 'NY 10003', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.65rem","letterSpacing":"0.35em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.65rem;font-style:normal;font-weight:700;letter-spacing:0.35em;text-transform:uppercase"><?php esc_html_e( '02 / Hours', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.6"}},"textColor":"on-surface"} -->
<p class="has-on-surface-color has-text-color" style="font-size:1rem;line-height:1.6"><?php esc_html_e( 'Tue–Thu · 13–21', 'ink-st' ); ?><br><?php /* Translators: 1. start of span, 2. end of span */ echo sprintf( esc_html__( 'Fri %1$swalk-ins%2$s · 14–23', 'ink-st' ), '<span class="has-primary-color has-text-color">', '</span>' ); ?><br><?php esc_html_e( 'Sat · 12–20', 'ink-st' ); ?><br><?php esc_html_e( 'Sun–Mon · closed', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.65rem","letterSpacing":"0.35em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.65rem;font-style:normal;font-weight:700;letter-spacing:0.35em;text-transform:uppercase"><?php esc_html_e( '03 / Reach', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.6"}},"textColor":"on-surface"} -->
<p class="has-on-surface-color has-text-color" style="font-size:1rem;line-height:1.6"><?php echo sprintf( esc_html__( '%1$s(212) 555-0188%2$s', 'ink-st' ), '<a href="tel:+12125550188">', '</a>' ); ?><br><?php echo sprintf( esc_html__( '%1$sbook@example.com%2$s', 'ink-st' ), '<a href="mailto:book@example.com">', '</a>' ); ?><br><?php echo sprintf( esc_html__( '%1$sWhatsApp%2$s · %3$sSignal%4$s', 'ink-st' ), '<a href="#">', '</a>', '<a href="#">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.65rem","letterSpacing":"0.35em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-headline-font-family" style="font-size:0.65rem;font-style:normal;font-weight:700;letter-spacing:0.35em;text-transform:uppercase"><?php esc_html_e( '04 / Follow', 'ink-st' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.6"}},"textColor":"on-surface"} -->
<p class="has-on-surface-color has-text-color" style="font-size:1rem;line-height:1.6"><?php echo sprintf( esc_html__( '%1$sinstagram / inkst%2$s', 'ink-st' ), '<a href="#">', '</a>' ); ?><br><?php echo sprintf( esc_html__( '%1$stiktok / inkst%2$s', 'ink-st' ), '<a href="#">', '</a>' ); ?><br><?php echo sprintf( esc_html__( '%1$spinterest%2$s', 'ink-st' ), '<a href="#">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"fontSize":"0.8125rem","letterSpacing":"0.3em"},"spacing":{"padding":{"top":"1.15rem","bottom":"1.15rem","left":"3rem","right":"3rem"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="mailto:book@example.com" style="padding-top:1.15rem;padding-right:3rem;padding-bottom:1.15rem;padding-left:3rem;font-size:0.8125rem;letter-spacing:0.3em"><?php esc_html_e( 'Request a Booking', 'ink-st' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.65rem","letterSpacing":"0.3em","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"outline","fontFamily":"headline"} -->
<p class="has-text-align-center has-outline-color has-text-color has-headline-font-family" style="font-size:0.65rem;font-style:normal;font-weight:600;letter-spacing:0.3em;text-transform:uppercase"><?php esc_html_e( '18+ only · valid ID required · $100 deposit holds your date', 'ink-st' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->
