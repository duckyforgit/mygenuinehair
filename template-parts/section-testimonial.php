 <?php
/**
 * The default template for displaying testimonial content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
    
 <?php 

  $testimonial_title  = foundationpress_get_option( 'testimonial_custom_title');

   $args = array (
    'post_type'     => array('testimonial'),
    'post_per_page' => -1,    
    'meta_key'      => 'testimonial_order',
    'orderby'       => 'meta_value',
    'order'         => 'ASC'
  );         
            
  $query = new WP_Query($args);   
 //wp_reset_postdata(); ?>
 
 
<section class="testimonials section-container">
  
    <div class="header-overlay"></div>
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-spaced align-middle ">
            <div class="cell small-12">
                <header>
                     <?php if ( ! empty( $testimonial_title ) ) : ?>
                        <h2 class="text-center">
                            <?php echo esc_html($testimonial_title) ?>   
                        </h2>
                      <?php endif; ?> 
                                  
                </header>
            </div>
        </div>
         <div class="grid-x grid-margin-x align-spaced align-middle small-up-1 medium-up-2"> 
            <?php if ( $query->have_posts() ) : 
              $counter = 0; ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?> 
                    
                    <div class="cell"> 
                          <blockquote>
                              <?php the_field('client_testimonial_excerpt'); ?>
                               <?php 
                            $readmore_text   = foundationpress_get_option( 'services_custom_btn_text_' . $i );
                            if ( ! empty( $readmore_text ) ) { 
                                ?>
                            <div class="read-more">
                                <a href="<?php the_permalink();?>" class="btn btn-primary"><?php echo esc_html($readmore_text);?></a>
                            </div><!-- .read-more -->
                            <?php  }?>
                              <cite class="cite"><?php the_field('client_first_name'); ?></cite>
                          </blockquote>  
                    </div>  
            <?php endwhile;?>
                 <?php  endif; ?> 
         </div>  
    </div>
</section>
<?php  wp_reset_postdata();  