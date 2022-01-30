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

<style>
	.quiz-breadcrumbs-text {
    color: #54585a;
    font-family: euclid;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .44px;
    line-height: 11px;
    text-transform: uppercase;
}
.quiz-breadcrumbs-progress {
    position: relative;
    -ms-flex-preferred-size: 140px;
    flex-basis: 140px;
    width: 140px;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin: 0 24px;
}
.quiz-breadcrumbs-progress-circle {
    width: 10px;
    height: 10px;
    border: 1px solid #4a4a4a;
    border-radius: 50%;
    background-color: #fff;
    z-index: 2;
    transition: background-color .15s ease-in-out;
}
.quiz-breadcrumbs-progress-circle.is-active {
    background-color: #ffd7d8;
}
.quiz-breadcrumbs-text {
    color: #54585a;
    font-family: euclid;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .44px;
    line-height: 11px;
    text-transform: uppercase;
}
.quiz-content {
    display: none;
}
.quiz-content.is-active {
    display: block;
}

.quiz-question {
    display: block;
    max-width: 600px;
    margin: 0 auto 20px;
    color: #54585a;
    font-family: TiemposHeadline-Black;
    font-weight: 900;
    font-size: 20px;
    letter-spacing: .98px;
    line-height: 30px;
    padding: 0 25px;
}
@media only screen and (min-width: 768px) {
.quiz-question {
    font-size: 35px;
    line-height: 45px;
    text-align: center;
    padding: 0;
}
}

.quiz-question-subtext {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: start;
    justify-content: flex-start;
    max-width: 600px;
    padding: 0 25px;
    margin: 0 auto 32px;
    color: #6b6869;
    font-family: euclid;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: .5px;
    line-height: 16px;
}

@media only screen and (min-width: 768px) {
.quiz-question-subtext {
    padding: 0;
    font-size: 16px;
    text-align: center;
    margin-bottom: 40px;
    -ms-flex-pack: center;
    justify-content: center;
}
}
.quiz-question-subtext span {
    margin-right: 8px;
}
@media only screen and (min-width: 768px) {
.quiz-question-subtext span {
    margin-right: 12px;
}}
.quiz-question-subtext svg {
    width: 18px;
    height: auto;
} 
@media only screen and (min-width: 768px) {
.quiz-question-subtext svg {
    width: 20px;
}}
.quiz-answers {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-pack: justify;
    justify-content: space-between;
    max-width: 845px;
    margin: 0 auto 20px;
}
.quiz-answer-btn {
    z-index: 1;
    outline-color: #fff4f5;
    position: relative;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    width: 100%;
    padding: 5px 25px;
    height: 87px;
    border: none;
    border-bottom: 1px solid #ddddde;
    background-color: #fff;
    color: #54585a;
    font-family: euclid;
    font-weight: 700;
    font-size: 15px;
    letter-spacing: .6px;
    line-height: 18px;
    text-align: left;
    transition: border .15s ease-in-out,background-color .15s ease-in-out;
}
@media only screen and (min-width: 768px) {
.quiz-answer-btn {
    -ms-flex-preferred-size: 49%;
    flex-basis: 49%;
    width: 49%;
    margin-bottom: 2%;
    border: 1px solid #ddddde;
    font-size: 16px;
    letter-spacing: .4px;
    line-height: 20px;
}}
.quiz-answer-btn:first-child {
    border-top: 1px solid #ddddde;
}
.quiz-question-1-image-desktop {
    display: none;
}

@media only screen and (min-width: 1350px) {
.quiz-question-1-image-desktop {
    display: block;
    position: absolute;
    top: 65px;
    left: 75%;
    z-index: -1;
}}

