<?php
/**
 * Template Name: Trials Page Template
 *
 * Template for displaying a about page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('inner');
$container = get_theme_mod( 'understrap_container_type' );
?>
 

<div class="wrapper" id="page-wrapper">

	<div class="" id="content" tabindex="-1">


			<main class="site-main" id="main">
               <?php
          while ( have_posts() ) {
            the_post();
            the_content(); 

          }

           
          ?>
       
  <div class="container">
    <div class="row">
      <div class="hero-inner col-md-6">
         
      
      </div>
      <div class="business-contact-form col-md-6">
        <div role="form" class="nf-form-light mt-3" id="" lang="en-US" dir="ltr" >
          
         <?php echo do_shortcode('[ninja_form id=1]'); ?>
 
         </div>
          </div>
        </div>
      </div>
     
 

 
 
    <div id="contact" class="mt-5" tabindex="-1">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
                <h2 class="section-title">Schedule a Consultation</h2><p><b>Tel: </b>317-333-5555</p><p><b>E-Mail: </b>sales@mygenuinehair.com</p><h4>Address:</h4> 
                <p>Indianapolis, IN</p>
                     
            </div>
            <div class="col-md-8 maps">
                 
            </div>


          </div>
      </div>
    </div>
</main> 
 </div>               
			<!-- #main -->

</div>

<?php
get_footer();