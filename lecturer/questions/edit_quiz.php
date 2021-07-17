<?php
require '../../config.php';
include '../../header.php';
include '../../dbcon.php';
?>



<?php include('../../session.php'); ?>
<?php $get_id = $_GET['id']; ?>

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
                                    <h4 class="card-title">Basic</h4>
                                </div>
                                <div class="card-body">
								<?php
								$query = mysqli_query($conn,"select * from quiz where quiz_id = '$get_id'")or die(mysqli_error());
								$row  = mysqli_fetch_array($query);
								
								?>
                                    <form method="post">
                                        <div class="form-group row">
                                            <label for="quiz_title" class="col-sm-3 col-form-label form-label">Quiz Title:</label>
                                            <div class="col-sm-9">
											<input type="hidden" name="quiz_id" value="<?php echo $row['quiz_id']; ?>" id="inputEmail" placeholder="Quiz Title">
											<input id="quiz_title" type="text" class="form-control" placeholder="Title"  name="quiz_title" value="<?php echo $row['quiz_title']; ?>">
                                            </div>
                                        </div>
                                      

                                    
										<div class="form-group row">
                                            <label for="quiz_title" class="col-sm-3 col-form-label form-label">Quiz Title:</label>
                                            <div class="col-sm-9">
                                                <input id="quiz_title" type="text" class="form-control" placeholder="description"  name="description"  value="<?php echo $row['quiz_description']; ?>">
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
										$quiz_id = $_POST['quiz_id'];
										$quiz_title = $_POST['quiz_title'];
										$description = $_POST['description'];
										mysqli_query($conn,"update quiz set quiz_title = '$quiz_title',quiz_description = '$description' where quiz_id = '$quiz_id'")or die(mysqli_error());
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
		<?php include 'lecturer_side.php'?>

</div> </div>

<?php include '../../script.php'?>
</html>

 

