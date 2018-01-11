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
				<?php
					the_custom_logo();
				?>
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

							<h3>Twitter</h3>
							<p>Follow us on Twitter <a href="htpp://www.twitter.com/AmdacCarmichael" title="">@AmdacCarmichael</a></p>
						</div>

				</div>

				<div class="lastest-news five columns">

					<div class="stories">
						
						<h3>Latest News</h3>
						<ul>
							<?php
							$args = array( 'post_type' => 'post', 'posts_per_page' => 5 );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
							?>
							<li><a href="<?php the_permalink( ) ?>" title=""><?php the_title(); ?></a></li>
							<?php
							endwhile;
							?>
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
