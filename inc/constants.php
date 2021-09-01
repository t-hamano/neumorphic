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
	'500px'      => __( '500px', 'neumorphic' ),
	'amazon'     => __( 'Amazon', 'neumorphic' ),
	'bandcamp'   => __( 'Bandcamp', 'neumorphic' ),
	'behance'    => __( 'Behance', 'neumorphic' ),
	'codepen'    => __( 'CodePen', 'neumorphic' ),
	'deviantart' => __( 'Deviantart', 'neumorphic' ),
	'dribbble'   => __( 'Dribbble', 'neumorphic' ),
	'dropbox'    => __( 'Dropbox', 'neumorphic' ),
	'etsy'       => __( 'Etsy', 'neumorphic' ),
	'facebook'   => __( 'Facebook', 'neumorphic' ),
	'flickr'     => __( 'Flickr', 'neumorphic' ),
	'foursquare' => __( 'Foursquare', 'neumorphic' ),
	'goodreads'  => __( 'Goodreads', 'neumorphic' ),
	'google'     => __( 'Google', 'neumorphic' ),
	'github'     => __( 'GitHub', 'neumorphic' ),
	'instagram'  => __( 'Instagram', 'neumorphic' ),
	'lastfm'     => __( 'Last.fm', 'neumorphic' ),
	'line'       => __( 'LINE', 'neumorphic' ),
	'linkedIn'   => __( 'LinkedIn', 'neumorphic' ),
	'mail'       => __( 'Mail', 'neumorphic' ),
	'mastodon'   => __( 'Mastodon', 'neumorphic' ),
	'medium'     => _x( 'Medium', 'sns', 'neumorphic' ),
	'meetup'     => __( 'Meetup', 'neumorphic' ),
	'patreon'    => __( 'Patreon', 'neumorphic' ),
	'pinterest'  => __( 'Pinterest', 'neumorphic' ),
	'pocket'     => __( 'Pocket', 'neumorphic' ),
	'reddit'     => __( 'Reddit', 'neumorphic' ),
	'rss'        => __( 'RSS', 'neumorphic' ),
	'skype'      => __( 'Skype', 'neumorphic' ),
	'snapchat'   => __( 'Snapchat', 'neumorphic' ),
	'soundcloud' => __( 'Soundcloud', 'neumorphic' ),
	'spotify'    => __( 'Spotify', 'neumorphic' ),
	'telegram'   => __( 'Telegram', 'neumorphic' ),
	'tiktok'     => __( 'Tiktok', 'neumorphic' ),
	'tumblr'     => __( 'Tumblr', 'neumorphic' ),
	'twitch'     => __( 'Twitch', 'neumorphic' ),
	'twitter'    => __( 'Twitter', 'neumorphic' ),
	'vimeo'      => __( 'Vimeo', 'neumorphic' ),
	'vk'         => __( 'VK', 'neumorphic' ),
	'website'    => __( 'Web', 'neumorphic' ),
	'wordpress'  => __( 'WordPress', 'neumorphic' ),
	'yelp'       => __( 'Yelp', 'neumorphic' ),
	'youtube'    => __( 'YouTube', 'neumorphic' ),
);

// Font Awesome classes mapping
const NEUMORPHIC_FA_CLASS = array(
	'500px'      => 'fab fa-500px',
	'amazon'     => 'fab fa-amazon',
	'bandcamp'   => 'fab fa-bandcamp',
	'behance'    => 'fab fa-behance',
	'codepen'    => 'fab fa-codepen',
	'deviantart' => 'fab fa-deviantart',
	'dribbble'   => 'fab fa-dribbble',
	'dropbox'    => 'fab fa-dropbox',
	'etsy'       => 'fab fa-etsy',
	'facebook'   => 'fab fa-facebook-f',
	'flickr'     => 'fab fa-flickr',
	'foursquare' => 'fab fa-foursquare',
	'goodreads'  => 'fab fa-goodreads-g',
	'google'     => 'fab fa-google',
	'github'     => 'fab fa-github',
	'instagram'  => 'fab fa-instagram',
	'lastfm'     => 'fab fa-lastfm',
	'line'       => 'fab fa-line',
	'linkedIn'   => 'fab fa-linkedin-in',
	'mail'       => 'far fa-envelope',
	'mastodon'   => 'fab fa-mastodon',
	'medium'     => 'fab fa-medium-m',
	'meetup'     => 'fab fa-meetup',
	'patreon'    => 'fab fa-patreon',
	'pinterest'  => 'fab fa-pinterest-p',
	'pocket'     => 'fab fa-get-pocket',
	'reddit'     => 'fab fa-reddit-alien',
	'rss'        => 'fas fa-rss',
	'skype'      => 'fab fa-skype',
	'snapchat'   => 'fab fa-snapchat-ghost',
	'soundcloud' => 'fab fa-soundcloud',
	'spotify'    => 'fab fa-spotify',
	'telegram'   => 'fab fa-telegram-plane',
	'tiktok'     => 'fab fa-tiktok',
	'tumblr'     => 'fab fa-tumblr',
	'twitch'     => 'fab fa-twitch',
	'twitter'    => 'fab fa-twitter',
	'vimeo'      => 'fab fa-vimeo-v',
	'vk'         => 'fab fa-vk',
	'yelp'       => 'fab fa-yelp',
	'website'    => 'fas fa-globe',
	'wordpress'  => 'fab fa-wordpress-simple',
	'youtube'    => 'fab fa-youtube',
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

// Use block-based widgets editor
define( 'NEUMORPHIC_ENABLE_WIDGETS_BLOCK_EDITOR', false );

// Use neumorphic style site logo image
define( 'NEUMORPHIC_SITE_LOGO_NM_STYLE', false );

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

// Display modified date
define( 'NEUMORPHIC_POST_MODIFIED_DATE_DISPLAY', true );

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
