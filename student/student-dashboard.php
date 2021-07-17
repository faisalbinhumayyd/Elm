<?php
require '../config.php';
include '../header.php';
include '../dbcon.php';
?>
 	<script src="<?php echo ASSETS; ?>/js/jquery-1.9.1.min.js"></script>
     <link href="<?php echo ASSETS; ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
 <?php include '../session.php';?>

<!DOCTYPE html>
<html lang="en"
      dir="ltr">



    <body class=" layout-fluid">



        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <?php include 'student_header.php'?>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">

                        <div class="container-fluid ">

                            <div class="card">
                                <div  class="tab-content card-body">




                        <!-- block -->


									<form  method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">


									<thead>
										  <tr>
													<th></th>
													<th>Course</th>
													
                                                   
										   </tr>
										</thead>
										<tbody>
										<?php
                                    $id = $_SESSION['id'];
                                    $course_query = mysqli_query($conn, "select * from course ") or die(mysqli_error());
                                    while ($course_row = mysqli_fetch_array($course_query)
                                   
                                    ) {
                                        $id_s = $course_row['course_id'];
                                       
                                        ?>

										<tr>
											<td width="30">
                                           
                                            </td>
											<td>
                                            <div class="card-header">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="course_view.php<?php echo '?id=' . $id_s; ?>">
 

                                                    <img src="../avatar_course/uploads/<?php echo $course_row['location']; ?>" alt="Card image cap" width="100" class="rounded">
                                                    
                                                       </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="card-title m-0"><a href="course_view.php<?php echo '?id=' . $id_s; ?>"> <?php echo $course_row['course_name']; ?></a></h4>
                                 
                                            </div>
                                        </div>
                                    </div>
                                           
                                           </td>
                                            
                                               
                                           

                                            </tr>
										<?php }?>


										</tbody>
									</table>
									</form>

                            </div>
                        </div>

                        </div>
                    </div>

                         <?php include 'student_side.php'?>
        </div>

        <script src="<?php echo ASSETS; ?>/jquery.dataTables.min.js"></script>
        <script src="<?php echo ASSETS; ?>/DT_bootstrap.js"></script>

		<?php include '../script.php'?>
    </body>

</html>






