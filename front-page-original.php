<?php
/**
 * The main static front page templage
 *
 * This is the front page template file in a WordPress theme
 * It is used to display front page. * 
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */
// https://demo.bootstraptemple.com/travel/post.html
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//get_header('mega-menu');
get_header();
$container = get_theme_mod( 'understrap_container_type' );
 
?>

<?php //get_template_part( 'template-parts/content', 'hero'); ?>
<?php //get_template_part( 'loop-templates/content', 'frontpage' ); ?>

<div class="wrapper" id="page-wrapper">
	<!-- <div class="<?php //echo esc_attr( $container ); ?>" id="content" tabindex="-1"> -->
 <div class="" id="content" tabindex="-1">
		<main class="site-main" id="main">

		<?php while ( have_posts() ) : the_post(); ?>
<section class="section-wrapper container relative">
   
  <div class="row gx-5 justify-content-between align-items-center">
      <div class="col-sm-12 col-lg-5 col-xl-6">

        <!-- <h2 class="h5 primary">Personalized Hair Care Products</h2> -->

        <h2 class="display-3 mb-4 mt-0 lh-1"><span class="h3 text-muted block lh-1">Join the</span>Hair Science Movement!</h2>
        <p class="company">Our company <strong><span class="genuine">Genuine</span><span class="hair">Hair</span></strong> uses hair science to create personalized hair care products that target each individual hair type.</p>

        <p>Our natural hair care products are designed to serve all populations with hair and scalp challenges, which ultimately effect the way we view and feel about ourselves.</p>
         <a class="btn btn-outline-light btn-primary btn-lg mt-3" href="<?php echo home_url().'/shop/'?>" >Shop hair products customized just for you!</a> 
      </div>
      <div class="col-sm-12 col-lg-7 col-xl-6 relative ">
        <div class="bg-dark mb-4">
          <h2 class="h3 text-center pt-2 pb-2 text-capitalize text-white">Personalized Hair Care Products</h2>
        </div>
        <iframe loading="lazy" title="Botanika Beauty FULL Line Review" width="100%" height="100%" src="https://www.youtube.com/embed/qmASSbwity4?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="youtube-video"></iframe>

      </div>
  </div>
</section>
    
<section class="section-wrapper container relative background-gh">
   
  <div class="row gx-5 justify-content-between align-items-center">
     <div class="col-12 col-lg-6">
       <img src="<?php echo get_template_directory_uri().'/dist/img/stock-photo-side-view-of-positive-african-american-female-model-smiling-for-camera-and-touching-clean-curly-1738147088-transparent.png'; ?>" alt="" >

    </div>
    <div class="col-12 col-lg-6">
        
      <h2 class="statistics "><span class="circle3">1</span> out of <span class="circle3 circle5">5</span> consumers<span class="h4 pt-3" style="display:block">do not know what haircare products are <span class="hair-type" style="display: block;"><strong>best for their hair type.</strong></span></span></h2>
      <div class="spacer-16"></div>
       
      <h2 class="h4 raleway">We created the an all natural <span class="hair-type" style="display: block;"><strong>personalized haircare</strong> line for each hair type!</span></h2>
       <div class="spacer-16"></div>
      <p>We alleviate the burden of choosing the right product for your specific type of hair. Take our hair quiz and join our free trial to get a truly customized product.</p>
      <div class="spacer-16"></div>
      <a class="btn btn-outline-dark btn-lg fw-bolder" href="">Join our Trial</a>
     </div>
    
  </div>
 
</section>
<hr class="section-break">
<section class="section-wrapper container-fluid background-gradient">
  <h2 class="text-center">Haircare at a Glance</h2>
  <div class="container">
    <div class="row p-3 gy-5 justify-content-center">
      <div class="col-sm-12 col-lg-4">
        <div class="card border-light"> 
          <div class="card-body">
            <h3 class="h1 text-center"><span class="consumer">67%</span></h3>
            <p class="text-center">Black women agree that living a natural lifestyle is a top priority.</p>
          </div>
        </div> 
      </div>
       <div class="col-sm-12 col-lg-4"> 
        <div class="card border-light"> 
          <div class="card-body">
            <h3 class="h1 text-center"><span class="consumer">73%</span></h3>
            <p class="text-center">Black women agree they read ingredient labels to avoid certain chemicals.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-4">
        <div class="card border-light"> 
          <div class="card-body"> 
            <h3 class="h1 text-center"><span class="consumer">1 out of  5</span></h3>
            <p class="text-center">Consumers do not know what haircare products are best for their hair type.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
<hr class="section-break">		
<?php //get_template_part( 'loop-templates/content', 'quiz-for-email' ); ?>
<section class="section-wrapper container">
   
  <div class="row p-3 justify-content-center">
    <div class="col-sm-12 col-lg-4"> 
      <div class="card border-light"> 
        <div class="card-header d-flex align-items-center">  
          <h2>Our Company</h2>
        </div>
        <div class="card-body">    
          <p>GH believes everyone is gifted with “good” hair and works closely with nature to help you believe it too.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-lg-4">
      <div class="card border-light"> 
        <div class="card-header d-flex align-items-center">  
          <h2>Our Services and Products</h2>
        </div>
        <div class="card-body"> 
          <p>Our products and services are designed to serve all populations with hair and scalp challenges, which ultimately effect the way we view and feel about ourselves.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-lg-4">
      <div class="card border-light"> 
        <div class="card-header d-flex align-items-center">  
          <h2>Our Clients</h2>
        </div>
        <div class="card-body"> 
          <p>Our clients are those in need of haircare solutions created from ingredients of the earth that compliments their specific hair type.</p>
        </div>
      </div>
    </div>
  </div>
