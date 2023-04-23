<?php
    require_once 'config.php';

    class ConceptCreator extends config{

        public function createConcept($cid, $lesson,$concept,$learningMethod,$Filename,$attempt){
            $con = $this->openConnectioN();
            $sqlQ = $con->prepare("INSERT INTO create_concept (`Concept_id`, `Lesson`, `Concept`, `LearningMethods`, `FileName`,`Attempt`) VALUES ('$cid', '$lesson', '$concept', '$learningMethod','$Filename','$attempt')");
            if($sqlQ->execute()){
                return true;
            }else{
                return false;
            }
        }
    }


?>