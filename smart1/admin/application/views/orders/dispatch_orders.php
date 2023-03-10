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
            font-size:12px;
        }
        
        .search_input_i{
            width:30px;
            height: 35px;
            position: absolute;
            color: #0088cc;
            padding: 5px 9px;
        }
        
        .form-control[disabled]{
            background-color: #323746;
        }
        
        .order_quick_detail{
            width:100%; height:250px; background:#1e1e2f;
            border: 1px solid #3e3e60;
            padding: 10px;
            overflow: auto;
        }
        
        .order_quick_detail p{
            margin-bottom: 0px;
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
                 <div class="panel-body " style="padding-top:5px;">
                   <div class="col-md-3" style="padding:6px; padding-left:15px;">
                     <div class="form-group">
                          <span class="search_input_i"><i class="fa fa-search"></i></span>
                          <input type="text" class="form-control" name="" placeholder="Name" value="" >
                     </div>
                   </div>
                   <div class="col-md-3" style="padding:6px;">
                     <div class="form-group">
                          <span class="search_input_i"><i class="fa fa-search"></i></span>
                          <input type="text" class="form-control" name="" placeholder="Mobile No" value="">
                     </div>
                   </div>
                   <div class="col-md-3" style="padding:6px;">
                     <div class="form-group">
                          <span class="search_input_i"><i class="fa fa-search"></i></span>
                          <input type="text" class="form-control" placeholder="Date" name="" value="">
                     </div>
                   </div>
                   <div class="col-md-3" style="padding:6px;">
                     <div class="form-group">
                          <span class="search_input_i"><i class="fa fa-search"></i></span>
                          <input type="text" class="form-control" name="" placeholder="Mobile No" value="">
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
               </div>
								 <header class="panel-heading" style="padding:0px 15px;">
								     	<div class="heading_box" style=" border-bottom: none; padding: 6px 2px; height:36px; background-color:#27293d;">
									        <h2 class="panel-title" style="color:#dbd6d6; font-size:16px; line-height:10px; text-transform:uppercase;">
														<i class="ion-android-radio-button-on" style="margin-right:10px;"></i>
														Category List
													</h2>
									    </div>
								</header>
							  <div class="panel-body " style="padding-top:0px;">
                  <table class="table mb-none" id="table" data-toggle="table" data-pagination="true" data-show-columns="true" data-show-pagination-switch="true"  data-show-toggle="true"  data-cookie="true"
                          data-show-export="true"  data-toolbar="#toolbar" style="border-bottom: 1px solid #424351;">
                       <thead>
    <tr>
                          <th>Sr. No.</th>
                          <?php if($this->session->userdata('user_role') == 'master admin'){ ?>
                          <th>Outlet</th>
                          <?php } ?>
                          <th>Order Date</th>
                          <th>Customer Name</th>

                          <th>Phone 1</th>

                          <th>Delivery Date</th>
                          <th>Order Status</th>
                          <th>Delivery Person</th>
                          <th>Action</th>
                          <th>View</th>

                      </tr>
     </thead>
     <tbody id="customer_table">
                      <?php $i = 1; if(isset($orders_list)){ foreach($orders_list as $row){ ?>

                        <tr>

                         <td><?php echo $i++; ?></td>
                         <?php if($this->session->userdata('user_role') == 'master admin'){ ?>   
                          <td><?php echo $row->outlet_name; ?></td> 
                        <?php } ?>     
                         <td><?php echo date('d-M-Y',strtotime($row->online_order_date)); ?></td>
                         <td><?php echo $row->customer_name; ?></td>

                         <td><?php echo $row->contact_1; ?></td>

                         <td><?php echo date('d-M-Y',strtotime($row->delivery_date)); ?></td>
                         <td>
                           <?php if($row->order_status == ''){?> <p class="status" style="background-color:#0088cc; width:80px; text-align:center; color:#ffffff; font-weight:700; border-radius:30px;">New</p> <?php } ?>
                           <?php if($row->order_status == 'placed'){?> <p class="status" style="background-color:#f8cd21; width:80px; text-align:center; color:#ffffff; font-weight:700; border-radius:30px;">Placed</p> <?php } ?>
                           <?php if($row->order_status == 'dispatched'){?> <p class="status" style="background-color:#e335a7; width:80px; text-align:center; color:#ffffff; font-weight:700; border-radius:30px;">Dispatched</p> <?php } ?>
                        <?php if($row->order_status == 'delivered'){?> <p class="status" style="background-color:#019727; width:80px; text-align:center; color:#ffffff; font-weight:700; border-radius:30px;">Delivered</p> <?php } ?>     
                           <?php if($row->order_status == 'canceled'){?> <p class="status" style="background-color:#0088cc; width:80px; text-align:center; color:#ffffff; font-weight:700; border-radius:30px;">Canceled</p> <?php } ?>

                         </td>
                            <td><select class="form-control"  name="delivery_person" data-order_id="<?php echo $row->online_order_id; ?>" style="height:25px; padding:0px 5px;">
                                  <option value="">Delivery Person</option>
                                  <?php if(isset($all_delivery_person)){ foreach($all_delivery_person as $my_row){ ?>
    
                                   <option value="<?php echo $my_row->staff_id; ?>" <?php if($row->delivery_person == $my_row->staff_id){ echo 'selected'; } ?> ><?php echo $my_row->name; ?> </option>
                                   <?php } } ?>
                                </select>
                            </td>  
                            
                            <td><select class="form-control" data-order_id="<?php echo $row->online_order_id; ?>" name="change_order_status"  style="height:25px; padding:0px 5px;" disabled>
                                <option value="">Status</option>
                               <option value="placed" <?php if( $row->order_status == 'placed'){ echo 'selected'; } ?>>Accept </option>
                                <option value="canceled" <?php if( $row->order_status == 'canceled'){ echo 'selected'; } ?>>Cancel</option>
                                <option value="dispatched" <?php if( $row->order_status == 'dispatched'){ echo 'selected'; } ?>>Dispatch</option>
                                </select>
                            </td>    
                         <td> <button type="button" class="btn view_bt" name="click_tr" data-tr_id="<?php echo $row->online_order_id; ?>" style=""><i class="fa fa-eye" style="color:#ffffff;"></i></button> </td>

                         </tr>
                          <tr class="order_quick_detail_tr" id="<?php echo $row->online_order_id; ?>" style="display:none;" >
                            <td    colspan="<?php if($this->session->userdata('user_role') == 'master admin'){ echo '10'; }else{ echo '9'; } ?>"  style=" padding:0px;">
                                <div class="order_quick_detail"  style="">
                                    <div class="col-md-4">
                                        <p style="padding-bottom:5px; border-bottom:1px solid #2f3135; margin-bottom:8px;">Item Details</p>
                                        
                                         <?php foreach(json_decode($row->online_order_details) as $items){ ?>
								<div class="row" style="padding:10px;  margin-bottom:5px;">
                                    <div class="col-md-6" style="width:120px;">
                                        <img  src="<?php echo base_url(); ?>uploads/product_image/<?php echo $items->item_img; ?>"  style="width:100px; border:1px solid #5b618e; border-radius:5px;">
                                    </div>   
                                    
                                    <div class="col-md-6">
                                        <p style="margin-bottom:2px; color:#ffffff;">Item Name: <?php echo $items->item_name;  ?></p>
                                        <p style="margin-bottom:2px; color:#ffffff;">Quantity: <?php echo $items->item_qty;  ?></p>
                                        <p style="margin-bottom:2px; color:#ffffff;">Total Price: <?php echo $items->item_price;  ?></p>
                                        
                                    </div>
                                 </div>    
                                 
                                 <?php } ?>
                                
                                    </div>
                                     <div class="col-md-4">
                                      <p style="padding-bottom:5px; border-bottom:1px solid #2f3135; margin-bottom:8px;">Delivery Details</p>     
                                         
                                      <p><label> Receiver_name:</label> <?php echo json_decode($row->delivery_details)[0]->name; ?></p>
                                      <p><label> Reciiver Mobile No.:</label> <?php echo json_decode($row->delivery_details)[0]->mobile_no; ?></p>
                                     <!-- <p><label> City.:</label> <?php echo json_decode($row->delivery_details)[0]->city; ?></p>
                                     <p><label> Street:</label> <?php echo json_decode($row->delivery_details)[0]->colony; ?></p> -->
                                     <p><label> Delivery Address:</label> <?php echo json_decode($row->delivery_details)[0]->address; ?></p>
                                                                     <p><label> Delivery Time:</label> <?php  if(json_decode($row->delivery_details)[0]->delivery_type == 'now'){ echo 'Now'; }else{echo json_decode($row->delivery_details)[0]->time_slot;}  ?></p>
                                    <p><label> Remark:</label> <?php echo json_decode($row->delivery_details)[0]->remark; ?></p>
                                
                                
                                    </div>
                                     <div class="col-md-4">
                                       <p style="padding-bottom:5px; border-bottom:1px solid #2f3135; margin-bottom:8px;">Order Details</p>
                                         
                                       <p><label> Order Date:</label> <?php echo date('d-M-Y',strtotime($row->online_order_date)); ?></p>
                                      <p><label> Delivery Date:</label> <?php echo date('d-M-Y',strtotime($row->delivery_date)); ?></p>
                                     
                                      <p><label> Sub Total:</label> <?php echo $row->cart_total; ?></p>
                                      <p><label> Tax:</label> <?php echo $row->order_tax; ?></p>
                                      <p><label> Packing Charge:</label> <?php echo $row->packing_charge; ?></p>
                                      <p><label> Delivery Charge:</label> <?php echo $row->delivery_charge; ?></p>
                                     
                                      <p><label> Total Sell:</label> <?php echo $row->total_order_price; ?></p>     
                                         
                                     <?php if($row->point_discount > 0){ ?>
                                      <p><label> Point Discount:</label> <?php echo $row->point_discount; ?></p>
                                     <?php } ?>
                                     
                                     <?php if($row->coupan_discount > 0){ ?>
                                     <p><label> Coupan Discount:</label> <?php echo $row->coupan_discount; ?></p>
                                      <?php } ?>
                                    
                                     
                                      <p><label> Paid Amount:</label> <?php echo $row->paid_amount; ?></p>
                                     
                                     
                                     <p><label> Order Status:</label> <?php if($row->order_status == ''){ echo 'Pending'; }else{ echo $row->order_status;} ?> </p>
                                
                                    </div>
                                </div>
                            </td>
                      
                       </tr>
                             
            <?php }} ?>
              </tbody>
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
		
        
        $(document).on('change','select[name=delivery_person]',function(){
           
            var order_id = $(this).data('order_id');
            var delivery_person = $(this).val();
            
            var href = window.location.href;
            var return_href = href.substring(href.lastIndexOf('/'));
            
            if(order_id && delivery_person){
                window.location.href = '<?php echo base_url(); ?>orders/change_order_delivery_person/'+order_id+'/'+delivery_person+'/'+return_href;
            }
            
        });
             
        $('.order_quick_detail_tr').hide();   
             
        $('.order_quick_detail_tr td').css('padding','0px');     
             
        $(document).on('click','button[name=click_tr]',function(){
                       
             var tr_id = $(this).data('tr_id'); 
             $('tr[id='+tr_id+']').toggle();
        }); 
});
</script>
</body>
</html>
