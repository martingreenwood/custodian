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
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'custodian' ) ); ?>">
					<img src="http://placehold.it/200x75" alt="">
				</a>
			</div>

			<div class="site-info row">

				<div class="contact-info seven columns">
					
						<div class="office one-half column">
							<h3>Head Office</h3>
							<p>HEAD OFFICE<br>
							Weir Lane, Worcester, WR2 4AY<br>
							Tel: +44 (0) 1905 420 044<br>
							Email: <a href="mailto:sales@sterlingrt.co.uk">sales@sterlingrt.co.uk</a></p>
						</div>

						<div class="office one-half column">
							<h3>After Sales &amp; Service</h3>
							<p>Tel: +44 (0) 1905 748 660<br>
							Email: servicing@sterlingrt.co.uk</p>

							<h3>Twitter</h3>
							<p>Follow us on Twitter <a href="htpp://www.twitter.com/AmdacCarmichael" title="">@AmdacCarmichael</a></p>
						</div>

				</div>

				<div class="lastest-news five columns">

					<div class="stories">
						
						<h3>Latest News</h3>
						<ul>
							<li>Latest news story goes here</li>
							<li>Another title of a news item here</li>
							<li>Shorter title</li>
							<li>Recent post would feature here</li>
							<li>The fifth most recent news title goes here</li>
						</ul>

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