@media only screen and (min-width: 768px){
.quiz-question-1-image-desktop img {
    width: 130px;
}}
.quiz-question-1-image {
    display: block;
    margin: 0 auto;
    text-align: center;
    position: absolute;
    margin-top: 95px;
    left: 50%;
    transform: translate(-50%);
    width: 236px;
}
@media only screen and (min-width: 768px){
.quiz-question-1-image {
    right: 82%;
    bottom: 0;
    left: auto;
    margin-top: 0;
    width: 220px;
    transform: translate(0);
}}
.quiz-content {
    display: none;
}
.quiz-answer-btn.is-selected {
    background-color: #fff4f5;
}
.quiz-answer-btn.is-selected, .quiz-answer-btn:focus, .quiz-answer-btn:hover {
    border: 1px solid #ffd7d8;
    background-color: #fff4f5;
}
.quiz-answer-btn.is-priority-2::before {
    content: "2";
    -ms-flex-align: center;
    align-items: center;
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    width: 33px;
    height: 33px;
    border-radius: 50%;
    background-color: #fff;
    color: #e7989a;
    font-family: euclid;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: .4px;
    line-height: 20px;
}
.quiz-footer {
    margin-bottom: 240px;
}
@media only screen and (min-width: 768px) {
.quiz-footer {
    padding: 0;
    position: static;
    box-shadow: none;
    margin: 0 auto;
    background-color: #fff;
    z-index: 99999999999999;
    margin-bottom: 0;
    max-width: 845px;
}
}
.quiz-footer-container {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.quiz-footer-btn.is-disabled {
    opacity: 0;
    pointer-events: none;
}
.quiz-footer-btn.quiz-footer-btn-previous, .quiz-footer-btn:focus, .quiz-footer-btn:hover {
    background-color: #fff;
    color: #54585a;
}

.quiz-footer-btn {
    outline-color: #aba8a9;
    -ms-flex-preferred-size: 180px;
    flex-basis: 180px;
    width: 180px;
    height: 60px;
    padding: 0;
    margin: 0 8px;
    background-color: #54585a;
    border: 2px solid #54585a;
    color: #fff;
    font-family: euclid;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
    line-height: 18px;
    text-align: center;
    text-transform: uppercase;
    transition: opacity .15s ease-in-out,color .15s ease-in-out,background-color .15s ease-in-out;
}
@media only screen and (min-width: 360px) {
.quiz-footer-btn {
    font-size: 16px;
}}
@media only screen and (min-width: 768px){
.quiz-footer-btn {
    margin: 0;
}}
.quiz-results-header {
    padding: 25px 25px 40px;
}
.quiz-results-startover {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    display: block;
    border: none;
    background-color: #fff;
    color: #aba8a9;
    font-family: euclid;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1px;
    line-height: 13px;
    text-decoration: underline;
    text-transform: uppercase;
    margin: 0 auto;
}

.quiz-results-header-title {
    display: block;
    color: #54585a;
    font-family: euclid;
    font-weight: 700;
    font-size: 25px;
    letter-spacing: .31px;
    line-height: 33px;
    text-align: center;
    margin: 20px auto 16px;
}
@media only screen and (min-width: 768px){
.quiz-results-header-title {
    font-size: 40px;
    letter-spacing: .5px;
    line-height: 56px;
}}
.quiz-results-header-subtext {
    display: block;
    color: #54585a;
    font-family: euclid;
    font-size: 14px;
    font-weight: 300;
    letter-spacing: .25px;
    line-height: 22px;
    text-align: center;
    max-width: 415px;
    margin: 0 auto 12px;
}
.quiz-results-header-subtext {
    display: block;
    color: #54585a;
    font-family: euclid;
    font-size: 14px;
    font-weight: 300;
    letter-spacing: .25px;
    line-height: 22px;
    text-align: center;
    max-width: 415px;
    margin: 0 auto 12px;
}

.quiz-reco-wrapper {
    background-color: #f9f9f9;
    padding: 32px 20px 5px;
}
@media only screen and (min-width: 768px){
.quiz-reco-wrapper {
    padding: 52px 20px 77px;
}}
.quiz-reco {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    max-width: 1220px;
    margin: 0 auto;
}
.quiz-results-footer {
    padding: 60px 20px 70px;
    text-align: center;
}
@media only screen and (min-width: 768px){
.quiz-results-footer {
    padding: 28px 20px 70px;
}}
.quiz-results-header-btns {
    margin: 35px auto 25px;
    text-align: center;
}
.quiz-results-save {
    background-color: #fff;
    color: #54585a;
}
.quiz-results-add-all, .quiz-results-save {
    border: 2px solid #54585a;
    width: 320px;
    max-width: 100%;
    height: 50px;
    font-family: euclid;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 2px;
    line-height: 15px;
    text-align: center;
    text-transform: uppercase;
    margin: 0 5px 10px;
}
.quiz-results-share {
    color: #aba8a9;
    font-family: euclid;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .86px;
    line-height: 13px;
    text-align: center;
    text-transform: uppercase;
    margin-bottom: 40px;
}
@media only screen and (min-width: 768px) {
.quiz-results-share {
    margin: 0;
}}
.quiz-results-footer-title {
    pointer-events: none;
    opacity: .78;
    color: #000;
    font-family: Fransisco,serif;
    font-size: 60px;
    letter-spacing: 1.22px;
    line-height: 40px;
    text-align: center;
    text-transform: lowercase;
}
@media only screen and (min-width: 768px) {
.quiz-results-footer-title {
    font-size: 80px;
    letter-spacing: 1.62px;
    line-height: 132px;
}}
.quiz-answer-btn.is-priority-1::before {
    content: "1";
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    width: 33px;
    height: 33px;
    border-radius: 50%;
    background-color: #fff;
    color: #e7989a;
    font-family: euclid;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: .4px;
    line-height: 20px;
} 
@media only screen and (min-width: 768px) {
.quiz-answer-btn.is-selected, .quiz-answer-btn:focus, .quiz-answer-btn:hover {
    border: 1px solid #ffd7d8;
    background-color: #fff4f5;
}}.quiz-answer-btn.is-priority-1 {
    padding-left: 72px;
}
.quiz-answer-btn.is-priority-1::before {
    content: "1";
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    width: 33px;
    height: 33px;
    border-radius: 50%;
    background-color: #fff;
    color: #e7989a;
    font-family: euclid;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: .4px;
    line-height: 20px;
}
.arr-right .breadcrumb-item+.breadcrumb-item::before { 
  content: "›"; 
  vertical-align:top; 
  color: #408080; 
  font-size:35px; 
  line-height:18px; 
}
</style>



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
<style>
  a {
  text-decoration: none;
  color: #3FABBA;
}

.clear {
  clear: both;
}

.animation {
  -webkit-transition: all 0.3s ;
  -moz-transition: all 0.3s ;
  -ms-transition: all 0.3s ;
  -o-transition: all 0.3s ;
  transition: all 0.3s ;
}

/* .wrapper {
  width: 600px;
  padding: 20px;
  margin: 20px auto;
  background: #fff;
} */


.breadCrumbs {
  position: relative;
  list-style-type: none;
}

.breadCrumbs li {
  position: relative;
  float: left;
}

.breadCrumbs li a,
.breadCrumbs li p {
  display: block;
  padding: 0 10px 0 30px;
  line-height: 40px;
  color: #fff;
  background: #3fabba;
}

.breadCrumbs li:first-child a {
  padding: 0 10px 0 20px;  
}

.breadCrumbs li a:hover {
  
}

.breadCrumbs li.activePage p,
.breadCrumbs li.activePage a {
  background: #333;
}

.breadCrumbs li::after {
  content: '';
  position: absolute;
  top: 0;
  right: -20px;
  display: block;
  width: 0; 
  height: 0; 
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
  border-left: 20px solid #3fabba;
  z-index: 10;
}

.breadCrumbs li.activePage::after {
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
  border-left: 20px solid #333;
}

/* GIVE EVERY CHILD A DIFFERENT COLOR */
.breadCrumbs li:nth-child(1) a {
  background: #3fabba;
}

.breadCrumbs li:nth-child(1)::after {
  border-left: 20px solid #3fabba;
}

.breadCrumbs li:nth-child(2) a {
  background: #46bdcd;
}

.breadCrumbs li:nth-child(2)::after {
  border-left: 20px solid #46bdcd;
}

.breadCrumbs li:nth-child(3) a {
  background: #4bd0e2;
}

.breadCrumbs li:nth-child(3)::after {
  border-left: 20px solid #4bd0e2;
} 

/* for bootstrap multiform */
label {
    font-size: 16px;
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 5px;
    color: #00011c;
}
/* TITLE */
 
#title-container {
    min-height: 460px;
    height: 100%;
    color: #fff;
    background-color: #00586e;
    text-align: center;
    padding: 105px 28px 28px 28px;
    box-sizing: border-box;
    position: relative;
    box-shadow: 10px 8px 21px 0px rgba(204, 204, 204, 0.75);
    -webkit-box-shadow: 10px 8px 21px 0px rgba(204, 204, 204, 0.75);
    -moz-box-shadow: 10px 8px 21px 0px rgba(204, 204, 204, 0.75);
}
 
