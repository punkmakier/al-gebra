<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Register | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
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
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-lg-6">
                        <div class="card">
                            <!-- Logo-->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.html">
                                    <span><img src="assets/images/ai-gebra_logo.png" alt="" height="70"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 fw-bold">Free Sign Up</h4>
                                    <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute </p>
                                    <div id="message" class="alert"></div>
                                </div>
                        
                                <form id="regStudent">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="fullname" class="form-label">First Name <span class="text-danger">*</span></label>
                                                <input name="fname" class="form-control" type="text" id="fullname" placeholder="Enter your first name" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="middle" class="form-label">Middle Name</label>
                                                <input name="mname" class="form-control" type="text" id="middle" placeholder="Enter your middle name">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="lastname" class="form-label">Last Name <span class="text-danger">*</span></label>
                                                <input name="lname" class="form-control" type="text" id="lastname" placeholder="Enter your last name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="fullname" class="form-label">Student ID <span class="text-danger">*</span></label>
                                                <input name="studID" class="form-control" type="text" id="emailaddress" placeholder="Enter your student ID" required >
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="fullname" class="form-label">Grade <span class="text-danger">*</span></label>
                                                <select class="form-select mb-3" name="grade">
                                                    <option selected>7</option>
                                                </select> 
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="middle" class="form-label">Section</label>
                                                <select class="form-select mb-3" name="section">
                                                    <option selected>- Select -</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>  
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address <span class="text-danger">*</span></label>
                                        <input name="email" class="form-control" type="email" id="emailaddress" required placeholder="Enter your email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <input name="password" type="password" id="password" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <input name="conpass" type="password" id="password" class="form-control" placeholder="Enter your confirm password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 text-center" id="submitBTN">
                                        <button class="btn btn-primary" type="submit" id="signup"> Sign Up </button>
                                        <button class="btn btn-primary" type="button" disabled style="display: none;" id="loadspinner">
                                            <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Already have account? <a href="index.php" class="text-muted ms-1"><b>Log In</b></a></p>
                            </div> <!-- end col-->
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
                $("#regStudent").on("submit", function(e){
                    e.preventDefault();
                    var formData = new FormData($(this)[0]);
                    $("#signup").hide();
                    $("#loadspinner").show();
                    
                    
                    $.ajax({
                    url: 'Controller/UserRegistration.php',
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if(response == 'Incorrect'){
                            $("#message").addClass("alert-danger");
                            $("#message").text("Passwors and Confirm Password did not match");
                        }else if(response == 'Short'){
                            $("#message").addClass("alert-danger");
                            $("#message").text("Passwors should not be less than 4 characters long.");
                        }
                        else if(response == 'Success'){
                            $("#message").removeClass("alert-danger");
                            $("#message").addClass("alert-success");
                            $("#message").text("You have successfully registered. Please check your email for verification.")
                        }
                        else{
                            $("#message").addClass("alert-danger");
                            $("#message").text("Invalid! Email address or student ID are already exists.")
                        }

                        $("#signup").show();
                        $("#loadspinner").hide();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                    });
                })
            })
        </script>
    </body>
</html>
