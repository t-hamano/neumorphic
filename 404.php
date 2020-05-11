<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package neomorphic
 */

get_header(); ?>

<main class="main" role="main">
	<header class="c-entry__header">
		<h1 class="c-entry__title"><?php esc_html_e( 'Page Not Found', 'neomorphic' ); ?></h1>
	</header>
	<div class="entry-content clearfix">
		<p><?php esc_html_e( 'It looks like nothing was found at the location.', 'neomorphic' ); ?></p>
		<p><?php esc_html_e( 'Enter a keyword below and try searching.', 'neomorphic' ); ?></p>
		<?php get_search_form(); ?>
	</div>
</main>

<?php get_footer(); ?>
