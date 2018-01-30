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
	
	
	
	<header id="header" class="">
		<h2><a href="<?php the_permalink(  ) ?>"><?php the_title(  ) ?></a></h2>
	</header><!-- /header -->
	<a href="<?php the_permalink(  ) ?>"><?php the_post_thumbnail(  'full' ) ?></a>
	<?php
		the_excerpt();
	?>
	<p><a href="<?php the_permalink(); ?>" title="Read <?php the_title( ) ?>">Read More</a></p>

</article><!-- #post-<?php the_ID(); ?> -->