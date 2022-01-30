 <?php
/**
 * The default template for displaying clients and their logos
 *
 *
 * @package workroom1128
 * @since workroom1128 1.0.0
 */
?>
    
 <?php 

 // $clients_title  = workroom1128_get_option( 'clients_custom_title_one');
  
   $args = array (
    'post_type'     => array('client'),
    'post_per_page' => -1,    
    'meta_key'      => 'client_order',
    'orderby'       => 'meta_value',
    'order'         => 'ASC'
  );         
            
  $query = new WP_Query($args);   
  ?>
  
 <section class="clients-section-container grid-container">  
  <div class="content-wrapper">  
<style>
  .clients ul {
    list-style-type: none;
    padding: 0 5rem;
  }
  .thumbnail {
    box-shadow: none;
    border: solid 0px #fefefe;
  }
  .clients .client-logo {
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-right: 1px solid #f1eeed;
    border-bottom: 1px solid #f1eeed;
    overflow: hidden;
    background: #fff;
    height: 140px;
  }
  .clients .client-logo img {
    transition: all 0.3s ease-in-out; 
    filter: grayscale(100%);
  }
  .img-fluid {
    max-width: 100%;
    height: auto;
  }
  .clients .client-logo:hover img {
    filter: none;
    transform: scale(1.1);
  }
</style>
  <div class="clients">
    <?php if ( $query->have_posts() ) : ?>
      <div class="grid-x clients-wrap" >
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>       
        <?php if ( get_field( 'client_include_on_front' ) ): ?> 
          <div class="cell small-6 medium-4 large-3">
            <div class="client-logo"> 
              <img width="252" height="88" class="img-fluid" src="<?php the_field('client_logo'); ?>" alt=" "  > 
            </div>
          </div>
          <?php endif; ?>                
        <?php endwhile;?>
        </div>     
  <?php  endif; wp_reset_postdata();?> 
    </div> 
  </div> 
 
</section>