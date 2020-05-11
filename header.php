<?php
/**
 * The template for displaying the header
 *
 * @package neomorphic
 */
?>

<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
?>

<header class="header" role="banner">
	<div class="container">
		<div class="header__inner">
			<div class="header__brand">
				<?php
				// Header logo
				if ( has_custom_logo() ) :
					?>
					<div class="header__brand-logo">
						<?php the_custom_logo(); ?>
					</div>
				<?php endif; ?>

				<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="header__brand-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="header__brand-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>

				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description ) :
					?>
					<p class="header__brand-description"><span><?php echo $description; ?></span></p>
				<?php endif; ?>

			</div>

			<?php
			// Header search bar
			if ( true === get_theme_mod( 'header_search_display', NEOMORPHIC_HEADER_SEARCH_DISPLAY ) ) :
				?>
				<div class="header__search">
					<?php get_search_form(); ?>
				</div>
			<?php endif; ?>

			<?php
			// SNS icon
			if ( true === get_theme_mod( 'header_sns_display', NEOMORPHIC_HEADER_SNS_DISPLAY ) ) :
				?>
				<nav class="header__sns" role="navigation">
					<div class="container">
						<?php get_template_part( 'parts/sns' ); ?>
					</div>
				</nav>
			<?php endif; ?>

			<?php
			// Global menu
			$gnav = wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class'     => 'gnav__list',
					'container'      => false,
					'echo'           => false,
					'walker'         => new Gnav_Walker(),
				)
			);
			if ( $gnav ) :
				?>
				<nav id="gnav" class="gnav" role="navigation" aria-hidden="true">
					<?php echo $gnav; ?>
				</nav>
			<?php endif; ?>
		</div>
	</div>
</header>

<?php
// Drawer menu
$drawer_menu = wp_nav_menu(
	array(
		'theme_location' => 'mobile',
		'menu_class'     => 'drawer__list',
		'container'      => false,
		'echo'           => false,
		'walker'         => new Drawer_Walker(),
	)
);
?>

<div class="fixed-nav">
	<ul class="fixed-nav__list">
		<li class="fixed-nav__item">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home" title="<?php esc_html_e( 'Home', 'neomorphic' ); ?>"></i></a>
		</li>

		<?php
		// Drawer menu open/close button
		if ( $drawer_menu ) :
			?>
			<li class="fixed-nav__item">
				<button id="mobile_hm_btn" aria-controls="drawer" aria-expanded="false" aria-label="<?php esc_html_e( 'Open / Close mobile menu', 'neomorphic' ); ?>"><i class="fas fa-bars"></i></button>
			</li>
		<?php endif; ?>

		<li class="fixed-nav__item">
			<a href="#"><i class="fas fa-arrow-up" title="<?php esc_html_e( 'Scroll to top', 'neomorphic' ); ?>"></i></a>
		</li>
	</ul>
</div>

<?php if ( $drawer_menu ) : ?>
	<nav id="drawer" class="drawer" aria-hidden="true">
		<button id="mobile_close_btn" class="drawer__close" aria-controls="drawer" aria-label="<?php esc_html_e( 'Close mobile menu', 'neomorphic' ); ?>"><i class="fas fa-times"></i></button>
		<div class="drawer__inner container">

			<?php
			echo $drawer_menu;

			// Display mobile search window
			if ( true === get_theme_mod( 'mobile_search_display' ) ) :
				?>
				<div class="drawer__search">
					<?php get_search_form(); ?>
				</div>
			<?php endif; ?>
		</div>
	</nav>
<?php endif; ?>

<div class="contents <?php echo neomorphic_contents_class(); ?>" role="document">
	<div class="container">
		<div class="contents__inner">
