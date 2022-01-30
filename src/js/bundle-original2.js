/* jshint esversion: 8 */
import $ from 'jquery';

// bundle.js
import 'bootstrap'; 

import './components/slider';
import AOS from './components/aos';
import './components/skip-link-focus';
//import './bootstrap/bootstrap.bundle.js'; 
import './components/owl.carousel.js';
import { Tooltip, Toast, Popover } from 'bootstrap';
 
 /*document.addEventListener("DOMContentLoaded", function() {
    const t = document.getElementById("site-navigation");
    if (t) {
        const n = t.querySelector("button");
        if (n) {
            const a = t.querySelector("ul");
            if (a) {
                n.setAttribute("aria-expanded", "false"),
                a.setAttribute("aria-expanded", "false"),
                a.classList.add("nav-menu"),
                n.addEventListener("click", function() {
                    t.classList.toggle("toggled");
                    var e = t.classList.contains("toggled") ? "true" : "false";
                    n.setAttribute("aria-expanded", e),
                    a.setAttribute("aria-expanded", e)
                });
                const e = document.getElementsByClassName("handheld-navigation");
                if (0 < e.length && [].forEach.call(e[0].querySelectorAll(".menu-item-has-children > a, .page_item_has_children > a"), function(e) {
                    const t = document.createElement("button");
                    t.setAttribute("aria-expanded", "false"),
                    t.classList.add("dropdown-toggle");
                    const n = document.createElement("span");
                    n.classList.add("screen-reader-text"),
                    n.appendChild(document.createTextNode(storefrontScreenReaderText.expand)),
                    t.appendChild(n),
                    e.parentNode.insertBefore(t, e.nextSibling),
                    e.parentNode.classList.contains("current-menu-ancestor") && (t.setAttribute("aria-expanded", "true"),
                    t.classList.add("toggled-on"),
                    t.nextElementSibling.classList.add("toggled-on")),
                    t.addEventListener("click", function() {
                        for (t.classList.toggle("toggled-on"); n.firstChild; )
                            n.removeChild(n.firstChild);
                        var e = t.classList.contains("toggled-on");
                        t.setAttribute("aria-expanded", e),
                        n.appendChild(document.createTextNode(e ? storefrontScreenReaderText.collapse : storefrontScreenReaderText.expand)),
                        t.nextElementSibling.classList.toggle("toggled-on")
                    })
                }),
                [].forEach.call(document.querySelectorAll(".site-header .menu-item > a, .site-header .page_item > a, .site-header-cart a"), function(n) {
                    n.addEventListener("focus", function() {
                        var e = document.querySelectorAll(".focus");
                        [].forEach.call(e, function(e) {
                            e.contains(n) || (e.classList.remove("focus"),
                            e.firstChild && e.firstChild.classList && e.firstChild.classList.remove("blocked"))
                        });
                        const t = n.parentNode;
                        t.classList.add("focus")
                    })
                }),
                [].forEach.call(document.querySelectorAll("body #page > :not( .site-header )"), function(e) {
                    e.addEventListener("click", function() {
                        [].forEach.call(document.querySelectorAll(".focus, .blocked"), function(e) {
                            e.classList.remove("focus"),
                            e.classList.remove("blocked")
                        })
                    })
                }),
                ("ontouchstart"in window || window.navigator.maxTouchPoints) && 767 < window.innerWidth) {
                    [].forEach.call(document.querySelectorAll(".site-header ul ul, .site-header-cart .widget_shopping_cart"), function(e) {
                        e.classList.add("sub-menu--is-touch-device")
                    });
                    let n = !1;
                    [].forEach.call(document.querySelectorAll(".site-header .menu-item > a, .site-header .page_item > a, .site-header-cart a"), function(t) {
                        t.addEventListener("click", function(e) {
                            t.classList.contains("blocked") && !1 === n && e.preventDefault(),
                            n = !1
                        }),
                        t.addEventListener("pointerup", function(e) {
                            !t.classList.contains("blocked") && "mouse" !== e.pointerType && ("cart-contents" === t.className && t.parentNode.nextElementSibling && "" !== t.parentNode.nextElementSibling.textContent.trim() || t.nextElementSibling) ? t.classList.add("blocked") : n = !0
                        })
                    })
                }
            } else
                n.style.display = "none"
        }
    }
});*/

 // alpha JS request // no jQuery
    // https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest/send#Example_POST
    // https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest/Using_XMLHttpRequest
