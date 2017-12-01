<?php
/**
 * Template part for displaying posts
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
				<?php get_sidebar(  ); ?>
			</div><!-- .entry-header -->

		</div> 

	</div>

</article><!-- #post-<?php the_ID(); ?> -->