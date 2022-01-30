<?php
/**
 * Template Name: Edit Posts
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

	 if ( isset( $_GET['post'] ) ) {
	     
	    if ( $_GET['post'] == $post->ID )
	    {
	        $current_post = $post->ID;
        	$title = get_the_title();
        	$content = get_the_content();  
 $content = apply_filters('the_content', $content);
 //echo wp_filter_nohtml_kses( $content );

	    }
	}
endwhile; endif; 

?><style>fieldset {
 padding-bottom:1rem; 
}
input, button, select, optgroup, textarea {
  border-width: 2px;
    border-color: #ccc;
}</style>

    <form action="" id="primaryPostForm" method="POST">
   
        <fieldset>
          <div class=" overflow-hidden"> 
          <div class="row g-0 justify-content-start">
            <div class="col-sm-12 col-md-2">
            <label for="postTitle"><?php  _e( 'Post\'s Title:', 'framework' ); ?></label>
            </div>
             <div class="col-sm-12 col-md-10">
            <input type="text" name="postTitle" id="postTitle" value="<?php echo $title; ?>" class="required" />
          </div>
        </div>
      </div>
     
        </fieldset>
         

    <?php if ( $postTitleError != '' ) { ?>
        <span class="error"><?php echo $postTitleError; ?></span>
        <div class="clearfix"></div>
    <?php } ?>
 
    <fieldset>
        <div class="row g-0 justify-content-start">
            <div class="col-sm-12 col-md-2">         
              <label for="postContent"><?php _e( 'Post\'s Content:', 'framework' ); ?></label>
             </div>
             <div class="col-sm-12 col-md-10">
               
               <?php //$id = "postContent";
//$name = 'postContent';
//$content = esc_textarea( stripslashes( $content ) );
//$settings = array('tinymce' => true, 'textarea_name' => "postContent");
//wp_editor($content, $id, $settings);
//$editor_id = 'editpost';
 
//wp_editor( $content, $editor_id ); ?><!-- 
<div contenteditable="true"><?php //echo $content; ?></div> -->
 
<p>My custom field: <?php the_field('text_box'); ?></p>
        
        <?php acf_form(); ?>
                   <!-- <textarea name="postContent" id="postContent" rows="8" contenteditable="true" ><?php //echo $contentStripped; ?></textarea>  -->

<?php
               //  $post_id   = 51;
//$post      = get_post( $post_id, OBJECT, 'edit' );
//$content   = $post->post_content;
?>
               </div>
        </div> 
 
    </fieldset>
 
    <fieldset>
         
        <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
 
        <input type="hidden" name="submitted" id="submitted" value="true" />
        <button type="submit" class="btn  btn-lg m-2" style="background:#91a74f;"><?php _e( 'Update Post', 'framework'); ?></button>
 
    </fieldset>
 
</form> 



<?php


 
  if ( isset( $_POST['submitted'] ) && isset( $_POST['post_nonce_field'] ) && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' ) ) {
 

     if ( trim( $_POST['postTitle'] ) === '' ) {
        $postTitleError = 'Please enter a title.';
        $hasError = true;
    }
 
    $post_information = array(
    'ID' => $current_post,
    'post_title' =>  wp_strip_all_tags( $_POST['postTitle'] ),
    'post_content' => $_POST['postContent'],
    'post_type' => 'post',
    'post_status' => 'publish'
);
 
    $post_id = wp_update_post( $post_information );

 		if ( $post_id ) {
    	   wp_redirect( home_url().'/view-posts/' );
         exit;
		}
 }
 
?>
 
<?php //endwhile; endif; ?>
<?php //wp_reset_query(); ?>

<?php //endwhile; endif; wp_reset_postdata(); ?>
 
    </article>
</main> 
	</div>
</div>
</div>

 
<?php
get_footer(); 
