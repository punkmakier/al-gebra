<?php
    require_once 'config.php';

    class SubmitExam extends config{

        public function submitTestForm($pretest_id,$student_id,$TestType,$lesson,$concept,$letteranswer,$unique,$attempt){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("INSERT INTO student_answers (`Pretest_id`,`Student_id`,`TestType`,`Lesson`,`Concept`,`LetterAnswer`,`answer_id`,`Attempt`) 
            VALUES ('$pretest_id', '$student_id','$TestType','$lesson','$concept','$letteranswer','$unique','$attempt')");
            if($sqlQ->execute()){
                $sqlQuery1 = $con->prepare("SELECT `Letter`,'answer_id' FROM pretest_answerkey WHERE Pretest_id = '$pretest_id'");
                $sqlQuery1->execute();
                while($row = $sqlQuery1->fetch()){
                    if($row['Letter'] == $letteranswer){
                        $sqlQupdate = $con->prepare("UPDATE student_answers SET `Status` = 1 WHERE Student_id = '$student_id' AND Pretest_id='$pretest_id' AND answer_id = '".$unique."'");
                        $sqlQupdate->execute();
                        return true;
                    }else{
                        $sqlQupdate = $con->prepare("UPDATE student_answers SET `Status` = 0 WHERE Student_id = '$student_id' AND Pretest_id='$pretest_id' AND answer_id = '".$unique."'");
                        $sqlQupdate->execute();
                        return false;
                    }
                }
            }
        }







    }



?>