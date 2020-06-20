<?php
/**
 * Change the global navigation HTML structure.
 *
 * @package neumorphic
 */

class Neumorphic_Gnav_Walker extends Walker_Nav_Menu {
	// Starts the list before the elements are added.
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		if ( 0 === $depth ) {
			$output .= '<ul class="c-gnav__submenu" aria-hidden="true">';
		} else {
			$output .= '<ul class="c-gnav__submenu">';
		}
	}
}
