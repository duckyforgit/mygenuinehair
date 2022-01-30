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


 <!-- FORMS -->
      <div class="col-lg-7 mx-0 px-0"> 
        <div class="progress">
          <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%"></div>
        </div>
        <div id="qbox-container">
             <h2 class="quiz-question text-center">Take our quiz</h2> 
          <form class="needs-validation" id="form-wrapper" method="post" name="form-wrapper" novalidate action="post-method.php">
             <!-- STEPS HERE -->
              <div id="steps-container">

   <?php




/**
 * Setup query to show the ‘services’ post type with all posts filtered by 'home' category.
 * Output is linked title with featured image and excerpt.
 */
   
    $args = array(  
        'post_type' => 'quiz',
       // 'post_status' => 'publish',
        'posts_per_page' => -1, 
        //'orderby' => 'quiz_order', 
       // 'order' => 'ASC',
       //  'cat' => 'trial',
    );

    $loop = new WP_Query( $args ); 
     
    while ( $loop->have_posts() ) : $loop->the_post(); 
         
     //print_r($loop);    
     $id = $loop->get_the_id();

   // $post_id = '457';  
$ques = 0;
$ans = 0;
$qid;
$name;
 
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
if( have_rows('quiz_question_group') ):
 
    // Loop through rows.
    while( have_rows('quiz_question_group') ) : the_row();
    $question = get_sub_field('quiz_question', $id );
    $ques ++;
    $ans = 0;
        // Load sub field value.
       // $sub_value = get_sub_field('quiz_question'); ?>
         <div class="step">
          
                 <div class="quiz-content is-active">    
                <h2 id="<?php echo $ques;?>" class="quiz-question"><?php echo $question ?></h2>

                 
                <p>Choose up to 2</p> 

     <?php  if( have_rows('answers') ):

            // Loop through rows.
            while( have_rows('answers') ) : the_row();  
           $ans ++; 
           $name = 'q_'.$ques;
          $qid = 'q_' . $ques.'_' . $ans; ?> 
         <?php     $answer_text = get_sub_field('answer_text', $id ); ?>
               <!--  <?php //echo $answer_text;?>

               q_5_two  -->
               <div class="form-check ps-0 q-box"> 
                  <div class="q-box__question">
                    <input class="button form-check-input question__input" id="<?php echo $qid;?>" name="<?php echo $qid; ?>" type="checkbox" value="<?php echo $answer_text;?>" multiple> 
                    <label class="form-check-label question__label" for="<?php echo $qid; ?>"><?php echo $answer_text;?>
                    </label>
                 </div>
               </div>

             <?php   // Do something...
                 

            // End loop.
            endwhile;

      // No value.
      else :
          // Do something...
      endif;  ?>
    </div>
    </div> <!-- end of step -->

<?php endwhile;  /*end for  question_group */
endif;


endwhile;  /* for the queried quiz */
    wp_reset_postdata(); 

   ?>    
 </div>
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
    
    <p>Success!</p>
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

    
 