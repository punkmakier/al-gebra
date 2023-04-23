<?php
    require_once '../Model/PreTestCreator.php';
    $deletetest = new PreTestCreator;


    if(isset($_POST['QID'])){
        if($deletetest->deleteQuestion($_POST['QID'])){
            echo "Success";
        }else{
            echo "Failed";
        }
    }


?>