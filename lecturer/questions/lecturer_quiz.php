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
				<?php
                           $id=$_SESSION['id'];
                           //var_dump($id);
                               $query=mysqli_query($conn, " SELECT * from lecturer where  status = 'Activated' and lecturer_id=$id  ") or die(mysqli_error());
                           
                               $count = mysqli_num_rows($query);
                              
                               if ($count == 0) {
                                ?>
                                  
                                <div class="alert alert-danger" role="alert">
                                  <strong>Ops! </strong> Please wait while your account has been activated.
                              </div>
                              <?php
                               }
                              
                                ?>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
									<li class="breadcrumb-item active">Quizzes</li>
								</ol>

								<div  id="block_bg"  class="media align-items-center mb-headings">
									<div class="media-body">
										<h1 class="h2">Quizzes</h1>
									</div>
									<?php
                           $id=$_SESSION['id'];
                           //var_dump($id);
                               $query=mysqli_query($conn, " SELECT * from lecturer where  status = 'Activated' and lecturer_id=$id  ") or die(mysqli_error());
                           
                               $count = mysqli_num_rows($query);
                              
                               if ($count > 0) {
                                ?>
                                  
								  <div class="media-right d-flex align-items-center">
										<a href="add_quiz.php" class="btn btn-success mr-2">Add quiz</a>
										<div class="dropdown">
										
											<a href="add_quiz_to_class.php" class="btn btn-info"><i class="icon-plus-sign"></i> Add Quiz to Course</a>
										</div>
									</div>
                              <?php
                               }
                              
                                ?>
									
								</div>

								<form action="delete_quiz.php" method="post">
								<?php
											$query = mysqli_query($conn,"select * FROM quiz where lecturer_id = '$session_id'  order by date_added DESC ")or die(mysqli_error('error connexion'));
											
											$count = mysqli_num_rows($query);
                                            if ($count > 0) {
                                                while ($row = mysqli_fetch_array($query)) {
                                                    $id  = $row['quiz_id']; ?>        

								<div class="card-columns row">

									<div class="card col-lg-12">
										<div class="card-body media">
											
											<div class="media-body">
											<div class="row">
											<div class="col-lg-6">
											<h4 class="card-title mb-0">
											
											<?php
                           $id=$_SESSION['id'];
                           //var_dump($id);
                               $query2=mysqli_query($conn, " SELECT * from lecturer where  status = 'Activated' and lecturer_id=$id  ") or die(mysqli_error());
                           
                               $count2 = mysqli_num_rows($query2);
                              
                               if ($count2 > 0) {
                                ?>
                                  
								  <a  href="quiz_question.php<?php echo '?id='.$id; ?>">
                              <?php
                               }
                              
                                ?>
											
											
											
											<?php echo $row['quiz_title']; ?></a></h4>
											</div>
											<div style="text-align: right;" class="col-lg-6">
									
											<small class="text-muted"><?php echo $row['date_added']; ?></small>
											</div>
											</div> 
											
												<small class="text-muted"><?php  echo $row['quiz_description']; ?></small>
											
											</div>
										</div>
										<?php
                           $id=$_SESSION['id'];
                           //var_dump($id);
                               $query2=mysqli_query($conn, " SELECT * from lecturer where  status = 'Activated' and lecturer_id=$id  ") or die(mysqli_error());
                           
                               $count2 = mysqli_num_rows($query2);
                              
                               if ($count2 > 0) {
                                ?>
                                <div class="card-footer text-center">
											<a href="quiz_question.php<?php echo '?id='.$id; ?>" class="btn btn-white btn-sm float-left"><i class="material-icons btn__icon--left">playlist_add_check</i> Questions <span class="badge badge-dark ml-2"></span></a>
											<a  href="edit_quiz.php<?php echo '?id='.$id; ?>" class="btn btn-default btn-sm float-right"><i class="material-icons btn__icon--left">edit</i> Edit </a>
											<div class="clearfix"></div>
										</div>
                              <?php
                               }
                              
                                ?>
										
									</div>
								
								
								</div>

							<?php
                                                }
                                            }
											else{

												?>
											


	<div class=" card col-lg-12 card-body media">
												<p>No Quiz Found</p>
	</div>
<?php
											} ?>
						</form>

											
					</div>
				
				</div>
				<?php include 'lecturer_side.php'?>

	</div> </div> </div> </div> 

	<?php include '../../script.php'?>
</html>

 