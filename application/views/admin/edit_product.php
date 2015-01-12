<div class="row-fluid">
    <div class="span12">
        <div class="widget green">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Edit Product</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <form action="<?php echo base_url(); ?>super_admin/update_product" method="POST" class="form-horizontal" enctype="">
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
                            <select name="" class="input-large m-wrap" tabindex="1">
                                <option value="Category 1">Select Category</option>
                                <option value="Category 2">Category 2</option>
                                <option value="Category 3">Category 5</option>
                                <option value="Category 4">Category 4</option>
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
                    <div class="form-actions">
                        <button type="submit" class="btn"><i class="icon-ok"></i> Save</button>
                        <button type="button" class="btn"><i class=" icon-remove"></i> Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>