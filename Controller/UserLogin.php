<?php

require_once '../Model/UserAuth.php';
$userAuth = new UserAuth();

if(!empty($_POST['email']) && !empty($_POST['password']) ){

    $email = $_POST['email'];
    $pass = $_POST['password'];


    echo $userAuth->userLogin($email,$pass);

}


?>