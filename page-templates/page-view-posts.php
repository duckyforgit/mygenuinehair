<?php
/**
 * Template Name: View Posts Page
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );


$query = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => '-1',
    'post_status' => array(
        'publish',
        'pending',
        'draft',
        'private',
        'trash'
    )
) );
?>
<div class="wrapper" id="full-width-page-wrapper">

    <div class="<?php echo esc_attr( $container ); ?>" id="content">

        <div class="row">

            <div class="col-md-12 content-area" id="primary">

                <main class="site-main" id="main" role="main">
   
 <!-- <form method="POST"> -->
   <label for="showAll">Show All Posts</label>
   <input type="checkbox"id="showAll" name="showAll" value="All">
   <label for="showPublish">Show Only Published Posts</label>
   <input type="checkbox"id="showPublish" name="showPublish" value="Published">
   <?php if (isset($showAll) && $showAll=="other") echo "checked";
    ?>
<!--  </form>  -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?><!--edit/?pid=927&_wpnonce=e5fc87701e  -->
  <?php //$complete_url = wp_nonce_url( $bare_url, 'trash-post_'.$post->ID, 'my_nonce' );?>
  <!---edit-posts/?_wpnonce=7b3e5f9911 -->
    <tr>      
      <td class="title"><?php echo get_the_title(); ?></td>     
      <td class="date"><?php echo get_the_date(); ?></td>
      <td class="status"><?php echo get_post_status( get_the_ID() ) ?></td>
      <?php 
     
     
 // action='edit' is action that wpnonce needs to equal for 'edit' action 
      $edit_post =  wp_nonce_url( home_url()."/edit-posts/?action=edit&amp;PID=".get_the_ID(), 'edit', 'mynonce' );
  ?>

      <td class="actions">
        <?php if( !(get_post_status() == 'trash') ) : ?>
          <a href="<?php echo $edit_post; ?>">Edit</a> / 
 
          <a onclick="return confirm('Are you sure you wish to delete post: <?php echo get_the_title() ?>?')" class="delete" href="<?php echo get_delete_post_link( get_the_ID() ); ?>">Delete</a>
    <?php endif; ?>
      </td>
    </tr> 
    <?php endwhile; endif; ?>
  </tbody>
</table>

 
  
<?php  
//$edit_post = esc_url(add_query_arg( 'post', get_the_ID(), get_page_link($refererPost) ));
/*<input type="hidden" name="_wp_http_referer" value="/mygenuinehair/edit/?pid=780&amp;_wpnonce=fe0067e124" wtx-context="7F477927-F969-4A3D-97D1-0ABD3D0FAEBF"> */
 
//edit/?pid=780&_wpnonce=fe0067e124 to
//edit/?pid=780&_wpnonce=fe0067e124&msg=post_updated
?>
 
 

  
</main>
</div>
</div>
</div>
</div>


<?php
get_footer(); 