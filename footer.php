<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Marker
 */
?>

	</div><!-- #content -->
	
	<div id="footer-primary">
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div id="tertiary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div><!-- #tertiary -->
		<?php endif; ?>
	</div><!-- #footer-primary -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="copyright">
				&copy;
				<?php echo date("Y"); ?>
				<?php bloginfo('name'); ?>.
				All rights reserved.
			</div><!-- .copyright -->
			<div class="theme-info">
				<?php printf( __( 'Proudly powered by %s.', 'marker' ), '<a href="http://wordpress.org">WordPress</a>' ); ?>
				<?php printf( __( 'Designed & maintained by %s.', 'marker' ), '<a href="http://webfirstdesigns.com" rel="designer">Web First Designs</a>' ); ?>
			</div><!-- .theme-info -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>