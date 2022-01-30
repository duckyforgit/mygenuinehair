<?php
/**
 * Template Name: Connect
 * The template for displaying lets connect
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
    get_template_part('template-parts/content-connect');
endwhile; // End of the loop.

get_footer();
