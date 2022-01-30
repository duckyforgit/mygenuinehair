<?php
/**
 * Template Name: Edit ACF Template
 *
 * Template for displaying a about page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
acf_form_head(); 
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
 

<div class="wrapper" id="page-wrapper">

	<div class="" id="content" tabindex="-1">


			<main class="site-main" id="main">
 

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<h1><?php the_title(); ?></h1>
				<?php $post_id = acf_get_valid_post_id();
echo "post id is ".$post_id; ?>
		<?php //the_content();  
		$settings = array(
				'id' 						=> 'acf-form-edit',
       // 'post_id'       => 'edit_post', // defaults to current post id
        'post_title'    => true,
        'post_content'  => true,
        'new_post'      => array(
            'post_type'     => 'post',
            'post_status'   => 'publish'
        )
    );
	 acf_form( $settings ); ?>
			 
				<!-- 
				 <p>My custom field: <?php //the_field('post_image'); ?></p>-->
				
				 

			<?php endwhile; ?>
		</main>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer();  