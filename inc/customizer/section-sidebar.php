<?php
/**
 * Neumorphic customizer (Sidebar section)
 *
 * @package neumorphic
 */

function neumorphic_customizer_sidebar( $wp_customize ) {
	// Section
	$wp_customize->add_section(
		'section_sidebar',
		array(
			'title'    => __( 'Sidebar Setting', 'neumorphic' ),
			'priority' => 140,
		)
	);

	// Sidebar position
	$wp_customize->add_setting(
		'sidebar_position',
		array(
			'default'           => NEUMORPHIC_SIDEBAR_POSITION,
			'sanitize_callback' => 'neumorphic_sanitize_choices_sidebar',
		)
	);

	$wp_customize->add_control(
		'sidebar_position',
		array(
			'section'     => 'section_sidebar',
			'settings'    => 'sidebar_position',
			'label'       => __( 'Sidebar display position', 'neumorphic' ),
			'type'        => 'select',
			'choices'     => array(
				'right' => __( 'Display on the right', 'neumorphic' ),
				'left'  => __( 'Display on the left', 'neumorphic' ),
			),
			'description' => __( 'If you want to change the display status on the specific page, select a template from Post Attributes on the edit page.<br>If you don\'t need sidebar, uncheck all the boxes.', 'neumorphic' ),
		)
	);

	// Show sidebar on front page
	$wp_customize->add_setting(
		'sidebar_display_front',
		array(
			'default'           => NEUMORPHIC_SIDEBAR_DISPLAY_FRONT,
			'sanitize_callback' => 'neumorphic_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'sidebar_display_front',
			array(
				'section'  => 'section_sidebar',
				'settings' => 'sidebar_display_front',
				'label'    => __( 'Show sidebar on front page', 'neumorphic' ),
				'type'     => 'checkbox',
			)
		)
	);

	// Display on page
	$wp_customize->add_setting(
		'sidebar_display_page',
		array(
			'default'           => NEUMORPHIC_SIDEBAR_DISPLAY_PAGE,
			'sanitize_callback' => 'neumorphic_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'sidebar_display_page',
			array(
				'section'  => 'section_sidebar',
				'settings' => 'sidebar_display_page',
				'label'    => __( 'Show sidebar on static page', 'neumorphic' ),
				'type'     => 'checkbox',
			)
		)
	);

	// Display on post
	$wp_customize->add_setting(
		'sidebar_display_post',
		array(
			'default'           => NEUMORPHIC_SIDEBAR_DISPLAY_POST,
			'sanitize_callback' => 'neumorphic_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'sidebar_display_post',
			array(
				'section'  => 'section_sidebar',
				'settings' => 'sidebar_display_post',
				'label'    => __( 'Show sidebar on post', 'neumorphic' ),
				'type'     => 'checkbox',
			)
		)
	);

	// Display on archive page
	$wp_customize->add_setting(
		'sidebar_display_archive',
		array(
			'default'           => NEUMORPHIC_SIDEBAR_DISPLAY_ARCHIVE,
			'sanitize_callback' => 'neumorphic_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'sidebar_display_archive',
			array(
				'section'  => 'section_sidebar',
				'settings' => 'sidebar_display_archive',
				'label'    => __( 'Show sidebar on archive page and blog posts index page', 'neumorphic' ),
				'type'     => 'checkbox',
			)
		)
	);
}

add_action( 'customize_register', 'neumorphic_customizer_sidebar' );
