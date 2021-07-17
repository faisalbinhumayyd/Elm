
<?php 
require '../config.php';
include('../header.php'); ?>

<script src="<?php echo ASSETS; ?>/js/jquery-1.9.1.min.js"></script>
 <link href="<?php echo ASSETS; ?>/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
 <script src="<?php echo ASSETS; ?>/jGrowl/jquery.jgrowl.js"></script>
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
                        <img src="../assets/images/logo/logo.png"
                             class="avatar-img rounded-circle"
                             alt="" />
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-5 navbar-light">
                    <a href="index.php"
                       class="navbar-brand m-0">Admin Login</a>
                </div>
                <div class="card navbar-shadow">
                    <div class="card-header text-center">
                        <h4 class="card-title">Login</h4>
                        <p class="card-subtitle">Access your account</p>
                    </div>
                    <div class="card-body">

    
                        <form id="login_form"
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
                  
                </div>
            </div>
        </div>



  


<script>
			jQuery(document).ready(function(){
			jQuery("#login_form").submit(function(e){
					e.preventDefault();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "login.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome", { header: 'Access Granted' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'admin-dashboard.php'  }, delay);  
						}
						else
						{
						$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
						}
						}
						
					});
					return false;
				});
			});
			</script>
      <?php 
include('../script.php') ?> 
    </body>

</html>