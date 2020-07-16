<?php
/**
 * The template for displaying the header
 *
 * @package neumorphic
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

				<?php if ( is_front_page() || is_home() ) : ?>
					<h1 class="header__brand-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="header__brand-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>

				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description ) :
					?>
					<p class="header__brand-description"><span><?php echo esc_html( $description ); ?></span></p>
				<?php endif; ?>

			</div>

			<?php
			// Header search bar
			if ( true === get_theme_mod( 'header_search_display', NEUMORPHIC_HEADER_SEARCH_DISPLAY ) ) :
				?>
				<div class="header__search">
					<?php get_search_form(); ?>
				</div>
			<?php endif; ?>

			<?php
			// SNS icon
			if ( true === get_theme_mod( 'header_sns_display', NEUMORPHIC_HEADER_SNS_DISPLAY ) ) :
				?>
				<nav class="header__sns" role="navigation">
					<div class="container">
						<?php get_template_part( 'parts/sns' ); ?>
					</div>
				</nav>
			<?php endif; ?>

			<?php
			// Global menu
			if ( has_nav_menu( 'primary' ) ) :
				?>
				<div class="gnav">
					<nav class="c-gnav" role="navigation" aria-hidden="true">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu_class'     => 'c-gnav__list',
								'container'      => false,
								'walker'         => new Neumorphic_Gnav_Walker(),
							)
						);
						?>
					</nav>
				</div>
			<?php endif; ?>
		</div>
	</div>

	<?php
	// Fixed global menu
	if ( has_nav_menu( 'primary' ) ) :
		?>
		<div id="fixed_gnav" class="fixed-gnav">
			<div class="container">
				<nav class="c-gnav" role="navigation" aria-hidden="true">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu_class'     => 'c-gnav__list',
								'container'      => false,
								'walker'         => new Neumorphic_Gnav_Walker(),
							)
						);
					?>
				</nav>
			</div>
		</div>
	<?php endif; ?>
</header>

<div class="fixed-nav">
	<ul class="fixed-nav__list">
		<li class="fixed-nav__item">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home" title="<?php esc_attr_e( 'Home', 'neumorphic' ); ?>"></i></a>
		</li>

		<?php
		// Drawer menu open/close button
		if ( has_nav_menu( 'mobile' ) ) :
			?>
			<li class="fixed-nav__item">
				<button id="mobile_hm_btn" aria-controls="drawer" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open / Close mobile menu', 'neumorphic' ); ?>"><i class="fas fa-bars"></i></button>
			</li>
		<?php endif; ?>

		<li class="fixed-nav__item">
			<a href="#"><i class="fas fa-arrow-up" title="<?php esc_attr_e( 'Scroll to top', 'neumorphic' ); ?>"></i></a>
		</li>
	</ul>
</div>

<?php if ( has_nav_menu( 'mobile' ) ) : ?>
	<nav id="drawer" class="drawer" aria-hidden="true">
		<div class="drawer__inner container">
			<button id="mobile_close_btn" class="drawer__close" aria-controls="drawer" aria-label="<?php esc_attr_e( 'Close mobile menu', 'neumorphic' ); ?>"><i class="fas fa-times"></i></button>
			<?php
			// Drawer menu
			wp_nav_menu(
				array(
					'theme_location' => 'mobile',
					'menu_class'     => 'drawer__list',
					'container'      => false,
					'walker'         => new Neumorphic_Drawer_Walker(),
				)
			);

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

<div class="contents <?php echo esc_attr( neumorphic_contents_class() ); ?>" role="document">
	<div class="container">
		<div class="contents__inner">
