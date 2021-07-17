
<?php
require '../config.php';
include '../header.php'; 
include '../dbcon.php';
?>
  <?php $get_id = $_GET['id']; ?>

 <?php include('../session.php'); ?>

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
                                <li class="breadcrumb-item"><a href="student-browse-courses.html">Courses</a></li>
                                
                            </ol>
							<?php
																			$query = mysqli_query($conn, "select * FROM course where course_id = '$get_id'  ") or die(mysqli_error());
                                                                            while ($row = mysqli_fetch_array($query)) {
                                                                                $id_course = $row['course_id']; ?> 
																			<tr id="del<?php echo $id_course; ?>">

																			


																		
                            <h1 class="h2"><?php echo $row['course_name']; ?></h1>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="embed-responsive embed-responsive-16by9">
                            
                            
                                        <?php
                                    $id = $_SESSION['id'];
                                    $course_query = mysqli_query($conn, "SELECT * from course c
                                    join files f on c.course_id = f.course_id
                                    where c.course_id =  '$get_id' 
                                    ") or die(mysqli_error());
                                   ($course_row = mysqli_fetch_array($course_query)
                                   
                                                                            );
                                        $id_s = $course_row['course_id'];
                                       $ext = pathinfo($course_row['floc'], PATHINFO_EXTENSION);
                                        ?>
                                            <iframe class="embed-responsive-item" src="<?php echo $course_row['floc']; ?>"></iframe>
                                        </div>
                                     
                                      
                                    </div>
                                </div>


                           


                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">

										<?php
                                
											$id = $_SESSION['id'];
                                            $c_query = mysqli_query($conn, "select * from student_course where student_id ='$id'  and course_id='$get_id'  ") or die(mysqli_error());
                                            $c_count = mysqli_num_rows($c_query);
                                            $s_course_row = mysqli_fetch_array($c_query);
									
                                            if ($c_count != 0) {
												?> 
												<td width="120"><a href="unsubscribe.php<?php echo'?id=' . $get_id; ?>" class="btn btn-danger"><i class="icon-remove"></i>Click to Unsubscribe</a></td>
																			
                                       <?php     }
                                       else{
										$s_id = $s_course_row['student_course_id'];
                                           ?>

																		
                                                                        
                                        <td width="120"><a href="subscribe.php<?php echo '?id=' .$get_id; ?>" class="btn btn-success"><i class="icon-check"></i>Click to Subscribe in this course</a></td>
                                                                                                            
											<?php
                                       }
                                            ?>
                                        












                                           
                                        </div>
                                    </div>
                                  
								  
                            
                                    <div class="card">
                                    
                                        <form action="course_details.php<?php echo '?id='.$get_id; ?>" method="post">

                                            <div class="card-header">
                                                <h4 class="card-title">Ratings</h4>
                                            </div>

                                            <div class="card-body">

                                              

	
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
								
                                  <div class="rateyo" id= "rating"
                                                data-rateyo-rating="<?php echo number_format((float)$row['s'], 2, '.', ''); ?>"
                                                data-rateyo-num-stars="5"
                                                data-rateyo-score="3">
                                                </div>
                                <div class="row" 
                                               >
                                               <smal>Average course rating : <a href="#"><?php echo number_format((float)$row['s'], 1, '.', ''); ?></a>/5 </smal>
                                            
                                                </div>
																	
															
							

								<?php  }else{ ?>
												
									
                                <div class="text-black-70"> No rated to display, add your first rate</div>
                     
												<?php  } ?>

				
                                                                       <input type="hidden" name="rating">

                                            

                                        </form>
                                    
                                    </div>

                                   
								
								  
                                </div>
                               
                            </div>
                        </div>




                    </div>  

						<?php
                                                                            } ?>
					

                    </div>

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














