<?php

    require_once '../Model/PreTestCreator.php';
    $test = new PreTestCreator;

    if(!empty($_POST['question']) ){
        $lesson = $_POST['lesson'];
        $concept = $_POST['concept'];
        $question = $_POST['question'];
        $answer1 = $_POST['answer1'];
        $answer2 = $_POST['answer2'];
        $answer3 = $_POST['answer3'];
        $answer4 = $_POST['answer4'];
        $correctAnswer = $_POST['correctAnswer'];
        $TestType = $_POST['TestType'];

        


        $uniqueKey = uniqid().date("d").date("m").date("Y");
        // echo $uniqueKey;
        $letters = array("A","B","C","D");

        if($test->setQuestion($uniqueKey,$question,$lesson,$concept,$answer1,$answer2,$answer3,$answer4,$TestType)){
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

            echo "Success";
        }
        


        // echo $correctAnswer;

    }



?>