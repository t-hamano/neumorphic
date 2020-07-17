<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package neumorphic
 */

get_header(); ?>

<main id="main" class="main" role="main">
	<header class="c-entry__header">
		<h1 class="c-entry__title"><?php esc_html_e( 'Page Not Found', 'neumorphic' ); ?></h1>
	</header>
	<div class="entry-content clearfix">
		<p><?php esc_html_e( 'It looks like nothing was found at the location.', 'neumorphic' ); ?></p>
		<p><?php esc_html_e( 'Enter a keyword below and try searching.', 'neumorphic' ); ?></p>
		<?php get_search_form(); ?>
	</div>
</main>

<?php get_footer(); ?>
