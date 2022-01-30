<?php
/**
 * Template Name: FrontPage with examples
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
  <div class="container  mb-5">
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
<div class="container-fluid mt-5 mb-5" style="background-color:#f3f3f3">
  <div class="container"> 
  <div class="row align-items-center">

      <div class="col-lg-5 p-4 d-flex flex-column position-static ">
      <h2>Our company Genuine Hair uses Hair Science to create personalized hair care products that target each individual hair type.</h2>
      <p>Our natural hair care products are designed to serve all populations with hair and scalp challenges, which ultimately effect the way we view and feel about ourselves.</p>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
      <img src="<?php echo get_template_directory_uri().'/img/stock-photo-frour-black-cream-jars-with-silver-covers-are-standing-on-a-table-against-a-black-background-d-772475902-transparent.png';?>" alt="" >
    </div> 

   <!--  <div class="col p-4 d-flex flex-column position-static ">
      <h2>Our company Genuine Hair uses Hair Science to create personalized hair care products that target each individual hair type.</h2>
      <p>Our natural hair care products are designed to serve all populations with hair and scalp challenges, which ultimately effect the way we view and feel about ourselves.</p>
    </div>
    <div class="col-auto d-none d-lg-block">
      <img src="<?php //echo get_template_directory_uri().'/img/hands-hold-black-dropper-bottle.jpg';?>" alt="" width="300">
    </div> -->     
  </div>
<!-- 
  <div class="row mb-2">
    <div class="col">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col-lg-6 p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-lg-6 d-none d-lg-block">
           <img src="<?php //echo get_template_directory_uri().'/img/hands-hold-black-dropper-bottle.jpg';?>" alt="" width="300">

        </div>
      </div>
    </div>
     
  </div> -->
 </div>
</div>
</section>

     <section class="featured-event">
        <div class="featured-event container" style="position:relative"> 
        <!-- 	<h2 class="entry-title" style="">Featured Event</h2> -->
        	<div class="featured-event-image jumbotron" style="position:relative">
        		<img src="<?php echo get_template_directory_uri().'/img/templates/Genuine Hair - Home.png';?>" class="img-fluid" alt="Responsive image">
        		<div class="container banner-wrapper" >
        			<div class="banner-title init-animate fadeInDown" style="text-align:center;visibility: visible; animation-name: fadeInDown;">Block Party 2021</div>
							<div class="text-center init-animate fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
									<p style="color:#fff">October 14, 2021, Cottage Home Neighborhood </p>
              </div>
               <div class="feature-event clearfix init-animate fadeInDown text-center" data-year="2021 " data-month="12" data-day="10" data-hour=" 09" data-minutes="49" style="visibility: visible; animation-name: fadeInDown; display:flex; flex-direction:row; text-align:center; justify-content:center">
	             </div>
	           </div>     
         </div>
		</div>
  </section>
  <section>
		<div class="container">
			<div class="row justify-content-center mx-auto">
				<div class="col-sm-12">
					<h2 class="featured-event-title text-center">ABOUT THIS EVENT</h2>
				</div>
			</div>
	 
			<div class="row">
				<div class="col-sm-12 col-md-4 column">
      <div class="single-item init-animate zoomIn" style="visibility: visible; animation-name: zoomIn;">
          <div class="icon clearfix">
                                          <a href="http://localhost:8080/events/what-is-events/">
                      <i class="fa fa-calendar-check-o"></i>
                  </a>
                                      <h3 class="title">
                  <a title="What is events?" href="http://localhost:8080/events/what-is-events/">
                What is this event?                                                    </a>
              </h3>
          </div>
          <div class="content">
              <div class="details">
                <p>Dolorum delectus vel te. Invenire signiferumque ne vim, ut utamur pericula quo, per no delenit lucilius adversarium. </p>
              </div>
          </div>

      </div>
  </div>
                    <div class="col-sm-12 col-md-4 column">
      <div class="single-item init-animate zoomIn" style="visibility: visible; animation-name: zoomIn;">
          <div class="icon clearfix">
                                          <a href="http://localhost:8080/events/why-should-do-events/">
                      <i class="fa fa-question-circle"></i>
                  </a>
                                      <h3 class="title">
                  <a title="Why should do Events?" href="http://localhost:8080/events/why-should-do-events/">
                Why should I attend?                                                    </a>
              </h3>
          </div>
          <div class="content">
              <div class="details">
                <p>Ipsum delectus fabellas qui ne, qui at erroribus delicatissimi. Ad ipsum lucilius qui, cu nusquam tibique definiebas eum, oblique pertinacia nam ea.</p>
              </div>
          </div>

      </div>
  </div>
                    <div class="col-sm-12 col-md-4 column">
      <div class="single-item init-animate zoomIn" style="visibility: visible; animation-name: zoomIn;">
          <div class="icon clearfix">
                                          <a href="http://localhost:8080/events/why-should-you-join/">
                      <i class="fa fa-joomla"></i>
                  </a>
                                      <h3 class="title">
                  <a title="Why Should You Join?" href="http://localhost:8080/events/why-should-you-join/">
                Activities for the Family </a>
              </h3>
          </div>
          <div class="content">
              <div class="details">
                <p>Lorem ipsum dolor sit amet, vidit euripidis cum ne, error nihil consequuntur ne eum, quando praesent percipitur at eam.</p>
              </div>
          </div>

      </div>
  </div>
<div class="clearfix"></div>                                    <div class="col-sm-12 col-md-4 column">
      <div class="single-item init-animate zoomIn" style="visibility: visible; animation-name: zoomIn;">
          <div class="icon clearfix">
                                          <a href="http://localhost:8080/events/give-back-to-comunity/">
                      <i class="fa fa-wpbeginner"></i>
                  </a>
                                      <h3 class="title">
                  <a title="Give back to comunity" href="http://localhost:8080/events/give-back-to-comunity/">
                Give back to comunity                                                    </a>
              </h3>
          </div>
          <div class="content">
              <div class="details">
                <p>Essent splendide conceptam id ius. Iudico commune vis ei. Saperet volumus ut mel, ius tantas definiebas ut. In tractatos intellegat vix, id harum nostro.</p>
              </div>
          </div>

      </div>
  </div>
                    <div class="col-sm-12 col-md-4 column">
      <div class="single-item init-animate zoomIn" style="visibility: visible; animation-name: zoomIn;">
          <div class="icon clearfix">
                                          <a href="http://localhost:8080/events/keep-motivation/">
                      <i class="fa fa-smile-o"></i>
                  </a>
                                      <h3 class="title">
                  <a title="Keep Motivation" href="http://localhost:8080/events/keep-motivation/">
                Keep Motivation                                                    </a>
              </h3>
          </div>
          <div class="content">
              <div class="details">
                <p>Duo illud veniam no, veri nullam vocent id vis. Eam blandit recusabo tincidunt at, possim nostrud appellantur cu pri. Debet solet definitiones at duo.</p>
              </div>
          </div>

      </div>
  </div>
                    <div class="col-sm-12 col-md-4 column">
      <div class="single-item init-animate zoomIn" style="visibility: visible; animation-name: zoomIn;">
          <div class="icon clearfix">
                                          <a href="http://localhost:8080/events/meet-awesome-people/">
                      <i class="fa fa-user"></i>
                  </a>
                                      <h3 class="title">
                  <a title="Meet Awesome People" href="http://localhost:8080/events/meet-awesome-people/">
                Meet Awesome People                                                    </a>
              </h3>
          </div>
          <div class="content">
              <div class="details">
                <p>Nullam aeterno imperdiet duo id, nonumes explicari voluptatibus ex nec. No sonet oporteat contentiones pro, virtute admodum facilisis in vix.</p>
              </div>
          </div>

      </div>
  </div>
									<div class="clearfix"></div>                    </div>
	 </div> 
	      
  <div class="text-center"><br>
   <a class="btn btn-primary text-center" href="http://localhost:8080/events/general-meeting/ ">
		LEARN MORE ABOUT THIS EVENT </a>
	</div>
 
 </section>
	  
 
 
	<section class="section container three-up content-wrapper">
   
  <div class="row justify-content-center">
   
    <div class="col">
      <div class="item-wrapper">
      <h3 class="three-up-title"> <i class="icon fas fa-users" aria-hidden="true"></i>JOIN</h3>
      <p class="three-up-desc">Be a member of CHNA. You'll help the neighborhood, the near east side community and yourself.</p>
      <h4 class="h6">
      <a href="#" class="cta underline">Learn More</a>
      </h4>
    </div>
  </div>
    <div class="col">
       <div class="item-wrapper">
      <h3 class="three-up-title"><i class="icon fas fa-heart" aria-hidden="true"></i>VOLUNTEER</h3>
      <p class="three-up-desc">We are always looking for volunteers to help maintain and improve our neighborhood and the community spaces. </p>
        <h4 class="h6">
          <a href="#" class="cta underline">Sign Up</a>
        </h4>
    </div>
  </div>

    <div class="col">
       <div class="item-wrapper">
      <h3 class="three-up-title"><i class="icon fas fa-hand-holding-usd" aria-hidden="true"></i>GIVE</h3>
      <p class="three-up-desc">Generous donations help us foster community engagement through low cost/no cost events and open access amenities.</p>
       <h4 class="h6">
        <a href="#" class="cta underline">Donate</a>
      </h4>
    </div>
  </div>
</div>
</section>
 







					<div class="container">
						  <div class="row">
						    <div class="col-sm">
						    	 <!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

								<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
									      <div class="modal-body">
									        <h5>Popover in a modal</h5>
									        
									        <hr>
									        <h5>Tooltips in a modal</h5>
									        <p><a href="#" class="tooltip-test" title="" data-toggle="tooltip" data-original-title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="" data-toggle="tooltip" data-original-title="Tooltip">that link</a> have tooltips on hover.</p>
									      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
				      </div>
				    </div>
				  </div>
				</div>
												</div>
											  <div class="col-sm">
											  	<!-- modal -->
											     <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
											  </div>
									    <div class="col-sm">
									      <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
</div>
												</div>
                      </div>
										</div> <!-- container -->

		<section class="pt-4">
	<div class="container">
		<div class="row">
			<!-- Service item -->
			<div class="col-md-6 col-lg-4 mb-30">
				<div class="bg-light p-5 line-draw-animation h-100">
					<div class="line-draw-inner">
						<span class="text-primary display-6"><i class="bi bi-vector-pen"></i></span>
						<i class="fas fa-camera"></i> <h4 class="my-3"><a href="#">Graphic Design</a></h4>
						<p>Go he prisoners And mountains in just switching city steps Might rung line what Mr Bulk; Was or between towards</p>
					</div>
				</div>
			</div>
			<!-- Service item -->
			<div class="col-md-6 col-lg-4 mb-30">
				<div class="bg-light p-5 line-draw-animation h-100">
					<div class="line-draw-inner">
						<span class="text-primary display-6"><i class="bi bi-camera2"></i></span>
						<h4 class="my-3"><a href="#">Photography</a></h4>
						<p>We have phase were its world my samples are the was royal he luxury the about trying And on he to my enough</p>
					</div>
				</div>
			</div>
			<!-- Service item -->
			<div class="col-md-6 col-lg-4 mb-30">
				<div class="bg-light p-5 line-draw-animation h-100">
					<div class="line-draw-inner">
						<span class="text-primary display-6"><i class="bi bi-diagram-3"></i></span>
						<h4 class="my-3"><a href="#">Online Marketing</a></h4>
						<p>It was the remember a although lead in were through serving their assistant fame day have for its after would</p>
					</div>
				</div>
			</div>
			<!-- Service item -->
		</div> <!-- Row END -->
	</div>
</section>
<section>
  
 

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
</section>
				<div class="row">
					<div class="col-md-4">
						<div class="card card-raised">
						   <img src="<?php echo get_template_directory_uri().'/img/cosmetic-containers.jpg'; ?>" class="card-img-top" alt="image 1">
						  <div class="card-body"><h5><i class="bi-unlock" style="font-size: 2rem; color: cornflowerblue;"></i> Card title</h5><i class="display-6 text-primary bi bi-droplet-half"></i>

  
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-vector-pen" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908l-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"/>
  <path fill-rule="evenodd" d="M2.832 13.228L8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z"/>
</svg>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						  <ul class="list-group list-group-flush">
						    <li class="list-group-item">An item</li>
						    <li class="list-group-item">A second item</li>
						    <li class="list-group-item">A third item</li>
						  </ul>
						  <div class="card-body">
						    <a href="<?php the_permalink(); ?>" role="button" class="btn btn-primary card-link">Card link</a>
						    <a href="#" class="card-link">Another link</a>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
						   <img src="<?php echo get_template_directory_uri().'/img/cosmetic-containers.jpg'; ?>" class="card-img-top" alt="image 1">
						  <div class="card-body"><h5><i class="bi-alarm" style="font-size: 2rem; color: cornflowerblue;"></i>Card title</h5>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						  <ul class="list-group list-group-flush">
						    <li class="list-group-item">An item</li>
						    <li class="list-group-item">A second item</li>
						    <li class="list-group-item">A third item</li>
						  </ul>
						  <div class="card-body">
						    <a href="<?php the_permalink(); ?>" role="button" class="btn btn-primary card-link">Card link</a>
						    <a href="#" class="card-link">Another link</a>
						  </div>
						</div>
					</div>
		
					<div class="col-md-4">
						<div class="card">
						  <img src="<?php echo get_template_directory_uri().'/img/cosmetic-containers.jpg'; ?>" class="card-img-top" alt="image 1">
						  <div class="card-body"><h5><i class="bi-alarm" style="font-size: 2rem; color: cornflowerblue;"></i>Card title</h5>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						  <ul class="list-group list-group-flush">
						    <li class="list-group-item">An item</li>
						    <li class="list-group-item">A second item</li>
						    <li class="list-group-item">A third item</li>
						  </ul>
						  <div class="card-body">
						    <a href="<?php the_permalink(); ?>" role="button" class="btn btn-primary card-link">Card link</a>
						    <a href="#" class="card-link">Another link</a>
						  </div>
						</div>
					</div>
				</div>
<div class="card">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card">
  <div class="card-header">
    Quote
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>A well-known quote, contained in a blockquote element.</p>
      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo get_template_directory_uri().'/img/block-party-2.jpg' ?>" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri().'/img/stock-photo-white-cosmetic-products-with-argan-fruits-for-skin-care-and-hair-on-a-white-background-space-for-1023926851.jpg' ?>" class="d-block w-100" alt=" ">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri().'/img/headshot1.jpg' ?>" height="150" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<ul class="list-group list-group-flush">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>

<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>

<button class="btn btn-primary" type="button" disabled>
  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  <span class="visually-hidden">Loading...</span>
</button>
<button class="btn btn-primary" type="button" disabled>
  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  Loading...
</button>

<button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
  <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="<?php echo get_template_directory_uri().'/img/stock-photo-white-cosmetic-products-with-argan-fruits-for-skin-care-and-hair-on-a-white-background-space-for-1023926851.jpg' ?>" class="rounded me-2" alt="">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
<div class="row g-0 bg-light position-relative">
  <div class="col-md-6 mb-md-0 p-md-4">
    <img src="<?php echo get_template_directory_uri().'/img/stock-photo-white-cosmetic-products-with-argan-fruits-for-skin-care-and-hair-on-a-white-background-space-for-1023926851.jpg' ?>" class="w-100" alt="">
  </div>
  <div class="col-md-6 p-4 ps-md-0">
    <h5 class="mt-0">Columns with stretched link</h5>
    <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
    <a href="#" class="stretched-link">Go somewhere</a>
  </div>
</div>
<!-- Block level -->
<div class="row">
  <div class="col-2 text-truncate">
    Praeterea iter est quasdam res quas ex communi.
  </div>
</div>

<!-- Inline level -->
<span class="d-inline-block text-truncate" style="max-width: 150px;">
  Praeterea iter est quasdam res quas ex communi.
</span>
<a href="#" class="link-primary">Primary link</a>
<a href="#" class="link-secondary">Secondary link</a>
<a href="#" class="link-success">Success link</a>
<a href="#" class="link-danger">Danger link</a>
<a href="#" class="link-warning">Warning link</a>
<a href="#" class="link-info">Info link</a>
<a href="#" class="link-light">Light link</a>
<a href="#" class="link-dark">Dark link</a>
<div class="mx-auto" style="width: 200px;">
  Centered element
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="<?php echo get_template_directory_uri().'/img/stock-photo-white-cosmetic-products-with-argan-fruits-for-skin-care-and-hair-on-a-white-background-space-for-1023926851.jpg' ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?php echo get_template_directory_uri().'/img/stock-photo-white-cosmetic-products-with-argan-fruits-for-skin-care-and-hair-on-a-white-background-space-for-1023926851.jpg' ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?php echo get_template_directory_uri().'/img/stock-photo-white-cosmetic-products-with-argan-fruits-for-skin-care-and-hair-on-a-white-background-space-for-1023926851.jpg' ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?php echo get_template_directory_uri().'/img/stock-photo-white-cosmetic-products-with-argan-fruits-for-skin-care-and-hair-on-a-white-background-space-for-1023926851.jpg' ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
<div class="shadow-none p-3 mb-5 bg-light rounded">No shadow</div>
<div class="shadow-sm p-3 mb-5 bg-body rounded">Small shadow</div>
<div class="shadow p-3 mb-5 bg-body rounded">Regular shadow</div>
<div class="shadow-lg p-3 mb-5 bg-body rounded">Larger shadow</div>
	<?php	wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'workroom1128' ),
					'after'  => '</div>',
				) );
				edit_post_link( __( 'Edit', 'workroom1128' ), '<span class="edit-link">', '</span>' );
			?>
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <span class="page-link">2</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
  <!--Main Navigation-->


		</div><!-- /#post-<?php the_ID(); ?> -->
	 
 
	 
 

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>

		 

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); 
 