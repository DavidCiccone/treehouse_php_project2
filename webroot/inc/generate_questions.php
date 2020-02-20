<?php
        //generates an array with the numbers for the question
        $questions = array();
        $questions["leftAdder"] = rand(1,100);
        $questions["rightAdder"] = rand(1,100);
        $questions["correctAnswer"] = $questions["leftAdder"] + $questions["rightAdder"];

        $tenLess = $questions["correctAnswer"] - 10;
        $tenMore = $questions["correctAnswer"] + 10;

        //makes sure the first incorrect answer is never the same as the correct answer
        while(in_array(($x = rand($tenLess,$tenMore)), $questions["correctAnswer"]));
        $questions["firstIncorrectAnswer"] = $x;
        
        //makes sure the second incorrect answer is never the same as the correct answer or the first incorrect answer
        while(in_array(($y = rand($tenLess,$tenMore)), array($questions["correctAnswer"], $x)));
        $questions["secondIncorrectAnswer"] = $y;

        //creates an array for the form buttons and then shuffles them so the answers are in random order each time
        $questionsAry = array('<input type="submit" class="btn" name="correctanswer" value="' . $questions["correctAnswer"] . '" />',
        '<input type="submit" class="btn" name="wronganswer" value="' . $questions["firstIncorrectAnswer"] .'" />',
        '<input type="submit" class="btn" name="wronganswer" value="' . $questions["secondIncorrectAnswer"] .'" />');
        shuffle($questionsAry);
        //echo $questions["leftAdder"] . " " . $questions["rightAdder"] . " " . $questions["correctAnswer"] . " " . $questions["firstIncorrectAnswer"] . " " . $questions["secondIncorrectAnswer"] . " ";
       
     
        
       
       









