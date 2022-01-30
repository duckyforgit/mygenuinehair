<?php
  

/**
 * Filters all menu item URLs for a #placeholder#.
 *
 * @param WP_Post[] $menu_items All of the nave menu items, sorted for display.
 *
 * @return WP_Post[] The menu items with any placeholders properly filled in.
 */
if ( ! function_exists( 'ghc_dynamic_menu_items' ) ) :
function ghc_dynamic_menu_items( $menu_items ) {

    // A list of placeholders to replace.
    // You can add more placeholders to the list as needed.
    $placeholders = array(
        '#profile_link#' => array(
            'shortcode' => 'paypal-donation',
            'atts' => array(), // Shortcode attributes.
            'content' => '', // Content for the shortcode.
        ),
    );

    foreach ( $menu_items as $menu_item ) {

        if ( isset( $placeholders[ $menu_item->url ] ) ) {

            global $shortcode_tags;

            $placeholder = $placeholders[ $menu_item->url ]; 

            if ( isset( $shortcode_tags[ $placeholder['shortcode'] ] ) ) {

                $menu_item->url = call_user_func( 
                    $shortcode_tags[ $placeholder['shortcode'] ]
                    , $placeholder['atts']
                    , $placeholder['content']
                    , $placeholder['shortcode']
                );
            }
        }
    }

    return $menu_items;
}
endif;
add_filter( 'wp_nav_menu_objects', 'ghc_dynamic_menu_items' );


// Breadcrumbs
function custom_breadcrumbs() {
       
    // Settings
    $separator          = '&#47;';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = 'HOME';
      
    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
  //  $custom_taxonomy    = 'tribe_events';
       
    // Get the query & post information
    global $post,$wp_query;
       
    // Do not display on the homepage
    if ( !is_front_page() ) {
       
        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
           
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';
           
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
              
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
              
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';

            
              
        } else if ( is_single() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            // Get post category info
            $category = get_the_category();
             
            if(!empty($category)) {
              
                // Get last category post is in
                $last_category = end(array_values($category));
                  
                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);
                  
                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                    $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
                }
             
            }
              
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                   
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
               
            }
              
            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                  
                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
              
            } else {
                  
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            }
              
        } else if ( is_category() ) {
               
            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
               
        } else if ( is_page() ) {
               
            // Standard page
            if( $post->post_parent ){
                   
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                   
                // Get parents in the right order
                $anc = array_reverse($anc);
                   
                // Parent page loop
                if ( !isset( $parents ) ) { $parents = null;}
                foreach ( $anc as $ancestor ) {
                  /*  $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';*/

                     $parents .= '<li class="item-parent item-parent-' . $ancestor . '">' . get_the_title($ancestor) . '</li>';


                   //  $parents .= '<li class="separator separator-' . $ancestor . '"> '  . ' </li>';
                      $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                   
                // Display parent pages
                echo $parents;
                   
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                   
            } else {
                   
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                   
            }
               
        } else if ( is_tag() ) {
               
            // Tag page
               
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
               
            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
           
        } elseif ( is_day() ) {
               
            // Day archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
               
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_month() ) {
               
            // Month Archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';               
        } else if ( is_year() ) {               
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
        } else if ( is_author() ) {               
            // Auhor archive               
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );               
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
           
        } else if ( get_query_var('paged') ) {               
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';               
        } else if ( is_search() ) {           
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';           
        } elseif ( is_404() ) {               
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }       
        echo '</ul>';           
    }       
}

 function process_hairquiz() {
    if ( ! isset( $_POST['submitQuiz'] ) || ! isset( $_POST['myname'] ) )  {
        return;
    }

    if ( ! wp_verify_nonce( $_POST['myname'], 'myaction' ) ) {
        return;
    }

    // Process the form...
    $number = intval( $_POST['q_1_1'] );
     
    $url = wp_get_referer();

    // Donation amount is too low.
    if ( $number < 0 ) {
        $url = add_query_arg( 'erreur', 'radin', wp_get_referer() );

    // Donation amount is too high.
    } elseif ( $number > 10000 ) {
        $url = add_query_arg( 'erreur', 'trop', wp_get_referer() );

    // Everything's OK, let's do the work...
    } else {
        $cagnotte_actuelle = intval( get_option( 'valeur_cagnotte', 0 ) );
        update_option( 'valeur_cagnotte', $cagnotte_actuelle + $number );
        $url = add_query_arg( 'success', 1, wp_get_referer() );
    }

    // Redirect user back to the form, with an error or success marker in $_GET.
    wp_safe_redirect( $url );
    exit();
}
add_action( 'template_redirect', 'process_hairquiz' );


