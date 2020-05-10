<?php
/**
 * Parts for archive pagination
 *
 * @package neomorphic
 */
?>

<?php
global $wp_query;

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$big   = 999999999;

$pages = paginate_links(
	array(
		'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format'             => '?paged=%#%',
		'current'            => $paged,
		'total'              => $wp_query->max_num_pages,
		'type'               => 'array',
		'mid_size'           => 1,
		'prev_text'          => '<i class="fa fa-angle-left" title="' . __( 'Previous page', 'neomorphic' ) . '"></i>',
		'next_text'          => '<i class="fa fa-angle-right" title="' . __( 'Next page', 'neomorphic' ) . '"></i>',
		'before_page_number' => '<span class="screen-reader-text">' . __( 'Page Number', 'neomorphic' ) . '</span>',
	)
);
?>

<?php if ( is_array( $pages ) ) : ?>
	<div class="c-pagination">
		<?php echo implode( '', $pages ); ?>
	</div>
<?php endif; ?>
