<?php
/**
 * The template for displaying search results pages
 *
 * @package neumorphic
 */

get_header(); ?>

<main id="main" class="main" role="main">
	<div class="c-entry">
		<header class="c-entry__header">
			<h1 class="c-entry__title">
				<?php
				printf(
					/* translators: 1: search keyword */
					esc_html__( 'Search results for : %s', 'neumorphic' ),
					get_search_query()
				);
				?>
			</h1>
		</header>

		<div class="c-entry__body">

			<?php if ( have_posts() ) : ?>

				<div class="c-entries">
					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'parts/content-archive' );
					}
					?>
				</div>

			<?php else : ?>

				<p><?php esc_html_e( 'It looks like nothing was found at the location.', 'neumorphic' ); ?></p>
				<p><?php esc_html_e( 'Enter a keyword below and try searching.', 'neumorphic' ); ?></p>
				<?php
					get_search_form();
			endif;
			?>

		</div>

		<?php get_template_part( 'parts/pagination' ); ?>

	</div>
</main>

<?php
get_footer();
