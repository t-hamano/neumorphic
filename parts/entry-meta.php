<?php
/**
 * Parts for displaying entry meta info
 *
 * @package neomorphic
 */
?>

<div class="c-meta">
	<ul class="c-meta__list">
		<li class="c-meta__item">
			<time datetime="<?php the_time( 'c' ); ?>">
				<i class="far fa-clock" title="<?php esc_html_e( 'Post date', 'neomorphic' ); ?>"></i>
				<?php the_time( get_option( 'date_format' ) ); ?>
			</time>
		</li>

		<?php if ( is_single() ) : ?>

			<li class="c-meta__item">
				<i class="fas fa-history" title="<?php esc_html_e( 'modified date', 'neomorphic' ); ?>"></i>
				<?php the_modified_time( get_option( 'date_format' ) ); ?>
			</li>

		<?php endif; ?>

	</ul>
</div>
