                                           
                                           
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">add course</h4>
                                                </div>
                                                <div class="card-body">
                                                    <form method="post" id="add_downloadble" action="" enctype="multipart/form-data">

                                                        <div class="form-group row">
                                                            <label for="quiz_title" class="col-sm-3 col-form-label form-label">course Title:</label>
                                                            <div class="col-sm-9">
                                                        
                                                                <input name="course_name" class="form-control" id="focusedInput" type="text" placeholder = "course Name" required>
                                                            </div>
                                                        </div>
                                                        <div class="media align-items-center">
															<div class="media-left">
																<div class="icon-block rounded">
																	<i class="material-icons text-muted-light md-36">photo</i>
																</div>
															</div>
															<div class="media-body">
																<div class="custom-file" style="width: auto;">
																	<input type="file" id="fileInput" name="location" class="custom-file-input" required=""> 
																	<label for="avatar" class="custom-file-label">Choose file</label>
																</div>
															</div>

														 </div>
                                                       
                                                        <div class="form-group row mb-0">
                                                            <div class="col-sm-9 offset-sm-3">
                                                                <button name="save" type="submit" class="btn btn-info">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
   <?php
if (isset($_POST['save'])) {
    $course_name = $_POST['course_name'];
    $location = addslashes(file_get_contents($_FILES['location']['tmp_name']));
    $location_name = addslashes($_FILES['location']['name']);
    $location_size = getimagesize($_FILES['location']['tmp_name']);

    move_uploaded_file($_FILES["location"]["tmp_name"], "../avatar_course/uploads/" . $_FILES["location"]["name"]);
    $location =  $_FILES["location"]["name"];


    $query=mysqli_query($conn, " SELECT * from lecturer where status = 'Activated'") or die(mysqli_error());

    $count = mysqli_num_rows($query);
    //var_dump($count);
    if ($count > 0) {
        $id=$_SESSION['id'];
        mysqli_query($conn, "INSERT into course (course_name, location, add_by) values('$course_name' ,'$location', '$id'   )")or die(mysqli_error()); 
        ?>

<script>
alert("course added succesfully ")
</script>
        <?php

    }
    else{
  
        echo'error while upload file';
    }
}



?>
	
