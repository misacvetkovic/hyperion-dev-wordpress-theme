<?php
/**
 * The template for displaying the footer.
 *
 * @package Hyperion
 */
?>

	<footer class="site-footer" id="footer">

		<div class="footer-menu">

			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-nav">
				<?php 
					wp_nav_menu( array( 
						'theme_location'  =>  'footer',
						'menu_id'         =>  'footer-menu' 
					) ); 
				?>
				</nav><!--/.footer-nav-->
			<?php endif; ?>

		</div><!--/.footer-menu-->

		<div class="site-info">

			<p><?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'hyperion' ), 'Hyperion', '<a href="http://heyiammisa.com">Misa Cvetkovic</a>' ); ?></p>
			<p>&copy; <?php echo date( 'Y' ); ?>. <?php _e( 'All Rights Reserved.', 'hyperion' ); ?></p>

		</div><!--/.site-info-->

	</footer><!--/#footer-->

<?php wp_footer(); ?>

</body>
</html>