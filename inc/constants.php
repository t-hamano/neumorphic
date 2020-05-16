<?php
/**
 * Neomorphic theme constants
 *
 * @package neomorphic
 */

/***********************************************************
 * SNS icon definitions
 **********************************************************/

// Customizer choices
const NEOMORPHIC_SNS_CHOICE = array(
	'website'   => 'Web',
	'facebook'  => 'Facebook',
	'twitter'   => 'Twitter',
	'instagram' => 'Instagram',
	'youtube'   => 'YouTube',
	'amazon'    => 'Amazon',
	'github'    => 'GitHub',
	'line'      => 'LINE',
	'pinterest' => 'Pinterest',
	'linkedIn'  => 'LinkedIn',
);

// Font Awesome classes mapping
const NEOMORPHIC_FA_CLASS = array(
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
const NEOMORPHIC_COLOR_SKIN = array(
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
define( 'NEOMORPHIC_HEADER_SEARCH_DISPLAY', true );

// Display SNS icon on header
define( 'NEOMORPHIC_HEADER_SNS_DISPLAY', true );

// Display SNS icon on footer
define( 'NEOMORPHIC_FOOTER_SNS_DISPLAY', true );

// Sidebar position
define( 'NEOMORPHIC_SIDEBAR_POSITION', 'right' );

// Show sidebar on front page
define( 'NEOMORPHIC_SIDEBAR_DISPLAY_FRONT', false );

// Show sidebar on page set to a post page
define( 'NEOMORPHIC_SIDEBAR_DISPLAY_BLOG', true );

// Show sidebar on page
define( 'NEOMORPHIC_SIDEBAR_DISPLAY_PAGE', true );

// Show sidebar on post
define( 'NEOMORPHIC_SIDEBAR_DISPLAY_POST', true );

// Show sidebar on archive page
define( 'NEOMORPHIC_SIDEBAR_DISPLAY_ARCHIVE', true );

// Credit
define( 'NEOMORPHIC_FOOTER_CREDIT', __( 'Neomorphic Theme : Powered by <a href="https://wordpress.org/" target="_blank">WordPress</a>' ) );

// Display search button on mobile drawer menu
define( 'NEOMORPHIC_MOBILE_SEARCH_DISPLAY', false );
