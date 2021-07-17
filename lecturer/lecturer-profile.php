
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

            <?php include 'lecturer_header.php' ?>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page pt-0">

                        <div class="bg-primary mdk-box js-mdk-box mb-0"
                             style="height: 192px;"
                             data-effects="parallax-background blend-background">
                            <div class="mdk-box__bg">
                                <div class="mdk-box__bg-front"
                                     style="background-image: url(../assets/images/1280_rsz_aman-dhakal-205796-unsplash.jpg); background-position: center;"></div>
                            </div>
                        </div>
                        <div class="container-fluid page__container d-flex align-items-end position-relative mb-4">
                        
                            <div class="avatar avatar-xxl position-absolute bottom-0 left-0 right-0">
                                <img src="../avatar_lecturer/<?php echo $row['location']; ?>"
                                     alt="avatar"
                                     class="avatar-img rounded-circle border-3">
                            </div>
                            <ul class="nav nav-tabs-links flex"
                                style="margin-left: 265px;">
                                <li class="nav-item">
                                    <a href="lecturer-profile.php"
                                       class="nav-link active">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="lecturer-profile-posts.php"
                                       class="nav-link">Posts</a>
                                </li>
                            </ul>
                        </div>

                        <div class="container-fluid page__container mb-3">
                            <div class="row flex-sm-nowrap">
                                <div class="col-sm-auto mb-3 mb-sm-0"
                                     style="width: 265px;">
                                    <h1 class="h2 mb-1"><?php echo $row['firstname']." ".$row['lastname'];  ?></h1> 
                                    <p class="d-flex align-items-center mb-4">
                                        <a href="#"
                                           class="btn btn-sm btn-success mr-2"><?php echo $row['email'] ?></a>
                                    </p>
                                    <div class="text-muted d-flex align-items-center mb-2">
                                        <i class="material-icons mr-1">account_box</i>
                                        <div class="flex">lecturer since 2012</div>
                                    </div>
                                    <div class="text-muted d-flex align-items-center mb-4">
                                        <i class="material-icons mr-1">location_on</i>
                                        <div class="flex">Romania, Europe</div>
                                    </div>

                                    <h4>About me</h4>
                                    <p class="text-black-70 measure-paragraph">Fueled by my passion for understanding the nuances of cross-cultural advertising, I consider myself a forever lecturer, eager to both build on my academic foundations in psychology and sociology and stay in tune with the latest digital marketing strategies through continued coursework.</p>

                                    <h4>Connect</h4>
                                    <p class="text-black-70 measure-paragraph">I’m currently working as a freelance marketing director and always interested in a challenge. Here’s how to reach out and connect.</p>
                                </div>
                                <div class="col-sm">
                              
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php include 'lecturer_side.php'?>

                </div>

               
                <?php include '../script.php'?>
    </body>

</html>