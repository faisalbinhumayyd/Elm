



<?php
require '../config.php';
include '../header.php'; 
include '../dbcon.php';
?>
 
 <?php include('session.php'); ?>
 <?php $get_id = $_GET['id']; ?>
<!DOCTYPE html>
<html lang="en"
      dir="ltr">



    <body class=" layout-fluid">

      

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

            <?php include 'admin_header.php' ?>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content"> 

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">
					
                        <div class="container-fluid page__container">
                       <div class="row">
						<div class="card col-lg-8">
                                <div class="card-header">
                                    <h4 class="card-title">Course materials</h4>
                                </div>
                                
                                <div class="nestable" id="nestable">
                                    <ul class="list-group list-group-fit nestable-list-plain mb-0">
									<?php



									
									$id_=$_SESSION['id'];
																			$query = mysqli_query($conn, "select * FROM files
																			LEFT JOIN course on files.course_id = course.course_id
																			where course.course_id = '$get_id' 
																			") or die(mysqli_error());
                                                                            while ($row = mysqli_fetch_array($query)) {
                                                                                $id_course = $row['course_id']; 
																					$id = $row['file_id']; ?> 

                                        <li class="list-group-item nestable-item">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                                                </div>
                                              
											    <div class="media-body">
												
                                              
                                                <a href="course_details.php<?php echo '?id='.$get_id; ?>&<?php echo 'file_id='.$id;?>" class="h"><?php echo $row['fname']; ?></a>
												
                                                </div>
                                                
											

                                            </div>
										</li>
									 
									  <?php

                                                                            } 
																			?>
                                      

									  

									   
                                    </ul>
                                </div>
                            </div>

							
							<div class="card col-lg-4">
                                    
                                    <form action="materials_list.php<?php echo '?id='.$get_id; ?>" method="post">
										<div class="card-header">
											<h4 class="card-title">Ratings</h4>
										</div> 

										
                                        
                                                <?php $query = mysqli_query($conn,"SELECT a.* , sum(b.rating)/count(b.rating) as s  from course a
								LEFT JOIN  tbl_course_rating b on a.course_id = b.course_id
								where a.course_id = $get_id
								GROUP BY  b.course_id
							
								# LIMIT 10
								")or die(mysqli_error());
								$count = mysqli_num_rows($query);
								
								if ($count > 0){
								$row = mysqli_fetch_array($query)
							
		 
								?>
								
                                
                               					
															
							<div class="card-body">

											
										 <div class="row">
                                               <label>Average course rating : <a href="#"><?php echo number_format((float)$row['s'], 2, '.', ''); ?></a>/5 </label>
                                            </div>
												
                                        </div>

								<?php  }
                                      
?>
									</form>
								
								</div>
                        </div>
						</div>
                    </div>

                         <?php include 'admin_side.php'?>
        </div>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
		<?php include '../script.php' ?>
    </body>



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