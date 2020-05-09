<?php
/**
 * The template for displaying archive pages
 *
 * @package neomorphic
 */

get_header(); ?>

<main class="main" role="main">
	<div class="c-entry">
		<header class="c-entry__header">
			<h1 class="c-entry__title"><?php the_archive_title(); ?></h1>
		</header>

		<div class="c-entries">
			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'parts/content-archive' );
			}
			?>
		</div>

		<?php get_template_part( 'parts/pagination' ); ?>

	</div>
</main>

<?php
if ( get_theme_mod( 'sidebar_display_archive', NEOMORPHIC_SIDEBAR_DISPLAY_ARCHIVE ) ) {
	get_sidebar();
}

get_footer(); ?>
