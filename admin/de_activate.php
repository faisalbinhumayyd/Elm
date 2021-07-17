<?php
include('../dbcon.php');
$get_id = $_GET['id'];
mysqli_query($conn,"update lecturer set status = 'Deactivate' where lecturer_id = '$get_id'");
header('location:lecturer.php');
?>