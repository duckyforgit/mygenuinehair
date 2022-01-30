<?php
/**
 * Template Name: Login Me In Template
 *
 * Template for displaying a corporate page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
 

<div class="wrapper" id="page-wrapper">

	<div class="" id="content" tabindex="-1">


		<main class="site-main" id="main">
			<?php
					while ( have_posts() ) {
						the_post();
					  the_content(); 

					}
			 
?>
			<!-- CONTAINER -->
<div class="container d-flex align-items-center min-vh-100">
   <div class="row g-0 justify-content-center">
      <!-- TITLE -->
      <div class="col-lg-4 offset-lg-1 mx-0 px-0">
      
       <div id="title-container">
          <img class="covid-image" src="<?php echo get_template_directory_uri().'/img/checkmark.png'?>">
          <h2>HAIR QUIZ</h2>
          <h3><?php the_field( 'quiz_name' ); ?></h3>
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
       
			<?php 
 $quizPosts = new WP_Query(array(
            'post_type' => 'quiz',
            'posts_per_page' => 1,
            'tax_query' => array(
                  array (
                      'taxonomy' => 'quiz_category',
                      'field' => 'slug',
                      'terms' => 'hair-type',
                  )
              ), 
             
          ));
  
          if ($quizPosts->have_posts()) :
            while ($quizPosts->have_posts()) :
              $quizPosts->the_post();
			?>
			 
			   <form class="form" id="myForm" method="POST"
			action="#"> 
			<?php wp_nonce_field( 'myaction', 'myname' ); ?>
			 
			 	 		<div id="steps-container">  <!--step 1 -->
	<?php			if( have_rows('question') ):
     $qCount = 1;
									 	// loop through the rows of data
						while ( have_rows('question') ) : the_row(); ?>
            <div class="step">
                <div class="quiz-content is-active">  
                	<h2 id="<?php echo 'question_'.$qCount;?>" class="quiz-question"><?php the_field('question_one'); ?></h2>
                	 
               		<div class="form-check ps-0 q-box"> 

			     <!-- repeater answer_group -->
	<?php		    // check if the repeater field has rows of data
									if( have_rows('answer_group') ):
$count = 1;
									 	// loop through the rows of data
									    while ( have_rows('answer_group') ) : the_row(); ?>
												 
									    		  <div class="q-box__question">  <!-- q_1_1 -->
			<input class="button form-check-input question__input" id="<?php echo 'q_'.$count.'_'.$qCount;?>"  name="<?php echo 'q_'.$count.'_'.$qCount;?>" type="checkbox" value="<?php the_sub_field( 'answer' ); ?>" multiple > 

			<label class="form-check-label question__label" for="<?php echo 'q_'.$count.'_'.$qCount;?>"><?php the_sub_field('answer');?></label>
									         	</div>
									         	<?php $count++; ?>
											     
											 
									         

									<?php endwhile;

									else :
									    echo "no answers found";
									    // no rows found

									endif;
									$qCount++;
									?>
									</div><!-- end of answers group -->
							 
              </div> <!-- end of step 1 form -->
            </div> <!-- end of step 1 --> 
          <?php endwhile; endif; ?>
           <div class="step">
          		<h4>Provide us with your personal information:</h4>
               <div class="mt-1">
                  <label class="form-label">Complete Name:</label> 
                  <input class="form-control" id="full_name" name="full_name" type="text">
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
              <div class="step">
               <div class="mt-1">
                  <div class="closing-text">
                     <h4>That's about it! Stay healthy!</h4>
                     <p>We will assess your information and will let you know soon if you need to get tested for COVID-19.</p>
                     <p>Click on the submit button to continue.</p>
                  </div>
               </div>
            </div>
						<div id="success">
				               <div class="mt-5">
				                  <h4>Success! We'll get back to you ASAP!</h4>
				                  <p>Meanwhile, clean your hands often, use soap and water, or an alcohol-based hand rub, maintain a safe distance from anyone who is coughing or sneezing and always wear a mask when physical distancing is not possible.</p>
				                  <a class="back-link" href="">Go back from the beginning ➜</a>
				               </div>
				            </div>
				         </div> <!-- end of steps container -->
				         <div id="q-box__buttons">
				            <button id="prev-btn" type="button">Previous</button> 
				            <!--  <button id="start-btn" class="visible" type="button">Start</button>  -->
				            <button id="next-btn" class="" type="button">Next</button> 
				            <button id="submit-btn" type="submit" name="submitQuiz" id="submit" >Submit</button>
				         </div>
          </form>
          </div>
      </div>
   </div>
</div>

<div id="preloader-wrapper">
   <div id="preloader"></div>
   <div class="preloader-section section-left"></div>
   <div class="preloader-section section-right"></div>
 </div>


			   <!-- <form class="needs-validation" id="formwrapper" method="post" name="formQuiz form-wrapper" novalidate action="/wp-admin/admin-ajax.php?action=process_quiz"> 
        <input type="hidden" name="action" value="process_quiz">   -->
             <!-- STEPS HERE -->
          <!--    <div id="steps-container">  --> 
            <!--  <div id="start" class="step">
                 <div class="quiz-content is-active">  
               
              <div class="form-check ps-0 q-box">  -->
                     
                     

                      
                 <!-- </div> --> <!-- end of step 1 form -->
           <!--  </div> --> <!-- end of step 1 -->
        <!--     <div class="step">
                <div class="quiz-content is-active">  
                <h2 class="quiz-question">How would you describe your biggest hair concerns?</h2>
                <p>Choose up to 2</p> 
               <div class="form-check ps-0 q-box"> 
                    <div class="q-box__question">

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

                     <div class="q-box__question"> 
                       <input class="button form-check-input question__input" id="q_1_five" name="q_1" type="checkbox" value="Oily/greasy"> 
                     <label class="form-check-label question__label" for="q_1_five">Oily/greasy</label>
                    </div>  
                      
                    <div class="q-box__question"> 
                       <input class="button form-check-input question__input" id="q_1_six" name="q_1" type="checkbox" value="Tangles easily"> 
                     <label class="form-check-label question__label" for="q_1_six">Tangles easily</label>
                    </div>  
                      </div> 
                  </div> --><!-- end of step 1 form -->
    <!--         </div> --> <!-- end of step 1 -->
            
          <!--  <div class="step">
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
                     <label class="form-check-label question__label" for="q_3_one">Straight <img class="quiz-answer-btn-shape-img" src="<?php echo get_template_directory_uri().'/img/straight.jpg'?>" alt=""></label>
                     
                  </div>
                  <div class="q-box__question">
                     <input class="form-check-input question__input" id="q_3_two" name="q_3" type="radio" value="Wavy"> 
                     <label class="form-check-label question__label" for="q_3_two">Wavy</label>
                     <img class="quiz-answer-btn-shape-img" src="<?php echo get_template_directory_uri().'/img/wavy.jpg'?>" alt="">
                  </div>
                  <div class="q-box__question">
                     <input class="form-check-input question__input" id="q_3_three" name="q_3" type="radio" value="Curly"> 
                     <label class="form-check-label question__label" for="q_3_three">Curly</label>
                     <img class="quiz-answer-btn-shape-img" src="<?php echo get_template_directory_uri().'/img/curly.jpg'?>" alt="">
                  </div>
                  <div class="q-box__question">
                     <input class="form-check-input question__input" id="q_3_four" name="q_3" type="radio" value="Kinky"> 
                     <label class="form-check-label question__label" for="q_3_four">Kinky</label>
                     <img class="quiz-answer-btn-shape-img" src="<?php echo get_template_directory_uri().'/img/kinky.jpg'?>" alt="">
                  </div>
                  <div class="q-box__question">
                     <input class="form-check-input question__input" id="q_3_five" name="q_3" type="radio" value="Not Sure"> 
                     <label class="form-check-label question__label" for="q_3_five">Not Sure</label>
                  </div>
               </div>
            </div>
            <div class="step">
              <h4>Your hair structure is:
                <span>Choose just one</span></h4>
               <div class="row">
                  <div class="col-lg-6">
                     <div class="form-check ps-0 q-box">
                        <div class="q-box__question">
                           <input class="form-check-input question__input q-checkbox" id="q_4_one" name="q_4" type="radio" value="Fine"> 
                           <label class="form-check-label question__label" for="q_4_one">Fine</label>
                           <img src="<?php echo get_template_directory_uri().'/img/hair-type-thin.jpg' ?>" alt="">
                        </div>
                     </div>
                     <div class="form-check ps-0 q-box">
                        <div class="q-box__question">
                           <input class="form-check-input question__input" id="q_4_two" name="q_4" type="radio" value="Medium"> 
                           <label class="form-check-label question__label" for="q_4_two">Medium</label>
                            <img src="<?php echo get_template_directory_uri().'/img/hair-type-medium.jpg' ?>" alt="">
                        </div>
                     </div>
                     <div class="form-check ps-0 q-box">
                        <div class="q-box__question">
                           <input class="form-check-input question__input" id="q_4_three" name="q_3" type="radio" value="Coarse"> 
                           <label class="form-check-label question__label" for="q_4_three">Coarse</label>
                            <img src="<?php echo get_template_directory_uri().'/img/hair-type-coarse.jpg' ?>" alt="">
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
            </div>
            <div class="step">
               <h4>Provide us with your personal information:</h4>
               <div class="mt-1">
                  <label class="form-label">Complete Name:</label> 
                  <input class="form-control" id="full_name" name="full_name" type="text">
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
            <div class="step">
               <div class="mt-1">
                  <div class="closing-text">
                     <h4>That's about it! Stay healthy!</h4>
                     <p>We will assess your information and will let you know soon if you need to get tested for COVID-19.</p>
                     <p>Click on the submit button to continue.</p>
                  </div>
               </div>
            </div>
            <div id="success">
               <div class="mt-5">
                  <h4>Success! We'll get back to you ASAP!</h4>
                  <p>Meanwhile, clean your hands often, use soap and water, or an alcohol-based hand rub, maintain a safe distance from anyone who is coughing or sneezing and always wear a mask when physical distancing is not possible.</p>
                  <a class="back-link" href="">Go back from the beginning ➜</a>
               </div>
            </div>
         </div> --> <!-- end of steps container -->
        <!-- <div id="q-box__buttons">
            <button id="prev-btn" type="button">Previous</button> -->
            <!--  <button id="start-btn" class="visible" type="button">Start</button>  -->
          <!--  <button id="next-btn" class="" type="button">Next</button> 
            <button id="submit-btn" type="submit">Submit</button>
         </div>
          </form>
     
        </div>
      </div>
   </div>
</div>

<div id="preloader-wrapper">
   <div id="preloader"></div>
   <div class="preloader-section section-left"></div>
   <div class="preloader-section section-right"></div>
</div>
</div>
</div>
</div>-->
<?php
$post = get_post( $arr['post_id']);
$user_mail = 
?>
<form>
	
</form>

			<?php endwhile; endif; wp_reset_postdata(); ?>
		</main>
	</div>
</div>

 
<?php
get_footer(); 