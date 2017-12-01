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

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_template_part( 'partials/sub', 'pages' )  ?>

	<?php get_template_part( 'partials/get', 'tweets' )  ?>

<?php
get_footer();
