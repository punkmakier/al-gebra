<?php
    require_once 'config.php';

    class PreTestCreator extends config{


        public function setQuestion($pretest_id,$question,$lesson,$concept,$ChoiceA,$ChoiceB,$ChoiceC,$ChoiceD,$TestType){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("INSERT INTO pretest_question (`Pretest_id`,`Question`,`Lesson`,`Concept`,`ChoiceA`,`ChoiceB`,`ChoiceC`,`ChoiceD`,`TestType`) VALUES ('$pretest_id','$question','$lesson','$concept','$ChoiceA','$ChoiceB','$ChoiceC','$ChoiceD','$TestType')");
            if($sqlQ->execute()){
                return true;
            }else{
                return false;
            }
        }
        public function setUpdateQuestion($CorrectLetterAnswer, $CorrectDescAnswer, $pretest_id){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("UPDATE pretest_question SET `CorrectLetterAnswer` = '$CorrectLetterAnswer', `CorrectDescAnswer` = '$CorrectDescAnswer' WHERE `Pretest_id` = '$pretest_id'");
            if($sqlQ->execute()){
                return true;
            }else{
                return false;
            }
        }


        public function setAnswers($pretest_id,$letter,$letterDescription,$ChoicesId){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("INSERT INTO pretest_answer (`Pretest_id`,`Letter`,`Description`,`Choices_id`) VALUES ('$pretest_id','$letter','$letterDescription','$ChoicesId')");
            if($sqlQ->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function setAnswerKey($pretest_id,$ChoicesId,$letter,$description){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("INSERT INTO pretest_answerkey (`Pretest_id`,`Choices_id`,`Letter`,`Description`) VALUES ('$pretest_id','$ChoicesId','$letter','$description')");
            if($sqlQ->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function deleteQuestion($pretest_id){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("DELETE FROM pretest_question WHERE `Pretest_id` = '$pretest_id'");
            if($sqlQ->execute()){
                $sqlQ1 = $con->prepare("DELETE FROM pretest_answer WHERE `Pretest_id` = '$pretest_id'");
                $sqlQ1->execute();
                $sqlQ2 = $con->prepare("DELETE FROM pretest_answerkey WHERE `Pretest_id` = '$pretest_id'");
                $sqlQ2->execute();

                return true;
            }
        }
    }


?>