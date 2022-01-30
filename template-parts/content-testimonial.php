 <?php
/**
 * The default template for displaying testimonial content
 *
 *
 * @package Workroom1128
 * @since Workroom1128 1.0.0
 */


 // $testimonial_title  = foundationpress_get_option( 'testimonial_custom_title');
// get_query_var doesn't work for custom post type;  $paged = (get_query_var('paged')) ? get_query_var('page') : 1; 
// setting page to 1 since it is the static front page
   $args = array (
      'post_type'     => 'testimonial',
      'post_per_page' => -1
     // 'meta_key'      => 'testimonial_order',
     // 'orderby'       => 'meta_value',
     // 'order'         => 'ASC',
     // 'page'          => 1
  );         
            
  $query = new WP_Query($args);   
    
 ?>
<section class="testimonials section-container">
  
  <div class="header-overlay"></div>
  <div class="container">
    <div class="row justify-content-spaced align-content-middle ">
      <div class="col-12">
        <header>
        <?php //if ( ! empty( $testimonial_title ) ) : ?>
          <h2 class="text-center">Testimonials
          <?php //echo esc_html($testimonial_title) ?>   
          </h2>
        <?php //endif; ?> 
        </header>
      </div>
    </div>
    <div class="row "> 
    <?php if ( $query->have_posts() ) : 
    $counter = 0; ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?> 

      <div class="col-6">

      <?php if ( $counter <= 1 ) : ?> 
                 
        <blockquote class="d-flex" style="flex-direction:column">
                        
        <?php  $excerpt = wp_trim_words( get_field('testimonial_text'), 49 );
        $excerptCount = str_word_count($excerpt); 
        $wordCountFull = str_word_count( strip_tags(  get_field('testimonial_text' ) ));
        if ( $wordCountFull > $excerptCount ) :

          echo  '<p>' . $excerpt;
          $link = get_field('testimonial_link');
          if ( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>      
          <a class="readmore" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"> [Read More]</a> 
          <?php endif;  
          echo '</p>';          

          else :

          the_field('testimonial_text'); 

        endif; ?> 
           <img src="<?php echo get_template_directory_uri().'/dist/img/chase-fade-Qk8o8S_PMTY-unsplash.jpg' ?>" class="card-img-top" width="100" alt="..." style="width:100px; height:auto; text-align:center">               
          <cite class="text-left"><?php the_field('testimonial_first_name'); ?></cite>
        </blockquote> 

      <?php endif; ?> 
      </div>  
    <?php $counter++;  
    endwhile; 
    endif; ?>                  
    </div>  
  </div>
 
<?php  wp_reset_postdata(); ?>
<!-- <div class="testimonials section-container content-wrapper"> 

  <div class="container"> 
    <div id="testimonialList__results" ></div>

    <div class="row justify-content-center align-content-center">
      <div class="col-4">  
        <button id="load_more_button" class="col-4 text button hollow text-center" data-offset='0'>Load More Testimonials</button>
      </div> 
    </div>
  </div>
</div> -->
</section>
 
<?php wp_reset_postdata(); 