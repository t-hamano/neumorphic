<?php
/**
 * Neomorphic customizer (Color section)
 *
 * @package neomorphic
 */

function neomorphic_customizer_color( $wp_customize ) {
	// Section
	$wp_customize->add_section(
		'section_color',
		array(
			'title'    => __( 'Color', 'neomorphic' ),
			'priority' => 80,
		)
	);

	// Color skin
	$wp_customize->add_setting(
		'color_skin',
		array(
			'default'           => 'default',
			'sanitize_callback' => 'neomorphic_sanitize_choices_color_skin',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'color_skin',
		array(
			'section'     => 'section_color',
			'settings'    => 'color_skin',
			'label'       => __( 'Color skin', 'neomorphic' ),
			'type'        => 'select',
			'choices'     => array(
				'default' => __( 'Default', 'neomorphic' ),
				'fresh'   => __( 'Fresh', 'neomorphic' ),
				'dark'    => __( 'Dark', 'neomorphic' ),
				'forest'  => __( 'Forest', 'neomorphic' ),
				'sky'     => __( 'Sky', 'neomorphic' ),
				'memory'  => __( 'Memory', 'neomorphic' ),
				'winered' => __( 'Wine red', 'neomorphic' ),
				'geek'    => __( 'Geek', 'neomorphic' ),
			),
			'description' => __( 'Changing the color skin sets each color setting to the theme\'s default color.<br>You can also change the color setting individually after changing the color skin.', 'neomorphic' ),
		)
	);

	// Background color
	$wp_customize->add_setting(
		'color_bg',
		array(
			'default'           => NEOMORPHIC_COLOR_SKIN['default']['bg'],
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_bg',
			array(
				'section'  => 'section_color',
				'settings' => 'color_bg',
				'label'    => __( 'Background color', 'neomorphic' ),
			)
		)
	);

	// Main text color
	$wp_customize->add_setting(
		'color_text_main',
		array(
			'default'           => NEOMORPHIC_COLOR_SKIN['default']['text_main'],
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_text_main',
			array(
				'section'     => 'section_color',
				'settings'    => 'color_text_main',
				'label'       => __( 'Main text color', 'neomorphic' ),
				'description' => __( 'Set the color of main text.', 'neomorphic' ),
			)
		)
	);

	// Accent color
	$wp_customize->add_setting(
		'color_accent',
		array(
			'default'           => NEOMORPHIC_COLOR_SKIN['default']['accent'],
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_accent',
			array(
				'section'     => 'section_color',
				'settings'    => 'color_accent',
				'label'       => __( 'Accent color', 'neomorphic' ),
				'description' => __( 'Set the color of title, SNS icons, widget title and so forth.', 'neomorphic' ),
			)
		)
	);

	// Link text color
	$wp_customize->add_setting(
		'color_text_link',
		array(
			'default'           => NEOMORPHIC_COLOR_SKIN['default']['text_link'],
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_text_link',
			array(
				'section'     => 'section_color',
				'settings'    => 'color_text_link',
				'label'       => __( 'Link text color', 'neomorphic' ),
				'description' => __( 'Set the color of the link text in the article body.', 'neomorphic' ),
			)
		)
	);

	// Enable border text
	$wp_customize->add_setting(
		'color_text_border_display',
		array(
			'default'           => NEOMORPHIC_COLOR_SKIN['default']['text_border_display'],
			'sanitize_callback' => 'neomorphic_sanitize_checkbox',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_text_border_display',
			array(
				'section'     => 'section_color',
				'settings'    => 'color_text_border_display',
				'label'       => __( 'Enable border text', 'neomorphic' ),
				'description' => __( 'Add a border to text so that it stands out from the background.<br>(Cover headlines, global menus and so forth.)', 'neomorphic' ),
				'type'        => 'checkbox',
			)
		)
	);

	// Text border color
	$wp_customize->add_setting(
		'color_text_border_color',
		array(
			'default'           => NEOMORPHIC_COLOR_SKIN['default']['text_border_color'],
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_text_border_color',
			array(
				'section'  => 'section_color',
				'settings' => 'color_text_border_color',
				'label'    => __( 'Text border color', 'neomorphic' ),
			)
		)
	);
}

add_action( 'customize_register', 'neomorphic_customizer_color' );
