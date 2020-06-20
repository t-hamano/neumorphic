<?php
/**
 * Parts for displaying archive post
 *
 * @package neumorphic
 */

$post_class = array( 'c-entries__item' );

if ( is_sticky() ) {
	$post_class[] = 'sticky';
}
?>

<article <?php post_class( $post_class ); ?>>
	<a href="<?php the_permalink(); ?>" class="clearfix">

		<?php
		if ( has_post_thumbnail() ) {
			// Show thumbnail image.
			echo '<figure class="c-entries__thumbnail">' . get_the_post_thumbnail() . '</figure>';
		} elseif ( get_theme_mod( 'archive_default_image', '' ) ) {
			// Show thumbnail image set in the customizer.
			$image = get_theme_mod( 'archive_default_image' );
			echo '<figure class="c-entries__thumbnail"><img src="' . esc_url( $image ) . '" alt="' . esc_attr( get_the_title() ) . '"></figure>';
		} else {
			// Show default thumbnail image.
			echo '<div class="c-entries__thumbnail c-entries__thumbnail--noimage"><i class="fas fa-image" aria-hidden="true"></i></div>';
		}
		?>

		<div class="c-entries__body">
			<header class="c-entries__header">
				<h2 class="c-entries__title"><?php the_title_attribute(); ?></h2>
				<div class="c-meta">
					<ul class="c-meta__list">
						<li class="c-meta__item c-meta__item--published">
							<time datetime="<?php the_time( 'c' ); ?>">
								<i class="far fa-clock" title="<?php esc_attr_e( 'Post date', 'neumorphic' ); ?>"></i>
								<?php the_time( get_option( 'date_format' ) ); ?>
							</time>
						</li>

						<?php
						// Store category name from the category objects.
						$categories     = get_the_category();
						$category_names = array();
						if ( $categories ) {
							foreach ( $categories as $category ) {
								$category_names[] = $category->cat_name;
							}
						}

						if ( $category_names ) :
							?>
							<li class="c-meta__item c-meta__item--categories">
								<?php echo esc_html( implode( ' / ', $category_names ) ); ?>
							</li>
						<?php endif; ?>

					</ul>
				</div>
			</header>

			<div class="c-entries__excerpt">
				<?php echo esc_html( get_the_excerpt() ); ?>
			</div>
		</div>
	</a>
</article>
