<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Custodian
 */

get_header(); ?>
<?php $featureimage = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>

	<section id="featureimage" class="section parallax-window" data-bleed="50" data-parallax="scroll" data-image-src="<?php echo $featureimage; ?>">
		<div class="caption">
			<div class="table"> <div class="cell middle">
				<div class="container">
					<div class="copy row">
						<div class="four columns">
							<h1><?php the_field( 'intro_title' ); ?></h1>
							<p><?php the_field( 'intro_text' ); ?></p>
							<?php if (get_field( 'intro_link' )): ?>
							<a href="<?php the_field( 'intro_link' ); ?>">Find Out More</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div> </div>
		</div>
	</section>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'contact' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<section id="mappy">

		<div class="container">

			<div class="row">

				<div class="pad column twelve">

					<div id="map-continents">
						<ul class="continents">
							<li class="c1"><a href="#africa">Africa</a></li>
							<li class="c2"><a href="#asia">Asia</a></li>
							<li class="c3"><a href="#australia">Australia</a></li>
							<li class="c4"><a href="#europe">Europe</a></li>
							<li class="c5"><a href="#north-america">North America</a></li>
							<li class="c6"><a href="#south-america">South America</a></li>
						</ul>
					</div>

					<!-- CSSMap - list of addresses -->
					<div id="agents">
						<ul>
							<li id="africa">

								<!-- Africa -->
								<h2>Affica</h2>
								<p>
									Carmichael Support Services Ltd<br>
									Address in<br>
									Affica<br>
									<br>
									Tel: +44 (0) 1905 420 044<br>
									Fax: +44 (0) 1905 420 120<br>
									Email: sales@carmichael-css.co.uk<br>
								</p>

							</li>
							<li id="asia">

								<!-- Asia -->
								<h2>Asia</h2>
								<p>
									Carmichael Support Services Ltd<br>
									Address in<br>
									Asia<br>
									<br>
									Tel: +44 (0) 1905 420 044<br>
									Fax: +44 (0) 1905 420 120<br>
									Email: sales@carmichael-css.co.uk<br>
								</p>

							</li>
							<li id="australia">

								<!-- Australia -->
								<h2>Australia</h2>
								<p>
									Carmichael Support Services Ltd<br>
									Address in<br>
									Australia<br>
									<br>
									Tel: +44 (0) 1905 420 044<br>
									Fax: +44 (0) 1905 420 120<br>
									Email: sales@carmichael-css.co.uk<br>
								</p>

							</li>
							<li id="europe">

								<!-- Europe -->
								<h2>Europe</h2>
								<p>
									Carmichael Support Services Ltd<br>
									Address in<br>
									Europe<br>
									<br>
									Tel: +44 (0) 1905 420 044<br>
									Fax: +44 (0) 1905 420 120<br>
									Email: sales@carmichael-css.co.uk<br>
								</p>

							</li>
							<li id="north-america">

								<!-- North America -->
								<h2>North America</h2>
								<p>
									Carmichael Support Services Ltd<br>
									Address in<br>
									North America<br>
									<br>
									Tel: +44 (0) 1905 420 044<br>
									Fax: +44 (0) 1905 420 120<br>
									Email: sales@carmichael-css.co.uk<br>
								</p>

							</li>
							<li id="south-america">

								<!-- South America -->
								<h2>South America</h2>
								<p>
									Carmichael Support Services Ltd<br>
									Address in<br>
									South America<br>
									<br>
									Tel: +44 (0) 1905 420 044<br>
									Fax: +44 (0) 1905 420 120<br>
									Email: sales@carmichael-css.co.uk<br>
								</p>

							</li>
						</ul>
					</div>
					<!-- END OF THE CSSMap - list of addresses -->
					
				</div>
				
			</div>
			
		</div>
		
	</section>

	<?php get_template_part( 'partials/get', 'tweets' )  ?>

<?php
get_footer();
