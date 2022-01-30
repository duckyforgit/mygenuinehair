<?php
/**
 * Template Name: ACF TEST FORM Template
 *
 * Template for displaying a frontend post form on page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
acf_form_head(); 
if (class_exists('acf')) {
    // Your ACF specific code here
  //  acf_form_head(); 
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
        <?php            $post_id = acf_get_valid_post_id();
echo "the post id is ". the_ID(); 

 ?>
      <?php //$new_post= array(
    //         'id' => 'acf-form',
    //          'post_id' => 'new_post', // Unique identifier for the form
    //          // PUT IN YOUR OWN FIELD GROUP ID(s)
    //          'post_title' => true,
    //          'field_groups' => array(695), // Create post field group ID(s)
    //          'form' => true,
    //          'return' => '%post_url%' , // Redirect to new post url
    //          'html_before_fields' => '',
    //          'html_after_fields' => '',
    //          'submit_value' =>  __("Submit", 'acf'),
    //          'updated_message' =>  __("Post Added", 'acf'),
    //          'html_submit_spinner' => '<span class="acf-spinner"></span>'
    //         );
//acf_form( $new_post);

?>

 <?php acf_form(array(
        'post_id'       => 'new_post',
        'new_post'      => true,
        'post_title'    => true,
        'post_content'  => true,
        'new_post'      => array(
            'post_type'     => 'post',
            'post_status'   => 'publish'
        )
    ));

 //acf_form(array(
//         'post_id'       => 'new_post',
//         'post_title' => true,
//         'form' => true,
//         'new_post'      => array(
//             'post_type'     => 'post',
//             'post_status'   => 'publish',
//             'post_title' => true,
//         ),
//          'return' => '%post_url%' ,
//         'updated_message' =>  'Post Added',
//         'submit_value'  => 'Create new post'
//     )); 

    //$post_id= wp_insert_post( $post);

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