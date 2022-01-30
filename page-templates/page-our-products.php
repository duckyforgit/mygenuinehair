<?php
/**
 * Template Name: Our Products
 * The template for displaying our products
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package    WordPress
 * @subpackage Understrap
 * @since      Understrap 1.0
 */

get_header('inner');

  /* Start the Loop */
while (have_posts()) :
    the_post();
    get_template_part('template-parts/content-products');
endwhile; // End of the loop.

get_footer();
