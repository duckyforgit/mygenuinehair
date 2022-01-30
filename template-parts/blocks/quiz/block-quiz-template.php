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
			 