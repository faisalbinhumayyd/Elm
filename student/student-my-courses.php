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
                       
                            <div class="card">
                                <div  class="tab-content card-body">
						
								<form  method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
										
									<thead>
										  <tr>
												
													<th>Course</th>
													<th>action</th>
										   </tr>
										</thead>
										<tbody>


										<?php $query = mysqli_query($conn,"	SELECT * from student_course
														LEFT JOIN student ON student.student_id = student_course.student_id
														LEFT JOIN course ON course.course_id = student_course.course_id
														where student_course.student_id = '$session_id' 
														")or die(mysqli_error());
														$count = mysqli_num_rows($query);
													?>
													
												<?php
														if ($count != '0'){
														while($row = mysqli_fetch_array($query)){
														$id = $row['student_course_id'];	
														$id_c = $row['course_id'];
													?>

									
												 
										<tr>
										
									
										
										
											<td><?php echo $row['course_name']; ?></td> 
										
		
                                        <td width="120"><a href="materials_list.php<?php echo '?id='.$id_c; ?>" class="btn btn-info"><i class="icon-remove"></i> get course</a></td>
											
									
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
										<?php } ?>
                               
										</tbody>
									</table>
									</form>
                            
                                </div>
                            </div> 
                        </div>

                    </div>

                         <?php include 'student_side.php'?>
        </div>


	
		<?php include '../script.php' ?>
    </body>

</html>