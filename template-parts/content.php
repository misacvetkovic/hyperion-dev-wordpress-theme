<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hyperion
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );	?>

	</header><!--/.entry-header-->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!--/.entry-content-->

	<footer class="entry-footer">
		<a href="<?php the_permalink(); ?>"><?php echo esc_attr_x( 'Read More...', 'hyperion' ) ?></a>
	</footer><!--/.entry-footer-->

</article><!--/.post-#-->
