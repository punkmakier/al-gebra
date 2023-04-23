<?php
    require_once 'config.php';

    class UserInfo extends config{

        public function showCompleteName($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `FirstName`,`LastName` FROM `user_info` WHERE `user_id` = '$UserID'");
            $sqlQ->execute();
            while($row = $sqlQ->fetch()){
                return $row['FirstName']." ".substr($row['LastName'],0,1).".";
            }
        }

        public function showUserRole($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `user_role` FROM `users` WHERE `user_id` = '$UserID'");
            $sqlQ->execute();
            while($row = $sqlQ->fetch()){
                return $row['user_role'];
            }
        }

        public function showFirstName($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `FirstName` FROM `user_info` WHERE `user_id` = '$UserID'");
            $sqlQ->execute();
            while($row = $sqlQ->fetch()){
                return $row['FirstName'];
            }
        }
        public function showLastName($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `LastName` FROM `user_info` WHERE `user_id` = '$UserID'");
            $sqlQ->execute();
            while($row = $sqlQ->fetch()){
                return $row['LastName'];
            }
        }
        public function showMiddleName($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `MiddleName` FROM `user_info` WHERE `user_id` = '$UserID'");
            $sqlQ->execute();
            while($row = $sqlQ->fetch()){
                return $row['MiddleName'];
            }
        }

        public function showGrade($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `Grade` FROM `user_info` WHERE `user_id` = '$UserID'");
            $sqlQ->execute();
            while($row = $sqlQ->fetch()){
                return $row['Grade'];
            }
        }

        public function showSection($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `Section` FROM `user_info` WHERE `user_id` = '$UserID'");
            $sqlQ->execute();
            while($row = $sqlQ->fetch()){
                return $row['Section'];
            }
        }
        public function showBirthdate($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `Birthdate` FROM `user_info` WHERE `user_id` = '$UserID'");
            $sqlQ->execute();
            while($row = $sqlQ->fetch()){
                return $row['Birthdate'];
            }
        }
        public function showAddress($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `Address` FROM `user_info` WHERE `user_id` = '$UserID'");
            $sqlQ->execute();
            while($row = $sqlQ->fetch()){
                return $row['Address'];
            }
        }
        public function showContactNumber($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `ContactNumber` FROM `user_info` WHERE `user_id` = '$UserID'");
            $sqlQ->execute();
            while($row = $sqlQ->fetch()){
                return $row['ContactNumber'];
            }
        }
        public function showNameOfGuardian($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `NameOfGuardian` FROM `user_info` WHERE `user_id` = '$UserID'");
            $sqlQ->execute();
            while($row = $sqlQ->fetch()){
                return $row['NameOfGuardian'];
            }
        }
        public function showContactNumOfGuardian($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `ContactNumOfGuardian` FROM `user_info` WHERE `user_id` = '$UserID'");
            $sqlQ->execute();
            while($row = $sqlQ->fetch()){
                return $row['ContactNumOfGuardian'];
            }
        }
        public function showEmail($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `Email` FROM `user_info` WHERE `user_id` = '$UserID'");
            $sqlQ->execute();
            while($row = $sqlQ->fetch()){
                return $row['Email'];
            }
        }
        public function showuser_id($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `user_id` FROM `user_info` WHERE `user_id` = '$UserID'");
            $sqlQ->execute();
            while($row = $sqlQ->fetch()){
                return $row['user_id'];
            }
        }


        public function updateTimeByUser($UserID,$lesson,$concept,$learningtool,$totaltime){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT * FROM `aitool` WHERE `user_id` = '$UserID' AND `Lesson` = '$lesson' AND `Concept` = '$concept' AND `LearningTool` = '$learningtool'");
            echo "SELECT * FROM `aitool` WHERE `user_id` = '$UserID' AND `Lesson` = '$lesson' AND `Concept` = '$concept' AND `LearningTool` = '$learningtool'";
            if($sqlQ->execute()){
                if($sqlQ->rowCount() > 0){
                    while($row = $sqlQ->fetch()){
                        $val = $row['TotalTime'] + $totaltime;
                        $sqlQUpdate = $con->prepare("UPDATE `aitool` SET `TotalTime`='$val', `LastUpdate`= now() WHERE `user_id` = '$UserID' AND `Lesson` = '$lesson' AND `Concept` = '$concept' AND `LearningTool` = '$learningtool'");
                        $sqlQUpdate->execute();
                    }
                    
                }else{
                    $sqlQInsert = $con->prepare("INSERT INTO `aitool` (`user_id`,`Lesson`,`Concept`,`LearningTool`,`TotalTime`) VALUES ('$UserID','$lesson','$concept','$learningtool','$totaltime')");
                    $sqlQInsert->execute();
                }
            }
        }
    }



?>