#title-container h2 {
    font-size: 45px;
    font-weight: 800;
    color: #fff;
    padding: 0;
    margin-bottom: 1rem;
}
 
#title-container h3 {
    font-size: 25px;
    font-weight: 600;
    color: #f3f3f3;
    padding: 0;
    margin-top: 1rem;
}
 
#title-container p {
    font-size: 13px;
    padding: 0 25px;
    line-height: 20px;
}
 
.covid-image {
    width: 214px;
    margin-bottom: 15px;
}
/* FORMS */
 
#qbox-container {
   /* background: url(../img/corona.png);*/
    background-repeat: repeat;
    position: relative;
    padding: 62px;
    min-height: 630px;
    box-shadow: 10px 8px 21px 0px rgba(204, 204, 204, 0.75);
    -webkit-box-shadow: 10px 8px 21px 0px rgba(204, 204, 204, 0.75);
    -moz-box-shadow: 10px 8px 21px 0px rgba(204, 204, 204, 0.75);
}
 
#steps-container {
    margin: auto;
    width: 500px;
    min-height: 420px;
    display: flex;
    vertical-align: middle;
    align-items: center;
    justify-content: center;
}
 
.step {
    display: none;
}
 
.step h4 {
    margin: 0 0 26px 0;
    padding: 0;
    position: relative;
    font-weight: 500;
    font-size: 23px;
    font-size: 1.4375rem;
    line-height: 1.6;
}
 
button#prev-btn,
button#next-btn,
button#submit-btn {
    font-size: 17px;
    font-weight: bold;
    position: relative;
    width: 130px;
    height: 50px;
    background: #DC3545;
    margin: 0 auto;
    margin-top: 40px;
    overflow: hidden;
    z-index: 1;
    cursor: pointer;
    transition: color .3s;
    text-align: center;
    color: #fff;
    border: 0;
    -webkit-border-bottom-right-radius: 5px;
    -webkit-border-bottom-left-radius: 5px;
    -moz-border-radius-bottomright: 5px;
    -moz-border-radius-bottomleft: 5px;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
}
 
button#prev-btn::after,
button#next-btn::after,
button#submit-btn::after {
    position: absolute;
    top: 90%;
    left: 0;
    width: 100%;
    height: 100%;
    background: #cc0616;
    content: "";
    z-index: -2;
    transition: transform .3s;
}
 
button#prev-btn:hover::after,
button#next-btn:hover::after,
button#submit-btn:hover::after {
    transform: translateY(-80%);
    transition: transform .3s;
}
 
.progress {
    border-radius: 0px !important;
}
.progress-bar {
  background-color: #3d5500;
}
.q__question {
    position: relative;
}
 
.q__question:not(:last-child) {
    margin-bottom: 10px;
}
 
.question__input {
    position: absolute;
    left: -9999px;
}
 
.question__label {
    position: relative;
    display: block;
    line-height: 40px;
    border: 1px solid #ced4da;
    border-radius: 5px;
    background-color: #fff;
    padding: 5px 20px 5px 50px;
    cursor: pointer;
    transition: all 0.15s ease-in-out;
}
 
.question__label:hover {
    border-color: #DC3545;
}
 
.question__label::before,
.question__label::after {
    position: absolute;
    content: "";
}
 
.question__label::before {
    top: 12px;
    left: 10px;
    width: 26px;
    height: 26px;
    border-radius: 50%;
    background-color: #fff;
    box-shadow: inset 0 0 0 1px #ced4da;
    -webkit-transition: all 0.15s ease-in-out;
    -moz-transition: all 0.15s ease-in-out;
    -o-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
}
 
.question__input:checked+.question__label::before {
    background-color: #DC3545;
    box-shadow: 0 0 0 0;
}
 
.question__input:checked+.question__label::after {
    top: 22px;
    left: 18px;
    width: 10px;
    height: 5px;
    border-left: 2px solid #fff;
    border-bottom: 2px solid #fff;
    transform: rotate(-45deg);
}
 
.form-check-input:checked,
.form-check-input:focus {
    background-color: #DC3545 !important;
    outline: none !important;
    border: none !important;
}
 
input:focus {
    outline: none;
}
 
#input-container {
    display: inline-block;
    box-shadow: none !important;
    margin-top: 36px !important;
}
 
label.form-check-label.radio-lb {
    margin-right: 15px;
}
 
#q-box__buttons {
    text-align: center;
}
 
input[type="text"],
input[type="email"] {
    padding: 8px 14px;
}
 
input[type="text"]:focus,
input[type="email"]:focus {
    border: 1px solid #DC3545;
    border-radius: 5px;
    outline: 0px !important;
    -webkit-appearance: none;
    box-shadow: none !important;
    -webkit-transition: all 0.15s ease-in-out;
    -moz-transition: all 0.15s ease-in-out;
    -o-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
}
 
.form-check-input:checked[type=radio],
.form-check-input:checked[type=radio]:hover,
.form-check-input:checked[type=radio]:focus,
.form-check-input:checked[type=radio]:active {
    border: none !important;
    -webkit-outline: 0px !important;
    box-shadow: none !important;
}

.form-check-input:checked[type=checkbox],
.form-check-input:checked[type=checkbox]:hover,
.form-check-input:checked[type=checkbox]:focus,
.form-check-input:checked[type=checkbox]:active {
    border: none !important;
    -webkit-outline: 0px !important;
    box-shadow: none !important;
}
 
.form-check-input:focus,
input[type="radio"]:hover {
    box-shadow: none;
    cursor: pointer !important;
}
 
#success {
    display: none;
}
 
#success h4 {
    color: #DC3545;
}
 
.back-link {
    font-weight: 700;
    color: #DC3545;
    text-decoration: none;
    font-size: 18px;
}
 
.back-link:hover {
    color: #82000a;
}




@-webkit-keyframes spin {
    0% {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
 
@keyframes spin {
    0% {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
 
#preloader-wrapper .preloader-section {
    width: 51%;
    height: 100%;
    position: fixed;
    top: 0;
    background: #F7F9FF;
    z-index: 1000;
}
 
#preloader-wrapper .preloader-section.section-left {
    left: 0
}
 
#preloader-wrapper .preloader-section.section-right {
    right: 0;
}
 
.loaded #preloader-wrapper .preloader-section.section-left {
    transform: translateX(-100%);
    transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
}
 
.loaded #preloader-wrapper .preloader-section.section-right {
    transform: translateX(100%);
    transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
}
 
