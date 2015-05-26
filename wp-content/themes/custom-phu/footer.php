<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Custom_Phu
 * @subpackage One
 * @since One 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="container">
				<div class="row">
				<nav role="navigation" class="col-xs-8" id="footer-nav-region">
					<?php wp_nav_menu( array( 'theme_location' => 'footer') ); ?>
				</nav><!-- #site-navigation -->
				</div>
				<p>Powered by &copy;Phu 2015-<?php echo date('Y') ?></p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>