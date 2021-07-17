
<?php
require '../config.php';
include '../header.php';
include '../dbcon.php';
?>



<?php include('session.php'); ?>


<!DOCTYPE html>
<html lang="en"
      dir="ltr">


      <body class=" layout-fluid">


<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">

    <!-- Header -->
    <?php include 'admin_header.php' ?>

    <!-- // END Header -->

    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content">

        <div data-push
             data-responsive-width="992px"
             class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content page ">

                <div class="container-fluid page__container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>Course List</h1>

                    <div class="card border-left-3 border-left-primary card-2by1">
                        <div class="card-body">
                      
                        <form action="delete_course.php" method="post">

                        <a href="delete_course"
                                       data-toggle="modal"
                                       data-target="#delete_"
                                       class="btn btn-danger"><i class="material-icons btn__icon--left">delete</i></a>



  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
								
                                
										<thead>
										    <tr>
                                    <th></th>
                                  
                                  
                                    <th>course name</th>
                                    
                                    <th>avtion</th>


                                </tr>
										</thead>
										<tbody>
												 <?php
                    $course_query = mysqli_query($conn,"select * from course") or die(mysqli_error());
                    while ($row = mysqli_fetch_array($course_query)) {
                    $id = $row['course_id'];

                        ?>
                    <tr>
                        <td width="30">
                        <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                        </td>

                    <td><a href="student-courses.php" class="d"> <?php echo $row['course_name'] ?></a> </td> 


                                    <td>
                                    <div class="col-lg-12" style="margin-bottom: 5%;">
																				<button style="    margin-left: 14%;" class="btn btn-info ">
																					<a  data-placement="bottom" title="Download" id="<?php echo $id; ?>download" href="<?php echo $row['floc']; ?>"> <i style="color: #fff;"  class="material-icons">get_app	</i></a>
																					</button>
																				</div>
</td>
									
                                </tr>
                            <?php } ?>

                          
                               
										</tbody>
									</table>
								

                        </div>
                    </div>
            

                </div>

            </div>
<?php include 'admin_side.php'?>

        </div>     </div>     </div>    

      <?php include '../script.php'?>

    									<!-- student delete modal -->
                           
                           
                                        <div class="modal fade "  id="delete_">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title">delete course</h4>
                        <button type="button"
                                class="close "
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        
                    </div>
                    <div class="modal-body">
                    
                            <div class="form-group row mb-0">
                            <p class="modal-title ">Are you sure to delete this ?</p>
                                <div class="col-md-8 offset-md-3">
                                
                                <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Close</button>
				<button name="delete_course" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
                                </div>
                            </div>
                    
                    </div>
                </div>
            </div>
        </div>

        </form>
</html>