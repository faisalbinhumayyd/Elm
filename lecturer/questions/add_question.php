<?php
require '../../config.php';
include '../../header.php';
include '../../dbcon.php';
?>



<?php include('../../session.php'); ?>
<?php $get_id = $_GET['id']; ?>
<script src="<?php echo ASSETS; ?>/js/jquery-1.9.1.min.js"></script>
 <link href="<?php echo ASSETS; ?>/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
 <script src="<?php echo ASSETS; ?>/jGrowl/jquery.jgrowl.js"></script>
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
									<li class="breadcrumb-item active">Add Question</li>
								</ol>

								<div  id="block_bg"  class="media align-items-center mb-headings">
									<div class="media-body">
										<h1 class="h2">Add Quation for Quiz</h1>
									</div>
								
								</div>

							
							

								<div class="card-columns row">

									<div class="card ">
										<div class="card-body ">
     
                        <!-- block -->


								
							    <form class="form-horizontal" method="post">
								       
									   
									    <div class="form-group row">
											<label   class="col-sm-3 col-form-label form-label" for="inputPassword">Question</label>
											
                                            <div class="col-sm-9">
													<textarea class="form-control" name="question" id="ckeditor_full" required></textarea>
											</div>
										</div>

<!-- <div class="control-group">
											<label class="control-label" for="inputEmail">Points</label>
											<div class="controls">
											
											<input type="number" class="span1" name="points" min=1 max=5 required> 
											</div>
										</div>  -->
										<div class="form-group row">
											<label   class="col-sm-3 col-form-label form-label" for="inputEmail">Question Type:</label>
											<div class="col-sm-9">		
												<select id="qtype" name="question_tpye" required>
													<option value=""></option>
													<?php
													$query_question = mysqli_query($conn,"select * from question_type")or die(mysqli_error());
													while($query_question_row = mysqli_fetch_array($query_question)){
													?>
													<option value="<?php echo $query_question_row['question_type_id']; ?>"><?php echo $query_question_row['question_type'];  ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-3 col-form-label form-label" for="inputEmail"></label>
											<div class="controls">			
													<div id="opt11">
														A: <input type="text" name="ans1" size="60"> <input name="answer" value="A" type="radio"><br><br>
														B: <input type="text" name="ans2" size="60"> <input name="answer" value="B" type="radio"><br><br>
														C: <input type="text" name="ans3" size="60"> <input name="answer" value="C" type="radio"><br><br>
														D: <input type="text" name="ans4" size="60"> <input name="answer" value="D" type="radio"><br><br>
													</div>
													<div  id="opt12">
														<input name="correctt" value="True" type="radio">True<br /><br />
														<input name="correctt"  value="False" type="radio">False<br /><br />
													</div>
											</div>
										</div>
									
											
						

										<div class="control-group">
											<div class="controls">
											
												<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> Save</button>
											</div>
										</div>		
																				
										
								</form>							
		
													<?php
													if (isset($_POST['save'])){
													$question = $_POST['question'];
													#$points = $_POST['points'];
													$type = $_POST['question_tpye'];
													$answer = $_POST['answer']; 
													
													$ans1 = $_POST['ans1'];
													$ans2 = $_POST['ans2'];
													$ans3 = $_POST['ans3'];
													$ans4 = $_POST['ans4'];
													
													if ($type  == '2'){
															mysqli_query($conn,"insert into quiz_question (quiz_id,question_text,date_added,answer,question_type_id) 
														values('$get_id','$question',NOW(),'".$_POST['correctt']."','$type')")or die(mysqli_error());
													}else{
												
													mysqli_query($conn,"insert into quiz_question (quiz_id,question_text,date_added,answer,question_type_id) 
													values('$get_id','$question',NOW(),'$answer','$type')")or die(mysqli_error());
													$query = mysqli_query($conn,"select * from quiz_question order by quiz_question_id DESC LIMIT 1")or die(mysqli_error());
													$row = mysqli_fetch_array($query);
													$quiz_question_id = $row['quiz_question_id'];
													
													mysqli_query($conn,"insert into answer (quiz_question_id,answer_text,choices) values('$quiz_question_id','$ans1','A')")or die(mysqli_error());
													mysqli_query($conn,"insert into answer (quiz_question_id,answer_text,choices) values('$quiz_question_id','$ans2','B')")or die(mysqli_error());
													mysqli_query($conn,"insert into answer (quiz_question_id,answer_text,choices) values('$quiz_question_id','$ans3','C')")or die(mysqli_error());
													mysqli_query($conn,"insert into answer (quiz_question_id,answer_text,choices) values('$quiz_question_id','$ans4','D')")or die(mysqli_error());
													
													}
													
												?>
													<script>
													window.location = 'quiz_question.php<?php echo '?id='.$get_id; ?>' 
													</script>
													<?php
													}
													?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
         
					<script>
	jQuery(document).ready(function(){
		jQuery("#opt11").hide();
		jQuery("#opt12").hide();
		jQuery("#opt13").hide();		

		jQuery("#qtype").change(function(){	
			var x = jQuery(this).val();			
			if(x == '1') {
				jQuery("#opt11").show();
				jQuery("#opt12").hide();
				jQuery("#opt13").hide();
			} else if(x == '2') {
				jQuery("#opt11").hide();
				jQuery("#opt12").show();
				jQuery("#opt13").hide();
			} else {
				jQuery("#opt11").hide();
				jQuery("#opt12").hide();
				jQuery("#opt13").hide();
			}
		});
		
	});
</script>
	
<?php include 'lecturer_side.php'?>

</div> </div> </div> </div> 

<?php include '../../script.php'?>
</html>
