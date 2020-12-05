<?php
/**
 * The template for displaying all single posts
 *
 * @package neumorphic
 */

get_header(); ?>

<main id="main" class="main" role="main">

	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'parts/content-post' );
	}
	?>

</main>

<?php
// Switch sidebar on/off according to customizer settings
$display_post = get_theme_mod( 'sidebar_display_post', NEUMORPHIC_SIDEBAR_DISPLAY_POST );

if ( $display_post ) {
	get_sidebar();
}

get_footer(); ?>
