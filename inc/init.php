<?php
/**
 * Neomorphic theme initialization
 *
 * @package neomorphic
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function neomorphic_setup() {
	// Make theme available for translation.
	load_theme_textdomain( 'neomorphic', get_template_directory() . '/languages' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Switch default core markup to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register navigation menus uses wp_nav_menu in one location.
	register_nav_menus(
		array(
			'primary' => __( 'Desktop Menu', 'neomorphic' ),
			'mobile'  => __( 'Mobile Menu', 'neomorphic' ),
		)
	);

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for core custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 200,
			'flex-width'  => true,
			'flex-height' => true,
		),
	);

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Get customizer variables.
	$color_bg                = esc_html( get_theme_mod( 'color_bg', NEOMORPHIC_COLOR_SKIN['default']['bg'] ) );
	$color_text_main         = esc_html( get_theme_mod( 'color_text_main', NEOMORPHIC_COLOR_SKIN['default']['text_main'] ) );
	$color_accent            = esc_html( get_theme_mod( 'color_accent', NEOMORPHIC_COLOR_SKIN['default']['accent'] ) );
	$color_text_link         = esc_html( get_theme_mod( 'color_text_link', NEOMORPHIC_COLOR_SKIN['default']['text_link'] ) );
	$color_text_border_color = esc_html( get_theme_mod( 'color_text_border_color', NEOMORPHIC_COLOR_SKIN['default']['text_border_color'] ) );

	// Generate new colors based on the neomorphic design.
	$color_dark  = neomorphic_generate_new_color( $color_bg, -0.15 );
	$color_light = neomorphic_generate_new_color( $color_bg, 0.1 );

	// Change block editor color palettes.
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'Background color', 'neomorphic' ),
				'slug'  => 'bg',
				'color' => $color_bg,
			),
			array(
				'name'  => __( 'Dark color', 'neomorphic' ),
				'slug'  => 'dark',
				'color' => $color_dark,
			),
			array(
				'name'  => __( 'Light color', 'neomorphic' ),
				'slug'  => 'light',
				'color' => $color_light,
			),
			array(
				'name'  => __( 'Main text color', 'neomorphic' ),
				'slug'  => 'main-text',
				'color' => $color_text_main,
			),
			array(
				'name'  => __( 'Accent color', 'neomorphic' ),
				'slug'  => 'accent',
				'color' => $color_accent,
			),
			array(
				'name'  => __( 'Link text color', 'neomorphic' ),
				'slug'  => 'link-text',
				'color' => $color_text_link,
			),
			array(
				'name'  => __( 'White', 'neomorphic' ),
				'slug'  => 'white',
				'color' => '#fff',
			),
		)
	);

	// Change block editor gradient presets.
	add_theme_support(
		'editor-gradient-presets',
		array(
			array(
				'name'     => __( 'Dark and light color', 'neomorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_dark . ', ' . $color_light . ')',
				'slug'     => 'dark-light',
			),
			array(
				'name'     => __( 'Dark and main text color', 'neomorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_dark . ', ' . $color_text_main . ')',
				'slug'     => 'dark-text-main',
			),
			array(
				'name'     => __( 'Dark and accent color', 'neomorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_dark . ', ' . $color_accent . ')',
				'slug'     => 'dark-accent',
			),
			array(
				'name'     => __( 'Dark and link text color', 'neomorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_dark . ', ' . $color_text_link . ')',
				'slug'     => 'dark-link-text',
			),
			array(
				'name'     => __( 'Light and main text color', 'neomorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_light . ', ' . $color_text_main . ')',
				'slug'     => 'light-main-text',
			),
			array(
				'name'     => __( 'Light and accent color', 'neomorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_light . ', ' . $color_accent . ')',
				'slug'     => 'light-accent',
			),
			array(
				'name'     => __( 'Light and link text color', 'neomorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_light . ', ' . $color_text_link . ')',
				'slug'     => 'light-link-text',
			),
			array(
				'name'     => __( 'Main text and accent color', 'neomorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_text_main . ', ' . $color_accent . ')',
				'slug'     => 'main-text-accent',
			),
			array(
				'name'     => __( 'Main text and link text color', 'neomorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_text_main . ', ' . $color_text_link . ')',
				'slug'     => 'main-text-link-text',
			),
			array(
				'name'     => __( 'Accent and link text color', 'neomorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_accent . ', ' . $color_text_link . ')',
				'slug'     => 'accent-link-text',
			),
		)
	);

	// Change block editor font size presets.
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name' => __( 'Small', 'neomorphic' ),
				'size' => 13,
				'slug' => 'small',
			),
			array(
				'name' => __( 'Medium', 'neomorphic' ),
				'size' => 19,
				'slug' => 'medium',
			),
			array(
				'name' => __( 'Large', 'neomorphic' ),
				'size' => 26,
				'slug' => 'large',
			),
			array(
				'name' => __( 'Huge', 'neomorphic' ),
				'size' => 32,
				'slug' => 'huge',
			),
		)
	);
}

add_action( 'after_setup_theme', 'neomorphic_setup' );

/**
 * Register and enqueue front-end styles.
 */
