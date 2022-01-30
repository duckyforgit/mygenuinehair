<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<?php //$featured_image = get_the_post_thumbnail_url(); ?>

<article <?php post_class('single-post'); ?> id="post-<?php the_ID(); ?>"> 
    <div class="col-sm-12 " >

        <div class="shadow-2-strong relative module-inside">
                    <?php ?>
           <header class="entry-header">
            
                <h1 class="mb-3"><?php echo esc_html(the_title()); ?></h1>
                <p class="mb-4 text-uppercase">By <?php the_author_posts_link();?><span class="separator ps-3 pe-3"> | </span> <?php the_time('F jS, Y'); ?></p>
            </header>
            <!-- <div class="logo-banner deep-tan-opaque"  >

                <img src="<?php //echo get_template_directory_uri().'/dist/img/canvaPhotos/logo-banner.jpg'; ?>" alt="<?php echo bloginfo(); ?>">
            </div> -->
        </div> 
    </div>
             
            <div class="entry-content mt-5">
             
                <?php the_content();  ?>
                <?php
                 wp_link_pages(
                     array(
                        'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
                        'after'  => '</div>',
                     )
                 );
                    ?>
            </div>
            <footer class="entry-footer">

                <?php understrap_entry_footer(); ?>

            </footer><!-- .entry-footer -->
       
        
             <header class="entry-header">
            <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
            </header>
       
    

</article><!-- #post-## -->
</div>