function global_notice_before_post( $content ) {

    global $post;

    // retrieve the global notice for the current post
     $global_notice = esc_attr( get_post_meta( $post->ID, '_global_notice', true ) );

    $notice = "<div class='sp_global_notice'><h2 style='color:red'>$global_notice</h2></div>";

    return $notice . $content;

   //  $custom_content = 'YOUR CONTENT GOES HERE';
   // $content .= $custom_content;
   // return $content;

}

// add_filter( 'the_content',  'global_notice_before_post');

 

  function process_the_quiz_shortcode( $atts ) {
     $html = '<div id="quiz_panel"><form action="" method="POST">';

        $html .= '<div class="toolbar">';

        $html .= '<div class="toolbar_item"><select name="quiz_category" id="quiz_category">';

        // Retrive the quiz categories from database

        $quiz_categories = get_terms( array(
            'taxonomy' => 'quiz_category',
            'hide_empty' => false,
        ) );
        if ( !empty($taxonomies) ) :
           // $output = '<select>';
            foreach( $taxonomies as $category ) {
               // if( $category->parent == 0 ) {
                    // $output.= '<optgroup label="'. esc_attr( $category->name ) .'">';
                   // foreach( $taxonomies as $subcategory ) {
                       // if($subcategory->parent == $category->term_id) {
                      //  $output.= '<option value="'. esc_attr( $subcategory->term_id ) .'">
                       //     '. esc_html( $subcategory->name ) .'</option>';
                        $html .= '<option value="' .  $subcategory->term_id . '">' . esc_html( $subcategory->name ) . '</option>';
                      //  }
                   // }
                    // $output.='</optgroup>';
               // }
            }
        endif;  
       $html .= '</select></div>';
      //  echo $output;
      //  endif;

        // foreach ( $quiz_categories as $quiz_category ) {

        //     $html .= '<option value="' . $quiz_category->term_id . '">' . $quiz_category->name . '</option>';

        // }

       // $html .= '</select></div>';

     //   $html .= '<input type="hidden" value="select_quiz_cat" name="wpq_action" />';

     //   $html .= '<div class="toolbar_item"><input type="submit" value="Select Quiz Category" /></div>';

        $html .= '</div></form>';

        $html .= '<div class="complete toolbar_item" ><input type="button" id="completeQuiz" value="Get Results" /></div></div>';

        // Implementation of Form Submission

        // Displaying the Quiz as unorderd list
// extract( shortcode_atts( array(
//                 'message' => ''
//             ), $atts 
//         ) 
//     );
    // this will display our message before the content of the shortcode
    //return $message . ' ' . $content;
        return $html;
       //  return ob_get_clean();

}

// function that runs when shortcode is called
function wpb_demo_shortcode() { 
 
// Things that you want to do. 
$message = 'Hello world!'; 
 
// Output needs to be return
return $message;
} 
// register shortcode
add_shortcode('greeting', 'wpb_demo_shortcode'); 

function shortcodes_init() {
   add_shortcode( 'cta_button', 'button_handler_function' );
   add_shortcode( 'showquiz', 'wpq_showquiz');
   add_shortcode( 'quizmode', 'process_the_quiz_shortcode');
}
 
