<?php
/**
 * Template Name: ACF FRONTEND POST FORM Template
 *
 * Template for displaying a frontend post form on page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
if (class_exists('acf')) {
	// Your ACF specific code here
	acf_form_head(); 
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>
<div class="wrapper" id="page-wrapper">

	<div class="container" id="content" tabindex="-1">


		<main class="site-main" id="main">
			<div class="row">
				<div class="col-sm-12">
  	<?php 
  	if (have_posts()) { 
			while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID() ?>" <?php post_class(); ?>>
					<h2 class="page-title"><?php the_title(); ?></h2>

					<?php the_content(); ?>
					 
					<?php 
					if (is_user_logged_in() && current_user_can('subscriber')) {
						// Profile settings here
						$current_user_id = get_current_user_id();
						$new_post = array(
							'post_id' => 'new_post', // Unique identifier for the form
							'post_title'	=> true,
							'post_content'	=> true,
							'post_status' => 'publish',
							'uploader' => 'wp',
             // PUT IN YOUR OWN FIELD GROUP ID(s)
             'field_groups' => array('695'), // Create post field group ID(s)
             'form' => true,
             'return' => '%post_url%' , // Redirect to new post url
             'html_before_fields' => '',
             'html_after_fields' => '',
             'html_submit_spinner' => '<span class="acf-spinner"></span>',
						 'kses' => true, //sanitize
             'submit_value' => 'Submit Post',
             'updated_message' => 'Saved!'

						);	
						acf_form($new_post);
	
					}
					?>
				</article>
	<?php endwhile;
	} ?>
</div>
</div>
</main>
</div>
</div>

<?php
get_footer();