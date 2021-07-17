

				      
                      
                      <!-- block -->
                        <div id="block_bg" class="">
                        <?php $class_query = mysqli_query($conn, "select * from course


                where course_id = '$get_id'") or die(mysqli_error());
                $class_row = mysqli_fetch_array($class_query);
                $class_name = $class_row['course_name'];

                ?>
 

                       <h2>Add Materials for <a href="#"><?php echo $class_row['course_name']; ?></a>    </h2>
							                            <form class="" id="add_downloadble" method="post" enctype="multipart/form-data" name="upload" >
                       
                                                        <div class="form-group row">
                                                                    <label for="text"
                                                                        class="col-sm-3 col-form-label form-label">File Name</label>
                                                                        <div class="col-sm-6 col-md-6">
                                                                        
																<div class="custom-file"
																	style="width: auto;">
																	<input type="file"
																	id="fileInput"
                                                                    name="uploaded_file"
																		class="custom-file-input" required> 
                                                                        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                                                                        <input type="hidden" name="id" value="<?php echo $session_id ?>"/>
                                                                        <input type="hidden" name="id_course" value="<?php echo $get_id; ?>">
																	<label for="inputEmail"
																		class="custom-file-label">Choose file</label>
																</div>
                                                                        </div>
															</div>
                           

                       
                                                            <div class="form-group row">
                                                                    <label for="text"
                                                                        class="col-sm-3 col-form-label form-label">File Name</label>
                                                                    <div class="col-sm-6 col-md-6">
                                                                        <div class="input-group">
                                                                            
                                                                            <input type="text" name="name" Placeholder="File Name"  class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <div class="form-group row">
                                                                <label for="text"
                                                                    class="col-sm-3 col-form-label form-label">Description</label>
                                                                <div class="col-sm-6 col-md-6">
                                                                    <div class="input-group">
                                                                    
                                                                        <input type="text" name="desc" Placeholder="Description"  class="form-control" required>
                                                                
                                                                    </div>
                                                                </div>
                                                            </div>

                                                             <div class="form-group row"> 
                                                                <div class="col-sm-8 offset-sm-3">
                                                                    <div class="media align-items-center">
                                                                        <div class="media-left">
                                                                    
                                                                        <button name="Upload" type="submit" value="Upload"  class="btn btn-success" /><i class="icon-upload-alt"></i>&nbsp;Upload</button>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div> 



                                                            <script>
			jQuery(document).ready(function($){
				$("#add_downloadble").submit(function(e){
					$.jGrowl("Uploading File Please Wait......", { sticky: true });
					e.preventDefault();
					var _this = $(e.target);
					var formData = new FormData($(this)[0]);
					$.ajax({
						type: "POST",
						url: "upload_save.php",
						data: formData,
						success: function(html){ 
							// console.log(html)
							// return false
							$.jGrowl("Course Material Successfully Added", { header: 'course material added' });
							setTimeout(function(){
	 							window.location = 'lecturer_dashboard.php';
							},2000)
						},
						cache: false,
						contentType: false,
						processData: false
					});
				});
			});
			</script>	
                                                     </form>
					
											
					
						

	</div>
