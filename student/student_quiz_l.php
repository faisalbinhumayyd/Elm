<?php
require '../config.php';
include '../header.php'; 
include '../dbcon.php';
?>
 
 <?php include('../session.php'); ?>
 <?php $get_id = $_GET['id']; ?>
<?php $course_quiz_id = $_GET['course_quiz_id']; ?>
<?php $quiz_id = $_GET['quiz_id']; ?>
<?php $quiz_time = $_GET['quiz_time']; ?>


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
                                <li class="breadcrumb-item"><a href="fixed-student-dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Quiz</li>
                            </ol>
                            <div class="card-group">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h4 class="mb-0"><strong>25</strong></h4>
                                        <small class="text-muted-light">TOTAL</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h4 class="text-success mb-0"><strong>3</strong></h4>
                                        <small class="text-muted-light">CORECT</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h4 class="text-danger mb-0"><strong>5</strong></h4>
                                        <small class="text-muted-light">WRONG</small>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h4 class="text-primary mb-0"><strong>17</strong></h4>
                                        <small class="text-muted-light">LEFT</small>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
							<?php $query1 = mysqli_query($conn,"select * from student_course_quiz where student_id = '$session_id' and course_quiz_id = '$course_quiz_id' ")or die(mysqli_error());
	  $count = mysqli_num_rows($query1);
?>

<?php
if ($count > 0){
}else{
 mysqli_query($conn,"insert into student_course_quiz (course_quiz_id,student_id,student_quiz_time) values('$course_quiz_id','$session_id','$quiz_time')");
}
 ?>
 	<?php $course_query = mysqli_query($conn,"select * from lecturer_course
										LEFT JOIN course ON course.course_id = lecturer_course.course_id
										
										where lecturer_course.course_id = '$get_id'")or die(mysqli_error());
										$course_row = mysqli_fetch_array($course_query);
										$course_id = $course_row['course_id'];
							
										?>

                                <div class="card-header">
                                    <div class="media align-items-center">
                                        <div class="media-left">
                                            <h4 class="mb-0"><strong>#9</strong></h4>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="card-title">
											<?php echo $course_row['course_name']; ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input id="customCheck01" type="checkbox" class="custom-control-input">
                                            <label for="customCheck01" class="custom-control-label">git push</label>
                                        </div>
                                    </div>
                                   
                                   
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-white">Skip</a>
                                    <a href="#" class="btn btn-success float-right">Submit <i class="material-icons btn__icon--right">send</i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="mdk-drawer js-mdk-drawer" data-align="end" data-position="right" data-domfactory-upgraded="mdk-drawer" data-persistent="" data-opened=""><div class="mdk-drawer__scrim" style=""></div>
                        <div class="mdk-drawer__content " style="">
                            <div class="sidebar sidebar-right sidebar-light bg-white o-hidden ps" data-perfect-scrollbar="">
                                <div class="sidebar-p-y">
                                    <div class="sidebar-heading">Time left</div>
                                    <div class="countdown sidebar-p-x" data-value="4" data-unit="hour"><p class="pl-1 pr-1"><span class="h5 text-primary">03</span> hrs <span class="h5 text-primary">59</span> min <span class="h5 text-primary">35</span> sec</p></div>

                                    <div class="sidebar-heading">Pending</div>
                                    <ul class="list-group list-group-fit">
								
                                        <li class="list-group-item active">
                                            <a href="#">
                                                <span class="media align-items-center">
                                                    <span class="media-left">
                                                        <span class="btn btn-white btn-circle">#9</span>
                                                    </span>
                                                    <span class="media-body">
                                                        Github command to deploy comits?
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                      
                                    </ul>
                                </div>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                        </div>
                    </div>

                </div>




						</div>

                         <?php include 'student_side.php'?>
        </div>



    </body>

</html>