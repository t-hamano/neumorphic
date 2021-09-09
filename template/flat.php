<?php
/**
 * Template Name: Flat
 * Template Post Type: post, page
 *
 * @package neumorphic
 */
__( 'Flat', 'neumorphic' );

get_header(); ?>

<main id="main" class="main" role="main">

	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'parts/content-flat' );
		}
	}
	?>

</main>

<?php
get_footer();