// var request = new XMLHttpRequest();
//console.log(request);
  //  request.open('POST', frontend_ajax_object.ajax_url, true);
    //request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;');
    //request.onload = function () {
      //  if (this.status >= 200 && this.status < 400) {
            // If successful
         //   console.log(this.response);
       /// } else {
            // If fail
         //  console.log(this.response);
       // }
   // };
   // request.onerror = function() {
        // Connection error
   // };
   // request.send('action=process_quiz');
    
  
 //This is meant to mimic where you would make a fetch POST call if (count > 1) { addToLog("enough interests selected: " + interests); } else { addToLog("**NOT ENOUGH** interests selected: " + interests); } return false;}
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl);
});

var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl);
});

  

let step = document.getElementsByClassName('step');
//console.log(step.length);
 
//let startBtn = document.getElementById('start-btn');
let prevBtn = document.getElementById('btnPrev');
let nextBtn = document.getElementById('btnNext');
let submitBtn = document.getElementById('btnSubmit');
let form = document.getElementsByTagName('form')[0];
let preloader = document.getElementById('preloader-wrapper');
let bodyElement = document.querySelector('body');
let succcessDiv = document.getElementById('success');

let answerOne = '';
let checkbox = document.querySelectorAll("input[type='checkbox']");

    for (let i = 0; i< checkbox.length; i++) {

        // checkbox[i].addEventListener('change', () =>  {
        //     if (this.checked) {
        //         answerOne = checkbox[i];
        //         // console.log("Checkbox is checked..");
        //         this.classList.add('checked');
        //         this.setAttribute('data-checked', 'checked' );
        //         this.checked = true; 

        //     } 
        //     else 
        //     {
        //        // console.log("Checkbox is not checked..");
        //         this.classList.remove('checked');
        //         this.removeAttribute('data-checked' );
        //     }

       // });
    } /* end of let i = 0 */


if ( step.length > 0 ) {
	 
	// form.onsubmit = () => {
	//     //return false
	//     return true
	// }
	let current_step = 0;
	let stepCount = step.length-1;
     //console.log(step[current_step]);
	step[current_step].classList.add('d-block');
	if (current_step == 0) {
	    prevBtn.classList.add('d-none');
	    submitBtn.classList.add('d-none');
	    nextBtn.classList.add('d-inline-block');
	   // startBtn.classList.add('d-inline-block');
	} 
	const progress = (value) => {
	    document.getElementsByClassName('progress-bar')[0].style.width = `${value}%`;
	}; 
	nextBtn.addEventListener('click', () => { 
	    current_step++;
	    
	    let previous_step = current_step - 1;
	     
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
	           // form.onsubmit = () => {
	              //  return true
	           // }
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
	        step[current_step].classList.add('d-block');
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

   const btn = document.getElementById('btnSubmit');
   console.log(btn);
    btn.addEventListener('click', formHandler);
}
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
        let session_id = '<?php echo wp_get_session_token(); ?>';
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

        
        const nonceValue = siteObj.wpNonce; // ! must be wp_rest
        console.log("form nonceValue via PHP: " + nonceValue);
        // https://developer.wordpress.org/rest-api/using-the-rest-api/authentication/
        console.log("GLOBAL JS OBJECT: " + siteObj.wpNonce);

        const formData = new FormData();

      //  preloader.classList.add('d-block');
     
       // const timer = ms => new Promise(res => setTimeout(res, ms));
     
        // timer(3000)
             //.then(() => {
               bodyElement.classList.add('loaded');
            // }).then(() => {
                step[stepCount].classList.remove('d-block');
                step[stepCount].classList.add('d-none');
                prevBtn.classList.remove('d-inline-block');
                prevBtn.classList.add('d-none');
                submitBtn.classList.remove('d-inline-block');
                submitBtn.classList.add('d-none');
                succcessDiv.classList.remove('d-none');
                succcessDiv.classList.add('d-block');
             //}).then(() => {


                formData.append('q11', q11);
                formData.append('q21', q21);
                formData.append('jwt', JWT);
                formData.append('_wpnonce', nonceValue); 
                formData.append('session_id', session_id); 
           // }); // end of timer
       
       // console.log(formData.get('_wpnonce'));
       // console.log(nonceValue);
        // must use _wpnonce as parameter in POST otherwise headers below must be used
        // SITE can be hard coded or added to a wp_localize_script() to create global JS variables
        let apiUrl =  'http://localhost/genuine/wp-json/understrap/v1/rest04';
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
            }); // end of fetch
        document.getElementById('steps-container').innerHTML = 'Quiz Processed';
    
    }  // end of form handler

  

 
	/*submitBtn.addEventListener('click', (e) => { 
		e.preventDefault(); 
		const formData = new FormData();
		
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
				formData.append("q_1_1", document.getElementById("q_1_1").value);
				formData.append("q_1_2", document.getElementById("q_1_2").value); */
           //     console.log('formData');
           //     console.log(formData);


                //  for (const pair of formData) {
				 //		   	searchParams.append(pair[0], pair[1]);
				 // 	console.log(pair[0]);
				 // } 


				

                   // xhr.send('action=process-quiz.php');
 //xhr.send(formData2);       
                 //   xhr.send();
                 //   xhr.onload = function () {
