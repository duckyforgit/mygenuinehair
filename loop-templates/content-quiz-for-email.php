<?php
/**
 * Partial template for quiz in page.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!-- goes to /pages/quiz/  -->





<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	 
<!-- <section>
<div class="container">
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">          
      </div>-->
      <!-- Add this below the progress bar div but still inside the container -->
      <!--  <a href="#" class="btn btn-primary" data-progress="25">task-1</a>
        <a href="#" class="btn btn-primary" data-progress="50">task-2</a>
        <a href="#" class="btn btn-primary" data-progress="75">task-3</a>
        <a href="#" class="btn btn-primary" data-progress="100">task-4</a>
    </div>
</div>
</section> -->
<script>
    const rnd =  Math.floor(Math.random() * 100000000000);
    localStorage.setItem("JWT", rnd );
</script>
<!-- CONTAINER -->
<div class="container d-flex align-items-center ">
   <div class="row g-0 justify-content-center">
      <!-- TITLE -->
      <div class="col-lg-4 offset-lg-1 mx-0 px-0">
         
        <div id="title-container">
           <img class="covid-image" src="<?php echo get_template_directory_uri().'/dist/img/checkmark.png'?>">
           <h2>HAIR QUIZ</h2>
           <h3>Find Out What Type of Hair You Have</h3>
           <p>Take the quiz and get suggestions for your hair type or contact us for a personal recommentation.</p>
        </div>
      </div>
    <div class="col-lg-7 mx-0 px-3"> 
    <form autocomplete="off" class="needs-validation flex-column" id="form-wrapper" method="post" name="form-wrapper" novalidate action="">
        <fieldset>
            <legend>Fill out to take the quiz</legend> 
        </fieldset>
            <!-- <input id="wpq_action" type="hidden" value="select_quiz_cat" name="wpq_action" > -->

            <label for="firstName" class="form-check-label" >First Name</label>
            <input class="f" id="firstName" name="firstName" type="text"> 
            
            <label for="lastName" class="form-check-label" >Last Name</label>
            <input class="" id="lastName" name="lastName" type="text"> 

            <label for="email" class="form-check-label" >Email Address</label>
            <input class="" id="email" name="email" type="email"> 


 <?php
    /**
     * Setup query to show the ‘services’ post type with all posts filtered by 'home' category.
     * Output is linked title with featured image and excerpt.
     */                       
    $args = array(  
        'post_type' => 'quiz',        // 'post_status' => 'publish',
        'posts_per_page' => 1,         //'orderby' => 'quiz_order', 
       // 'order' => 'ASC',
         'cat' => 'trial',
    );

    $loop = new WP_Query( $args ); 
         $ques = 0; 
        while ( $loop->have_posts() ) : $loop->the_post(); 
            //print_r($loop);    
            $id = $loop->get_the_id();

            $post_id = '457';  
           
            $ans = 0;
            $qid;
            $name;
             // Check rows exists.
        if( have_rows('quiz_question_group') ):
         
            // Loop through rows.
            while( have_rows('quiz_question_group') ) : the_row();
                $questions = get_sub_field('quiz_question', $id );
                 foreach( $questions as $question ):  
                 // echo get_the_title($question);
                endforeach;
                $ans = 0; ?>
                <div class="">
                  <?php $ques ++; ?>
                    <div class="quiz-content is-active">    
                        <h2 id="<?php echo $ques;?>" class="quiz-question"><?php echo get_the_title($question); ?></h2>

                         
                        <p>Choose up to 2</p> 

                    <?php  
                     if( have_rows('answers') ):

                        // Loop through rows.
                         while( have_rows('answers') ) : the_row();  
                             $ans ++; 
                            $name = 'q_'.$ques;
                            $qid = 'q_' . $ques.'_' . $ans;   
                            $answers = get_sub_field('answer_text', $id );
                         
                            foreach($answers as $answer) : ?>

                              <div class="form-check ps-0 q-box"> 
                                <div class="q-box__question">
                                  <input class="button form-check-input question__input" id="<?php echo $qid;?>" name="<?php echo $qid; ?>" type="checkbox" value="<?php echo get_the_title($answer) ?>" multiple > 
                                  <label class="form-check-label question__label" for="<?php echo $qid; ?>"><?php echo get_the_title($answer); ?>
                                  </label>
                                </div>
                            </div>

                             

                        <?php   
                        endforeach; ?>

                    
                     <?php   // Do something...
                         

                        // End loop.
                         endwhile;

                    // No value.
                  //  else :
                     // Do something...
                    endif;  ?>

                    </div>
                </div> <!-- end of step -->

            <?php 
            endwhile;  /*end for  question_group */
            endif;


        endwhile;  /* for the queried quiz */
        wp_reset_postdata(); ?>
        <input id="btnSubmit" name="btnSubmit" class="w3-btn w3-border w3-large w3-blue" type="button" value="SEND FORM">
         
        </form>
    </div>
