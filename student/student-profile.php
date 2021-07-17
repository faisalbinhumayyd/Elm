
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
                    <div class="mdk-drawer-layout__content page pt-0">

                    <div class="mdk-drawer-layout__content page " style="transform: translate3d(0px, 0px, 0px);">

<div class="container-fluid page__container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
        <li class="breadcrumb-item active">Profile</li>
    </ol>

    <div class="text-center">
        <a href="#"><img src="../avatar_student/<?php echo $row['location']; ?>" alt="" class="rounded-circle"></a>
        <h1 class="h2 mb-0 mt-1"><?php echo $row['username'];  ?></h1>
       
      
        <hr>
        <h5 class="text-muted mb-1">Email:   <?php echo $row['email'];  ?></h5>
        
    </div>
    <hr>
    <h4>Informations</h4>
  
  
        <div class="card border-left-3 border-left-primary card-2by1">
                        <div class="card-body">
                            <div class="media flex-wrap align-items-center">
                               
                                <div class="media-body" style="min-width: 180px">
                        <h5 class="card-title mb-0"> <strong style="color: rebeccapurple;">Email : </strong>   <?php echo $row['email'];  ?></h5>
                        <h5 class="card-title mb-0"> <strong style="color: rebeccapurple;">First Name : </strong>   <?php echo $row['firstname'];  ?></h5>
                        <h5 class="card-title mb-0"> <strong style="color: rebeccapurple;">Last Name : </strong>   <?php echo $row['lastname'];  ?></h5>
                       
                                </div>
                                <div class="media-right mt-2 mt-xs-plus-0">
                                    <a class="btn btn-warning" href="student_account_edit.php">Update</a>
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
    </body>

</html>