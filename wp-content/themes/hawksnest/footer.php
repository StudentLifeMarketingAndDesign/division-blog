<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer">
		<div id="footer_content">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

			<div id="site-info">
					<div id="uifooterlogo"></div>
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<div id="hnfooterlogo"></div>
				</a>
			</div><!-- #site-info -->

			<div id="footer_text">
				<div id="email">
				<a href="mailto:hawks-nest@hawkeyesports.com">hawks-nest@hawkeyesports.com</a>
				</div>
				<div id="disabilities">
				Individuals with disabilities are encouragedto attend all UI-sponsored events. If you are a person with a disability who requires an accomodation to participate in a program, please email hawks-nest@hawkeyesports.com in advance.
				</div>
			</div><!-- #footer_text -->

		</div><!-- #footer_content -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
