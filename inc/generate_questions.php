<?php

//array to hold questions
$questions = [];
$questions[] = "Offset"; //just so I don't have to think about it later, is this considered cheating?

// Generate random questions
function generateQuestion(){
  global $questions;  //access global from within the function

  //randomly generate A and B to form ANSWER
  $a=rand(10,50);
  $b=rand(10,50);
  $answer = $a+$b;

  //generate 2 wrong answers based on the actual answer
  $wrong1 = generateIncorrectAnswer($answer);
  $wrong2 = generateIncorrectAnswer($answer);

  //ensure that the 2 wrong answers are unique
  while($wrong1===$wrong2){
    $wrong2 = generateIncorrectAnswer($answer);
  }

  //put question aspects into the QUESTIONS array as an associative array
  $questions[] = [
    'a'       =>  $a,
    'b'       =>  $b,
    'answer'  =>  $answer,
    'wrong1'  =>  $wrong1,
    'wrong2'  =>  $wrong2,
    'status'  =>  false
  ];
}

//function to make the incorrect answer within 10 either way of the answer
function generateIncorrectAnswer($answer){
  $addorminus = rand(0,1);
  if ($addorminus===0){
    return $answer-rand(1,10);
  } else {
    return $answer+rand(1,10);
  }
}

// Loop for required number of questions
for ($i=1; $i<=10; $i++){
  generateQuestion();
}

//var dump to check the array is formed correctly
//echo var_dump($questions);
