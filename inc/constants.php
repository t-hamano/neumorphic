<?php
/**
 * Neumorphic theme constants
 *
 * @package neumorphic
 */

/***********************************************************
 * SNS icon definitions
 **********************************************************/

// Customizer choices
$neumorphic_sns_choice = array(
	'wordpress' => __( 'WordPress', 'neumorphic' ),
	'website'   => __( 'Web', 'neumorphic' ),
	'facebook'  => __( 'Facebook', 'neumorphic' ),
	'twitter'   => __( 'Twitter', 'neumorphic' ),
	'instagram' => __( 'Instagram', 'neumorphic' ),
	'youtube'   => __( 'YouTube', 'neumorphic' ),
	'amazon'    => __( 'Amazon', 'neumorphic' ),
	'github'    => __( 'GitHub', 'neumorphic' ),
	'line'      => __( 'LINE', 'neumorphic' ),
	'pinterest' => __( 'Pinterest', 'neumorphic' ),
	'linkedIn'  => __( 'LinkedIn', 'neumorphic' ),
);

// Font Awesome classes mapping
const NEUMORPHIC_FA_CLASS = array(
	'wordpress' => 'fab fa-wordpress-simple',
	'website'   => 'fas fa-globe',
	'facebook'  => 'fab fa-facebook-f',
	'twitter'   => 'fab fa-twitter',
	'instagram' => 'fab fa-instagram',
	'youtube'   => 'fab fa-youtube',
	'amazon'    => 'fab fa-amazon',
	'github'    => 'fab fa-github',
	'line'      => 'fab fa-line',
	'pinterest' => 'fab fa-pinterest-p',
	'linkedIn'  => 'fab fa-linkedin-in',
);

/***********************************************************
 * Customizer default settings
 **********************************************************/

// Color skins
const NEUMORPHIC_COLOR_SKIN = array(
	'default'       => array(
		'bg'                  => '#bec5c9',
		'text_main'           => '#374147',
		'accent'              => '#2980b9',
		'text_link'           => '#cf6b77',
		'text_border_display' => true,
		'text_border_color'   => '#ffffff',
	),
	'cold_sweat'    => array(
		'bg'                  => '#dde4e6',
		'text_main'           => '#696d6c',
		'accent'              => '#067974',
		'text_link'           => '#588eba',
		'text_border_display' => true,
		'text_border_color'   => '#ffffff',
	),
	'black_orpheus' => array(
		'bg'                  => '#384048',
		'text_main'           => '#eceeee',
		'accent'              => '#87a6a3',
		'text_link'           => '#9d8386',
		'text_border_display' => false,
		'text_border_color'   => '#ffffff',
	),
	'green_dolphin' => array(
		'bg'                  => '#1d7a64',
		'text_main'           => '#eceeed',
		'accent'              => '#d19445',
		'text_link'           => '#f19890',
		'text_border_display' => false,
		'text_border_color'   => '#ffffff',
	),
	'summertime'    => array(
		'bg'                  => '#86bad8',
		'text_main'           => '#35423f',
		'accent'              => '#dd6735',
		'text_link'           => '#1d7c3a',
		'text_border_display' => true,
		'text_border_color'   => '#ffffff',
	),
	'brown_jub'     => array(
		'bg'                  => '#b9b2a5',
		'text_main'           => '#443d40',
		'accent'              => '#702a2a',
		'text_link'           => '#642664',
		'text_border_display' => true,
		'text_border_color'   => '#ffffff',
	),
	'wine_roses'    => array(
		'bg'                  => '#7c2739',
		'text_main'           => '#cfd6bc',
		'accent'              => '#509586',
		'text_link'           => '#eccc68',
		'text_border_display' => false,
		'text_border_color'   => '#ffffff',
	),
	'midnight_blue' => array(
		'bg'                  => '#0C354B',
		'text_main'           => '#ffffff',
		'accent'              => '#23FB02',
		'text_link'           => '#23fcdf',
		'text_border_display' => false,
		'text_border_color'   => '#ffffff',
	),
);

// Display search bar on header
define( 'NEUMORPHIC_HEADER_SEARCH_DISPLAY', true );

// Display SNS icon on header
define( 'NEUMORPHIC_HEADER_SNS_DISPLAY', true );

// Display SNS icon on footer
define( 'NEUMORPHIC_FOOTER_SNS_DISPLAY', true );

// Sidebar position
define( 'NEUMORPHIC_SIDEBAR_POSITION', 'right' );

// Show sidebar on front page
define( 'NEUMORPHIC_SIDEBAR_DISPLAY_FRONT', false );

// Show sidebar on static page
define( 'NEUMORPHIC_SIDEBAR_DISPLAY_PAGE', true );

// Show sidebar on post
define( 'NEUMORPHIC_SIDEBAR_DISPLAY_POST', true );

// Show sidebar on archive page
define( 'NEUMORPHIC_SIDEBAR_DISPLAY_ARCHIVE', true );

// Credit
define(
	'NEUMORPHIC_FOOTER_CREDIT',
	sprintf(
		'%s : <a href="%s">%s</a>',
		__( 'Neumorphic Theme', 'neumorphic' ),
		esc_url( __( 'https://wordpress.org/', 'neumorphic' ) ),
		__( 'Powered by WordPress', 'neumorphic' )
	)
);

// Display search button on mobile drawer menu
define( 'NEUMORPHIC_MOBILE_SEARCH_DISPLAY', false );
