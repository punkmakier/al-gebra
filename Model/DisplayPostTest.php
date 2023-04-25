<?php


require_once 'config.php';

class DisplayPostTest extends config{

    public function showTestExam($TestType,$Lesson,$UserID,$Attempt){
        $con = $this->openConnection();
        $sqlQ = $con->prepare("SELECT * FROM pretest_question WHERE Lesson = $Lesson AND TestType = '$TestType' AND Concept = 1 LIMIT 4");
        $sqlQ->execute();
        $countQuestion = 1;

        if($sqlQ->rowCount() > 0){
            $count = 1;
            while($row = $sqlQ->fetch()){
                $sqlCheck = $con->prepare("SELECT * FROM student_answers WHERE `Pretest_id` = '".$row['Pretest_id']."' AND `Student_id`='$UserID' AND `Attempt` = '$Attempt'");
                $sqlCheck->execute();
                if($sqlCheck->rowCount() == 0){
                    echo "<form id='submitExamFormConcept1$count'>
                    <div class='card'>
                    <div class='card-header d-flex justify-content-between'><h5>Random Concept</h5><span>Question #: $countQuestion</span></div>
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
                            <input type='hidden' name='TestType' value='PostTest'>
                            <input type='hidden' name='Lesson' value='$Lesson'>
                            <input type='hidden' name='Concept' value='".$row['Concept']."'>
                            <input type='hidden' name='Attempt' value='$Attempt'>
                            <input type='hidden' name='pretest_id' value='".$row['Pretest_id']."'>
                            <input type='hidden' name='userID' value='".$_SESSION['UserID']."'>
                            <div class='col-6'>
                                <div class='mb-3'>
                                    <label for='username' class='form-label'>Answer</label>
                                    <input name='answer1' class='form-control' type='text' placeholder='Example: A' required min='0' maxlength='1'>
                                </div>
                            </div>
                            <div class='col-3 mt-1'>
                                <div class='mb-3 mt-3'>
                                    <input type='button' class='btn btn-success w-100 mb-5' id='submitTestFormConcept1$countQuestion' value='Submit'>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                ";
                }

                $countQuestion++;
                $count++;
                
            }
        }


        $sqlQ = $con->prepare("SELECT * FROM pretest_question WHERE Lesson = $Lesson AND TestType = '$TestType' AND Concept = 2 LIMIT 4");
        $sqlQ->execute();

        if($sqlQ->rowCount() > 0){
            $count = 1;

            while($row = $sqlQ->fetch()){
                $sqlCheck = $con->prepare("SELECT * FROM student_answers WHERE `Pretest_id` = '".$row['Pretest_id']."' AND `Student_id`='$UserID' AND `Attempt` = '$Attempt'");
                $sqlCheck->execute();
                if($sqlCheck->rowCount() == 0){
                    echo "<form id='submitExamFormConcept2$count'>
                    <div class='card'>
                    <div class='card-header d-flex justify-content-between'><h5>Random Concept</h5><span>Question #: $countQuestion</span></div>
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
                            <input type='hidden' name='TestType' value='PostTest'>
                            <input type='hidden' name='Lesson' value='$Lesson'>
                            <input type='hidden' name='Concept' value='".$row['Concept']."'>
                            <input type='hidden' name='Attempt' value='$Attempt'>
                            <input type='hidden' name='pretest_id' value='".$row['Pretest_id']."'>
                            <input type='hidden' name='userID' value='".$_SESSION['UserID']."'>
                            <div class='col-6'>
                                <div class='mb-3'>
                                    <label for='username' class='form-label'>Answer</label>
                                    <input name='answer1' class='form-control' type='text' placeholder='Example: A' required min='0' maxlength='1'>
                                </div>
                            </div>
                            <div class='col-3 mt-1'>
                                <div class='mb-3 mt-3'>
                                    <input type='button' class='btn btn-success w-100 mb-5' id='submitTestFormConcept2$count' value='Submit'>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                ";
                }

                $countQuestion++;
                $count++;
                
            }
        }
        $sqlQ = $con->prepare("SELECT * FROM pretest_question WHERE Lesson = $Lesson AND TestType = '$TestType' AND Concept = 3 LIMIT 4");
        $sqlQ->execute();

        if($sqlQ->rowCount() > 0){
            $count = 1;
            while($row = $sqlQ->fetch()){
                $sqlCheck = $con->prepare("SELECT * FROM student_answers WHERE `Pretest_id` = '".$row['Pretest_id']."' AND `Student_id`='$UserID' AND `Attempt` = '$Attempt'");
                $sqlCheck->execute();
                if($sqlCheck->rowCount() == 0){
                    echo "<form id='submitExamFormConcept3$count'>
                    <div class='card'>
                    <div class='card-header d-flex justify-content-between'><h5>Random Concept</h5><span>Question #: $countQuestion</span></div>
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
                            <input type='hidden' name='TestType' value='PostTest'>
                            <input type='hidden' name='Lesson' value='$Lesson'>
                            <input type='hidden' name='Concept' value='".$row['Concept']."'>
                            <input type='hidden' name='Attempt' value='$Attempt'>
                            <input type='hidden' name='pretest_id' value='".$row['Pretest_id']."'>
                            <input type='hidden' name='userID' value='".$_SESSION['UserID']."'>
                            <div class='col-6'>
                                <div class='mb-3'>
                                    <label for='username' class='form-label'>Answer</label>
                                    <input name='answer1' class='form-control' type='text' placeholder='Example: A' required min='0' maxlength='1'>
                                </div>
                            </div>
                            <div class='col-3 mt-1'>
                                <div class='mb-3 mt-3'>
                                    <input type='button' class='btn btn-success w-100 mb-5' id='submitTestFormConcept3$count' value='Submit'>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                ";
                }

                $countQuestion++;
                $count++;
            }
        }

        $sqlQ = $con->prepare("SELECT * FROM pretest_question WHERE Lesson = $Lesson AND TestType = '$TestType' AND Concept = 4 LIMIT 4");
        $sqlQ->execute();

        if($sqlQ->rowCount() > 0){
            $count = 1;
            while($row = $sqlQ->fetch()){
                $sqlCheck = $con->prepare("SELECT * FROM student_answers WHERE `Pretest_id` = '".$row['Pretest_id']."' AND `Student_id`='$UserID' AND `Attempt` = '$Attempt'");
                $sqlCheck->execute();
                if($sqlCheck->rowCount() == 0){
                    echo "<form id='submitExamFormConcept4$count'>
                    <div class='card'>
                    <div class='card-header d-flex justify-content-between'><h5>Random Concept</h5><span>Question #: $countQuestion</span></div>
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
                            <input type='hidden' name='TestType' value='PostTest'>
                            <input type='hidden' name='Lesson' value='$Lesson'>
                            <input type='hidden' name='Concept' value='".$row['Concept']."'>
                            <input type='hidden' name='Attempt' value='$Attempt'>
                            <input type='hidden' name='pretest_id' value='".$row['Pretest_id']."'>
                            <input type='hidden' name='userID' value='".$_SESSION['UserID']."'>
                            <div class='col-6'>
                                <div class='mb-3'>
                                    <label for='username' class='form-label'>Answer</label>
                                    <input name='answer1' class='form-control' type='text' placeholder='Example: A' required min='0' maxlength='1'>
                                </div>
                            </div>
                            <div class='col-3 mt-1'>
                                <div class='mb-3 mt-3'>
                                    <input type='button' class='btn btn-success w-100 mb-5' id='submitTestFormConcept4$count' value='Submit'>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                ";
                }

                $countQuestion++;
                $count++;
                
            }
        }

        $sqlQ = $con->prepare("SELECT * FROM pretest_question WHERE Lesson = $Lesson AND TestType = '$TestType' AND Concept = 5 LIMIT 4");
        $sqlQ->execute();

        if($sqlQ->rowCount() > 0){
            $count = 1;
            while($row = $sqlQ->fetch()){
                $sqlCheck = $con->prepare("SELECT * FROM student_answers WHERE `Pretest_id` = '".$row['Pretest_id']."' AND `Student_id`='$UserID' AND `Attempt` = '$Attempt'");
                $sqlCheck->execute();
                if($sqlCheck->rowCount() == 0){
                    echo "<form id='submitExamFormConcept5$count'>
                    <div class='card'>
                    <div class='card-header d-flex justify-content-between'><h5>Random Concept</h5><span>Question #: $countQuestion</span></div>
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
                            <input type='hidden' name='TestType' value='PostTest'>
                            <input type='hidden' name='Lesson' value='$Lesson'>
                            <input type='hidden' name='Concept' value='".$row['Concept']."'>
                            <input type='hidden' name='Attempt' value='$Attempt'>
                            <input type='hidden' name='pretest_id' value='".$row['Pretest_id']."'>
                            <input type='hidden' name='userID' value='".$_SESSION['UserID']."'>
                            <div class='col-6'>
                                <div class='mb-3'>
                                    <label for='username' class='form-label'>Answer</label>
                                    <input name='answer1' class='form-control' type='text' placeholder='Example: A' required min='0' maxlength='1'>
                                </div>
                            </div>
                            <div class='col-3 mt-1'>
                                <div class='mb-3 mt-3'>
                                    <input type='button' class='btn btn-success w-100 mb-5' id='submitTestFormConcept5$count' value='Submit'>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                ";
                }

                $countQuestion++;
                $count++;
            }
        }


    }

}

?>