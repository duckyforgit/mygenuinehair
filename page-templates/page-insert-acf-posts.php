<?php
/**
 * Template Name: Insert ACF Posts
 *
 * Template for displaying a dashboard page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
acf_form_head();
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
 

<div class="container wrapper" id="page-wrapper">
	<div class="row"> 

	<div class="col-md-12 content-area" id="content" tabindex="-1">


			<main class="site-main" id="main">
 				 

			 <?php 
    if (have_posts()) : 
            while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID() ?>" <?php post_class(); ?>>
				
				<h1><?php the_title(); ?></h1>

<!-- use sanitize_email() key, meta, text_field, textarea, title, user
	wp_kses() wp_kses_post() 

	esc_textarea() before rendering 
validate client side and use 
<div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>
  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
    <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
  </div>
-->
<?php
 acf_form(array(
        'post_id'       => 'new_post',
        'post_title'    => true,
        'post_content'  => true,
        'new_post'      => array(
            'post_type'     => 'post',
            'post_status'   => 'publish'
        ),
        'return'        => home_url('view-posts'),
        'submit_value'  => 'Post'
    ));
 
?>

 

</article>
 

<?php endwhile; endif; wp_reset_postdata(); ?>
		</main>
	</div>
</div>
</div>

 
<?php
get_footer(); 
