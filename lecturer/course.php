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

		<div data-push  data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
			<div class="mdk-drawer-layout__content page " style="transform: translate3d(0px, 0px, 0px);">

				<div class="container-fluid page__container">
						<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="lecturer_dashboard.php">Home</a></li>
						<li class="breadcrumb-item active">Course Manager</li>
						</ol>
						<h1 class="h2">Course Manager</h1>
					<div class="row">
						<div class="col-lg-6">
							<div class="card">
								<div  class="tab-content card-body">
								
									<form action="delete_course.php" method="post">
										<!-- Course List-->
										<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
										<!-- delete Course -->
														<?php include('modal_delete.php'); ?>
										<thead>
											<tr>
														<th></th>
														<th>Course list</th>
														<th></th>
											</tr>
											</thead>
											<tbody>
											<?php
											
											$id=$_SESSION['id'];
											$course_query = mysqli_query($conn,"SELECT * from course where add_by  =  '$id' order by course_id DESC	")or die(mysqli_error("error connexion"));
											$count = mysqli_num_rows($course_query);
                                            if ($count > 0) {
                                                while ($course_row = mysqli_fetch_array($course_query)) {
                                                    $id = $course_row['course_id']; ?>
													
											<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $course_row['course_name']; ?></td>
											
												<td width="40"><a href="edit_course.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="material-icons btn__icon--left">edit</i></a>
												 
												</td>
											</tr>
											
											<?php
                                                }
                                            }
										 else{
											 ?>
											 
											<tr>
											<td >
											<p>No Courses Found</p>
											</td>
										
											 
											</td>
										</tr>
										<?php	
										 } ?>
								
								
											</tbody>
										</table>
									</form>
                            
                                </div>
							</div>
						</div>
						<!-- Course List End-->
						<!-- Add Course -->
						<div class="col-lg-6">
							
									<div class="span3" id="adduser">
										<?php include('add_course.php'); ?>		   		 	
									</div>
								
							
						</div>
						<!-- Add Course End -->
					</div>
				</div>
			</div>
		









 


                         <?php include 'lecturer_side.php'?>
        </div>
 
	
	
		<?php include '../script.php' ?>
    </body>

	

</html>