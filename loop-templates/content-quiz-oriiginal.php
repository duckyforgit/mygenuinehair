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

	 
  <section>
<div class="container">
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">          
      </div> 
      <!-- Add this below the progress bar div but still inside the container -->
    <a href="#" class="btn btn-primary" data-progress="25">task-1</a>
        <a href="#" class="btn btn-primary" data-progress="50">task-2</a>
        <a href="#" class="btn btn-primary" data-progress="75">task-3</a>
        <a href="#" class="btn btn-primary" data-progress="100">task-4</a>
    </div>
</div>
</section> 
 <div class="container d-flex align-items-center min-vh-100">
   <div class="row g-0 justify-content-center"> 
      <!-- TITLE -->
     <!--  <div class="col-lg-4 offset-lg-1 mx-0 px-0"> -->
  <?php //$args = array(
     // 'post_type'     => 'quiz',
     // 'post_per_page' => -1
      //'meta_key'      => 'testimonial_order',
     // 'orderby'       => 'meta_value',
     // 'order'         => 'ASC',
     // 'page'          => 1
//  );         
            
    
   
 // $quizQuery = new WP_Query( $args );  
  // if ( $quizQuery->have_posts() ) : 
     ?>
   

  
               
     <!--  <div class=" "> -->
    
       <?php //while ( $quizQuery->have_posts() ) : $quizQuery->the_post(); ?> 

       <!--  <p><?php //the_field('quiz_name'); ?></p> -->
        <?php

         // check if the repeater field has rows of data
       //  if( have_rows('question') ):

            // loop through the rows of data
           //  while ( have_rows('question') ) : the_row();

                 // display a sub field value
             // '<p>question</p> ';    the_sub_field('question_one');
                 // if( have_rows('answer_group') ):

                     // loop through the rows of data
                    //  while ( have_rows('answer_group') ) : the_row();

                          // display a sub field value
                   // '<p>answer</p> ';         the_sub_field('answer');

                          

                     // endwhile;

                 // else :

                      // no rows found

                 // endif;




            // endwhile;

       //  else :

             // no rows found

        // endif;

         ?>
 
      <?php// endwhile; ?>
    <!--   </div> -->

      <?php //endif; wp_reset_postdata();?>

   <!--</div>
</div>
</div> -->
<!-- CONTAINER -->

<div class="container d-flex align-items-center min-vh-100">
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
       
      <!-- FORMS -->
      <div class="col-lg-7 mx-0 px-0"> 
        <div class="progress">
          <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%"></div>
        </div>
        <div id="qbox-container">
             <h2 class="quiz-question text-center">Take our quiz</h2>

<!--  FORM   -->
 <?php $args = array(
      'post_type'     => 'quiz',
      'post_per_page' => -1
      //'meta_key'      => 'testimonial_order',
     // 'orderby'       => 'meta_value',
     // 'order'         => 'ASC',
     // 'page'          => 1
  );         
  $insert = 'Product A matches your hair type.';           
  function process_this_quiz() {
   
   //replace #insert
   $insert = 'Product A matches your hair type.';
  }  
   
  $quizQuery = new WP_Query( $args );  
   if ( $quizQuery->have_posts() ) : 
     ?>
  
         <!--  <form class="needs-validation ajax" id="form-wrapper" name="form-wrapper" action="" method="post" novalidate > -->
      <!-- <form class="needs-validation" id="formwrapper" method="post" name="formQuiz form-wrapper" novalidate action="<?php //echo admin_url('admin-ajax.php'); ?>"  > -->
     <!--  <form class="needs-validation" id="formwrapper" method="post" name="formQuiz form-wrapper" novalidate action="/wp-admin/admin-ajax.php?action=process_quiz"> -->
   <form class="needs-validation" id="formwrapper" method="post" name="formQuiz form-wrapper" novalidate action="process_this_quiz"> 
        <input type="hidden" name="action" value="process_quiz"> 
        <input type="hidden" name="action" value="process_quiz">

             <!-- STEPS HERE -->
             <div id="steps-container"> 
              <!-- <div id="start" class="step">
                 <div class="quiz-content is-active">  -->
               
              <!--  <div class="form-check ps-0 q-box"> 
                     
                     

                      
                  </div> --> <!-- end of step 1 form -->
           <!--  </div> --> <!-- end of step 1 -->
           <?php while ( $quizQuery->have_posts() ) : $quizQuery->the_post(); ?> 
            <?php

         // check if the repeater field has rows of data
          if( have_rows('question') ):
