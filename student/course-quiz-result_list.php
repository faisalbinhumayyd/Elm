
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
                           
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Result</h4>
                                </div>
                                <div class="card-body media align-items-center">
                                    <div class="media-body">
                                    <form  method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
										
									<thead>
										  <tr>
												
													<th>Course</th>
													<th>action</th>
										   </tr>
										</thead>
										<tbody>


										<?php $query = mysqli_query($conn,"select a.*, b.* ,c.*, count(b.lecturer_course_id) as lc,  count(b.lecturer_course_id) as lc from student_course_quiz a
													
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
										<tr>
										
									
										
										
											<td><?php echo $row['course_name']; ?></td> 
										
		
                                        <td width="120">
                                      
                                        
                                                 <div class="row">
                                                <a href="certification.php" style="width: 200px; margin-bottom:10%" class="btn btn-success"><i class="" ></i> Print Certification</a>
                                                </div>
                                                <div class="row ">
                                                <a   style="width: 200px;" href="student_quiz_list.php<?php echo '?id='.$id_c; ?>" class="btn btn-info"><i class="icon-remove"></i> Result</a></td>

                                                </div>
                                        
                                      
                                      
                                     
									
										</tr>
										
										<script type="text/javascript">
																							$(document).ready(function(){
																								$('#<?php echo $id; ?>download').tooltip('show');
																								$('#<?php echo $id; ?>download').tooltip('hide');
																							});
																							</script>
																							<script type="text/javascript">
																							$(document).ready(function(){
																								$('#<?php echo $id; ?>remove').tooltip('show');
																								$('#<?php echo $id; ?>remove').tooltip('hide');
																							});
																							</script>
										<?php } ?>
										<?php }
                                        else{ ?>
                               <td> Not yet, take quiz first to get results, And Print Certification</td> 

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
                        <!-- /block -->
                    

<?php include 'student_side.php'?>
</div>
<?php include '../script.php'?>


</body>

</html>