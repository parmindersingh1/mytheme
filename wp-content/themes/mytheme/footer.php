<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
*/
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'mytheme_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://www.ezzie.in/', 'mytheme' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'mytheme' ); ?>"><?php printf( __( 'Proudly powered by %s', 'mytheme' ), 'Ezzie' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
