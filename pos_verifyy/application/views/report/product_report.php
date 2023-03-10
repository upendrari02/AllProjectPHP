<!doctype html>
<html class="fixed">
<head>
		<?php $this->load->view('common/header_link'); ?>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/catalogs/assets/modal/modal.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/catalogs/assets/modal/notifications/Lobibox.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/catalogs/assets/modal/notifications/notifications.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/catalogs/assets/vendor/custom-scrollbar/jquery.mCustomScrollbar.css">
    <style type="text/css">
        .form-group{
            padding: 0px;
        }    
        
       .form-group .form-control{
           
         width: 100%;  
         padding-left: 30px;
         border:1px solid #43444a;
       }
        .form-group .form-control:option{
            padding: 10px;
        }
        
        .status{
            margin-bottom: 0px;
        }
        
        .search_input_i{
            width:30px;
            height: 35px;
            position: absolute;
            color: #0088cc;
            padding: 5px 9px;
        }
    </style>
</head>
<body>
		<section class="body">
			<!-- success message -->
			<div class="success_message">Kot Genrated Successfully</div>
			<!-- success message -->
      <?php $this->load->view("common/titlebar"); ?>

			<div class="inner-wrapper">
			  <?php $this->load->view('common/sidemenu'); ?>

				<section role="main" class="content-body" >
						<div class="col-md-12" style="padding:0px; margin-bottom:15px;">
						<section class="section_card" id="table_section">
                <div class="row">
                    <form action="" method="post">
                 <div class="panel-body " style="padding-top:5px;">
                    <div class="col-md-5" style="padding:6px; padding-left:15px;">
                    <div class="form-group">						
				       	<div class="input-daterange input-group"  data-plugin-datepicker style="width:100%;" >
				       		<span class="input-group-addon">
				       			<i class="fa fa-calendar"></i>
				       		</span>
				       		<input type="text" class="form-control" name="start" value="<?php if(isset($return_start)){ echo $return_start; } ?>" placeholder="dd-mm-yyyy" style="text-align:left;" autocomplete="off">
				       		<span class="input-group-addon">to</span>
				       		<input type="text" class="form-control" name="end" value="<?php if(isset($return_end)){ echo $return_end; } ?>" placeholder="dd-mm-yyyy" style="text-align:left;" autocomplete="off">
				       	</div>
                     </div>
                   </div> 
                     
                  
                   
                   <div class="col-md-2" style="padding:6px;">
                     <div class="form-group">
                          <select class="form-control" name="order_status">
                             <option value="">Order Status</option>
                             <option value="pending" <?php if(isset($return_order_status)){  if($return_order_status == 'pending'){ echo 'selected'; } } ?>>Pending</option>
                             <option value="placed" <?php if(isset($return_order_status)){  if($return_order_status == 'placed'){ echo 'selected'; } } ?>>Placed</option>
                             <option value="dispatch" <?php if(isset($return_order_status)){  if($return_order_status == 'dispatch'){ echo 'selected'; } } ?>>Dispatch</option>
                             <option value="delivered" <?php if(isset($return_order_status)){  if($return_order_status == 'delivered'){ echo 'selected'; } } ?>>Delivered</option>
                             <option value="canceled" <?php if(isset($return_order_status)){  if($return_order_status == 'canceled'){ echo 'selected'; } } ?>>Canceled</option>
                         </select> 
                     </div>
                    </div>
                     <div class="col-md-1" style="padding:6px;">
                     <div class="form-group">
                          <button type="submit" class="btn btn-primary" name="submit" value="submit" style="width:100%;  height:32px; border-radius:5px; background-color:#0088cc; color:#ffffff;">Submit</button>
                     </div>
                   </div>
                  <!-- <div class="col-md-2" style="padding:6px;">
                     <div class="form-group">
                          <span class="search_input_i"><i class="fa fa-search"></i></span>
                          <input type="text" class="form-control" placeholder="Date" name="" value="">
                     </div>
                   </div>  
                     
                   <div class="col-md-2" style="padding:6px;">
                     <div class="form-group">
                          <button type="button" class="btn btn-primary" name="button" style="width:100px;  height:32px; border-radius:5px; background-color:#0088cc; color:#ffffff;">Submit</button>
                     </div>
                   </div> -->

                 </div>
                    </form>
               </div>
								 <header class="panel-heading" style="padding:0px 15px;">
								     	<div class="heading_box" style=" border-bottom: none; padding: 6px 2px; height:36px; background-color:#27293d;">
									        <h2 class="panel-title" style="color:#dbd6d6; font-size:16px; line-height:10px; text-transform:uppercase;">
														<i class="ion-android-radio-button-on" style="margin-right:10px;"></i>
														Order Report <i class="ion-chevron-right" style="padding:0px 10px; color:#0088cc;"></i> <?php if(isset($return_date)){ echo date('d-M-Y',strtotime($return_date)); } ?>
													</h2>
									    </div>
								</header>
							  <div class="panel-body " style="padding-top:0px;">
                  <table class="table mb-none" id="table" data-toggle="table" data-pagination="true" data-show-columns="true" data-show-pagination-switch="true"  data-show-toggle="true"  data-cookie="true"
                          data-show-export="true"  data-toolbar="#toolbar" style="border-bottom: 1px solid #424351;">
                       <thead>
    <tr>
                          <th>Sr. No.</th>
                          <th>Order Date</th>
                          <th>Order Time</th>
                          <th>Order ID</th>
                          <!--<th>Item Image</th>-->
                          <th>Item Name</th>
                          <th>Quantity</th>
                          <th>Total Price</th>
                          
                      </tr>
     </thead>
     <tbody id="customer_table">
                      <?php $i = 1; if(isset($list)){ $sum_amount = 0; $sum_qty = 0; foreach($list as $row){ ?>
                      <?php foreach(json_decode($row->online_order_details) as $rows){ ?>
                       <a href="<?php echo base_url(); ?>report/transaction_full_report/<?php echo $row->transaction_date; ?>"> <tr>

                         <td><?php echo $i++; ?></td>
                         <td><?php echo date('d-M-Y',strtotime($row->online_order_date)); ?></td>
                         <td><?php echo date('i:s:a',strtotime($row->online_order_date)); ?></td>
                         <td><?php echo $row->online_order_id; ?></td>
                        <!-- <td><img src="<?php echo base_url(); ?>uploads/product_image/<?php echo $rows->item_img; ?>" style="border-radius:2px; border:1px solid #45496d;" height="20" ></td>   -->
                         <td><?php echo $rows->item_name; ?></td>
                         <td><?php echo $rows->item_qty; $sum_qty += $rows->item_qty; ?></td>  
                         <td><span class="rs_span"><i class="fa fa-rupee"></i> </span> <?php echo $rows->item_price;  $sum_amount += $rows->item_price; ?></td>   
                        
                         </tr>
                      </a>
                     <?php } ?>
            <?php }} ?>
               </tbody>
                <tfoot>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                    <td><?php  if(isset($sum_qty)){ echo $sum_qty; }else{ 0; }  ?></td>
                    <td><span class="rs_span"><i class="fa fa-rupee"></i> </span> <?php  if(isset($sum_amount)){ echo $sum_amount; }else{ 0; }  ?></td>
                    
                </tfoot>
             </table>
							</div>
						</section>
					</div>

		<!-- main section -->
        </section>
	 <!-- inner wrapper -->
		</div>
		<?php $this->load->view('common/sidebar_right'); ?>
		<!-- Body section -->
		</section>
		<!-- Delete confimation model -->
		          <div id="del_alert_action" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog" data-backdrop="static" data-keyboard="false" style="width:460px; margin:auto;">
										 <div class="modal-dialog" style="width:90%;">
												 <div class="modal-content">
														 <div class="modal-close-area modal-close-df">
																 <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
														 </div>
														 <div class="modal-body" style="padding: 30px 30px; background-color:#363956; text-align:center; color:#ffffff;">
																 <span class="ion-ios-flame-outline" style="font-size:50px; color:#ff4747;"></span>
																 <h2 style="margin-top:6px;">Are You Sure!</h2>
																 <p class="fail_model_p">Do you want to delete this account?</p>
														 </div>
														 <div class="modal-footer danger-md" style=" background-color:#363956; border-top:none;">
																 <button class="btn-transparent btn-red" type="button" data-dismiss="modal" style="width:80px;">No</button>
																 <button data-del_id="" id="del_bt" class="btn-transparent btn-green" type="button"  style="width:80px; ">Yes</button>
					                   </div>
												 </div>
										 </div>
								 </div>

<?php $this->load->view('common/footer_script'); ?>
<script src="<?php echo base_url(); ?>/catalogs/assets/javascripts/image-compressor.js"></script>
<script src="<?php echo base_url(); ?>/catalogs/assets/modal/notifications/Lobibox.js"></script>
<script src="<?php echo base_url(); ?>/catalogs/assets/modal/notifications/notification-active.js"></script>
<script src="<?php echo base_url(); ?>/catalogs/assets/vendor/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript">
		 $(document).ready(function(){
     // set scroll position
		
        
        $(document).on('change','select[name=change_order_status]',function(){
            var status = $(this).val();
            var order_id = $(this).data('order_id');
            var href = window.location.href;
            var return_href = href.substring(href.lastIndexOf('/'));
            //alert(return_href);
            if(status && order_id){
                window.location.href = '<?php echo base_url(); ?>orders/order_accept_or_reject/'+order_id+'/'+status+'/'+return_href;
            }
            
        });
});
</script>
</body>
</html>
