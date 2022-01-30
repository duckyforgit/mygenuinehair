<?php
/**
 * Template Name: FrontEdit Page
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
 
if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "f_edit_post" && isset($_POST['pid'])) {
    //get the old post:
    $post_to_edit = get_post((int)$_POST['pid']); 

    //do you validation
    //...
    //...


    // Add the content of the form to $post_to_edit array
    $post_to_edit['post_title'] = $_post['title'];
    $post_to_edit['post_content'] = $_post['description'];
    $post_to_edit['tags_input'] = array($_post['post_tags']);


    //save the edited post and return its ID
    $pid = wp_update_post($post_to_edit); 


    //set new category
    wp_set_post_terms($pid,(array)($_POST['cat']),'category',true);

}
/* add validation */



?>
<?php
$post_to_edit = get_post($post_id); 
?>

<!-- edit Post Form -->
<div id="postbox">
    <form id="new_post" name="new_post" method="post" action="">
        <p>
            <label for="title">Title</label><br />
            <input type="text" id="title" value="<?php echo $post_to_edit->post_title; ?>" tabindex="1" size="20" name="title" />
        </p>
        <p>
            <label for="description">Description</label><br />
            <textarea id="description" tabindex="3" name="description" cols="50" rows="6"><?php echo $post_to_edit->content; ?></textarea>
        </p>
        <p>
        <?php 
            $cat = wp_get_post_terms( $post_to_edit->ID, 'category');
            wp_dropdown_categories( 'show_option_none=Category&tab_index=4&taxonomy=categoryselected='.$cat[0]->term_id);
        ?>
        </p>
        <p>
            <label for="post_tags">Tags</label>
            <input type="text" value="<?php the_terms( $post_to_edit->ID, 'post_tag', '', ', ', '' ); ?>" tabindex="5" size="16" name="post_tags" id="post_tags" />
        </p>
        <p align="right"><input type="submit" value="Publish" tabindex="6" id="submit" name="submit" /></p>
        <input type="hidden" name="action" value="f_edit_post" />
        <input type="hidden" name="pid" value="<?php echo $post_to_edit->ID; ?>" />
        <?php wp_nonce_field( 'new-post' ); ?>
    </form>
</div>

<!--// edit Post Form -->