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

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'shelter' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'shelter' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'shelter' ), 'shelter', '<a href="http://www.noeltock.com" rel="designer">Noel Tock</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- .content-wrap -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
