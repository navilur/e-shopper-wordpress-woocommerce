<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer id="site-footer" role="contentinfo" class="header-footer-group">

	<div class="container">
		<div class="footerWidgets">
			<?php get_template_part('template-parts/footer-menus-widgets') ?>
		</div>
		<div class="section-inner">

			<div class="footer-credits">

				<p class="footer-copyright">&copy;
					<?php
					echo date_i18n(
						/* translators: Copyright date format, see https://www.php.net/date */
						_x('Y', 'copyright date format', 'twentytwenty')
					);
					?>
					<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
				</p><!-- .footer-copyright -->



			</div><!-- .footer-credits -->

			<a class="to-the-top" href="#site-header">
				<span class="to-the-top-long">
					<?php
					/* translators: %s: HTML character for up arrow. */
					printf(__('To the top %s', 'twentytwenty'), '<span class="arrow" aria-hidden="true">&uarr;</span>');
					?>
				</span><!-- .to-the-top-long -->
				<span class="to-the-top-short">
					<?php
					/* translators: %s: HTML character for up arrow. */
					printf(__('Up %s', 'twentytwenty'), '<span class="arrow" aria-hidden="true">&uarr;</span>');
					?>
				</span><!-- .to-the-top-short -->
			</a><!-- .to-the-top -->

		</div><!-- .section-inner -->
	</div>

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

<!-- jquery 3 cdn -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!-- slick js -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- custom js -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
</body>

</html>