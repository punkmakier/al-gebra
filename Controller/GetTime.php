<?php
    require_once '../Model/UserInfo.php';
    $user = new UserInfo;

    if(isset($_POST['Seconds'])){
        $seconds = $_POST['Seconds'];
        $StudID = $_POST['StudID'];
        $Lesson = $_POST['Lesson'];
        $Concept = $_POST['Concept'];
        $LearningTool = $_POST['LearningTool'];
        $user->updateTimeByUser($StudID,$Lesson,$Concept,$LearningTool,$seconds);

    }


?>