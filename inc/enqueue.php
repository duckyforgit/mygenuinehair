<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (! function_exists('_themename_assets')) {
    /**
     * Load theme's JavaScript and CSS sources.
     */
    
    function _themename_assets()
    {
        // Forum for headings; Roboto Slab for statistical numbers; Forum to match logo font
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Forum&Roboto+Slab:wght@100;300;600&display=swap');
               
        // get Adobe font Aileron for body
        wp_enqueue_style('adobe-fonts', 'https://use.typekit.net/jet2mof.css');

        wp_enqueue_style('_themename-stylesheet', get_template_directory_uri() . '/dist/css/bundle.css', array(), '1.0.0', 'all');
      
     // $js_version = $theme_version . '.' . filemtime( get_template_directory() . '/dist/js/bundle.js' );
        wp_enqueue_script('_themename-scripts', get_template_directory_uri() . '/dist/js/bundle.js', array(), '1.0.0', true);
      
   
//wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js');

//wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js');

      

      // wp_enqueue_script ("genuinehair-ajax-handle", get_stylesheet_directory_uri() . "/dist/js/ajax.js", array('jquery'));
    //the_ajax_script will use to print admin-ajaxurl in custom ajax.js
   // $adminurl = home_url().'wp-admin/admin-ajax.php';

   //wp_localize_script('genuinehair-ajax-handle', 'the_ajax_script', array('ajaxurl' =>admin_url($adminurl)));
// wp_localize_script(
//      '_themename-scripts', 'ajax_object', array(
//      'ajaxurl' => admin_url( 'admin-ajax.php' ),
//      'ajax_nonce' => wp_create_nonce('quizNonce'),
         
//      'siteURL' => get_site_url(),
//  ));

 
   // create global JS variables for the enqueued JS file
   // global JS variables on all pages. Do 'Inspect Source' and find CDATA...
        wp_localize_script(
            '_themename-scripts',
            'siteObj',
            array(
            'siteUrl'    => get_home_url(),
            'root'       => esc_url_raw(rest_url()),
            'wpNonce'    => wp_create_nonce('wp_rest'),
            'filePath'   => get_theme_file_uri() . '/dist/js/bundle.js'
            )
        );
/* Load Script */
// wp_localize_script( 'my_ajax_script', 'my_ajax_url', admin_url( 'admin-ajax.php' ) );
/* AJAX Callback */
// add_action( 'wp_ajax_my_ajax_action', function(){
//     $first_name = isset( $_POST['first_name'] ) ? $_POST['first_name'] : 'N/A';
//     $last_name = isset( $_POST['last_name'] ) ? $_POST['last_name'] : 'N/A';
//     $response = "Your name is {$first_name} {$last_name}";
//     wp_send_json_success( $response );
// } );
 // works with inc/rest-api.php
        // wp_localize_script('_themename-scripts', 'quizData', array(
        //     'root_url' => get_site_url(),
        //     'restURL' => rest_url(),
        //     'api_urlbasic' => site_url().'/wp-json/',
        //   //  'api_nonce' => wp_create_nonce('wp_rest'),
        //     'restNonce' => wp_create_nonce( 'wp_rest')
        //    // 'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1
            
        // ));
 
   //wp_localize_script(
  //    'genuinehair-ajax-handle',
  //    'frontend_ajax_object',
  //    array('ajaxurl' =>admin_url('admin-ajax.php')));
 // wp_localize_script('genuinehair-ajax-handle', 'frontend_ajax_object',
 //         array(
 //                 'ajaxurl' =>admin_url().'admin-ajax.php',
    //       'root_url' => get_site_url(),
           // 'api_urlbasic' => site_url().'/wp-json/',
           // 'api_nonce' => wp_create_nonce('wp_rest'),
         //   'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
    //      'max_page' => $wp_query->max_num_pages
    //    ));

//    wp_add_inline_script( 'genuinehair-ajax-handle', 'const MYSCRIPT = ' . json_encode( array(
//     'ajaxUrl' => admin_url( 'admin-ajax.php' ),
//     'otherParam' => 'some value',
// ) ), 'before' );

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
}

add_action('wp_enqueue_scripts', '_themename_assets');

function newsletter_signup()
{

    // Get the email address
    $email = sanitize_email($_POST['email-address']);

    // Do what you wish with the email address.

    //Setup the data to send back
    $data = array();

    // json encode the data to send back
    echo json_encode($data);
    exit;
}

add_action('wp_ajax_newsletter_signup', 'newsletter_signup');
add_action('wp_ajax_nopriv_newsletter_signup', 'newsletter_signup');

 

function ajax_scripts()
{
     
    $url = trailingslashit(plugin_dir_url(__FILE__));
    wp_register_script('my_ajax_script', $url . 'script.js', array( 'jquery', 'wp-util' ), '0.1.0', true);
}
//add_action('wp_enqueue_scripts', 'ajax_scripts');
//
//
/* function javascript_variables(){ ?>
    <script type="text/javascript">
        var ajax_url = '<?php echo admin_url( "admin-ajax.php" ); ?>';
        var ajax_nonce = '<?php echo wp_create_nonce( "secure_nonce_name" ); ?>';
    </script><?php
}*/


//add_action ( 'wp_head', 'javascript_variables' );

// Here we register our "send_form" function to handle our AJAX request, do you remember the "superhypermega" hidden field? Yes, this is what it refers, the "send_form" action.
//add_action('wp_ajax_send_form', 'send_form'); // This is for authenticated users
//add_action('wp_ajax_nopriv_send_form', 'send_form'); // This is for unauthenticated users.
 
/**
 * In this function we will handle the form inputs and send our email.
 *
 * @return void
 */
 
function send_form()
{
 
    // This is a secure process to validate if this request comes from a valid source.
    check_ajax_referer('secure-nonce-name', 'security');
 
    /**
     * First we make some validations,
     * I think you are able to put better validations and sanitizations. =)
     */
     echo "in send form";
      $response['message']='Quiz saved';
     wp_send_json($response);
    if (empty($_POST["name"])) {
        echo "Insert your name please";
        wp_die();
    }
 
    if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo 'Insert your email please';
        wp_die();
    }
 
    if (empty($_POST["comment"])) {
        echo "Insert your comment please";
        wp_die();
    }
 
    // This is the email where you want to send the comments.
    $to = 'ourcompanysemail@example.com';
 
    // Your message subject.
    $subject = 'Now message from a client!';
    
    $body  = 'From: ' . $_POST['name'] . '\n';
    $body .= 'Email: ' . $_POST['name'] . '\n';
    $body .= 'Message: ' . $_POST['comment'] . '\n';
 
    // This are the message headers.
    // You can learn more about them here: https://developer.wordpress.org/reference/functions/wp_mail/
    $headers = array('Content-Type: text/html; charset=UTF-8');
     
    wp_mail($to, $subject, $body, $headers);
 
    echo 'Done!';
    wp_die();
}
function process_quiz()
{
 // alert('in process quiz');
    $response = array(
        'error' => false,
    );
    if (isset($_POST['registration-submit'])) :
        if (wp_verify_nonce($_REQUEST['_registration_nonce'], 'submit-form-registration')) {
            echo 'Nonce verified!';
        } else {
            echo 'Nonce not verified';
        }
    endif;
    // Example for creating an response with error information, to know in our js file
    // about the error and behave accordingly, like adding error message to the form with JS
    if (trim($_POST['email']) == '') {
        $response['error'] = true;
        $response['error_message'] = 'Email is required';
 
        // Exit here, for not processing further because of the error
        exit(json_encode($response));
    }
    $response['message']='Quiz saved';
    // ... Do some code here, like storing inputs to the database, but don't forget to properly sanitize input data!
    wp_send_json($response);
    // Don't forget to exit at the end of processing
    // exit(json_encode($response));
    //
    //
// <form action="" method="post" name="contact-me">
//     <div class="form-field">
//         <label>Name: </label>
//         <input name="name" type="text" placeholder="Type your name" required>
//     </div>
//     <div class="form-field">
//         <label>Email: </label>
//         <input name="email"  type="email" placeholder="Type a valid email" required>
//     </div>
//     <div class="form-field">
//         <label>Name: </label>
//         <textarea name="comment" placeholder="Type your comment" required></textarea>
//     </div>
//     <input type="hidden" name="action" value="send_form" style="display: none; visibility: hidden; opacity: 0;">
//     <button type="submit">Send message!</button>
// </form>


            //  $result['status']=1;
                //  $result['message']='Quiz saved';
 //$json_result = json_encode($response);
     // return  $json_result;
     //die( $json_result );
    
    // stop all other processing
    exit;
}


