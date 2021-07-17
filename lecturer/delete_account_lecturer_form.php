<?php
include('../dbcon.php');
include('../session.php');

$id=$_SESSION['id'];

$id=$_SESSION['id'];
mysqli_query($conn,"DELETE from lecturer where  lecturer_id = '$id'")or die(mysqli_error());




session_destroy();
header('location: ../login.php');
	

?>