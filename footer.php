<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shelter
 */

?>
		</div><!-- .content-wrap -->
	</div><!-- #content -->

	<div class="footer-wrap">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-map">
				<iframe src="https://snazzymaps.com/embed/9428" width="100%" height="400px" style="border:none;"></iframe>
			</div>
			<div class="footer-info">
				<div class="footer-info-inner">
					<h2>Contact</h2>
					<p>
						Fuerteventura Dog Rescue<br/>
						Ayuntamiento de la Oliva,<br />
						La Oliva, Fuerteventura<br />
						Spain (<a href="https://goo.gl/maps/U43qtxJqqhy" target="_blak">Google Maps</a>)<br />
					</p>

					<p><a href="mailto:info@fuerteventuradogrescue.org">info@fuerteventuradogrescue.org</a></p>

					<div class="fb-like" data-href="https://www.facebook.com/Fuerteventura-Dog-Rescue-628498397166915/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div>

	<div class="footer-terminal">
		Registered Charity in the Canary Islands since April 2013 - G1/S1/19399-13/F
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

<script>
jQuery( document ).ready(function($) {
	$( ".mobile-toggle" ).click(function() {
	  $( ".mobile-content" ).slideToggle( "fast", function() {
	    // Animation complete.
	  });
	});
});
</script>

</body>
</html>
