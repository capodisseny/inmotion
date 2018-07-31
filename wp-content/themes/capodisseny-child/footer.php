<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package capodisseny
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
				<!-- miquel custom: afegir auto copyright -->
				<div class="copyright"> &copy; <?php echo date("Y"); ?> Skifornells - <?php dynamic_sidebar( 'all-rights-reserved' ); ?>
  
			</div>
			
			<!-- -->
			<span class="sep"> | </span>
				
				Designed by <a href="http://capodisseny.com"> Miquel Capó Casasnovas</a>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
