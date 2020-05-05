<?php
/**
 * Parts for displaying archive post
 *
 * @package neomorphic
 */

?>

<article <?php post_class( 'c-entries__item' ); ?>>
	<a href="<?php the_permalink(); ?>" class="clearfix">
		<?php
		if ( has_post_thumbnail() ) {
			// Show thumbnail image.
			echo '<figure class="c-entries__thumbnail">' . get_the_post_thumbnail() . '</figure>';
		} elseif ( get_theme_mod( 'archive_default_image', '' ) ) {
			// Show thumbnail image set in the customizer.
			$image = get_theme_mod( 'archive_default_image' );
			echo '<figure class="c-entries__thumbnail"><img src="' . esc_url( $image ) . '" alt="' . get_the_title() . '"></figure>';
		} else {
			// Show default thumbnail image.
			echo '<div class="c-entries__thumbnail c-entries__thumbnail--noimage"><i class="fas fa-image" aria-hidden="true"></i></div>';
		}
		?>

		<div class="c-entries__body">
			<header class="c-entries__header">
				<h2 class="c-entries__title"><?php the_title(); ?></h2>
				<?php get_template_part( 'parts/entry-meta' ); ?>
			</header>

			<div class="c-entries__excerpt">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</a>
</article>
