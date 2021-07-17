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

			

			 <div class="container-fluid page__container" id="content">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
									<li class="breadcrumb-item active">QUESTION</li>
								</ol>

								<div  id="block_bg"  class="media align-items-center mb-headings">
									<div class="media-body">
										<h1 class="h2">Add QUESTION</h1>
									</div>
								
								</div>

                        <!-- block -->
                       

								<div class="card-columns row">

								<div class="card ">
									<div class="card-body ">
									<div class="row" >
									<div class="col-lg-12" style="text-align: right;"> 
									<a href="add_question.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i> Add Question</a>
									</div>

									</div>
									
							
									<form action="delete_quiz_question.php" method="post">
									<input type="hidden" name="get_id" value="<?php echo $get_id; ?>">

								<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
									<a data-toggle="modal" href="#backup_delete" id="delete"  class="btn btn-danger" name=""><i class="material-icons btn__icon--left">delete</i></a>
									<?php include('modal_delete_quiz_question.php'); ?>
										<thead>
										        <tr>
												<th></th>
												<th>Question Text</th>
												<!-- <th>Points</th> -->
												<th>Question Type</th>
												<th>Answer</th>
												<th>Date Added</th>
												<th></th>
												</tr>
										</thead>
										<tbody>
                              		<?php
										$query = mysqli_query($conn,"select * FROM quiz_question
										LEFT JOIN question_type on quiz_question.question_type_id = question_type.question_type_id
										where quiz_id = '$get_id'  order by date_added DESC ")or die(mysqli_error());
										while($row = mysqli_fetch_array($query)){
										$id  = $row['quiz_question_id'];
									?>                              
										<tr id="del<?php echo $id; ?>">
										<td width="30">
											<input id="optionsCheckbox" class="" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
												<td><?php echo $row['question_text']; ?></td> 
												<td><?php  echo $row['question_type']; ?></td>
												<td><?php  echo $row['answer']; ?></td>
												<td><?php echo $row['date_added']; ?></td>                                                                          
												<td width="30"><a href="edit_question.php<?php echo '?id='.$get_id; ?>&<?php echo 'quiz_question_id='.$id; ?>" class="btn btn-success"><i class="material-icons btn__icon--left">edit</i></a></td>                                      
										</tr>
									<?php } ?>
										</tbody>
									</table>
									</form>
								 
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
         
		<?php include 'lecturer_side.php'?>

</div> </div> </div> 

<?php include '../../script.php'?>
</html>

 