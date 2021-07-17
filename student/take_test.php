<?php
require '../config.php';
include '../header.php'; 
include '../dbcon.php';
?>
 
 <?php include('../session.php'); ?>
<?php $get_id = $_GET['id']; ?>
<?php $course_quiz_id = $_GET['course_quiz_id']; ?>
<?php $quiz_id = $_GET['quiz_id']; ?>
<?php $quiz_time = $_GET['quiz_time']; ?>

<?php $query1 = mysqli_query($conn,"select * from student_course_quiz where student_id = '$session_id' and course_quiz_id = '$course_quiz_id' ")or die(mysqli_error());
	  $count = mysqli_num_rows($query1);
?>

<?php
if ($count > 0){
}else{
 mysqli_query($conn,"insert into student_course_quiz (course_quiz_id,student_id,student_quiz_time) values('$course_quiz_id','$session_id','$quiz_time')");
}
 ?>

<!DOCTYPE html>
<html lang="en"
      dir="ltr">



    <body class=" layout-fluid">

      

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <?php include 'student_header.php' ?>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content"> 

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">

					    <!-- breadcrumb -->
						
                        <div class="container-fluid page__container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="fixed-student-dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Quiz</li>
								<li class="breadcrumb-item active">Take Quiz</li>
                            </ol>
                           

                            <div class="card">
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">

							
							<?php
if($_GET['test'] == 'ok'){
	
$sqlp = mysqli_query($conn,"SELECT * FROM course_quiz WHERE course_quiz_id = '$course_quiz_id'")or die(mysqli_error());
$rowp = mysqli_fetch_array($sqlp);

$x=0;
?>
										<script>
										jQuery(document).ready(function(){
											var timer = 1;
											jQuery(".questions-table input").hide();
										setInterval(function(){
											var timer = jQuery("#timer").text();
											jQuery("#timer").load("timer.ajax.php");	
											if(timer == 0){
												jQuery(".questions-table input").hide();
												jQuery("#submit-test").show();
												jQuery("#msg").text("Time's up!!!\nPlease Submit your Answers");
											} else {
												jQuery(".questions-table input").show();
											}
										},990);	
										});
										</script>
<form action="take_test.php<?php echo '?id='.$get_id; ?>&<?php echo 'course_quiz_id='.$course_quiz_id; ?>&<?php echo 'test=done' ?>&<?php echo 'quiz_id='.$quiz_id; ?>&<?php echo 'quiz_time='.$quiz_time; ?>" name="testform" method="POST" id="test-form">
<?php
										$sqla = mysqli_query($conn,"select * FROM course_quiz 
										LEFT JOIN quiz ON quiz.quiz_id  = course_quiz.quiz_id	
										LEFT JOIN course on course_quiz.lecturer_course_id = course.course_id
										where course.course_id = '$get_id'  
										order by date_added DESC ")or die(mysqli_error());
										/* $row = mysqli_fetch_array($sqla); */
										$rowa = mysqli_fetch_array($sqla);
					
										

?>
										<h3>Test Title: <b><?php echo $rowa['quiz_title'];?></b></h3>
										<p><b>Description:<?php echo $rowa['quiz_description'];?></b></p>
										<p></p>
										Time Remaining:<div id="timer">1</div>
										<div id="msg"></div>
					<script>
					jQuery(document).ready(function(){	
						jQuery(".questions").each(function(){
							jQuery(this).hide();
						});
						jQuery("#q_1").show();
					});
					</script>
										<script>
										jQuery(document).ready(function(){
										var nq = 0;
										var qn = 0;
											jQuery(".nextq").click(function(){
												qn = jQuery(this).attr('qn');
												nq = parseInt(qn) + 1;
												jQuery('#q_' + qn ).fadeOut();
												jQuery('#q_' + nq ).show();		
											});
										});
										</script>
<table class="questions-table table">
<tr>
<th>Question number</th>
<th>Question :</th>
</tr>
<?php
	$sqlw = mysqli_query($conn,"SELECT * FROM quiz_question where quiz_id = '$quiz_id'  ORDER BY RAND()");
	$qt = mysqli_num_rows($sqlw); 
	while($roww = mysqli_fetch_array($sqlw)){
?>

<tr id="q_<?php echo $x=$x+1;?>" class="questions">

<td width="30" id="qa">
<span class="media-left">
        <span class="btn btn-white btn-circle"><?php echo $x;?></span>
</span>

</td>
<td id="qa">
<?php echo $roww['question_text'];?>
<br>
<hr>
<?php
if($roww['question_type_id']=='2'){
?>
	<input name="q-<?php echo $roww['quiz_question_id'];?>" value="True" type="radio"> True&nbsp;|&nbsp;<input name="q-<?php echo $roww['quiz_question_id'];?>" value="False" type="radio"> False
<?php
} else if($roww['question_type_id']=='1') {
	$sqly = mysqli_query($conn,"SELECT * FROM answer WHERE quiz_question_id = '".$roww['quiz_question_id']."'");
	while($rowy = mysqli_fetch_array($sqly)){
	if($rowy['choices'] == 'A') {
	?>
	A.)<input name="q-<?php echo $roww['quiz_question_id'];?>" value="A" type="radio"> <?php echo $rowy['answer_text'];?><br /><br />
	<?php } else if ($rowy['choices'] == 'B') {?>                                 
	B.) <input name="q-<?php echo $roww['quiz_question_id'];?>" value="B" type="radio"> <?php echo $rowy['answer_text'];?><br /><br />
	<?php } else if ($rowy['choices'] == 'C') {?>                                 
	C.) <input name="q-<?php echo $roww['quiz_question_id'];?>" value="C" type="radio"> <?php echo $rowy['answer_text'];?><br /><br />
	<?php } else if ($rowy['choices'] == 'D') {?>                                 
	D.) <input name="q-<?php echo $roww['quiz_question_id'];?>" value="D" type="radio"> <?php echo $rowy['answer_text'];?><br /><br />
	<?php
		}
	}
}
?>
<br/>
<button onclick="return false;" qn="<?php echo $x;?>" class="nextq btn btn-success" id="next_<?php echo $x;?>">NEXT QUESTION <i class="icon-arrow-right"></i> </button>
<input type="hidden" name="x-<?php echo $x;?>" value="<?php echo $roww['quiz_question_id'];?>">
</td>
</tr>
<?php
	}
