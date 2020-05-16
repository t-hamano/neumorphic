<?php
/**
 * The main template file
 *
 * @package neumorphic
 */

get_header(); ?>

<main class="main" role="main">

	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'parts/content', 'archive' );
		}
	} else {
		get_template_part( 'parts/content', 'none' );
	}
	?>

</main>

<?php
// Switch sidebar on/off according to customizer settings
if ( 'none' !== get_theme_mod( 'page_sidebar' ) ) {
	get_sidebar();
}

if ( is_front_page() ) {
	if ( is_page_template( 'template/sidebar-left' ) || is_page_template( 'template/sidebar-right' ) || get_theme_mod( 'sidebar_display_front', NEOMORPHIC_SIDEBAR_DISPLAY_FRONT ) ) {
		get_sidebar();
	}
} elseif ( is_home() ) {
	if ( is_page_template( 'template/sidebar-left' ) || is_page_template( 'template/sidebar-right' ) || get_theme_mod( 'sidebar_display_blog', NEOMORPHIC_SIDEBAR_DISPLAY_BLOG ) ) {
		get_sidebar();
	}
}

get_footer(); ?>
