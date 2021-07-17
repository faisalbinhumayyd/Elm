<div class="mdk-drawer js-mdk-drawer"
                 id="default-drawer">
                <div class="mdk-drawer__content ">
                    <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden"
                         data-perfect-scrollbar>
                        <div class="sidebar-p-y">

                            <!-- Account menu -->

                            <div class="sidebar-heading"> Lecturer</div>
                            
                            <ul class="sidebar-menu sm-active-button-bg">


                            <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="lecturer_dashboard.php">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">home</i> Home
                                            </a>
                                        </li>


                                        <?php
                           $id=$_SESSION['id'];
                           //var_dump($id);
                               $query=mysqli_query($conn, " SELECT * from lecturer where  status = 'Activated' and lecturer_id=$id  ") or die(mysqli_error());
                           
                               $count = mysqli_num_rows($query);
                              
                               if ($count > 0) {
                                ?>
                                  
                                  <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="course.php">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> Course Manager
                                            </a>
                                        </li>
                                        
                              <?php
                               }
                              
                                ?>
                                      

                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="questions/lecturer_quiz.php">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">help</i> Quiz Manager
                                            </a>
                                        </li>
                                      
                                      
                                        
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="stat.php">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">trending_up</i> Top rated
                                            </a>
                                        </li>
                                    
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="../logout.php">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Logout
                                            </a>
                                        </li>
                                    </ul>


                        </div>
                    </div>
                </div>
            </div>