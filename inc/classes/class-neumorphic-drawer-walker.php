<?php
/**
 * Change the drawer navigation HTML structure
 *
 * @package neumorphic
 */

class Neumorphic_Drawer_Walker extends Walker_Nav_Menu {
	// Starts the list before the elements are added.
	public function start_lvl( &$output, $depth = 0, $args = array() ) {

		if ( 0 === $depth ) {
			$output .= '<div class="drawer__toggle" aria-expanded="false"><i class="fas fa-caret-down" title="' . __( 'Open / Close mobile menu', 'neumorphic' ) . '"></i></span></div><ul class="drawer__submenu" aria-hidden="true">';
		} else {
			$output .= '<ul class="drawer__submenu">';
		}
	}
}
