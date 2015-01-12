<div class="row-fluid">
    <div class="span12">
        <div class="widget green">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> View Product</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <form name="myForm" action="" method="" class="form-horizontal" enctype="">
                    <h3 style="color:green">
                        <?php
                        $msg=$this->session->userdata('message');
                        if(isset($msg)){
                        echo $msg;
                        $this->session->unset_userdata('message');
                        }
                        ?>
                    </h3>
                    <div class="control-group">
                        <label class="control-label">Product Name</label>
                        <div class="controls">
                            <input type="hidden" name="product_id" class="span6 typeahead" id="typeahead"  value="<?php echo $product_info->product_id;?>" >
                            <input type="text" name="product_name" class="input-large" value="<?php echo $product_info->product_name;?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Category</label>
                        <div class="controls">
                            
                            
                      
                            
                            
                            <select name="category_id" class="span4 typeahead" id="typeahead" data-provide="typeahead" tabindex="1">
                                <option>Select Product Category</option>
                                <?php
                                    foreach ($all_category as $v_allcategory) {
                                ?>
                                    <option value="<?php echo $v_allcategory->category_id;?>"><?php echo $v_allcategory->category_name;?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Subcategory</label>
                        <div class="controls">
                            <select name="sub_category_id" class="span4 typeahead" tabindex="1">
                                <option>Select Product Subcategory</option>
                                <?php
                                    foreach ($all_subcategory as $v_allsubcategory) {
                                ?>
                                    <option value="<?php echo $v_allsubcategory->sub_category_id;?>"><?php echo $v_allsubcategory->sub_category_name;?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Summary</label>
                        <div class="controls">
                            <textarea name="product_summary" class="input-xlarge" id="input" rows="3"><?php echo $product_info->product_summary;?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Description</label>
                        <div class="controls">
                            <textarea name="product_description" class="input-xxlarge" rows="3"><?php echo $product_info->product_description;?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Photo</label>
                        <div class="controls">
                            <input type="file" name="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Availability</label>
                        <div class="controls">
                            <select name="product_availability" class="input-large m-wrap" tabindex="1">
                                <option value="Category 1">Select Availability</option>
                                <option value="Category 2">In Stock</option>
                                <option value="Category 2">Out Of Stock</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Model</label>
                        <div class="controls">
                            <input type="text" name="product_model" class="input-large" value="<?php echo $product_info->product_model;?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Manufacturer</label>
                        <div class="controls">
                            <input type="text" name="product_manufacturer" class="input-large" value="<?php echo $product_info->product_manufacturer;?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Quantity</label>
                        <div class="controls">
                            <input type="text" name="product_quantity" class="input-large" value="<?php echo $product_info->product_quantity;?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Price In BDT</label>
                        <div class="controls">
                            <input type="text" name="product_price_in_bdt" class="input-large" value="<?php echo $product_info->product_price_in_bdt;?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Discount Price In BDT</label>
                        <div class="controls">
                            <input type="text" name="product_discount_price_in_bdt" class="input-large" value="<?php echo $product_info->product_discount_price_in_bdt;?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Price In USD</label>
                        <div class="controls">
                            <input type="text" name="product_price_in_usd" class="input-large" value="<?php echo $product_info->product_price_in_usd;?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Discount Price In USD</label>
                        <div class="controls">
                            <input type="text" name="product_discount_price_in_usd" class="input-large" value="<?php echo $product_info->product_discount_price_in_usd;?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Price In GBP</label>
                        <div class="controls">
                            <input type="text" name="product_price_in_gbp" class="input-large" value="<?php echo $product_info->product_price_in_gbp;?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Discount Price In GBP</label>
                        <div class="controls">
                            <input type="text" name="product_discount_price_in_gbp" class="input-large" value="<?php echo $product_info->product_discount_price_in_gbp;?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Price In EURO</label>
                        <div class="controls">
                            <input type="text" name="product_price_in_euro" class="input-large" value="<?php echo $product_info->product_price_in_euro;?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Discount Price In EURO</label>
                        <div class="controls">
                            <input type="text" name="product_discount_price_in_euro" class="input-large" value="<?php echo $product_info->product_discount_price_in_euro;?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Display In Homepage</label>
                        <div class="controls">
                            <select name="product_display_in_homepage" class="input-large m-wrap" tabindex="1">
                                <option value="Category 1">Display Status</option>
                                <option value="Category 2">Yes</option>
                                <option value="Category 2">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Publication Status</label>
                        <div class="controls">
                            <select name="product_publication_status" class="input-large m-wrap" tabindex="1">
                                <option value="Category 1">Select Status</option>
                                <option value="Category 2">Published</option>
                                <option value="Category 2">Unpublished</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    document.forms['edit_book_form'].elements['publication_status'].value = '<?php echo $book_info->publication_status; ?>';
    document.forms['edit_book_form'].elements['featured_book'].value = '<?php echo $book_info->featured_book; ?>';
    document.forms['myForm'].elements['category_id'].value = '<?php echo $v_allsubcategory->category_id; ?>';
    
</script>