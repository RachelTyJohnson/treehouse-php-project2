<?php
/*
 * PHP Techdegree Project 2: Build a Quiz App in PHP
 *
 * These comments are to help you get started.
 * You may split the file and move the comments around as needed.
 *
 * You will find examples of formating in the index.php script.
 * Make sure you update the index file to use this PHP script, and persist the users answers.
 *
 * For the questions, you may use:
 *  1. PHP array of questions
 *  2. json formated questions
 *  3. auto generate questions
 *
 */

// Include questions
include('inc/generate_questions.php');

// Keep track of which questions have been asked
$count = 1;

// Show which question they are on
function showQuestionNumber(){
  global $count;
  return $count;
}

// Show random question
function showQuestion($count){
  global $questions;
  echo $questions[$count]['a'] . '+' . $questions[$count]['b'];
}

// Shuffle and display answer buttons
function showButtons($count){
  global $questions;
  $answers =[ $questions[$count]['answer'],$questions[$count]['wrong1'],$questions[$count]['wrong2'] ];
  shuffle($answers);
  echo
  "<input type='submit' class='btn' name='answer' value='{$answers[0]}' />
  <input type='submit' class='btn' name='answer' value='$answers[1]' />
  <input type='submit' class='btn' name='answer' value='$answers[2]' />";
}

// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score
