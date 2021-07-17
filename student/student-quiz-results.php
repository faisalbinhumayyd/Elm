<?php
require '../config.php';
include '../header.php'; 
include '../dbcon.php';
?>
 
 <?php include('../session.php'); ?>
 <?php $get_id = $_GET['id']; ?>
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
					    <!-- breadcrumb -->
						<ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="fixed-student-dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Quiz</li>
								<li class="breadcrumb-item active">List of Quiz Question</li>
                            </ol>
                           

                           
						 <!-- end breadcrumb -->
   <!-- block -->
   <div class="card">
   <div class="card-body text-center">
   <div class="row">
   <div class="col-lg-6 text-left">
   <h3>List of Quiz Questions</h3>
   </div> 
 
   </div>
					
					
				
			 		
						
                     
                        <div id="block_bg" class="block">

                            <div class="navbar navbar-inner block-header">
							

									<?php 
									$id=$_SESSION['id'];

									$query = mysqli_query($conn,"select * FROM course_quiz 
												LEFT JOIN quiz on course_quiz.quiz_id = quiz.quiz_id
												LEFT JOIN course on course_quiz.lecturer_course_id = course.course_id
												LEFT JOIN student_course on student_course.course_id = course_quiz.lecturer_course_id
												where student_course.student_id = '$id'  ")or die(mysqli_error());
												$count = mysqli_num_rows($query);
									?>
                                <div id="" class="muted pull-right"><span class="badge badge-info"><?php echo $count; ?></span></div>
                            </div>
                            <div class="block-content  in">
                                <div class="span12">
										<form action="copy_file_student.php" method="post">
						
										
										<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
											<thead>
													<tr>
													<th>Quiz Title</th>
													<th>Description</th>
													<th>Quiz Time (In Minutes)</th>
													<th></th>
													</tr>
											</thead>
											<tbody>
										<?php
											$query = mysqli_query($conn,"select * FROM course_quiz 
											LEFT JOIN quiz on course_quiz.quiz_id = quiz.quiz_id
											LEFT JOIN course on course_quiz.lecturer_course_id = course.course_id
											LEFT JOIN student_course on student_course.course_id = course_quiz.lecturer_course_id
											where student_course.student_id = '$id'  order by course_quiz_id DESC ")or die(mysqli_error());
											while($row = mysqli_fetch_array($query)){
											$id  = $row['course_quiz_id'];
											$quiz_id  = $row['quiz_id'];
											$quiz_time  = $row['quiz_time'];
										
											$query1 = mysqli_query($conn,"select * from student_course_quiz where course_quiz_id = '$id' and student_id = '$session_id'")or die(mysqli_error());
											$row1 = mysqli_fetch_array($query1);
											$grade = $row1['grade'];

										?>                              
											<tr>                     
											<td><?php echo $row['quiz_title']; ?></td>
											<td><?php  echo $row['quiz_description']; ?></td>                                     
											<td><?php  echo $row['quiz_time'] / 60; ?></td>                                     
											<td width="200">
											<?php if ($grade == ""){ ?>
												<a  data-placement="bottom" title="Take This Quiz" id="<?php echo $id; ?>Download" href="take_test.php<?php echo '?id='.$get_id ?>&<?php echo 'course_quiz_id='.$id; ?>&<?php echo 'test=ok' ?>&<?php echo 'quiz_id='.$quiz_id; ?>&<?php echo 'quiz_time='.$quiz_time;	 ?>"><i class="icon-check icon-large"></i> Take This Quiz</a>
											<?php }else{ ?>
											<b>Already Taken Score <?php echo $grade; ?></b>
											<?php } ?>
											</td>            
															<script type="text/javascript">
															$(document).ready(function(){
																$('#<?php echo $id; ?>Take This Quiz').tooltip('show');
																$('#<?php echo $id; ?>Take This Quiz').tooltip('hide');
															});
															</script>										 
															</tr>
											<?php } ?>
											</tbody>
										</table>
										</form>
                                </div>
                            </div>
						</div>
						 </div>
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