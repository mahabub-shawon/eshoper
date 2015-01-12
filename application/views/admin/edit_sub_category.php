<div class="row-fluid">
    <div class="span12">
        <div class="widget green">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Edit Subcategory</h4>
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
                    <form name="edit_sub_category_form" onsubmit="return validateForm()" class="form-horizontal" action="<?php echo base_url(); ?>super_admin/update_sub_category/<?php echo $sub_category_info->sub_category_id;?>" method="POST">

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Subcategory Name</label>
                            <div class="controls">
                                <input type="text" name="sub_category_name" class="span12 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" value="<?php echo $sub_category_info->sub_category_name; ?>">
                                <input type="hidden" name="sub_category_id" class="span6 typeahead" id="typeahead"  value="<?php echo $sub_category_info->sub_category_id; ?>" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Select Category</label>
                            <select name="category_id" class="span6 typeahead" id="typeahead" data-provide="typeahead" style="margin-left: 1.8%;">
                                <option>Select Category</option>
                                <?php
                                foreach ($all_category as $v_allcategory) {
                                    ?>
                                    <option value="<?php echo $v_allcategory->category_id; ?>"><?php echo $v_allcategory->category_name; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Category Short Description</label>
                            <div class="controls">
                                <input type="text" name ="sub_category_short_description" value="<?php echo $sub_category_info->sub_category_short_description; ?>" class="span8 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                            </div>
                        </div>    
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Category Full Description</label>
                            <div class="controls">
                                <textarea type="text" name ="sub_category_full_description" class="span8 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                                <?php echo $sub_category_info->sub_category_full_description; ?>
                                </textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Publication Status</label>
                            <select name="sub_category_status" class="span6 typeahead" id="typeahead" data-provide="typeahead" style="margin-left: 1.8%;">
                                <option>Please Select One</option>
                                <option value="1">Publish</option>
                                <option value="0">Unpublish</option>
                            </select>
                        </div>
                        <div class="form-actions">
                            <button type="submit" value="Submit" class="btn btn-primary" name="btn">Update Sub Category</button>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>
<script>
                        document.forms['edit_sub_category_form'].elements['category_id'].value = '<?php echo $sub_category_info->category_id; ?>';
                        document.forms['edit_sub_category_form'].elements['sub_category_status'].value = '<?php echo $sub_category_info->sub_category_status; ?>';
                        function validateForm() {
                            var x = document.forms["myForm"]["category_name"].value;
                            if (x == null || x == "") {
                                alert("Please Enter Category Name");
                                return false;
                            }
                        }
</script>