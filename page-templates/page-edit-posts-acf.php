<?php
/**
 * Template Name: Edit Posts ACF
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
   // if (have_posts()) : 
           // while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID() ?>" <?php post_class(); ?>>
				
				<h1><?php the_title(); ?></h1>

 <?php $postTitleError = ''; ?>
 
 
<?php $query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '-1' ) ); ?>
 
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
 
<?php
 global $current_post;
 $current_post = $_GET['PID'];
  
	    if ( $current_post == $post->ID ) {

            if (wp_verify_nonce( $_GET['mynonce'], 'edit' ) ) {
                
            // Nonce is matched and valid.              
                $title = get_the_title();
                $content = get_the_content();

            } else {

              echo "Invalid post security."; // you can throw an error here.
        }         
     
 ?> 

 <?php $post_id = acf_get_valid_post_id();
 
		$settings = array(
				'id' 		=> 'acf-form-edit',
        'post_id'           => $post_id, // defaults to current post id
        'post_title'        => true,
        'post_content'      => true,
        //'post-content'    => $_POST['post_content'],
        'new_post'          => false,
        //'text_box'        => $_POST['acf']['field_60ca542969791'],
    );

     
	  acf_form( $settings ); ?> 

<?php }
	

endwhile; endif; 
?>
     <!--  <form action="" id="primaryPostForm" method="POST">
 
    <fieldset>
 
        <label for="postTitle"><?php //_e( 'Post\'s Title:', 'framework' ); ?></label>
 
        <input type="text" name="postTitle" id="postTitle" value="<?php //echo $title; ?>" class="required" />
 
    </fieldset>
 
    <?php //if ( $postTitleError != '' ) { ?>
        <span class="error"><?php //echo $postTitleError; ?></span>
        <div class="clearfix"></div>
    <?php //} ?>
 
    <fieldset>
                 
        <label for="postContent"><?php //_e( 'Post\'s Content:', 'framework' ); ?></label>-->
 
        <!-- <textarea name="postContent" id="postContent" rows="8" cols="30"> --><?php //echo $content; ?><!-- </textarea> -->
 
   <!--  </fieldset>
 
    <fieldset>
         
        <?php //wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
 
        <input type="hidden" name="submitted" id="submitted" value="true" />
        <button type="submit"><?php //_e( 'Update Post', 'framework'); ?></button>
 
    </fieldset>
 
</form> --> 

 
		 
 
</article>
</main>
</div>
</div>
</div>

 
<?php
get_footer(); 