.loaded #preloader {
    opacity: 0;
    transition: all 0.3s ease-out;
}
 
.loaded #preloader-wrapper {
    visibility: hidden;
    transform: translateY(-100%);
    transition: all 0.3s 1s ease-out;
}
/* MEDIA QUERIES */
 
@media (min-width: 990px) and (max-width: 1199px) {
    #title-container {
        padding: 80px 28px 28px 28px;
    }
    #steps-container {
        width: 85%;
    }
}
 
@media (max-width: 991px) {
    #title-container {
        padding: 30px;
        min-height: inherit;
    }
}
 
@media (max-width: 767px) {
    #qbox-container {
        padding: 30px;
    }
    #steps-container {
        width: 100%;
        min-height: 400px;
    }
    #title-container {
        padding-top: 50px;
    }
}
 
@media (max-width: 560px) {
    #qbox-container {
        padding: 40px;
    }
    #title-container {
        padding-top: 45px;
    }
}
form:not('.search-submit') svg {
  position: absolute;
  width: 240px;
  height: 120px;
  top: 0; right: 0;
  bottom: 0; left: 0; 
  margin: auto;
}

svg #plug,
svg #socket {
  fill:#FDB515;
}

svg #loop-normal {
  fill: none;
  stroke: #FDB515;
  stroke-width: 12;
}

svg #loop-offset {
  display: none;
}

</style>
<!-- CONTAINER -->
<div class="container d-flex align-items-center min-vh-100">
   <div class="row g-0 justify-content-center">
      <!-- TITLE -->
      <div class="col-lg-4 offset-lg-1 mx-0 px-0">
         
       <div id="title-container">
          <img class="covid-image" src="<?php echo get_template_directory_uri().'/img/checkmark.png'?>">
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
          <form class="needs-validation" id="form-wrapper" method="post" name="form-wrapper" novalidate>
             <!-- STEPS HERE -->
              <div id="steps-container"> 
              <!-- <div id="start" class="step">
                 <div class="quiz-content is-active">  -->
               
              <!--  <div class="form-check ps-0 q-box"> 
                     
                     

                      
                  </div> --> <!-- end of step 1 form -->
           <!--  </div> --> <!-- end of step 1 -->
            <div class="step">
               <!--  <div class="quiz-content is-active">   -->
                <h2 class="quiz-question">How would you describe your biggest hair concerns?</h2>
                <p>Choose up to 2</p> 
               <div class="form-check ps-0 q-box"> 
                    <div class="q-box__question">

                        <div class="quiz-answers">
    <button class="quiz-answer-btn" data-answer-btn="">Dry</button>
    <button class="quiz-answer-btn" data-answer-btn="">Oily</button>
    <button class="quiz-answer-btn" data-answer-btn="">Flaky and/or itchy</button>
    <button class="quiz-answer-btn is-none" data-answer-btn="">Normal</button>
    <button class="quiz-answer-btn" data-answer-btn="">Full of product buildup</button>
  </div>

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
                 <!--  </div> --> <!-- end of step 1 form -->
            </div> <!-- end of step 1 -->
            
            <div class="step">
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
         </div> <!-- end of steps container -->
         <div id="q-box__buttons">
            <button id="prev-btn" type="button">Previous</button> 
            <!--  <button id="start-btn" class="visible" type="button">Start</button>  -->
            <button id="next-btn" class="" type="button">Next</button> 
            <button id="submit-btn" type="submit">Submit</button>
         </div>
          </form>
      
        </div>
      </div>
   </div>
  </div> 



<div class="container d-flex align-items-center min-vh-100">
<div id="preloader-wrapper">
   <div id="preloader"></div>
   <div class="preloader-section section-left"></div>
   <div class="preloader-section section-right"></div>
</div>
</div>

<div class="container d-flex align-items-center min-vh-100">
<div id="success">
    
    
</div>
    </div>
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

