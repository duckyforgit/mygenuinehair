<?php
/**
 * Template Name: Contact Page Template
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
               <h2>Be Inspired!</h2>
<div id="hero" class="w-100 bg-contact-image" style="background-image: url('http://localhost:8080/mygenuinehair/wp-content/themes/bootstrap5/img/contact.png');background-size:contain;background-repeat:no-repeat">
  <div class="container">
    <div class="row">
      <div class="hero-inner col-md-6">
         
      
      </div>
      <div class="business-contact-form col-md-6">
        <div role="form" class="nf-form-light mt-3" id="" lang="en-US" dir="ltr" >
          
         <?php //echo do_shortcode('[ninja_form id=1]'); ?>
 
         </div>
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
                 <form action="" method="post" name="contact-me">
    <div class="form-field">    
        <label>Name: </label>
        <input name="name" type="text" placeholder="Type your name" required>
    </div>
    <div class="form-field">    
        <label>Email: </label>
        <input name="email"  type="email" placeholder="Type a valid email" required>
    </div>
    <div class="form-field">    
        <label>Name: </label>
        <textarea name="comment" placeholder="Type your comment" required></textarea>
    </div>
    <input type="hidden" name="action" value="send_form" style="display: none; visibility: hidden; opacity: 0;">
    <button type="submit">Send message!</button>
</form>
            </div>

<!-- https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19869.366108759223!2d-0.177366!3d51.500909!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5efe9cee35da2fd9!2sRoyal%20Albert%20Hall!5e0!3m2!1sen!2ske!4v1573571018721!5m2!1sen!2ske-->
          </div>
      </div>
    </div>
</main></div>
                
			<!-- #main -->

</div>

<?php
get_footer();