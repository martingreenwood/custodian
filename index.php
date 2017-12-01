<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Custodian
 */

get_header(); ?>
<?php $featureimage = wp_get_attachment_url( get_post_thumbnail_id(get_option( 'page_for_posts' ))); ?>

	<section id="featureimage" class="section parallax-window" data-bleed="50" data-parallax="scroll" data-image-src="<?php echo $featureimage; ?>">
		<div class="caption">
			<div class="table"> <div class="cell middle">
				<div class="container">
					<div class="copy row">
						<div class="four columns">
							<h1><?php the_field( 'intro_title', get_option( 'page_for_posts' ) ); ?></h1>
							<p><?php the_field( 'intro_text', get_option( 'page_for_posts' ) ); ?></p>
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

		<div class="container">
				
				<div class="row">

					<div class="pad eight columns">
					
						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_format( ) );

						endwhile; // End of the loop.
						?>

					</div>

					<div class="pad four columns">
					
						<?php get_sidebar(  ) ?>

					</div>

				</div> 

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
