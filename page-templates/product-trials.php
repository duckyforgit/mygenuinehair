<?php
/**
 * Template Name: Product Trials Page Template
 *
 * Template for displaying a product trials page.
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
                
<div id="hero" class="w-100 bg-contact-image" style="background-image: url('http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/contact.png');background-size:contain;background-repeat:no-repeat">
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
   </div>    
 

 
 
     
</main></div>
                
			<!-- #main -->

</div>

<?php
get_footer();