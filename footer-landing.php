<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<div class="container-fluid wrapper" id="wrapper-footer" >
  
<footer id="footer" class="main-footer footer-1">
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

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

