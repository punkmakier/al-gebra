<div class="container-fluid">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card">
                                                    <div class="card-header"><h4>Lesson 1 </h4></div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-7">
                                                                <small>Preferred Learning Style</small>
                                                                <h3><?php $display->displayLesson(1,$UserID);?></h3>
   
                                                            </div>
                                                            <div class="col text-end">
                                                                <h5> Visual</h5>
                                                                <h5> Audio</h5>
                                                                <h5>Reading</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700; margin-right: 10px;">Attempt 1</small> Pre-test Score :</div>
                                                            <span style="font-weight: 700;" class="<?php echo $display->displayCorrectAnswers(1,$UserID,1,"PreTest") > 15 ? "text-success" : "text-danger"?>"><?php echo $display->displayCorrectAnswers(1,$UserID,1,"PreTest"); ?></span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 2</small> Pre-test Score :</div>
                                                           <span style="font-weight: 700;" class="<?php echo $display->displayCorrectAnswers(1,$UserID,2,"PreTest") > 15 ? "text-success" : "text-danger"?>"><?php echo $display->displayCorrectAnswers(1,$UserID,2,"PreTest"); ?></span>
                                                        </div>
                                                        <br>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 1</small> Post-test Score :</div>
                                                           <span style="font-weight: 700;" class="<?php echo $display->displayCorrectAnswers(1,$UserID,1,"PostTest") > 15 ? "text-success" : "text-danger"?>"><?php echo $display->displayCorrectAnswers(1,$UserID,1,"PostTest"); ?></span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 2</small> Post-test Score :</div>
                                                           <span style="font-weight: 700;" class="<?php echo $display->displayCorrectAnswers(1,$UserID,2,"PostTest") > 15 ? "text-success" : "text-danger"?>"><?php echo $display->displayCorrectAnswers(1,$UserID,2,"PostTest"); ?></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <div class="card-header"><h4>Lesson 2</h4></div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-7">
                                                                <small>Preferred Learning Style</small>
                                                                <h3><?php $display->displayLesson(2,$UserID); ?></h3>
                                                            </div>
                                                            <div class="col text-end">
                                                                <h5>Visual</h5>
                                                                <h5>Audio</h5>
                                                                <h5>Reading</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700; margin-right: 10px;">Attempt 1</small> Pre-test Score :</div>
                                                            <span style="font-weight: 700;" class="<?php echo $display->displayCorrectAnswers(2,$UserID,1,"PreTest") > 15 ? "text-success" : "text-danger"?>"><?php echo $display->displayCorrectAnswers(2,$UserID,1,"PreTest"); ?></span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 2</small> Pre-test Score :</div>
                                                           <span style="font-weight: 700;" class="<?php echo $display->displayCorrectAnswers(2,$UserID,2,"PreTest") > 15 ? "text-success" : "text-danger"?>"><?php echo $display->displayCorrectAnswers(2,$UserID,2,"PreTest"); ?></span>
                                                        </div>
                                                        <br>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 1</small> Post-test Score :</div>
                                                           <span style="font-weight: 700;" class="<?php echo $display->displayCorrectAnswers(2,$UserID,1,"PostTest") > 15 ? "text-success" : "text-danger"?>"><?php echo $display->displayCorrectAnswers(2,$UserID,1,"PostTest"); ?></span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 2</small> Post-test Score :</div>
                                                           <span style="font-weight: 700;" class="<?php echo $display->displayCorrectAnswers(2,$UserID,2,"PostTest") > 15 ? "text-success" : "text-danger"?>"><?php echo $display->displayCorrectAnswers(2,$UserID,2,"PostTest"); ?></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <div class="card-header"><h4>Lesson 3</h4></div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-7">
                                                                <small>Preferred Learning Style</small>
                                                                <h3><?php $display->displayLesson(3,$UserID); ?></h3>
                                                            </div>
                                                            <div class="col text-end">
                                                                <h5>Visual</h5>
                                                                <h5>Audio</h5>
                                                                <h5>Reading</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700; margin-right: 10px;">Attempt 1</small> Pre-test Score :</div>
                                                            <span style="font-weight: 700;" class="<?php echo $display->displayCorrectAnswers(3,$UserID,1,"PreTest") > 15 ? "text-success" : "text-danger"?>"><?php echo $display->displayCorrectAnswers(3,$UserID,1,"PreTest"); ?></span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 2</small> Pre-test Score :</div>
                                                           <span style="font-weight: 700;" class="<?php echo $display->displayCorrectAnswers(3,$UserID,2,"PreTest") > 15 ? "text-success" : "text-danger"?>"><?php echo $display->displayCorrectAnswers(3,$UserID,2,"PreTest"); ?></span>
                                                        </div>
                                                        <br>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 1</small> Post-test Score :</div>
                                                           <span style="font-weight: 700;" class="<?php echo $display->displayCorrectAnswers(3,$UserID,1,"PostTest") > 15 ? "text-success" : "text-danger"?>"><?php echo $display->displayCorrectAnswers(3,$UserID,1,"PostTest"); ?></span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 2</small> Post-test Score :</div>
                                                           <span style="font-weight: 700;" class="<?php echo $display->displayCorrectAnswers(3,$UserID,2,"PostTest") > 15 ? "text-success" : "text-danger"?>"><?php echo $display->displayCorrectAnswers(3,$UserID,2,"PostTest"); ?></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <div class="card-header"><h4>Lesson 4</h4></div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-7">
                                                                <small>Preferred Learning Style</small>
                                                                <h3><?php $display->displayLesson(4,$UserID); ?></h3>
                                                            </div>
                                                            <div class="col text-end">
                                                                <h5>Visual</h5>
                                                                <h5>Audio</h5>
                                                                <h5>Reading</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700; margin-right: 10px;">Attempt 1</small> Pre-test Score :</div>
                                                            <span style="font-weight: 700;" class="<?php echo $display->displayCorrectAnswers(4,$UserID,1,"PreTest") > 15 ? "text-success" : "text-danger"?>"><?php echo $display->displayCorrectAnswers(4,$UserID,1,"PreTest"); ?></span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 2</small> Pre-test Score :</div>
                                                           <span style="font-weight: 700;" class="<?php echo $display->displayCorrectAnswers(4,$UserID,2,"PreTest") > 15 ? "text-success" : "text-danger"?>"><?php echo $display->displayCorrectAnswers(4,$UserID,2,"PreTest"); ?></span>
                                                        </div>
                                                        <br>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 1</small> Post-test Score :</div>
                                                           <span style="font-weight: 700;" class="<?php echo $display->displayCorrectAnswers(4,$UserID,1,"PostTest") > 15 ? "text-success" : "text-danger"?>"><?php echo $display->displayCorrectAnswers(4,$UserID,1,"PostTest"); ?></span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 2</small> Post-test Score :</div>
                                                           <span style="font-weight: 700;" class="<?php echo $display->displayCorrectAnswers(4,$UserID,2,"PostTest") > 15 ? "text-success" : "text-danger"?>"><?php echo $display->displayCorrectAnswers(4,$UserID,2,"PostTest"); ?></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="mt-5 mb-3" style="font-weight: 700; font-size: 2rem;">History</div>
                                        <table class="table table-striped table-bordered" id="thisTable">
                                            <thead class="bg-primary text-white">
                                                <tr>
                                                    <td>Test type</td>
                                                    <td>Lesson</td>
                                                    <td>Concept</td>
                                                    <td>Question</td>
                                                    <td>Correct Answer</td>
                                                    <td>Your Answer</td>
                                                    <td>Status</td>
                                                    <td>Attempt</td>
                                                    <td>Date Answered</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php $display->StudentHistory($UserID); ?>
                                            </tbody>
                                        </table>
