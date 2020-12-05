<?php
/**
 * Template Name: No Sidebar
 * Template Post Type: post, page
 *
 * @package neumorphic
 */
__( 'No Sidebar', 'neumorphic' );

get_header(); ?>

<main id="main" class="main" role="main">

	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();

			if ( is_single() ) {
				get_template_part( 'parts/content-post' );
			} else {
				get_template_part( 'parts/content-page' );
			}
		}
	}
	?>

</main>

<?php
get_footer(); ?>
