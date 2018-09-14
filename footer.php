<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custodian
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="container">
		
			<div class="footer-logo row">
				<img src="<?php the_field( 'footer_logo', 'options' ); ?>" alt="">
			</div>

			<div class="site-info row">

				<div class="contact-info seven columns">
					
						<div class="office one-half column">
							<h3>Head Office</h3>
							<?php the_field( 'footer_address', 'options' ); ?>
						</div>

						<div class="office one-half column">
							<h3>After Sales &amp; Service</h3>
							<?php the_field( 'after_sales_info', 'options' ); ?>
						</div>

				</div>

				<div class="lastest-news five columns">

					<div class="stories">

						<h3>Social</h3>
							<p>Follow us on <a target="_blank" href="https://twitter.com/firevehicle" title="">Twitter</a></p>
							<p>Follow us on <a target="_blank" href="https://www.facebook.com/TerbergDTSUK" title="">Facebook</a></p>

					</div>

				</div>

				<hr>

			</div>

			<div class="sub-info row">

				<div class="copy">
					<p>&copy; Copyright <?php echo date("Y"); ?> <?php echo bloginfo( 'name' ); ?>. All rights reserved.</p>
				</div>

				<div class="footer-nav">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer-menu',
					) );
					?>	
				</div>
				
			</div>

		</div>

	</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
