<?php
/**
 * Parts for displaying page content
 *
 * @package neumorphic
 */

?>

<article <?php post_class( 'c-entry' ); ?>>

	<?php if ( ! is_front_page() ) : ?>
		<header class="c-entry__header">
			<h1 class="c-entry__title"><?php the_title_attribute(); ?></h1>
		</header>
	<?php endif; ?>

	<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<figure class="c-entry__thumbnail">
			<?php the_post_thumbnail(); ?>
		</figure>
	<?php endif; ?>

	<div class="entry-content clearfix">
		<?php the_content(); ?>
	</div>

	<?php
	wp_link_pages(
		array(
			'before'         => '<div class="c-pagination">',
			'after'          => '</div>',
			'next_or_number' => 'number',
		)
	);

	edit_post_link(
		__( 'Edit This Post', 'neumorphic' ),
		'<div class="c-entry__edit">',
		'</div>',
		'',
		'c-entry__edit-link'
	);

	if ( ! is_front_page() && ( comments_open() || get_comments_number() ) ) {
		comments_template();
	}
	?>

</article>
