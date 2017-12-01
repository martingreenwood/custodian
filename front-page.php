<?php
/**
 * The template for displaying the homepage
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
							<a href="<?php the_field( 'intro_link' ); ?>">Find Out More</a>
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

				get_template_part( 'template-parts/content', 'home' );

			endwhile; // End of the loop.
			?>

		</main>
	</div>

	<?php get_template_part( 'partials/sub', 'pages' )  ?>

	<?php 
	$ctaimage = get_field( 'banner_image' );
	?>
	<section id="cta" class="section parallax-window" data-bleed="50" data-parallax="scroll" data-image-src="<?php echo $ctaimage['url']; ?>">

		<div class="container">

			<div class="row">

				<div class="eight columns">
					&nbsp;
				</div>

				<div class="four columns text">
					<h1><?php echo get_field( 'banner_heading' ); ?></h1>
					<p><?php echo get_field( 'banner_text' ); ?></p>
					<a href="<?php echo get_field( 'banner_link' ); ?>" title="find out more">find out more</a>
				</div>

			</div>x
			
		</div>
		
	</section>

	<?php get_template_part( 'partials/get', 'tweets' )  ?>

<?php
get_footer();
