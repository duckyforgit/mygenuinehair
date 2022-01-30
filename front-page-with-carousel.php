<?php
/**
 * Template Name: FrontPage with carousel
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//get_header('mega-menu');
get_header();
$container = get_theme_mod( 'understrap_container_type' );
 
?>
<?php get_template_part( 'template-parts/content', 'hero'); ?>
  
<div class="wrapper" id="page-wrapper">
 
	<!-- <div class="<?php //echo esc_attr( $container ); ?>" id="content" tabindex="-1"> -->
 <div class="container-fluid" id="content" tabindex="-1">
	 

		<main class="site-main" id="main">

		<?php while ( have_posts() ) : the_post(); ?>
    

		<?php //get_template_part( 'loop-templates/content', 'page' ); ?>
   


		 <div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
				
				<?php
					// the_content(); ?>
    
 <section class="container">
 
     <div class="row align-items-center"  data-aos="fade-down-right" data-aos-duration="500" data-aos-easing="ease-in-out">
    <div class="col">
     <img src="<?php echo get_template_directory_uri().'/dist/img/instyle_180x-white.png';?>" alt="">
    </div>
    <div class="col">
      <img src="<?php echo get_template_directory_uri().'/dist/img/instyle_180x-white.png';?>" alt="">
    </div>
    <div class="col">
      <img src="<?php echo get_template_directory_uri().'/dist/img/instyle_180x-white.png';?>" alt="">
    </div>
    <div class="col">
      <img src="<?php echo get_template_directory_uri().'/dist/img/instyle_180x-white.png';?>" alt="">
    </div>
  </div>
</section>
<section class="container-fluid mb-5" style="background-color:#f3f3f3"> 
 
 
  <div class="container"> 
  <div class="row align-items-center">
<style>.video-border {
    border: 1px solid #aaa;
    padding: 2rem;
}
 
.video-wrapper {
    padding: 0;
    position: relative;
    margin-top: 0;
}
.youtube-video {
      position: absolute; 
    top: 0;
    left: 0;
    width: 100%;
    height: 375px;
 
}
</style> 
      <div class="col-lg-5 p-4 d-flex flex-column position-static ">
      <h2 class="h3">Our company Genuine Hair uses <a href="<?php echo home_url().'/about/';?>"><span style="font-style:italic; color:#91a74f;">hair science</span></a> to create personalized hair care products that target each individual hair type.</h2>
      <p>Our natural hair care products are designed to serve all populations with hair and scalp challenges, which ultimately effect the way we view and feel about ourselves.</p>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
   <!--    <img src="<?php //echo get_template_directory_uri().'/img/stock-photo-frour-black-cream-jars-with-silver-covers-are-standing-on-a-table-against-a-black-background-d-772475902-transparent.png';?>" alt="" > -->
   <div class="video-wrapper"> 
    <iframe width="100%" height="400" src="https://www.youtube.com/embed/tm1G--USXIk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div> 
  </div> 
 </div>
 
</section>
 
<!-- 	</div>  -->
  <!--Main Navigation-->
<section class="container">
   
  <div class="row justify-content-center">
    <div class="col-12">
       <?php get_template_part( 'loop-templates/content', 'quiz'); ?>
    </div>
  </div>
 
</section> 

<div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-6" id="postsDiv">
 <?php //get_template_part( 'loop-templates/content', 'product'); ?>
<!-- adds posts using js and fetch api -->
            </div>
</div>
<?php 
 $args = array (
      'post_type'     => 'product',
      'post_per_page' => -1
     // 'meta_key'      => 'testimonial_order',
     // 'orderby'       => 'meta_value',
     // 'order'         => 'ASC',
     // 'page'          => 1
  );         
            
  $query = new WP_Query($args);  

 // print_r( $query); ?> 
<div class="row justify-content-center">
    <div class="col-sm-12 col-md-6">
<section class="container">
   <?php if ( $query->have_posts() ) : 
   // $counter = 0; ?>
    
      
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>


  <div class="carousel-inner">
    <?php while ( $query->have_posts() ) : $query->the_post(); ?> 
    <div class="carousel-item active">
     <?php the_post_thumbnail(); ?>
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
  <?php endwhile;?>
  
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php endif; wp_reset_postdata();?>
</section> 
    
  
 
<style>.slider {
    width: 1050px;
    margin: 0 auto;
}
</style>

 <h3 class="text-center">Our Recent Products</h3>
<!-- <div class="slider">

  <div>
    <img src="<?php echo get_template_directory_uri().'/dist/img/GH shampoo bottle  copy.jpg' ?>" class="card-img-top" alt="...">
    <h5>GenuineHair Shampoo</h5>
    <p>Antioxidant</p>
  </div>
  <div>
   <img src="<?php echo get_template_directory_uri().'/dist/img/GH shampoo bottle  copy.jpg' ?>" class="card-img-top" alt="...">
     <h5>GenuineHair Conditioner</h5> <p>Replenish</p>
  </div>
  <div>
    <img src="<?php echo get_template_directory_uri().'/dist/img/GH shampoo bottleB.jpg' ?>" class="card-img-top" alt="...">
     <h5>GenuineHair </h5> <p>Strength</p>
  </div>
  <div>
    <img src="<?php echo get_template_directory_uri().'/dist/img/GH shampoo bottle  copy.jpg' ?>" class="card-img-top" alt="...">
     <h5>GenuineHair </h5> <p>Amino Acids</p>
  </div><div>
    <img src="<?php echo get_template_directory_uri().'/dist/img/GH shampoo bottleB.jpg' ?>" class="card-img-top" alt="...">
     <h5>GenuineHair </h5> <p>Antioxidant</p>
  </div>
  <div>
    <img src="<?php echo get_template_directory_uri().'/dist/img/GH shampoo bottle  copy.jpg' ?>" class="card-img-top" alt="...">
     <h5>GenuineHair </h5> <p>Antioxidant</p>
  </div>
</div> -->
 
 </section>

 <section class="container">
  <div >
     
  
 
<style>.slider {
    width: 1050px;
    margin: 0 auto;
}
</style>
<br>
<br>
<br>
<?php get_template_part( 'template-parts/content', 'testimonial'); ?> 
<br>
<br>
<br>
<!-- <div class="slider">
  
  <div>
   <img src="<?php echo get_template_directory_uri().'/dist/img/labels.png' ?>" class="card-img-top" alt="...">
  </div>
  <div>
    <img src="<?php echo get_template_directory_uri().'/dist/img/026205671.jpg' ?>" class="card-img-top" alt="...">
  </div>
  <div>
   <img src="<?php echo get_template_directory_uri().'/dist/img/026205663.jpg' ?>" class="card-img-top" alt="...">
  </div>
  <div>
    <img src="<?php echo get_template_directory_uri().'/dist/img/026205667.jpg' ?>" class="card-img-top" alt="...">
  </div>
  <div>
   <img src="<?php echo get_template_directory_uri().'/dist/img/026205663.jpg' ?>" class="card-img-top" alt="...">
  </div>
</div> -->
</div>
 </section>
<section class="container">
  <?php $productArgs = array (
      'post_type'     => 'product',
      'post_per_page' => 10,
      //'meta_key'      => 'testimonial_order',
     // 'orderby'       => 'meta_value',
     // 'order'         => 'ASC',
     // 'page'          => 1
  );         
            
    
   
  $productquery = new WP_Query( $productArgs ); 
              

   
   if ( $productquery->have_posts() ) : 
     ?>
   

  
               
 <!-- <div class=" single-item slick-slide slick-active slick-dotted">
    
       <?php while ( $productquery->have_posts() ) : $productquery->the_post(); ?> 
         <div class="card" style="max-width:300px">
      <?php echo the_post_thumbnail('medium'); ?> 
      <div class="card-body">
        <h5 class="card-title"><?php the_title();?></h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
    <?php endwhile; ?>
     
</div> -->
  
<?php endif; wp_reset_postdata(); ?>
</section>  

		</div><!-- /#post-<?php the_ID(); ?> -->
	 
 
	 
 <?php endwhile; // end of the loop. ?>


			
			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php  //get_template_part( 'global-templates/right-sidebar-check' ); ?>

		 

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); 
 