
   <div class="card-header">

   <div class="row">
   <div class="col-lg-6">  <h2>Edit Course Material</h2></div>
   <div class="col-lg-6"  style="text-align: right;    margin-top: 1%;">
   <a href="course.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Course</a></div>
   </div>
 
                                                </div>

                        <!-- block -->
                        <div class="card-body">
                          
							<?php
                             $id=$_SESSION['id'];
							$query = mysqli_query($conn,"select * from files where file_id = '$file_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?> 
                            <div class="">
                                <div class="">
								<form method="post">
                                <div class="form-group row">
                                                            <label for="quiz_title" class="col-sm-3 col-form-label form-label">file Title:</label>
                                                            <div class="col-sm-9">
                                                            <input name="fname" value="<?php echo $row['fname']; ?>" class="form-control" id="focusedInput" type="text" placeholder = "file Name" required>
                                                            </div>
                                                        </div>
														<div class="form-group row">
                                                            <label for="quiz_title" class="col-sm-3 col-form-label form-label">description Title:</label>
                                                            <div class="col-sm-9">
                                                            <input name="fdesc" value="<?php echo $row['fdesc']; ?>" class="form-control" id="focusedInput" type="text" placeholder = "description" required>
                                                            </div>
                                                        </div>
										
                                       
                                        <div class="form-group row mb-0">
                                            <div class="col-sm-9 offset-sm-3">
												<button name="update" class="btn btn-success">save</button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                    
                        <!-- /block -->
                    </div><?php
if (isset($_POST['update'])){
$fname = $_POST['fname'];
$fdesc = $_POST['fdesc'];

mysqli_query($conn,"update files set fname = '$fname', fdesc = '$fdesc' where file_id = '$file_id' ")or die(mysqli_error());
?>

<script>
window.location = "downloadable.php<?php echo '?id='.$get_id; ?>";
</script>
<?php

}
?>