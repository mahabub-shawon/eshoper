<!-- BEGIN PAGE HEADER-->   
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN THEME CUSTOMIZER-->
        <div id="theme-change" class="hidden-phone">
            <i class="icon-cogs"></i>
            <span class="settings">
                <span class="text">Theme Color:</span>
                <span class="colors">
                    <span class="color-default" data-style="default"></span>
                    <span class="color-green" data-style="green"></span>
                    <span class="color-gray" data-style="gray"></span>
                    <span class="color-purple" data-style="purple"></span>
                    <span class="color-red" data-style="red"></span>
                </span>
            </span>
        </div>
        <!-- END THEME CUSTOMIZER-->
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            Dashboard
        </h3>
        <ul class="breadcrumb">
            <li>
                <a href="<?php echo base_url();?>">Home</a>
                <span class="divider">/</span>
            </li>
            <li class="active">
                Add Product
            </li>
            <li class="pull-right search-wrap">
                <form action="http://thevectorlab.net/metrolab/search_result.html" class="hidden-phone">
                    <div class="input-append search-input-area">
                        <input class="" id="appendedInputButton" type="text">
                        <button class="btn" type="button"><i class="icon-search"></i> </button>
                    </div>
                </form>
            </li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<div class="row-fluid">
    <div class="span12">
        <div class="widget green">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Add Product</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <form action="<?php echo base_url()?>super_admin/save_product" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    <h3 style="color:green">
                        <?php
                        $msg =$this->session->userdata('message');
                        if(isset($msg)){
                        echo $msg;
                        $this->session->unset_userdata('message');
                        }
                        ?>
                    </h3>
                    <div class="control-group">
                        <label class="control-label">Product Name</label>
                        <div class="controls">
                            <input type="text" name="product_name" placeholder="Enter Product Name" class="input-large" />
                        </div>
                    </div>                    
                    <div class="control-group">
                        <label class="control-label">Product Category</label>
                        <div class="controls">
                            <select name="category_id" class="span4 typeahead" id="typeahead" data-provide="typeahead" tabindex="1">
                                <option>Select Product Category</option>
                                <?php
                                    foreach ($all_category as $v_category) {
                                ?>
                                    <option value="<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name;?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Sub Category</label>
                        <div class="controls">
                            <select name="sub_category_id" class="span4 typeahead" tabindex="1">
                                <option>Select Product Sub Category</option>
                                <?php
                                    foreach ($all_sub_category as $v_subcategory) {
                                ?>
                                <option value="<?php echo $v_subcategory->sub_category_id;?>"><?php echo $v_subcategory->sub_category_name;?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Summary</label>
                        <div class="controls">
                            <textarea name="product_summary" class="input-xlarge" id="input" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Description</label>
                        <div class="controls">
                            <textarea name="product_description" class="input-xxlarge" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Images</label>
                        <div class="controls">
                            <input type="file" name="product_image_1" value="">
                            <input type="file" name="product_image_2" value="">
                            <input type="file" name="product_image_3" value="">
                            <input type="file" name="product_image_4" value="">
                            <input type="file" name="product_image_5" value="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Availability</label>
                        <div class="controls">
                            <select name="product_availability" class="input-large m-wrap" tabindex="1">
                                <option value="0">Select Availability</option>
                                <option value="1">In Stock</option>
                                <option value="0">Out Of Stock</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Model</label>
                        <div class="controls">
                            <input type="text" name="product_model" placeholder="Enter Product Model" class="input-large" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Manufacturer</label>
                        <div class="controls">
                            <input type="text" name="product_manufacturer" placeholder="Enter Product Manufacturer" class="input-large" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Quantity</label>
                        <div class="controls">
                            <input type="text" name="product_quantity" placeholder="Enter Product Manufacturer" class="input-large" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Price In BDT</label>
                        <div class="controls">
                            <input type="text" name="product_price_in_bdt" placeholder="Enter Bangladesh Price" class="input-large" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Discount Price In BDT</label>
                        <div class="controls">
                            <input type="text" name="product_discount_price_in_bdt" placeholder="Enter Bangladesh Discount Price" class="input-large" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Price In USD</label>
                        <div class="controls">
                            <input type="text" name="product_price_in_usd" placeholder="Enter USD Price" class="input-large" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Discount Price In USD</label>
                        <div class="controls">
                            <input type="text" name="product_discount_price_in_usd" placeholder="Enter Discount USD Price" class="input-large" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Price In GBP</label>
                        <div class="controls">
                            <input type="text" name="product_price_in_gbp" placeholder="Enter GBP Price" class="input-large" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Discount Price In GBP</label>
                        <div class="controls">
                            <input type="text" name="product_discount_price_in_gbp" placeholder="Enter Discount GBP Price" class="input-large" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Price In EURO</label>
                        <div class="controls">
                            <input type="text" name="product_price_in_euro" placeholder="Enter EURO Price" class="input-large" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Discount Price In EURO</label>
                        <div class="controls">
                            <input type="text" name="product_discount_price_in_euro" placeholder="Enter Discount EURO Price" class="input-large" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product Display In Homepage</label>
                        <div class="controls">
                            <select name="product_display_in_homepage" class="input-large m-wrap" tabindex="1">
                                <option value="0">Display Status</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Publication Status</label>
                        <div class="controls">
                            <select name="product_publication_status" class="input-large m-wrap" tabindex="1">
                                <option value="0">Select Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
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