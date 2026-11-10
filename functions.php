<?php
/**
 * Ink St functions and definitions.
 *
 * @package Ink_St
 * @since 1.0.0
 */

if ( ! function_exists( 'ink_st_enqueue_styles' ) ) :
	function ink_st_enqueue_styles() {
		wp_enqueue_style(
			'ink-st-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'ink_st_enqueue_styles' );

if ( ! function_exists( 'ink_st_pattern_categories' ) ) :
	function ink_st_pattern_categories() {
		register_block_pattern_category(
			'ink-st',
			array(
				'label' => __( 'Ink St', 'ink-st' ),
			)
		);
	}
endif;
add_action( 'init', 'ink_st_pattern_categories' );

add_action( 'after_setup_theme', function() {
	remove_theme_support( 'core-block-patterns' );
	add_editor_style( 'style.css' );
} );

add_action( 'init', function() {
	register_block_style( 'core/paragraph', array(
		'name'  => 'no-wrap',
		'label' => __( 'No Wrap', 'ink-st' ),
	) );
	register_block_style( 'core/paragraph', array(
		'name'  => 'ink-stamp',
		'label' => __( 'Ink Stamp', 'ink-st' ),
	) );
	register_block_style( 'core/heading', array(
		'name'  => 'ink-outline',
		'label' => __( 'Ink Outline', 'ink-st' ),
	) );
} );


/*
 * Admin: a dismissible welcome notice and the Appearance → About Ink St page.
 */

if ( ! function_exists( 'ink_st_show_notice' ) ) :
	/**
	 * The welcome notice is shown to admins (who can dismiss it) until dismissed.
	 */
	function ink_st_show_notice() {
		return ! get_option( 'ink_st_notice_dismissed' ) && current_user_can( 'edit_theme_options' );
	}
endif;

if ( ! function_exists( 'ink_st_admin_notice' ) ) :
	/**
	 * Welcome notice with a short note about Ink St PRO.
	 */
	function ink_st_admin_notice() {
		if ( ! ink_st_show_notice() ) {
			return;
		}
		$stats = array(
			array( number_format_i18n( 61 ), __( 'Patterns', 'ink-st' ) ),
			array( number_format_i18n( 9 ), __( 'Color Styles', 'ink-st' ) ),
			array( number_format_i18n( 6 ), __( 'Homepages', 'ink-st' ) ),
			array( '$39', __( '/ year', 'ink-st' ) ),
		);
		?>
		<div id="ink-st-notice" class="notice is-dismissible">
			<div class="isn-wrap">
				<div class="isn-top">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/localstarter-logo.jpg' ); ?>" class="isn-logo" alt="<?php esc_attr_e( 'Local Starter Themes', 'ink-st' ); ?>" />
					<span class="isn-tag"><?php esc_html_e( 'LocalStarter Themes', 'ink-st' ); ?></span>
				</div>
				<div class="isn-body">
					<strong class="isn-title"><?php esc_html_e( 'Thanks for using Ink St!', 'ink-st' ); ?></strong>
					<p class="isn-desc"><?php esc_html_e( 'We built this theme to help tattoo studios, piercing parlours, and independent artists have a bold, modern website without the hassle. Hope it works great for you!', 'ink-st' ); ?></p>
					<p class="isn-desc isn-desc--pro">
						<?php
						echo wp_kses(
							__( 'Want to take it further? <strong>Ink St PRO</strong> gives you 61 patterns, 9 color styles, and 6 full-page homepage designs — everything you need to build a stunning site fast.', 'ink-st' ),
							array( 'strong' => array() )
						);
						?>
					</p>
					<div class="isn-stats">
						<?php foreach ( $stats as $stat ) : ?>
							<div class="isn-stat"><span class="isn-stat-num"><?php echo esc_html( $stat[0] ); ?></span><span class="isn-stat-label"><?php echo esc_html( $stat[1] ); ?></span></div>
						<?php endforeach; ?>
					</div>
					<div class="isn-actions">
						<a href="<?php echo esc_url( 'https://localstarterthemes.com/theme/ink-st-pro/?utm_source=ink-st-notice' ); ?>" class="isn-btn" target="_blank"><?php esc_html_e( 'Get Ink St PRO', 'ink-st' ); ?></a>
						<span class="isn-contact"><?php esc_html_e( 'Need help with your site or theme?', 'ink-st' ); ?> <a href="mailto:hello@localstarterthemes.com">hello@localstarterthemes.com</a></span>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
endif;
add_action( 'admin_notices', 'ink_st_admin_notice' );

if ( ! function_exists( 'ink_st_dismiss_notice' ) ) :
	/**
	 * Remember that the welcome notice was dismissed (AJAX).
	 */
	function ink_st_dismiss_notice() {
		check_ajax_referer( 'ink_st_dismiss_notice', 'nonce' );
		if ( current_user_can( 'edit_theme_options' ) ) {
			update_option( 'ink_st_notice_dismissed', 1, false );
		}
		wp_die();
	}
endif;
add_action( 'wp_ajax_ink_st_dismiss_notice', 'ink_st_dismiss_notice' );

if ( ! function_exists( 'ink_st_admin_assets' ) ) :
	/**
	 * Styles and script for the notice and the About page.
	 *
	 * @param string $hook Current admin page.
	 */
	function ink_st_admin_assets( $hook ) {
		$version = wp_get_theme( get_template() )->get( 'Version' );
		if ( ink_st_show_notice() ) {
			wp_enqueue_style( 'ink-st-admin-notice', get_template_directory_uri() . '/assets/css/admin-notice.css', array(), $version );
			wp_enqueue_script( 'ink-st-admin-notice', get_template_directory_uri() . '/assets/js/admin-notice.js', array(), $version, true );
			wp_localize_script(
				'ink-st-admin-notice',
				'inkStNotice',
				array(
					'ajaxUrl' => admin_url( 'admin-ajax.php' ),
					'nonce'   => wp_create_nonce( 'ink_st_dismiss_notice' ),
				)
			);
		}
		if ( 'appearance_page_ink-st-about' === $hook ) {
			wp_enqueue_style( 'ink-st-about-page', get_template_directory_uri() . '/assets/css/admin-about.css', array(), $version );
		}
	}
endif;
add_action( 'admin_enqueue_scripts', 'ink_st_admin_assets' );

if ( ! function_exists( 'ink_st_add_about_page' ) ) :
	/**
	 * Appearance → About Ink St.
	 */
	function ink_st_add_about_page() {
		add_theme_page(
			__( 'About Ink St', 'ink-st' ),
			__( 'About Ink St', 'ink-st' ),
			'edit_theme_options',
			'ink-st-about',
			'ink_st_about_page_html'
		);
	}
endif;
add_action( 'admin_menu', 'ink_st_add_about_page' );

if ( ! function_exists( 'ink_st_about_page_html' ) ) :
	/**
	 * About Ink St page.
	 */
	function ink_st_about_page_html() {
		$version = wp_get_theme( get_template() )->get( 'Version' );
		$pro     = array(
			array( __( 'Ready-made patterns', 'ink-st' ), number_format_i18n( 61 ) ),
			array( __( 'Color styles', 'ink-st' ), number_format_i18n( 9 ) ),
			array( __( 'Starter homepages', 'ink-st' ), number_format_i18n( 6 ) ),
			array( __( 'License', 'ink-st' ), __( 'From $39 / year', 'ink-st' ) ),
		);
		?>
		<div class="wrap ist-about-wrap">

			<div class="ist-header">
				<p class="ist-theme-label"><?php esc_html_e( 'WordPress Block Theme', 'ink-st' ); ?></p>
				<h1 class="ist-page-title"><?php esc_html_e( 'Ink St', 'ink-st' ); ?> <span class="ist-version">v<?php echo esc_html( $version ); ?></span></h1>
				<p class="ist-header-desc"><?php esc_html_e( 'A dark block theme for tattoo studios, piercing parlours, and body-art collectives — noir surfaces, a tattoo-flash red accent, artist roster, captioned portfolio, rate sheet, and booking details.', 'ink-st' ); ?></p>
			</div>

			<div class="ist-grid">

				<div class="ist-card ist-card--pro">
					<p class="ist-label"><?php esc_html_e( 'Premium', 'ink-st' ); ?></p>
					<h2><?php esc_html_e( 'Upgrade to Ink St PRO', 'ink-st' ); ?></h2>
					<p><?php esc_html_e( 'Six ready-made homepage designs — Classic Studio, Flash Shop, Fine Line Atelier, Blackwork Collective, Large Scale, and Solo Artist — plus tattoo styles, booking process, aftercare, reviews, and FAQ sections. No page builders, no lock-in, 100% native WordPress.', 'ink-st' ); ?></p>
					<?php foreach ( $pro as $row ) : ?>
						<div class="ist-detail">
							<span class="ist-detail-label"><?php echo esc_html( $row[0] ); ?></span>
							<span class="ist-detail-value"><?php echo esc_html( $row[1] ); ?></span>
						</div>
					<?php endforeach; ?>
					<div class="ist-actions">
						<a href="<?php echo esc_url( 'https://localstarterthemes.com/theme/ink-st-pro/?utm_source=ink-st-about' ); ?>" class="ist-btn ist-btn--primary" target="_blank" rel="noopener"><?php esc_html_e( 'Get Ink St PRO', 'ink-st' ); ?></a>
						<a href="<?php echo esc_url( 'https://localstarterthemes.com/ink-st/?utm_source=ink-st-about' ); ?>" class="ist-btn" target="_blank" rel="noopener"><?php esc_html_e( 'View live demo', 'ink-st' ); ?></a>
					</div>
				</div>

				<div class="ist-card">
					<p class="ist-label"><?php esc_html_e( 'Support', 'ink-st' ); ?></p>
					<h2><?php esc_html_e( 'Need Help With Your Site?', 'ink-st' ); ?></h2>
					<p><?php esc_html_e( 'We offer website setup assistance, theme customization, and ongoing support for local businesses.', 'ink-st' ); ?></p>
					<div class="ist-help">
						<p class="ist-help-title"><?php esc_html_e( 'Resources', 'ink-st' ); ?></p>
						<ul>
							<li><a href="<?php echo esc_url( 'https://localstarterthemes.com/?utm_source=ink-st-about' ); ?>" target="_blank" rel="noopener">localstarterthemes.com</a></li>
							<li><a href="<?php echo esc_url( 'https://localstarterthemes.com/support/?utm_source=ink-st-about' ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Contact & Support', 'ink-st' ); ?></a></li>
							<li><a href="mailto:hello@localstarterthemes.com">hello@localstarterthemes.com</a></li>
						</ul>
					</div>
				</div>

				<div class="ist-card ist-card--wide">
					<p class="ist-label"><?php esc_html_e( 'Theme Info', 'ink-st' ); ?></p>
					<h2><?php esc_html_e( 'About This Theme', 'ink-st' ); ?></h2>
					<div class="ist-detail">
						<span class="ist-detail-label"><?php esc_html_e( 'Version', 'ink-st' ); ?></span>
						<span class="ist-detail-value"><?php echo esc_html( $version ); ?></span>
					</div>
					<div class="ist-detail">
						<span class="ist-detail-label"><?php esc_html_e( 'Author', 'ink-st' ); ?></span>
						<span class="ist-detail-value"><a href="<?php echo esc_url( 'https://localstarterthemes.com' ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Local Starter Themes', 'ink-st' ); ?></a></span>
					</div>
					<div class="ist-detail">
						<span class="ist-detail-label"><?php esc_html_e( 'License', 'ink-st' ); ?></span>
						<span class="ist-detail-value"><?php esc_html_e( 'GPL v2 or later', 'ink-st' ); ?></span>
					</div>
					<div class="ist-detail">
						<span class="ist-detail-label"><?php esc_html_e( 'Requires WordPress', 'ink-st' ); ?></span>
						<span class="ist-detail-value">6.4+</span>
					</div>
				</div>

			</div>
		</div>
		<?php
	}
endif;
