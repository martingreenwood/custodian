<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Custodian
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container">
		
		<div class="row">

			<div class="pad eight columns">
				<?php
					the_content();
				?>
			</div><!-- .entry-content -->

			<div class="four columns">
				<?php $content_image = get_field( 'content_image' ); ?>
				<img src="<?php echo $content_image['url']; ?>" alt="">
				<?php if(get_field( 'content_image_link' )): ?>
				<a class="more" href="<?php echo get_field( 'content_image_link' ); ?>" title="">WOULD YOU LIKE MORE INFORMATION?</a>
				<?php endif; ?>
			</div><!-- .entry-header -->

		</div> 

	</div>

</article><!-- #post-<?php the_ID(); ?> -->
