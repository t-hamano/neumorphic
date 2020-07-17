<?php
/**
 * The template for displaying all pages (includes static front page)
 *
 * @package neumorphic
 */

get_header(); ?>

<main id="main" class="main" role="main">

	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'parts/content-page' );
	}
	?>

</main>

<?php
// Switch sidebar on/off according to customizer settings
$display_front = get_theme_mod( 'sidebar_display_front', NEUMORPHIC_SIDEBAR_DISPLAY_FRONT );
$display_page  = get_theme_mod( 'sidebar_display_page', NEUMORPHIC_SIDEBAR_DISPLAY_PAGE );

if (
	( is_front_page() && $display_front ) ||
	( ! is_front_page() && $display_page )
) {
	get_sidebar();
}

get_footer(); ?>
