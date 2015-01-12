<div class="features_items"><!--features_items-->
        <h2 class="title text-center">Features Items</h2>
        <?php foreach ($featured_product as $v_featured_product) { ?>
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="<?php echo base_url() . $v_featured_product->product_image_1; ?>" alt="" />
                            <h2><?php echo $v_featured_product->product_price_in_bdt; ?></h2>
                            <p><?php echo $v_featured_product->product_name; ?></p>
                            
                            <a href="<?php echo base_url();?>product/product_detail/<?php echo $v_featured_product->product_id;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>view Detail</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <a href="<?php echo base_url();?>cart/add_to_cart/<?php echo $v_featured_product->product_id;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                <h2><?php echo $v_featured_product->product_price_in_bdt; ?></h2>
                                <p><?php echo $v_featured_product->product_name; ?></p>
                                <a href="<?php echo base_url();?>product/product_detail/<?php echo $v_featured_product->product_id;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>view Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div><!--features_items-->