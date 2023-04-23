<?php
    require_once 'config.php';

    class CheckpointCreator extends config{


        public function setQuestion($checkpointID,$question,$lesson,$concept,$ChoiceA,$ChoiceB,$ChoiceC,$ChoiceD,$Difficulty){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("INSERT INTO checkpoint_question (`checkpoint_id`,`Question`,`Lesson`,`Concept`,`ChoiceA`,`ChoiceB`,`ChoiceC`,`ChoiceD`,`Difficulty`) VALUES ('$checkpointID','$question','$lesson','$concept','$ChoiceA','$ChoiceB','$ChoiceC','$ChoiceD','$Difficulty')");
            if($sqlQ->execute()){
                return true;
            }else{
                return false;
            }
        }
        public function setUpdateQuestion($CorrectLetterAnswer, $CorrectDescAnswer, $checkpointID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("UPDATE checkpoint_question SET `CorrectLetterAnswer` = '$CorrectLetterAnswer', `CorrectDescAnswer` = '$CorrectDescAnswer' WHERE `checkpoint_id` = '$checkpointID'");
            if($sqlQ->execute()){
                return true;
            }else{
                return false;
            }
        }


        public function setAnswers($choicesID,$letter,$letterDescription,$ChoicesId){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("INSERT INTO checkpoint_answer (`checkpoint_id`,`Letter`,`Description`,`choices_id`) VALUES ('$choicesID','$letter','$letterDescription','$ChoicesId')");
            if($sqlQ->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function setAnswerKey($checkpoint_id,$ChoicesId,$letter,$description){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("INSERT INTO checkpoint_answerkey (`checkpoint_id`,`choices_id`,`Letter`,`Description`) VALUES ('$checkpoint_id','$ChoicesId','$letter','$description')");
            if($sqlQ->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function deleteQuestion($checkpoint_id){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("DELETE FROM checkpoint_question WHERE `checkpoint_id` = '$checkpoint_id'");
            if($sqlQ->execute()){
                $sqlQ1 = $con->prepare("DELETE FROM checkpoint_answer WHERE `checkpoint_id` = '$checkpoint_id'");
                $sqlQ1->execute();
                $sqlQ2 = $con->prepare("DELETE FROM checkpoint_answerkey WHERE `checkpoint_id` = '$checkpoint_id'");
                $sqlQ2->execute();

                return true;
            }
        }
    }


?>