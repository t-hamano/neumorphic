<?php
/**
 * Neumorphic theme initialization
 *
 * @package neumorphic
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function neumorphic_setup() {
	// Make theme available for translation.
	load_theme_textdomain( 'neumorphic', get_template_directory() . '/languages' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Switch default core markup to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'navigation-widgets',
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Set content-width.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 580;
	}

	// Register navigation menus uses wp_nav_menu in one location.
	register_nav_menus(
		array(
			'primary' => __( 'Desktop Menu', 'neumorphic' ),
			'mobile'  => __( 'Mobile Menu', 'neumorphic' ),
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
		)
	);

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Custom line heights.
	add_theme_support( 'custom-line-height' );

	// Custom Units.
	add_theme_support( 'custom-units' );

	// Get customizer variables.
	$color_bg                = esc_html( get_theme_mod( 'color_bg', NEUMORPHIC_COLOR_SKIN['default']['bg'] ) );
	$color_text_main         = esc_html( get_theme_mod( 'color_text_main', NEUMORPHIC_COLOR_SKIN['default']['text_main'] ) );
	$color_accent            = esc_html( get_theme_mod( 'color_accent', NEUMORPHIC_COLOR_SKIN['default']['accent'] ) );
	$color_text_link         = esc_html( get_theme_mod( 'color_text_link', NEUMORPHIC_COLOR_SKIN['default']['text_link'] ) );
	$color_text_border_color = esc_html( get_theme_mod( 'color_text_border_color', NEUMORPHIC_COLOR_SKIN['default']['text_border_color'] ) );

	// Generate new colors based on the neumorphic design.
	$color_dark  = neumorphic_generate_new_color( $color_bg, -0.15 );
	$color_light = neumorphic_generate_new_color( $color_bg, 0.1 );

	// Change block editor color palettes.
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'Background color', 'neumorphic' ),
				'slug'  => 'bg',
				'color' => $color_bg,
			),
			array(
				'name'  => __( 'Dark color', 'neumorphic' ),
				'slug'  => 'dark',
				'color' => $color_dark,
			),
			array(
				'name'  => __( 'Light color', 'neumorphic' ),
				'slug'  => 'light',
				'color' => $color_light,
			),
			array(
				'name'  => __( 'Main text color', 'neumorphic' ),
				'slug'  => 'main-text',
				'color' => $color_text_main,
			),
			array(
				'name'  => __( 'Accent color', 'neumorphic' ),
				'slug'  => 'accent',
				'color' => $color_accent,
			),
			array(
				'name'  => __( 'Link text color', 'neumorphic' ),
				'slug'  => 'link-text',
				'color' => $color_text_link,
			),
			array(
				'name'  => __( 'White', 'neumorphic' ),
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
				'name'     => __( 'Dark and light color', 'neumorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_dark . ', ' . $color_light . ')',
				'slug'     => 'dark-light',
			),
			array(
				'name'     => __( 'Dark and main text color', 'neumorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_dark . ', ' . $color_text_main . ')',
				'slug'     => 'dark-text-main',
			),
			array(
				'name'     => __( 'Dark and accent color', 'neumorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_dark . ', ' . $color_accent . ')',
				'slug'     => 'dark-accent',
			),
			array(
				'name'     => __( 'Dark and link text color', 'neumorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_dark . ', ' . $color_text_link . ')',
				'slug'     => 'dark-link-text',
			),
			array(
				'name'     => __( 'Light and main text color', 'neumorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_light . ', ' . $color_text_main . ')',
				'slug'     => 'light-main-text',
			),
			array(
				'name'     => __( 'Light and accent color', 'neumorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_light . ', ' . $color_accent . ')',
				'slug'     => 'light-accent',
			),
			array(
				'name'     => __( 'Light and link text color', 'neumorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_light . ', ' . $color_text_link . ')',
				'slug'     => 'light-link-text',
			),
			array(
				'name'     => __( 'Main text and accent color', 'neumorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_text_main . ', ' . $color_accent . ')',
				'slug'     => 'main-text-accent',
			),
			array(
				'name'     => __( 'Main text and link text color', 'neumorphic' ),
				'gradient' => 'linear-gradient(135deg,' . $color_text_main . ', ' . $color_text_link . ')',
				'slug'     => 'main-text-link-text',
			),
			array(
				'name'     => __( 'Accent and link text color', 'neumorphic' ),
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
				'name' => __( 'Small', 'neumorphic' ),
				'size' => 13,
				'slug' => 'small',
			),
			array(
				'name' => __( 'Medium', 'neumorphic' ),
				'size' => 19,
				'slug' => 'medium',
			),
			array(
				'name' => __( 'Large', 'neumorphic' ),
				'size' => 26,
				'slug' => 'large',
			),
			array(
				'name' => __( 'Huge', 'neumorphic' ),
				'size' => 32,
				'slug' => 'huge',
			),
		)
	);

	// Register and enqueue block editor styles.
	add_theme_support( 'editor-styles' );
	add_editor_style( '/assets/css/editor-style-block.min.css' );

	// Disable block-based widgets editor
	if ( ! get_theme_mod( 'enable_widgets_block_editor', NEUMORPHIC_ENABLE_WIDGETS_BLOCK_EDITOR ) ) {
		remove_theme_support( 'widgets-block-editor' );
	}
}

add_action( 'after_setup_theme', 'neumorphic_setup' );

/**
 * Register and enqueue front-end styles & scripts.
 */
