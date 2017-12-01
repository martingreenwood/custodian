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
				<?php echo gravity_form( 1, false, false, false, '', false ); ?>
			</div><!-- .entry-content -->

			<div class="four columns">
				<?php
					the_content();
				?>
			</div><!-- .entry-header -->

		</div> 

	</div>

</article><!-- #post-<?php the_ID(); ?> -->