function save_quiz()
{
 
    
    // setup default result data
    $result = array(
        'status' => 0,
        'message' => 'Quiz was not saved. ',
    );
    
    try {
        // get list_id
        //$list_id = (int)$_POST['slb_list'];
    
        // prepare subscriber data
        $subscriber_data = array(
            'name'=> esc_attr($_POST['name']),
             
            'email'=> esc_attr($_POST['email']),
             
        );
        
        // attempt to create/save quiz_taker
        $quiz_id = save_quiz_taker($subscriver_data);
        
        // IF subscriber was saved successfully $subscriber_id will be greater than 0
        if ($quiz_id) :
            // IF subscriber already has this subscription
            //if( slb_subscriber_has_subscription( $subscriber_id, $list_id ) ):
            
               // get list object
            //  $list = get_post( $list_id );
                
               // return detailed error
            //  $result['message'] .= esc_attr( $subscriber_data['email'] .' is already subscribed to '. $list->post_title .'.');
                
            //else:
            
               // save new subscription
               $quiz_saved = add_quiz($subscriber_id, $list_id);
        
               // IF subscription was saved successfully
            if ($subscription_saved) :
              // subscription saved!
                $result['status']=1;
                $result['message']='Subscription saved';
            endif;
        endif;
        
        //endif;
    } catch (Exception $e) {
    }
    
    // return result as json
    slb_return_json($result);
}

