<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Image</td>
                        <td class="name">Product Name</td>
                        <td class="price">Unit Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Sub Total</td>
                        <td class="remove">Remove</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $contents = $this->cart->contents();
                    foreach ($contents as $v_contents) {
                        ?>
                        <tr>
                            <td class="cart_product"><a href=""><img src="<?php echo base_url() . $v_contents['image']; ?>" alt="product image for <?php echo $v_contents['id']; ?>" width="100px" height="100px"></a></td>
                            <td class="cart_description"><h4><a href=""><?php echo $v_contents['name']; ?></a></h4><p>Product ID:<?php echo $v_contents['id']; ?> </p></td>
                            <td class="cart_price"><p><?php echo $v_contents['price']; ?></p></td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $v_contents['qty']; ?>" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">  <?php echo $v_contents['subtotal']; ?></p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="<?php echo base_url(); ?>cart/remove/<?php echo $v_contents['rowid']; ?>"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->




<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>What would you like to do next?</h3>
            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="chose_area">
                    <a class="btn btn-default check_out" href="<?php echo base_url()?>">Continue Shopping</a>
                </div>
            </div>

            <?php
            $sub_total = $this->cart->total();
            ?>
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Cart Sub Total  <span><?php echo '$' . $sub_total; ?></span></li>
                        <li>Tax             <span><?php $total_vat = $sub_total * 0.15;
            echo '$' . $total_vat;
            ?></span></li>
                        <li>Shipping Cost   <span>Free</span></li>
<?php $total = $sub_total + $total_vat; ?>
                        <li>Total           <span><?php echo '$' . $total; ?> </span></li>
                    </ul>
                    <a class="btn btn-default update" href="">Update</a>
                    <a class="btn btn-default check_out" href="<?php echo base_url()?>checkout">Check Out</a>
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->