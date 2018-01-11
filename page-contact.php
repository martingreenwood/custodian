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
							<?php
							$count = 1;
							if( have_rows('distributors', 'option') ):
							while ( have_rows('distributors', 'option') ) : the_row();
							?>
							<li class="c<?php echo $count; ?>">
								<a href="#<?php echo str_replace(" ", "-", strtolower(get_sub_field( 'country' ))) ?>"><?php the_sub_field( 'country' ); ?></a>
							</li>
							<?php
							$count++;
							endwhile;
							endif;
							?>
						</ul>
					</div>

					<div id="agents">
						<ul>
							<?php
							if( have_rows('distributors', 'options') ):
							while ( have_rows('distributors', 'options') ) : the_row();
							?>
							<li id="<?php echo str_replace(" ", "-", strtolower(get_sub_field( 'country' ))) ?>">
								<h2><?php the_sub_field( 'country' ); ?></h2>
								<?php the_sub_field( 'details' ); ?>
							</li>
							<?php
							$count++;
							endwhile;
							endif;
							?>
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
