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
			 		<div class="mdk-drawer-layout__content page ">

					 	<div class="container-fluid page__container">


                         <?php
                           $id=$_SESSION['id'];
                           //var_dump($id);
                               $query=mysqli_query($conn, " SELECT * from lecturer where  status = 'Activated' and lecturer_id=$id  ") or die(mysqli_error());
                           
                               $count = mysqli_num_rows($query);
                              
                               if ($count == 0) {
                                ?>
                                  
                                <div class="alert alert-danger" role="alert">
                                  <strong>Ops! </strong> Please wait while your account has been activated.
                              </div>
                              <?php
                               }
                              
                                ?>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="lecturer_dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Courses</li>
                            </ol>

                            <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
                                <div class="flex mb-2 mb-sm-0">
                                    <h1 class="h2">Top 10 Rated Course</h1>
                                </div>

                                <?php
                           $id=$_SESSION['id'];
                           //var_dump($id);
                               $query=mysqli_query($conn, " SELECT * from lecturer where  status = 'Activated' and lecturer_id=$id  ") or die(mysqli_error());
                           
                               $count = mysqli_num_rows($query);
                              
                               if ($count > 0) {
                                ?>
                                  
                                  <a href="course.php" class="btn btn-success">Add course</a>
                              <?php
                               }
                              
                                ?>
                              
                            </div>

                          
                           
 
                            <div class="row">
										<?php include 'lecturer_course.php'?>
                            </div>

                           
                        </div>

            		</div>
	
<?php include 'lecturer_side.php'?>

        </div> </div> 

      <?php include '../script.php'?>
</html>








