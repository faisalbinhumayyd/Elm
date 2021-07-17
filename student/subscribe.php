<?php
include('../dbcon.php');
$get_id = $_GET['id'];
include '../session.php';
$id=$_SESSION['id'];
mysqli_query($conn,"INSERT into student_course  (student_id,course_id) values('$id','$get_id ') ");
header('location: course_view.php?id='.$get_id.'');
?> 
