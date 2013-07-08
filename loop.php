<?php
/**
 * The loop that displays a single post, page or custom post type.
 *
 * @package WordPress
 * @subpackage Theme_Name
 * @since Theme Name 1.0
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                	<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __('Pages', '[theme_name]'), 'after' => '</div>' ) ); ?>
						
				</article>				

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>