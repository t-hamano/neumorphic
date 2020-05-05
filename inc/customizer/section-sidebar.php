<?php
/**
 * Neomorphic customizer (Sidebar section)
 *
 * @package neomorphic
 */

function neomorphic_customizer_sidebar( $wp_customize ) {
	// Section
	$wp_customize->add_section(
		'section_sidebar',
		array(
			'title'    => __( 'Sidebar Setting', 'neomorphic' ),
			'priority' => 140,
		)
	);

	// Sidebar position
	$wp_customize->add_setting(
		'sidebar_position',
		array(
			'default'           => NEOMORPHIC_SIDEBAR_POSITION,
			'sanitize_callback' => 'neomorphic_sanitize_choices_sidebar',
		)
	);

	$wp_customize->add_control(
		'sidebar_position',
		array(
			'section'     => 'section_sidebar',
			'settings'    => 'sidebar_position',
			'label'       => __( 'Sidebar display position', 'neomorphic' ),
			'type'        => 'select',
			'choices'     => array(
				'right' => __( 'Display on the right', 'neomorphic' ),
				'left'  => __( 'Display on the left', 'neomorphic' ),
			),
			'description' => __( 'If you want to change the display status on the specific page, select a template from Post Attributes on the edit page.<br>If you don\'t need sidebar, uncheck all the boxes.', 'neomorphic' ),
		)
	);

	// Show sidebar on front page
	$wp_customize->add_setting(
		'sidebar_display_front',
		array(
			'default'           => NEOMORPHIC_SIDEBAR_DISPLAY_FRONT,
			'sanitize_callback' => 'neomorphic_sanitize_checkbox',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'sidebar_display_front',
			array(
				'section'  => 'section_sidebar',
				'settings' => 'sidebar_display_front',
				'label'    => __( 'Show sidebar on front page', 'neomorphic' ),
				'type'     => 'checkbox',
			)
		)
	);

	// Show sidebar on blog homepage
	$wp_customize->add_setting(
		'sidebar_display_blog',
		array(
			'default'           => NEOMORPHIC_SIDEBAR_DISPLAY_FRONT,
			'sanitize_callback' => 'neomorphic_sanitize_checkbox',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'sidebar_display_blog',
			array(
				'section'  => 'section_sidebar',
				'settings' => 'sidebar_display_blog',
				'label'    => __( 'Show sidebar on page set to a post page', 'neomorphic' ),
				'type'     => 'checkbox',
			)
		)
	);

	// Display on page
	$wp_customize->add_setting(
		'sidebar_display_page',
		array(
			'default'           => NEOMORPHIC_SIDEBAR_DISPLAY_PAGE,
			'sanitize_callback' => 'neomorphic_sanitize_checkbox',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'sidebar_display_page',
			array(
				'section'  => 'section_sidebar',
				'settings' => 'sidebar_display_page',
				'label'    => __( 'Show sidebar on page', 'neomorphic' ),
				'type'     => 'checkbox',
			)
		)
	);

	// Display on post
	$wp_customize->add_setting(
		'sidebar_display_post',
		array(
			'default'           => NEOMORPHIC_SIDEBAR_DISPLAY_POST,
			'sanitize_callback' => 'neomorphic_sanitize_checkbox',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'sidebar_display_post',
			array(
				'section'  => 'section_sidebar',
				'settings' => 'sidebar_display_post',
				'label'    => __( 'Show sidebar on post', 'neomorphic' ),
				'type'     => 'checkbox',
			)
		)
	);

	// Display on archive page
	$wp_customize->add_setting(
		'sidebar_display_archive',
		array(
			'default'           => NEOMORPHIC_SIDEBAR_DISPLAY_ARCHIVE,
			'sanitize_callback' => 'neomorphic_sanitize_checkbox',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'sidebar_display_archive',
			array(
				'section'  => 'section_sidebar',
				'settings' => 'sidebar_display_archive',
				'label'    => __( 'Show sidebar on archive page', 'neomorphic' ),
				'type'     => 'checkbox',
			)
		)
	);
}

add_action( 'customize_register', 'neomorphic_customizer_sidebar' );