</div>
 <!-- FORMS -->
     <!--  <div class="col-lg-7 mx-0 px-0"> 
            <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%">                    
                </div>
            </div>
            <div id="qbox-container">
                <h2 class="quiz-question text-center">Take our quiz</h2> 
         

                <form class="needs-validation flex-column" id="form-wrapper" method="post" name="form-wrapper" novalidate action="">
                    <input id="wpq_action" type="hidden" value="select_quiz_cat" name="wpq_action" >-->
                <?php 
              //  wp_nonce_field( 'submit-form-registration', '_registration_nonce', true, true ); 
                ?>
                    <!-- STEPS HERE -->
                   <!--  <div id="steps-container"> -->

                    <?php
                    /**
                     * Setup query to show the ‘services’ post type with all posts filtered by 'home' category.
                     * Output is linked title with featured image and excerpt.
                     */
                       
                    // $args = array(  
                    //     'post_type' => 'quiz',
                    //    // 'post_status' => 'publish',
                    //     'posts_per_page' => -1, 
                    //     //'orderby' => 'quiz_order', 
                    //    // 'order' => 'ASC',
                    //      'cat' => 'trial',
                    // );

                    // $loop = new WP_Query( $args ); 
                    //      $ques = 0; 
                    //     while ( $loop->have_posts() ) : $loop->the_post(); 
                             
                    //         //print_r($loop);    
                    //         $id = $loop->get_the_id();

                    //         $post_id = '457';  
                           
                    //         $ans = 0;
                    //         $qid;
                    //         $name;
 
// $students = get_posts(array(
//       'post_type' => 'student',
//       'posts_per_page' => -1,
//       'meta_query' => array(
//         array(
//           'key' => 'course', // name of custom field
//           'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
//           'compare' => 'LIKE'
//         )
//       )
//     ));
                            // Check rows exists.
                           // if( have_rows('quiz_question_group') ):
                             
                                // Loop through rows.
                                //while( have_rows('quiz_question_group') ) : the_row();
                                   // $question = get_sub_field('quiz_question', $id );
                                    
                                   // $ans = 0;
                                    // Load sub field value.
                                   // $sub_value = get_sub_field('quiz_question'); ?>
                                <!--     <div class="step"> -->
                                      <?php //$ques ++; ?>
                                        <!-- <div class="quiz-content is-active">    
                                            <h2 id="<?php //echo $ques;?>" class="quiz-question"><?php //echo $question ?></h2>

                                             
                                            <p>Choose up to 2</p> --> 

                                        <?php  
                                     /*   if( have_rows('answers') ):

                                            // Loop through rows.
                                            while( have_rows('answers') ) : the_row();  
                                                $ans ++; 
                                                $name = 'q_'.$ques;
                                                $qid = 'q_' . $ques.'_' . $ans;   
                                                $answer_text = get_sub_field('answer_text', $id ); */?>
                                            <?php //echo $answer_text;?>

                                        <!-- q_5_two  -->
                                               <!-- <div class="form-check ps-0 q-box"> 
                                                  <div class="q-box__question">
                                                    <input class="button form-check-input question__input" id="<?php //echo $qid;?>" name="<?php //echo $qid; ?>" type="checkbox" value="<?php //echo $answer_text;?>" multiple> 
                                                    <label class="form-check-label question__label" for="<?php //echo $qid; ?>"><?php //echo $answer_text;?>
                                                    </label>
                                                 </div>
                                               </div> -->

                                         <?php   // Do something...
                                             

                                            // End loop.
                                          //  endwhile;

                                        // No value.
                                       // else :
                                         // Do something...
                                      //  endif;  ?>
                                        <!-- </div>
                                    </div> --> <!-- end of step -->

                                <?php 
                              //  endwhile;  /*end for  question_group */
                              //  endif;


                           // endwhile;  /* for the queried quiz */
                           // wp_reset_postdata(); 
                            ?>  

                       <!--  </div>
                    <div id="q-box__buttons">
                        <button id="btnPrev" type="button">Previous</button>--> 
                        <!--  <button id="start-btn" class="visible" type="button">Start</button>  -->
                        <!-- <button id="btnNext" class="" type="button">Next</button> 
                        <button id="btnSubmit" type="submit">Submit</button>

                     </div>
                </form>
            </div>
        </div>
    </div> --><!-- end of row -->
 </div> 