add_action('init', 'shortcodes_init');
  
 function button_handler_function($atts) {
  $a = shortcode_atts( array(
 'link' => '#',
 'id' => 'salcodes',
 'color' => 'blue',
 'size' => '',
 'label' => 'Button',
 'target' => '_self'
 ), $atts );
 $output = '<p><a href="' . esc_url( $a['link'] ) . '" id="' . esc_attr( $a['id'] ) . '" class="button ' . esc_attr( $a['color'] ) . ' ' . esc_attr( $a['size'] ) . '" target="' . esc_attr($a['target']) . '">' . esc_attr( $a['label'] ) . '</a></p>';
 return $output;
 }

 function wpq_showquiz( $atts ) {


 //$a = shortcode_atts( array(
 // 'link' => '#',
 // 'id' => 'salcodes',
 // 'color' => 'blue',
 // 'size' => '',
 // 'label' => 'Button',
 // 'target' => '_self'
 // ), $atts );
 
        global $post;
//ob_start();
    
   
        $html = '<div id="quiz_panel"><form action="" method="POST">';

        $html .= '<div class="toolbar"><p>testing shortcode</p></div></form></div>';


     //   $html .= '<div class="toolbar_item"><select name="quiz_category" id="quiz_category">';
          
        // Retrive the quiz categories from database

     //   $quiz_categories = get_terms( array(
      //      'taxonomy' => 'quiz_category',
       //     'hide_empty' => false,
      //  ) );
       // if ( !empty($taxonomies) ) :
        //    $output = '<select>';
         //   foreach( $taxonomies as $category ) {
               // if( $category->parent == 0 ) {
                    // $output.= '<optgroup label="'. esc_attr( $category->name ) .'">';
                   // foreach( $taxonomies as $subcategory ) {
                       // if($subcategory->parent == $category->term_id) {
                      //  $output.= '<option value="'. esc_attr( $subcategory->term_id ) .'">
                       //     '. esc_html( $subcategory->name ) .'</option>';
                    //    $html .= '<option value="' .  $subcategory->term_id . '">' . esc_html( $subcategory->name ) . '</option>';
                      //  }
                   // }
                    // $output.='</optgroup>';
               // }
           /// }
       // endif;  
      //  $html .= '</select></div>';
      //  echo $output;
      //  endif;

        // foreach ( $quiz_categories as $quiz_category ) {

        //     $html .= '<option value="' . $quiz_category->term_id . '">' . $quiz_category->name . '</option>';

        // }

       // $html .= '</select></div>';

      //  $html .= '<input type="hidden" value="select_quiz_cat" name="wpq_action" />';

     //   $html .= '<div class="toolbar_item"><input type="submit" value="Select Quiz Category" /></div>';

      //  $html .= '</form>';

     //   $html .= '<div class="complete toolbar_item" ><input type="button" id="completeQuiz" value="Get Results" /></div>';

        // Implementation of Form Submission

        // Displaying the Quiz as unorderd list
//extract( shortcode_atts( array(
         //       'message' => ''
         //   ), $atts 
      //  ) 
   // );
    // this will display our message before the content of the shortcode
    //return $message . ' ' . $content;
      // $output = '<p><a href="' . esc_url( $a['link'] ) . '" id="' . esc_attr( $a['id'] ) . '" class="button ' . esc_attr( $a['color'] ) . ' ' . esc_attr( $a['size'] ) . '" target="' . esc_attr($a['target']) . '">' . esc_attr( $a['label'] ) . '</a></p>';
 //return $output;

        return $html;
        // return ob_get_clean();

}
/* ACF FRONT FORM */
/*if (class_exists('acf')) {
    add_action('acf/init', function() {
        acf_add_local_field_group([
            'key' => 'group_60c8c835af018',
            'title' => __('Member Profile Settings', 'understrap'),
            'label_placement' => 'top',
            'menu_order' => 0,
            'style' => 'default',
            'position' => 'normal',
            'fields' => [
                [ // see https://awhitepixel.com/blog/advanced-custom-fields-complete-reference-adding-fields-groups-by-code/
                    'key' => 'field_60c8c84b9f7af',
                    'label' => __('Show Facebook Link', 'understrap'),
                    'name' => 'show_facebook_link',
                    'type' => 'true/false', 
                ],
                [
                    'key' => 'field_60c8c86f9f7b0',
                    'label' => 'Member Favorite Posts',
                    'name' => 'member_favorite_posts',
                    'type' => 'relationship', 
                ]


            ],
            'location' => [
                [
                    [
                        // location 1 AND LOCATION 2
                        'param' => 'user_form',
                        'operator' => '==',
                        'value' => 'all'
                    ],
                    [
                        'param' => 'user_role',
                        'operator' => '==',
                        'value' => 'subscriber',

                    ]
                // ],
                 
                    [
                        // location 2
                        'param' => 'post_status',
                        'operator' => '==',
                        'value' => 'publish'
                    ],
                    [
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'template-name.php'


                    ],
                    // Post category only
                    [
                        'param' => 'post_category',
                        'operator' => '==',
                        'value' => 'category:some-category-slug'
                    ]
                    // Any taxonomy
                    [
                        'param' => 'post_taxonomy',
                        'operator' => '==',
                        'value' => 'my_custom_taxonomy:some-category-slug'  // <taxonomy name>:<term slug>
                    ]
                    // Front page
                    [
                        'param' => 'page_type',
                        'operator' => '==',
                        'value' => 'front_page'
                    ]
                    // Posts page
                    [
                        'param' => 'page_type',
                        'operator' => '==',
                        'value' => 'posts_page'
                    ]
                    // Top level page only
                    [
                        'param' => 'page_type',
                        'operator' => '==',
                        'value' => 'top_level'
                    ]
                    // Top level page that has children
                    [
                        'param' => 'page_type',
                        'operator' => '==',
                        'value' => 'parent'
                    ]
                    // Children level pages
                    [
                        'param' => 'page_type',
                        'operator' => '==',
                        'value' => 'children'
                    ]
                    [
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'category'  // Or 'all' for all taxonomies
                    ]
                    [
                        'param' => 'user_form',
                        'operator' => '==',
                        'value' => 'all'  // 'edit' || 'register'
                    ]
                    [
                        'param' => 'nav_menu_item',
                        'operator' => '==',
                        'value' => 'all'
                    ]
                    [
                        'param' => 'widget',
                        'operator' => '==',
                        'value' => 'tag_cloud'  // or 'all' for all widgets
                    ]
                    [
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'acf-options-myoptionspage'
                    ]
                    [
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/cta'  // or 'all' for all ACF blocks
                    ]
                ]

            ], // end of location
        ]); // local field group
    });

}*/

