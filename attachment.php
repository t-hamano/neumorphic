<?php
/**
 * The template for displaying attachment files
 *
 * @package neumorphic
 */

get_header(); ?>

<main id="main" class="main" role="main">
	<div class="c-entry">
		<div class="c-attachment">
			<figure class="c-attachment__image">
				<?php
				$image_size = apply_filters( 'wporg_attachment_size', 'large' );
				echo wp_get_attachment_image( get_the_ID(), $image_size );

				if ( has_excerpt() ) :
					?>
					<figcaption>
						<?php the_excerpt(); ?>
					</figcaption>
				<?php endif; ?>
			</figure>
		</div>
	</div>
</main>

<?php get_footer(); ?>
