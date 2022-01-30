<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
<?php
/**
 * The header  for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
		
		<div class="container-fluid d-none d-lg-block d-xl-block d-xxl-block pt-3">
			<div class="row" >
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'social-media',
						'container_class' => 'col d-sm-none d-md-block',
						'container_id'    => '',
						'menu_class'      => 'col nav justify-content-start',
						'fallback_cb'     => '',
						'menu_id'         => 'social-media-menu',
						'depth'           => 1,						
					)
				);	
			?> 
			<!-- <ul class="col-lg-4 nav justify-content-start">
				 <li> <a href="http://facebook.com/cottagehomeneighborhood"><i class="fab fa-facebook-f"></i></a></li>
          <li> <a href="http://twitter.com/cottagehomeindy"><i class="fab fa-twitter"></i></a></li>
         <li>  <a href="http://instagram.com/cottagehomeindy"><i class="fab fa-instagram"></i></a></li>

         <li>  <a href="mailto:admin@cottagehome.info?&amp;subject=&amp;body="><i class="far fa-envelope"></i></a></li>
			</ul> --> 
 <?php //echo do_shortcode(get_theme_mod( 'additional_header_text')); ?>
  <div class="col d-flex justify-content-end small-info-text"> <!-- Begin PayPal Donations by https://www.tipsandtricks-hq.com/paypal-donations-widgets-plugin -->
  <?php
				wp_nav_menu(
					array(
						'theme_location'  => 'secondary',
						'container'       => '',
						'container_class' => '',
						//'container_id'    => '',
						'menu_class'      => 'nav',
						'fallback_cb'     => '',
						'menu_id'         => 'secondary-menu',
						'depth'           => 1,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
		  
<!-- <div class="col-md-2 woo-cart-wrapper">
	<a class="rg-icon-wrap woo-cart-wrap" href="../buddypress-social-learning/cart/" title="View your shopping cart">
		<span class="fa fa-shopping-cart"></span>
		<span class="cart-contents-count rg-count">0</span>
	</a>
	<div class="rg-woocommerce_mini_cart invisible">
	<p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
	</div>
</div> -->
	<div class="d-flex"> 
	<!-- 	<div class="rg-icon-wrap rg-login-btn-wrap">
			<a href="/login/" class="btn btn-primary btn-login button" title="Login">Login
			</a>
		</div> -->
		<button class="btn col-md-2 search-trigger js-search-trigger d-flex align-items-start" data-bs-toggle="modal" data-bs-target="#searchform" aria-labelledby="button-label">
			<span id="button-label" hidden>Search</span>
			<i class="fa fa-search" aria-hidden="true" ></i> 
	</button>

			 <div class="modal fade p-3" id="searchform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content p-3">
				  <form method="get" id="searchform2" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" >
						<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'understrap' ); ?></label>
						<div class="input-group">
							<input class="field form-control" id="s" name="s" type="text"
								placeholder="<?php esc_attr_e( 'Search &hellip;', 'understrap' ); ?>" value="<?php the_search_query(); ?>">
							<span class="input-group-text input-group-no-background">
								<input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit"
								value="<?php esc_attr_e( 'Search', 'understrap' ); ?>">
							</span>
						</div>
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>		 
 
<!-- End PayPal Donations -->
 
			  
			<?php 
				// wp_nav_menu(
				// 	array(
				// 		'theme_location'  => 'secondary',
				// 		'container_class' => 'col',
				// 		'container_id'    => '',
				// 		'menu_class'      => 'nav justify-content-end',
				// 		'fallback_cb'     => '',
				// 		'menu_id'         => 'secondary-menu',
				// 		'depth'           => 1,
				// 		'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				// 	)
				// );


				?>
			 
		</div>
	</div>

	<!-- Your site title as branding in the menu -->
	<div class="nav justify-content-center align-items-center custom-logo" style="flex-direction:column">
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>
     
							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>

						<?php
					} else {
						the_custom_logo();  ?> 
				<?php	}
					?>
			</div>		<!-- end custom logo -->
		  <nav id="main-nav" class="navbar navbar-expand-lg navbar-light pb-4 " aria-labelledby="main-nav-label"> 

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2> 
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse justify-content-center bottom-bar mt-3',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 3,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
		 
 
		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
 
 