<?php
    require_once 'config.php';

    class SubmitCheckpoint extends config{

        public function submitCheckForm($checkpoint_id,$student_id,$difficult,$lesson,$concept,$letteranswer,$unique,$attempt){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("INSERT INTO student_answer_checkpoint (`checkpoint_id`,`Student_id`,`Difficulty`,`Lesson`,`Concept`,`LetterAnswer`,`answer_id`,`Attempt`) 
            VALUES ('$checkpoint_id', '$student_id','$difficult','$lesson','$concept','$letteranswer','$unique','$attempt')");
            if($sqlQ->execute()){
                $sqlQuery1 = $con->prepare("SELECT `Letter`,'answer_id' FROM checkpoint_answerkey WHERE checkpoint_id = '$checkpoint_id'");
                $sqlQuery1->execute();
                while($row = $sqlQuery1->fetch()){
                    if($row['Letter'] == $letteranswer){
                        $sqlQupdate = $con->prepare("UPDATE student_answer_checkpoint SET `Status` = 1 WHERE Student_id = '$student_id' AND checkpoint_id='$checkpoint_id' AND answer_id = '".$unique."'");
                        $sqlQupdate->execute();
                        return true;
                    }else{
                        $sqlQupdate = $con->prepare("UPDATE student_answer_checkpoint SET `Status` = 0 WHERE Student_id = '$student_id' AND checkpoint_id='$checkpoint_id' AND answer_id = '".$unique."'");
                        $sqlQupdate->execute();
                        return false;
                    }
                }
            }
        }







    }



?>