<div class="container d-flex align-items-center min-vh-100"> 
</section> -->
<div class="container d-flex align-items-center min-vh-100">
    <div class="row">
        <div class="col-sm-12">
           <section class="wrapper">
                  <ul class="breadCrumbs">
                    <li><a href="" title="Home" class="animation">Home</a></li>
                    <li><a href="" title="Portfolio" class="animation">Portfolio</a></li>
                    <li><a href="" title="Websites" class="animation">Websites</a></li>
                    <li class= "activePage"><p href="" title="HPU internet services"  class="animation">HPU internet services</p></li>
                    <div class="clear"></div>
                  </ul>
                </section> 
        </div>
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
<section class="quiz-wrapper">

  <div class="quiz-breadcrumbs">
    <span class="quiz-breadcrumbs-text">Start</span>
    <div class="quiz-breadcrumbs-progress">
      <span class="quiz-breadcrumbs-progress-circle is-active"></span>
      <span class="quiz-breadcrumbs-progress-circle"></span>
      <span class="quiz-breadcrumbs-progress-circle"></span>
      <span class="quiz-breadcrumbs-progress-circle"></span>
      <span class="quiz-breadcrumbs-progress-circle"></span>
      <span class="quiz-breadcrumbs-progress-bar"></span>
    </div>
    <span class="quiz-breadcrumbs-text">All done!</span>
  </div>

  <div class="quiz-content-wrapper">
    <div class="quiz-content is-active">
  <h2 class="quiz-question">How would you describe your biggest hair concerns?</h2>

  <h4 class="quiz-question-subtext">
    <span>Choose up to 2 in order of priority</span>
    <svg width="100%" height="100%" viewBox="0 0 33 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-miterlimit:10;"><g id="Layer_1.-2"><path d="M30.89,29.88l0.87,-2.94c0.119,-0.394 0.18,-0.802 0.18,-1.214c0,-2.094 -1.573,-3.881 -3.65,-4.146c-0.444,-1.892 -2.146,-3.241 -4.089,-3.241c-0.324,0 -0.646,0.037 -0.961,0.111l-0.43,0.13l3.53,-12.33c0.73,-2.46 0.2,-4.94 -2,-5.6c-2.2,-0.66 -3.94,0.86 -4.66,3.35l-4.68,14.61c0,0 -0.2,0.53 -0.65,0.56c-0.381,0.009 -0.738,-0.191 -0.93,-0.52l-5.03,-14.15c-0.7,-2.38 -2.39,-3.72 -4.62,-3.06c-2.23,0.66 -2.77,3.18 -2.07,5.56l3.71,15c0.14,0.578 0.227,1.167 0.26,1.76c-0.72,0.21 0,0.7 -0.56,1.29l-3.85,4.1c-0.38,7.79 2.94,16.57 10,18.78c9,2.9 16.26,-0.1 17.67,-8.33c0.59,-3.6 1.28,-6.2 1.96,-9.72Z" style="fill:#f9f4a2;fill-rule:nonzero;stroke:#555759;stroke-width:1px;"></path><path d="M5.58,27.89c-1.44,1.46 -3.58,2.21 -4.73,3.92" style="fill:#f9f4a2;fill-rule:nonzero;stroke:#555759;stroke-width:1px;"></path><path d="M8.996,26.346c-0.524,-2.315 -2.828,-3.769 -5.143,-3.246c-2.315,0.524 -3.769,2.828 -3.246,5.143l1.24,5.481c0.523,2.315 2.827,3.77 5.142,3.246c2.315,-0.523 3.769,-2.827 3.246,-5.142l-1.239,-5.482Z" style="fill:#f9f4a2;stroke:#555759;stroke-width:1px;"></path><path d="M26.42,18.391c-1.411,-0.766 -3.179,-0.243 -3.945,1.169l-4.009,7.382c-0.766,1.411 -0.242,3.179 1.169,3.946l0.009,0.004c1.411,0.767 3.18,0.243 3.946,-1.168l4.008,-7.382c0.766,-1.412 0.243,-3.18 -1.169,-3.946l-0.009,-0.005Z" style="fill:#f9f4a2;stroke:#555759;stroke-width:1px;"></path><path d="M30.591,22.001c-1.412,-0.767 -3.18,-0.243 -3.946,1.168l-2.414,4.447c-0.767,1.412 -0.243,3.18 1.168,3.946l0.009,0.005c1.412,0.766 3.18,0.243 3.946,-1.169l2.415,-4.447c0.766,-1.411 0.242,-3.179 -1.169,-3.946l-0.009,-0.004Z" style="fill:#f9f4a2;stroke:#555759;stroke-width:1px;"></path></g></svg>
  </h4>

  <div class="quiz-answers">
    <button class="quiz-answer-btn" data-answer-btn="">Dry and Damaged with Split Ends</button>
     <button class="quiz-answer-btn" data-answer-btn="">Dull and lacks shine</button>
    <button class="quiz-answer-btn" data-answer-btn="">Frizz</button>
    <button class="quiz-answer-btn" data-answer-btn="">Thin and lacks volume</button>
   
    <!-- <button class="quiz-answer-btn is-selected is-priority-2" data-answer-btn="">Dull and lacks shine</button> -->
    <button class="quiz-answer-btn" data-answer-btn="">Oily / Greasy</button>
    <button class="quiz-answer-btn" data-answer-btn="">Skin sensitivities</button>
    <button class="quiz-answer-btn" data-answer-btn="">Tangles when washing</button> 
  </div>

  <div class="quiz-question-1-image-desktop">
    <img src="<?php echo get_template_directory_uri().'/img/sharon-mccutcheon-Z32N5XVeDlI-unsplash.jpg'?>" alt=" Farewell Frizz and Be Gentle Be Kind bottle illustrations">
  </div>
  <div class="quiz-question-1-image">
    <img src="<?php echo get_template_directory_uri().'/img/sharon-mccutcheon-Z32N5XVeDlI-unsplash.jpg'?>" alt=" Don't Despair Repair, Blossom &amp; Bloom &amp; Curl Charisma bottle illustrations">
  </div>
</div>
    <div class="quiz-content">
  <h2 class="quiz-question">How would you describe your scalp condition?</h2>
  <h4 class="quiz-question-subtext">
    <span>Choose up to 2 in order of priority</span>
     
  </h4>

  <div class="quiz-answers">
    <button class="quiz-answer-btn" data-answer-btn="">Dry</button>
    <button class="quiz-answer-btn" data-answer-btn="">Oily</button>
    <button class="quiz-answer-btn" data-answer-btn="">Flaky and/or itchy</button>
    <button class="quiz-answer-btn is-none" data-answer-btn="">Normal</button>
    <button class="quiz-answer-btn" data-answer-btn="">Full of product buildup</button>
  </div>

  <div class="quiz-question-2-image-mobile">
    <img src="<?php echo get_template_directory_uri().'/img/sharon-mccutcheon-Z32N5XVeDlI-unsplash.jpg'?>" alt="Scalp Revival scalp therapy Essentials Kit illustrations">
  </div>
  <div class="quiz-question-2-image-desktop">
    <img src="<?php echo get_template_directory_uri().'/img/sharon-mccutcheon-Z32N5XVeDlI-unsplash.jpg'?>" alt="Scalp Revival hair care products and Scalp Revival Stimulating Therapy Massager illustrations">
  </div>
