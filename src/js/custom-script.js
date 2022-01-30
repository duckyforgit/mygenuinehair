/* jshint esversion: 8 */
import $ from 'jquery';
 
// for off canvas mobile menu
 
//import slick from 'slick';
 
 document.querySelector('[data-bs-toggle="offcanvas"]').addEventListener('click', function () {
    document.querySelector('.offcanvas-collapse').classList.toggle('open');
 });
 
  

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});
  
// Add your JS customizations here
 let posts;
        document.body.onload = async (e) =>{
            console.log("document loaded!");
            posts = await fetch("https://www.techiediaries.com/api/feed.json").then(function(response) {
                return response.json();
            });
            posts.forEach(element => {
                let child = document.createElement('div');
                child.classList.add('mt-1');
                ['card'].forEach((v)=>{
                    child.classList.add(v);
                });


                child.innerHTML = `
                <div class="card-body">
                    <h2 class="card-title">${element.title}</h2>
                    <p class="card-text">${element.excerpt}</p>
                    <div class="card-footer">
                        <a href="${element.url}" class="card-link">Read</a>
                        <a href="#" class="card-link">Save to read offline</a>
                    </div>

                </div>
                `;

                document.getElementById("postsDiv").appendChild(child);
            });

        }

 /**
   * Porfolio isotope and filter
   */
 (function() {
  "use strict";

    document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('main-nav').classList.add('fixed-top');
        // add padding top to show content behind navbar
        var navbarHeight = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbarHeight + 'px';
      } else {
        document.getElementById('main-nav').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
    });
  });
  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim();
    if (all) {
      return [...document.querySelectorAll(el)];
    } else {
      return document.querySelector(el);
    }
  };

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all);
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener));
      } else {
        selectEl.addEventListener(type, listener);
      }
    }
  };
  window.addEventListener('load', () => {
     let portfolioContainer = select('.portfolio-container');
   //let portfolioContainer = document.getElementById("portfolio").select();
   // let portfolioContainer = document.getElementById('portfolio');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          //AOS.refresh()
        });
      }, true);
    }

  });
  //  window.addEventListener('load', () => {
  //   AOS.init({
  //     duration: 1000,
  //     easing: 'ease-in-out',
  //     once: true,
  //     mirror: false
  //   })
  // });

  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  		return new bootstrap.Tooltip(tooltipTriggerEl);
	});

	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
	  return new bootstrap.Popover(popoverTriggerEl);
	});
 

})();

jQuery(document).ready(function($){
// $('.slider').slick({
//     slidesToShow: 3,
//     slidesToScroll: 3,
//     dots: true,
//     infinite: true,
//     cssEase: 'linear'
// });

//   $('.single-item').slick({
//   infinite: true,
//   arrows: true,
//   slidesToShow: 1,
//   slidesToScroll: 1
// });
 

//  $('.center').slick({
//   centerMode: true,
//   centerPadding: '60px',
//   slidesToShow: 3,
//   responsive: [
//     {
//       breakpoint: 768,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '40px',
//         slidesToShow: 3
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '40px',
//         slidesToShow: 1
//       }
//     }
//   ]
// }); 
});
// const cbox = document.querySelectorAll(".quiz-answer-btn");
 
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

// let step = document.getElementsByClassName('step');
// let startBtn = document.getElementById('start-btn');
// let prevBtn = document.getElementById('prev-btn');
// let nextBtn = document.getElementById('next-btn');
// let submitBtn = document.getElementById('submit-btn');
// let form = document.getElementsByTagName('form')[0];
// let preloader = document.getElementById('preloader-wrapper');
// let bodyElement = document.querySelector('body');
// let succcessDiv = document.getElementById('success');

// form.onsubmit = () => {
//     return false
// }
// let current_step = 0;
// let stepCount = 8
// step[current_step].classList.add('d-block');
// if (current_step == 0) {
//     prevBtn.classList.add('d-none');
//     submitBtn.classList.add('d-none');
//     nextBtn.classList.add('d-none');
//     startBtn.classList.add('d-inline-block');
// }

// const progress = (value) => {
//     document.getElementsByClassName('progress-bar')[0].style.width = `${value}%`;
// }

// startBtn.addEventListener('click', () => {
//     current_step++;
//    // let current_step = current_step - 1;
//     if ((current_step == 0) && (current_step <= stepCount)) {
//         nextBtn.classList.remove('d-none');
//         nextBtn.classList.add('d-inline-block');
//         //step[current_step].classList.remove('d-none');
//         //step[current_step].classList.add('d-block');
//        // step[previous_step].classList.remove('d-block');
//        // step[previous_step].classList.add('d-none');
//         if (current_step == stepCount) {
//             submitBtn.classList.remove('d-none');
//             submitBtn.classList.add('d-inline-block');
//             nextBtn.classList.remove('d-inline-block');
//             nextBtn.classList.add('d-none');
//         }
//     } else {
//         if (current_step > stepCount) {
//             form.onsubmit = () => {
//                 return true
//             }
//         }
//     }
//     progress((100 / stepCount) * current_step);
// });

