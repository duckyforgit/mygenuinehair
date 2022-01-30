<?php
/**
 * Partial template for content in lets connect.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<style>
    .border-left {
        border-left:  1px solid #000;
        padding-right: 20px;
    }
</style>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="container" style="background-color:#e1cec3">
        
        <div class="row pt-5 pb-5 ps-5 pe-3">
            <div class="col-sm-12 col-lg-4 border-left ps-5">
                
                <h1 class="display-2"><span class="display-5" style="letter-spacing:1px">SOCIAL</span>Let's<br>Connect</h1>
                 
                <p>We love hearing from our users. Connect with us on social media to share your feedback and thoughts.</p>
            </div>
            <div class="col-sm-12 col-lg-8">
                <div class="row">
                    <div class="col-sm-12 col-lg-2">
                        <img src="<?php echo get_template_directory_uri().'/dist/img/bottle.png';?>" alt="" >
                        <h3 class="text-center">Scents</h3>
                    </div>
                    <div class="col-sm-12 col-lg-2">
                        <img src="<?php echo get_template_directory_uri().'/dist/img/bottle.png';?>" alt="" >
                        <h3 class="text-center">Facial Care</h3>
                    </div>
                     <div class="col-sm-12 col-lg-2">
                        <img src="<?php echo get_template_directory_uri().'/dist/img/bottle.png';?>" alt="" >
                        <h3 class="text-center">Facial Care</h3>
                    </div>

                </div>
                </div>
        </div>
    </div>

    <div class="container" style="background-color:#af7153;">
        
        <div class="row pt-5 pb-5 ps-5 pe-5">
            <div class="col-sm-12">
               
                <h1 class="display-4" style="color:#fff">Everybody deserves to look and feel beautiful. That's why at GenuineHair, we're committed to creating Haircare products that cater to every Hair type.</h1>
                
                <p>Hochie (Oshi) M. Bonhomme, BSc, PharmD, MSBA</p>
            </div>
          
        </div>
    </div>



   <!-- <header class="entry-header">

        <?php //the_title('<h1 class="entry-title">', '</h1>'); ?>

    </header>--><!-- .entry-header -->

    <?php //echo get_the_post_thumbnail($post->ID, 'large'); ?>

  <!--  <div class="entry-content">

        <?php //the_content(); ?>

        <?php
       // wp_link_pages(
         //   array(
           //     'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
           //     'after'  => '</div>',
           // )
       // );
        ?>

    </div>--><!-- .entry-content -->

    <footer class="entry-footer">

        <?php edit_post_link(__('Edit', 'understrap'), '<span class="edit-link">', '</span>'); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->
