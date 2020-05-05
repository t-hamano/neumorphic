<?php
/**
 * The Template For Search Form
 *
 * @package neomorphic
 */
?>

<form role="search" method="get" class="c-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="s"><?php __( 'Search', 'neomorphic' ); ?></label>
	<div class="c-search-form__inner">
		<input class="c-search-form__input" type="search" placeholder="<?php esc_attr_e( 'Search', 'neomorphic' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
		<button class="c-search-form__btn"><i class="fas fa-search" title="<?php esc_html_e( 'Search', 'neomorphic' ); ?>"></i></button>
	</div>
</form>
