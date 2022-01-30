<?php
/* replaces Ajax API since 4.4 */


 //http://localhost:3000/deliberatedoing2020/?rest_route=/coaching/v1/testimonials

add_action('rest_api_init', 'genuineQuizRoutes');

function genuineQuizRoutes() {

  $namespace = "genuine/v1";

  register_rest_route($namespace, 'quiz', [
        [
            'methods'             => \WP_REST_Server::READABLE,
            'callback'            => 'emailResults',
            'permission_callback' => '__return_true'            
        ]         
    ]);
}
 // this is example for function loadMoreTestimonials 
function my_awesome_func( WP_REST_Request $request ) {
  /* You can access parameters via direct array access on the object: */
  $param = $request['some_param'];
 
   /* Or via the helper method: */
  $param = $request->get_param( 'some_param' );
 
   /* You can get the combined, merged set of parameters:*/
  $parameters = $request->get_params();
 
   /* The individual sets of parameters are also available, if needed:*/
  $parameters = $request->get_url_params();
  $parameters = $request->get_query_params();
  $parameters = $request->get_body_params();
  $parameters = $request->get_json_params();
  $parameters = $request->get_default_params();
 
  /* Uploads aren't merged in, but can be accessed separately: */
  $parameters = $request->get_file_params();
}

function emailResults($data) {
 
  //$paged =  $data->get_param( 'current_page' );
  //
  
  
  
}
/*
wp-json/wp/v2/quiz_category/
[{
  "id":87,
  "count":1,
  "description":"",
  "link":"http:\/\/localhost\/genuine\/quiz_category\/trial\/",
  "name":"trial",
  "slug":"trial",
  "taxonomy":"quiz_category",
  "parent":0,
  "meta":[],
  "_links":{"self":[{"href":"http:\/\/localhost\/genuine\/wp-json\/wp\/v2\/quiz_category\/87"}],

  "collection":[{
    "href":"http:\/\/localhost\/genuine\/wp-json\/wp\/v2\/quiz_category"}],
    "about":[{"href":"http:\/\/localhost\/genuine\/wp-json\/wp\/v2\/taxonomies\/quiz_category"}],
    "wp:post_type":[{
      "href":"http:\/\/localhost\/genuine\/wp-json\/wp\/v2\/quiz?quiz_category=87"}],
      "curies":[{
        "name":"wp",
        "href":"https:\/\/api.w.org\/{rel}",
        "templated":true}]}}] 
      */

