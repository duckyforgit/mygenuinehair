<?php
/**
 * Template Name: Corporate Page Template
 *
 * Template for displaying a corporate page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
 

<div class="wrapper" id="page-wrapper">

	<div class="" id="content" tabindex="-1">


			<main class="site-main" id="main">
 <?php       
     $header_image_data = get_theme_mod( 'header_image_data' );
   //  print_r($header_image_data);
     $headerUrl = $header_image_data->url;
    //  print_r($headerUrl);
   // echo wp_get_attachment_image( $header_image_data->attachment_id, 'full', '', ["class" => "banner-image"] ); ?>               
<div id="hero" class="w-100" style="background-image: url(<?php echo $headerUrl ?>)">
  <div class="container">
    <div class="row">
      <div class="hero-inner col-md-6">
        <div class="title">
          <h3>Push your main message here</h3><h1>Corporate landing page heading</h1><p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
        </div>
        <div class="links">
          <a class="btn btn-primary" href="#">read more</a>            
          <a class="btn btn-light" href="#">Contact Us</a>            
        </div>
      </div>
      <div class="business-contact-form col-md-6">
        <div role="form" class="wpcf7" id="wpcf7-f14-o1" lang="en-US" dir="ltr">
          <div class="screen-reader-response"></div>
            <form action="/overstrap-corporate/#wpcf7-f14-o1" method="post" class="wpcf7-form" novalidate="novalidate">
              <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="14">
                <input type="hidden" name="_wpcf7_version" value="5.1.4">
                <input type="hidden" name="_wpcf7_locale" value="en_US">
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f14-o1">
                <input type="hidden" name="_wpcf7_container_post" value="0">
              </div>
              <p><label> Your Name (required)<br>
              <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
              <p><label> Your Email (required)<br>
                  <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
              <p><label> Subject<br>
                  <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
              <p><label> Your Message<br>
                  <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
              <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
              <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>        </div>
              </div>
          </div>
        </div>
        <div id="services" class="" tabindex="-1">
          <div class="container">
            <div class="row">
        
              <h3>services we offer</h3><h2 class="section-title">What we do</h2>          </div>
              <div class="row">
                <div class="col-md-4 service">
                  <div class="service-icon">
                    <img  class=" lazyloaded" src="<?php echo get_template_directory_uri().'/img/cosmetic-containers.jpg'; ?>"> 
                  </div>
                  <h3 class="service-title">Cloud Infrastructure Care</h3><p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
                </div>
                <div class="col-md-4 service">
                  <div class="service-icon">
                    <i class="fas fa-camera"></i>
                  </div>
                  <h3 class="service-title">Mobile assitance</h3>
                  <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
                </div>
                <div class="col-md-4 service">
                  <div class="service-icon">
                    <img  class=" lazyloaded" src="<?php echo get_template_directory_uri().'/img/cosmetic-containers.jpg'; ?>">
                  </div>
                  <h3 class="service-title">Customer Strategy &amp; Marketing</h3><p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
                </div>
                <div class="col-md-4 service">
                  <div class="service-icon"><img data-src=" " class=" ls-is-cached lazyloaded" src=" ">
                  </div>
                  <h3 class="service-title">Reputation Marketing</h3>
                  <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
                </div>
                <div class="col-md-4 service">
                  <div class="service-icon">
                    <img data-src=" " class=" ls-is-cached lazyloaded" src=" ">
                  </div>
                  <h3 class="service-title">Multichannel Marketing</h3>
                  <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
                </div>
                <div class="col-md-4 service">
                  <div class="service-icon"><img data-src=" " class=" ls-is-cached lazyloaded" src=" share.png">
                  </div>
                  <h3 class="service-title">100% money back guerantee</h3><p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
                </div>         
            </div>
        </div>
    </div>
<div id="stats" class="" style="background-image:url();">
    <div class="container">
        <div class="row">
            <div class="col"><h5>900</h5><span>Attendees Last Year</span></div><div class="col"><h5>27</h5><span>International Sponsors</span></div><div class="col"><h5>12</h5><span>Workshops offered</span></div><div class="col"><h5>36</h5><span>Speakers Booked</span></div><div class="col"><h5>1000</h5><span>Seats booked already</span></div>         
            </div>
        </div>
    </div>

<div id="about" class="">
    <div class="container-fluid">
        <div class="row">
                        <div class="col w-100 imgr" style="background-image:url(<?php echo site_url().'/wp-content/themes/understrap/img/banner.jpg';?> );"></div>
                        <div class="col content">
                <h3>who we are</h3><h2 class="section-title">About Us</h2><p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.&nbsp;Nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p><a href="#">Read More</a>            </div>
        </div>
    </div>
</div>
<div id="teams" class="">
    <div class="container">
      <div class="row flex-column"> 
        <h3>experiece team</h3>
        <h2 class="section-title">Our team</h2>          
      </div>
          <div class="row">
          <div class="col-md-3 team"><div class="w-100 team-avatar"><img data-src=" <?php echo get_template_directory_uri().'/img/headshot1.jpg';?>" class="w-100 lazyloaded" src="<?php echo get_template_directory_uri().'/img/headshot1.jpg';?>">
          </div><div class="team-info"><h3>Philip Nkube</h3><h5>Managing Director</h5></div></div><div class="col-md-3 team"><div class="w-100 team-avatar"><img data-src=" <?php echo get_template_directory_uri().'/img/headshot1.jpg';?>" class="w-100 lazyloaded" src=" <?php echo get_template_directory_uri().'/img/headshot1.jpg';?>">
          </div><div class="team-info"><h3>Martin Sebs</h3>
            <h5>Finance Director</h5>
          </div>
        </div>
        <div class="col-md-3 team">
          <div class="w-100 team-avatar">
            <img data-src="<?php echo get_template_directory_uri().'/img/headshot1.jpg';?>" class="w-100 lazyloaded" src="<?php echo get_template_directory_uri().'/img/headshot1.jpg';?>">
          </div>
          <div class="team-info"><h3>Anna Johnson</h3>
            <h5>HR</h5>
          </div>
        </div>
        <div class="col-md-3 team">
          <div class="w-100 team-avatar">
            <img data-src="<?php echo get_template_directory_uri().'/img/headshot1.jpg';?>" class="w-100 lazyloaded" src="<?php echo get_template_directory_uri().'/img/headshot1.jpg';?>">
          </div>
          <div class="team-info"><h3>Sanjay Hill</h3><h5>Engineer</h5></div></div>         
        </div>
      </div>
    </div>

<div id="testimonial" class="">
    <div class="container">
        <div class="row flex-column"> 
            <h3>what people say</h3>
            <h2 class="section-title">Testimonials</h2>          
        </div>
        <div class="row">
          <div class="col-md-6 testimonial"><p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
            <div class="test-meta"><span>Davis Doo</span><img data-src="img/headshot1.jpg" class="photo lazyloaded" src="<?php echo get_template_directory_uri().'/img/headshot1.jpg';?>">
            </div>
          </div>
          <div class="col-md-6 testimonial"><p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
            <div class="test-meta"><span>Pradeep Sing</span>
                <img data-src="<?php echo get_template_directory_uri().'/img/headshot1.jpg';?>" class="photo lazyloaded" src="<?php echo get_template_directory_uri().'/img/headshot1.jpg';?>">
            </div>
          </div>         
        </div>
      </div>
    </div>
    <div id="contact" class="" tabindex="-1">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
                <h2 class="section-title">Get In Touch</h2><p><b>Tel: </b>+44 20 123 456</p><p><b>E-Mail: </b>sales@thiswebsite.com</p><h4>Address:</h4><p>107 Charing Cross Rd, Soho,</p>
                <p>London WC2H 0DT,</p>
                <p>United Kingdom</p>        
            </div>
            <div class="col-md-8 maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190228.59819253837!2d-87.76507869619199!3d41.842898862633525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2ca687332bf5%3A0x64d3fefce3a4a51!2sCloud%20Gate!5e0!3m2!1sen!2sus!4v1614956543079!5m2!1sen!2sus" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
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