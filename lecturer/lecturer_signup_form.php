<form id="signin_lecturer" method="post">
                            <div class="form-group">
							
                                <label class="form-label"
                                       for="username">username:</label>
                                <div class="input-group input-group-merge">
							
                                    <input id="username"
									        name="username"
                                           type="text"
                                           required
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
                                       for="email">Email address:</label>
                                <div class="input-group input-group-merge">
                                    <input id="email"
                                           type="email"
										   name="email"
                                           required
                                           class="form-control form-control-prepended"
                                           placeholder="Your email address">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="password">Password:</label>
                                <div class="input-group input-group-merge">
                                    <input id="password"
                                           type="password"
										   name="password"
                                           required
                                           class="form-control form-control-prepended"
                                           placeholder="Choose a password">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="cpassword">Password:</label>
                                <div class="input-group input-group-merge">
                                    <input id="cpassword"
                                           type="password"
										   name="cpassword"
                                           required
                                           class="form-control form-control-prepended"
                                           placeholder="Confirm password">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button id="signin" name="login" type="submit" class="btn btn-primary btn-block mb-3">Sign Up</button>
                           
                        </form>


                      <?php  include('../script.php') ?>				

						<script>
			jQuery(document).ready(function(){
			jQuery("#signin_lecturer").submit(function(e){
					e.preventDefault();
						
						var password = jQuery('#password').val();
						var cpassword = jQuery('#cpassword').val();
					
					
					if (password == cpassword){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST", 
						url: "lecturer_signup.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
                            $.jGrowl("Account created !! Please wait while it is confirmed by the administrator", { header: 'Sign Up successfully' });
						var delay = 8000;
							setTimeout(function(){ window.location = '../login.php'  }, delay);  
						}else if(html=='false'){
                            $.jGrowl("username in use !! please enter another username", { header: 'Sign Up failed' });
						}
						}
					});
					}else
						{
                            $.jGrowl("different password !! Sign Up Failed", { header: 'Sign Up failed' });
						}
				});
			});
			</script>