$question = 1;
            // loop through the rows of data
             while ( have_rows('question') ) : the_row();

                 // display a sub field value
             // '<p>question</p> ';    the_sub_field('question_one'); ?>
            <div class="step">
                <div class="quiz-content is-active">  
                <h2 class="quiz-question"><?php the_sub_field('question_one'); ?></h2>
                <!-- <p>Choose up to 2</p>  -->
               <div class="form-check ps-0 q-box"> 
                 <?php   if( have_rows('answer_group') ):
$count = 1;
                     // loop through the rows of data
                     while ( have_rows('answer_group') ) : the_row(); ?>
                        <div class="q-box__question">
<?php $id = "q_".$question."_".$count;  ?>
                        <input class="button form-check-input question__input" id="<?php echo $id ?>" name="<?php echo $id ?>" type="checkbox" value="<?php the_sub_field('answer'); ?>" multiple> 
                        <label class="form-check-label question__label" for="<?php echo $id ?>"><?php the_sub_field('answer'); ?><img class="quiz-answer-btn-shape-img" src="<?php echo the_sub_field('answer_image'); ?>" alt="" style="padding-left:2rem;"></label>
                    </div> 
<?php $count++; ?>
                   <?php  endwhile;

 $count = 1;                // else :

                      // no rows found

                 endif;  ?>


                   <!--  <div class="q-box__question">

                     <input class="button form-check-input question__input" id="q_1_one" name="q_1" type="checkbox" value="Dry and damaged with split ends" multiple> 
                     <label class="form-check-label question__label" for="q_1_one">Dry and damaged with split ends</label>
                    </div>

                    <div class="q-box__question">  
                       <input class="button form-check-input question__input" id="q_1_two" name="q_1" type="checkbox" value="Dull and lacks shine"> 
                     <label class="form-check-label question__label" for="q_1_two">Dull and lacks shine</label>
                    </div>

                    <div class="q-box__question"> 
                       <input class="button form-check-input question__input" id="q_1_three" name="q_1" type="checkbox" value="Frizzy"> 
                     <label class="form-check-label question__label" for="q_1_three">Frizzy</label>
                    </div>

                    <div class="q-box__question"> 
                       <input class="button form-check-input question__input" id="q_1_four" name="q_1" type="checkbox" value="Thin and lacks volume"> 
                     <label class="form-check-label question__label" for="q_1_four">Thin and lacks volume</label>
                    </div>
 -->
                <!--      <div class="q-box__question"> 
                       <input class="button form-check-input question__input" id="q_1_five" name="q_1" type="checkbox" value="Oily/greasy"> 
                     <label class="form-check-label question__label" for="q_1_five">Oily/greasy</label>
                    </div>  
                      
                    <div class="q-box__question"> 
                       <input class="button form-check-input question__input" id="q_1_six" name="q_1" type="checkbox" value="Tangles easily"> 
                     <label class="form-check-label question__label" for="q_1_six">Tangles easily</label>
                    </div>  --> 
                      </div> 
                  </div> <!-- end of step 1 form -->
            </div> <!-- end of step 1 -->
         <?php   $question++; ?>
             <?php endwhile; ?>
              <?php endif; ?>
            <?php endwhile; ?>
            <!-- <div class="step">
               <h4>How would you describe your scalp condition? <span>Choose up to 2 in order of priority</span></h4>
               <div class="form-check ps-0 q-box">
                  <div class="q-box__question">
                     <input class="form-check-input question__input" id="q_2_one" name="q_2" type="checkbox" value="Dry"> 
                     <label class="form-check-label question__label" for="q_2_one">Dry</label>
                  </div>
                  <div class="q-box__question">
                     <input class="form-check-input question__input" id="q_2_two" name="q_2" type="checkbox" value="Oily"> 
                     <label class="form-check-label question__label" for="q_2_two">Oily</label>
                  </div>
                   <div class="q-box__question">
                     <input class="form-check-input question__input" id="q_2_three" name="q_2" type="checkbox" value="Flaky and/or itchy"> 
                     <label class="form-check-label question__label" for="q_2_three">Flaky and/or itchy</label>
                  </div>
                   <div class="q-box__question">
                     <input class="form-check-input question__input" id="q_2_four" name="q_2" type="checkbox" value="Normal"> 
                     <label class="form-check-label question__label" for="q_2_four">Normal</label>
                  </div>
                   <div class="q-box__question">
                     <input class="form-check-input question__input" id="q_2_five" name="q_2" type="checkbox" value="Full of product buildup"> 
                     <label class="form-check-label question__label" for="q_2_five">Full of product buildup</label>
                  </div>
               </div>
            </div>
            <div class="step">
               <h4>Your natural hair type is:
                <span>Choose just one</span></h4>
               <div class="form-check ps-0 q-box">
                  <div class="q-box__question">
                     <input class="form-check-input question__input" id="q_3_one" name="q_3" type="radio" value="Straight"> 
                     <label class="form-check-label question__label" for="q_3_one">Straight <img class="quiz-answer-btn-shape-img" src="<?php echo get_template_directory_uri().'/dist/img/straight.jpg'?>" alt=""></label>
                     
                  </div>
                  <div class="q-box__question">
                     <input class="form-check-input question__input" id="q_3_two" name="q_3" type="radio" value="Wavy"> 
                     <label class="form-check-label question__label" for="q_3_two">Wavy</label>
                     <img class="quiz-answer-btn-shape-img" src="<?php echo get_template_directory_uri().'/dist/img/wavy.jpg'?>" alt="">
                  </div>
                  <div class="q-box__question">
                     <input class="form-check-input question__input" id="q_3_three" name="q_3" type="radio" value="Curly"> 
                     <label class="form-check-label question__label" for="q_3_three">Curly</label>
                     <img class="quiz-answer-btn-shape-img" src="<?php echo get_template_directory_uri().'/dist/img/curly.jpg'?>" alt="">
                  </div>
                  <div class="q-box__question">
                     <input class="form-check-input question__input" id="q_3_four" name="q_3" type="radio" value="Kinky"> 
                     <label class="form-check-label question__label" for="q_3_four">Kinky</label>
                     <img class="quiz-answer-btn-shape-img" src="<?php echo get_template_directory_uri().'/dist/img/kinky.jpg'?>" alt="">
                  </div>
                  <div class="q-box__question">
                     <input class="form-check-input question__input" id="q_3_five" name="q_3" type="radio" value="Not Sure"> 
                     <label class="form-check-label question__label" for="q_3_five">Not Sure</label>
                  </div>
               </div>
            </div> -->
            <!-- <div class="step">
              <h4>Your hair structure is:
                <span>Choose just one</span></h4>
               <div class="row">
                  <div class="col-lg-6">
                     <div class="form-check ps-0 q-box">
                        <div class="q-box__question">
                           <input class="form-check-input question__input q-checkbox" id="q_4_one" name="q_4" type="radio" value="Fine"> 
                           <label class="form-check-label question__label" for="q_4_one">Fine</label>
                           <img src="<?php echo get_template_directory_uri().'/dist/img/hair-type-thin.jpg' ?>" alt="">
                        </div>
                     </div>
                     <div class="form-check ps-0 q-box">
                        <div class="q-box__question">
                           <input class="form-check-input question__input" id="q_4_two" name="q_4" type="radio" value="Medium"> 
                           <label class="form-check-label question__label" for="q_4_two">Medium</label>
                            <img src="<?php echo get_template_directory_uri().'/dist/img/hair-type-medium.jpg' ?>" alt="">
                        </div>
                     </div>
                     <div class="form-check ps-0 q-box">
                        <div class="q-box__question">
                           <input class="form-check-input question__input" id="q_4_three" name="q_3" type="radio" value="Coarse"> 
                           <label class="form-check-label question__label" for="q_4_three">Coarse</label>
                            <img src="<?php echo get_template_directory_uri().'/dist/img/hair-type-coarse.jpg' ?>" alt="">
                        </div>
                     </div>
                  </div>
                   
                 
               </div>
            </div>
            <div class="step">
               <h4>Do you do any of the following to your hair?<span>Choose all that apply</span></h4>
               <div class="row">
                  <div class="form-check ps-0 q-box">
                     <div class="q-box__question">
                        <input class="form-check-input question__input" id="q_5_one" name="q_5_one" type="checkbox" value="Regular use of heat tools"> 
                        <label class="form-check-label question__label" for="q_5_one">Regular use of heat tools</label>
                     </div>
                  </div>
                  <div class="form-check ps-0 q-box">
                     <div class="q-box__question">
                        <input class="form-check-input question__input" id="q_5_two" name="q_5_two" type="checkbox" value="Chemical processing"> 
                        <label class="form-check-label question__label" for="q_5_two">Chemical processing</label>
                     </div>
                  </div>
                  <div class="form-check ps-0 q-box">
                     <div class="q-box__question">
                        <input class="form-check-input question__input" id="q_5_three" name="q_5_three" type="checkbox" value="Color treatment"> 
                        <label class="form-check-label question__label" for="q_5_three">Color treatment</label>
                     </div>
                  </div>
                  <div class="form-check ps-0 q-box">
                     <div class="q-box__question">
                        <input class="form-check-input question__input" id="q_5_four" name="q_5_four" type="checkbox" value="No, I don’t treat my hair"> 
                        <label class="form-check-label question__label" for="q_5_four">No, I don’t treat my hair</label>
                     </div>
                  </div>
               </div>
            </div> -->
            <div class="step">
               <h4>Provide us with your personal information:</h4>
               <div class="mt-1">
                  <label class="form-label">Complete Name:</label> 
                  <input class="form-control" id="full_name" name="full_name" type="text" required="required">
               </div>
               <div class="mt-2">
                  <label class="form-label">Complete Address:</label> 
                  <input class="form-control" id="address" name="address" type="text">
               </div>
               <div class="mt-2">
                  <label class="form-label">Email:</label> 
                  <input class="form-control" id="email" name="email" type="email">
               </div>
               <div class="mt-2">
                  <label class="form-label">Phone / Mobile Number:</label> 
                  <input class="form-control" id="phone" name="phone" type="text">
               </div>
               <div class="row mt-2">
                  <div class="col-lg-2 col-md-2 col-3">
                     <label class="form-label">Age:</label>
                     <div class="input-container">
                        <input class="form-control" id="age" name="age" type="text">
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div id="input-container">
                        <input class="form-check-input" name="gender" type="radio" value="male"> 
                        <label class="form-check-label radio-lb">Male</label> 
                        <input class="form-check-input" name="gender" type="radio" value="female"> 
                        <label class="form-check-label radio-lb">Female</label> 
                        <input checked class="form-check-input" name="gender" type="radio" value="undefined"> 
                        <label class="form-check-label radio-lb">Rather not say</label>
                     </div>
                  </div>
               </div>
            </div>
        <!--     <div class="step">
               <div class="mt-1">
                  <div class="closing-text">
                     <h4>That's about it! Stay healthy!</h4>
                     <p>We will assess your information and will let you know soon if you need to get tested for COVID-19.</p>
                     <p>Click on the submit button to continue.</p>
                  </div>
               </div>
            </div> -->
            <div id="success">
               <div class="mt-5">
                  <h4>Success! Your recommended product is: </h4>
                  <p id="#insert"><?php echo $insert; ?> <span style="padding-right: 25px;"></span><img class="quiz-answer-btn-shape-img" src="<?php echo get_template_directory_uri().'/dist/img/026205663.jpg'?>" alt=""></p>
                  <a class="back-link" href="">Take the quiz again ➜</a>
               </div>
            </div>
         </div> <!-- end of steps container -->
         <div id="q-box__buttons">
            <button id="prev-btn" type="button">Previous</button> 
            <!--  <button id="start-btn" class="visible" type="button">Start</button>  -->
            <button id="next-btn" class="" type="button">Next</button> 
            <button id="submit-btn" type="submit">Submit</button>
         </div>
          </form>
      <?php endif; ?>
        </div>
      </div>
   </div>
