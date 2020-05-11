<?php
/**
 * The template for displaying all pages
 *
 * @package neomorphic
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
if ( is_page_template( 'template/sidebar-left' ) || is_page_template( 'template/sidebar-right' ) || get_theme_mod( 'sidebar_display_page', NEOMORPHIC_SIDEBAR_DISPLAY_PAGE ) ) {
	get_sidebar();
}

get_footer(); ?>