</div>



    <div class="quiz-content">
  <h2 class="quiz-question">Your natural hair type is:</h2>
  <h4 class="quiz-question-subtext">
    <span>Choose just one</span>
    <svg width="100%" height="100%" viewBox="0 0 33 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-miterlimit:10;"><g id="Layer_1.-2"><path d="M30.88,29.49l0.5,-3.09c0.172,-0.445 0.261,-0.918 0.261,-1.395c0,-1.596 -0.99,-3.035 -2.481,-3.605l-0.26,-0.09c-0.203,-0.059 -0.41,-0.102 -0.62,-0.13c-0.34,-1.41 -2.14,0.25 -3.3,-1.29c-0.56,-0.74 -2.84,0 -2.18,-1.68l-7.87,0c0,0 -0.2,0.53 -0.65,0.56c-0.61,0 -1.93,0.17 -1.93,0.17l0,-14.83c-0.25,-2.2 -0.81,-3.73 -3.55,-3.6c-3,0 -3.21,3.34 -3.15,6.09l-0.29,15c0.14,0.578 0.227,1.167 0.26,1.76c-0.72,0.21 0,0.7 -0.56,1.29l-3.85,4.1c-0.38,7.79 2.94,16.57 10,18.78c9.06,2.9 16.33,-0.1 17.71,-8.33c0.61,-3.63 1.29,-6.2 1.96,-9.71Z" style="fill:#f9f4a2;fill-rule:nonzero;stroke:#555759;stroke-width:1px;"></path><path d="M8.997,25.956c-0.523,-2.315 -2.827,-3.769 -5.142,-3.246c-2.315,0.523 -3.769,2.828 -3.246,5.142l1.24,5.482c0.523,2.315 2.827,3.769 5.142,3.246c2.315,-0.523 3.769,-2.828 3.246,-5.142l-1.24,-5.482Z" style="fill:#f9f4a2;stroke:#555759;stroke-width:1px;"></path><path d="M23.273,17.191c-1.621,-0.245 -3.136,0.872 -3.381,2.493l-1.405,9.294c-0.245,1.621 0.871,3.136 2.492,3.381l0.326,0.049c1.621,0.245 3.136,-0.871 3.381,-2.492l1.406,-9.295c0.245,-1.62 -0.872,-3.135 -2.493,-3.38l-0.326,-0.05Z" style="fill:#f9f4a2;stroke:#555759;stroke-width:1px;"></path><path d="M25,28l0.81,-5.39c0.255,-1.703 1.867,-2.895 3.57,-2.64c1.687,0.265 2.864,1.86 2.62,3.55l-0.81,5.39c-0.255,1.703 -1.867,2.895 -3.57,2.64c-1.687,-0.265 -2.864,-1.86 -2.62,-3.55l0,0Z" style="fill:#f9f4a2;fill-rule:nonzero;stroke:#555759;stroke-width:1px;"></path><path d="M12.4,26.5l1.35,-9c0.255,-1.703 1.867,-2.895 3.57,-2.64c1.551,0.209 2.721,1.547 2.721,3.112c0,0.17 -0.013,0.34 -0.041,0.508l-1.35,9c-0.241,1.519 -1.564,2.648 -3.101,2.648c-0.184,0 -0.368,-0.016 -0.549,-0.048c-1.692,-0.275 -2.862,-1.886 -2.6,-3.58l0,0Z" style="fill:#f9f4a2;fill-rule:nonzero;stroke:#555759;stroke-width:1px;"></path></g></svg>
  </h4>

  <div class="quiz-answers quiz-answers-shapes">
    <button class="quiz-answer-btn-shape" data-answer-btn="">
      <img class="quiz-answer-btn-shape-img" src="<?php echo get_template_directory_uri().'/img/straight.jpg'?>" alt="">
      <span class="quiz-answer-btn-shape-text" data-answer-text="">Straight</span>
    </button>
    <button class="quiz-answer-btn-shape" data-answer-btn="">
      <img class="quiz-answer-btn-shape-img" src="<?php echo get_template_directory_uri().'/img/wavy.jpg'?>" alt="">
      <span class="quiz-answer-btn-shape-text" data-answer-text="">Wavy</span>
    </button>
    <button class="quiz-answer-btn-shape" data-answer-btn="">
      <img class="quiz-answer-btn-shape-img" src="<?php echo get_template_directory_uri().'/img/curly.jpg'?>" alt="">
      <span class="quiz-answer-btn-shape-text" data-answer-text="">Curly</span>
    </button>
    <button class="quiz-answer-btn-shape" data-answer-btn="">
      <img class="quiz-answer-btn-shape-img" src="<?php echo get_template_directory_uri().'/img/kinky.jpg'?>" alt="">
      <span class="quiz-answer-btn-shape-text" data-answer-text="">Kinky / Coily</span>
    </button>
  </div>

   <div class="quiz-question-3-image-desktop">
    <img src="<?php echo get_template_directory_uri().'/img/shimmering-star.jpg'?>" alt="bubbles illustrations">
  </div>
  <div class="quiz-question-3-image">
    <img src="<?php echo get_template_directory_uri().'/img/shimmering-star.jpg'?>" alt="bubbles with shimmer illustrations">
  </div>
</div>
    <div class="quiz-content">
  <h2 class="quiz-question">Your hair structure is:</h2>
  <h4 class="quiz-question-subtext">
    <span>Choose just one</span>
    <svg width="100%" height="100%" viewBox="0 0 33 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-miterlimit:10;"><g id="Layer_1.-2"><path d="M30.88,29.49l0.5,-3.09c0.172,-0.445 0.261,-0.918 0.261,-1.395c0,-1.596 -0.99,-3.035 -2.481,-3.605l-0.26,-0.09c-0.203,-0.059 -0.41,-0.102 -0.62,-0.13c-0.34,-1.41 -2.14,0.25 -3.3,-1.29c-0.56,-0.74 -2.84,0 -2.18,-1.68l-7.87,0c0,0 -0.2,0.53 -0.65,0.56c-0.61,0 -1.93,0.17 -1.93,0.17l0,-14.83c-0.25,-2.2 -0.81,-3.73 -3.55,-3.6c-3,0 -3.21,3.34 -3.15,6.09l-0.29,15c0.14,0.578 0.227,1.167 0.26,1.76c-0.72,0.21 0,0.7 -0.56,1.29l-3.85,4.1c-0.38,7.79 2.94,16.57 10,18.78c9.06,2.9 16.33,-0.1 17.71,-8.33c0.61,-3.63 1.29,-6.2 1.96,-9.71Z" style="fill:#f9f4a2;fill-rule:nonzero;stroke:#555759;stroke-width:1px;"></path><path d="M8.997,25.956c-0.523,-2.315 -2.827,-3.769 -5.142,-3.246c-2.315,0.523 -3.769,2.828 -3.246,5.142l1.24,5.482c0.523,2.315 2.827,3.769 5.142,3.246c2.315,-0.523 3.769,-2.828 3.246,-5.142l-1.24,-5.482Z" style="fill:#f9f4a2;stroke:#555759;stroke-width:1px;"></path><path d="M23.273,17.191c-1.621,-0.245 -3.136,0.872 -3.381,2.493l-1.405,9.294c-0.245,1.621 0.871,3.136 2.492,3.381l0.326,0.049c1.621,0.245 3.136,-0.871 3.381,-2.492l1.406,-9.295c0.245,-1.62 -0.872,-3.135 -2.493,-3.38l-0.326,-0.05Z" style="fill:#f9f4a2;stroke:#555759;stroke-width:1px;"></path><path d="M25,28l0.81,-5.39c0.255,-1.703 1.867,-2.895 3.57,-2.64c1.687,0.265 2.864,1.86 2.62,3.55l-0.81,5.39c-0.255,1.703 -1.867,2.895 -3.57,2.64c-1.687,-0.265 -2.864,-1.86 -2.62,-3.55l0,0Z" style="fill:#f9f4a2;fill-rule:nonzero;stroke:#555759;stroke-width:1px;"></path><path d="M12.4,26.5l1.35,-9c0.255,-1.703 1.867,-2.895 3.57,-2.64c1.551,0.209 2.721,1.547 2.721,3.112c0,0.17 -0.013,0.34 -0.041,0.508l-1.35,9c-0.241,1.519 -1.564,2.648 -3.101,2.648c-0.184,0 -0.368,-0.016 -0.549,-0.048c-1.692,-0.275 -2.862,-1.886 -2.6,-3.58l0,0Z" style="fill:#f9f4a2;fill-rule:nonzero;stroke:#555759;stroke-width:1px;"></path></g></svg>
  </h4>

  <div class="quiz-answers quiz-answers-shapes">
    <button class="quiz-answer-btn-shape" data-answer-btn="">
      <img class="quiz-answer-btn-shape-img" src="<?php echo get_template_directory_uri().'/img/hair-type-thin.jpg';?>" alt="">
      <span class="quiz-answer-btn-shape-text" data-answer-text="">Fine</span>
    </button>
    <button class="quiz-answer-btn-shape" data-answer-btn="">
      <img class="quiz-answer-btn-shape-img" src="<?php echo get_template_directory_uri().'/img/hair-type-medium.jpg';?>" alt="">
      <span class="quiz-answer-btn-shape-text" data-answer-text="">Medium</span>
    </button>
    <button class="quiz-answer-btn-shape" data-answer-btn="">
      <img class="quiz-answer-btn-shape-img" src="<?php echo get_template_directory_uri().'/img/hair-type-coarse.jpg';?>" alt="">
      <span class="quiz-answer-btn-shape-text" data-answer-text="">Coarse</span>
    </button>
  </div>
  <div class="quiz-question-3-image-desktop">
    <img src="<?php echo get_template_directory_uri().'/img/shimmering-star.jpg';?>"  alt="bubbles illustrations">
  </div>
  <div class="quiz-question-3-image">
    <img src="<?php echo get_template_directory_uri().'/img/shimmering-star.jpg';?>" alt="bubbles with shimmer illustrations">
  </div>
