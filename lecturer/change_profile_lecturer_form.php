<div  class="tab-pane active" id="first">
                                        <form id="signin_lecturer"
                                              class="form-horizontal" method="post">
                                           
											  <div class="form-group row">
                                                <label for="firstname"
                                                       class="col-sm-3 col-form-label form-label">Username</label>
                                                <div class="col-sm-8">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input id="firstname"
                                                                   type="text"
                                                                   class="form-control"
                                                                   placeholder="First Name"
																   name="firstname"
                                                                   value="<?php echo $row['username']; ?>" 
																   disabled>
                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="firstname"
                                                       class="col-sm-3 col-form-label form-label">Full Name</label>
                                                <div class="col-sm-8">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input id="firstname"
                                                                   type="text"
                                                                   class="form-control"
                                                                   placeholder="First Name"
																   name="firstname"
                                                                   value="<?php echo $row['firstname']; ?>" >
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text"
															id="lastname"
                                                                   class="form-control"
																   name="lastname"
                                                                   placeholder="Last Name"
                                                                   value="<?php echo $row['lastname']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email"
                                                       class="col-sm-3 col-form-label form-label">Email</label>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="material-icons md-18 text-muted">mail</i>
                                                            </div>
                                                        </div>
                                                        <input type="text"
                                                               id="email"
															   name="email"
                                                               class="form-control"
                                                               placeholder="Email Address"
                                                               value="<?php echo $row['email']; ?>"
                                                               >
                                                    </div>
                                                </div>
                                            </div>
                                         
                                           
                                            <div class="form-group row"> 
                                                <div class="col-sm-8 offset-sm-3">
                                                    <div class="media align-items-center">
                                                        <div class="media-left">
														<button id="signin" name="login" class="btn btn-success"  type="submit"><i class="icon-check icon-large"></i> update</button>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div> 
                                        </form>
                                    </div>

									 
									<?php include '../script.php' ?>
			
			<script>
			jQuery(document).ready(function(){
			jQuery("#signin_lecturer").submit(function(e){
					e.preventDefault();
			
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST", 
						url: "change_lecturer_.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
							alert('update success, press ok to continue');
					
						var delay = 2000;
							setTimeout(function(){ window.location = 'lecturer_dashboard.php'  }, delay);  
						}else if(html=='false'){
							alert('update Failed, press ok to re update');
						
						}
						}
						
						
					});			
			});
		});
			</script>