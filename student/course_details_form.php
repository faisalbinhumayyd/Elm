
<?php
require '../config.php';
 
include '../dbcon.php';
?>


 <?php include('../session.php'); ?>
 <?php $get_id = $_GET['id']; 
 $id_s = $_SESSION['id'];

 ?>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id=$_SESSION['id'];
    $course_id = $get_id;
    $rating = $_POST["rating"];


    $query = mysqli_query($conn,"SELECT * from tbl_course_rating where student_id= '$id' and course_id='$course_id'  ")or die(mysqli_error());
    $count = mysqli_num_rows($query);


   
if($count > 0){
    echo "no";

}
else{
    $sql = "INSERT INTO tbl_course_rating (course_id,student_id,rating) VALUES ('$course_id','$id','$rating')";
    if (mysqli_query($conn, $sql))
    {
        echo "New Rate addedddd successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
 
}
     mysqli_close($conn);
}
?>