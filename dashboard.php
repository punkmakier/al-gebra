<?php
    session_start();
    require_once 'Model/UserInfo.php';
    require_once 'Model/DisplayDashboard.php';
    $userinfo = new UserInfo();
    $UserID = $_SESSION['UserID'];

    if(!$UserID){
        header('Location: index.php');
    }

    $display = new DisplayDashboard;


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
        <link href="assets/css/app.min.css?v=1" rel="stylesheet" type="text/css" id="light-style">
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">


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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard </h4>
                                    <?php if($_SESSION['UserRole'] == "Student"){
                                                include 'studentdashboard.php';
                                            } else{
                                        ?>
                                            <div class="container-fluid">
                                                <div class="card w-25 mb-5">
                                                    <div class="card-header">Student Count</div>
                                                    <div class="card-body">
                                                        <h3><?php $display->displayTotalStudent(); ?></h3>
                                                    </div>
                                                </div>
                                            </div>

                                            <table class="table table-striped mt-3" id='thisTable'>
                                                <thead class="bg-primary text-white">
                                                    <tr>
                                                        <td class='text-center'>Student ID</td>
                                                        <td class='text-center'>Audio Duration</td>
                                                        <td class='text-center'>Reading Duration</td>
                                                        <td class='text-center'>Visual Duration</td>
                                                        <td class='text-center'>Preferred Learning Type</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php echo $display->displayTeachertable(); ?>
                                                </tbody>
                                            </table>


                                        <?php } ?>

                                    </div>
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
