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
				<img src="http://placehold.it/500x500" alt="">
				<a class="more" href="#" title="">WOULD YOU LIKE MORE INFORMATION?</a>
			</div><!-- .entry-header -->

		</div> 

	</div>

</article><!-- #post-<?php the_ID(); ?> -->
