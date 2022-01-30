<?php
echo "in post method";
// Check if the form is submitted 
if ( isset( $_POST['submit'] ) ) { 
// retrieve the form data by using the element's name attributes value as key 
$firstanswer = $_POST['q_1_1']; 
$lastanswer = $_POST['q_1_2']; 
// display the results
echo '<h3>Form POST Method</h3>'; 
echo 'Your answers are  ' . $lastanswer . ' ' . $firstanswer; exit; 
 
function process_quiz() { echo "in process" }
}