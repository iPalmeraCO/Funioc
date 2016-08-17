<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	
</div><!-- #page -->

<footer id="colophon" role="contentinfo">
		<div class="container">
			<div class="col-md-8 containersite">
					<div class="site-info">
						<?php dynamic_sidebar("sidebar-4");?>
						

					</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>