</div>

<div id="preloader-wrapper">
   <div id="preloader"></div>
   <div class="preloader-section section-left"></div>
   <div class="preloader-section section-right"></div>
</div>
 
        <!-- <form action="" method="post" class="ajax" 
enctype="multipart/form-data"> 

         <h1>Ajax Form</h1>

         <label><b>Name</b></label>

          <input type="text" placeholder="Enter Your Name" name="name" 
required class="name">

         <label><b>Email</b></label>

         <input type="email" placeholder="Enter your Email" name="email" 
required class="email">

         <label><b>Message</b></label>

          <input type="textarea" placeholder="Message" name="message" 
required class="message"><hr>

            <div id="msg"></div>

              <input type = "submit" class="submitbtn" value="submit">

<div class="success_msg" style="display: none">Message 
Sent Successfully</div>

                  <div class="error_msg" style="display: none">Message 
Not Sent, There is some error.</div>

    </form>-->
<!-- <section>
  <svg id="preloader" width="240px" height="120px" viewBox="0 0 240 120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  
  <path id="loop-normal" class="st1" d="M120.5,60.5L146.48,87.02c14.64,14.64,38.39,14.65,53.03,0s14.64-38.39,0-53.03s-38.39-14.65-53.03,0L120.5,60.5
L94.52,87.02c-14.64,14.64-38.39,14.64-53.03,0c-14.64-14.64-14.64-38.39,0-53.03c14.65-14.64,38.39-14.65,53.03,0z">
    <animate attributeName="stroke-dasharray" from="500, 50" to="450 50" begin="0s" dur="2s" repeatCount="indefinite" />
    <animate attributeName="stroke-dashoffset" from="-40" to="-540" begin="0s" dur="2s" repeatCount="indefinite" />
  </path>

  <path id="loop-offset" d="M146.48,87.02c14.64,14.64,38.39,14.65,53.03,0s14.64-38.39,0-53.03s-38.39-14.65-53.03,0L120.5,60.5L94.52,87.02c-14.64,14.64-38.39,14.64-53.03,0c-14.64-14.64-14.64-38.39,0-53.03c14.65-14.64,38.39-14.65,53.03,0L120.5,60.5L146.48,87.02z"></path>

  <path id="socket" d="M7.5,0c0,8.28-6.72,15-15,15l0-30C0.78-15,7.5-8.28,7.5,0z">
    <animateMotion
      dur="2s"
      repeatCount="indefinite"
      rotate="auto"
      keyTimes="0;1"
      keySplines="0.42, 0.0, 0.58, 1.0"
    >
      <mpath xlink:href="#loop-offset"/>
    </animateMotion>
  </path>
  
<path id="plug" d="M0,9l15,0l0-5H0v-8.5l15,0l0-5H0V-15c-8.29,0-15,6.71-15,15c0,8.28,6.71,15,15,15V9z">
  <animateMotion
    dur="2s"
    rotate="auto"
    repeatCount="indefinite"
    keyTimes="0;1"    
    keySplines="0.42, 0, 0.58, 1"
  >
    <mpath xlink:href="#loop-normal"/>
  </animateMotion>
</path>   
  
</svg>

 
</section> -->
  <!-- <section class="wrapper">
  <ul class="breadCrumbs">
    <li><a href="" title="Home" class="animation">Home</a></li>
    <li><a href="" title="Portfolio" class="animation">Portfolio</a></li>
    <li><a href="" title="Websites" class="animation">Websites</a></li>
    <li class= "activePage"><p href="" title="HPU internet services"  class="animation">HPU internet services</p></li>
    <div class="clear"></div>
  </ul>
</section>  -->
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

        
            
 

         
 </article>
 
 