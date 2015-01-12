<div class="row-fluid">
    <div class="span12">
        <div class="widget green">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Add Sub Category</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <div class="box-content">
                    <h3 style="color:green">
                        <?php
                        $msg = $this->session->userdata('message');
                        if (isset($msg)) {
                            echo $msg;
                            $this->session->unset_userdata('message');
                        }
                        ?>
                    </h3>
                    <form name="add_sub_category_form" onsubmit="return validateForm()" class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_sub_category" method="POST">
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Category Name</label>
                            <div class="controls">
                                <input type="text" name="sub_category_name" class="span4 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                            </div>
                        </div> 
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Select Category</label>
                            <select name="category_id" class="span4 typeahead" id="typeahead" data-provide="typeahead" style="margin-left: 1.8%;">
                                <option>Please Select One</option>
                                <?php foreach ($all_category as $v_category) { ?>
                                    <option value="<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Category Short Description</label>
                            <div class="controls">
                                <input type="text" name ="sub_category_short_description" class="span8 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                            </div>
                        </div>    
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Category Full Description</label>
                            <div class="controls">
                                <textarea type="text" name ="sub_category_full_description" class="span8 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                                </textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Publication Status</label>
                            <select name="sub_category_status" class="span3 typeahead" id="typeahead" data-provide="typeahead" style="margin-left: 1.8%;">
                                <option>Please Select One</option>
                                <option value="1">Publish</option>
                                <option value="0">Unpublish</option>
                            </select>
                        </div>
                        <div class="form-actions">
                            <button type="submit" value="Submit" class="btn btn-primary" name="btn">Add Category</button>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>
<script>
                        function validateForm() {
                            var x = document.forms["add_sub_category_form"]["sub_category_name"].value;
                            if (x == null || x == "") {
                                alert("Please Enter Category Name");
                                return false;
                            }
                        }
</script>