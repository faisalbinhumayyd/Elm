<?php
		require 'config.php';
		include('dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
	/* student */
			$query = "SELECT * FROM student WHERE username='$username' AND password='$password'";
			$result = mysqli_query($conn,$query)or die(mysqli_error('error connexion'));
			$row = mysqli_fetch_array($result);
			$num_row = mysqli_num_rows($result);
		
	/* teacher Activate */
		$query_teacher = mysqli_query($conn,"SELECT * FROM lecturer WHERE username='$username' AND password='$password' ")or die(mysqli_error('error connexion'));
		$num_row_teacher = mysqli_num_rows($query_teacher);
		$row_teahcer = mysqli_fetch_array($query_teacher);
		
	/* teacher desactivate */
		$query_teacherDeactivate = mysqli_query($conn,"SELECT * FROM lecturer WHERE username='$username' AND password='$password' and status ='Deactivate'")or die(mysqli_error('error connexion'));
		$num_row_teacherDeactivate = mysqli_num_rows($query_teacherDeactivate);
		$row_teahcerDeactivate = mysqli_fetch_array($query_teacherDeactivate);

		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['student_id'];
		echo 'true_student';	
		}else if ($num_row_teacher > 0){
		$_SESSION['id']=$row_teahcer['lecturer_id'];
		echo 'true_lecturer';
		}else if ($num_row_teacherDeactivate > 0){
		$_SESSION['id']=$row_teahcerDeactivate['lecturer_id'];
		echo 'false_lecturer'; 
		 }else{ 
				header('Location: faild-login.php');
		}	
				
		?>