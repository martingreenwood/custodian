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

				get_template_part( 'template-parts/content', 'vehicles' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<section id="sup">
		<div class="container">

		<?php
		$counter = 0;
		if( have_rows('supporting_info') ):
		while ( have_rows('supporting_info') ) : the_row();
		$ttl = get_sub_field( 'title' );
		$img = get_sub_field( 'image' );
		$txt = get_sub_field( 'content' );
		?>

		<?php if ($counter % 2 === 0) :?>

			<div class="row">

				<div class="table">

					<div class="cell middle">

						<div class="columns five">
							<img src="<?php echo $img["url"] ?>" alt="">
						</div>

						<div class="columns two">&nbsp;</div>

						<div class="columns five">
							<h3><?php echo $ttl ?></h3>
							<?php echo $txt; ?>
						</div>
						
					</div>
					
				</div>
				
			</div>

		<?php else: ?>

			<div class="row">

				<div class="table">

					<div class="cell middle">

						<div class="columns five">
							<h3><?php echo $ttl ?></h3>
							<?php echo $txt; ?>
						</div>

						<div class="columns two">&nbsp;</div>

						<div class="columns five">
							<img src="<?php echo $img["url"] ?>" alt="">
						</div>
						
					</div>
					
				</div>
				
			</div>

		<?php endif; ?>

		<?php
		$counter++;
		endwhile;
		endif;
		?>
			
		</div>
	</section>

	<?php get_template_part( 'partials/get', 'tweets' )  ?>

<?php
get_footer();
