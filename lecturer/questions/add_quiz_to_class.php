<?php
require '../../config.php';
include '../../header.php';
include '../../dbcon.php';
?>



<?php include('../../session.php'); ?>


<!DOCTYPE html>
<html lang="en"
      dir="ltr">


      <body class=" layout-fluid">


<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">

    <!-- Header -->
	<?php include('lecturer_header.php'); ?>

    <!-- // END Header -->
		
         <!-- Header Layout Content -->
    <div class="mdk-header-layout__content">

        <div data-push
             data-responsive-width="992px"
             class="mdk-drawer-layout js-mdk-drawer-layout">
			 <div class="mdk-drawer-layout__content page " style="transform: translate3d(0px, 0px, 0px);">
			 <div class="container-fluid page__container">
			 <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add quiz to class</h4>
                                </div>
                                <div class="card-body">
								<?php  $query = mysqli_query($conn,"select * from quiz where lecturer_id = '$session_id'")or die(mysqli_error());
																
																$count = mysqli_num_rows($query);
																
                                                                if ($count > 0) {
                                                                    ?>

									    		<form class="form-horizontal" method="post">
														<div class="control-group">
													
															<label class="control-label" for="inputEmail">quiz to course</label>
															<div class="controls">
															<select name="quiz_id">
															<option></option>
														<?php
                                                                    while ($row = mysqli_fetch_array($query)) {
                                                                        $id = $row['quiz_id']; ?>
																<option value="<?php echo $id; ?>"><?php echo $row['quiz_title']; ?></option>
																<?php
                                                                    } ?>
															</select>
															</div>
														</div>
														<div class="control-group">
															<label class="control-label" for="inputPassword">Test Time (in minutes)</label>
															<div class="controls">
															<input type="text" class="span3" name="time" id="inputPassword" placeholder="Test Time" required>
															</div>
														</div>
						
																<table class="table" id="question">
													<th></th>
													<th>course</th>
												
													<th></th>
													
													<tbody>
														<?php $query = mysqli_query($conn, "select * from course
													
														
														where add_by = '$session_id'  ")or die(mysqli_error());
                                                                    $count = mysqli_num_rows($query);
                                                        

                                                                    while ($row = mysqli_fetch_array($query)) {
                                                                        $id = $row['course_id']; ?>
														<tr>
														<td width="30">
															<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td><?php echo $row['course_name']; ?></td>
														
														</tr>
														<?php
                                                                    } ?>
													</tbody>
													</table>
		
												
													<div class="control-group">
														<div class="controls">
														
														<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> Save</button>
														</div>
														</div>
											</form>
											
																	<?php
                                                                }	else{
															?>
													<p >Please add the Quizzes first</p>
<a href="add_quiz.php" class="btn btn-success mr-2">Add quiz</a>
													<?php
													} ?>
									
										
											<?php
											if (isset($_POST['save'])){
												$quiz_id = $_POST['quiz_id'];
												$time = $_POST['time'] * 60;
												$id=$_POST['selector'];
												
														$name_notification  = 'Add Practice Quiz file';
														
												$N = count($id);
												for($i=0; $i < $N; $i++)
												{
													mysqli_query($conn,"insert into course_quiz (lecturer_course_id,quiz_time,quiz_id) values('$id[$i]','$time','$quiz_id')")or die(mysqli_error());
												
												} ?>
												<script>
													window.location = 'lecturer_quiz.php';
												</script>
												<?php
											}
											?>	
                                </div>
                            </div>



			 </div>
	


			
	
        </div>
		<?php include 'lecturer_side.php'?>

</div> </div>

<?php include '../../script.php'?>
</html>

 