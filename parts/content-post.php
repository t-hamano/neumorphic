<?php
/**
 * Parts for displaying post content
 *
 * @package neumorphic
 */

?>

<article <?php post_class( 'c-entry' ); ?>>
	<header class="c-entry__header">
		<h1 class="c-entry__title"><?php the_title_attribute(); ?></h1>
		<div class="c-meta">
			<ul class="c-meta__list">
				<li class="c-meta__item c-meta__item--published">
					<time datetime="<?php the_time( 'c' ); ?>">
						<i class="far fa-clock" title="<?php echo esc_attr_e( 'Post date', 'neumorphic' ); ?>"></i>
						<?php the_time( get_option( 'date_format' ) ); ?>
					</time>
				</li>
				<li class="c-meta__item c-meta__item--modified">
					<i class="fas fa-history" title="<?php echo esc_attr_e( 'modified date', 'neumorphic' ); ?>"></i>
					<?php the_modified_time( get_option( 'date_format' ) ); ?>
				</li>

				<?php if ( has_category() ) : ?>
					<li class="c-meta__item c-meta__item--categories"><?php the_category( ' / ' ); ?></li>
				<?php endif; ?>

			</ul>
		</div>
	</header>

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
	?>

	<?php if ( has_tag() ) : ?>
		<div class="c-tag">
			<?php the_tags( '' ); ?>
		</div>
	<?php endif; ?>

	<?php if ( get_the_post_navigation() ) : ?>
		<div class="c-entry__post-nav">
			<?php the_post_navigation(); ?>
		</div>
	<?php endif; ?>

	<?php
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	?>

</article>
