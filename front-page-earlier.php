<?php
/**
 * Template Name: FrontPage Earlier
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
<style>
  .relative {
    position: relative;
  }
</style>
<?php //get_template_part( 'template-parts/content', 'hero'); ?>
  
<div class="wrapper" id="page-wrapper">
 
	<!-- <div class="<?php //echo esc_attr( $container ); ?>" id="content" tabindex="-1"> -->
 <div class="container" id="content" tabindex="-1">
	 

		<main class="site-main" id="main">

		<?php while ( have_posts() ) : the_post(); ?>
    
<!-- <section class="container relative">
   
  <div class="row justify-content-center">
    <div class="col-12">
       <?php //get_template_part( 'loop-templates/content', 'quiz-for-email'); ?>
    </div>
  </div>
 
</section>  -->
		<?php get_template_part( 'loop-templates/content', 'frontpage' ); ?>
<?php //get_template_part( 'loop-templates/content', 'quiz-for-email' ); ?>

  
<!-- <div class="gtco-testimonials">
  <h2>Our Satisfied Customers</h2>
  <div class="owl-carousel owl-carousel1 owl-theme">
    <div>
      <div class="card text-center"><img class="card-img-top" src="<?php //echo get_template_directory_uri().'/dist/img/joseph-gonzalez-iFgRcqHznqg-unsplash.jpg'; ?>" alt="">
        <div class="card-body">
          <h5>Ronne<br />
            <span> MyGenuineHair Customer </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div> -->
   <!--  <div>
      <div class="card text-center"><img class="card-img-top" src="<?php //echo get_template_directory_uri().'/dist/img/chase-fade-Qk8o8S_PMTY-unsplash.jpg'; ?>" alt="">
        <div class="card-body">
          <h5>Missy<br />
            <span> MyGenuineHair Customer </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
    <div>
      <div class="card text-center"><img class="card-img-top" src="<?php //echo get_template_directory_uri().'/dist/img/joseph-gonzalez-iFgRcqHznqg-unsplash.jpg'; ?>" alt="">
        <div class="card-body">
          <h5>Mark<br />
            <span> MyGenuineHair Customer </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
    <div>
      <div class="card text-center"><img class="card-img-top" src="<?php //echo get_template_directory_uri().'/dist/img/member3.jpg'; ?>" alt="">
        <div class="card-body">
          <h5>Hanna<br />
            <span> Project Manager </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<hr>
 <br><br>
<div class="row align-items-center">-->
 <!--  <div class="col-sm-12 col-md-2">
  <img loading="lazy" width="300" height="180" src="//localhost:3000/genuine/wp-content/uploads/2021/07/leaves-300x180.png" alt="" class="wp-image-379 size-medium" srcset="//localhost:3000/genuine/wp-content/uploads/2021/07/leaves-300x180.png 300w, //localhost:3000/genuine/wp-content/uploads/2021/07/leaves-1024x614.png 1024w, //localhost:3000/genuine/wp-content/uploads/2021/07/leaves-768x461.png 768w, //localhost:3000/genuine/wp-content/uploads/2021/07/leaves-600x360.png 600w, //localhost:3000/genuine/wp-content/uploads/2021/07/leaves.png 1340w" sizes="(max-width: 250px) 100vw, 250px"> 
</div> -->
  
  <!--  <div class="col-sm-12">
      <h5 class="has-text-align-center">Guaranteed Free of These Ingredients</h5>
      <br>
      <ul class="d-flex justify-content-evenly" style="list-style-type: none;">
        <li style="padding-right:1rem"><i class="fas fa-leaf" style="padding-right:0.5rem"></i><strong>NO</strong> Harsh Sulfates </li>
        <li style="padding-right:1rem"><i class="fas fa-leaf" style="padding-right:0.5rem"></i><strong>No</strong> Silicones </li>
        <li style="padding-right:1rem"><i class="fas fa-leaf" style="padding-right:0.5rem"></i><strong>NO</strong>&nbsp;Parabens</li>
        <li style="padding-right:1rem"><i class="fas fa-leaf" style="padding-right:0.5rem"></i><strong>NO</strong>&nbsp;Phthalates </li>
        <li style="padding-right:1rem"><i class="fas fa-leaf" style="padding-right:0.5rem"></i><strong>NO</strong>&nbsp;Artificial Dyes </li>
        <li style="padding-right:1rem"><i class="fas fa-leaf" style="padding-right:0.5rem"></i><strong>NO</strong>&nbsp;DEA</li>
      </ul>
      <br><br>
    </div>
  </div>  -->

		<!--  <div id="post-<?php the_ID(); ?>" <?php //post_class( 'content' ); ?>> -->
				
				<?php
					// the_content(); ?>
    
 <!-- <section class="container">
 
     <div class="row align-items-center"  data-aos="fade-down-right" data-aos-duration="500" data-aos-easing="ease-in-out">
    <div class="col">
     <img src="<?php //echo get_template_directory_uri().'/dist/img/instyle_180x-white.png';?>" alt="">
    </div>
    <div class="col">
      <img src="<?php //echo get_template_directory_uri().'/dist/img/instyle_180x-white.png';?>" alt="">
    </div>
    <div class="col">
      <img src="<?php //echo get_template_directory_uri().'/dist/img/instyle_180x-white.png';?>" alt="">
    </div>
    <div class="col">
      <img src="<?php //echo get_template_directory_uri().'/dist/img/instyle_180x-white.png';?>" alt="">
    </div>
  </div>
</section> -->

<?php //the_content();?>
   
 
<!-- 	</div>  -->
  <!--Main Navigation-->
 


 

 



		<!-- </div> --><!-- /#post-<?php the_ID(); ?> -->
	 
 
	 
 <?php endwhile; // end of the loop. ?>

			
			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php  //get_template_part( 'global-templates/right-sidebar-check' ); ?>

		 

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); 
 