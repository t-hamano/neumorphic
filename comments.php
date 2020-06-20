<?php
/**
 * The template for displaying comments
 *
 * @package neumorphic
 */

if ( post_password_required() ) {
	return;
}
?>

<div class="c-comment">

	<?php if ( have_comments() ) : ?>

		<h2 class="c-comment__title">
			<?php
				$comment_count = get_comments_number();
				printf(
					esc_html(
						/* translators: 1: amount of comments */
						_nx(
							'%1$s comment',
							'%1$s comments',
							$comment_count,
							'comments title',
							'neumorphic'
						)
					),
					number_format_i18n( $comment_count )
				);
			?>
		</h2>

		<?php if ( get_the_comments_navigation() ) : ?>
			<div class="c-comment__nav">
				<?php the_comments_navigation(); ?>
			</div>
		<?php endif; ?>

		<ol class="c-comment__list">
			<?php
				wp_list_comments(
					array(
						'style'      => 'ol',
						'short_ping' => true,
					)
				);
			?>
		</ol>

		<?php if ( get_the_comments_navigation() ) : ?>
			<div class="c-comment__nav">
				<?php the_comments_navigation(); ?>
			</div>
		<?php endif; ?>

		<?php if ( ! comments_open() ) : ?>
			<p class="c-comment__no-comment"><?php esc_html_e( 'Comments are closed.', 'neumorphic' ); ?></p>
			<?php
		endif;

	endif;
	?>

	<div class="c-comment__form">
		<?php comment_form(); ?>
	</div>

</div>
