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

		<div class="container-fluid">
			 
				<?php
				//wp_nav_menu(
				//	array(
				//		'theme_location'  => 'social-media',
				//		'container' => '',
					//	'menu_class'      => 'col nav justify-content-start',
					//	'fallback_cb'     => '',
					//	'menu_id'         => 'social-media-menu',
					//	'depth'           => 1,						
					//)
				//);	
			?>
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
			<!-- <div class="d-flex justify-content-center">
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
			</div>	 -->	<!-- end custom logo -->

			
			 
		</div>
 

 		<nav class="navbar navbar-expand-lg" aria-label="Main navigation"> 
			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2> 

		<?php if ( 'container' === $container ) : ?>
			<div class="container-fluid">
		<?php endif; ?> 
			   
    <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="offcanvas" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    	<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'navbar-collapse offcanvas-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'mx-auto navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
				 
			<?php if ( 'container' === $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
