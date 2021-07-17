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
                       
                            <div class="card">
                                <div  class="tab-content card-body">
						
								<form  method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
										
									<thead>
										  <tr>
												
													<th>Course</th>
													<th>action</th>
										   </tr>
										</thead>
										<tbody>


										<?php $query = mysqli_query($conn,"select * from course
														
												
														 
														")or die(mysqli_error());
														$count = mysqli_num_rows($query);
													?>
													
												<?php
														if ($count != '0'){
														while($row = mysqli_fetch_array($query)){
													
														$id_c = $row['course_id'];
													?>

									
												 
										<tr>
										
									
										
										
											<td><?php echo $row['course_name']; ?></td> 
										
		
                                        <td width="120"><a href="materials_list.php<?php echo '?id='.$id_c; ?>" class="btn btn-info">review course</a></td>
											
									
										</tr>
										
										<script type="text/javascript">
																							$(document).ready(function(){
																								$('#<?php echo $id; ?>download').tooltip('show');
																								$('#<?php echo $id; ?>download').tooltip('hide');
																							});
																							</script>
																							<script type="text/javascript">
																							$(document).ready(function(){
																								$('#<?php echo $id; ?>remove').tooltip('show');
																								$('#<?php echo $id; ?>remove').tooltip('hide');
																							});
																							</script>
										<?php } ?>
										<?php } ?>
                               
										</tbody>
									</table>
									</form>
                            
                                </div>
                            </div> 
                        </div>

                    </div>

                         <?php include 'admin_side.php'?>
        </div>


	
		<?php include '../script.php' ?>
    </body>

</html>