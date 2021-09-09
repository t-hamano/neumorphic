<?php
/**
 * Parts for displaying post content
 *
 * @package neumorphic
 */

?>
<article <?php post_class( 'c-entry' ); ?>>
	<div class="entry-content clearfix">
		<?php the_content(); ?>
	</div>
	<?php
	edit_post_link(
		__( 'Edit This Post', 'neumorphic' ),
		'<div class="c-entry__edit">',
		'</div>',
		'',
		'c-entry__edit-link'
	);
	?>
</article>
