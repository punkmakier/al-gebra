<?php


require_once 'config.php';

class DisplayCheckpoint extends config{

    public function showTestExam($Lesson,$Concept,$UserID,$Attempt){
        $con = $this->openConnection();
        $sqlQ1 = $con->prepare("SELECT COUNT(*) AS CountCheck FROM `student_answers` WHERE Lesson = $Lesson AND Concept = $Concept AND Student_id = '$UserID' AND Status = 1 AND Attempt = '$Attempt'");
        $sqlQ1->execute();
        $row1 = $sqlQ1->fetch();

        $countQuestion = 1;

        if($row1['CountCheck'] <= 2){
            $sqlQEasy = $con->prepare("SELECT * FROM checkpoint_question WHERE Lesson = $Lesson AND Concept = $Concept AND Difficulty = 'Easy' LIMIT 2");
            $sqlQEasy->execute();
            if($sqlQEasy->rowCount() > 0){
                $count = 1;
                while($row = $sqlQEasy->fetch()){
                    $sqlCheck = $con->prepare("SELECT * FROM student_answer_checkpoint WHERE `checkpoint_id` = '".$row['checkpoint_id']."' AND `Student_id`='$UserID' AND `Attempt` = '$Attempt'");
                    $sqlCheck->execute();
                    if($sqlCheck->rowCount() == 0){
                    echo "<form id='submitCheckpointForm$countQuestion'>
                        <div class='card'>
                            <div class='card-header d-flex justify-content-between'><h5>Easy Question</h5><span>Question #: $countQuestion</span></div>
                        
                            <div class='card-body'>
                                <p class='card-text'>Question: ".$row['Question']."</p>
                            </div>
                            <div class='row mt-3 ms-3'>
                                ";
                                    echo "
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer A:</label>
                                            <h4 class='ms-4'>".$row['ChoiceA']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer B:</label>
                                            <h4 class='ms-4'>".$row['ChoiceB']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer C:</label>
                                            <h4 class='ms-4'>".$row['ChoiceC']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer D:</label>
                                            <h4 class='ms-4'>".$row['ChoiceD']."</h4>
                                        </div>
                                    </div>
                                    ";
                                

                    echo "
                            </div>
                            
                            <div class='row mt-3 ms-3'>
                                <input type='hidden' name='Difficulty' value='Easy'>
                                <input type='hidden' name='Lesson' value='$Lesson'>
                                <input type='hidden' name='Concept' value='$Concept'>
                                <input type='hidden' name='Attempt' value='$Attempt'>
                                <input type='hidden' name='checkpoint_id' value='".$row['checkpoint_id']."'>
                                <input type='hidden' name='userID' value='".$_SESSION['UserID']."'>

                                <div class='col-6'>
                                    <div class='mb-3'>
                                        <label for='username' class='form-label'>Answer</label>
                                        <input name='answer1' class='form-control' type='text' placeholder='Example: A' required min='0' maxlength='1'>
                                    </div>
                                </div>
                                <div class='col-3 mt-1'>
                                    <div class='mb-3 mt-3'>
                                        <input type='button' class='btn btn-success w-100 mb-5' id='submitCheckpointFormBtn$countQuestion' value='Submit'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>

                    ";
                    }
                    $countQuestion++;
                    
                }
            }



            $sqlQEasy = $con->prepare("SELECT * FROM checkpoint_question WHERE Lesson = $Lesson AND Concept = $Concept AND Difficulty = 'Average' LIMIT 2");
            $sqlQEasy->execute();
            if($sqlQEasy->rowCount() > 0){
                $count = 1;
                while($row = $sqlQEasy->fetch()){
                    $sqlCheck = $con->prepare("SELECT * FROM student_answer_checkpoint WHERE `checkpoint_id` = '".$row['checkpoint_id']."' AND `Student_id`='$UserID' AND `Attempt` = '$Attempt'");
                    $sqlCheck->execute();
                    if($sqlCheck->rowCount() == 0){
                    echo "<form id='submitCheckpointForm$countQuestion'>
                        <div class='card'>
                        <div class='card-header d-flex justify-content-between'><h5>Average Question</h5><span>Question #: $countQuestion</span></div>
                            <div class='card-body'>
                                <p class='card-text'>Question: ".$row['Question']."</p>
                            </div>
                            <div class='row mt-3 ms-3'>
                                ";
                                    echo "
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer A:</label>
                                            <h4 class='ms-4'>".$row['ChoiceA']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer B:</label>
                                            <h4 class='ms-4'>".$row['ChoiceB']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer C:</label>
                                            <h4 class='ms-4'>".$row['ChoiceC']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer D:</label>
                                            <h4 class='ms-4'>".$row['ChoiceD']."</h4>
                                        </div>
                                    </div>
                                    ";
                                

                    echo "
                            </div>
                            
                            <div class='row mt-3 ms-3'>
                                <input type='hidden' name='Difficulty' value='Average'>
                                <input type='hidden' name='Lesson' value='$Lesson'>
                                <input type='hidden' name='Concept' value='$Concept'>
                                <input type='hidden' name='Attempt' value='$Attempt'>
                                <input type='hidden' name='checkpoint_id' value='".$row['checkpoint_id']."'>
                                <input type='hidden' name='userID' value='".$_SESSION['UserID']."'>

                                <div class='col-6'>
                                    <div class='mb-3'>
                                        <label for='username' class='form-label'>Answer</label>
                                        <input name='answer1' class='form-control' type='text' placeholder='Example: A' required min='0' maxlength='1'>
                                    </div>
                                </div>
                                <div class='col-3 mt-1'>
                                    <div class='mb-3 mt-3'>
                                        <input type='button' class='btn btn-success w-100 mb-5' id='submitCheckpointFormBtn$countQuestion' value='Submit'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>

                    ";
                    }
                    $countQuestion++;
                }
            }

            $sqlQEasy = $con->prepare("SELECT * FROM checkpoint_question WHERE Lesson = $Lesson AND Concept = $Concept AND Difficulty = 'Difficult' LIMIT 1");
            $sqlQEasy->execute();
            if($sqlQEasy->rowCount() > 0){
                $count = 1;
                while($row = $sqlQEasy->fetch()){
                    $sqlCheck = $con->prepare("SELECT * FROM student_answer_checkpoint WHERE `checkpoint_id` = '".$row['checkpoint_id']."' AND `Student_id`='$UserID' AND `Attempt` = '$Attempt'");
                    $sqlCheck->execute();
                    if($sqlCheck->rowCount() == 0){
                    echo "<form id='submitCheckpointForm$countQuestion'>
                        <div class='card'>
                        <div class='card-header d-flex justify-content-between'><h5>Difficult Question</h5><span>Question #: $countQuestion</span></div>
                            <div class='card-body'>
                                <p class='card-text'>Question: ".$row['Question']."</p>
                            </div>
                            <div class='row mt-3 ms-3'>
                                ";
                                    echo "
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer A:</label>
                                            <h4 class='ms-4'>".$row['ChoiceA']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer B:</label>
                                            <h4 class='ms-4'>".$row['ChoiceB']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer C:</label>
                                            <h4 class='ms-4'>".$row['ChoiceC']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer D:</label>
                                            <h4 class='ms-4'>".$row['ChoiceD']."</h4>
                                        </div>
                                    </div>
                                    ";
                                

                    echo "
                            </div>
                            
                            <div class='row mt-3 ms-3'>
                                <input type='hidden' name='Difficulty' value='Difficult'>
                                <input type='hidden' name='Lesson' value='$Lesson'>
                                <input type='hidden' name='Concept' value='$Concept'>
                                <input type='hidden' name='Attempt' value='$Attempt'>
                                <input type='hidden' name='checkpoint_id' value='".$row['checkpoint_id']."'>
                                <input type='hidden' name='userID' value='".$_SESSION['UserID']."'>

                                <div class='col-6'>
                                    <div class='mb-3'>
                                        <label for='username' class='form-label'>Answer</label>
                                        <input name='answer1' class='form-control' type='text' placeholder='Example: A' required min='0' maxlength='1'>
                                    </div>
                                </div>
                                <div class='col-3 mt-1'>
                                    <div class='mb-3 mt-3'>
                                        <input type='button' class='btn btn-success w-100 mb-5' id='submitCheckpointFormBtn$countQuestion' value='Submit'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>

                    ";
                    }
                    $sqlQEasy5 = $con->prepare("SELECT * FROM student_answer_checkpoint WHERE `checkpoint_id` = '".$row['checkpoint_id']."' AND `Student_id`='$UserID' AND `Attempt` = $Attempt ORDER BY id DESC LIMIT 1");
                    $sqlQEasy5->execute();
                    $stmt = $sqlQEasy5->fetch();
                    if($sqlQEasy5->rowCount() > 0){
                        if($stmt['Status'] == 0){
                            echo "<form id='submitCheckpointForm$countQuestion'>
                            <div class='card'>
                            <div class='card-header d-flex justify-content-between'><h5>Difficult Question</h5><span>Question #: $countQuestion</span></div>
                                <div class='card-body'>
                                    <p class='card-text'>Question: ".$row['Question']."</p>
                                </div>
                                <div class='row mt-3 ms-3'>
                                    ";
                                        echo "
                                        <div class='col-6'>
                                            <div class='mb-3'>
                                                <label class='form-label'>Answer A:</label>
                                                <h4 class='ms-4'>".$row['ChoiceA']."</h4>
                                            </div>
                                        </div>
                                        <div class='col-6'>
                                            <div class='mb-3'>
                                                <label class='form-label'>Answer B:</label>
                                                <h4 class='ms-4'>".$row['ChoiceB']."</h4>
                                            </div>
                                        </div>
                                        <div class='col-6'>
                                            <div class='mb-3'>
                                                <label class='form-label'>Answer C:</label>
                                                <h4 class='ms-4'>".$row['ChoiceC']."</h4>
                                            </div>
                                        </div>
                                        <div class='col-6'>
                                            <div class='mb-3'>
                                                <label class='form-label'>Answer D:</label>
                                                <h4 class='ms-4'>".$row['ChoiceD']."</h4>
                                            </div>
                                        </div>
                                        ";
                                    
    
                        echo "
                                </div>
                                
                                <div class='row mt-3 ms-3'>
                                    <input type='hidden' name='Difficulty' value='Difficult'>
                                    <input type='hidden' name='Lesson' value='$Lesson'>
                                    <input type='hidden' name='Concept' value='$Concept'>
                                    <input type='hidden' name='Attempt' value='$Attempt'>
                                    <input type='hidden' name='checkpoint_id' value='".$row['checkpoint_id']."'>
                                    <input type='hidden' name='userID' value='".$_SESSION['UserID']."'>
    
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label for='username' class='form-label'>Answer</label>
                                            <input name='answer1' class='form-control' type='text' placeholder='Example: A' required min='0' maxlength='1'>
                                        </div>
                                    </div>
                                    <div class='col-3 mt-1'>
                                        <div class='mb-3 mt-3'>
                                            <input type='button' class='btn btn-success w-100 mb-5' id='submitCheckpointFormBtn$countQuestion' value='Submit'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
    
                        ";
                        }
    
                        }
                        

                    $countQuestion++;
                }
            }
        }




        // 3 SCORE AND 4
        if($row1['CountCheck'] >= 3){
            $sqlQEasy = $con->prepare("SELECT * FROM checkpoint_question WHERE Lesson = $Lesson AND Concept = $Concept AND Difficulty = 'Easy' LIMIT 1");
            $sqlQEasy->execute();
            if($sqlQEasy->rowCount() > 0){
                $count = 1;
                while($row = $sqlQEasy->fetch()){
                    $sqlCheck = $con->prepare("SELECT * FROM student_answer_checkpoint WHERE `checkpoint_id` = '".$row['checkpoint_id']."' AND `Student_id`='$UserID' AND `Attempt` = '$Attempt'");
                    $sqlCheck->execute();
                    if($sqlCheck->rowCount() == 0){
                    echo "<form id='submitCheckpointForm$countQuestion'>
                        <div class='card'>
                        <div class='card-header d-flex justify-content-between'><h5>Easy Question</h5><span>Question #: $countQuestion</span></div>
                            <div class='card-body'>
                                <p class='card-text'>Question: ".$row['Question']."</p>
                            </div>
                            <div class='row mt-3 ms-3'>
                                ";
                                    echo "
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer A:</label>
                                            <h4 class='ms-4'>".$row['ChoiceA']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer B:</label>
                                            <h4 class='ms-4'>".$row['ChoiceB']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer C:</label>
                                            <h4 class='ms-4'>".$row['ChoiceC']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer D:</label>
                                            <h4 class='ms-4'>".$row['ChoiceD']."</h4>
                                        </div>
                                    </div>
                                    ";
                                

                    echo "
                            </div>
                            
                            <div class='row mt-3 ms-3'>
                                <input type='hidden' name='Difficulty' value='Easy'>
                                <input type='hidden' name='Lesson' value='$Lesson'>
                                <input type='hidden' name='Concept' value='$Concept'>
                                <input type='hidden' name='Attempt' value='$Attempt'>
                                <input type='hidden' name='checkpoint_id' value='".$row['checkpoint_id']."'>
                                <input type='hidden' name='userID' value='".$_SESSION['UserID']."'>

                                <div class='col-6'>
                                    <div class='mb-3'>
                                        <label for='username' class='form-label'>Answer</label>
                                        <input name='answer1' class='form-control' type='text' placeholder='Example: A' required min='0' maxlength='1'>
                                    </div>
                                </div>
                                <div class='col-3 mt-1'>
                                    <div class='mb-3 mt-3'>
                                        <input type='button' class='btn btn-success w-100 mb-5' id='submitCheckpointFormBtn$countQuestion' value='Submit'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>

                    ";
                    }
                    $countQuestion++;
                }
            }



            $sqlQEasy = $con->prepare("SELECT * FROM checkpoint_question WHERE Lesson = $Lesson AND Concept = $Concept AND Difficulty = 'Average' LIMIT 1");
            $sqlQEasy->execute();
            if($sqlQEasy->rowCount() > 0){
                $count = 1;
                while($row = $sqlQEasy->fetch()){
                    $sqlCheck = $con->prepare("SELECT * FROM student_answer_checkpoint WHERE `checkpoint_id` = '".$row['checkpoint_id']."' AND `Student_id`='$UserID' AND `Attempt` = '$Attempt'");
                    $sqlCheck->execute();
                    if($sqlCheck->rowCount() == 0){
                    echo "<form id='submitCheckpointForm$countQuestion'>
                        <div class='card'>
                        <div class='card-header d-flex justify-content-between'><h5>Average Question</h5><span>Question #: $countQuestion</span></div>
                            <div class='card-body'>
                                <p class='card-text'>Question: ".$row['Question']."</p>
                            </div>
                            <div class='row mt-3 ms-3'>
                                ";
                                    echo "
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer A:</label>
                                            <h4 class='ms-4'>".$row['ChoiceA']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer B:</label>
                                            <h4 class='ms-4'>".$row['ChoiceB']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer C:</label>
                                            <h4 class='ms-4'>".$row['ChoiceC']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer D:</label>
                                            <h4 class='ms-4'>".$row['ChoiceD']."</h4>
                                        </div>
                                    </div>
                                    ";
                                

                    echo "
                            </div>
                            
                            <div class='row mt-3 ms-3'>
                                <input type='hidden' name='Difficulty' value='Average'>
                                <input type='hidden' name='Lesson' value='$Lesson'>
                                <input type='hidden' name='Concept' value='$Concept'>
                                <input type='hidden' name='Attempt' value='$Attempt'>
                                <input type='hidden' name='checkpoint_id' value='".$row['checkpoint_id']."'>
                                <input type='hidden' name='userID' value='".$_SESSION['UserID']."'>

                                <div class='col-6'>
                                    <div class='mb-3'>
                                        <label for='username' class='form-label'>Answer</label>
                                        <input name='answer1' class='form-control' type='text' placeholder='Example: A' required min='0' maxlength='1'>
                                    </div>
                                </div>
                                <div class='col-3 mt-1'>
                                    <div class='mb-3 mt-3'>
                                        <input type='button' class='btn btn-success w-100 mb-5' id='submitCheckpointFormBtn$countQuestion' value='Submit'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>

                    ";
                    }
                    $countQuestion++;
                }
            }

            $sqlQEasy = $con->prepare("SELECT * FROM checkpoint_question WHERE Lesson = $Lesson AND Concept = $Concept AND Difficulty = 'Difficult' LIMIT 3");
            $sqlQEasy->execute();
            if($sqlQEasy->rowCount() > 0){
                $count = 1;
                while($row = $sqlQEasy->fetch()){
                    $sqlCheck = $con->prepare("SELECT * FROM student_answer_checkpoint WHERE `checkpoint_id` = '".$row['checkpoint_id']."' AND `Student_id`='$UserID' AND `Attempt` = '$Attempt'");
                    $sqlCheck->execute();
                    if($sqlCheck->rowCount() == 0){
                    echo "<form id='submitCheckpointForm$countQuestion'>
                        <div class='card'>
                        <div class='card-header d-flex justify-content-between'><h5>Difficult Question</h5><span>Question #: $countQuestion</span></div>
                            <div class='card-body'>
                                <p class='card-text'>Question: ".$row['Question']."</p>
                            </div>
                            <div class='row mt-3 ms-3'>
                                ";
                                    echo "
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer A:</label>
                                            <h4 class='ms-4'>".$row['ChoiceA']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer B:</label>
                                            <h4 class='ms-4'>".$row['ChoiceB']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer C:</label>
                                            <h4 class='ms-4'>".$row['ChoiceC']."</h4>
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class='mb-3'>
                                            <label class='form-label'>Answer D:</label>
                                            <h4 class='ms-4'>".$row['ChoiceD']."</h4>
                                        </div>
                                    </div>
                                    ";
                                

                    echo "
                            </div>
                            
                            <div class='row mt-3 ms-3'>
                                <input type='hidden' name='Difficulty' value='Difficult'>
                                <input type='hidden' name='Lesson' value='$Lesson'>
                                <input type='hidden' name='Concept' value='$Concept'>
                                <input type='hidden' name='Attempt' value='$Attempt'>
                                <input type='hidden' name='checkpoint_id' value='".$row['checkpoint_id']."'>
                                <input type='hidden' name='userID' value='".$_SESSION['UserID']."'>

                                <div class='col-6'>
                                    <div class='mb-3'>
                                        <label for='username' class='form-label'>Answer</label>
                                        <input name='answer1' class='form-control' type='text' placeholder='Example: A' required min='0' maxlength='1'>
                                    </div>
                                </div>
                                <div class='col-3 mt-1'>
                                    <div class='mb-3 mt-3'>
                                        <input type='button' class='btn btn-success w-100 mb-5' id='submitCheckpointFormBtn$countQuestion' value='Submit'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>

                    ";
                    }
                    $countQuestion++;
                }
            }
        }
    }




