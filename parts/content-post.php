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
		<div class="c-meta">
			<ul class="c-meta__list">
				<li class="c-meta__item c-meta__item--published">
					<time datetime="<?php the_time( 'c' ); ?>">
						<i class="far fa-clock" title="<?php esc_html_e( 'Post date', 'neomorphic' ); ?>"></i>
						<?php the_time( get_option( 'date_format' ) ); ?>
					</time>
				</li>
				<li class="c-meta__item c-meta__item--modified">
					<i class="fas fa-history" title="<?php esc_html_e( 'modified date', 'neomorphic' ); ?>"></i>
					<?php the_modified_time( get_option( 'date_format' ) ); ?>
				</li>

				<?php if ( has_category() ) : ?>
					<li class="c-meta__item c-meta__item--categories"><?php the_category( ' / ' ); ?></li>
				<?php endif; ?>
			</ul>
		</div>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<?php
	edit_post_link(
		__( 'Edit This Post', 'neomorphic' ),
		'<div class="c-entry__edit">',
		'</div>',
		'',
		'c-entry__edit-link',
	);
	?>

	<?php if ( has_tag() ) : ?>

		<div class="c-tag">
			<?php the_tags( '' ); ?>
		</div>
	<?php endif; ?>

	<?php
	the_post_navigation();

	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	?>

</article>
