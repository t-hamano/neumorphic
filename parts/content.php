<?php
/**
 * Parts for displaying post content
 *
 * @package neomorphic
 */

?>

<article <?php post_class( 'c-entry' ); ?>>
	<header class="c-entry__header">
		<h1 class="c-entry__title"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/entry-meta' ); ?>
	</header>

	<div class="entry-content">

		<?php
		while ( have_posts() ) {
			the_post();
			the_content();

			edit_post_link(
				__( 'Edit This Post', 'neomorphic' ),
				'<div class="c-entry__edit">',
				'</div>',
				'',
				'c-entry__edit-link',
			);

			the_post_navigation(
				array(
					'prev_text' => '&larr; %title',
					'next_text' => '%title &rarr;',
				)
			);

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		}
		?>

	</div>
</article>
