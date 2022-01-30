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
<header>
<div id="masthead" class="navbar navbar-expand-lg flex-column site-header" role="banner">

	<a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <?php 
    if ( ! has_custom_logo() ) 
    { 

        if ( is_front_page() && is_home() ) : ?>

            <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

        <?php else : ?>

            <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

        <?php endif; ?>

    <?php
    } else 
    {
        the_custom_logo();
    }
    ?>

	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="menu">MENU</span><span class="navbar-toggler-icon"></span>
      </button>  

		<?php //get_template_part('woocommerce/product','searchform'); ?>
	 
 
  <div class="collapse navbar-collapse module" id="navbarNavDropdown" >
            <?php
          	wp_nav_menu(
                 	array(
                            'theme_location'  => 'primary',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'navbarNavDropdown',
                            'menu_class'      => 'navbar-nav ml-auto',
                            'fallback_cb'     => '',
                            'menu_id'         => 'main-menu',
                            'depth'           => 3,
                            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    ); 
            ?>
            <?php //woocommerce_header_cart(); ?>
    <!-- </div> -->
    <!-- <div class="container container-lg align-items-center">		 -->
	 <span class="flex-item logo">	
			<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>

						<?php
					} else { ?>
						
					<?php the_custom_logo();
					}
					?>
		</span> 

    <!-- <div class="collapse navbar-collapse" id="navbarNavDropdown"> -->
            <?php
        //    wp_nav_menu(array(
        //        'theme_location' => 'primaryTwo',
        //        'container' => false,
        //        'menu_class' => 'flex-item',
        //        'fallback_cb' => '__return_false',
        //        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
        //        'depth' => 2,
        //         'walker' => new Understrap_WP_Bootstrap_Navwalker()
        //    ));
        wp_nav_menu(
			 	array(
						'theme_location'  => 'primaryTwo',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 3,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); 
            ?>
            <?php //woocommerce_header_cart(); ?>
    </div> 
	<div class="container-full" style="width:100%; height:50px;background-image: url(<?php echo get_template_directory_uri().'/dist/img/canvaPhotos/logo-banner-bottom.jpg)'?>"></div>


   <!-- <div id="navbar-mobile" class="container align-items-start justify-content-between">  -->
 
			<?php
			 
		//	wp_nav_menu(
			/*	array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 3,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);*/
 				// woocommerce_header_cart();  
			
			?>
	 
		 
		<?php //woocommerce_header_cart(); ?>
 
 	<!--</div> --> 
  
</header>
