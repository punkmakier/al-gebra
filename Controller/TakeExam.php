<?php


    require_once '../Model/SubmitExam.php';
    $submit = new SubmitExam;

    if(isset($_POST['userID'])){
       $userID = $_POST['userID'];
       $pretest_id = $_POST['pretest_id'];
       $TestType = $_POST['TestType'];
       $Lesson = $_POST['Lesson'];
       $Concept = $_POST['Concept'];
       $myAnswer = $_POST['answer1'];
       $Attempt = $_POST['Attempt'];

       $uniquekey = uniqid();

       
       if($submit->submitTestForm($pretest_id,$userID,$TestType,$Lesson,$Concept,strtoupper($myAnswer),$uniquekey,$Attempt)){
        echo "success";
       }else{
        echo "failed";
       }


    }


?>