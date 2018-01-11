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
			
			<header class="three columns">
				<h1>
					We<br>
					Are<br>
					CSS
				</h1>
			</header><!-- .entry-header -->

			<div class="pad nine columns">
				<?php
					the_content();
				?>
			</div><!-- .entry-content -->

		</div>

	</div>

</article><!-- #post-<?php the_ID(); ?> -->
