
<?php
require '../config.php';
include '../header.php';
include '../dbcon.php';
?>



<?php include('../session.php'); ?>


<!DOCTYPE html>
<html lang="en"
      dir="ltr">


      <body class=" layout-fluid">


<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">

    <!-- Header -->
    <?php include 'student_header.php' ?>

    <!-- // END Header -->

    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content">

        <div data-push
             data-responsive-width="992px"
             class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content page ">

                <div class="container-fluid page__container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="student-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Plans</li>
                    </ol>
                    <h1 class="h2">Plans</h1>

                    <div class="card border-left-3 border-left-primary card-2by1">
                        <div class="card-body">
                            <div class="media flex-wrap align-items-center">
                                <div class="media-left">
                                    <i class="material-icons text-muted-light">credit_card</i>
                                </div>
                                <div class="media-body"
                                     style="min-width: 180px">
                                    Upgrade Your subscription 
                                </div>
                                <div class="media-right mt-2 mt-xs-plus-0">
                                    <a class="btn btn-success"
                                       href="visa.php">Upgrade</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            
                            <div class="row m-0">
                                <div class="col-lg container-fluid page__container">
                                    

                                    <div class="row card-group-row mb-40pt">
                                        <div class="col-lg-6 col-sm-6 card-group-row__col">

                                            <div class="card card-group-row__card text-center o-hidden card--raised navbar-shadow">

                                                <div class="card-body d-flex flex-column">
                                                    <div class="flex-grow-1 mb-16pt">
                                                        <span class="w-64 h-64 icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-16pt">
                                                            <i class="material-icons">person</i>
                                                        </span>
                                                        <h4 class="mb-8pt">Student</h4>
                                                        <p class="text-black-70">Access to over 1.000 high quality courses. For individuals.</p>
                                                      
                                                    </div>
                                                    <p class="d-flex justify-content-center align-items-center m-0">
                                                        <span class="h4 m-0 font-weight-normal">$</span>
                                                        <span class="h1 m-0 font-weight-normal">9</span>
                                                        <span class="h4 m-0 font-weight-normal">/ month</span>
                                                    </p>
                                                    <p class="lh-1 text-muted mb-0"><small>after the free trial ends</small></p>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="student-signup.html" class="btn btn-outline-secondary disabled">Current plan</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-sm-6 card-group-row__col">

                                            <div class="card card-group-row__card text-center o-hidden">

                                                <div class="card-body d-flex flex-column">
                                                    <div class="flex-grow-1 mb-16pt">
                                                        <span class="w-64 h-64 icon-holder icon-holder--outline-success rounded-circle d-inline-flex mb-16pt">
                                                            <i class="material-icons">group</i>
                                                        </span>
                                                        <h4 class="mb-8pt">Team</h4>
                                                        <p class="text-black-70">Starts with 3 accounts with more seats For available  course </p>
                                                      
                                                    </div>
                                                    <p class="d-flex justify-content-center align-items-center m-0">
                                                        <span class="h4 m-0 font-weight-normal">$</span>
                                                        <span class="h1 m-0 font-weight-normal">19</span>
                                                        <span class="h4 m-0 font-weight-normal">/ month</span>
                                                    </p>
                                                    <p class="lh-1 text-muted mb-0"><small>after the free trial ends</small></p>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="#" class="btn btn-success">Get started</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                          

                         
                        
                    </div>

                </div>

            </div>

<?php include 'student_side.php'?>

        </div>

      <?php include '../script.php'?>
</html>