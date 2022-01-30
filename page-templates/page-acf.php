<?php
/**
 * Template Name: ACF MEMBER Template
 *
 * Template for displaying a Membership page.
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

	<div class="" id="content" tabindex="-1">


		<main class="site-main" id="main">
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
						acf_form([
							'field_groups' => [683], //'group_my_fields'
							'post_id' => 'user_' . $current_user_id,
							'updated_message' => __('User profile updated.', 'understrap'),
							//'return' => home_url('thank-you'),
							'submit_value' => __('Update profile', 'understrap'),
							//'form' => false // to combine with and output using form and input type=submit
						]);
					}
					?>
				</article>
	<?php endwhile;
	} ?>
</main>
</div>
</div>

<?php
get_footer();