// 5.2
// hint: creates a new subscriber or updates and existing one
function save_subscriber($subscriber_data)
{
    
    // setup default subscriber id
    // 0 means the subscriber was not saved
    $subscriber_id = 0;
    
    try {
        $subscriber_id = slb_get_subscriber_id($subscriber_data['email']);
        
        // IF the subscriber does not already exists...
        if (!$subscriber_id) :
            // add new subscriber to database
            $subscriber_id = wp_insert_post(
                array(
                    'post_type'=>'slb_subscriber',
                    'post_title'=>$subscriber_data['fname'] .' '. $subscriber_data['lname'],
                    'post_status'=>'publish',
                ),
                true
            );
        endif;
        
        // add/update custom meta data
        update_field(slb_get_acf_key('slb_fname'), $subscriber_data['fname'], $subscriber_id);
        update_field(slb_get_acf_key('slb_lname'), $subscriber_data['lname'], $subscriber_id);
        update_field(slb_get_acf_key('slb_email'), $subscriber_data['email'], $subscriber_id);
    } catch (Exception $e) {
        // a php error occurred
    }
    
    // return subscriber_id
    return $subscriber_id;
}

function post_data()
{
    $errors = [];
    $data = [];

    if (empty($_POST['name'])) {
        $errors['name'] = 'Name is required.';
    }

    if (empty($_POST['email'])) {
        $errors['email'] = 'Email is required.';
    }

    if (empty($_POST['message'])) {
        $errors['message'] = 'Message is required.';
    }

    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {
        $data['success'] = true;
        $data['message'] = 'Success!';
    }

    echo json_encode($data);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $admin =get_option('admin_email');

        $new_post = array(
                       'post_title'    => $name,
                       'post_content'  => $message,
                       'post_status'   => 'publish',           // Choose: publish, preview, future, draft, etc.
                       'post_type' => 'ajaxform'  //'post',page' or use a custom post type if you want to
        );

        $pid = wp_insert_post($new_post);
        if (empty($email) or ! $email) {
            delete_post_meta($pid, 'meta_email');
        } elseif (! get_post_meta($pid, 'meta_email')) {
            add_post_meta($pid, 'meta_email', $email);
        } else {
            update_post_meta($pid, 'meta_email', $email);
        }
}


function ajax_form_scripts()
{
    $translation_array = array(
        'ajax_url' => admin_url('admin-ajax.php')
    );
    wp_localize_script('main', 'cpm_object', $translation_array);
}
 

//add_action( 'wp_enqueue_scripts', 'ajax_form_scripts' );
//add_action( 'wp_ajax_set_form', 'set_form' );    //execute when wp logged in
//add_action( 'wp_ajax_nopriv_set_form', 'set_form'); //execute when logged out

function set_form()
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $admin =get_option('admin_email');
    // wp_mail($email,$name,$message);  main sent to admin and the user
    if (wp_mail($email, $name, $message)  &&  wp_mail($admin, $name, $message)) {
           echo "mail sent";

            $new_post = array(
                       'post_title'    => $name,
                       'post_content'  => $message,
                       'post_status'   => 'draft',           // Choose: publish, preview, future, draft, etc.
                       'post_type' => 'ajaxform'  //'post',page' or use a custom post type if you want to
                    );

                    // show the email in meta box
                    $pid = wp_insert_post($new_post);
            if (empty($email) or ! $email) {
                   delete_post_meta($pid, 'meta_email');
            } elseif (! get_post_meta($pid, 'meta_email')) {
                add_post_meta($pid, 'meta_email', $email);
            } else {
                update_post_meta($pid, 'meta_email', $email);
            }
    } else {
                      echo "mail not sent";
    }
    die();
}
// wp-config has definitions of SMTP_HOST , etc
// define( 'SMTP_HOST', 'server.a2hosting.com' );  // A2 Hosting server name. For example, "a2ss10.a2hosting.com"
//define( 'SMTP_AUTH', true );
//define( 'SMTP_PORT', '465' );
//define( 'SMTP_SECURE', 'ssl' );
//define( 'SMTP_USERNAME', 'user@example.com' );  // Username for SMTP authentication
//define( 'SMTP_PASSWORD', 'password' );          // Password for SMTP authentication
//define( 'SMTP_FROM',     'user@example.com' );  // SMTP From address
//define( 'SMTP_FROMNAME', 'Kelly Koe' );         // SMTP From name
//
add_action('phpmailer_init', 'send_smtp_email');
function send_smtp_email($phpmailer)
{
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = SMTP_AUTH;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->Username   = SMTP_USERNAME;
    $phpmailer->Password   = SMTP_PASSWORD;
    $phpmailer->From       = SMTP_FROM;
    $phpmailer->FromName   = SMTP_FROMNAME;
}


