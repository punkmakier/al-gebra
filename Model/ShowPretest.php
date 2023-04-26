<?php

    require_once 'config.php';

    class ShowPretest extends config{

        function showPreTestFunc_question(){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT Pretest_id, Lesson, Concept, Question,ChoiceA,ChoiceB,ChoiceC,ChoiceD,CorrectLetterAnswer,CorrectDescAnswer,DateAdded,TestType FROM pretest_question");
            $table = "";
            $table .= "<table class='table table-striped' id='thisTable'>
                <thead class='bg-primary text-white'>
                    <tr>
                        <td>Test Type</td>
                        <td>Lesson</td>
                        <td>Concept</td>
                        <td>Question</td>
                        <td>Choice: A</td>
                        <td>Choice: B</td>
                        <td>Choice: C</td>
                        <td>Choice: D</td>
                        <td>Answer Key</td>
                        <td>Date Created</td>
                        <td>Action</td>
                    </tr>
                </thead><tbody>
                ";
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    $table .= "<tr>
                        <td>".$row['TestType']."</td>
                        <td>".$row['Lesson']."</td>
                        <td>".$row['Concept']."</td>
                        <td>".$row['Question']."</td>
                        <td>".$row['ChoiceA']."</td>
                        <td>".$row['ChoiceB']."</td>
                        <td>".$row['ChoiceC']."</td>
                        <td>".$row['ChoiceD']."</td>
                        <td>".$row['CorrectLetterAnswer'].". ".$row['CorrectDescAnswer']."</td>
                        <td>".$row['DateAdded']."</td>
                        <td>
                            <a class='btn btn-danger deleteQuestion' id='".$row['Pretest_id']."'>Delete</a>
                        </td>
                    
                    </tr>";
                }
            }

            $table .= "</tbody></table>";

            echo $table;
        }

    }

?>