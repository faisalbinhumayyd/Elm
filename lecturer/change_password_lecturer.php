			  <div class="tab-pane"  id="third">
			  			<form method="post" id="change_password" class="form-horizontal">


                                              <div class="form-group row">
                                                <label for="password"
                                                       class="col-sm-3 col-form-label form-label">current Password</label>
													<div class="col-sm-6 col-md-4">
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="material-icons md-18 text-muted">lock</i>
																</div>
															</div>
															<input type="hidden" id="password" name="password" value="<?php echo $row['password']; ?>"  placeholder="Current Password">
															<input type="password"
															
																id="current_password"
																name="current_password"
																class="form-control"
																placeholder="Enter your current password">
														</div>
													</div>
												</div>
												<div class="form-group row">
                                                <label for="inputPassword"
                                                       class="col-sm-3 col-form-label form-label">new Password</label>
													<div class="col-sm-6 col-md-4">
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="material-icons md-18 text-muted">lock</i>
																</div>
															</div>
															<input type="password"
																id="new_password"
																class="form-control"
																name="new_password"
																placeholder="Enter new password">
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label for="inputPassword"
														class="col-sm-3 col-form-label form-label">confirm new Password</label>
														<div class="col-sm-6 col-md-4">
															<div class="input-group">
																<div class="input-group-prepend">
																	<div class="input-group-text">
																		<i class="material-icons md-18 text-muted">lock</i>
																	</div>
																</div>
																<input type="password"	
																	name="retype_password"
																	id="retype_password"
																	class="form-control"
																	placeholder="confirm the new password">
															</div>
														</div>
                                            	</div>
												<div class="form-group row">
                                                <div class="col-sm-8 offset-sm-3">
                                                    <div class="media align-items-center">
                                                        <div class="media-left">
														
														<button type="submit" class="btn btn-success"><i class="icon-save"></i> Save</button>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                       
			  </div>
                               
										
												<script>
			jQuery(document).ready(function(){
			jQuery("#change_password").submit(function(e){
					e.preventDefault();
						
						var password = jQuery('#password').val();
						var current_password = jQuery('#current_password').val();
						var new_password = jQuery('#new_password').val();
						var retype_password = jQuery('#retype_password').val();
						if (password != current_password)
						{
							alert('Change Password Failed,  Password does not match with your current password');
						
						}else if  (new_password != retype_password){
							alert('Change Password Failed,  Password does not match with your new password ');
					
						}else if ((password == current_password) && (new_password == retype_password)){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "update_password_lecturer.php",
						data: formData,
						success: function(html){
					
							alert('Change Password Success, Your password is successfully change');
						
						var delay = 200;
							setTimeout(function(){ window.location = 'lecturer_dashboard.php'  }, delay);  
						
						}
						
						
					});
			
					}
				});
			});
			</script>
										
                     