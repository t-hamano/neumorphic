<?php
/**
 * Neumorphic functions and definitions
 *
 * @package neumorphic
 */

// Make theme available for translation.
load_theme_textdomain( 'neumorphic', get_template_directory() . '/languages' );

// Theme Constants
require_once( 'inc/constants.php' );

// Theme Initialization
require_once( 'inc/init.php' );

// Theme Customizer Initialization
require_once( 'inc/customizer/init.php' );
