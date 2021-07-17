<?php
require '../config.php';
include '../header.php'; 
include '../dbcon.php';
?>
 

 <?php include('../session.php'); ?>
 <?php $get_id = $_GET['id']; ?>
 <?php $file_id = $_GET['file_id']; ?>
<!DOCTYPE html>
<html lang="en"
      dir="ltr">



    <body class=" layout-fluid">

      

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

            <?php include 'student_header.php' ?>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content"> 

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">
					
					



					<div class="container-fluid page__container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="student-dashboard.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="student-browse-courses.php">Courses</a></li>
                                <li class="breadcrumb-item active">Course material details</li>
                            </ol>
							<?php
																			$query = mysqli_query($conn, "select * FROM files where file_id = '$file_id'  ") or die(mysqli_error());
                                                                            while ($row = mysqli_fetch_array($query)) {
                                                                                $id = $row['file_id']; ?> 
																			<tr id="del<?php echo $id; ?>">

																			


																		
                            <h1 class="h2"><?php echo $row['fname']; ?></h1>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="embed-responsive embed-responsive-16by9">
                                        <div class="embed-responsive-item">
                                          
                                             <iframe class="embed-responsive-item" src="<?php echo $row['floc']; ?>"></iframe>
                                             </div>
                                        </div>
                                            <div class="card-body">
                                              Description :   <?php echo $row['fdesc']; ?>
                                            </div>
                                        </div>
                                    </div>


                           


                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
										<a  data-placement="bottom"  class="btn btn-primary btn-block flex-column" title="Download" id="<?php echo $file_id; ?>download" href="<?php echo $row['floc']; ?>"> 
										<i style="color: #fff;"  class="material-icons">get_app	</i>Download File
										</a>
                                           
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="media align-items-center">
                                               
                                                <div class="media-body">
                                                    <h4 class="card-title"><a href=#><?php echo $row['uploaded_by']; ?>	</a></h4>
                                                    <p class="card-subtitle">Instructor</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p>	This course material add in : <?php echo $row['fdatein']; ?></p>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>




                    </div>  

						<?php
                                                                            } ?>
					

        
                         <?php include 'student_side.php'?>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
		<?php include '../script.php' ?>
    </body>
    <script>


$(function () {
    $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
        var rating = data.rating;
        $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
        $(this).parent().find('.result').text('rating :'+ rating);
        $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
    });
});

</script>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id=$_SESSION['id'];
    $course_id = $get_id;
    $rating = $_POST["rating"];


    $query = mysqli_query($conn,"SELECT * from tbl_course_rating where student_id= '$id' and course_id='$course_id'  ")or die(mysqli_error());
    $count = mysqli_num_rows($query);


   
if($count > 0){
    echo "you alredy have rating";

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