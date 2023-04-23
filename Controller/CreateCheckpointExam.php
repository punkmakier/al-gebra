<?php
require_once '../Model/CheckpointCreator.php';

$test = new CheckpointCreator;
if(!empty($_POST['check_question']) ){
    $lesson = $_POST['check_lesson'];
    $concept = $_POST['check_concept'];
    $question = $_POST['check_question'];
    $answer1 = $_POST['check_answer1'];
    $answer2 = $_POST['check_answer2'];
    $answer3 = $_POST['check_answer3'];
    $answer4 = $_POST['check_answer4'];
    $correctAnswer = $_POST['check_correctAnswer'];
    $difficulty = $_POST['check_difficulty'];

    $uniqueKey = uniqid().date("d").date("m").date("Y");
        // echo $uniqueKey;
        $letters = array("A","B","C","D");

        if($test->setQuestion($uniqueKey,$question,$lesson,$concept,$answer1,$answer2,$answer3,$answer4,$difficulty)){
            foreach($letters as $letter){
                $choicesId = "ans-".uniqid().date("Y");
                if($letter == "A"){
                    $test->setAnswers($uniqueKey,"A",$answer1,$choicesId);
                    if($correctAnswer == "A"){
                        $test->setAnswerKey($uniqueKey,$choicesId,"A",$answer1);
                        $test->setUpdateQuestion("A",$answer1,$uniqueKey);
                    }
                }
                if($letter == "B"){
                    $test->setAnswers($uniqueKey,"B",$answer2,$choicesId);
                    if($correctAnswer == "B"){
                        $test->setAnswerKey($uniqueKey,$choicesId,"B",$answer2);
                        $test->setUpdateQuestion("B",$answer2,$uniqueKey);
                    }
                }
                if($letter == "C"){
                    $test->setAnswers($uniqueKey,"C",$answer3,$choicesId);
                    if($correctAnswer == "C"){
                        $test->setAnswerKey($uniqueKey,$choicesId,"C",$answer3);
                        $test->setUpdateQuestion("C",$answer3,$uniqueKey);
                    }
                }
                if($letter == "D"){
                    $test->setAnswers($uniqueKey,"D",$answer4,$choicesId);
                    if($correctAnswer == "D"){
                        $test->setAnswerKey($uniqueKey,$choicesId,"D",$answer4);
                        $test->setUpdateQuestion("D",$answer4,$uniqueKey);
                    }
                }
            }

            header("Location: ../dashboard.php?added=success");
        }

}



?>