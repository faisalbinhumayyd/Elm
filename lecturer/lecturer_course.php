	
					
					
						<?php $query = mysqli_query($conn,"SELECT a.* , sum(b.rating)/count(b.rating) as s , count(sc.course_id) as c from course a
								LEFT JOIN  tbl_course_rating b on a.course_id = b.course_id
								LEFT JOIN  student_course sc on a.course_id = sc.course_id
								where a.add_by = '$session_id' 
								GROUP BY  b.course_id
								ORDER BY s DESC 
								# LIMIT 10
								")or die(mysqli_error());
								$count = mysqli_num_rows($query);
								
								if ($count > 0){
								while($row = mysqli_fetch_array($query)){
								$id = $row['course_id'];
		 
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
                                  
								  <a href="downloadable.php<?php echo '?id='.$id; ?>">
                                        
                              <?php
                               }
                              
                                ?>
													
															
														<div>  
														Course : <?php echo $row['course_name']; ?>
														</div>
													</a>
												</h4>
												<div class="d-flex align-items-end">
															<div class="d-flex flex flex-column mr-3">
															<div class="d-flex align-items-center py-1">
																	<small class="text-muted mr-2">Rated : 	</small>
																	<small class="text-muted"><?php echo $row['s']; ?></small>
															
																</div>
																<div class="d-flex align-items-center py-1">
																	<small class="text-muted mr-2">participant number : 	</small>
																	<small class="text-muted"><?php echo $row['c']; ?></small>
															
																</div>
															</div>
														
												</div>
											
											
											
											
												
					
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

				