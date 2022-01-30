<?php
/**
 * Template part Carousel
 *
 * This is the template that displays images in a slider
 *
 *  
 */
?>
<?php
$args = array(
'post_type'     => 'testimonial',
 'posts_per_page'  => -1
);

// $the_query = new WP_Query(array(
//  'post_type'     => 'testimonial',
//  'posts_per_page'  => -1,
//  'meta_key'      => 'testimonial-order',
//  'orderby'     => 'meta_value',
//  'order'       => 'ASC'
// ));
// 
 $slider_query = new WP_Query($args);
 $slides = array(); 
 
?>

 <?php if ( $slider_query->have_posts() ) : ?> 
 <?php while ( $slider_query->have_posts() ) : $slider_query->the_post(); ?>
       
 <?php  $temp = array(); 
            $temp['firstname'] = get_field( 'testimonial_first_name' );
            $temp['text'] = get_field( 'testimonial_text' );
            $temp['image'] = get_field( 'testimonial_headshot' );
            $slides[] = $temp;
      
    endwhile; ?> 
    <?php endif; wp_reset_postdata();?>

    <style>
      .box-item img {
        width: 150px;
        height: auto;
      }
      .carousel-dark .carousel-caption {
          color: #000;
          bottom: 10%;
      }
      blockquote {
    margin: 0 0 1rem;
    padding: .5625rem 1.25rem 0 1.1875rem;
     
}
blockquote p::before {
 
 font-family: "Font Awesome 5 Free";
  font-weight: 900; 
  content: "\f10d";
  padding-right: 0.5rem;
}
.carousel-dark .carousel-indicators [data-bs-target] {
    background-color: #ccc;
}


    </style> 
<div id="testimonial" class="">
    <div class="container">
        <div class="row flex-column"> 
            <h3>what people say</h3>
            <h2 class="section-title">Testimonials</h2>          
        </div>
    
<?php if(count($slides) > 0) {   ?>

<div class="row justify-content-center"> 
  <div class="col-lg-6"> 
<div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">

        <?php for($i=0;$i < count($slides); $i++) {  ?>

        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i ?>" class="active" aria-current="true" aria-label="Slide <?php echo $i?>">          
        </button>
       
      <?php  } ?>

    </div> 

   <div class="carousel-inner">
     <?php 
     $i=0; 
     
      foreach($slides as $slide) { 
       extract($slide); ?>
      <?php   if($i == 0 ) { ?>
        <div class="carousel-item active"> 

           <img width="600" height="300" src="<?php echo get_template_directory_uri().'/img/slider-background.jpg';?>" class="d-block w-100" alt=""> 
           <div class="carousel-caption d-none d-md-block">
              <blockquote><p><?php echo $text; ?> </p>
              <div class="box-item row justify-content-center">
                <img width="150" height="150" src="<?php echo $image;?>" class="gs-square-shadow d-block" alt="">
              </div>
              <cite class="text-left"><?php echo $firstname; ?></cite>
            </blockquote>
              
          </div>
        </div>
     <?php    } 
      else { ?>
        <div class="carousel-item">
         <img width="600" height="300" src="<?php echo get_template_directory_uri().'/img/slider-background.jpg';?>" class="d-block w-100" alt=""> 
         <div class="carousel-caption d-none d-md-block">
            
              <blockquote><p><?php echo $text; ?> </p>
              <div class="box-item row justify-content-center">
                <img width="150" height="150" src="<?php echo $image;?>" class="gs-square-shadow d-block" alt="">
              </div>
              <!-- <h5><?php //echo $firstname; ?></h5> -->
              <cite class="text-left"><?php echo $firstname; ?></cite>
            </blockquote>
        </div> 
      </div>
     <?php   
     } 
     $i++;
     ?>
        
     
     <?php   } ?>

  </div> 
</div>
  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button> -->
  <!-- <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> -->
  </div>
</div>
<?php  } ?>
 

      <?php //else : ?>
        <?php //get_template_part( 'template-parts/content', 'none' ); ?>

      <?php //endif; wp_reset_postdata(); // End have_posts() check. ?>
      
</div>
</div>