</div>
    <div class="quiz-content">
  <h2 class="quiz-question">Do you do any of the following to your hair?</h2>
  <h4 class="quiz-question-subtext">Choose all that apply</h4>

  <div class="quiz-answers">
    <button class="quiz-answer-btn" data-answer-btn="">Regular use of heat tools</button>
    <button class="quiz-answer-btn" data-answer-btn="">Chemical processing</button>
    <button class="quiz-answer-btn" data-answer-btn="">Color treatments</button>
    <button class="quiz-answer-btn is-none" data-answer-btn="">No, I don't treat my hair</button>
  </div>
  <div class="quiz-question-5-image">
    <img src="<?php echo get_template_directory_uri().'/img/shimmering-star.jpg'?> " alt="bubbles with shimmer illustrations">
  </div>
  <div class="quiz-results-loading-container">
    <h2 class="quiz-loading-title">Hang tight.</h2>
    <h4 class="quiz-loading-subtext">We’re generating your custom hair care routine.</h4>
    <div class="quiz-loading-animation-container">
       <svg id="preloader" width="240px" height="120px" viewBox="0 0 240 120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  
  <path id="loop-normal" class="st1" d="M120.5,60.5L146.48,87.02c14.64,14.64,38.39,14.65,53.03,0s14.64-38.39,0-53.03s-38.39-14.65-53.03,0L120.5,60.5
L94.52,87.02c-14.64,14.64-38.39,14.64-53.03,0c-14.64-14.64-14.64-38.39,0-53.03c14.65-14.64,38.39-14.65,53.03,0z">
    <animate attributeName="stroke-dasharray" from="500, 50" to="450 50" begin="0s" dur="2s" repeatCount="indefinite"></animate>
    <animate attributeName="stroke-dashoffset" from="-40" to="-540" begin="0s" dur="2s" repeatCount="indefinite"></animate>
  </path>

  <path id="loop-offset" d="M146.48,87.02c14.64,14.64,38.39,14.65,53.03,0s14.64-38.39,0-53.03s-38.39-14.65-53.03,0L120.5,60.5L94.52,87.02c-14.64,14.64-38.39,14.64-53.03,0c-14.64-14.64-14.64-38.39,0-53.03c14.65-14.64,38.39-14.65,53.03,0L120.5,60.5L146.48,87.02z"></path>

  <path id="socket" d="M7.5,0c0,8.28-6.72,15-15,15l0-30C0.78-15,7.5-8.28,7.5,0z">
    <animateMotion dur="2s" repeatCount="indefinite" rotate="auto" keyTimes="0;1" keySplines="0.42, 0.0, 0.58, 1.0">
      <mpath xlink:href="#loop-offset"></mpath>
    </animateMotion>
  </path>
  
<path id="plug" d="M0,9l15,0l0-5H0v-8.5l15,0l0-5H0V-15c-8.29,0-15,6.71-15,15c0,8.28,6.71,15,15,15V9z">
  <animateMotion dur="2s" rotate="auto" repeatCount="indefinite" keyTimes="0;1" keySplines="0.42, 0, 0.58, 1">
    <mpath xlink:href="#loop-normal"></mpath>
  </animateMotion>
</path>   
  
</svg>
    </div>
  </div>
</div>
  </div>

  <div class="quiz-footer">
    <div class="quiz-footer-container">
      <button class="quiz-footer-btn quiz-footer-btn-previous is-disabled">← <span class="quiz-footer-btn-text">Previous</span></button>
      <button class="quiz-footer-btn quiz-footer-btn-next"><span class="quiz-footer-btn-text">Next</span> →</button>
    </div>
  </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            
       
