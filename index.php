<?php 
    error_reporting(0);

    require_once 'Model/UserAuth.php';

   
    session_start();
    $UserID = $_SESSION['UserID'];

    if(isset($UserID)){
        header('Location: dashboard.php');
    }

    $userAuth = new UserAuth();

    if(isset($_GET['confirmation']) != ""){
        $userAuth->completeRegistration($_GET['confirmation']);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/ai-gebra logo.png">
        
        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.php">
                                <span><img src="assets/images/ai-gebra_logo.png" alt="" height="70"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                                    <p class="text-muted mb-4">Please enter your email and password to proceed</p>
                                    <?php if(isset($_GET['confirmation']) != ""){
                                        echo "<div class='alert alert-success'>Confirmation Success! The page will reload, please wait in 5 seconds.</div>";
                                        
                                        echo "<script>
                                        setTimeout(function(){
                                            window.location = 'index.php';
                                          }, 5000);
                                        </script>";
                                        
                                    } ?>
                                    <div id="message" class="alert"></div>
                                </div>

                                <form id="loginForm">

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input name="email" class="form-control" type="text" id="emailaddress" required placeholder="Enter your email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input name="password" type="password" id="password" class="form-control" placeholder="Enter your password" required>
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

            
                                    <div class="mb-3 mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"> Log In </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Don't have an account? <a href="register.php" class="text-muted ms-1"><b>Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2023 © AI-Gebra
        </footer>

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


        <script>
            
            $(document).ready(function() {
                $("#loginForm").on("submit", function(e){
                    e.preventDefault();
                    var formData = new FormData($(this)[0]);

                    $.ajax({
                    url: 'Controller/UserLogin.php',
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if(response == 'Student'){
                            window.location.href="dashboard.php";
                        }
                        else if(response == 'Teacher'){
                            window.location.href="dashboard.php";
                        }
                        else {
                            $("#message").addClass("alert-danger");
                            $("#message").text("Invalid! Email address or passwod is incorrect.")
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                    });
                })

            });
        </script>
        
    </body>
</html>
