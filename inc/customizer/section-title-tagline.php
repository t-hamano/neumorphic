<?php
/**
 * Neumorphic customizer (Site title and description)
 *
 * @package neumorphic
 */

function neumorphic_customizer_title_tagline( $wp_customize ) {
	// Site title and description
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	$wp_customize->selective_refresh->add_partial(
		'blogname',
		array(
			'selector'        => '.header__brand-title a',
			'render_callback' => function() {
				bloginfo( 'name' );
			},
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'blogdescription',
		array(
			'selector'        => '.header__brand-description span',
			'render_callback' => function() {
				bloginfo( 'description' );
			},
		)
	);

	// Use neumorphic style site logo image
	$wp_customize->add_setting(
		'site_logo_nm_style',
		array(
			'default'           => NEUMORPHIC_SITE_LOGO_NM_STYLE,
			'sanitize_callback' => 'neumorphic_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'site_logo_nm_style',
		array(
			'section'  => 'title_tagline',
			'settings' => 'site_logo_nm_style',
			'label'    => __( 'Use neumorphic style site logo image', 'neumorphic' ),
			'type'     => 'checkbox',
			'priority' => 8,
		)
	);
}

add_action( 'customize_register', 'neumorphic_customizer_title_tagline' );
