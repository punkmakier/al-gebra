<?php
    session_start();
    require_once 'config.php';

    class UserAuth extends config{

        private $user_id,$email, $password, $firstname,$middlename,$lastname,$grade,$section,$birthdate,$address,$contactnum,$nameofguardian,$contactnumofguardian;

        function __construct($user_id="", $email="",$password="",$firstname="",$middlename="",$lastname="",$grade="",$section="",$birthdate="",$address="",$contactnum="",$nameofguardian="",$contactnumofguardian=""){
            $this->user_id = $user_id;
            $this->email = $email;
            $this->password = $password;
            $this->firstname = $firstname;
            $this->middlename = $middlename;
            $this->lastname = $lastname;
            $this->grade = $grade;
            $this->section = $section;
            $this->birthdate = $birthdate;
            $this->address = $address;
            $this->contactnum = $contactnum;
            $this->nameofguardian = $nameofguardian;
            $this->contactnumofguardian = $contactnumofguardian;
        }


        public function userRegistration(){
            $con = $this->openConnection();
            $sqlQ = "SELECT `user_id`,`Email` FROM `user_info` WHERE `user_id` = '$this->user_id' OR `Email` = '$this->email'";
            $stmt = $con->prepare($sqlQ);
            if($stmt->execute()){
                if($stmt->rowCount() > 0){
                    while($row = $stmt->fetch()){
                        if($row['user_id'] == $this->user_id || $row['Email'] == $this->email){
                            return false;
                        }
                    }
                }else{
                    $sqlInsertUser = "INSERT INTO `users` (`user_id`,`email`,`password`) VALUES ('$this->user_id','$this->email','$this->password')";
                    $stmt1 = $con->prepare($sqlInsertUser);
                    if($stmt1->execute()){
                        $sqlInsert = "INSERT INTO `user_info` (`user_id`,`Email`,`FirstName`,`MiddleName`,`LastName`,`Grade`,`Section`) VALUES ('$this->user_id','$this->email','$this->firstname','$this->middlename','$this->lastname','$this->grade','$this->section')";
                        $stmt2 = $con->prepare($sqlInsert);
                        $stmt2->execute();

                        $sqlInsertAttempt = $con->prepare("INSERT INTO `student_ans_attempt` (UserID) VALUES ('$this->user_id')");
                        $sqlInsertAttempt->execute();

                        
                        return true;
                    }

                }
            }
        }


        public function completeRegistration($userID){
            $con = $this->openConnection();
            $sqlCheck = $con->prepare("SELECT `UserID` FROM lessonattempts ='$user_id'");
            if($sqlCheck->execute()){
                if($sqlCheck->rowCount() > 0){
                    return;
                }else{
                    $sqlQ = $con->prepare("UPDATE users SET `isRegistered` = 1 WHERE `user_id` = '$userID'");
                    if($sqlQ->execute()){
                        $sqlInsert1 = $con->prepare("INSERT INTO lessonattempts (UserID, Attempts,Lesson) VALUES('$userID','0','1')");
                        $sqlInsert1->execute();
                        $sqlInsert2 = $con->prepare("INSERT INTO lessonattempts (UserID, Attempts,Lesson) VALUES('$userID','2','2')");
                        $sqlInsert2->execute();
                        $sqlInsert3 = $con->prepare("INSERT INTO lessonattempts (UserID, Attempts,Lesson) VALUES('$userID','2','3')");
                        $sqlInsert3->execute();
                        $sqlInsert4 = $con->prepare("INSERT INTO lessonattempts (UserID, Attempts,Lesson) VALUES('$userID','2','4')");
                        $sqlInsert4->execute();
                        return true;
                    }else{
                        return false;
                    }
                }
            }
        }



        public function userLogin($email, $password){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `email`, `password`,`user_id`,`user_role` FROM `users` WHERE `email` = '$email' AND `password`='$password' AND `isRegistered` = 1");
            if($sqlQ->execute()){
                if($sqlQ->rowCount() > 0){
                    while($row = $sqlQ->fetch()){
                        $_SESSION['UserID'] = $row['user_id'];
                        $_SESSION['UserRole'] = $row['user_role'];
                        if($row['user_role'] == "Student"){
                            return "Student";
                        }else if($row['user_role'] == "Teacher"){
                            return "Teacher";
                        }
                    }                    
                }else{
                    return "Failed";
                }
            }else{
                return "Failed";
            }
        }


        public function updateAccount(){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("UPDATE `user_info` SET `FirstName`='$this->firstname',`LastName`='$this->lastname',`MiddleName`='$this->middlename',`Birthdate`='$this->birthdate',`Address`='$this->address',`ContactNumber`='$this->contactnum',`NameOfGuardian`='$this->nameofguardian',`ContactNumOfGuardian`='$this->contactnumofguardian' WHERE `user_id` = '$this->user_id'");
            if($sqlQ->execute()){
                return true;
            }else{
                return false;
            }
        }



    }




?>