function neomorphic_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Font Awesome
	wp_enqueue_style( 'neomorphic-style-fontawesome', get_theme_file_uri() . '/assets/packages/font-awesome/css/all.min.css', array(), $theme_version );

	// Main style
	wp_enqueue_style( 'neomorphic-style-front-main', get_theme_file_uri() . '/assets/css/style.min.css', array(), $theme_version );

	// Customizer output inline CSS
	wp_add_inline_style( 'neomorphic-style-front-main', neomorphic_generate_css() );

	// Main Script
	wp_enqueue_script( 'neomorphic-script-main', get_theme_file_uri() . '/assets/js/main.js', array( 'jquery' ), $theme_version, false );
}

add_action( 'wp_enqueue_scripts', 'neomorphic_scripts' );

/**
 * Register and enqueue block editor styles.
 */
function neomorphic_block_editor_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Main style
	wp_enqueue_style( 'neomorphic-style-block-editor', get_theme_file_uri() . '/assets/css/editor-style-block.min.css', array(), $theme_version );

	// Customizer output inline CSS
	wp_add_inline_style( 'neomorphic-style-block-editor', neomorphic_generate_css() );

	// Main script.
	wp_enqueue_script( 'neomorphic-script-block-editor', get_theme_file_uri() . '/assets/js/editor-block.js', array( 'wp-i18n', 'wp-element', 'wp-blocks', 'wp-dom' ), $theme_version, true );

	wp_set_script_translations( 'neomorphic-script-block-editor', 'neomorphic', '/languages' );
}

add_action( 'enqueue_block_editor_assets', 'neomorphic_block_editor_styles' );


/**
 * Register and enqueue classic editor styles.
 */
function neomorphic_classic_editor_style() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Main style
	add_editor_style( '/assets/css/editor-style-classic.min.css' );

}
add_action( 'admin_init', 'neomorphic_classic_editor_style' );


/**
 * Add inline style to classic editor.
 */
function neomorphic_classic_editor_inline_style( $settings ) {
	$settings['content_style'] = neomorphic_generate_css();
	return $settings;
}

add_filter( 'tiny_mce_before_init', 'neomorphic_classic_editor_inline_style' );

/**
 * Enqueue WordPress media player styles.
 */
function neomorphic_footer_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	if ( wp_style_is( 'wp-mediaelement', 'enqueued' ) ) {
		wp_enqueue_style( 'neomorphic-style-mediaelement', get_theme_file_uri() . '/assets/css/mediaelement.min.css', array( 'wp-mediaelement' ), $theme_version );
	}
}

add_action( 'wp_footer', 'neomorphic_footer_scripts' );

/**
 * Register Widget Area.
 */
function neomorphic_widgets_init() {
	// Sidebar
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'neomorphic' ),
			'description'   => __( 'The display status and display position can be set from the customize menu.', 'neomorphic' ),
			'id'            => 'sidebar_main',
			'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget__title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'neomorphic_widgets_init' );

/**
 * Filters the archive title and styles the word before the first colon.
 *
 * @param string $title Current archive title.
 *
 * @return string $title Current archive title.
 */
function neomorphic_get_the_archive_title( $title ) {
	if ( is_category() ) {
		$title  = '<i class="fas fa-folder" aria-hidden="true"></i>';
		$title .= single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title  = '<i class="fas fa-tag" aria-hidden="true"></i>';
		$title .= single_tag_title( '', false );
	} elseif ( is_year() ) {
		$title = get_the_date( _x( 'Y', 'yearly archives date format', 'neomorphic' ) );
	} elseif ( is_month() ) {
		$title = get_the_date( _x( 'F Y', 'monthly archives date format', 'neomorphic' ) );
	} elseif ( is_day() ) {
		$title = get_the_date( _x( 'F j, Y', 'daily archives date format', 'neomorphic' ) );
	} elseif ( is_tax() ) {
		$title  = '<i class="fas fa-folder" aria-hidden="true"></i>';
		$title .= single_term_title( '', false );
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} else {
		$title = __( 'Archives', 'neomorphic' );
	}

	return $title;
}

