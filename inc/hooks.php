<?php
/**
 * Custom hooks
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (! function_exists('understrap_site_info')) {
    /**
     * Add site info hook to WP hook library.
     */
    function understrap_site_info()
    {
        do_action('understrap_site_info');
    }
}

add_action('understrap_site_info', 'understrap_add_site_info');
if (! function_exists('understrap_add_site_info')) {
    /**
     * Add site info content.
     */
    function understrap_add_site_info()
    {
        $the_theme = wp_get_theme();

        $site_info = sprintf(
            '<a href="%1$s">%2$s</a><span class="sep"> | </span>%3$s(%4$s)',
            esc_url(__('http://wordpress.org/', 'understrap')),
            sprintf(
                /* translators: WordPress */
                esc_html__('Proudly powered by %s', 'understrap'),
                'WordPress'
            ),
            sprintf( // WPCS: XSS ok.
                /* translators: 1: Theme name, 2: Theme author */
                esc_html__('Theme: %1$s by %2$s.', 'understrap'),
                $the_theme->get('Name'),
                '<a href="' . esc_url(__('http://understrap.com', 'understrap')) . '">understrap.com</a>'
            ),
            sprintf( // WPCS: XSS ok.
                /* translators: Theme version */
                esc_html__('Version: %1$s', 'understrap'),
                $the_theme->get('Version')
            )
        );

        echo apply_filters('understrap_site_info_content', $site_info); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
}


add_action('storefront_footer', 'storefront_handheld_footer_bar', 999);


add_action('admin_menu', 'quiz_menu_pages');
function quiz_menu_pages()
{
    add_menu_page(//
        'Quiz',
        'Quiz Menu',
        'manage_options',
        'quiz-menu',
        'quiz_callback',
        'dashicons-welcome-learn-more',
        '5'
    );
}
function quiz_callback()
{
     echo 'Quiz List';
}
//add_action('init', 'maybe_rewrite_rules');
function maybe_rewrite_rules()
{
    global $wp_rewrite;
    if (! is_admin()) {
        return;
    }
    flush_rewrite_rules();
    $wp_rewrite->init();
        $wp_rewrite->flush_rules(true);
}
//add_action('admin_menu', 'quiz_taxonomy_menu');
//add_action('parent_file', 'quiz_menu_highlight');

function quiz_taxonomy_menu()
{
    add_submenu_page('quiz-menu', 'Hair Type Category', 'Hair Type Category', 'manage_options', 'edit-tags.php?taxonomy=hair_type_category&post_type=');
    add_submenu_page('quiz-menu', 'Answer Category', 'Answer Category', 'manage_options', 'edit-tags.php?taxonomy=answer_category&post_type=');
}

function quiz_menu_highlight($parent_file)
{
    global $current_screen;

    $taxonomy = $current_screen->taxonomy;
    if ($taxonomy == 'hair-type-category') {
        $parent_file = 'quiz-menu';
    }

    return $parent_file;
}
/**
 * Add custom columns in Admin.
 */
//add_filter( 'manage_testimonial_posts_columns', 'understrap_testimonial_columns' );
function understrap_testimonial_columns($columns)
{
    
    $columns = array(
    'cb'          => $columns['cb'],
    'image'       => __('Avatar'),
    'firstname'   => __('First Name'),
    'lastname'    => __('Last Name'),
    'quote'       => __('Quote'),
    );
    
    return $columns;
}

//add_filter('manage_quiz_posts_columns', 'understrap_quiz_columns');
function understrap_quiz_columns($columns)
{
    
    $columns = array(
    'cb'          => $columns['cb'],
    //'title'       => __( 'First Name' ),
    'title'   => __('Quiz Title'),
    'question'    => __('Related Question'),
    'order'       => __('Quiz Order'),
           
    );
    
    return $columns;
}

//add_action( 'manage_testimonial_posts_custom_column', 'understrap_testimonial_column', 10, 2);
function understrap_testimonial_column($column, $post_id)
{
    // Image column
    if ('image' === $column) {
      //echo get_the_post_thumbnail( $post_id, array(80, 80) );
        $avatar = get_field('avatar');
        if ($avatar) : ?>
      <img width="80" height="auto" src="<?php echo esc_url($avatar['url']); ?>" alt="<?php echo esc_attr($avatar['alt']); ?>">
        <?php endif;
    }
    // First Name column
    if ('firstname' === $column) {
        $firstname = get_field('first_name');

        if (! $firstname) {
            _e('n/a');
        } else {
            echo $firstname;
        }
    }
    // Last Name column
    if ('lastname' === $column) {
        $firstname = get_field('last_name');

        if (! $lastname) {
            _e('n/a');
        } else {
            echo $lastname;
        }
    }
    // Quote column
    if ('quote' === $column) {
        $quote = get_field('quote');

        if (! $quote) {
            _e('n/a');
        } else {
            echo $quote;
        }
    }
    // Example for dollar field
    /* if ( ! $price ) {
        _e( 'n/a' );
      } else {
        echo '$ ' . number_format( $price, 0, '.', ',' ) . ' p/m';
      }
    }*/
    // Surface area column
    /*if ( 'area' === $column ) {
        $area = get_post_meta( $post_id, 'area', true );

        if ( ! $area ) {
          _e( 'n/a' );
        } else {
          echo number_format( $area, 0, '.', ',' ) . ' m2';
        }
    } */
}
//add_action( 'manage_quiz_posts_custom_column', 'understrap_quiz_posts_column', 10, 2);
function understrap_quiz_posts_column($column, $post_id)
{
    // Image column
    if ('question' === $column) {
        $quiz_question = get_field('quiz_question');

        if (! $quiz_question) {
            _e('n/a');
        } else {
            echo $quiz_question;
        }
    }
    // Last Name column
    if ('order' === $column) {
        $order = get_field('quiz_order');

        if (! $order) {
            _e('n/a');
        } else {
            echo $order;
        }
    }
}
//add_filter( 'manage_edit-testimonial_sortable_columns', 'understrap_testimonial_sortable_columns');
function understrap_testimonial_sortable_columns($columns)
{
    $columns['firstname'] = 'firstname';
    return $columns;
}
//add_filter( 'manage_edit-quiz_sortable_columns', 'understrap_quiz_sortable_columns');
 // function understrap_quiz_sortable_columns( $columns ) {
   // $columns['order'] = 'order';
   // return $columns;
  //}

  
