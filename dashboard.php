<?php
    session_start();
    require_once 'Model/UserInfo.php';
    $userinfo = new UserInfo();
    $UserID = $_SESSION['UserID'];

    if(!$UserID){
        header('Location: index.php');
    }

   

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
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card">
                                                    <div class="card-header"><h4>Lesson 1</h4></div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-7">
                                                                <small>Preferred Learning Style</small>
                                                                <h3>Reading <sup style="font-size: 0.8rem;">356min.</sup></h3>
                                                            </div>
                                                            <div class="col text-end">
                                                                <h5><sup style="font-size: 0.5rem;">32min.</sup> Visual</h5>
                                                                <h5><sup style="font-size: 0.5rem;">6min.</sup> Audio</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700; margin-right: 10px;">Attempt 1</small> Pre-test Score :</div>
                                                            <span style="font-weight: 700;">18</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 1</small> Pre-test Score :</div>
                                                            <span style="font-weight: 700;">18</span>
                                                        </div>
                                                        <br>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 1</small> Post-test Score :</div>
                                                            <span style="font-weight: 700;">18</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 1</small> Post-test Score :</div>
                                                            <span style="font-weight: 700;">18</span>
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
                                                                <h3>Reading <sup style="font-size: 0.8rem;">356min.</sup></h3>
                                                            </div>
                                                            <div class="col text-end">
                                                                <h5><sup style="font-size: 0.5rem;">32min.</sup> Visual</h5>
                                                                <h5><sup style="font-size: 0.5rem;">6min.</sup> Audio</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700; margin-right: 10px;">Attempt 1</small> Pre-test Score :</div>
                                                            <span style="font-weight: 700;">18</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 1</small> Pre-test Score :</div>
                                                            <span style="font-weight: 700;">18</span>
                                                        </div>
                                                        <br>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 1</small> Post-test Score :</div>
                                                            <span style="font-weight: 700;">18</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 1</small> Post-test Score :</div>
                                                            <span style="font-weight: 700;">18</span>
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
                                                                <h3>Reading <sup style="font-size: 0.8rem;">356min.</sup></h3>
                                                            </div>
                                                            <div class="col text-end">
                                                                <h5><sup style="font-size: 0.5rem;">32min.</sup> Visual</h5>
                                                                <h5><sup style="font-size: 0.5rem;">6min.</sup> Audio</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700; margin-right: 10px;">Attempt 1</small> Pre-test Score :</div>
                                                            <span style="font-weight: 700;">18</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 1</small> Pre-test Score :</div>
                                                            <span style="font-weight: 700;">18</span>
                                                        </div>
                                                        <br>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 1</small> Post-test Score :</div>
                                                            <span style="font-weight: 700;">18</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 1</small> Post-test Score :</div>
                                                            <span style="font-weight: 700;">18</span>
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
                                                                <h3>Reading <sup style="font-size: 0.8rem;">356min.</sup></h3>
                                                            </div>
                                                            <div class="col text-end">
                                                                <h5><sup style="font-size: 0.5rem;">32min.</sup> Visual</h5>
                                                                <h5><sup style="font-size: 0.5rem;">6min.</sup> Audio</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700; margin-right: 10px;">Attempt 1</small> Pre-test Score :</div>
                                                            <span style="font-weight: 700;">18</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 1</small> Pre-test Score :</div>
                                                            <span style="font-weight: 700;">18</span>
                                                        </div>
                                                        <br>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 1</small> Post-test Score :</div>
                                                            <span style="font-weight: 700;">18</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div><small style="font-weight: 700;margin-right: 10px;">Attempt 1</small> Post-test Score :</div>
                                                            <span style="font-weight: 700;">18</span>
                                                        </div>
                                              
                                                    </div>
                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="mt-5 mb-3" style="font-weight: 700; font-size: 2rem;">History</div>
                                        <table class="table table-striped table-bordered">
                                            <thead class="bg-primary text-white">
                                                <tr>
                                                    <td>as</td>
                                                    <td>as</td>
                                                    <td>as</td>
                                                    <td>as</td>
                                                    <td>as</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>asd</td>
                                                    <td>asd</td>
                                                    <td>asd</td>
                                                    <td>asd</td>
                                                    <td>asd</td>
                                                </tr>
                                            </tbody>
                                        </table>



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
