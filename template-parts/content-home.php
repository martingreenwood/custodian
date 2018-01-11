<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Custodian
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="container">
		
		<div class="row">
			
			<header class="four columns">
				<h1>
					<span>We Are</span><br>
					CSS
				</h1>
			</header><!-- .entry-header -->

			<div class="pad eight columns">
				<?php
					the_content();
				?>
			</div><!-- .entry-content -->

		</div>

	</div>

</article><!-- #post-<?php the_ID(); ?> -->
