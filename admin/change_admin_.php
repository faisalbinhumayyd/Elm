<?php
include('../dbcon.php');
include('session.php');


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$query = mysqli_query($conn,"select * from users ")or die(mysqli_error());
$row = mysqli_fetch_array($query);
$id = $row['user_id'];

$count = mysqli_num_rows($query);
if ($count > 0){ 
	$id=$_SESSION['id'];
	mysqli_query($conn,"update users set firstname = '$firstname', lastname = '$lastname' , email ='$email'  where  user_id = '$id'")or die(mysqli_error());
	echo 'true';
}else{
echo 'false';
}
?>