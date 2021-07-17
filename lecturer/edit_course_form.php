   <div class="card">
   <div class="card-header">
   <div class="row">
   <div class="col-lg-6">
   <h4>Edit course</h4>
   </div>
   <div style="text-align: right;" class="col-lg-6">
   <a href="course.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Course</a>
   </div>
   </div>

 
                                                </div>

                        <!-- block -->
                        <div class="card-body">
                          
							<?php
                             $id=$_SESSION['id'];
							$query = mysqli_query($conn,"select * from course where course_id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?> 
                            <div class="">
                                <div class="">
								<form method="post" action="" enctype="multipart/form-data">
                                <div class="form-group row">
                                                            <label for="quiz_title" class="col-sm-3 col-form-label form-label">course Title:</label>
                                                            <div class="col-sm-9">
                                                            <input name="course_name" value="<?php echo $row['course_name']; ?>" class="form-control" id="focusedInput" type="text" placeholder = "course Name" required>
                                                            </div>

                                                            <div class="media align-items-center">
															<div class="media-left">
																<div class="icon-block rounded">
																	<i class="material-icons text-muted-light md-36">photo</i>
																</div>
															</div>
															<div class="media-body">
																<div class="custom-file" style="width: auto;">
																	<input type="file" id="fileInput" name="image" class="custom-file-input" required=""> 
																	<label for="avatar" class="custom-file-label">Choose file</label>
																</div>
															</div>

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
                        </div>
                        <!-- /block -->
                    </div><?php
if (isset($_POST['update'])){
$course_name = $_POST['course_name'];

$location = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$location_name = addslashes($_FILES['image']['name']);
$location_size = getimagesize($_FILES['image']['tmp_name']);

move_uploaded_file($_FILES["image"]["tmp_name"], "../avatar_course/uploads/" . $_FILES["image"]["name"]);
$location =  $_FILES["image"]["name"];
mysqli_query($conn,"UPDATE course
set course_name = '$course_name', location='$location'
 where course_id = '$get_id' ")or die(mysqli_error());
?>

<?php

}
?>