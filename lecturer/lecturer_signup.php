<?php
include('../dbcon.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];




$query = mysqli_query($conn,"SELECT * from lecturer WHERE username = '$username' ") or die(mysqli_error('error connexion'));
$q = mysqli_query($conn,"SELECT * from student WHERE username = '$username' ") or die(mysqli_error('error connexion'));
$count = mysqli_num_rows($query);
$c = mysqli_num_rows($q);

if($count > 0 or $c >0) 
{
    echo "false"; 
} 
elseif ($count == 0 and $c==0) {
    $row = mysqli_fetch_array($query);
    $id = $row['lecturer_id'];
	#$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($conn," INSERT INTO lecturer (username,email, password ,location,status  ) VALUES ('$username', '$email', '$password' , 0, 'Deactivate')")or die("Could Not Perform the Query");
	
	$_SESSION['id']=$id;
	echo 'true';

}
?>