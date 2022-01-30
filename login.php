<?php
/**
 * Template Name: LOGIN PAGE
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
 
  
<div class="wrapper" id="page-wrapper">
 
	<!-- <div class="<?php //echo esc_attr( $container ); ?>" id="content" tabindex="-1"> -->
 <div class="container-fluid" id="content" tabindex="-1">
	 

		<main class="site-main" id="main">
			 <form class="form" id="myForm">
			    <label for ="inp_username">Username</label>
			    <input type="text" name="imp_username" id="inp_username">
			    <label for ="inp_password">Password</label>
			    <input type="text" name="inp_password" id="inp_password">
			    <button type="submit">Login</button>
			  </form>

		</main>
	</div>
</div>