add_filter( 'get_the_archive_title', 'neomorphic_get_the_archive_title' );

/**
 * Change the drawer/global navigation HTML structure
 */
require( get_theme_file_path() . '/inc/classes/class-drawer-walker.php' );
require( get_theme_file_path() . '/inc/classes/class-gnav-walker.php' );

/**
 * Filter the CSS classes applied to a menu item’s list item element.
 *
 * @param string $classes Current archive title.
 * @param object $item The current menu item.
 * @param object $args An object of wp_nav_menu() arguments.
 * @param int $depth Depth of menu item.
 *
 * @return array $classes CSS classes applied to a menu item’s list item element.
 */
function neomorphic_nav_class( $classes, $item, $args, $depth ) {
	if ( 'primary' === $args->theme_location ) {
		if ( 0 === $depth ) {
			$classes[] = 'gnav__item';
		} else {
			$classes[] = 'gnav__subitem';
		}
	} elseif ( 'mobile' === $args->theme_location ) {
		if ( 0 === $depth ) {
			$classes[] = 'drawer__item';
		} else {
			$classes[] = 'drawer__subitem';
		}
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'neomorphic_nav_class', 10, 4 );

/**
 * Add conditional contents classes (Sidebar display position).
 *
 * @return string $class Class name added to the div.contents tag.
 */
function neomorphic_contents_class() {
	// Get cutomizer settings.
	$display_position = get_theme_mod( 'sidebar_position', NEOMORPHIC_SIDEBAR_POSITION );
	$display_front    = get_theme_mod( 'sidebar_display_front', NEOMORPHIC_SIDEBAR_DISPLAY_FRONT );
	$display_blog     = get_theme_mod( 'sidebar_display_blog', NEOMORPHIC_SIDEBAR_DISPLAY_BLOG );
	$display_post     = get_theme_mod( 'sidebar_display_post', NEOMORPHIC_SIDEBAR_DISPLAY_POST );
	$display_page     = get_theme_mod( 'sidebar_display_page', NEOMORPHIC_SIDEBAR_DISPLAY_PAGE );
	$display_archive  = get_theme_mod( 'sidebar_display_archive', NEOMORPHIC_SIDEBAR_DISPLAY_ARCHIVE );

	// Give priority to the template display settings If a specific page template is used.
	if ( is_page_template( 'template/sidebar-left.php' ) ) {
		$class = ' contents--sidebar-left';
	} elseif ( is_page_template( 'template/sidebar-right.php' ) ) {
		$class = ' contents--sidebar-right';
	} elseif ( is_page_template( 'template/sidebar-none.php' ) ) {
		$class = '';
	} else {
		// Use customizer settings if the page template is not used.
		if (
			( is_front_page() && $display_front ) ||
			( is_home() && $display_blog ) ||
			( is_single() && $display_post ) ||
			( is_archive() && $display_archive ) ||
			( is_page() && ! is_front_page() && $display_page )
		) {
			$class = ' contents--sidebar-' . $display_position;
		} else {
			$class = '';
		}
	}

	return $class;
}

/**
 * Generate a new HEX color with changed intensity based on the param HEX color.
 *
 * @param string $hex HEX value.
 * @param double $luminance Percentage of luminance to change
 *
 * @return string $new_color HEX value.
 */
function neomorphic_generate_new_color( $hex, $luminance ) {
	// Value expression check.
	if ( ! preg_match( '/^#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/', $hex ) ) {
		return $hex;
	}

	// Trim "#".
	$hex = substr( $hex, 1 );

	// Convert 3 digits to 6 digits.
	if ( strlen( $hex ) === 3 ) {
		$hex = substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) . substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) . substr( $hex, 2, 1 ) . substr( $hex, 2, 1 );
	}

	$new_hex = '#';

	// Cut out the value of hex by two digits and change luminance.
	for ( $i = 0; $i < 3; $i++ ) {
		$color_pair  = hexdec( substr( $hex, $i * 2, 2 ) );
		$color_pair += $color_pair * $luminance;
		$color_pair  = dechex( round( min( 245, max( 10, $color_pair ) ) ) );
		$color_pair  = str_pad( $color_pair, 2, '0', STR_PAD_LEFT );
		$new_hex    .= $color_pair;
	}

	return $new_hex;
}
