<?php
/**
 * Template Name: Front Form Page
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
 
 if(isset($_POST['submit_post'] && isset($_POST['post_nonce_field']) && wp_verify_nonce($_POST['post_nonce_field'], 'post_nonce'))){

    // I check if I am editing an existing post or if I am creating a new one ($the_post_id sera NULL).

if ($_POST['postId']) {
    $post_exist_id = $_POST['postId'];
// Post to save
$post_information = array(
   // Je passe l'ID du post à updater.
   'ID' => $post_exist_id,
   'post_title' => wp_strip_all_tags( $_POST['postTitle'] ),
   'post_content' => $_POST['postContent'],
   'post_type' => 'post',
   'post_status' => 'pending',
);
// Here I save my post, and I get the url of the post
$the_post_id = wp_insert_post( $post_information, $wp_error );
}
else {
   // I check if the title is not empty before saving the post.
   if ( trim( $_POST['postTitle'] ) === '' ) {
      $postTitleError = 'Veuillez renseigner le titre de votre article';
   } else {
      
      // Informations to save for this post
      $post_information = array(
         'post_title' => wp_strip_all_tags( $_POST['postTitle'] ),
         'post_content' => $_POST['postContent'],
         'post_type' => 'post',
         'post_status' => 'pending',
      );
      wp_insert_post( $post_information, $wp_error );
     // $the_post_id = wp_insert_post( $post_information, $wp_error );
   }
}
}
?>

<!-- edit Post Form -->
<form action="" id="primaryPostForm" method="POST">
   <input type="hidden" name="postId" id="postId" value="<?php echo $the_post_id; ?>" >
   <!-- field used for the title of my post-->
   <label for="postTitle">Title of your post</label>
   <input type="text" name="postTitle" id="postTitle" class="required" 
         value="<?php if(isset($_POST['postTitle'])){ $_POST['postTitle']; } ?> " >
   <!-- Field used for the content of my post (I will load the editor TinyMCE here.-->
   <label for="postContent">Your post</label>
   <?php 
     $content = stripslashes( if(isset($_POST['postContent'])) { $_POST['postContent'] } );
      $settings  = array( 'editor_height' => '350', 'media_buttons' => false );
      wp_editor( $content, 'postContent', $settings); 
   ?>
   
   <!-- Security field-->
   <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
                  
   <input type="submit" name="submit_post" id="submit_post" value="Post my article" >
   
</form>

<a href="<?php home_url();?>?p=<?php echo $the_post_id; ?>&preview=true" > Preview the Post</a>
<!--// edit Post Form -->