<?php
/*
Template Name: Przykladowy szablon strony
*/
get_header(); ?>
			<div id="content">
			<?php
			/* Run the loop to output the page. */
			get_template_part( 'loop' );
			?>
			</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>