<?php


    require_once '../Model/SubmitCheckpoint.php';
    $submit = new SubmitCheckpoint;

    if(isset($_POST['userID'])){
       $userID = $_POST['userID'];
       $checkpoint_id = $_POST['checkpoint_id'];
       $Difficulty = $_POST['Difficulty'];
       $Lesson = $_POST['Lesson'];
       $Concept = $_POST['Concept'];
       $myAnswer = $_POST['answer1'];
       $Attempt = $_POST['Attempt'];

       $uniquekey = uniqid();

       
       if($submit->submitCheckForm($checkpoint_id,$userID,$Difficulty,$Lesson,$Concept,strtoupper($myAnswer),$uniquekey,$Attempt)){
        echo "success";
       }else{
        echo "failed";
       }


    }


?>