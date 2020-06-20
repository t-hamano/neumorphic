<?php
/**
 * Parts for archive pagination
 *
 * @package neumorphic
 */
?>

<?php
global $wp_query;

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$big   = 999999999;

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
		<?php echo $pagination; ?>
	</div>
<?php endif; ?>
