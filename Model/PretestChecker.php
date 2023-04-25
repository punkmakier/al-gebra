<?php

    require_once 'config.php';
    class PretestChecker extends config{

        public function answerChecker($lesson,$testtype,$attempt,$studId,$Nextlesson){
            $con = $this->openConnection();
            
            $sqlQ = $con->prepare("SELECT COUNT(*) AS TotalCountQuestion FROM pretest_question WHERE Lesson = $lesson AND TestType = '$testtype'");
            if($sqlQ->execute()){
                $res = $sqlQ->fetch();
                $totalAverage = $res['TotalCountQuestion'] - 5;

                $sqlQuery2 = $con->prepare("SELECT COUNT(*) AS TotalCountAnsweredByStudent FROM student_answers WHERE Lesson = $lesson AND TestType = '$testtype' AND Attempt = $attempt AND Student_id = '$studId' ");
                $sqlQuery2->execute();
                $res2 = $sqlQuery2->fetch();

                if($res['TotalCountQuestion'] == $res2['TotalCountAnsweredByStudent']){

                    $sqlQ1 = $con->prepare("SELECT COUNT(*) AS TotalScore FROM student_answers WHERE Lesson = $lesson AND TestType = '$testtype' AND Status = 1 AND Attempt = '$attempt' AND Student_id = '$studId'");
                    $sqlQ1->execute();
                    $result = $sqlQ1->fetch();
                    if($result['TotalScore'] <= $totalAverage){
                        $sqlShowAttempt = $con->prepare("SELECT `Attempts` FROM lessonattempts WHERE UserID = '$studId' AND Lesson = $lesson");

                        if($sqlShowAttempt->execute()){
                           
                            if($sqlShowAttempt->rowCount() > 0){
                                while($row = $sqlShowAttempt->fetch()){
                                    $countAttempt = $row['Attempts'];
                                    if($countAttempt == 0){
                                        $sqlUpdate45= $con->prepare("UPDATE lessonattempts SET Attempts = 1 WHERE UserID = '$studId' AND Lesson = $lesson");
                                        if($sqlUpdate45->execute()){
                                            $sqlUpdate2 = $con->prepare("UPDATE student_ans_attempt SET Attempt = 1 WHERE UserID = '$studId'");
                                            if($sqlUpdate2->execute()){
                                                return "Attempt1";
                                            }
                                        }  
                                    }
                                    else{
                                        $sqlUpdate45= $con->prepare("UPDATE lessonattempts SET Attempts = 2 WHERE UserID = '$studId' AND Lesson = $lesson");
                                        if($sqlUpdate45->execute()){
                                            $sqlUpdate2 = $con->prepare("UPDATE student_ans_attempt SET Attempt = 0 WHERE UserID = '$studId'");
                                            if($sqlUpdate2->execute()){
                                                $sqlUpdate49= $con->prepare("UPDATE lessonattempts SET Attempts = 0 WHERE UserID = '$studId' AND Lesson = $Nextlesson");
                                                if($sqlUpdate49->execute()){
                                                    return "Attempt2";
                                                }  
                                            }
                                        }  
                                    }
                                   
                                }
                            }

                            
                        } 
                    }else{
                        $sqlUpdate45= $con->prepare("UPDATE lessonattempts SET Attempts = 0 WHERE UserID = '$studId' AND Lesson = $Nextlesson");
                        if($sqlUpdate45->execute()){
                            $sqlUpdate47= $con->prepare("UPDATE lessonattempts SET Attempts = 2 WHERE UserID = '$studId' AND Lesson = $lesson");
                            if($sqlUpdate47->execute()){
                                return "YouPassed";
                            }
                        }  
                    }


                }

                
            }
        }
        
    }

?>