add_action('rest_api_init', function () {
    register_rest_route( 'quiz/v1', 'results',array(
                  'methods'  => WP_REST_Server::CREATABLE, // could just use 'POST
                  'callback' => 'results_route',                  
                  'args'     => array (
                        'title'  => array( 
                            'type'             => 'string',
                            'required'         => true,
                            'validate_callback' => function($param){
                                if (strlen($param) > 4) {
                                    return true;
                                } else {
                                    return false;
                                }
                            }
                        ),
                        'content'  => array(
                            'type'     => 'string',
                            'required' => true,
                            'validate_callback' => function($param){
                                if (strlen($param) > 4 ) {
                                    return true;
                                } else {
                                    return false;
                                }
                            }
                        ),
                        'jwt'    => array(
                            'type' => 'integer',
                            'required' => true,
                            'validate_callback' => function($param){
                                if ($param > -1) {
                                    return true;
                                } else {
                                    return false;
                                }
                            }
                        ),
                        // this is the nonce from X-WP-NONCE function
                         '_wpnonce'    => array(
                            'type' => 'string',
                            'required' => true,
                            'validate_callback' => function($param){
                                if ($param > -1) {
                                    return true;
                                } else {
                                    return false;
                                }
                            }
                        ),
                        'session_id'    => array(
                            'type' => 'string',
                            'required' => false
                        ), 
                  ),
                  'permission_callback' => '__return_true',
        ));
  });
  function results_route(WP_REST_Request $request) { // works without WP_REST_Request
        $all_headers ='';
        $request_type = $_SERVER['REQUEST_METHOD'];

        foreach (getallheaders() as $name => $value) {  
                $all_headers .= "$name: $value<br>"; 
        } 
  
        $headersArray = getallheaders();
         //print_r($headersArray);
         
       // $header_nonce = $headersArray['X-WP-NONCE'];
      // $header_nonce = $request->get_header('X-WP-NONCE');
      
     // print_r($request);
        if ($request_type == "POST") { ?>
            <script>console.log($request);
            </script>
         <?php   $parameters = array(
                "title"      => $request->get_param("title"),
                "content"    => $request->get_param("content"),
                "jwt"        => $request->get_param("jwt"),
                "_wpnonce"   => $request->get_param("_wpnonce"),
                "session_id" => $request->get_param("session_id"),
                );  
            // Do standard validations
            $title = sanitize_text_field($request->get_param("title"));
            $content = sanitize_text_field($request->get_param("content"));
            $jwt = $request->get_param("jwt");
            $session_id = sanitize_text_field($request->get_param("session_id"));
            if (!$session_id) $session_id = "logged out";
            $nonce = strval($request->get_param("_wpnonce")); // or value from header X-Wp-nonce
            // 'NoncePageTest' was name or key we gave the nonce on the form page
            $check = wp_verify_nonce( $nonce, 'wp_rest' );
            switch ( $check ) {
                case 0:
                    $message = 'Nonce FAILS. ';
                     break;
                case 1:
                    $message = 'VALID - Nonce is less than 12 hours old. ';
                    break;
                case 2:
                    $message = 'VALID - Nonce is between 12 and 24 hours old. ';
                    break;
                default:
                    $message = 'Nonce is invalid. ';
            }
            if ($check == 1 || $check ==2) {
                // Create post object
                $my_post = array(
                    'post_title'    => $title,
                    'post_content'  => $content,
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_category' => array(4)
                );
                
                // Insert the post into the database
                wp_insert_post( $my_post );
                // send response message as needed...
                $message = "worked";
                return array( 
                    "status"         => "SUCCESS<br>", 
                    "method"         => "POST<br>", 
                    "message"        => $message."<br>", 
                    "jwt received"   => $jwt."<br>",
                    "session_id"     => $session_id."<br>",
                    "form nonce"     => $nonce."<br>",
                    "parameters"     => $parameters['title']."<br>",
                   // "header_nonce"   => $header_nonce."<br><br><hr>",
                    "all_headers"    => "<br>".$all_headers."<br>"
                );
            }
            else {
                return array( 
                    "status"         => "FAILURE<br>", 
                    "message"        => $message."<br>"     
                );
            }
           
        }
  }

 
 
function elearning_wp_biz_change_posttypes_per_page( $query ) {
  
    if ( ! is_admin() && $query->is_main_query() ) {
         
    if ( is_post_type_archive('testimonial') ) {
        $query->set( 'posts_per_page', -1 );         
        $query->set('meta_key', 'testimonial_order');
        $query->set('orderby', 'meta_value');
        $query->set('order', 'ASC');
        return $query;
    } 
   
   // $post_type = $query->query['post_type'];

    if (  'testimonial' == get_post_type() ) {

      $query->set('meta_key', 'testimonial_order');
      $query->set('orderby', 'meta_value');
      $query->set('orderby', 'ASC');

      if ( $query->is_front_page() && ! is_archive() ) {

        $page = $query->query_vars['paged'];
      
        $nums = 9;

        $diff = get_option( 'posts_per_page' ) - $nums; 
        /* $offs = ( $query->query_vars['paged'] - 1 ) * $nums + $diff;    offset to correct for diference */
        $offs = ( $page - 1 ) * $nums + $diff;  /* offset to correct for diference */
        
        $query->set( 'posts_per_page', $nums );

        $query->set( 'offset', $offs ); 
      }
      
      if ( is_archive() ) {
        $query->set( 'posts_per_page', -1 );
        $query->set('meta_key', 'testimonial_order');
        $query->set('orderby', 'meta_value');
        $query->set('orderby', 'ASC');
      } 
    }  
  } 
    return $query;

}
add_action( 'pre_get_posts', 'elearning_wp_biz_change_posttypes_per_page', 1 ); 

/* do NOT allow anyone not logged in to access rest api of users etc. */


//  add_filter( 'rest_authentication_errors', function($result ) {
//   if ( !empty ( $result ) ) {
//     return $result;
//   }
//   if ( ! is_user_logged_in() ) {
//     return new WP_Error( 'rest_not_logged_in', 'You do not have permission to access this area.', array( 'status' => 401 ));
//   }
//   return $result;
// }); 