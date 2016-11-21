<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elodie_martins
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">


		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'elodie_martins' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'elodie_martins' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'elodie_martins' ), 'elodie_martins', '<a href="http://underscores.me/" rel="designer">Julien Garret</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