//document.getElementById('steps-container').innerHTML = 'Quiz Processed';
                      //  if (this.status >= 200 && this.status < 400) {
                            // If successful
                           // alert('successful');
                       //     console.log(this.response);
                      //  } else {
                             // If fail
                           //  console.log(this.response);
                            // alert('fail');
                           // succcessDiv.innerHTML('Quiz Processed');
                            
                       // }
                  //  };

                //    xhr.onerror = function() {
                      // Connection error 
                     //  console.log('connection error');
                  //  };

         //  var url = frontend_ajax_object.ajaxurl+'?action=process_quiz';
          //var url = 'localhost:3000'/wp-admin/admin-ajax.php?action=process_quiz
          //xhr.open("POST", frontend_ajax_object.ajaxurl, true); 
          //
               // })  //end of last .end statement
        

     			  // $('#selecctall').mouseup(function(event) {  //on click 

          //               if(document.activeElement.tagName ==='BUTTON') { // check select status
          //                   $('.checkbox1').each(function() { //loop through each checkbox
          //                       this.checked = true;  //select all checkboxes with class "checkbox1"               
          //                   });
          //               }else{
          //                   $('.checkbox1').each(function() { //loop through each checkbox
          //                       this.checked = false; //deselect all checkboxes with class "checkbox1"                       
          //                   });         
          //               }


     		// for (const pair of formData) {
                         //   searchParams.append(pair[0], pair[1]);
                              // console.log(pair[0]);
                           //   }
      //https://webdesign.tutsplus.com/tutorials/how-to-use-the-wordpress-rest-api-a-practical-tutorial--cms-33566
      //                        
    //request.send('action=post-method.php');	
	           //  });*/ /* mouseup */

/*
}); */// end of then to form appenddata
/*});*/  // submit button


  
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
  

    AOS.init();  

    $(".u-skip-link").click(function(event){

            // strip the leading hash and declare
            // the content we're skipping to
            var skipTo="#"+this.href.split('#')[1];

            // Setting 'tabindex' to -1 takes an element out of normal 
            // tab flow but allows it to be focused via javascript
            $(skipTo).attr('tabindex', -1).on('blur focusout', function () {

                // when focus leaves this element, 
                // remove the tabindex attribute
                $(this).removeAttr('tabindex');

            }).focus(); // focus on the content container
        });



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

    (function () {
        "use strict";

    var carousels = function () {
        $(".owl-carousel1").owlCarousel({
          loop: true,
          center: true,
          margin: 0,
          responsiveClass: true,
          nav: false,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            680: {
              items: 2,
              nav: false,
              loop: false
            },
            1000: {
              items: 3,
              nav: true
            }
          }
        });
    };

  (function ($) {
    carousels();
  })(jQuery);
})();
 
 
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