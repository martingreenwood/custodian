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

			<div class="two columns">&nbsp;</div>

			<div class="pad eight columns">
				<center>
				<?php
					the_content();
				?>
				</center>
			</div><!-- .entry-content -->

			<div class="two columns">&nbsp;</div>

		</div> 

	</div>

</article><!-- #post-<?php the_ID(); ?> -->