<div class="container"> 
    <div class="row mt-5 justify-content-center">
        <div class="col-sm-8">
            <table>
                <tr>
                    <td><b> RETURN VALUE:</b></td>
                </tr>
                <tr>
                    <td>
                        <div id="output" style="word-break: break-all;"></div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
              <!--   <script>
                    const btn = document.getElementById('btnSubmit');
                    btn.addEventListener('click', formHandler);
                    //jwt.innerHTML = "Data being sent: " + emailValue + " - " + passwordValue;
                    function formHandler() {
                    // id="<?php //echo $qid;?>"
                        const q11 = document.getElementById('q_1_1').value;
                        const q21 = document.getElementById('q_2_1').value;
                        //const data = title = "Conent here";
                       
                        console.log("question q11", q11);
                        console.log("question q21", q21);
                        const output = document.getElementById('output');
                        const JWT = localStorage.getItem('JWT');
                        const session_id = '<?php //echo wp_get_session_token(); ?>';
                        if (session_id == null) {
                            session_id = 'logged-out';
                        }
                       
                        // One can use localize_script to create global JS variable to use in PHP
                        // https://wordpress.stackexchange.com/questions/119573/is-it-possible-to-use-wp-localize-script-to-create-global-js-variables-without-a 
                        // gives other possibilities for creating global JS vvariables to work across all JS scripts.

                        // example code wp_localize_js_var.php in mu-plugins
                        // test.js

                        // Must be wp_rest to work 
                        // Either _wpnonce as POST parameter or use headers: { 'X-WP-Nonce': nonceValue} in AJAX

                        
                        const nonceValue = '<?php //echo wp_create_nonce('wp_rest'); ?>'; // ! must be wp_rest
                        console.log("form nonceValue via PHP: " + nonceValue);
                        // https://developer.wordpress.org/rest-api/using-the-rest-api/authentication/
                        console.log("GLOBAL JS OBJECT: " + siteObj.wpNonce);

                        const formData = new FormData();
                        formData.append('q11', title);
                        formData.append('q21', data);
                        formData.append('jwt', JWT);
                        formData.append('_wpnonce', nonceValue); 
                        formData.append('session_id', session_id); 
                      //  
                       // console.log(formData.get('_wpnonce'));
                       // console.log(nonceValue);
                        // must use _wpnonce as parameter in POST otherwise headers below must be used
                        // SITE can be hard coded or added to a wp_localize_script() to create global JS variables
                        let apiUrl = '<?php //echo home_url(); ?>' + '/wp-json/understrap/v1/rest04';
                        console.log("url: " + apiUrl);
                        fetch(apiUrl, {
                                method: 'POST',
                                body: formData,
                                // if one does not use _wpnonce as POST parameter then one can send nonce in headers as below
                               // headers: { 'X-WP-Nonce': nonceValue}
                            })
                            .then(function (response) {
                                console.log(response);
                                return response.text(); // convert stream response tot text
                            })
                            .then(function (data) {
                               // console.log(data);
                                // display result on page for demo purposes
                                output.innerHTML = data;                
                            });
                    }
                </script> -->

 <!-- </div>    
</div>
</div>
</div> -->


<div class="container d-flex align-items-center ">
  <div class="row">
    <div class="col-sm-3">
<div id="preloader-wrapper">
   <div id="preloader"></div>
   <div class="preloader-section section-left"></div>
   <div class="preloader-section section-right"></div>
</div>
</div>
</div>
  </div>
<div class="container d-flex align-items-center">
<div id="success">
    
     
</div>
</div>
            
 
<!-- <section class="bootstrap-breadcrumbs">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb arr-right">
      <li class="breadcrumb-item active" aria-current="page">Question 1</li>
      <li class="breadcrumb-item" aria-current="page">Question 2</li>
      <li class="breadcrumb-item" aria-current="page">Question 3</li>
      <li class="breadcrumb-item" aria-current="page">Question 4</li>
      <li class="breadcrumb-item" aria-current="page">Question 5</li>
    </ol>
</nav>
</section> -->

    
 