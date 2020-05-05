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
	'default' => array(
		'bg'                  => '#bdc3c7',
		'text_main'           => '#2c3e50',
		'accent'              => '#2980b9',
		'text_link'           => '#e84118',
		'text_border_display' => true,
		'text_border_color'   => '#ffffff',
	),
	'fresh'   => array(
		'bg'                  => '#ecf0f1',
		'text_main'           => '#34495e',
		'accent'              => '#3498db',
		'text_link'           => '#e67e22',
		'text_border_display' => true,
		'text_border_color'   => '#ffffff',
	),
	'dark'    => array(
		'bg'                  => '#2c3e50',
		'text_main'           => '#ffffff',
		'accent'              => '#e67e22',
		'text_link'           => '#3498db',
		'text_border_display' => false,
		'text_border_color'   => '#ffffff',
	),
	'forest'  => array(
		'bg'                  => '#2c3e50',
		'text_main'           => '#ffffff',
		'accent'              => '#e67e22',
		'text_link'           => '#3498db',
		'text_border_display' => false,
		'text_border_color'   => '#ffffff',
	),
	'sky'     => array(
		'bg'                  => '#2c3e50',
		'text_main'           => '#ffffff',
		'accent'              => '#e67e22',
		'text_link'           => '#3498db',
		'text_border_display' => false,
		'text_border_color'   => '#ffffff',
	),
	'memory'  => array(
		'bg'                  => '#d7bb79',
		'text_main'           => '#2f3542',
		'accent'              => '381515',
		'text_link'           => '#2980b9',
		'text_border_display' => true,
		'text_border_color'   => '#ffffff',
	),
	'winered' => array(
		'bg'                  => '#8f2d42',
		'text_main'           => '#ffffff',
		'accent'              => '#a4b0be',
		'text_link'           => '#eccc68',
		'text_border_display' => false,
		'text_border_color'   => '#ffffff',
	),
	'geek'    => array(
		'bg'                  => '#123911',
		'text_main'           => '#ffffff',
		'accent'              => '#23FB02',
		'text_link'           => '#23FB02',
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