<section class="quiz-results">
  <div class="quiz-results-inner-container">
    <div class="quiz-results-header">
      <button class="quiz-results-startover">↻ Retake the quiz</button>

      <h2 class="quiz-results-header-title">Your top shelf, customized.</h2>

      <p class="quiz-results-header-subtext">Hair goals? Check. Here are your custom product recommendations to achieve your best hair yet.</p>

      <div class="quiz-results-header-overview" data-quiz-overview-container=""></div>

      <p class="quiz-results-header-subtext">Choose any or all of the products below based on your most important needs.</p>
    </div>

    <div class="quiz-reco-wrapper" data-quiz-reco-wrapper="">
      <div class="quiz-reco" data-quiz-reco=""></div>
      <div class="quiz-results__overview" data-quiz-results__overview=""></div>
    </div>

    <div class="quiz-results-footer">
      <div class="quiz-results-header-btns">
        <button class="quiz-results-save" data-modalnew-show="quiz-send" data-quiz-results-save-btn="">Save my results</button>
      </div>

      <div class="quiz-results-share">
        Share
        <a class="quiz-results-share-icon" href="mailto:?subject=Hair Quiz&amp;body=Get your custom product recommendations to achieve your best hair yet, <?php echo home_url().'/pages/quiz/'?>">
          <i class="fa fa-envelope"></i>
        </a>
        <span class="quiz-results-share-icon" data-social-sharing="facebook">
          <i class="fa fa-facebook"></i>
        </span>
        <span class="quiz-results-share-icon" data-social-sharing="twitter">
          <i class="fa fa-twitter"></i>
        </span>
      </div>
      <h2 class="quiz-results-footer-title">Explore All Your Options</h2>
      <a class="quiz-results-footer-btn" href="/collections/all-products">Shop All Products</a>
    </div>
  </div>
</section>
</div>
    </div>
</div>
<div class="email-text1" data-email1="YAY! WE’VE SELECTED THE BEST PRODUCTS FOR YOUR HAIR GOALS."></div>
<div class="email-text2" data-email2="Enter your email to view your results!"></div>
<div class="email-text3" data-email3="Plus, get <span>10% OFF your first purchase</span> and exclusive offers from .<center>(your code will be sent to your inbox)</center>"></div>
<div class="email-text4" data-email4=""></div>
 
<div class="container">
    <div class="row">
        <div class="col-sm-12"> 
      
      <div id="shopify-section-footer" class="shopify-section">
        <footer class="footer">
<h1 class="footer-heading">6-free<sup class="trademark">™</sup> hair care</h1>
    <div class="footer row">
      <div class="wrapper col-sm-3">
        <img src="<?php echo get_template_directory_uri().'/img/shimmering-star.jpg'?>" alt="No Harsh Sulfates">
        <p><b>NO</b> harsh sulfates</p>
      </div>
      <div class="wrapper col-sm-3">
        <img src="<?php echo get_template_directory_uri().'/img/shimmering-star.jpg'?>" alt="No Silicones">
        <p><b>NO</b> silicones</p>
      </div>
       <div class="wrapper col-sm-3">
        <img class="large-icon" src="<?php echo get_template_directory_uri().'/img/shimmering-star.jpg'?>" alt="No Phthalates">
        <p><b>NO</b> Phthalates</p>
      </div>
      <div class="wrapper col-sm-3">
        <img src="<?php echo get_template_directory_uri().'/img/shimmering-star.jpg'?>" alt="No Parabens">
        <p><b>NO</b> parabens</p>
      </div>
      <div class="wrapper col-sm-3">
        <img class="large-icon" src="<?php echo get_template_directory_uri().'/img/shimmering-star.jpg'?>" alt="No DEA">
        <p><b>NO</b> DEA</p>
      </div>
      <div class="wrapper col-sm-3">
        <img class="large-icon" src="<?php echo get_template_directory_uri().'/img/shimmering-star.jpg'?>" alt="No Artificial Dyes">
        <p><b>NO</b> Artificial Dyes</p>
      </div>
    </div>
    <div class="footer__container">

        <div class="footer-column footer-column--blurb">
            
            
            

            <div class="footer-blurb">
                <h3 class="footer-blurb__title">Clean Care. Healthy Hair.</h3>
                <p class="footer-blurb__desc">Clean, natural + effective hair care.<br>
Built to treat every hair type + texture.</p>

                
                    <a href="<?php echo home_url().'/pages/ingredients/'; ?>" class="footer-blurb__link">See All Ingredients</a>
                
            </div>
        </div>

        <div class="footer-column footer-column--menu footer-menu-container">
            <ul class="footer-menu footer-menu--1">
            
                <li class="footer-menu__item">
                    <a href="<?php echo home_url().'/collections/all-products'?>" class="footer-menu__link">Shop</a>
                </li>
            
                <li class="footer-menu__item">
                    <a href="<?php echo home_url().'/pages/our-story'?>" class="footer-menu__link">Our Story</a>
                </li>
            
                <li class="footer-menu__item">
                    <a href="<?php echo home_url().'/press/'; ?>" class="footer-menu__link">Press</a>
                </li>
            
                <li class="footer-menu__item">
                    <a href="<?php echo home_url().'/faq#contact-us_faqs/';?>" class="footer-menu__link">Contact</a>
                </li>
            
            </ul>

            <ul class="footer-menu footer-menu--2">
            
                <li class="footer-menu__item">
                    <a href="<?php echo home_url().'/faq#contact-us_faqs/';?>" class="footer-menu__link">FAQ</a>
                </li>
            
                <li class="footer-menu__item">
                    <a href="<?php echo home_url().'/faq#contact-us_faqs/';?>" class="footer-menu__link">Returns &amp; Exchanges</a>
                </li>
            
                <li class="footer-menu__item">
                    <a href="<?php echo home_url().'/apps/storelocator';?>" class="footer-menu__link">Store Locator</a>
                </li>
            
                <li class="footer-menu__item">
                    <a href="<?php echo home_url().'/faq/';?>" class="footer-menu__link">Web Accessibility</a>
                </li>
            
            </ul>
        </div>
    </div>
</footer>
</div>
</div>
</div>
</div>

        <div class="footer-column footer-column--contact">
            <div class="footer-newsletter">
                <h4 class="footer-newsletter__title">Sign up for our newsletter!</h4>
                <form class="klaviyo-inline-form klaviyo_bare_embed_HQmQ53 " action="//manage.kmail-lists.com/subscriptions/subscribe" data-ajax-submit="//manage.kmail-lists.com/ajax/subscriptions/subscribe" method="GET" target="_blank" novalidate="novalidate" email-subscribe="">
  <input type="hidden" name="g" value="HQmQ53">
  <div class="klaviyo-form__group">
  <label for="k_id_email_HQmQ53" class="u-sr-only">Email</label>
      <input class="klaviyo-form__email" type="email" value="" name="email" id="k_id_email_HQmQ53" placeholder="Your email goes here">
      <input class="klaviyo-form__submit klaviyo_submit_button" type="submit" value="submit">
  </div>

  <div class="klaviyo_messages">
      <div class="success_message" style="display:none;"></div>
      <div class="error_message" style="display:none;"></div>
  </div>
</form>   </div> 
</div>
</article> 