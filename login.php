
<?php 
require 'config.php';
include('header.php'); ?>
<!DOCTYPE html>
<html lang="en"
      dir="ltr">
      
    <body class="login">

        <div class="d-flex align-items-center"
             style="min-height: 100vh">
            <div class="col-sm-8 col-md-6 col-lg-4 mx-auto"
                 style="min-width: 300px;">
                <div class="text-center mt-5 mb-1">
                    <div class="avatar avatar-lg">
                        <img src="assets/images/logo/logo.png"
                             class="avatar-img rounded-circle"
                             alt="" />
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-5 navbar-light">
                    <a href="index.php"
                       class="navbar-brand m-0">E-learning</a>
                </div>
                <div class="card navbar-shadow">
                    <div class="card-header text-center">
                        <h4 class="card-title">Login</h4>
                        <p class="card-subtitle">Access your account</p>
                    </div>
                    <div class="card-body">

    
                        <form id="login_form1" 
                              novalidate
                              method="post">
                            <div class="form-group">
                                <label class="form-label"
                                       for="username">Your username :</label>
                                <div class="input-group input-group-merge">
                                    <input id="username"
                                           type="text"
                                           name="username"
                                           required=""
                                           class="form-control form-control-prepended"
                                           placeholder="Your username">
                                           <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="password">Your password:</label>
                                <div class="input-group input-group-merge">
                                    <input id="password"
                                           type="password"
                                           name="password"
                                           required=""
                                           class="form-control form-control-prepended"
                                           placeholder="Your password">
                                   
                                           <div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="material-icons md-18 text-muted">lock</i>
															
                                                            	</div>
															</div>
                                 
                                </div>
                            </div>
                            <div class="form-group ">
                                <button type="submit" id="signin" name="login"
                                        class="btn btn-primary btn-block">Login</button>
                            </div>
                           
                        </form>
                    </div>
                    <div class="card-footer text-center text-black-50">
                        Not yet a student?  <h4> <a href="student/signup_student.php">Sign Up</a>  </h4>
                    </div>
                </div>
            </div>
        </div>

        <?php 
include('script.php') ?>

<script type="text/javascript">
														$(document).ready(function(){
                                                            
															jQuery('#signin').tooltip('show');
															jQuery('#signin').tooltip('hide');
														});
														</script>		
			</form>
						<script>
						jQuery(document).ready(function(){
						jQuery("#login_form1").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login_.php",
									data: formData,
									success: function(html){
									if(html=='true_lecturer')
									{
                                        $.jGrowl("welcome lecturer in your dashboard  ", { header: 'Login successfully' });
                                     
									var delay = 4000;
										setTimeout(function(){ window.location = 'lecturer/lecturer_dashboard.php'  }, delay);  
                                    }else if (html == 'false_lecturer'){
                                        $.jGrowl("Account was created !!But Please wait while it is confirmed by the administrator ");
                             
									var delay = 10000;
										setTimeout(function(){ window.location = 'login.php'  }, delay);  
									

									}else if (html == 'true_student'){
                                        $.jGrowl("welcome student in your dashboard ", { header: 'Login successfully' });
                             
									var delay = 4000;
										setTimeout(function(){ window.location = 'student/student-dashboard.php'  }, delay);  
									}else
									{
                                        $.jGrowl("Login Failed, Please Check your username and Password ", { header: 'Login Failed' });
                                      
                                        setTimeout(function(){ window.location = 'login.php'  }, delay);
								
									}
									}
								}); 
								return false;
							});
						});
						</script>

    </body>

</html>