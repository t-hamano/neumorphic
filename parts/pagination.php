<?php
/**
 * Parts for archive pagination
 *
 * @package neumorphic
 */
?>

<?php
global $wp_query;

$pagination = get_the_posts_pagination(
	array(
		'mid_size'           => 1,
		'prev_text'          => '<i class="fa fa-angle-left" title="' . __( 'Previous page', 'neumorphic' ) . '"></i>',
		'next_text'          => '<i class="fa fa-angle-right" title="' . __( 'Next page', 'neumorphic' ) . '"></i>',
		'before_page_number' => '<span class="screen-reader-text">' . __( 'Page Number', 'neumorphic' ) . '</span>',
	)
);
?>

<?php if ( $pagination ) : ?>
	<div class="c-pagination">
		<?php echo wp_kses_post( $pagination ); ?>
	</div>
<?php endif; ?>
