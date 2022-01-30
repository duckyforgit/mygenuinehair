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

	 
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	<div class="container container-sm align-items-center">		
	 
			<!-- Your site title as branding in the menu -->
 			<a href="https://mygenuinehair.com/" class="navbar-brand custom-logo-link" rel="home" aria-current="page"><img width="300" src="https://mygenuinehair.com/wp-content/uploads/2021/02/cropped-GH-cropped-2-e1614214088354.png" class="img-fluid" alt="GenuineHair" ></a>

 
	 
</div>