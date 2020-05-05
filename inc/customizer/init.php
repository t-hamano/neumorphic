<?php
/**
 * Neomorphic customizer initialization
 *
 * @package neomorphic
 */

// Sanitizer
require_once( get_template_directory() . '/inc/customizer/sanitize.php' );

// Section (Site Title and Description)
require_once( get_template_directory() . '/inc/customizer/section-title-tagline.php' );

// Section (Color)
require_once( get_template_directory() . '/inc/customizer/section-color.php' );

// Section (Header)
require_once( get_template_directory() . '/inc/customizer/section-header.php' );

// Section (Footer)
require_once( get_template_directory() . '/inc/customizer/section-footer.php' );

// Section (Sidebar)
require_once( get_template_directory() . '/inc/customizer/section-sidebar.php' );

// Section (Archive page)
require_once( get_template_directory() . '/inc/customizer/section-archive.php' );

// Section (SNS)
require_once( get_template_directory() . '/inc/customizer/section-sns.php' );

// Section (Mobile)
require_once( get_template_directory() . '/inc/customizer/section-mobile.php' );

// CSS Generator
require_once( get_template_directory() . '/inc/customizer/css.php' );

/**
 * Enqueues scripts for customizer controls & settings.
 */
function neomorphic_customize_controls_enqueue_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script( 'neomorphic-customize', get_theme_file_uri() . '/assets/js/customizer-control.js', array( 'customize-controls', 'jquery' ), $theme_version, false );

	wp_add_inline_script( 'neomorphic-customize', sprintf( 'var skinList = %s;', wp_json_encode( NEOMORPHIC_COLOR_SKIN ) ), 'before' );
}

add_action( 'customize_controls_enqueue_scripts', 'neomorphic_customize_controls_enqueue_scripts' );

/**
 * Enqueue scripts for the customizer preview.
 */
function neomorphic_customize_preview_init() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script( 'neomorphic-customize-preview', get_theme_file_uri() . '/assets/js/customizer-preview.js', array( 'customize-preview', 'jquery' ), $theme_version, true );
}

add_action( 'customize_preview_init', 'neomorphic_customize_preview_init' );
