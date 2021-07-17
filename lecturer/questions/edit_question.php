<?php require('../../config.php'); ?>
<?php include('../../header.php'); ?>
<?php include('../../session.php'); ?>
<?php include('../../dbcon.php'); ?>
<script src="<?php echo ASSETS; ?>/js/jquery-1.9.1.min.js"></script>
 <link href="<?php echo ASSETS; ?>/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
 <script src="<?php echo ASSETS; ?>/jGrowl/jquery.jgrowl.js"></script>
<?php $get_id = $_GET['id']; ?>
<?php $quiz_question_id = $_GET['quiz_question_id']; ?>

	
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
                                    <h4 class="card-title">Edit Question</h4>
                                </div>

								<?php
										$query = mysqli_query($conn,"select * FROM quiz_question
										LEFT JOIN question_type on quiz_question.question_type_id = question_type.question_type_id
										where quiz_id = '$get_id' and quiz_question_id = '$quiz_question_id'  order by date_added DESC ")or die(mysqli_error());
										$row = mysqli_fetch_array($query);
								?>


								
							    <form  method="post">


								        <div class="form-group row">
											<label class="col-sm-3 col-form-label form-label" for="inputPassword">Question</label>
											<div class="col-sm-9">
													<textarea name="question" id="ckeditor_full" required><?php echo $row['question_text']; ?></textarea>
											</div>
										</div>
									
									
										
								        <div class="form-group row">
												<label class="col-sm-3 col-form-label form-label" for="inputEmail">Question Type:</label>
												<div class="col-sm-9">		
														<select id="qtype" name="question_tpye" required>

																<option value="<?php echo $row['question_type_id']; ?>" ><?php echo $row['question_type']; ?></option>
															<?php
															$query_question = mysqli_query($conn,"select * from question_type")or die(mysqli_error());
															while($query_question_row = mysqli_fetch_array($query_question)){
															?>
															<option value="<?php echo $query_question_row['question_type_id']; ?>"><?php echo $query_question_row['question_type'];  ?></option>
															<?php } ?>

														</select>
												</div>
										</div>


										<div class="control-group">
											<label class="control-label" for="inputEmail"></label>
										<div class="controls">			
										
										
										
										<div id="opt11">
											<?php
												$sqlz = mysqli_query($conn,"SELECT * FROM answers WHERE q_id = ".$_GET['edit']."");
												while($rowz = mysqli_fetch_array($sqlz)){
													if($rowz['choice'] == 'A'){
														$a = $rowz['value'];
													} else if($rowz['choice'] == 'B'){
														$b = $rowz['value'];
													} else if($rowz['choice'] == 'C'){
														$c = $rowz['value'];
													} else if($rowz['choice'] == 'D'){
														$d = $rowz['value'];
													}
												}
											?>
												A.)<input type="text" name="ans1" size="60" value="<?php echo $a;?>"><input name="correctm" value="A" <?php if($rowz['correct'] == 'A'){ echo 'checked'; }?> type="radio"><br /><br />
												B.)<input type="text" name="ans2" size="60" value="<?php echo $b;?>"><input name="correctm" value="B" <?php if($rowz['correct'] == 'B'){ echo 'checked'; }?> type="radio"><br /><br />
												C.)<input type="text" name="ans3" size="60" value="<?php echo $c;?>"><input name="correctm" value="C" <?php if($rowz['correct'] == 'C'){ echo 'checked'; }?> type="radio"><br /><br />
												D.)<input type="text" name="ans4" size="60" value="<?php echo $d;?>"><input name="correctm" value="D" <?php if($rowz['correct'] == 'D'){ echo 'checked'; }?> type="radio"><br /><br />
										</div>



										<div id="opt12">
											<input name="correctt" <?php if($row['answer'] == 'True'){ echo 'checked'; }?> value="t" type="radio">True<br /><br />
											<input name="correctt" <?php if($row['answer'] == 'False'){ echo 'checked'; }?> value="f" type="radio">False<br /><br />
										</div>
								
						
										<div class="form-group row mb-0">
											<div class="col-sm-9 offset-sm-3">
												<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> Update</button>
											</div>
										</div>

								</form>							
		
								<?php
								if (isset($_POST['save'])){
								$question = $_POST['question'];
								$points = $_POST['points'];
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
								}
							});
							
						});
					</script>

		
	


			 </div>
	
        </div>
	</div>
		<?php include 'lecturer_side.php'?>

</div> </div>

<?php include '../../script.php'?>
</html>
