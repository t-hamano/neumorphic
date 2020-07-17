<?php
/**
 * The main template file (archive page, latest posts page, static posts page)
 *
 * @package neumorphic
 */

get_header(); ?>

<main id="main" class="main" role="main">
	<div class="c-entry">

		<?php if ( is_archive() ) : ?>
			<header class="c-entry__header">
					<h1 class="c-entry__title"><?php the_archive_title(); ?></h1>
			</header>
		<?php endif; ?>

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
// Switch sidebar on/off according to customizer settings
$display_archive = get_theme_mod( 'sidebar_display_archive', NEUMORPHIC_SIDEBAR_DISPLAY_ARCHIVE );
$display_front   = get_theme_mod( 'sidebar_display_front', NEUMORPHIC_SIDEBAR_DISPLAY_FRONT );

if ( is_front_page() && $display_front ) {
	get_sidebar();
} elseif ( ( is_archive() || is_home() ) && $display_archive ) {
	get_sidebar();
}

get_footer(); ?>
