<?php
    require_once 'config.php';

    class AttemptUpdateUser extends config{

        public function updateAttempt($UserID){
           $con = $this->openConnection();
           $sqlQ = $con->prepare("UPDATE student_ans_attempt SET Attempt = 0 WHERE UserID = '$UserID'");
           if($sqlQ->execute()){
                return true;
           }
        }
    }


?>