function neumorphic_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Font Awesome
	wp_enqueue_style( 'neumorphic-style-fontawesome', get_theme_file_uri( '/assets/packages/font-awesome/css/all.min.css' ), array(), $theme_version );

	// Main style
	wp_enqueue_style( 'neumorphic-style-front-main', get_theme_file_uri( '/assets/css/style.min.css' ), array(), $theme_version );

	// Customizer CSS
	wp_add_inline_style( 'neumorphic-style-front-main', neumorphic_generate_css() );

	// Main Script
	wp_enqueue_script( 'neumorphic-script-main', get_theme_file_uri( '/assets/js/main.js' ), array( 'jquery' ), $theme_version, false );

	// Comment reply Script
	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// CSS custom properties support for legacy and modern browsers
	wp_enqueue_script( 'neumorphic-script-ponyfill', get_theme_file_uri( '/assets/packages/css-vars-ponyfill/css-vars-ponyfill.min.js' ), array(), $theme_version );
}

add_action( 'wp_enqueue_scripts', 'neumorphic_scripts' );

/**
 * Register and enqueue block editor styles & scripts.
 */
function neumorphic_block_editor_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Font Awesome
	wp_enqueue_style( 'neumorphic-style-fontawesome', get_theme_file_uri( '/assets/packages/font-awesome/css/all.min.css' ), array(), $theme_version );

	// Main script.
	wp_enqueue_script( 'neumorphic-script-block-editor', get_theme_file_uri( '/assets/js/block-style.js' ), array( 'wp-i18n', 'wp-element', 'wp-blocks', 'wp-dom' ), $theme_version, true );

	// CSS custom properties support for legacy and modern browsers
	wp_enqueue_script( 'neumorphic-script-ponyfill', get_theme_file_uri( '/assets/packages/css-vars-ponyfill/css-vars-ponyfill.min.js' ), array(), $theme_version );

	// Customizer CSS
	wp_register_style( 'neumorphic-style-customizer', false );
	wp_enqueue_style( 'neumorphic-style-customizer' );
	wp_add_inline_style( 'neumorphic-style-customizer', neumorphic_generate_css() );
}

add_action( 'enqueue_block_editor_assets', 'neumorphic_block_editor_assets' );

/**
 * Fix skip link focus in IE11.
 */
function neumorphic_skip_link_focus_fix() {
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'neumorphic_skip_link_focus_fix' );

