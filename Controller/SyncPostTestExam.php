<?php

require_once '../Model/SyncPostTest.php';
$submit = new SyncPostTest;


if(isset($_POST['Lesson'])){
    
    if($submit->SyncNow($_POST['Lesson'])){
        echo "Success";
    }
}


?>