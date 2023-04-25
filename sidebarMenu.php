<?php 

    require_once 'Model/UnlockFeatures.php';
    $lockable = new UnlockFeatures;

?>

<div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="dashboard.php" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/ai-gebra_logo.png" alt="" height="60">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/ai-gebra_logo.png" alt="" height="32">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="dashboard.php" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="assets/images/ai-gebra_logo.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/ai-gebra_logo.png" alt="" height="16">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a class="side-nav-link" href="dashboard.php">
                                <i class="uil-home-alt"></i>
                                <span> Dashboards </span>
                            </a>
                        </li>
                    <?php if($_SESSION['UserRole'] == "Teacher"):?>
                        <li class="side-nav-title side-nav-item">Teacher Tools</li>
                        <li class="side-nav-item" style="cursor: pointer;" type="button" data-bs-toggle="modal" data-bs-target="#createPreTestModal">
                            <a class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Create Test </span>
                            </a>
                        </li>
                        <li class="side-nav-item" style="cursor: pointer;" type="button" data-bs-toggle="modal" data-bs-target="#createConceptModal">
                            <a class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Create Concept </span>
                            </a>
                        </li>
                        <li class="side-nav-item" style="cursor: pointer;" type="button" data-bs-toggle="modal" data-bs-target="#checkpointExamModal">
                            <a class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Create Checkpoint Exam </span>
                            </a>
                        </li>
                        <li class="side-nav-title side-nav-item">Teacher Manage Tools</li>
                        <li class="side-nav-item" style="cursor: pointer;">
                            <a class="side-nav-link" href="viewallpretest.php">
                                <i class="uil-home-alt"></i>
                                <span> View All Pretest Exam </span>
                            </a>
                        </li>
                        <li class="side-nav-item" style="cursor: pointer;">
                            <a class="side-nav-link" href="viewallcheckpointexam.php">
                                <i class="uil-home-alt"></i>
                                <span> View All Checkpoint Exam </span>
                            </a>
                        </li>
                        <?php endif;?>
                        <li class="side-nav-title side-nav-item">Students Access</li>

                        <li class="side-nav-item " >
                            <a data-bs-toggle="collapse" href="<?php echo ($lockable->checkPostAttempts(1,$UserID) == 2 ? "#" : "#sideLesson1"  ) ?> " aria-expanded="false" aria-controls="sideLesson1" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Lesson 1</span>
                                
                                <?php echo ($lockable->checkPostAttempts(1,$UserID) == 2 ? "<i class='mdi mdi-lock-open-remove'></i>" : "<span class='menu-arrow'></span>"  ) ?>
                                
                            </a>
                            <div class="collapse" id="sideLesson1">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="lesson1pre-test.php">Pre-test</a>
                                    </li>
                                    <li>
                                        <a href="lesson1concept1.php">Concept I</a>
                                    </li>
                                    <li>
                                        <a href="lesson1concept2.php">Concept II</a>
                                    </li>
                                    <li>
                                        <a href="lesson1concept3.php">Concept III</a>
                                    </li>
                                    <li>
                                        <a href="lesson1concept4.php">Concept IV</a>
                                    </li>
                                    <li>
                                        <a href="lesson1concept5.php">Concept V</a>
                                    </li>
                                    <li>
                                        <a href="lesson1post-test.php">Post-Test</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="<?php echo ($lockable->checkPostAttempts(2,$UserID) == 2 ? "#" : "#sideLesson2"  ); ?>" aria-expanded="false" aria-controls="sideLesson2" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Lesson 2 </span>
                                <?php echo ($lockable->checkPostAttempts(2,$UserID) == 2 ? "<i class='mdi mdi-lock-open-remove'></i>" : "<span class='menu-arrow'></span>"  ) ?>
                            </a>
                            <div class="collapse" id="sideLesson2">
                                <ul class="side-nav-second-level">
                                   <li>
                                        <a href="lesson2pre-test.php">Pre-test</a>
                                    </li>
                                    <li>
                                        <a href="lesson2concept1.php">Concept I</a>
                                    </li>
                                    <li>
                                        <a href="lesson2concept2.php">Concept II</a>
                                    </li>
                                    <li>
                                        <a href="lesson2concept3.php">Concept III</a>
                                    </li>
                                    <li>
                                        <a href="lesson2concept4.php">Concept IV</a>
                                    </li>
                                    <li>
                                        <a href="lesson2concept5.php">Concept V</a>
                                    </li>
                                    <li>
                                        <a href="lesson2post-test.php">Post-Test</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="<?php echo ($lockable->checkPostAttempts(3,$UserID) == 2 ? "#" : "#sideLesson3"  ); ?>" aria-expanded="false" aria-controls="sideLesson3" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Lesson 3 </span>
                                <?php echo ($lockable->checkPostAttempts(3,$UserID) == 2 ? "<i class='mdi mdi-lock-open-remove'></i>" : "<span class='menu-arrow'></span>"  ) ?>
                            </a>
                            <div class="collapse" id="sideLesson3">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="lesson3pre-test.php">Pre-test</a>
                                    </li>
                                    <li>
                                        <a href="lesson3concept1.php">Concept I</a>
                                    </li>
                                    <li>
                                        <a href="lesson3concept2.php">Concept II</a>
                                    </li>
                                    <li>
                                        <a href="lesson3concept3.php">Concept III</a>
                                    </li>
                                    <li>
                                        <a href="lesson3concept4.php">Concept IV</a>
                                    </li>
                                    <li>
                                        <a href="lesson3concept5.php">Concept V</a>
                                    </li>
                                    <li>
                                        <a href="lesson3post-test.php">Post-Test</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="<?php echo ($lockable->checkPostAttempts(4,$UserID) == 2 ? "#" : "#sideLesson4"  ); ?>" aria-expanded="false" aria-controls="sideLesson4" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Lesson 4 </span>
                                <?php echo ($lockable->checkPostAttempts(4,$UserID) == 2 ? "<i class='mdi mdi-lock-open-remove'></i>" : "<span class='menu-arrow'></span>"  ) ?>
                            </a>
                            <div class="collapse" id="sideLesson4">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="lesson4pre-test.php">Pre-test</a>
                                    </li>
                                    <li>
                                        <a href="lesson4concept1.php">Concept I</a>
                                    </li>
                                    <li>
                                        <a href="lesson4concept2.php">Concept II</a>
                                    </li>
                                    <li>
                                        <a href="lesson4concept3.php">Concept III</a>
                                    </li>
                                    <li>
                                        <a href="lesson4concept4.php">Concept IV</a>
                                    </li>
                                    <li>
                                        <a href="lesson4concept5.php">Concept V</a>
                                    </li>
                                    <li>
                                        <a href="lesson4post-test.php">Post-Test</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                  
                    </ul>


                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>


            