/**
 * Register and enqueue classic editor styles.
 */
function neumorphic_classic_editor_style() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Main style
	add_editor_style( '/assets/css/editor-style-classic.min.css' );

}

add_action( 'admin_init', 'neumorphic_classic_editor_style' );

/**
 * Add inline style to classic editor.
 */
function neumorphic_classic_editor_inline_style( $settings ) {
	$settings['content_style'] = neumorphic_generate_css();
	return $settings;
}

add_filter( 'tiny_mce_before_init', 'neumorphic_classic_editor_inline_style' );

/**
 * Enqueue WordPress media player styles.
 */
function neumorphic_footer_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'wp-mediaelement' );
	wp_enqueue_style( 'neumorphic-style-mediaelement', get_theme_file_uri( '/assets/css/mediaelement.min.css' ), array( 'wp-mediaelement' ), $theme_version );
	wp_enqueue_script( 'wp-mediaelement' );
}

add_action( 'wp_footer', 'neumorphic_footer_scripts' );

/**
 * Include a skip to content link at the top of the page so that users can bypass the menu.
 */
function neumorphic_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#main">' . __( 'Skip to the content', 'neumorphic' ) . '</a>';
}

add_action( 'wp_body_open', 'neumorphic_skip_link', 5 );

/**
 * Register Widget Area.
 */
function neumorphic_widgets_init() {
	// Sidebar
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'neumorphic' ),
			'description'   => __( 'The display status and display position can be set from the customize menu.', 'neumorphic' ),
			'id'            => 'sidebar_main',
			'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget__title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'neumorphic_widgets_init' );

/**
 * Filters the classname used in the block widget's container HTML.
 *
 * @param string $classname  The classname to be used in the block widget's container HTML,
 *
 * @return string The classname to use in the block widget's container HTML.
 */
function neumorphic_widget_block_dynamic_classname( $classname ) {
	return $classname . ' entry-content';
}
add_filter( 'widget_block_dynamic_classname', 'neumorphic_widget_block_dynamic_classname' );

/**
 * Filters the archive title and styles the word before the first colon.
 *
 * @param string $title Current archive title.
 *
 * @return string $title Current archive title.
 */
function neumorphic_get_the_archive_title( $title ) {
	if ( is_category() ) {
		$title  = '<i class="fas fa-folder" aria-hidden="true"></i>';
		$title .= single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title  = '<i class="fas fa-tag" aria-hidden="true"></i>';
		$title .= single_tag_title( '', false );
	} elseif ( is_year() ) {
		$title = get_the_date( _x( 'Y', 'yearly archives date format', 'neumorphic' ) );
	} elseif ( is_month() ) {
		$title = get_the_date( _x( 'F Y', 'monthly archives date format', 'neumorphic' ) );
	} elseif ( is_day() ) {
		$title = get_the_date( _x( 'F j, Y', 'daily archives date format', 'neumorphic' ) );
	} elseif ( is_tax() ) {
		$title  = '<i class="fas fa-folder" aria-hidden="true"></i>';
		$title .= single_term_title( '', false );
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} else {
		$title = __( 'Archives', 'neumorphic' );
	}

	return $title;
}

add_filter( 'get_the_archive_title', 'neumorphic_get_the_archive_title' );

/**
 * Change the drawer/global navigation HTML structure
 */
require( get_theme_file_path( '/inc/classes/class-neumorphic-drawer-walker.php' ) );
require( get_theme_file_path( '/inc/classes/class-neumorphic-gnav-walker.php' ) );

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
function neumorphic_nav_class( $classes, $item, $args, $depth ) {
	if ( 'primary' === $args->theme_location ) {
		if ( 0 === $depth ) {
			$classes[] = 'c-gnav__item';
		} else {
			$classes[] = 'c-gnav__subitem';
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

add_filter( 'nav_menu_css_class', 'neumorphic_nav_class', 10, 4 );
