<?php
/**
 * Template Name: Insert Posts
 *
 * Template for displaying a dashboard page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

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
 
$postTitleError = '';
 
if ( isset( $_POST['submitted'] ) && isset( $_POST['post_nonce_field'] ) && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' ) ) {
 
    if ( trim( $_POST['postTitle'] ) === '' ) {
        $postTitleError = 'Please enter a title.';
        $hasError = true;
    }
 
    $post_information = array(
        'post_title' => wp_strip_all_tags( $_POST['postTitle'] ),
        'post_content' => $_POST['postContent'],
        'post_type' => 'post',
        'post_status' => 'publish'
    );
 
    $post_id = wp_insert_post( $post_information );

 		if ( $post_id ) {
    	wp_redirect( home_url() );
    exit;
		}
}

?>

<form action="" id="primaryPostForm" method="POST">
 
    <fieldset>
        <label for="postTitle"><?php _e('Post Title:', 'framework') ?></label>
 
        <input type="text" name="postTitle" id="postTitle" class="required" value="<?php if ( isset( $_POST['postTitle'] ) ) echo $_POST['postTitle']; ?>" >
    </fieldset>
 
    <fieldset>
        <label for="postContent"><?php _e('Post Content:', 'framework') ?></label>
 
        <textarea name="postContent" id="postContent" rows="8" cols="30" class="required" <?php if ( isset( $_POST['postContent'] ) ) { if ( function_exists( 'stripslashes' ) ) { echo stripslashes( $_POST['postContent'] ); } else { echo $_POST['postContent']; } } ?>></textarea>
    </fieldset>
 
    <fieldset>
        <input type="hidden" name="submitted" id="submitted" value="true" />
 				<?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>

        <button type="submit"><?php _e('Add Post', 'framework') ?></button>
    </fieldset>
 
</form>

</article>
 

<?php endwhile; endif; wp_reset_postdata(); ?>
		</main>
	</div>
</div>
</div>

 
<?php
get_footer(); 