    public function checkAttempt($UserID){
        $con = $this->openConnection();
        $sqlQ = $con->prepare("SELECT `Attempt` FROM student_ans_attempt WHERE `UserID` = '$UserID'");
        $sqlQ->execute();
        $res = $sqlQ->fetch();
        return $res['Attempt'];
    }






    public function displayAllCheckpointQuestion(){
        $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT * FROM checkpoint_question");
            $table = "";
            $table .= "<table class='table table-striped' id='thisTable'>
                <thead class='bg-primary text-white'>
                    <tr>
                        <td>Lesson</td>
                        <td>Concept</td>
                        <td>Question</td>
                        <td>Choice: A</td>
                        <td>Choice: B</td>
                        <td>Choice: C</td>
                        <td>Choice: D</td>
                        <td>Answer Key</td>
                        <td>Difficulty</td>
                        <td>Date Created</td>
                        <td>Action</td>
                    </tr>
                </thead><tbody>
                ";
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    $table .= "<tr>
                        <td>".$row['Lesson']."</td>
                        <td>".$row['Concept']."</td>
                        <td>".$row['Question']."</td>
                        <td>".$row['ChoiceA']."</td>
                        <td>".$row['ChoiceB']."</td>
                        <td>".$row['ChoiceC']."</td>
                        <td>".$row['ChoiceD']."</td>
                        <td>".$row['CorrectLetterAnswer'].". ".$row['CorrectDescAnswer']."</td>
                        <td>".$row['Difficulty']."</td>
                        <td>".$row['DateAdded']."</td>
                        <td>
                            <a class='btn btn-danger deleteQuestionCheckpoint' id='".$row['checkpoint_id']."'>Delete</a>
                        </td>
                    
                    </tr>";
                }
            }

            $table .= "</tbody></table>";

            echo $table;
    }
}



?>


