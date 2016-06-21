<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hyperion
 */
?>

	<section class="no-results not-found">

		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'hyperion' ); ?></h1>
		</header><!-- .page-header -->

		<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'hyperion' ); ?></p>

		<?php get_search_form(); ?>

	</section>