<?php
/**
 * Parts for displaying page content
 *
 * @package neomorphic
 */

?>

<article <?php post_class( 'c-entry' ); ?>>
	<header class="c-entry__header">
		<h1 class="c-entry__title"><?php the_title_attribute(); ?></h1>
	</header>

	<div class="entry-content">

		<?php
		the_content();

		wp_link_pages(
			array(
				'before'         => '<div class="c-pagination">',
				'after'          => '</div>',
				'next_or_number' => 'number',
			)
		);
		?>

	</div>

	<?php
	edit_post_link(
		__( 'Edit This Post', 'neomorphic' ),
		'<div class="c-entry__edit">',
		'</div>',
		'',
		'c-entry__edit-link',
	);

	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	?>

</article>
