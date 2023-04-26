<?php

    require_once 'config.php';

    class DisplayDashboard extends config{

        public function StudentHistory($UserID){

            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT sa.TestType, sa.Lesson, sa.Concept, sa.LetterAnswer, sa.Status AS Status, sa.Attempt, sa.DateCreated, pq.Question, CONCAT(pq.CorrectLetterAnswer". ",pq.CorrectDescAnswer)  AS CorrectAnswer FROM `student_answers` AS sa INNER JOIN pretest_question AS pq ON sa.Pretest_id = pq.Pretest_id WHERE sa.Student_id = '$UserID'");
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    $TesType = $row['TestType'];
                    $Lesson = $row['Lesson'];
                    $Concept = $row['Concept'];
                    $Question = $row['Question'];
                    $CorrectAnswer = $row['CorrectAnswer'];
                    $YourAnswer = $row['LetterAnswer'];
                    $Status = ($row['Status'] == 1 ? "Correct" : "Wrong" );
                    $Attempt = $row['Attempt'];
                    $DateAnswered = $row['DateCreated'];
                   
                    echo "
                        <tr>
                            <td>{$TesType}</td>
                            <td>{$Lesson}</td>
                            <td>{$Concept}</td>
                            <td>{$Question}</td>
                            <td>{$CorrectAnswer}</td>
                            <td>{$YourAnswer}</td>
                            <td>{$Status}</td>
                            <td>{$Attempt}</td>
                            <td>{$DateAnswered}</td>
                        </tr>
                    ";
                }
            }
        }


        public function displayLesson($Lesson,$UserID){
            $con = $this->openConnection();
            $sql = $con->prepare("SELECT LearningTool FROM `aitool` WHERE user_id = '$UserID' AND Lesson = $Lesson GROUP BY LearningTool ORDER BY TotalTime DESC LIMIT 1");
            if($sql->execute()){
                if($sql->rowCount() > 0){
                    while($row = $sql->fetch()){
                        echo $row['LearningTool'];
                    }
                }else{
                    echo "N/A";
                }
            }
        }



        public function displayCorrectAnswers($Lesson,$UserID,$attempt,$TestType){
            $con = $this->openConnection();
            $sql = $con->prepare("SELECT COUNT(*) AS CorrectAnswer FROM student_answers WHERE TestType = '$TestType' AND Lesson = $Lesson AND Status = 1 AND Attempt = $attempt AND Student_id = '$UserID'");
            if($sql->execute()){
                if($sql->rowCount() > 0){
                    while($row = $sql->fetch()){
                        return $row['CorrectAnswer'];
                    }
                }else{
                    return "N/A";
                }
            }
        }


        public function displayTeachertable(){
            $con = $this->openConnection();
            $sql = $con->prepare("SELECT * FROM `aitool` GROUP BY user_id");
            if($sql->execute()){
                if($sql->rowCount() > 0){
                    $table = "";
                    while($row = $sql->fetch()){
                        $studID = $row['user_id'];
                        $table .= "<tr>
                                <td>{$studID}</td>";
                        $learningTool = $row['LearningTool'];
                        $sql1 = $con->prepare("SELECT * FROM `aitool` WHERE user_id = '{$studID}' GROUP BY LearningTool ORDER BY LearningTool ASC");
                        if($sql1->execute()){
                            $row1 = $sql1->fetch();

                            $total = $row1['TotalTime'];
                            $learningType = $row1['LearningTool'];

                            $sqlQ4 = $con->prepare("SELECT MAX(TotalTime) as TotalTimeAudio FROM aitool WHERE LearningTool = 'Audio' AND user_id = '{$studID}'");
                            $sqlQ4->execute();
                            $row4 = $sqlQ4->fetch();
                            $sqlQ5 = $con->prepare("SELECT MAX(TotalTime) as TotalTimeReading FROM aitool WHERE LearningTool = 'Reading' AND user_id = '{$studID}'");
                            $sqlQ5->execute();
                            $row5 = $sqlQ5->fetch();
                            $sqlQ6 = $con->prepare("SELECT MAX(TotalTime) as TotalTimeVisual FROM aitool WHERE LearningTool = 'Visual' AND user_id = '{$studID}'");
                            $sqlQ6->execute();
                            $row6 = $sqlQ6->fetch();

                            $table .= "
                                    <td class='text-center'>".$row4['TotalTimeAudio']."</td>
                                    <td class='text-center'>".$row5['TotalTimeReading']."</td>
                                    <td class='text-center'>".$row6['TotalTimeVisual']."</td>
                            ";
                            
                                
                            
                        }
                     
                        $table .= "<td class='text-center'>{$learningTool}</td>
                        </tr>";
                    }
                    return $table;
                }

            }
        }

        public function displayTotalStudent(){
            $con = $this->openConnection();
            $sql = $con->prepare("SELECT COUNT(*) AS Count FROM `users` WHERE user_role = 'Student'");
            if($sql->execute()){
                if($sql->rowCount() > 0){
                    $count = $sql->fetch();
                    echo $count['Count'];
                }
            }else{
                echo "0";
            }
        }



    }



?>