<?php

    require_once 'config.php';

    class SyncPostTest extends config{

        public function SyncNow($lesson){
            $con = $this->openConnection();
            $sqlDel = $con->prepare("DELETE FROM pretest_question WHERE Lesson = $lesson AND TestType='PostTest'");
            if($sqlDel->execute()){
                $sqlCheck = $con->prepare("SELECT * FROM pretest_question WHERE Lesson = $lesson AND TestType='PreTest'");
                if($sqlCheck->execute()){
                    while($row = $sqlCheck->fetch()){
                        $Pretest_id = $row['Pretest_id'];
                        $Question = $row['Question'];
                        $Concept = $row['Concept'];
                        $Lesson = $row['Lesson'];
                        $ChoiceA = $row['ChoiceA'];
                        $ChoiceB = $row['ChoiceB'];
                        $ChoiceC = $row['ChoiceC'];
                        $ChoiceD = $row['ChoiceD'];
                        $CorrectLetterAnswer = $row['CorrectLetterAnswer'];
                        $CorrectDescAnswer = $row['CorrectDescAnswer'];
                        $TestType = $row['TestType'];
    
                            
                        $sqlinsert = $con->prepare("INSERT INTO pretest_question (Pretest_id,Question,Concept,Lesson,ChoiceA,ChoiceB,ChoiceC,ChoiceD,CorrectLetterAnswer,CorrectDescAnswer,TestType)
                        VALUES ('$Pretest_id','$Question','$Concept','$Lesson','$ChoiceA','$ChoiceB','$ChoiceC','$ChoiceD','$CorrectLetterAnswer','$CorrectDescAnswer','PostTest')");
                       
                        $sqlinsert->execute();
     
                        
    
                    }
                }
            
                return true;
            }
        }
    }
?>