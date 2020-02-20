<?php
include 'inc/generate_questions.php';
session_start();

$questionNumber = "";
$_SESSION["questionNumber"] = $_SESSION["questionNumber"] + 1;

//applies the question and answer buttons to the page
echo '<p class="breadcrumbs">Question ' . $_SESSION["questionNumber"] . ' of ' . '10' . ' </p>' .
'<p class="quiz">What is ' . $questions["leftAdder"] . ' + ' . $questions["rightAdder"] . '?' . '</span></p>';
echo '<form action="/" method="post">' .
        '<input type="hidden" name="id" value="0" />' .
        $questionsAry[0] . $questionsAry[1] . $questionsAry[2] .
    '</form>';

//checks for a correct answer and applies appropriate toast and adds to score
if (isset($_POST['correctanswer'])){
   
    echo '<div style="display:block;height:55px;"></div><div style="margin:0 auto;"><span class="correct">Correct</span></div>'; 
    echo '<div style="height:55px;"></div>';
    echo'<span class="score">Score = ' . $_SESSION["score"] = ++$_SESSION["score"];
    
    } else if(isset($_POST['wronganswer'])){
        echo '<div style="display:block;height:55px;"></div><div style="margin:0 auto;"><span class="incorrect">incorrect</span></div>';
        echo '<div style="height:55px;"></div>';
        echo '<span class="score">Score = ' . $_SESSION["score"] = $_SESSION["score"];
};

//detects if 10 questions have been answered and allows the player to reset the game   
if($_SESSION["questionNumber"] == 11){
    echo '<br /><br /><br /><span class="final-score">You final score is ' . $_SESSION["score"] . '</span>  
    <br /><br /><span class="reset-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Would you like to play again?</span>
    
    <form class="second-form" action="/" method="post">
        <input type="submit" class="btn" name="reset" value="Reset" />
    </form>';
   
    session_destroy();
};





