<?php
/**
 * Storefront hooks
 *
 * @package storefront
 */

/**
 * General
 *
 * @see  storefront_header_widget_region()
 * @see  storefront_get_sidebar()
 */
add_action( 'storefront_before_content', 'storefront_header_widget_region', 10 );
add_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );

/**
 * Header
 *
 * @see  storefront_skip_links()
 * @see  storefront_secondary_navigation()
 * @see  storefront_site_branding()
 * @see  storefront_primary_navigation()
 */
add_action( 'storefront_header', 'storefront_header_container', 0 );
add_action( 'storefront_header', 'storefront_skip_links', 5 );
add_action( 'storefront_header', 'storefront_site_branding', 20 );
add_action( 'storefront_header', 'storefront_secondary_navigation', 30 );
add_action( 'storefront_header', 'storefront_header_container_close', 41 );
add_action( 'storefront_header', 'storefront_primary_navigation_wrapper', 42 );
add_action( 'storefront_header', 'storefront_primary_navigation', 50 );
add_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 68 );

/**
 * Footer
 *
 * @see  storefront_footer_widgets()
 * @see  storefront_credit()
 */
add_action( 'storefront_footer', 'storefront_footer_widgets', 10 );
add_action( 'storefront_footer', 'storefront_credit', 20 );

/**
 * Homepage
 *
 * @see  storefront_homepage_content()
 */
add_action( 'homepage', 'storefront_homepage_content', 10 );

/**
 * Posts
 *
 * @see  storefront_post_header()
 * @see  storefront_post_meta()
 * @see  storefront_post_content()
 * @see  storefront_paging_nav()
 * @see  storefront_single_post_header()
 * @see  storefront_post_nav()
 * @see  storefront_display_comments()
 */
add_action( 'storefront_loop_post', 'storefront_post_header', 10 );
add_action( 'storefront_loop_post', 'storefront_post_content', 30 );
add_action( 'storefront_loop_post', 'storefront_post_taxonomy', 40 );
add_action( 'storefront_loop_after', 'storefront_paging_nav', 10 );
add_action( 'storefront_single_post', 'storefront_post_header', 10 );
add_action( 'storefront_single_post', 'storefront_post_content', 30 );
add_action( 'storefront_single_post_bottom', 'storefront_edit_post_link', 5 );
add_action( 'storefront_single_post_bottom', 'storefront_post_taxonomy', 5 );
add_action( 'storefront_single_post_bottom', 'storefront_post_nav', 10 );
add_action( 'storefront_single_post_bottom', 'storefront_display_comments', 20 );
add_action( 'storefront_post_header_before', 'storefront_post_meta', 10 );
add_action( 'storefront_post_content_before', 'storefront_post_thumbnail', 10 );

/**
 * Pages
 *
 * @see  storefront_page_header()
 * @see  storefront_page_content()
 * @see  storefront_display_comments()
 */
add_action( 'storefront_page', 'storefront_page_header', 10 );
add_action( 'storefront_page', 'storefront_page_content', 20 );
add_action( 'storefront_page', 'storefront_edit_post_link', 30 );
add_action( 'storefront_page_after', 'storefront_display_comments', 10 );

/**
 * Homepage Page Template
 *
 * @see  storefront_homepage_header()
 * @see  storefront_page_content()
 */
add_action( 'storefront_homepage', 'storefront_homepage_header', 10 );
add_action( 'storefront_homepage', 'storefront_page_content', 20 );


//add_action( 'init', 'storefront_add_hero_image_init' );

function storefront_add_hero_image_init () {
   //add_action( 'storefront_before_content', 'storefront_add_hero_image', 5 );
}

function storefront_add_hero_image() {

   if ( is_front_page() ) :

      ?>
        <section class="sph-hero center full sph-full-height" style="background-color: rgb(191, 172, 160); color: rgb(255, 255, 255); margin-left: -156.516px; margin-right: -156.516px;">
         <div id="hero-image">

             <img src="<?php echo get_template_directory_uri().'/assets/images/customizer/starter-content/hero.jpg';?>" width="100%">

         </div>
         <div class="overlay animated" style="background-color: rgba(0, 0, 0, 0.3); min-height: 647.734px;">

        <div class="sph-inner-wrapper" style="min-height: 197.266px;">

          <div class="col-full sph-inner">

            
            <h1 style="color: #ffffff;" data-content="Spring is here!"><span>Spring is here!</span></h1>

            <div class="sph-hero-content-wrapper">
              <div class="sph-hero-content">
                <p>Like this full screen hero component? Add one to your Storefront powered shop with the <a href="http://www.woothemes.com/products/storefront-parallax-hero/">Storefront Parallax Hero</a> extension.</p>

                                  <p>
                    <a href="https://themes.woocommerce.com/storefront/shop" class="button">Go shopping →</a>
                  </p>
                              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

      <?php

   endif;

}