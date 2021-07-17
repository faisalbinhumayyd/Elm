<?php 
require '../config.php';
include('../header.php'); ?>
<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    
    <body class="login">

        <div class="d-flex align-items-center"
             style="min-height: 100vh">
            <div class="col-sm-8 col-md-6 col-lg-4 mx-auto"
                 style="min-width: 300px;">
                <div class="text-center mt-5 mb-1">
                    <div class="avatar avatar-lg">
                        <img src="../assets/images/logo/logo.png"
                             class="avatar-img rounded-circle"
                             alt="e-learning" />
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-5 navbar-light"></div>
                <div class="card navbar-shadow">
                    <div class="card-header text-center">
                        <h4 class="card-title">Sign Up As a Student</h4>
                        <p class="card-subtitle">Create a new account</p>
                    </div>
                    <div class="card-body">

                    <?php include('student_signup_form.php'); ?>


                        
                    </div>
                    <div class="card-footer text-center text-black-50">Already signed up? <a href="../login.php">Login  </a> Or Sign up As a <h4> <a href="../lecturer/signup_lecturer.php">Lecturer  </a></h4> </div>
                </div>
            </div>
        </div>


    </body>

</html>