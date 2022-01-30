<?php
/**
 * Template Name: Products Page Template
 *
 * Template for displaying a corporate page.
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
     $header_image_data = get_theme_mod( 'header_image_data' );
   //  print_r($header_image_data);
     $headerUrl = $header_image_data->url;
    //  print_r($headerUrl);
   // echo wp_get_attachment_image( $header_image_data->attachment_id, 'full', '', ["class" => "banner-image"] ); ?>               
 <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <div id="filters" class="">  
<?php 
  $categories = get_categories();  

  // search for space and replace with hyphen?>
        <h1 class="my-4">Genuine Hair</h1>
        <div class="blog-selectors button-group filters-button-group">
              <button class=" button is-checked" data-filter="*">All</button>
              <?php  foreach ( $categories as $category ) : ?>
                <?php if ($category !== "Uncategorized" ) : ?>
                <button class="button" data-filter=".<?php echo $category->slug; ?>"><?php echo $category->name; ?>
                </button>
              <?php endif; ?>
              <?php  endforeach;   ?>
          </div>  
 
        
        <div class="list-group">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>

      </div>
    </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators2" class="carousel slide my-4" data-ride="carousel">
          <div class="carousel-indicators">
             <button type="button" data-bs-target="#carouselExampleIndicators2"    
       data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators2"    
       data-bs-slide-to="1" class="" aria-current="true" aria-label="Slide 1"></button>
       <button type="button" data-bs-target="#carouselExampleIndicators2"    
       data-bs-slide-to="2" class="" aria-current="true" aria-label="Slide 2"></button>
          </div>
          <div class="carousel-inner" role="listbox">
            
            <div class="carousel-item active">
              <img src="<?php echo get_template_directory_uri().'/img/stock-photo-side-view-of-positive-african-american-female-model-smiling-for-camera-and-touching-clean-curly-1738147088-yellow.jpg';?>"  alt="First slide">
              
            </div>
            <div class="carousel-item">
             <img class="d-block img-fluid" src="<?php echo get_template_directory_uri().'/img/GenuineHair Top Lid Label.PNG';?>" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?php echo get_template_directory_uri().'/img/GenuineHairProduct.jpg';?>" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item One</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Two</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Three</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Four</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Five</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
</main></div>
                
			<!-- #main -->

</div>

<?php
get_footer();