//To Save The Message In Custom Post Type
 



if (! function_exists('understrap_scripts')) {
    /**
     * Load theme's JavaScript and CSS sources.
     */
    
    


    function understrap_scripts()
    {
        // Get Google fonts
    // wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Jomolhari&family=Libre+Franklin:wght@100;300;400;600;800&display=swap');
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@100;300;400;500;600;800&display=swap');
   
         
        // Get the theme data.
        $the_theme     = wp_get_theme();
        $theme_version = $the_theme->get('Version');

        $css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');
        
        wp_enqueue_style('understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version);

        //wp_enqueue_style( 'calendar-styles', get_template_directory_uri() . '/schedule.min.css', array(), '' );

        //wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', false );
         
        $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/theme.min.js');

        wp_enqueue_script('understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true);

        //wp_enqueue_script( 'isotope', "https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js", array( 'jquery' ), '', true );
        //  wp_enqueue_script( 'masonry', "https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js", array( 'jquery' ), '', true );
            // <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>


     //     wp_enqueue_script( 'events', get_stylesheet_directory_uri() . ( '/js/events.js' ), array(), '1.0', true );
 
     // wp_localize_script('events', 'eventsData', array(
        //    'root_url' => get_site_url(),
        //    'api_urlbasic' => site_url().'/wp-json/tribe/events/v1/events/',
        //    'api_nonce' => wp_create_nonce('wp_rest'),
        //    'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        //    'max_page' => $wp_query->max_num_pages
        //  ));

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
} // End of if function_exists( 'understrap_scripts' ).

//add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
 
//add_action( 'wp_enqueue_scripts', 'deregister_tribe_styles' );
 
function deregister_tribe_styles()
{
   // wp_deregister_style( 'tribe-events-pro-views-v2-skeleton' );
   // wp_deregister_style( 'tribe-events-pro-views-v2-full' );
     wp_deregister_style('tribe-events-views-v2-skeleton');
  //  wp_deregister_style( 'tribe-events-views-v2-full' );
    wp_deregister_style('tribe-common-skeleton-style');
  //  wp_deregister_style( 'tribe-common-full-style' );
}

function wr_filter_script_loader_tag($html, $handle)
{
    if ($handle === 'webfonts'  ||  $handle === 'webfonts2') {
            return str_replace("rel='stylesheet'", "rel='preload' as='font' type='font/woff2' crossorigin='anonymous'", $html);
    }
  
  
    if ($handle === 'google-fonts-preconnect') {
        return str_replace("rel='stylesheet'", "rel='preconnect'", $html);
    }
      return $html;

    if ($handle === 'bootstrap') {
           return str_replace("integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM'", "crossorigin='anonymous'", $html);
    }
}
//add_filter('style_loader_tag', 'wr_filter_script_loader_tag', 10, 4);



function add_async_attribute($tag, $handle)
{
   // add script handles to the array below
    $scripts_to_async = array(
    'understrap-scripts-js',
      'understrap-scripts');
   
    foreach ($scripts_to_async as $async_script) {
        if ($async_script === $handle) {
            return str_replace(' src', ' async="async" src', $tag);
        }
    }
    return $tag;
}
//add_filter('script_loader_tag', 'add_async_attribute', 10, 2);

function add_defer_attribute($tag, $handle)
{
   // add script handles to the array below
    $scripts_to_defer = array(
        'admin',
        'customize-preview'
    );
 
   
    foreach ($scripts_to_defer as $defer_script) {
        if ($defer_script === $handle) {
            return str_replace(' src', ' defer="defer" src', $tag);
        }
    }
    return $tag;
}
//add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

function add_module_attribute($tag, $handle)
{
   // add script handles to the array below
    $scripts_to_add_module = array(
        'events',
        'events-js'
    );
    if (in_array($handle, $scripts_to_add_module)) {
        return str_replace(' src', ' type="module" src', $tag);
    }
    
    return $tag;
}
 //add_filter('script_loader_tag', 'add_module_attribute', 10, 2);
