<?php

    require_once 'config.php';

    class ShowConcept extends config{

        function showConcept($lesson,$concept,$learningMethod,$attempt){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `FileName` FROM create_concept WHERE `Lesson` = $lesson AND `Concept` = $concept AND `LearningMethods` = $learningMethod AND `Attempt` = '$attempt'");
            if($sqlQ->execute()){
                if($sqlQ->rowCount() > 0){
                    while($row = $sqlQ->fetch()){
                        if($learningMethod == 1){
                            echo "<embed src='Lesson$lesson/".$row['FileName']."' type='application/pdf' width='100%' height = '750px'/>";
                        }
                        else if($learningMethod == 2){
                            echo "<iframe width='100%' height='750' src='".$row['FileName']."' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>";   
                        }
                        else if($learningMethod == 3){
                            
                            if (str_contains($row['FileName'], '<p>&lt;iframe')) { 
                                $str = "<p>&lt;iframe"; // the string to be replaced
                                $newStr = str_replace($str, '<iframe', $row['FileName']); // replace the string
                                $str2 = "&gt;&lt;/iframe&gt;</p>";
                                $newStr1 = str_replace($str2, '></iframe>', $newStr); // replace the string
                                echo $newStr1; 
                            }
                            if(str_contains($row['FileName'], '<figure')){
                                $str = "<figure"; 
                                $newStr = str_replace($str, '<div', $row['FileName']); 
                                $str1 = "<oembed"; 
                                $newStr1 = str_replace($str1, '<iframe width="560" height="315"', $newStr); 
                                $str2 = "url"; 
                                $newStr2 = str_replace($str2, 'src', $newStr1); 

                                $str3 = "></oembed></figure>"; 
                                $newStr3 = str_replace($str3, 'autoplay=1&mute=1></iframe></div>', $newStr2); 


                                echo $newStr3;
                            }else{
                                echo $row['FileName'];
                            }

                   
                        }
                    }
                }else{
                    echo "Empty result";
                }
            }
        }

        public function getCountConcept($lesson,$concept){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `Lesson` FROM create_concept WHERE `Lesson` = $lesson AND `Concept` = $concept AND `LearningMethods` IN (1,2,3)");
            $sqlQ->execute();
            if ($sqlQ->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }

        // function showConceptAudio($lesson,$concept,$learningMethod){
        //     $con = $this->openConnection();
        //     $sqlQ = $con->prepare("SELECT `FileName` FROM create_pretest WHERE `Lesson` = $lesson AND `Concept` = $concept AND `LearningMethods` = $learningMethod");
        //     if($sqlQ->execute()){
        //         while($row = $sqlQ->fetch()){
        //             if($row['FileName'].slice(-3) == "pdf"){
        //                 echo "<embed src='Lesson1/".$row['FileName']."' type='application/pdf' width='100%' height = '750px'/>";
        //             }
        //         }
        //     }
        // }


        // else{
        //     echo "<iframe width='100%' height='750px' 
        //     src='".$row['FileName']."'>
        //     </iframe>";
        // }

    }
?>