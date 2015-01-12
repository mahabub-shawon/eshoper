<div class="category-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <?php
            $j = 1;
            foreach ($category as $v_category) {
                ?>
                <li class="<?php
                if ($j == 1) {
                    echo 'active';
                    $j++;
                } else {
                    echo '';
                    $j++;
                }
                ?>"><a href="#<?php echo $v_category->category_name; ?>  " data-toggle="tab" ><?php echo $v_category->category_name; ?></a></li>

            <?php } ?>
        </ul>
    </div>

    <div class="tab-content">
        <?php
        $j = 1;
        foreach ($category as $v_category) {
            ?>
            <div class="tab-pane fade <?php
            if ($j == 1) {
                echo 'active';
                $j++;
            } else {
                echo '';
                $j++;
            }
            ?> in" id="<?php echo $v_category->category_name; ?>" >
                 <?php foreach ($tab_product[$v_category->category_id] as $v_tab_product) { ?>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php echo base_url() . $v_tab_product->product_image_1; ?>" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        <?php } ?>
    </div>
</div><!--/category-tab-->