<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kindler
 */

?>

	</div><!-- #content -->
	<div id="footer-wrapper">
		<?php get_template_part('social'); ?>
	<div id="footer-sidebar" class="widget-area clear container" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>
	<?php 
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
		<div class="footer-column col-lg-3 col-md-3 col-sm-6 col-xs-12"> <?php
			dynamic_sidebar( 'sidebar-2'); 
		?> </div> <?php	
		}
			
		if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
		<div class="footer-column col-lg-3 col-md-3 col-sm-6 col-xs-12"> <?php
			dynamic_sidebar( 'sidebar-3'); 
		?> </div> <?php	
		}

		if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
		<div class="footer-column col-lg-3 col-md-3 col-sm-6 col-xs-12"> <?php
			dynamic_sidebar( 'sidebar-4'); 
		?> </div> <?php	
		}
		
		if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
		<div class="footer-column col-lg-3 col-md-3 col-sm-6 col-xs-12"> <?php
			dynamic_sidebar( 'sidebar-5'); 
		?> </div> <?php	
		}
		?>	 		
	</div><!-- #footer-sidebar -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( 'https://wordpress.org/', 'kindler' ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'kindler' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme %1$s by %2$s.', 'kindler' ), 'Kindler', '<a href="http://www.divjot.co/" rel="designer">Divjot Singh</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
