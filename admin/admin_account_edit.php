<?php
require '../config.php';
include '../header.php'; 
include '../dbcon.php';
?>
 
 <?php include('session.php'); ?>

<!DOCTYPE html>
<html lang="en"
      dir="ltr">



    <body class=" layout-fluid">

      

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <?php include 'admin_header.php' ?>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content"> 

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">

                        <div class="container-fluid page__container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Edit Account</li>
                            </ol>
                            <h1 class="h2">Edit Account</h1>

                            <div class="card">
                                <ul class="nav nav-tabs nav-tabs-card" style="background-color: #03a9f4;">
                                    <li class="nav-item">
                                        <a class="nav-link active"
                                           href="#first"
                                           data-toggle="tab">Information</a>
                                    </li>
                                  
                                    <li class="nav-item">
                                        <a class="nav-link"
                                           href="#third"
                                           data-toggle="tab"  >Change Password</a>
                                    </li>
                                </ul>
                                <div  class="tab-content card-body">
                                <?php include('change_profile_admin_form.php'); ?>
                                   
                              
                                    
                                <?php include('change_password_admin.php'); ?>
                                </div>
                            </div>
                        </div>

                    </div>

                         <?php include 'admin_side.php'?>
        </div>



    </body>

</html>