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
/* see https://sampsoncoachingandconsulting.com/ *
https://codepen.io/ramenhog/pen/MpORPa */
 // $clients_title  = workroom1128_get_option( 'clients_custom_title_one');
 $clients_title  = foundationpress_get_option( 'clients_custom_title_one');
   $args = array (
    'post_type'     => array('client'),
    'post_per_page' => -1,    
    'meta_key'      => 'client_order',
    'orderby'       => 'meta_value',
    'order'         => 'ASC'
  );         
            
  $query = new WP_Query($args);   
  ?>
  
 <section class="clients-section-container">  
    
 
<style>
.flex-gallery {
  display:flex; 
  flex-direction:row;
  justify-content:center;
  align-items:center;
  flex-wrap:wrap;
}
 .flex-gallery ul {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.flex-gallery li {
  
  height: auto;
  flex-grow: 1;
  max-height: 200px;
  margin:  10px;
}
.flex-gallery li:first-child img {
  object-fit: contain; 
  height: 200px;
  width: 266px;
}

.flex-gallery li:nth-child(2) {
  width: 175px;
  height: 200px;
}
.flex-gallery li:nth-child(3),
.flex-gallery li:nth-child(4),
.flex-gallery li:nth-child(5)  
 {
  width: 175px;
  height: 200px; 
}
.flex-gallery li:last-child {  
   width: 175px;
    
} 
.flex-gallery img {  
  object-fit: contain;
  vertical-align: bottom;
  width: 175px; 
  height: 200px;
   
}
.flex-gallery li:first
.flex-gallery img:hover {
    transform: scale(1.25);
}
/* Portrait */
@media (max-aspect-ratio: 1/1) {
  .flex-gallery ul {
    margin: 0;
    padding: 0;
  }
 
  .flex-gallery li:first-child {
    max-width: fit-content;
  }
  .flex-gallery li:first-child img {
    object-fit: contain;
    height: 200px;
    width: 226px;
  }
}
/* Short screens */
@media (max-height: 480px) {
  .flex-gallery li {    
    height: auto;
  }
}
/* Smaller screens in portrait*/
@media (max-aspect-ratio: 1/1) and (max-width: 480px) {
  .flex-gallery ul {
    flex-direction: row;
  }
  .flex-gallery li {
    height: auto;
    width: 100%;
    max-width: 175px;
  }
  .flex-gallery img {
    width: 100%;    
    max-height: 200px;
    min-width: 0;
  }
     
}
</style>
    <div class="flex-gallery">
    <?php if ( $query->have_posts() ) : ?>
      <ul>
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>       
        <?php if ( get_field( 'client_include_on_front' ) ): ?> 
            <li>
              <img src="<?php the_field('client_logo'); ?>" alt=" "   height="200" width="175">
            </li>
          <?php endif; ?>                
        <?php endwhile;?>
      </ul>
    <?php  endif; wp_reset_postdata();?> 
  </div> 
 
</section>