<?php
/**
 * The Template For Search Form
 *
 * @package neumorphic
 */
?>

<form role="search" method="get" class="c-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="s"><?php __( 'Search', 'neumorphic' ); ?></label>
	<div class="c-search-form__inner">
		<input class="c-search-form__input" type="search" placeholder="<?php echo esc_attr_x( 'Search', 'neumorphic' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
		<button class="c-search-form__btn"><i class="fas fa-search" title="<?php echo esc_attr_x( 'Search', 'neumorphic' ); ?>"></i></button>
	</div>
</form>
