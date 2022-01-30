<?php
/**
 * Template Name: Our Founders Page Template
 *
 * Template for displaying a about page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('inner');
$container = get_theme_mod( 'understrap_container_type' );
?>
 

<div class="wrapper" id="page-wrapper">

	<div class="container" id="content" tabindex="-1">

			<main class="site-main" id="main">

    <?php  /* Start the Loop */
        while ( have_posts() ) :
          the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

              <div class="entry-content"> 

                  <?php
                  the_content();
                  ?>

              </div>
              <?php 
              if ( get_edit_post_link() ) : ?>

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

              <?php 
              endif; ?>

          </article>

        <?php            
        endwhile; // End of the loop.        
        ?>
    
      </main>

    </div>

</div>

<?php
get_footer();