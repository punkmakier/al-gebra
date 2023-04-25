<?php


    require_once '../Model/PretestChecker.php';
    $submit = new PretestChecker;

    if(isset($_POST['userID'])){
       $userID = $_POST['userID'];
       $TestType = $_POST['TestType'];
       $Lesson = $_POST['Lesson'];
       $Attempt = $_POST['Attempt'];

       $NextLesson = $Lesson + 1;
       if($NextLesson == 5){
            $NextLesson = 4;
       }

       if($TestType == "PostTest"){
        if($submit->answerChecker($Lesson,$TestType,$Attempt,$userID,$NextLesson) == "Attempt1"){
            echo "FailedExam1";
        }
        else if($submit->answerChecker($Lesson,$TestType,$Attempt,$userID,$NextLesson) == "Attempt2"){
                echo "FailedExam2";
        }else if($submit->answerChecker($Lesson,$TestType,$Attempt,$userID,$NextLesson) == "YouPassed"){
                echo "YouPassed";
        }
       }

    }


?>