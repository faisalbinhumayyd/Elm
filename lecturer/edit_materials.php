<?php
require '../config.php';
include '../header.php';
include '../dbcon.php';
?>

 <?php include '../session.php';?>
 <script src="<?php echo ASSETS; ?>/js/jquery-1.9.1.min.js"></script>
 <link href="<?php echo ASSETS; ?>/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
 <script src="<?php echo ASSETS; ?>/jGrowl/jquery.jgrowl.js"></script>
 <?php $get_id = $_GET['id']; ?>
<?php $file_id = $_GET['file_id']; ?>


<!DOCTYPE html>
<html lang="en"
      dir="ltr">
    <body class=" layout-fluid">

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <?php include 'lecturer_header.php'?>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">

                        <div class="container-fluid page__container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="lecturer_dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">edit Materials
								</li>
                            </ol>
							
                            
							<div class="row">
									<div class="col-lg-12 card">
										<?php include 'edit_materials_form.php'?>
									</div>
								</div>
							<div class="row">
							<div class="col-lg-12 card">
								
											<div class="span6" id="content">
												<div class="row-fluid">
													

													<!-- block -->
													<div id="block_bg" class="block">
														
														<div class="tab-content card-body">
															<div id="downloadable_table.php" class="span12">



																	<form  method="post">

																		<table cellpadding="0" cellspacing="0" border="0" class="table" id="">

																			<thead>
																					<tr>
																					<th>Date Upload</th>
																					<th>File Name</th>
																					<th>Description</th>
																					<th>Uploaded by</th>
																					<th>Action</th>


																					</tr>

																			</thead>
																			<tbody>

																		<?php
																			$query = mysqli_query($conn, "select * FROM files where course_id = '$get_id'  ") or die(mysqli_error());
																			while ($row = mysqli_fetch_array($query)) {
																				$id = $row['file_id'];
																				?> 
																			<tr id="del<?php echo $id; ?>">

																			<td><?php echo $row['fdatein']; ?></td>
																			<td><?php echo $row['fname']; ?></td>
																			<td><?php echo $row['fdesc']; ?></td>
																			<td><?php echo $row['uploaded_by']; ?></td>
																			<td width="10%">
																				<div class=col-lg-12" style="margin-bottom: 5%;">
																				<button style="    margin-left: 14%;" class="btn btn-info ">
																					<a  data-placement="bottom" title="Download" id="<?php echo $id; ?>download" href="<?php echo $row['floc']; ?>"> <i style="color: #fff;"  class="material-icons">get_app	</i></a>
																					</button>
																				</div>
				
																				<div class="col-lg-12" style="margin-bottom: 5%;">
																					<a 	href="edit_materials.php<?php echo '?id='.$get_id; ?>&<?php echo 'file_id='.$id; ?>"   class="btn btn-success "  ><i  class="material-icons">edit</i></a>
																				</div>


																				<div class="col-lg-12" style="margin-bottom: 5%;">
																					<button   id="<?php echo $id; ?>" class="btn btn-danger remove" data-dismiss="modal" aria-hidden="true"><i  class="material-icons">delete</i></button>
																					
																				</div>
																			</td>


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

																			</tr>

																		<?php }?>
																		</tbody>
																		</table>
																	</form>



															</div>
														</div>


														</div>
													

													</div>
													<!-- /block -->
												</div>
											</div>

							


										</div>
									</div>

		</div>

<?php include 'lecturer_side.php'?>

        </div>

	

             

</div>
</div>
<?php  include '../script.php' ?>







      <?php include '../script.php'?>
	  <script type="text/javascript">
												$(document).ready( function() {


													$('.remove').click( function() {

													var id = $(this).attr("id");
														$.ajax({
														type: "POST",
														url: "delete_file.php",
														data: ({id: id}),
														cache: false,
														success: function(html){
														$("#del"+id).fadeOut('slow', function(){ $(this).remove();});
														$('#'+id).modal('hide');
														$.jGrowl("Your Post is Successfully Deleted", { header: 'Data Delete' });

														}
														});

														return false;
													});
												});

											</script>
</html>
