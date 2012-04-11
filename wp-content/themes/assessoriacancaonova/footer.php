<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>	
		<div id="container-footer">
			<div id="content-footer">
		</section><!-- #main -->
			<footer role="contentinfo">
				<a href="#"><img src="<?php bloginfo('url')?>/wp-content/themes/assessoriacancaonova/images/marca_footer.png"></a>
				<span>&copy; 2002 – 2012 Todos os direitos reservados. </span>
			</footer><!-- footer -->
			</div> <!-- #content-footer -->
		</div> <!-- #container-footer -->

		<?php
			/* Always have wp_footer() just before the closing </body>
			 * tag of your theme, or you will break many plugins, which
			 * generally use this hook to reference JavaScript files.
			 */
			wp_footer();
		?>
	</body>
</html>