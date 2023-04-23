<?php
    session_start();
    require_once 'Model/UserInfo.php';
    require_once 'Model/ShowPretest.php';
    require_once 'Model/ShowConcept.php';
    require_once 'Model/DisplayCheckpoint.php';
    $displayCheckpoint = new DisplayCheckpoint;
    $userinfo = new UserInfo();
    $pretest = new ShowPretest();
    $showConcept = new ShowConcept;
    $UserID = $_SESSION['UserID'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/ai-gebra logo.png">

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <style>
            div.dataTables_wrapper div.dataTables_filter{
                margin-bottom: 30px !important;
            }
        </style>
    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <?php include 'sidebarMenu.php'; ?>
            <!-- Left Sidebar End -->

            <?php include 'topbar.php'; ?>
            

             <!-- Start Content-->
             <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Lesson 3</a></li>
                                            <li class="breadcrumb-item active">Concept 3</li>
                                        </ol>
                                        <?php if($showConcept->getCountConcept(3,3)):?>
                                            <a href="lesson3concept3_checkpoint.php" class="btn btn-info mt-2">Take Checkpoint Exam</a>
                                        <?php endif; ?>
                                    </div>
                                    <h4 class="page-title">Concept 3</h4>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#learningMethod">Show Learning Method</button>

                                </div>

                            

                                <div class="container-fluid mt-3" id="readingLM" style="display:none;">
                                    <input type="hidden" value="3" id="LessonID">
                                    <input type="hidden" value="2" id="ConceptID">
                                    <input type="hidden" value="Reading" id="LearningToolID">
                                    <input type="hidden" value="<?php echo $_SESSION['UserID'] ?>" id="useridID">
                                    <?php $checkpoint = $displayCheckpoint->checkAttempt($UserID);
                                        if($checkpoint == 1){
                                           $showConcept->showConcept(3,3,1,2);
                                        }else{
                                            $showConcept->showConcept(3,3,1,1);
                                        }
                                    
                                    ?>
                           
                                </div>
                                <div class="container-fluid mt-3" id="audioLM" style="display:none;">
                                    <input type="hidden" value="3" id="LessonIDAud">
                                    <input type="hidden" value="3" id="ConceptIDAud">
                                    <input type="hidden" value="Audio" id="LearningToolIDAud">
                                    <input type="hidden" value="<?php echo $_SESSION['UserID'] ?>" id="useridIDAud">
                                    <?php $checkpoint = $displayCheckpoint->checkAttempt($UserID);
                                        if($checkpoint == 1){
                                           $showConcept->showConcept(3,3,2,2);
                                        }else{
                                            $showConcept->showConcept(3,3,2,1);
                                        }
                                    
                                    ?>
                                </div>
                                <div class="container-fluid mt-2" id="visualLM" style="display:none;">
                                    <input type="hidden" value="3" id="LessonIDVisual">
                                    <input type="hidden" value="3" id="ConceptIDVisual">
                                    <input type="hidden" value="Visual" id="LearningToolIDVisual">
                                    <input type="hidden" value="<?php echo $_SESSION['UserID'] ?>" id="useridIDVisual">
                                    <?php $checkpoint = $displayCheckpoint->checkAttempt($UserID);
                                        if($checkpoint == 1){
                                           $showConcept->showConcept(3,3,3,2);
                                        }else{
                                            $showConcept->showConcept(3,3,3,1);
                                        }
                                    
                                    ?>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        
                    </div> <!-- container -->

                </div> <!-- content -->


        </div>
        <!-- END wrapper -->


        <?php include 'rightsidebar.php';?>




        <?php include 'learningmethodmodal.php'; ?>
        <?php include 'footer.php'; ?>
    </body>
</html>
