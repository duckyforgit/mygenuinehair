<?php
/**
 * Template Name: Insert ACF Posts
 *
 * Template for displaying a dashboard page.
 *
 * @package UnderStrap
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
 
get_header('inner');
$container = get_theme_mod( 'understrap_container_type' );
?>
 <style>
         :root {
  background-color: #ecf5ff;
  font-size: 62.5%;
}

* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
  color: #333;
}

h1,
h2,
h3,
h4 {
  margin-bottom: 1rem;
}

h1 {
  font-size: 5.4rem;
  color: #56a5eb;
  margin-bottom: 5rem;
}

h1 > span {
  font-size: 2.4rem;
  font-weight: 500;
}

h2 {
  font-size: 4.2rem;
  margin-bottom: 4rem;
  font-weight: 700;
}

h3 {
  font-size: 2.8rem;
  font-weight: 500;
}

/* UTILITIES */

.container {
  width: 100vw;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 80rem;
  margin: 0 auto;
  padding: 2rem;
}

.container > * {
  width: 100%;
}

.flex-column {
  display: flex;
  flex-direction: column;
}

.flex-center {
  justify-content: center;
  align-items: center;
}

.justify-center {
  justify-content: center;
}

.text-center {
  text-align: center;
}

.hidden {
  display: none;
}

/* BUTTONS */
.btn {
  font-size: 1.8rem;
  padding: 1rem 0;
  width: 20rem;
  text-align: center;
  border: 0.1rem solid #56a5eb;
  margin-bottom: 1rem;
  text-decoration: none;
  color: #56a5eb;
  background-color: white;
}

.btn:hover {
  cursor: pointer;
  box-shadow: 0 0.4rem 1.4rem 0 rgba(86, 185, 235, 0.5);
  transform: translateY(-0.1rem);
  transition: transform 150ms;
}

.btn[disabled]:hover {
  cursor: not-allowed;
  box-shadow: none;
  transform: none;
}

/* FORMS */
form {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
}

input {
  margin-bottom: 1rem;
  width: 20rem;
  padding: 1.5rem;
  font-size: 1.8rem;
  border: none;
  box-shadow: 0 0.1rem 1.4rem 0 rgba(86, 185, 235, 0.5);
}

input::placeholder {
  color: #aaa;
}
.choice-container {
  display: flex;
  margin-bottom: 0.5rem;
  width: 100%;
  font-size: 1.8rem;
  border: 0.1rem solid rgb(86, 165, 235, 0.25);
  background-color: white;
}

.choice-container:hover {
  cursor: pointer;
  box-shadow: 0 0.4rem 1.4rem 0 rgba(86, 185, 235, 0.5);
  transform: translateY(-0.1rem);
  transition: transform 150ms;
}

.choice-prefix {
  padding: 1.5rem 2.5rem;
  background-color: #56a5eb;
  color: white;
}

.choice-text {
  padding: 1.5rem;
  width: 100%;
}

.correct {
  background-color: #28a745;
}

.incorrect {
  background-color: #dc3545;
}

/* HUD */

#hud {
  display: flex;
  justify-content: space-between;
}

.hud-prefix {
  text-align: center;
  font-size: 2rem;
}

.hud-main-text {
  text-align: center;
}

#progressBar {
  width: 20rem;
  height: 4rem;
  border: 0.3rem solid #56a5eb;
  margin-top: 1.5rem;
}

#progressBarFull {
  height: 3.4rem;
  background-color: #56a5eb;
  width: 0%;
}
 </style>

<div class="container wrapper" id="page-wrapper">

        <div id="home" class="flex-center flex-column">
        <h1>Quick Quiz</h1>
        <a class="btn" href="/game.html">Play</a>
        <?php   get_template_part( 'template-parts/quiz/content', 'quiz' ); ?>
        <a class="btn" href="/highscores.html">High Scores</a>
      </div>
</div>

 
<?php
get_footer(); 