<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Theme_Name
 * @since Theme Name 1.0
 */

get_header(); ?>
			<div id="content">
			<?php
			/* Run the loop to output the page. */
			get_template_part( 'loop', 'page' );
			?>
			</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>