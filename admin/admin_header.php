
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
                    <a href="admin-dashboard.php"
                       class="navbar-brand">
                        <img src="../assets/images/logo/logo.png"
                             class="mr-2"
                             alt="E-Learning" />
                    </a>


                    <div class="flex"></div>

                  
                    <!-- Menu -->
                    <ul class="nav navbar-nav flex-nowrap">

                      
                    <?php $query= mysqli_query($conn,"select * from users where user_id = '$session_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
						?>

	

<li class="dropdown">


                              
                           




                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-large"></i><?php echo $row['firstname']." ".$row['lastname'];  ?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                  
                                    <a class="dropdown-item"
                                   href="admin_account_edit.php">
                                    <i class="material-icons">edit</i> Edit Account
                                </a>

                               
                                    <li class="divider"></li>
                                    <li>
                                    <a class="dropdown-item"
                                   href="logout.php">
                                    <i class="material-icons">lock</i> Logout
                                </a>
                                    </li>
                                </ul>
                            </li>
                        <!-- // END admin dropdown -->

                    </ul>
                    <!-- // END Menu -->
                </div>
            </nav>
            <!-- // END Navbar -->

        </div>
    </div>