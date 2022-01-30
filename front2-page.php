<?php
/**
 * Template Name: FrontPage2
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
					//the_content(); ?>
    
<section>
  <div class="container ">
     <div class="row align-items-center">
    <div class="col">
     <img src="<?php echo get_template_directory_uri().'/img/instyle_180x-white.png';?>" alt="">
    </div>
    <div class="col">
      <img src="<?php echo get_template_directory_uri().'/img/instyle_180x-white.png';?>" alt="">
    </div>
    <div class="col">
      <img src="<?php echo get_template_directory_uri().'/img/instyle_180x-white.png';?>" alt="">
    </div>
    <div class="col">
      <img src="<?php echo get_template_directory_uri().'/img/instyle_180x-white.png';?>" alt="">
    </div>
  </div>
 
</div>
<div class="container-fluid mb-5" style="background-color:#f3f3f3">
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
</div>
</section>
<section>
  <?php get_template_part( 'template-parts/content', 'carousel'); ?>
  <?php //get_template_part( 'template-parts/content', 'testimonial'); ?>
</section>
  
<!-- <section>
  <div class="container ">
  <div class="row justify-content-center">
    <div class="col-12">
       <?php //get_template_part( 'loop-templates/content', 'quiz'); ?>
    </div>
  </div>
 </div>
</section>  
  
<section> 
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="<?php //echo get_template_directory_uri().'/img/GenuineHairProduct.jpg' ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Product 1</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?php //echo get_template_directory_uri().'/img/GenuineHairProduct.jpg' ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Product 2</h5>
        <p class="card-text">We use all natural ingredients like Aloe Vera and Hemp. You will never find any artificial items in Genuine Hair. </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?php //echo get_template_directory_uri().'/img/GenuineHairProduct.jpg' ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Product 3</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
 
</div>
</section> -->
<section>
   <img src="<?php echo get_template_directory_uri().'/img/popular-products.jpg' ?>" class="card-img-top" alt="...">
</section>
<section>
  <?php $args = array (
      'post_type'     => array('product'),
      'post_per_page' => -1,
      //'meta_key'      => 'testimonial_order',
     // 'orderby'       => 'meta_value',
     // 'order'         => 'ASC',
     // 'page'          => 1
  );         
            
  $query = new WP_Query($args);   

  ?>
   
   <?php //if ( $query->have_posts() ) : 
     ?>
   

 <div class="container" style="background-color:white"> 


<div class="slider multiple-items">
  <div>your content</div>
  <div>your content</div>
  <div>your content</div>
</div>
    

<!--  <div class="heroslider slider multiple-items slick-slider slick-dotted">
    
       <?php //while ( $query->have_posts() ) : $query->the_post(); ?> 
         <div class="card">
      <img src="<?php //echo get_thumbnail(); ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php the_title();?></h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div> -->
    <?php //endwhile; ?>
     
<!-- </div>-->
</div>  
<?php //endif; ?>
</section>

<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
  Tooltip on top
</button>
<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
  Tooltip on right
</button>
<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
  Tooltip on bottom
</button>
<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
  Tooltip on left
</button>
 <div class="container">
              <div class="row">
                <div class="col-sm">
                   <!-- Button trigger modal -->
           <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



  <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
                        </div>
                    </div> <!-- container -->
	</div> 
  <!--Main Navigation-->


		</div><!-- /#post-<?php the_ID(); ?> -->
	 
 
	 
 

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>

		 

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); 
 