<?php
/**
 * Parts for displaying SNS icons on header / footer
 *
 * @package neumorphic
 */

$sns_icons = array();

// Get customizer configuration info
for ( $i = 1; $i <= 5; $i++ ) {
	$icon = get_theme_mod( 'sns_icon_' . $i, 'none' );
	$url  = get_theme_mod( 'sns_url_' . $i );

	if ( 'none' !== $icon && $url ) {
		// Store SNS icon title, font awesome classname and URL
		$sns_icons[] = array(
			'title'      => NEUMORPHIC_SNS_CHOICE[ $icon ],
			'icon_class' => NEUMORPHIC_FA_CLASS[ $icon ],
			'url'        => $url,
		);
	}
}

if ( ! empty( $sns_icons ) ) : ?>

	<ul class="c-sns">

		<?php foreach ( $sns_icons as $sns_icon ) : ?>

			<li class="c-sns__item">
				<a href="<?php echo esc_url( $sns_icon['url'] ); ?>" target="_blank"><i class="<?php echo wp_kses_post( $sns_icon['icon_class'] ); ?>" title="<?php echo wp_kses_post( $sns_icon['title'] ); ?>"></i></a>
			</li>

		<?php endforeach; ?>

	</ul>

<?php endif; ?>
