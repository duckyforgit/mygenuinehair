<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="container-fluid wrapper" id="wrapper-footer" >

	<div class="<?php echo esc_attr( $container ); ?>">

	 
  
<footer id="footer" class="main-footer footer-1">
<div class="main-footer widgets-dark typo-light">
<div class="container">
<div class="row">
  
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget subscribe no-box">
<h5 class="widget-title">MY GENUINE HAIR<span></span></h5>
<p>About the company, little discription will goes here.</p>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title">Quick Links<span></span></h5>
<ul class="thumbnail-widget">
<li>
<div class="thumb-content"><a href="#.">Get Started</a></div>	
</li>
<li>
<div class="thumb-content"><a href="#.">About</a></div>	
</li>
<li>
<div class="thumb-content"><a href="#.">Inspired by You Collection</a></div>	
</li>
<li>
<div class="thumb-content"><a href="#.">Contact</a></div>	
</li>
<li>
<div class="thumb-content"><a href="#.">Inspired By Stories</a></div>	
</li>
<li>
<div class="thumb-content"><a href="#.">Product Trials</a></div>	
</li>
<li>
<div class="thumb-content"><a href="#.">Login</a></div>	
</li>
</ul>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title">Get Started<span></span></h5>
<p>Become a part of an exciting new trial.</p>
<a class="btn btn-footer" href="#." target="_blank">Register Now</a>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">

<div class="widget no-box">
<h5 class="widget-title">Contact Us<span></span></h5>

<p><a href="mailto:info@mygenuinehair.com" title="glorythemes">info@mygenuinehair.com</a></p>
<ul class="social-footer2">
<li class=""><!-- <iframe width="100%" height="auto" src="https://www.youtube.com/embed/tm1G--USXIk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
	</li>
</ul>
</div>
</div>

</div>
</div>
</div>
  
<div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<p>Copyright My Genuine Hair, LLC © 2021. All rights reserved.</p>
</div>
</div>
</div>
</div>
  
  
</footer>

						<?php //understrap_site_info(); ?>

			 

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

