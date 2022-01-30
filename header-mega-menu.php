<?php
/**
 * The header mega menu for our theme
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
		
		<div class="container-fluid p-4">
			<div class="row">
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'social-media',
						'container_class' => '',
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
			

		<!-- </div> -->
<!-- Your site title as branding in the menu -->
			<div class="col nav justify-content-center">
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>
     
							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>

						<?php
					} else {
						the_custom_logo();
					}
					?>
			</div>		<!-- end custom logo -->

			<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'secondary',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'nav justify-content-end',
						'fallback_cb'     => '',
						'menu_id'         => 'secondary-menu',
						'depth'           => 1,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			 
		</div>
	</div>
		<nav id="main-nav" class="navbar navbar-expand-md navbar-light bg-offwhite" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2> 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse justify-content-center bottom-bar',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
		 

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
