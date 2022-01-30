import $ from 'jquery';

// bundle.js
import './components/slider';
import AOS from './components/aos';
 
AOS.init();
 
 

 
xhr.open("POST", 'frontend_ajax_object', true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
 // alpha JS request // no jQuery
    // https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest/send#Example_POST
    // https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest/Using_XMLHttpRequest
    var request = new XMLHttpRequest();

    request.open('POST', frontend_ajax_object.ajax_url, true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;');
    request.onload = function () {
        if (this.status >= 200 && this.status < 400) {
            // If successful
            console.log(this.response);
        } else {
            // If fail
            console.log(this.response);
        }
    };
    request.onerror = function() {
        // Connection error
    };
    request.send('action=process_quiz');
    //
//POST example
// var data={"person":"john","balance":1.23};
// makeRequest('POST', "https://www.codegrepper.com/endpoint.php?param1=yoyoma",data).then(function(data){
//               var results=JSON.parse(data);
// });






  //const searchParams = new URLSearchParams(); //url encoded string
  
 // for (const pair of formData) {
 // 	searchParams.append(pair[0], pair[1]);
 // 	console.log(pair[0]);
 // }
  
  // fetch('http://localhost:8080/mygenuinehair/log-me-in', {
  // 		method: 'post',
  // 	//	body: formData,
  // 		body:searchParams
  // }).then(function (response) {
  // 	return response.text();

  // }).then(function (text) {
  // 	console.log(text);
  // }).catch(function (error) {
  // 	console.log(error);
  // })
 //   var xhr = new XMLHttpRequest();
 //  console.log(frontend_ajax_object.ajaxurl);
 //  var url = frontend_ajax_object.ajaxurl+'?action=process_quiz';
  //var url = 'localhost:3000'/wp-admin/admin-ajax.php?action=process_quiz
//  xhr.open("POST", frontend_ajax_object.ajaxurl, true); 

 // xhr.open("POST", url, true); 

 // xhr.setRequestHeader('Content-Type', 'application/json');
  
 // console.log(frontend_ajax_object.ajaxurl);
  // What to do when server responds
  //  xhr.send('action=process_quiz');
 //xhr.send(formData2); 

//});
//}
////When you are handling the serialization in your JavaScript you are responsible for this serialization. I generally intercept any form submission and perform validation and serialization before posting JSON to an API,which means I need to handle these scenarios.
function validateInterest(evt) { 
evt.preventDefault(); 
var mininterest = document.querySelectorAll("[name=mininterest]"); 
var count = 0, 
interests = []; 
	for (var i = 0; i < mininterest.length; i++) { 
		if (mininterest[i].checked) { 
		count++; 
		interests.push(mininterest[i].value); 
	} 
}
// checkbox change events
 function bindStateChanges(){
 	var checkboxes = document.querySelectorAll("[type=checkbox"); 
 	for (var index = 0; index < interests.length; index++) { 
 		checkboxes[index].addEventListener("change", function(evt){ 
 			var checkbox = evt.target; 
 			addToLog(checkbox.value + " changed to " + checkbox.checked); 
 		}); 
 	}}
 //This is meant to mimic where you would make a fetch POST call if (count > 1) { addToLog("enough interests selected: " + interests); } else { addToLog("**NOT ENOUGH** interests selected: " + interests); } return false;}
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl)
})

