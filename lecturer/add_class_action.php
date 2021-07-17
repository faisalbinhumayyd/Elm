<?php
include('../dbcon.php');
$session_id = $_POST['session_id'];

$course_id = $_POST['course_id'];

$query = mysqli_query($conn,"select * from lecturer_course where course_id = '$course_id' and lecturer_id = '$session_id'  ")or die(mysqli_error());
$count = mysqli_num_rows($query);
if ($count > 0){ 
echo "true";
}else{

mysqli_query($conn,"insert into lecturer_course (lecturer_id,course_id) values('$session_id','$course_id')")or die(mysqli_error());

mysqli_query($conn,"insert into course (course_name,course_file, add_by) values('$course_name' ,'$course_file', '$session_id' )")or die(mysqli_error());

$lecturer_course = mysqli_query($conn,"select * from lecturer_course order by lecturer_course_id DESC")or die(mysqli_error());
$lecturer_row = mysqli_fetch_array($lecturer_course);
$lecturer_id = $lecturer_row['lecturer_course_id'];


$insert_query = mysqli_query($conn,"select * from student where course_id = '$course_id'")or die(mysqli_error());
while($row = mysqli_fetch_array($insert_query)){
$id = $row['student_id'];
mysqli_query($conn,"insert into lecturer_course_student (lecturer_id,student_id,lecturer_course_id) value('$session_id','$id','$lecturer_id')")or die(mysqli_error());
echo "yes";
}
}
?>