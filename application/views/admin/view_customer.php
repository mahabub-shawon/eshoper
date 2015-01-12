<div class="row-fluid">
    <div class="span12">
        <div class="widget blue">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> View Customer</h4>
                <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">    
                <form action="#" class="form-horizontal" name="myForm">
                    <label><strong>Customer Photo</strong></label> 
                    <img src="<?php echo base_url().$customer_info->customer_image;?>" height="200" width="200" alt="customer_images" />
                    <br /><br />
                    <label><strong>First Name:</strong></label> 
                    <input type="hidden" name="customer_id" class="span6 typeahead" id="typeahead"  value="<?php echo $customer_info->customer_id;?>" >
                    <input type="text" name="customer_first_name" size="35" class="required" value="<?php echo $customer_info->customer_first_name;?>" />
                    <br /><br />
                    <label><strong>Last Name:</strong></label>              
                    <input type="text" name="customer_last_name" size="35" class="required" value="<?php echo $customer_info->customer_last_name;?>" />
                    <br /><br />
                    <label><strong>User Name:</strong></label>
                    <input type="text" name="customer_user_name" size="35" class="required" value="<?php echo $customer_info->customer_user_name;?>" />
                    <br /><br />
                    <label><strong>Password:</strong></label>
                    <input type="text" name="customer_password" size="35" class="required" value="<?php echo $customer_info->customer_password;?>" />
                    <br /><br />
                    <label><strong>E-Mail Address:</strong></label>
                    <input type="email" name="customer_email" size="35" class="required email" value="<?php echo $customer_info->customer_email;?>" />
                    <br /><br />
                    <label><strong>Temporary Address:</strong></label>
                    <textarea name="customer_address_temporary" rows="4" cols="50" autofocus><?php echo $customer_info->customer_address_temporary;?></textarea>
                    <br /><br />
                    <label><strong>Permanent Address:</strong></label>
                    <textarea name="customer_address_permanent" rows="4" cols="50" autofocus><?php echo $customer_info->customer_address_permanent;?></textarea>
                    <br /><br />
                    <label><strong>City:</strong></label>
                    <input name="customer_city" type="text" size="35" class="required" value="<?php echo $customer_info->customer_city;?>" />
                    <br /><br />
                    <label><strong>State:</strong></label>
                    <input type="text" name="customer_state" size="35" class="required" value="<?php echo $customer_info->customer_state;?>" />
                    <br /><br />
                    <label><strong>Postal Code:</strong></label>
                    <input type="text" name="customer_postal_code" size="35" class="required" value="<?php echo $customer_info->customer_postal_code;?>" />
                    <br /><br />
                    <label><strong>Country:</strong></label>
                    <select name="customer_country">
                        <option value="">Select Country</option>
                        <option value="india">India</option>
                        <option value="usa">USA</option>
                        <option value="canada">Canada</option>
                    </select>
                    <br /><br />
                    <label><strong>Phone:</strong></label>
                    <input type="text" name="customer_phone" size="35" class="required" value="<?php echo $customer_info->customer_phone;?>" />
                    <span class="clear border_ddd"></span>
                    <br /><br />
                    <label><strong>Credit Card:</strong></label>
                    <input type="text" name="customer_credit_card" size="35" class="required" value="<?php echo $customer_info->customer_credit_card;?>" />
                    <br /><br />
                    <label><strong>Credit Card Type Id:</strong></label>
                    <input type="text" name="customer_credit_card_type_id" size="35" class="required"  value="<?php echo $customer_info->customer_credit_card_type_id;?>" />
                    <br /><br />
                    <label><strong>Card Expire:</strong></label>
                    <select name="customer_card_exp_month">
                        <option value="">Select Month</option>
                        <option value="january">January</option>
                        <option value="february">February</option>
                        <option value="march">March</option>
                    </select>               
                    <select class="dropdown_list" name="customer_card_exp_year">
                        <option value="">Select Year</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                    </select> 
                    <br /><br />
                    <label><strong>Billing Address:</strong></label>
                    <textarea name="customer_billing_address" rows="4" cols="50" autofocus><?php echo $customer_info->customer_billing_address;?></textarea>
                    <br /><br />
                    <label><strong>Billing City:</strong></label>
                    <input type="text" name="customer_billing_city" size="35" class="required" value="<?php echo $customer_info->customer_billing_city;?>" />
                    <br /><br />
                    <label><strong>Billing Region:</strong></label>
                    <input type="text" name="customer_billing_region" size="35" class="required" value="<?php echo $customer_info->customer_billing_region;?>" />
                    <br /><br />
                    <label><strong>Billing Postal Code:</strong></label>
                    <input type="text" name="customer_billing_postal_code" size="35" class="required" value="<?php echo $customer_info->customer_billing_postal_code;?>" />
                    <br /><br />
                    <label><strong>Billing Country:</strong></label>
                    <select name="customer_billing_country">
                        <option value="">Select Country</option>
                        <option value="india">India</option>
                        <option value="usa">USA</option>
                        <option value="canada">Canada</option>
                    </select> 
                    <br /><br />
                    <label><strong>Ship Address:</strong></label>
                    <textarea name="customer_ship_address" rows="4" cols="50" autofocus><?php echo $customer_info->customer_ship_address;?></textarea>
                    <br /><br />
                    <label><strong>Ship City:</strong></label>
                    <input type="text" name="customer_ship_city" size="35" class="required" value="<?php echo $customer_info->customer_ship_city;?>" />
                    <br /><br />
                    <label><strong>Ship Region:</strong></label>
                    <input type="text" name="customer_ship_region" size="35" class="required" value="<?php echo $customer_info->customer_ship_region;?>" />
                    <br /><br />
                    <label><strong>Ship Postal Code:</strong></label>
                    <input type="text" name="customer_ship_postal_code" size="35" class="required" value="<?php echo $customer_info->customer_ship_postal_code;?>" />
                    <br /><br />
                    <label><strong>Ship Country:</strong></label>
                    <select name="customer_ship_country">
                        <option value="">Select Country</option>
                        <option value="india">India</option>
                        <option value="usa">USA</option>
                        <option value="canada">Canada</option>
                    </select> 
                    <br /><br />
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.forms['myForm'].elements['customer_country'].value = '<?php echo $customer_info->customer_country; ?>';
    document.forms['myForm'].elements['customer_card_exp_month'].value = '<?php echo $customer_info->customer_card_exp_month; ?>';
    document.forms['myForm'].elements['customer_card_exp_year'].value = '<?php echo $customer_info->customer_card_exp_year; ?>';
    document.forms['myForm'].elements['customer_billing_country'].value = '<?php echo $customer_info->customer_billing_country; ?>';
    document.forms['myForm'].elements['customer_ship_country'].value = '<?php echo $customer_info->customer_ship_country; ?>';
</script>