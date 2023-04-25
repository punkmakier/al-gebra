<?php
    require_once 'config.php';
    class UnlockFeatures extends config{

        public function checkPostAttempts($lesson,$studentId){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `Attempts` FROM lessonattempts WHERE Lesson = $lesson AND UserID = '$studentId'");
            $sqlQ->execute();
            while($res = $sqlQ->fetch()){
                return $res['Attempts'];
            }
        }


        public function checkPostTestResultPerLesson($lesson,$studentId,$attempt){
            $con = $this->openConnection();
            $sqlQ = "SELECT * FROM student_answers WHERE TestType = 'PostTest' AND Status = 1 AND Attempt = 1";
        }
    }


?>