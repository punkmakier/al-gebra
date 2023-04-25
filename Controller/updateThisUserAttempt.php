<?php


    require_once '../Model/AttemptUpdateUser.php';
    $submit = new AttemptUpdateUser;

    if(isset($_POST['userID'])){

        if($submit->updateAttempt($_POST['userID'])){
             echo "Success";
        }
 
     }


?>