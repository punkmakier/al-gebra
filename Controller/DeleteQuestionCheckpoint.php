<?php
    require_once '../Model/CheckpointCreator.php';
    $deletetest = new CheckpointCreator;


    if(isset($_POST['QID'])){
        if($deletetest->deleteQuestion($_POST['QID'])){
            echo "Success";
        }else{
            echo "Failed";
        }
    }


?>