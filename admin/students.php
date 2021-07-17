
<?php
require '../config.php';
include '../header.php';
include '../dbcon.php';
?>



<?php include('session.php'); ?>


<!DOCTYPE html>
<html lang="en"
      dir="ltr">
 

      <body class=" layout-fluid">


<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">

    <!-- Header -->
    <?php include 'admin_header.php' ?>

    <!-- // END Header -->

    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content">

        <div data-push
             data-responsive-width="992px"
             class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content page ">

                <div class="container-fluid page__container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <h1 class="h2">Student List</h1>
                    <div class="card border-left-3 border-left-primary card-2by1">
                        <div class="card-body"
							 id="studentTableDiv">
									<?php include('student_table.php'); ?>
                           
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>
			<?php include ('admin_side.php'); ?>
        </div>
		<?php include('../script.php'); ?>
    </body>

</html>