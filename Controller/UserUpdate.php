<?php

require_once '../Model/UserAuth.php';

if(!empty($_POST['email']) ){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
    $contactNum = $_POST['contactNum'];
    $nameOfGuardian = $_POST['nameOfGuardian'];
    $ContactNumOfGuardian = $_POST['ContactNumOfGuardian'];
    $userID = $_SESSION['UserID'];

    $userAuth = new UserAuth($userID,"","",$fname,$mname,$lname,"","",$birthdate,$address,$contactNum,$nameOfGuardian,$ContactNumOfGuardian);
    
    if($userAuth->updateAccount()){
        echo "Success";
    }else{
        echo "Failed";
    }

   
}


?>