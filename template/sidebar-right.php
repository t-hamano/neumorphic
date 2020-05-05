<?php
/**
 * Template Name: Right Sidebar
 * Template Post Type: post, page
 *
 * @package neomorphic
 */
__( 'Right Sidebar', 'neomorphic' );

get_header(); ?>

<main class="main" role="main">

	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'parts/content', 'page' );
		}
	}
	?>

</main>

<?php
get_sidebar();

get_footer(); ?>
