<?php
/**
 * The template for displaying all pages
 *
 * @package neumorphic
 */

get_header(); ?>

<main class="main" role="main">

	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'parts/content', 'page' );
	}
	?>

</main>

<?php
// Switch sidebar on/off according to customizer settings
$display_front = get_theme_mod( 'sidebar_display_front', NEOMORPHIC_SIDEBAR_DISPLAY_FRONT );
$display_blog  = get_theme_mod( 'sidebar_display_blog', NEOMORPHIC_SIDEBAR_DISPLAY_BLOG );
$display_page  = get_theme_mod( 'sidebar_display_page', NEOMORPHIC_SIDEBAR_DISPLAY_PAGE );

if (
	( is_front_page() && $display_front ) ||
	( is_home() && $display_blog ) ||
	( is_page() && ! is_front_page() && $display_page )
) {
	get_sidebar();
}

get_footer(); ?>
