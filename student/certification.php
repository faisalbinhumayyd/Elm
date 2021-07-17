
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






<div class="mdk-drawer-layout__content page " style="transform: translate3d(0px, 0px, 0px);">

                        <div class="container-fluid page__container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="student-dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Quiz Results</li>
                            </ol>
							<a  id="print" onclick="window.print()"  class="btn btn-warning"><i class="" ></i> Print </a>
                            <div class="card">
							
							<?php $query = mysqli_query($conn,"select a.*, b.* ,c.*, s.* from student_course_quiz a
													LEFT JOIN student s ON  a.student_id = s.student_id 
													LEFT JOIN course_quiz b ON  a.course_quiz_id = b.course_quiz_id 
													LEFT JOIN course c ON  b.lecturer_course_id = c.course_id 
													where a.student_id = '$session_id' 
													")or die(mysqli_error());
													$count = mysqli_num_rows($query);
												?>
												
											<?php
													if ($count != '0'){
													while($row = mysqli_fetch_array($query)){
													$id = $row['student_course_quiz_id'];	
													$id_c = $row['course_id'];
												?>
                                <div class="card-header">
                                    <h4 class="card-title text-center">Certification </h4>
                                </div>
                                <div class="card-body media align-items-center">
                                    <div class="media-body">
                                   <div>
								   <h4 class="text-left"> Name : <?php echo $row['username']; ?>  </h4>
								   <h6 class="text-left"> Has Successfully completed the course :   </h6>
								   <h4 class="text-center"> <?php echo $row['course_name']; ?>  </h4>
								   </div>
								   
								   
                                    </div>
                                   
                                </div>
								<?php } ?>
										<?php }
                                        else{ ?>
                               <td> Not yet, take quiz first to get results, And Print Certification</td> 

<?php } ?>
                            </div>
                           
                        </div>

                    </div>



                    </div>
                        <!-- /block -->
                    

<?php include 'student_side.php'?>
</div>
<?php include '../script.php'?>


</body>

</html>