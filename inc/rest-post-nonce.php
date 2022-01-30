<?php
// POST PARAMETER
add_action('rest_api_init', function () {
    register_rest_route( 'understrap/v1', 'rest05',array(
                  'methods'  => WP_REST_Server::CREATABLE, // could just use 'POST
                  'callback' => 'rest05_route',                  
                  'args'     => array (                     
                        // 'q11'  => array( 
                        //     'type'             => 'string',
                        //     'required'         => true,
                        //     //'validate_callback' => function($param){
                        //        // if (strlen($param) > 4) {
                        //         //    return true;
                        //        // } else {
                        //          //   return false;
                        //        // }
                        //     //}
                        // ),
                        // 'q21'  => array(
                        //     'type'     => 'string',
                        //     'required' => true,
                        //    // 'validate_callback' => function($param){
                        //       //  if (strlen($param) > 4 ) {
                        //       //      return true;
                        //        // } else {
                        //          //   return false;
                        //         //}
                        //     //}
                        // ),
                        // 'jwt'    => array(
                        //     'type' => 'integer',
                        //     'required' => true,
                        //     'validate_callback' => function($param){
                        //         if ($param > -1) {
                        //             return true;
                        //         } else {
                        //             return false;
                        //         }
                        //     }
                        // ), 
                        // this is the nonce from X-WP-NONCE function
                        //  '_wpnonce'    => array(
                        //     'type' => 'string',
                        //     'required' => true,
                        //     'validate_callback' => function($param){
                        //         if ($param > -1) {
                        //             return true;
                        //         } else {
                        //             return false;
                        //         }
                        //     }
                        // ),
                        // 'session_id'    => array(
                        //     'type' => 'string',
                        //     'required' => false
                        // ), 
                  ),
                  'permission_callback' => '__return_true',
        ));
  });
  function rest05_route(WP_REST_Request $request) { // works without WP_REST_Request ?>
 <script>console.log("in rest05_route");
            </script>  
            <?php      $all_headers ='';
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
                'firstName' => $request->get_param("firstName"),
                'lastName'  => $request->get_param("lastName"),
                'email'  => $request->get_param("email"),
                "q11"       => $request->get_param("q11"),
                "q21"       => $request->get_param("q21"),
                "jwt"       => $request->get_param("jwt"),
                "_wpnonce"  => $request->get_param("_wpnonce"),
                "session_id"=> $request->get_param("session_id"),
                );  
            // Do standard validations
            $fname = sanitize_text_field($request->get_param("firstName"));
            $lname = sanitize_text_field($request->get_param("lastName"));
            $email = sanitize_text_field($request->get_param("email"));
            $q11 = sanitize_text_field($request->get_param("q11"));
            $q21 = sanitize_text_field($request->get_param("q21"));
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
                $quiz_contact = array(
                    'first_name'        => $fname,
                    'last_name'         => $lname,
                    'email'             => $email
                    // 'post_question_1'   => $title,
                    // 'post_question_1'   => $content,
                    // 'post_status'       => 'publish',
                    // 'post_author'       => 1,
                    // 'post_category'     => array(4)
                );
                $format = array('%s','%s','%s');

                $quiz_taken = array(
                    'question1'        => $q11,
                    'question2'         => $q21,
                    'answer1'             => $email,
                    'answer2'             => $email
                    // 'post_question_1'   => $title,
                    // 'post_question_1'   => $content,
                    // 'post_status'       => 'publish',
                    // 'post_author'       => 1,
                    // 'post_category'     => array(4)
                );
                // Insert the post into the database
                global $wpdb; //removed $name and $description there is no need to assign them to a global variable
                $table_name = $wpdb->prefix . "quiz_contacts"; //try not using Uppercase letters or blank spaces when naming db tables

                $result = $wpdb->insert($table_name, $quiz_contact, $format);

                if($result)  {

                 
                
              //  wp_insert_post( $my_post );
                // send response message as needed...
                $message = "worked";
                return array( 
                    "status"         => "SUCCESS<br>", 
                    "method"         => "POST<br>", 
                    "message"        => $message."<br>", 
                    "jwt received"   => $jwt."<br>",
                    "session_id"     => $session_id."<br>",
                    "form nonce"     => $nonce."<br>",
                    "parameters"     => $parameters['q11']."<br>",
                   // "header_nonce"   => $header_nonce."<br><br><hr>",
                    "all_headers"    => "<br>".$all_headers."<br>"
                );
                }
                else {
                    return array( 
                    "status"         => "DB FAILURE<br>", 
                    "message"        => $message."<br>"     
                    );
                }

            }
            else {
                return array( 
                    "status"         => "FAILURE<br>", 
                    "message"        => $message."<br>"     
                );
            }
           
         
  }
};