var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})

 var request = new XMLHttpRequest();

    request.open('POST', frontend_ajax_object.ajax_url, true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;');
    request.onload = function () {
        if (this.status >= 200 && this.status < 400) {
            // If successful
            console.log(this.response);
        } else {
            // If fail
            console.log(this.response);
        }
    };
    request.onerror = function() {
        // Connection error
    };

let step = document.getElementsByClassName('step');
console.log(step.length);
//let startBtn = document.getElementById('start-btn');
let prevBtn = document.getElementById('prev-btn');
let nextBtn = document.getElementById('next-btn');
let submitBtn = document.getElementById('submit-btn');
let form = document.getElementsByTagName('form')[0];
let preloader = document.getElementById('preloader-wrapper');
let bodyElement = document.querySelector('body');
let succcessDiv = document.getElementById('success');


let inputs = document.querySelectorAll("input[type='checkbox']"); 
for (var index = 0; index < inputs.length; index++) { 
alert(inputs[index]);
 		inputs[index].addEventListener("change", function(evt){ 
 			 inputs[index].checked = true;   
 			var checkbox = evt.target; 
 			console.log("checked");
 			inputs[index].classList.add('checked');
 			addToLog(checkbox.value + " changed to " + checkbox.checked); 
}); 
}

if ( step.length > 0 ) {
	console.log(step.length);
	form.onsubmit = () => {
	    //return false
	    return true
	}
	let current_step = 0;
	let stepCount = step.length-1;
	step[current_step].classList.add('d-block');
	if (current_step == 0) {
	    prevBtn.classList.add('d-none');
	    submitBtn.classList.add('d-none');
	    nextBtn.classList.add('d-inline-block');
	   // startBtn.classList.add('d-inline-block');
	}

	const progress = (value) => {
	    document.getElementsByClassName('progress-bar')[0].style.width = `${value}%`;
	}
  
	nextBtn.addEventListener('click', () => {
		 
	    current_step++;
	    console.log(current_step); // current_s
	    let previous_step = current_step - 1;
	    console.log(current_step);
	    if ((current_step > 0) && (current_step <= stepCount)) {
	       prevBtn.classList.remove('d-none');
	       prevBtn.classList.add('d-inline-block');

	        step[current_step].classList.remove('d-none');
	        step[current_step].classList.add('d-block');
	       step[previous_step].classList.remove('d-block');
	       step[previous_step].classList.add('d-none');

	        if (current_step == stepCount) {
	            submitBtn.classList.remove('d-none');
	            submitBtn.classList.add('d-inline-block');
	            nextBtn.classList.remove('d-inline-block');
	            nextBtn.classList.add('d-none');
	        }
	    } else {
	        if (current_step > stepCount) {
	            form.onsubmit = () => {
	                return true
	            }
	        }
	    }
	    progress((100 / stepCount) * current_step);
	});

	prevBtn.addEventListener('click', () => {

	    if (current_step > 0) {
	        current_step--;
	        let previous_step = current_step + 1;
	        prevBtn.classList.add('d-none');
	        prevBtn.classList.add('d-inline-block');
	        step[current_step].classList.remove('d-none');
	        step[current_step].classList.add('d-block')
	        step[previous_step].classList.remove('d-block');
	        step[previous_step].classList.add('d-none');
	        if (current_step < stepCount) {
	            submitBtn.classList.remove('d-inline-block');
	            submitBtn.classList.add('d-none');
	            nextBtn.classList.remove('d-none');
	            nextBtn.classList.add('d-inline-block');
	            prevBtn.classList.remove('d-none');
	            prevBtn.classList.add('d-inline-block');
	        }
	    }
	 
	    if (current_step == 0) {
	        prevBtn.classList.remove('d-inline-block');
	        prevBtn.classList.add('d-none');
	    }
	    progress((100 / stepCount) * current_step);
	});

  
	submitBtn.addEventListener('click', (e) => {

		  e.preventDefault(); 
const formData = new FormData();console.log(formData);
	     preloader.classList.add('d-block');
	 
	    const timer = ms => new Promise(res => setTimeout(res, ms));
	 
	     timer(3000)
	         .then(() => {
	           bodyElement.classList.add('loaded');
	         }).then(() => {
	            step[stepCount].classList.remove('d-block');
	            step[stepCount].classList.add('d-none');
	            prevBtn.classList.remove('d-inline-block');
	            prevBtn.classList.add('d-none');
	            submitBtn.classList.remove('d-inline-block');
	            submitBtn.classList.add('d-none');
	            succcessDiv.classList.remove('d-none');
	            succcessDiv.classList.add('d-block');
	         }).then(() => {
							

						 //for(const [name, value] of formData) {
						 // formData.append(`${name} = ${value}`); // key1 = value1, then key2 = value2
						//}
						   formData.append("question_one", document.getElementById("question_1").value);
						   formData.append("question_two", document.getElementById("question_2").value); 
                
                for (const pair of formData) {
							 // 	searchParams.append(pair[0], pair[1]);
							 	console.log(pair[0]);
							  }
							  
    request.send('action=process_quiz');
})
});
} 
// 							   xhr.open("POST", url, true); 
// http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

// http.setRequestHeader("Content-length", params.length);
// http.setRequestHeader("Connection", "close");

// http.onreadystatechange = function() {//Call a function when the state changes.

//  if(http.readyState == 4 && http.status == 200) {

//   alert(http.responseText);

//  }

//}

//http.send(params);
//var request = new XMLHttpRequest();
//	request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
//	request.open('POST', '<?php echo admin_url( 'admin-ajax.php', 'relative' ); ?>', true);

	// request.onload = function () {
	// 	if (request.status >= 200 && request.status < 400) {
	// 		var result = request.responseText;
	// 		doSomethingWith(result);
	// 	}
	// };
	       //  })
	    // (A) GET FORM DATA
	  // calculate a response 
 // let formData = new FormData(document.forms.formQuiz);


// });
// } 
   
  
 //  formData2.append("name", document.getElementById("full_name").value);
 //  formData2.append("email", document.getElementById("email").value);

 // for(let [name, value] of formData2) {
//  alert(`${name} = ${value}`); // key1 = value1, then key2 = value2
//}
 //console.log(formData2);
  // (B) AJAX
 //  var xhr = new XMLHttpRequest();
 //  console.log(frontend_ajax_object.ajaxurl);
 //  var url = frontend_ajax_object.ajaxurl+'?action=process_quiz';
  //var url = 'localhost:3000'/wp-admin/admin-ajax.php?action=process_quiz
  //xhr.open("POST", frontend_ajax_object.ajaxurl, true); 

 // xhr.open("POST", url, true); 

 // xhr.setRequestHeader('Content-Type', 'application/json');
 //xhr.open("POST", url, true);
 // console.log(frontend_ajax_object.ajaxurl);
  // What to do when server responds
 //   xhr.send('action=process_quiz');
 //xhr.send(formData2);
//console.log(xhr.response);  // error 400 bad request http://localhost:3000/mygenuinehair/wp-admin/admin-ajax.php

// http://localhost:3000/mygenuinehair/wp-admin/admin-ajax.php 400 (Bad Request)

   // xhr.onload = function(){   // error 404 not found mygenuinehair/undefined
   // 			if (xhr.status != 200) { // analyze HTTP status of the response
			//     alert(`Error ${xhr.status}: ${xhr.statusText}`); // e.g. 404: Not Found
			//   } else { // show the result
			//     alert(`Done, got ${xhr.response.length} bytes`); // response is the server response
			//   }
   // };
  

  //console.log(xhr.response);
  
  // (C) PREVENT HTML FORM SUBMIT
 // return false;
  // return true;
	 

	 // var request = new XMLHttpRequest();

  //   request.open('POST', frontend_ajax_object.ajax_url, true);
  //   request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;');
  //   request.onload = function () {
  //       if (this.status >= 200 && this.status < 400) {
  //           // If successful
  //           console.log(this.response);
  //       } else {
  //           // If fail
  //           console.log(this.response);
  //       }
  //   };
  //   request.onerror = function() {
  //       // Connection error
  //   };
  //   request.send('action=process_quiz&data');
  //  // request.send('action=work_hour_form_handler&work_hours_start=' + document.getElementById('work-hours--start').value + '&work_hours_end=' + document.getElementById('work-hours--end').value);
  //   return false;


// function ajaxpost(){
//   // (A) GET FORM DATA
//   var data = new FormData();
//   data.append("name", document.getElementById("full-name").value);
//   data.append("email", document.getElementById("email").value);
 
//   // (B) AJAX
//   var xhr = new XMLHttpRequest();
//   xhr.open("POST", "0-dummy.php");
//   // What to do when server responds
//   xhr.onload = function(){ console.log(this.response); };
//   xhr.send(data);
 
//   // (C) PREVENT HTML FORM SUBMIT
//   return false;
// }

// function ajaxget(){
//   // (A) GET FORM DATA
//   var data = new URLSearchParams();
//   data.append("name", document.getElementById("full-name").value);
//   data.append("email", document.getElementById("email").value);
 
//   // (B) AJAX
//   var xhr = new XMLHttpRequest();
//   xhr.open("GET", "0-dummy.php?" + data.toString());
//   // What to do when server responds
//   xhr.onload = function(){ console.log(this.response); };
//   xhr.send();
 
//   // (C) PREVENT HTML FORM SUBMIT
//   return false;
// }

// function fetchpost(){
//   // (A) GET FORM DATA
//   let data = new URLSearchParams();
//   data.append("name", document.getElementById("full-name").value);
//   data.append("email", document.getElementById("email").value);
 
//   // (B) FETCH
//   fetch("0-dummy.php", {
//     method: 'post',
//     body: data
//   })
//   .then(function (response) {
//     return response.text();
//   })
//   .then(function (text) {
//     console.log(text);
//   })
//   .catch(function (error) {
//     console.log(error)
//   });
 
//   // (C) PREVENT HTML FORM SUBMIT
//   return false;
// }


jQuery(document).ready(function($){
	$('.slider').slick({
	    slidesToShow: 3,
	    slidesToScroll: 3,
	    dots: true,
	    infinite: true,
	    cssEase: 'linear'
	});

	  $('.single-item').slick({
	  infinite: true,
	  arrows: true,
	  slidesToShow: 1,
	  slidesToScroll: 1
	});

	 

	// $('form.ajax').on('submit', function(e){
	//    e.preventDefault();
	//    var that = $(this),
	//    url = that.attr('action'),
	//    type = that.attr('method');
	//    var name = $('.name').val();
	//    var email = $('.email').val();
	//    var message = $('.message').val();
	//    $.ajax({
	//       url: cpm_object.ajax_url,
	//       type:"POST",
	//       dataType:'type',
	//       data: {
	//          action:'set_form',
	//          name:name,
	//          email:email,
	//          message:message,
	//     },   success: function(response){
	//         $(".success_msg").css("display","block");
	//      }, error: function(data){
	//          $(".error_msg").css("display","block");      }
 //   });

// $('.ajax')[0].reset();
// });

//	  const cbox = document.querySelectorAll(".quiz-answer-btn");
 
//  for (let i = 0; i < cbox.length; i++) {
//  	var order = 0;
//  	// add eventlistener to all selection boxes
//      cbox[i].addEventListener("click", function() {
//      	// first selection becomes priority-1
//      	// second selection becomes priority-2
//      	// any buttons selected have is-selected class
//      if (order == 0) {
//        cbox[i].classList.toggle("is-selected","is-priority-1");

//        order++;
//    	 } else {
// 	   	 if (order == 1) {
// 	   	 	cbox[i].classList.toggle("is-priority-2");
// 	       order++;
// 	   	 }
// 	   	 else {
// 	   	 	//document.getElementById()
// 	   	 }
// 	   	}
//      });
//  }
 
//  class ProgressBar {
//   constructor(progressbar, targets){
//     this.progressBar = progressbar;    // Progress Bar
//     this.targets = targets;            // Step Complete Btns
//     this.progress = 0;                 // Tracking Progress
//   }
//   init(){
//     const context = this;   // Reference to the instantiated object.
//     this.targets.forEach(function(target){
//       // Loop through each target element and add a click 
//       // event to listen for which will call the 
//       // changeProgress method and update the progress bar
//       target.addEventListener('click', function(e){
//         context.changeProgress(e);
//         // Passing the built event object (e) to our method
//       });
//     });
//   }
//   changeProgress(e){
//     this.progress = e.target.getAttribute('data-progress');
//     this.progressBar.style.width = this.progress + '%';
//     this.progressBar.setAttribute('aria-valuenow', this.progress);
//   }
// }

// const progressBar = new ProgressBar(
//   // passing in reference to progress-bar div
//   document.querySelector('.progress-bar'),
//   // passing in an array of all the steps (targets) to listen on
//   document.querySelectorAll('.btn-primary')
// );
// progressBar.init();
// /* for multi step form */


 
}); 