// nextBtn.addEventListener('click', () => {
//     current_step++;
//     let previous_step = current_step - 1;
//     if ((current_step > 0) && (current_step <= stepCount)) {
//         prevBtn.classList.remove('d-none');
//         prevBtn.classList.add('d-inline-block');
//         step[current_step].classList.remove('d-none');
//         step[current_step].classList.add('d-block');
//         step[previous_step].classList.remove('d-block');
//         step[previous_step].classList.add('d-none');
//         if (current_step == stepCount) {
//             submitBtn.classList.remove('d-none');
//             submitBtn.classList.add('d-inline-block');
//             nextBtn.classList.remove('d-inline-block');
//             nextBtn.classList.add('d-none');
//         }
//     } else {
//         if (current_step > stepCount) {
//             form.onsubmit = () => {
//                 return true
//             }
//         }
//     }
//     progress((100 / stepCount) * current_step);
// });
 
 
// prevBtn.addEventListener('click', () => {
//     if (current_step > 0) {
//         current_step--;
//         let previous_step = current_step + 1;
//         prevBtn.classList.add('d-none');
//         prevBtn.classList.add('d-inline-block');
//         step[current_step].classList.remove('d-none');
//         step[current_step].classList.add('d-block')
//         step[previous_step].classList.remove('d-block');
//         step[previous_step].classList.add('d-none');
//         if (current_step < stepCount) {
//             submitBtn.classList.remove('d-inline-block');
//             submitBtn.classList.add('d-none');
//             nextBtn.classList.remove('d-none');
//             nextBtn.classList.add('d-inline-block');
//             prevBtn.classList.remove('d-none');
//             prevBtn.classList.add('d-inline-block');
//         }
//     }
 
//     if (current_step == 0) {
//         prevBtn.classList.remove('d-inline-block');
//         prevBtn.classList.add('d-none');
//     }
//     progress((100 / stepCount) * current_step);
// });
 
 
// submitBtn.addEventListener('click', () => {
//     preloader.classList.add('d-block');
 
//     const timer = ms => new Promise(res => setTimeout(res, ms));
 
//     timer(3000)
//         .then(() => {
//             bodyElement.classList.add('loaded');
//         }).then(() => {
//             step[stepCount].classList.remove('d-block');
//             step[stepCount].classList.add('d-none');
//             prevBtn.classList.remove('d-inline-block');
//             prevBtn.classList.add('d-none');
//             submitBtn.classList.remove('d-inline-block');
//             submitBtn.classList.add('d-none');
//             succcessDiv.classList.remove('d-none');
//             succcessDiv.classList.add('d-block');
//         })
 
// });


//$(document).ready(()=>{

//let str = `window location is ${window.location}`;
  //console.log(str);
//});
// $('.multiple-items').slick({   
//   slidesToShow: 4,
//   slidesToScroll: 1,
//   initialSlide: 0,
//   arrows:true,
//   dots: true,   
//   speed: 300,  
//   centerMode: false,
// });  
// $(".vertical-center-4").slick({
//         dots: true,
//         vertical: true,
//         centerMode: true,
//         slidesToShow: 4,
//         slidesToScroll: 2
//       });
//       $(".vertical-center-3").slick({
//         dots: true,
//         vertical: true,
//         centerMode: true,
//         slidesToShow: 3,
//         slidesToScroll: 3
//       });
//       $(".vertical-center-2").slick({
//         dots: true,
//         vertical: true,
//         centerMode: true,
//         slidesToShow: 2,
//         slidesToScroll: 2
//       });
//       $(".vertical-center").slick({
//         dots: true,
//         vertical: true,
//         centerMode: true,
//       });
//       $(".vertical").slick({
//         dots: true,
//         vertical: true,
//         slidesToShow: 3,
//         slidesToScroll: 3
//       });
//       $(".regular").slick({
//         dots: true,
//         infinite: true,
//         slidesToShow: 3,
//         slidesToScroll: 3
//       });
//       $(".center").slick({
//         dots: true,
//         infinite: true,
//         centerMode: true,
//         slidesToShow: 5,
//         slidesToScroll: 3
//       });
//       $(".variable").slick({
//         dots: true,
//         infinite: true,
//         variableWidth: true
//       });
//       $(".lazy").slick({
//         lazyLoad: 'ondemand', // ondemand progressive anticipated
//         infinite: true
//       }); 


// init Isotope
//    var $grid = $('.grid').isotope({ 
//     itemSelector: '.grid-item',
//     layoutMode: 'fitRows' 
//   });

//   // filter functions; extra filters if needed.
//   var filterFns = {   
//   };

//   // bind filter button click
//   $('#filters').on( 'click', 'button', function() {
//      var filterValue = $( this ).attr('data-filter');
//     // use filterFn if matches value
//      filterValue = filterFns[ filterValue ] || filterValue;
//      $grid.isotope({ filter: filterValue });
//   });

//   // change is-checked class on buttons
//   $('.button-group').each( function( i, buttonGroup ) {
//     var $buttonGroup = $( buttonGroup );
//     $buttonGroup.on( 'click', 'button', function() {
//       $buttonGroup.find('.is-checked').removeClass('is-checked');
//       $( this ).addClass('is-checked');
//     });
//   });  
   
// // init Isotope
//    var $grid = $('.grid').isotope({ 
//     itemSelector: '.grid-item',
//     layoutMode: 'fitRows' 
//   });

//   // filter functions; extra filters if needed.
//   var filterFns = {   
//   };

//   // bind filter button click
//   $('#filters').on( 'click', 'button', function() {
//      var filterValue = $( this ).attr('data-filter');
//     // use filterFn if matches value
//      filterValue = filterFns[ filterValue ] || filterValue;
//      $grid.isotope({ filter: filterValue });
//   });

//   // change is-checked class on buttons
//   $('.button-group').each( function( i, buttonGroup ) {
//     var $buttonGroup = $( buttonGroup );
//     $buttonGroup.on( 'click', 'button', function() {
//       $buttonGroup.find('.is-checked').removeClass('is-checked');
//       $( this ).addClass('is-checked');
//     });
//   });  
   
//});