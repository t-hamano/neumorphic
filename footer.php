<?php
/**
 * The template for displaying the footer
 *
 * @package neumorphic
 */
?>

		</div>
	</div>
</div>

<footer class="footer" role="contentinfo">

	<?php
	// SNS icon
	if ( true === get_theme_mod( 'footer_sns_display', NEUMORPHIC_FOOTER_SNS_DISPLAY ) ) :
		?>
		<nav class="footer__sns" role="navigation">
			<div class="container">
				<?php get_template_part( 'parts/sns' ); ?>
			</div>
		</nav>
		<?php endif; ?>

	<?php
	// Credit
	if ( get_theme_mod( 'footer_credit', NEUMORPHIC_FOOTER_CREDIT ) ) :
		?>
		<div class="footer__credit">
			<div class="container">
				<?php echo wp_kses_post( get_theme_mod( 'footer_credit', NEUMORPHIC_FOOTER_CREDIT ) ); ?>
			</div>
		</div>
	<?php endif; ?>

</footer>

<?php wp_footer(); ?>

</body>
</html>
