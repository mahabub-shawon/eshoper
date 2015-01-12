
<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php
                        $j = 1;
                        foreach ($slider_product as $v_slider_product) {
                            ?>
                            <li data-target="#slider-carousel" data-slide-to=" <?php echo $v_slider_product->product_id; ?>" class="<?php
                            if ($j == 1) {
                                echo 'active';
                                $j++;
                            } else {
                                echo '';
                                $j++;
                            }
                            ?>"></li>
                            <?php } ?>
                    </ol>

                    <div class="carousel-inner">
                        <?php
                        $j = 1;
                        foreach ($slider_product as $v_slider_product) {
                            ?>
                            <div class="item <?php
                            if ($j == 1) {
                                echo 'active';
                                $j++;
                            } else {
                                echo '';
                                $j++;
                            }
                            ?>">
                                <div class="col-sm-6">
                                    <h1><span> <?php echo $v_slider_product->product_name; ?></span></h1>
                                    <h2><?php echo $v_slider_product->product_summary; ?></h2>
                                    <p><?php echo $v_slider_product->product_description; ?></p>
                                    <button type="button" class="btn btn-default get">View Detail</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="<?php echo base_url() . $v_slider_product->product_image_1; ?>" class="girl img-responsive" alt="" />
                                    <img src="<?php echo base_url(); ?>site/images/home/pricing.png"  class="pricing" alt="" />
                                </div>
                            </div>
                        <?php } ?>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<!--/slider-->