<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Brawny
 */
?>

</div>
	<?php do_action('brawny_before_footer'); ?>
	<footer id="colophon" class="site-footer footer-image " role="contentinfo">
	 <?php if ( get_theme_mod ('footer_overlay',false ) ) {
			   echo '<div class="overlay overlay-footer "></div>';
			}

		if( get_theme_mod( 'footer-widgets',true ) ) : ?>
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<?php get_template_part( 'footer','widgets' ); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
		<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div>
	</footer><!-- #colophon -->
	<?php do_action('brawny_after_footer'); ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