add_filter('acf/pre_save_post', 'save_post_from_frontend', 10, 1);
function save_post_from_frontend( $post_id) {
 
//Check if user loggin or can publish post
//if( ! ( is_user_logged_in() || current_user_can('publish_posts') ) ) {
  //      return;
//}
 
// check if this is to be a new post
    if( $post_id!= 'new_post') {
        return $post_id;
    }
 
        $post= array(
        'post_id'     => 'new-post',
        'post_type'     => 'post', // Your post type ( post, page, custom post type )
        'post_title'    => wp_strip_all_tags( $_POST['post_title'] ),
        'post-content'  => $_POST['post_content'],
        'post_status'   => 'publish', // (publish, draft, private, etc.)
        'post_title'   => true,
        'post_content' => true,
        'title'     =>  wp_strip_all_tags($_POST['acf']['field_60cb4cfb25a03']), // Post Title ACF field key
       // 'post_content'  => $_POST['acf']['field_54dfc94e35ec5'], // Post Content ACF field key
        'text'      => $_POST['acf']['field_60cb4d0b25a04'],
        'image'     => $_POST['acf']['field_60cb4d1425a05'],
        'gallery'   => $_POST['acf']['field_60cb4d3125a06'],

    );
    // insert the post
    $post_id= wp_insert_post( $post);
    // Save the fields to the post
   // do_action( 'acf/save_post', $post_id);
   // $_POST['return'] = add_query_arg(array('post_id' => $post_id), $_POST['return']);
  
  return $post_id;
     
 
}


//triggered only in frontend
// add_filter('acf/pre_save_post', function($post_id) {
//     if (strpos($post_id, 'user_') === false) {
//         return $post_id;
//     }
 
//     $user_id = intval(substr($post_id, 5));  // Extracts the user ID
 
//     // Do your thing. You'll find the submitted values in $_POST
 
//     return $post_id;
// });
// triggered in admin and frontend
//add_action('acf/save_post', function($post_id) {
    // You can fetch the values with standard get_field()
  //  if (strpos($post_id, 'user_') === false) {
  //      return $post_id;
  //  }
 
  //  if (is_admin()) {
  //      return;  // Bail if we are updating in admin
  //  }
 
  //  $user_id = intval(substr($post_id, 5));
 
    // Use get_field() to get the saved/submitted values if needed
    // Then use wp_mail() to send an email
//});
 
//add_action('acf/save_post', function($post_id) {
    // You can access the submitted values in $_POST
//}, 8); // priority less than 10 triggered before ACF saves the values
//
//add_filter('acf/pre_save_post', 'save_post_from_frontend');
/*function save_post_from_frontend( $post_id) {
 
//Check if user loggin or can publish post
if( ! ( is_user_logged_in() || current_user_can('publish_posts') ) ) {
        return;
}
 
// check if this is to be a new post
    if( $post_id!= 'new_post') {
        return $post_id;
    }
 
        $post= array(
        'post_type'     => 'post', // Your post type ( post, page, custom post type )
        'post_status'   => 'publish', // (publish, draft, private, etc.)
        'post_title'    =>  wp_strip_all_tags($_POST['acf']['field_60c8f18bbc7e6']), // Post Title ACF field key
        'post_content'  => $_POST['acf']['field_60c8f20abc7e7'], // Post Content ACF field key  text_block for me
    );
    // insert the post
    $post_id= wp_insert_post( $post);
    // Save the fields to the post
  //  do_action( 'acf/save_post', $post_id);
  //  return $post_id;
 
}*/
add_action('admin_init', 'convert_textarea_to_wysiwyg');

function convert_textarea_to_wysiwyg(){
    wp_enqueue_editor();
    add_action( 'admin_print_footer_scripts', function() {
        ?>
        <script>
            jQuery(function(){
                wp.editor.initialize('the-id-of-your-textarea-without-the-#', {
                    setup: function (editor) {
                        editor.on('change', function () {
                            editor.save();
                        });
                    }
                });
            });
        </script>
        <?php
    }, 10, 2 );
}

 
//add_action('acf/input/form_data', 'edit_input_form_data');
function edit_input_form_data( $data ) {
    echo '<input type="hidden" name="_wpnonce" value="fe0067e124" />';
}

//add_action('acf/save_post', 'acf_edit_save_post');
function acf_edit_save_post( $post_id ) {
    if( isset($_POST['_wpnonce']) ) {
        // Do something.
        
    }
}