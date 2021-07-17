
    <div id="header"
         data-fixed
         class="mdk-header js-mdk-header mb-0"> 
        <div class="mdk-header__content">

            <!-- Navbar -->
            <nav id="default-navbar"
                 class="navbar navbar-expand navbar-dark bg-primary m-0">
                <div class="container-fluid">
                    <!-- Toggle sidebar -->
                    <button class="navbar-toggler d-block"
                            data-toggle="sidebar"
                            type="button">
                        <span class="material-icons">menu</span>
                    </button>

                    <!-- Brand -->
                    <a href="student-dashboard.php"
                       class="navbar-brand">
                        <img src="../assets/images/logo/logo.png"
                             class="mr-2"
                             alt="E-learning" />
                    </a>


                    <div class="flex"></div>

                    <!-- Menu -->
               

                    <!-- Menu -->
                    <ul class="nav navbar-nav flex-nowrap">

                 
						<?php 
                        $session_id= $_SESSION['id'];
                        $query= mysqli_query($conn,"SELECT * from student where student_id = '$session_id' ")or die(mysqli_error());
									$row = mysqli_fetch_array($query);
                                   // var_dump($row)
                        ?>
                             
                        <!-- User dropdown -->
                        <li class="nav-item dropdown ml-1 ml-md-3">


                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"><img src="../avatar_student/<?php echo $row['location']; ?>" alt="Avatar" class="rounded-circle" width="40"></a>
                                        </a>

                            <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item"
                                   href="student-profile.php">
                                    <i class="material-icons">person</i> My Account
                                </a>
                                <a class="dropdown-item"
                                   href="student_account_edit.php">
                                    <i class="material-icons">edit</i> Edit Account
                                </a>
                              
                                <a class="dropdown-item"
                                   href="../logout.php">
                                    <i class="material-icons">lock</i> Logout
                                </a>
                            </div>
                        </li>
                        <!-- // END User dropdown -->

                    </ul>
                    <!-- // END Menu -->
                </div>
            </nav>
            <!-- // END Navbar -->

        </div>
    </div>