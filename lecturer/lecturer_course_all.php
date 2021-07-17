	
					
					
						<?php $query = mysqli_query($conn,"SELECT a.*  from course a
							
						
								where a.add_by = '$session_id' 
							

								")or die(mysqli_error());
								$count = mysqli_num_rows($query);
								
								if ($count > 0){
								while($row = mysqli_fetch_array($query)){
								$id = $row['course_id'];
								$cid = $row['course_id'];
		 
								?>
								<div id="da-thumbs" class="col-md-6">
									<div class="card">
                                        <div class="card-body">

                                            <div class="d-flex flex-column flex-sm-row">
											   <div class="flex" style="min-width: 200px;">
											
												<h4 id="del<?php echo $id; ?>" class="card-title mb-1">

												<?php
                           $id=$_SESSION['id'];
                           //var_dump($id);
                               $query1=mysqli_query($conn, " SELECT * from lecturer where  status = 'Activated' and lecturer_id=$id  ") or die(mysqli_error());
                           
                               $count1 = mysqli_num_rows($query1);
                              
                               if ($count1 > 0) {
                                ?>
                                  
								  <a href="downloadable.php<?php echo '?id='.$cid; ?>">
                                        
                              <?php
                               }
                              
                                ?>
                                  
												
															
														<div>  
														Course : <?php echo $row['course_name']; ?>
														</div>
													</a>
												</h4>
											
											
											
											
											
												
					
											</div>
											</div>
										</div>
									</div>
								</div>  


							

								<?php } }else{ ?>
												
									<div class="alert alert-light alert-dismissible border-1 border-left-3 border-left-warning" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <div class="text-black-70"> No courses to display. Add some courses.</div>
                            </div>
												<?php  } ?>

				