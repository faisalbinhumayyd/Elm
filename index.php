
<?php
require 'config.php';
include 'header.php'; 
include 'dbcon.php';
?>
 


<!DOCTYPE html>
<html lang="en"
      dir="ltr">



    <body class=" layout-fluid">

      

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <?php include 'head.php' ?>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">  
<div class="row"  style=" background:#1c416a" >
<img width="100%" height="500px"  src="assets/images/enseignement-à-distance.jpeg" alt="">
</div>
<div class="row ">
<div class="container-fluid page__container">






                <div data-push="" class="mdk-drawer-layout js-mdk-drawer-layout" data-domfactory-upgraded="mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page " style="transform: translate3d(0px, 0px, 0px);">

                        <div class="container-fluid page__container">
                           
                            <div class="media mb-headings align-items-center">
                                <div class="media-body">
                                    <h1 class="h2">ELM Courses</h1>
                                </div>
                                
                            </div>
                            <div class="card-columns">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="student-login.php">
                                                    <img src="assets/images/lohp-category-design.jpg" alt="Card image cap" width="100" class="rounded">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="card-title m-0"><a href="login.php">Design!</a></h4>
                                                <small class="text-muted"> 10 Lessons</small>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="card-footer bg-white">
                                        <a href="login.php" class="btn btn-primary btn-sm">take course <i class="material-icons btn__icon--right">play_circle_outline</i></a>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="student-login.php">
                                                    <img src="assets/images/python.jpg" alt="Card image cap" width="100" class="rounded">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="card-title m-0"><a href="#">Python 3</a></h4>
                                                <small class="text-muted">7 Lessons</small>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="card-footer bg-white">
                                        <a href="login.php" class="btn btn-primary btn-sm">take course <i class="material-icons btn__icon--right">play_circle_outline</i></a>
                                    </div>
                                </div>

                            

                                <div class="card">
                                    <div class="card-header">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="student-login.php">
                                                    <img src="assets/images/lohp-category-photography.jpg" alt="Card image cap" width="100" class="rounded">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="card-title m-0"><a href="#">photography</a></h4>
                                                <small class="text-muted">5 Lessons</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer bg-white">
                                        <a href="login.php" class="btn btn-primary btn-sm">take course <i class="material-icons btn__icon--right">play_circle_outline</i></a>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header ">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="student-login.php">
                                                    <img src="assets/images/vuejs.png" alt="Card image cap" width="100" class="rounded">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="card-title m-0"><a href="#">VueJs</a></h4>
                                                <small class="text-muted">Lessons: 3 of 7</small>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card-footer bg-white">
                                        <a href="login.php" class="btn btn-primary btn-sm">take course <i class="material-icons btn__icon--right">play_circle_outline</i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <ul class="pagination justify-content-center pagination-sm">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true" class="material-icons">chevron_left</span>
                                        <span>Prev</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#" aria-label="1">
                                        <span>1</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="1">
                                        <span>2</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span>Next</span>
                                        <span aria-hidden="true" class="material-icons">chevron_right</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="mdk-drawer js-mdk-drawer" id="default-drawer" data-align="start" data-position="left" data-domfactory-upgraded="mdk-drawer"><div class="mdk-drawer__scrim" style=""></div>
                        <div class="mdk-drawer__content " style="">
                            <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden ps ps--active-y" data-perfect-scrollbar="">
                                <div class="sidebar-p-y">
                                    <div class="sidebar-heading">APPLICATIONS</div>
                                    <ul class="sidebar-menu sm-active-button-bg">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="student-dashboard.php">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i> Student
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="instructor-dashboard.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Instructor
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Account menu -->
                                    <div class="sidebar-heading">Account</div>
                                    <ul class="sidebar-menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#account_menu">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i>
                                                Account
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu sm-indent collapse" id="account_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="guest-login.html">
                                                        <span class="sidebar-menu-text">Login</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="guest-signup.html">
                                                        <span class="sidebar-menu-text">Sign Up</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="guest-forgot-password.html">
                                                        <span class="sidebar-menu-text">Forgot Password</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="student-account-edit.html">
                                                        <span class="sidebar-menu-text">Edit Account</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="student-account-edit-basic.html">
                                                        <span class="sidebar-menu-text">Basic Information</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="student-account-edit-profile.html">
                                                        <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="student-account-billing-subscription.html">
                                                        <span class="sidebar-menu-text">Subscription</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="student-account-billing-upgrade.html">
                                                        <span class="sidebar-menu-text">Upgrade Account</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="student-account-billing-payment-information.html">
                                                        <span class="sidebar-menu-text">Payment Information</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="student-billing.html">
                                                        <span class="sidebar-menu-text">Payment History</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="student-invoice.html">
                                                        <span class="sidebar-menu-text">Student Invoice</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="instructor-invoice.html">
                                                        <span class="sidebar-menu-text">Instructor Invoice</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="instructor-edit-invoice.html">
                                                        <span class="sidebar-menu-text">Edit Invoice</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" data-toggle="collapse" href="#messages_menu">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">comment</i> Messages
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu sm-indent collapse" id="messages_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="student-messages.html">
                                                        <span class="sidebar-menu-text">Conversation</span>
                                                        <span class="sidebar-menu-badge badge badge-primary badge-notifications ml-auto">2</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="student-messages-2.html">
                                                        <span class="sidebar-menu-text">Conversation - 2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="sidebar-heading">Student</div>
                                    <ul class="sidebar-menu sm-active-button-bg">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="student-browse-courses.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">search</i> Browse Courses
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="student-view-course.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> View Course
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="login.php">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">class</i> Take Course
                                                <span class="sidebar-menu-badge badge badge-primary ml-auto">PRO</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="student-take-quiz.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i> Take a Quiz
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="student-quiz-results.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">poll</i> Quiz Results
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button" href="student-my-courses.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> My Courses
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" data-toggle="collapse" href="#forum_menu">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">chat_bubble_outline</i>
                                                Community
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu sm-indent collapse" id="forum_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="student-forum.html">
                                                        <span class="sidebar-menu-text">Forum</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="student-forum-thread.html">
                                                        <span class="sidebar-menu-text">Discussion</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="student-forum-ask.html">
                                                        <span class="sidebar-menu-text">Ask Question</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="student-profile.html">
                                                        <span class="sidebar-menu-text">Student Profile - Courses</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="student-profile-posts.html">
                                                        <span class="sidebar-menu-text">Student Profile - Posts</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="instructor-profile.html">
                                                        <span class="sidebar-menu-text">Instructor Profile</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="student-help-center.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">live_help</i> Get Help
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="guest-login.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Components menu -->
                                    <div class="sidebar-heading">Components</div>
                                    <ul class="sidebar-menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#components_menu">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                                Components
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu sm-indent collapse" id="components_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-avatars.html">
                                                        <span class="sidebar-menu-text">Avatars</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-forms.html">
                                                        <span class="sidebar-menu-text">Forms</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-loaders.html">
                                                        <span class="sidebar-menu-text">Loaders</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-tables.html">
                                                        <span class="sidebar-menu-text">Tables</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-cards.html">
                                                        <span class="sidebar-menu-text">Cards</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-tabs.html">
                                                        <span class="sidebar-menu-text">Tabs</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-icons.html">
                                                        <span class="sidebar-menu-text">Icons</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-buttons.html">
                                                        <span class="sidebar-menu-text">Buttons</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-alerts.html">
                                                        <span class="sidebar-menu-text">Alerts</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-badges.html">
                                                        <span class="sidebar-menu-text">Badges</span>
                                                    </a>
                                                </li>
                                                <!-- <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="ui-modals.html">
          <span class="sidebar-menu-text">- Modals</span>
        </a>
      </li> -->
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-progress.html">
                                                        <span class="sidebar-menu-text">Progress Bars</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-pagination.html">
                                                        <span class="sidebar-menu-text">Pagination</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#plugins_menu">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">folder</i>
                                                Plugins
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu sm-indent collapse" id="plugins_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-charts.html">
                                                        <span class="sidebar-menu-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-drag.html">
                                                        <span class="sidebar-menu-text">Drag &amp; Drop</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-calendar.html">
                                                        <span class="sidebar-menu-text">Calendar</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-nestable.html">
                                                        <span class="sidebar-menu-text">Nestable</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-tree.html">
                                                        <span class="sidebar-menu-text">Tree</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-maps-vector.html">
                                                        <span class="sidebar-menu-text">Vector Maps</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="ui-sweet-alert.html">
                                                        <span class="sidebar-menu-text">Sweet Alert</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- // END Components Menu -->

                                    <div class="sidebar-heading">Layout</div>
                                    <ul class="sidebar-menu">
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button" href="student-my-courses.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fluid Layout
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="fixed-student-my-courses.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fixed Layout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 593px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 308px;"></div></div></div>
                        </div>
                    </div>

                </div>














                            </div>
                           
                        </div>

            

                    </div>
                        <!-- /block -->
                    

<?php include 'script.php'?>


</body>

</html>