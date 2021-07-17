<?php
include('../dbcon.php');
include '../session.php';
$get_id = $_GET['id'];
$id=$_SESSION['id'];
$result = mysqli_query($conn,"DELETE FROM student_course where course_id='$get_id' and student_id='$id' ");

header('location: course_view.php?id='.$get_id.'');

?>  