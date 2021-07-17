
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
                    </ol>
                    <h1 class="h2">Lecturer List</h1>

                    <div class="card border-left-3 border-left-primary card-2by1">
                        <div class="card-body">
                      
                        <form action="delete_lecturer.php" method="post">

                        <a href="delete_lecturer"
                                       data-toggle="modal"
                                       data-target="#editQuiz"
                                       class="btn btn-danger"><i class="material-icons btn__icon--left">delete</i></a>



  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
								
                                
										<thead>
										    <tr>
                                    <th></th>
                                  
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>national Id</th>

                                    <th>action</th>
                                </tr>
										</thead>
										<tbody>
												 <?php
                                    $lecturer_query = mysqli_query($conn,"select * from lecturer") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($lecturer_query)) {
                                    $id = $row['lecturer_id'];
                                    $lecturer_stat = $row['status'];
                                        ?>
									<tr>
										<td width="30">
										<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>

                                    <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
                                    <td><?php echo $row['username']; ?></td> 
                                    <td><?php echo $row['email']; ?></td> 


									<td width="50">
                                    
                                    </td>
                                    <td width="50">
                                    
                                    </td>
									<?php if ($lecturer_stat == 'Activated' ){ ?>
                                        <td width="120"><a href="de_activate.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="icon-check"></i>Deactivate </a></td>		
								
									<?php }elseif ($lecturer_stat == 'Deactivate' ) { ?>
                                        <td width="120"><a href="activate.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-remove"></i> Activated</a></td>
											
									<?php } ?>
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
                           
                           
                                        <div class="modal fade "  id="editQuiz">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title text-white">Edit Question</h4>
                        <button type="button"
                                class="close text-white"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-3">
                                <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Close</button>
				<button name="delete_lecturer" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
                                </div>
                            </div>
                    
                    </div>
                </div>
            </div>
        </div>

        </form>
</html>