<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url()?>super_admin">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url()?>super_admin/category">Category</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                                            <h3 style="color:green">
                                            <?php
                                            $msg=$this->session->userdata('message');
                                            if(isset($msg)){
                                                echo $msg;
                                                $this->session->unset_userdata('message');
                                            }
                                            
                                            ?>
                                        </h3>
                                            <form name="edit_order_form" class="form-horizontal" action="<?php echo base_url();?>super_admin/update_category/<?php echo $category_info->category_id;?>" method="post">
						  <fieldset>
							<legend>Edit Category</legend>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Customer Name </label>
							  <div class="controls">
								<input type="text" name="category_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" value="<?php echo $category_info->category_name; ?>">
							  </div>
							</div>         
							<div class="control-group">
							  <label class="control-label" for="textarea2">Category Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="category_description" value="<?php echo $category_info->category_description; ?>"></textarea>
							  </div>
							</div>
                                                        <div class="control-group">
							  <label class="control-label" for="textarea2">Order Status</label>
                                                          <div class="controls">
                                                            <select name="order_status">
                                                                <option>Order status..</option>
                                                                <option value="1">Pending</option>
                                                                <option value="0">Delivered</option>
                                                            </select>
                                                          </div>
							</div>
							<div class="form-actions">
                                                          <!--<input type="radio" name="publication_status" value="1"> Publish<br/>
                                                          <input type="radio" name="publication_status" value="0"> Unpublish<br/><br/>-->
							  <button type="submit" class="btn btn-primary" name="btn">Save Category</button>
							  
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div>
</div>
<script type="text/javascript">
    document.forms['edit_order_form'].elements['publication_status'].value = '<?php echo $category_info->publication_status; ?>';
</script>