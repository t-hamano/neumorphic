<?php
/**
 * The template for displaying all single posts
 *
 * @package neumorphic
 */

get_header(); ?>

<main class="main" role="main">

	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'parts/content', 'post' );
	}
	?>

</main>

<?php
// Switch sidebar on/off according to customizer settings
if ( is_page_template( 'template/sidebar-left' ) || is_page_template( 'template/sidebar-right' ) || get_theme_mod( 'sidebar_display_post', NEOMORPHIC_SIDEBAR_DISPLAY_POST ) ) {
	get_sidebar();
}

get_footer(); ?>
