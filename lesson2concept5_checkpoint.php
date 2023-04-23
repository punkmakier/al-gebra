<?php
    session_start();
    require_once 'Model/UserInfo.php';
    require_once 'Model/ShowPretest.php';
    require_once 'Model/DisplayCheckpoint.php';
    $userinfo = new UserInfo();
    $displayCheckpoint = new DisplayCheckpoint();
    $pretest = new ShowPretest();
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Lesson 2</a></li>
                                            <li class="breadcrumb-item active">Ckeckpoint Exam</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Concept 5</h4>
                                </div>
                                
                                <div class="container-fluid mt-3">            
                               
                                    <?php $checkpoint = $displayCheckpoint->checkAttempt($UserID);
                                        if($checkpoint == 1){
                                           $displayCheckpoint->showTestExam(2,5,$UserID,2);
                                        }else{
                                           $displayCheckpoint->showTestExam(2,5,$UserID,1);
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


        <?php include 'footer.php'; ?>
       
    </body>
</html>
