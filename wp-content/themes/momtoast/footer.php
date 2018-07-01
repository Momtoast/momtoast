<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package momtoast
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'momtoast' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'momtoast' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'momtoast' ), 'momtoast', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->

		<div id="socialmedia">
				<ul>
			    <li><a href="https://www.facebook.com/unboxingstory"><img src="wp-content/themes/momtoast/img/Facebook.png"></a></li>
			    <li><a href="https://twitter.com/momtoast_mel"><img src="wp-content/themes/momtoast/img/Twitter.png" /></a></li>
			    <li><a href="https://plus.google.com/u/1/115360113997624792546"><img src="wp-content/themes/momtoast/img/Google Plus.png" /></a></li>
			    <li><a href="https://www.instagram.com/momtoast/"><img src="wp-content/themes/momtoast/img/Instagram.png" /></a></li>
					<li><a href="https://www.linkedin.com/in/melissa-matos-7696b0b8/"><img src="wp-content/themes/momtoast/img/LinkedIn.png" /></a></li>
			  </ul>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