</section>
 
<section class="section-wrapper values container-full relative black-background">
   <div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 values-border pt-3 pb-3 d-flex justify-content-center"> 
      <h2><i class="me-2 fas fa-flask"></i>Science</h2>
       
     
    </div>
     <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 values-border pt-3 pb-3 d-flex justify-content-center">  
      <h2><i class="me-2 fas fa-certificate"></i>Quality</h2>
       
      
    </div>
     <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 values-border pt-3 pb-3  d-flex justify-content-center"> 
      <h2><i class="me-2 fas fa-house-user"></i>Community</h2>
      
    </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 values-border pt-3 pb-3 d-flex justify-content-center"> 
      <h2><i class="me-2 fas fa-heart"></i>Love</h2>
       
    </div>
  </div>
</div>
</section>
 
<?php $args = array (
    'post_type'     => array('testimonial'),
    'post_per_page' => -1    
    //'meta_key'      => 'client_order',
   // 'orderby'       => 'meta_value',
   // 'order'         => 'ASC'
  );         
            
  $query = new WP_Query($args);   
 
?> 
<?php if ( $query->have_posts() ) : ?> 
<section class="section-wrapper container">
<div class="gtco-testimonials">
  <h2>Our Satisfied Customers</h2>
  <div class="owl-carousel owl-carousel1 owl-theme mt-5">
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <div>
      <div class="card text-center">
         <?php $avatar = get_field( 'avatar' ); ?>
              <?php if ( $avatar ) : ?>
               
                <img class="avatar" src="<?php echo esc_url( $avatar['url'] ); ?>" alt="<?php echo esc_attr( $avatar['alt'] ); ?>" width="200" height="auto">
              <?php endif; ?> 

         
        <div class="card-body">
          <h5><?php echo the_field('first_name');?>             
          </h5>
          <blockquote class="blockquote card-text">"<?php echo the_field('quote'); ?>"</p>
        </div>
      </div>
    </div>
    <?php endwhile;?>
   
   
  </div>
</div>
</section>
<?php endif; wp_reset_postdata();?> 
 
 <hr class="section-break">
 
<section class="section-wrapper container relative background-gh">
   
  <div class="row gx-5 justify-content-between align-items-center">
     <div class="col-sm-12 col-lg-6">
       <img src="<?php echo get_template_directory_uri().'/dist/img/stock-photo-positive-young-black-female-with-bare-shoulders-and-beautiful-skin-touching-face-and-laughing-with-1692152608.jpg'; ?>" alt="" >

    </div>
    <div class="col-sm-12 col-lg-6"> 
 
      <h2 class="h3"><span class="consumer">73%</span> of black women agree that they read ingredient labels in haircare products so that they can <strong>avoid certain chemicals.</strong></h2> 
        
     </div>
    
  </div>
 
</section>
 
<section class="section-wrapper ingredients"> 
  <div class="row align-items-center" >
    <div class="col-sm-12">
      <h3 class="text-center mb-4">Guaranteed Free of These Ingredients</h3>
      <hr class="section-break mb-5">
      <ul class="row justify-content-evenly list-unstyled" >
        <li class="text-center col-sm-6 col-md-4 col-lg-2"><i class="pe-2 fas fa-leaf" ></i><strong>NO</strong> Harsh Sulfates </li>
         <li class="text-center col-sm-6 col-md-4 col-lg-2" ><i class="pe-2 fas fa-leaf"></i><strong>No</strong> Silicones </li>
         <li class="text-center col-sm-6 col-md-4 col-lg-2" ><i class="pe-2 fas fa-leaf"></i><strong>NO</strong> Parabens</li>
         <li class="text-center col-sm-6 col-md-4 col-lg-2"><i class="pe-2 fas fa-leaf"></i><strong>NO</strong> Phthalates </li>
         <li class="text-center col-sm-6 col-md-4 col-lg-2"><i class="pe-2 fas fa-leaf"  ></i><strong>NO</strong> Artificial Dyes </li>
         <li class="text-center col-sm-6 col-md-4 col-lg-2"><i class="pe-2 fas fa-leaf"  ></i><strong>NO</strong> DEA</li>
      </ul>
       <div class="spacer-16"></div>
    </div>
  </div> 
</section>
<section class="section-wrapper">
  <div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h2 class="text-center mb-5">Latest "Inspired by You" Collection</h2>
      <h3 class="h4 text-center mt-2 mb-4">Keep up to date with our newest Hair Care Products!</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <p>Lorem ipsum dolor sit amet, consectetur adipisifwcing elit, sed do eiusmod tempor incididunt ut labore et dolore roipi magna aliqua. Ut enim ad minim veeniam, quis nostruklad exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="col-lg-6">
      <p>Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptartem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
    </div>
  </div>
  <div class="spacer-16"></div>
  <div class="row justify-content-center">
    <div class="col-sm-12 col-lg-6 ">
      <h4><strong>Subscribe Now</strong></h4>
      <form>       
      <input type="email" id="email" name="email" class="" placeholder="name@example.com">
      <input type="submit" class="btn btn-outline-light btn-primary" value="Get Inspired">       
       <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
       <div class="spacer-16"></div>
      
    </form> 
    </div>
  </div>
  </div>
     
</section>

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
 