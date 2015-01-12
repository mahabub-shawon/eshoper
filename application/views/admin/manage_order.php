<div>
<ul class="breadcrumb">
        <li>
                <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
                <a href="#">Manage Order</a>
        </li>
</ul>
</div>

<div class="row-fluid sortable">		
<div class="box span12">
        <div class="box-header well" data-original-title>
                <h2><i class="icon-user"></i> Members</h2>
                <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                </div>
        </div>
        <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                  <thead>
                          <tr>
                                  <th>Customer Name</th>
                                  <th>Order total</th>								  
                                  <th>Order Date</th>
                                  <th>Order Status</th>
                                  <th>Actions</th>
                          </tr>
                  </thead>   
                  <tbody>
                      <?php
                      foreach($all_order as $v_all_order)
                      {
                      ?>
                        <tr>
                                <td><?php echo $v_all_order->first_name.' '.$v_all_order->last_name;?></td>
                                <td class="center"><?php echo $v_all_order->order_total;?></td>
                                <td class="center"><?php echo $v_all_order->order_date_time;?></td>
                                <td class="center"><?php echo $v_all_order->order_status;?></td>
                                <td class="center">                                    
                                        <a class="btn btn-info" href="" title="Edit">
                                                <i class="icon-edit icon-white"></i>  
                                        </a>
                                        <a class="btn btn-danger" href="" title="Delete" onclick="return check_delete();">
                                                <i class="icon-trash icon-white"></i> 
                                        </a>
                                    <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/view_invoice/<?php echo $v_all_order->order_id;?>" title="Invoice">
                                                <i class="icon-document icon-white"></i> 
                                        </a>
                                </td>
                        </tr>
                        <?php
                      }
                        ?>

                  </tbody>
          </table>            
        </div>
</div><!--/span-->
