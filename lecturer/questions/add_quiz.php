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


			 <div class="container-fluid page__container" id="content">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
									<li class="breadcrumb-item active">Quizzes</li>
								</ol>

								<div  id="block_bg"  class="media align-items-center mb-headings">
									<div class="media-body">
										<h1 class="h2">Add Quizzes</h1>
									</div>
								
								</div>

							
							

								<div class="card-columns row">

									<div class="card ">
										<div class="card-body ">
											
									    <form  method="post">

										<div class="form-group row">
                                            <label for="quiz_title" class="col-sm-3 col-form-label form-label">Quiz Title:</label>
                                            <div class="col-sm-9">
											<input type="text" class="form-control" name="quiz_title" id="inputEmail" placeholder="Quiz Title">
										
										 </div>
                                        </div>

										<div class="form-group row">
                                            <label for="quiz_title" class="col-sm-3 col-form-label form-label">Quiz Description:</label>
                                            <div class="col-sm-9">
											<input type="text"  class="form-control" name="description" id="inputPassword" placeholder="Quiz Description" required>
										
										
										 </div>
                                        </div>
                                      
										<div class="form-group row mb-0">
                                            <div class="col-sm-9 offset-sm-3">
											<button name="save" type="submit" class="btn btn-success"><i class="icon-save"></i> Save</button>
                                               
                                            </div>
                                        </div>

																			
										
										</form>									
										<?php
										if (isset($_POST['save'])){
										$quiz_title = $_POST['quiz_title'];
										$description = $_POST['description'];
										mysqli_query($conn,"insert into quiz (quiz_title,quiz_description,date_added,lecturer_id) values('$quiz_title','$description',NOW(),'$session_id')")or die(mysqli_error());
										?>
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
                            </div>
             
                        <!-- /block -->
            
			<?php include 'lecturer_side.php'?>

</div> </div> </div>

<?php include '../../script.php'?>
</html>

 