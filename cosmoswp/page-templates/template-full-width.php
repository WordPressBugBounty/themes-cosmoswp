<?php
/**
 * Template Name: CosmosWP Full Width
 *
 * @since 1.4.0
 * @package CosmosWP
 */
get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	the_content();

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

endwhile; // End of the loop.

get_footer();
