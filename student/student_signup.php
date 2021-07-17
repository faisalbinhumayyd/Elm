<?php
include('../dbcon.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];




$query = mysqli_query($conn,"SELECT * from student WHERE username = '$username' ") or die(mysqli_error('error connexion'));
$count = mysqli_num_rows($query);

if($count > 0) 
{
    echo "false"; 
} 
elseif ($count == 0) {
    $row = mysqli_fetch_array($query); 
    $id = $row['student_id'];
	#$password = password_hash($password, PASSWORD_DEFAULT);
	mysqli_query($conn," INSERT INTO student (username,email, password ,location  ) VALUES ('$username', '$email', '$password' , 'avatar_s.png')")or die("Could Not Perform the Query");
	$_SESSION['id']=$id;
	echo 'true';
}
?>