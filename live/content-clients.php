<?php
/**
 * The default template for displaying client logos
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<?php  $args = array (
    'post_type'     => array('client'),
    'post_per_page' => -1,    
    'meta_key'      => 'client_order',
    'orderby'       => 'meta_value',
    'order'         => 'ASC'
  );         
            
  $query = new WP_Query($args); 
  ?>
<section class="intro section-container">
  
	<div class="header-overlay"></div>
	<div class="section-grid-container">
		<div class="grid-x grid-padding-x align-middle">
			<div class="cell small-12"> 
			<header class="content-wrapper"> 
				<h2 class="heading-primary text-center">Clients</h2>  
			</header>
			</div>
		 </div>
		  <div class="grid-x grid-margin-x align-spaced align-middle small-up-2 medium-up-4"> 
            <?php if ( $query->have_posts() ) : 
                ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?> 
                    
          <div class="cell"> 
                      
            <?php if ( get_field('client_logo') )  : ?>
              <img class="featured-image-large" src="<?php the_field('client_logo') ?>" alt="Deliberate Doing How We Help Our Clients" width="200"  > 
           
          	<?php endif; ?>
                              
                                
                              
                           
           </div>  
            <?php endwhile;?>
           <?php  endif; wp_reset_postdata(); ?> 
         </div>  
	</div> 
</section> 