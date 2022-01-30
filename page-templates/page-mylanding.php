<?php
/**
* Template Name: MyLanding Page
 *
 * Template for displaying the landing page.
 *
 * 
 *
 * @package WordPress
 * @subpackage MyGenuineHair
 * @since 1.0
 */

get_header('landing');

/* Start the Loop */
while ( have_posts() ) :
	the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="entry-content"> 
          <?php
          the_content();
          ?>
         </div>
        <?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer default-max-width">
      <?php
      edit_post_link(
        sprintf(
          /* translators: %s: Name of current post. Only visible to screen readers. */
          esc_html__( 'Edit %s', 'twentytwentyone' ),
          '<span class="screen-reader-text">' . get_the_title() . '</span>'
        ),
        '<span class="edit-link">',
        '</span>'
      );
      ?>
    </footer><!-- .entry-footer -->
  <?php endif; ?>

	</article>
   <?php

	// If comments are open or there is at least one comment, load up the comment template.
	 
endwhile; // End of the loop.

get_footer('landing');
