<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package foggedclarity
 */
?>
		<?php tha_content_bottom(); ?>
		</div><!-- end #content -->
		<?php tha_content_after(); ?>
 		<?php tha_footer_before(); ?>
		<footer id="colophon" class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="https://schema.org/WPFooter">
			<?php tha_footer_top(); ?>
			<?php wp_footer(); ?>
			<div class="site-info">
				<!-- custom footer widgets -->
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('fc_footer_left') ) : endif; ?>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('fc_footer_center') ) : endif; ?>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('fc_footer_right') ) : endif; ?>
				
				<!-- <a href="https://wordpress.org/" rel="generator"><?php //printf( __( 'Proudly powered by <span class="genericon genericon-wordpress"></span> %s', 'foggedclarity' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span> -->

			</div><!-- end .site-info -->
			<?php tha_footer_bottom(); ?>
			<div class="copy"><p>All work &copy; respective artists</p></div>
		</footer>

	</div><!-- end .wrap -->
</div><!-- end #page -->

<?php tha_body_bottom(); ?>
<?php tha_footer_after(); ?>
</body>
</html>