?>
<tr>
<td></td>
<td>
<button class="btn btn-info" id="submit-test" name="submit_answer"><i class="icon-check"></i> Submit Answer</button>
<!-- <input type="submit" value="Submit My Answers"  class="btn btn-info" id="submit-test" name="submit_answer"><br /> -->
</td>
</tr>
</table>
<input type="hidden" name="x" value="<?php echo $x;?>">
</form>
<?php
} else if(isset($_POST['submit_answer'])){
	$x1 = $_POST['x'];
	$score = 0;
	for($x=1;$x<=$x1;$x++){
	
		$x2 = $_POST["x-$x"];
		$q = $_POST["q-$x2"];
		
		$sql = mysqli_query($conn,"SELECT * FROM quiz_question WHERE quiz_question_id = ".$x2."");
		$row = mysqli_fetch_array($sql);
		if($row['answer'] == $q) {
			$score= $score + 1;
		}
		
	} ?>
	<a href="student_quiz_list.php<?php echo '?id='.$get_id; ?>"><i class="icon-arrow-left"></i> Back</a>
	<center>
	<h3><br>Your score is <b><?php echo $score; ?></b> out of <b><?php echo ($x-1); ?></b><br/></h3>
	</center>
	<?php
	/* echo "Your Percentage Grade is : <b>".$per."%</b>"; */
	mysqli_query($conn,"UPDATE student_course_quiz SET `student_quiz_time` = 3600, `grade` = '".$score." out of ".($x-1)."' WHERE student_id = '$session_id' and course_quiz_id = '$course_quiz_id'")or die(mysqli_error());
?>
<script>
	  window.location = 'student_quiz_list.php<?php echo '?id='.$get_id; ?>'; 
</script>
<?php
	} /* else { */
?>
<br />
<?php
/* $sql = mysqli_query($conn,"SELECT * FROM students WHERE stud_id = '".$_SESSION['user_id']."'");
$row = mysqli_fetch_array($sql);
	if(is_null($row['grade']) AND $row['time-left'] == 3600){ */
?>
<!--	<a href="?test=ok">Take the test now</a> -->
<?php
/* 	} else if(is_null($row['grade']) AND $row['time-left'] < 3600 AND $row['time-left'] > 0){ */
?>
<!--	<a href="?test=ok">Continue your test</a> -->
<?php
/* 	} else if(!is_null($row['grade'])){
		$sqlg = mysqli_query($conn,"SELECT * FROM groupcode WHERE course_code = '".$row['course_code']."'");
		$rowg = mysqli_fetch_array($sqlg);
		echo "You have already taken <b>".$rowg['course_title']."</b> - <b>".$rowg['course_code']."</b> test.";
	}
	if($row['grade']!=''){
		mysqli_query($conn,"UPDATE students SET `time-left` = 3600 WHERE stud_id = '".$_SESSION['user_id']."'");
		echo "<br />Your Grade for this Test is :  <b>".$row['grade']."</b>";		
	}
} */
?>
                            </div>
                            <div class="block-content  in">
                                <div class="span12">
							
	
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
	                   

<?php include 'student_side.php'?>
</div>
<?php include '../script.php'?>


</body>

</html>