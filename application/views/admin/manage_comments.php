<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Manage Comments</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Manage Comments</h2>
						<div class="box-icon">
							<!--<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>News Title</th>
								  <th>Comments</th>                                                                 
                                                                  <th>User Name</th>
                                                                  <th>Publication Status</th>
                                                                  
								  <th>Comment Date</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                                      <?php
                                                      foreach($all_comments as $v_all_comments)
                                                      {
                                                      ?>
							<tr>
								<td><?php echo $v_all_comments->news_title;?></td>
								<td style="width:40%;"><?php echo $v_all_comments->comments_description;?></td>                                                                
                                                                <td><?php echo $v_all_comments->full_name;?></td>
                                                               
								<td>
									<span class="label label-success">
                                                                            <?php 
                                                                            if($v_all_comments->publication_status=='1'){
                                                                                echo 'Published';
                                                                            }
                                                                            else
                                                                            {
                                                                                echo'Unpublished';
                                                                            }
                                                                                
                                                                                ?>
                                                                        </span>
								</td>
                                                                <td><?php echo $v_all_comments->post_date_time;?></td>
                                                                
                                                                
								<td>
                                                                    <?php if($v_all_comments->publication_status=='1'){
                                                                              
                                                                                ?>
                                                                    <a class="btn btn-success" href="<?php echo base_url()?>super_admin/unpublished_comments/<?php echo $v_all_comments->comments_id?>" title="Unpublish Comment" >
										<i class="icon-arrow-down"></i>  
										                                            
									</a>
                                                                    <?php
                                                                    
                                                                    }
                                                                    else{
                                                                    ?>
                                                                    <a class="btn btn-success" href="<?php echo base_url()?>super_admin/published_comments/<?php echo $v_all_comments->comments_id?>" title="Publish Comment">
										<i class="icon-arrow-up"></i>  
										                                            
									</a>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                     <a class="btn btn-success" href="<?php echo base_url()?>super_admin/archived_comments/<?php echo $v_all_comments->comments_id?>" title="Archived Comment">
										<i class="icon-ban-circle"></i>
								</td>
							</tr>
                                                        <?php
                                                      }
                                                        ?>
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			