<!doctype html>
<html class="no-js" lang="en">

<head>
   <?php $this->load->view('common/header_link'); ?>
   <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/modals.css">
   <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/select2/select2.min.css">
   <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/calendar/fullcalendar.print.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/preloader/preloader-style.css">
    <style type="text/css">
        .form-control{
            height:32px;
        }
        
        
        #customer_table tr:hover{
        cursor: pointer;
         }
        
        .asset-inner{
        width:65%;
        }

         @media (max-width:720px) and (min-width:280px){
             .asset-inner{
             width:100%;
            }
         }
        
        .green_status{
           font-weight: 600;
            padding: 0;
            margin: 0px;
            color: #37e718;
        }
        
        .red_status{
             font-weight: 600;
            padding: 0;
            margin: 0px;
            color: #fe1639;
        }
        
        .blue_status{
             font-weight: 600;
            padding: 0;
            margin: 0px;
            color: #46c7fe;
        }
        
        .yellow_status{
            font-weight: 600;
            padding: 0;
            margin: 0px;
            color: #f7dc20;
        }
        
        .load_img{
            display:none;
        }
       
    </style> 
</head>

<body>
    <div class="preloader-single shadow-inner mg-b-30" id="my_loader" style="position:fixed; background: rgba(0,0,0,0.8); width:100%; height:100vh; z-index: 9999; display:none;">
        <div class="ts_preloading_box" style="">
            <div id="ts-preloader-absolute09" style="position:fixed; margin:auto;   border-radius:70px;">
                <div class="tsperloader9" id="tsperloader9_one"></div>
                <div class="tsperloader9" id="tsperloader9_two"></div>
                <div class="tsperloader9" id="tsperloader9_three"></div>
                <div class="tsperloader9" id="tsperloader9_four"></div>
            </div>
        </div>
    </div>
    <?php $this->load->view('common/sidemenu'); ?>
    <div class="all-content-wrapper">
        
        <?php $this->load->view('common/titlebar'); ?>
           <div class="container-fluid" style="margin-top:15px;">
            <div class="product-status-wrap mycard" style="padding-top:0px; border-top:2px solid #0099cc;">
                 <div class="row" style="background-color:#f7f7f7; ">
				        <div class="search_engine" style="height:auto; min-height:60px; padding-top:15px;">
                            <div class="breadcome-heading" style="">
                                <div class="input-group"  style=" width:100%;">
                                    
                                    <form action=""  method="post" id="myformsearch">
                                       
                                        <input type="hidden" id="return_status" value="<?php if(isset($return_status)){ echo $return_status; } ?>">
                                    
                                           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >   
                                                <div class="form-group" id="data_5" style=" height:28px;">
                                                   <input type="text" name="card_search" id="name_search" value="<?php if(isset($return_card_search)){ echo $return_card_search; } ?>" class="form-control" placeholder="Search By Atm Card No." style="background-color:#ffffff; width:100%;" onkeydown="validateNumber(event);">
                                                </div>
                                           </div>
                                           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                                             <div class="form-group" id="data_5" style=" height:28px;">
                                                  <select name="status_search" class="form-control"  style="width:100%;">
                                                      <option value="">Card Status</option>
                                                      <option value="available">Available</option>
                                                      <option value="lost">Lost</option>
                                                      <option value="broken">Broken</option>
                                                 </select>
                                             </div>
                                            </div>
                                           
                                                  
                                           <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                                  <div class="form-group" id="data_5" style=" height:28px;">
                                                      <input type="submit" name="submit" value="Search" class="btn" style="background-color: #46c7fe; color:#ffffff; width: calc(100% - 48px);">
                                                      
                                                      <span><button type="button" id="tbl_refresh" class="btn" style="width:40px; border:1px solid #e8e8e8"><i class="ion-android-sync" style="color:#46c7fe; "></i></button></span>
                                                  </div>
                                           </div>
                                    </form>
                                </div>
                             </div>
				          </div>		
				 </div>
         
                <div class="row">
                    <div class="col-md-12">
						    <div id="myheadtitle" style=" height:52px; border-bottom:none; padding-top:15px; font-size: 15.1px; margin:0px;">
                                Atm Card List
                                   
                            </div>
                            <div class="asset-inner" >
							      
                                <table id="table" data-toggle="table" data-pagination="true" data-show-columns="true" data-show-pagination-switch="true"  data-key-events="true" data-show-toggle="true"  data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                     <thead>
									<tr>
                                        <th>Sr. No.</th>
                                        <th>Atm Card No.</th>
                                        <th>Current Card Status</th>
                                        <th>Update Card Status</th>
                                        <th>Action</th>
                                    </tr>
									 </thead>
									 <tbody id="myTable">
                                    <?php $i = 1; if(isset($atm_card_status)){ foreach($atm_card_status as $row){ ?>     
                                        
                                      <tr data-customer_id="<?php echo $row->customer_id; ?>">
                                          
                                       <td><?php echo $i++; ?></td>      
                                       <td><?php echo $row->tifin_card_no; ?></td> 
                                       <td class="current_status<?php echo $row->id;  ?>"><?php if($row->tifin_status == ''){ echo 'Available'; }else if($row->tifin_status == 'lost'){ echo 'Lost'; }else if( $row->tifin_status == 'broken'){ echo 'Broken'; } ?></td>       
                                       <td>
                                         <select name="" class="form-control select_status_td"  style="width:100%; height:25px; padding: 0px 5px;">
                                               <option value="available" <?php if($row->tifin_status == ''){ echo 'selected'; } ?> >Available</option>
                                               <option value="lost"  <?php if($row->tifin_status == 'lost'){ echo 'selected'; } ?> > Lost</option>
                                               <option value="broken" <?php if($row->tifin_status == 'broken'){ echo 'selected'; } ?> >Broken</option>
                                          </select>
                                       </td>
                                       <td><button type="button" class="btn btn-primary" title="update_status" data-status_id="<?php echo $row->id; ?>" data-status="<?php echo $row->tifin_status; ?>" style="background-color:#eeeeee; border:1px solid #46c7fe; color:#46c7fe; width:100%; height:25px; padding: 0px 5px;">Update &nbsp <img src="<?php echo base_url(); ?>catalogs/img/loader.gif" alt="" style="width:17px;" class="load_img"></button></td>
                            
                                       </tr>
									<?php }} ?>
									</tbody>
								</table>
                            </div>
                        
							</div>
                </div>
            </div>
	    </div>
        
        
	  
			
                   <div id="success_alert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog" style="width:460px; margin:auto;">
                            <div class="modal-dialog" style="width:90%;">
                                <div class="modal-content">
                                    <!--<div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>-->
                                    <div class="modal-body" style="padding: 30px 30px;">
                                        <i class="educate-icon educate-checked modal-check-pro"></i>
                                        <h2>Done!</h2>
                                        <p class="success_model_p">Card status is successfully updated.</p>
                                    </div>
                                    <div class="modal-footer">
                                        
                                       <button class="btn btn-primary" type="button" data-dismiss="modal" id="success_ok" style="width:80px; background-color:#2c6be0;">OK</button>
                                    
                                    </div>
                                </div>
                            </div>
                       </div>
                       <div id="no_change" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog" style="width:460px; margin:auto;">
                            <div class="modal-dialog" style="width:90%;">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        
                                    </div>
                                    <div class="modal-body" style="padding: 30px 30px;">
                                        <span class="educate-icon educate-danger modal-check-pro information-icon-pro" style="color":yellow;></span>
                                        
                                        <p class="fail_model_p">You didn't make any changes </p>
                                    </div>
                                    <div class="modal-footer danger-md">
                                       
                                        <button class="btn btn-primary" type="button" data-dismiss="modal" style="width:80px; background-color:#2c6be0;">OK</button>
                                    
									</div>
                                </div>
                            </div>
                        </div>
                      
                       
			           <div id="failed_alert" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog" style="width:460px; margin:auto;">
                            <div class="modal-dialog" style="width:90%;">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body" style="padding: 30px 30px;">
                                        <span class="educate-icon educate-danger modal-check-pro information-icon-pro"></span>
                                        <h2>Error!</h2>
                                        <p class="fail_model_p">Sorry Opration Is failed ! Try Again</p>
                                    </div>
                                    <div class="modal-footer danger-md">
                                       
                                        <button class="btn btn-primary" type="button" data-dismiss="modal" style="width:80px; background-color:#2c6be0;">OK</button>
                                    
									</div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="del_alert" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog" style="width:460px; margin:auto;">
                            <div class="modal-dialog" style="width:90%;">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body" style="padding: 30px 30px;">
                                        <span class="educate-icon educate-danger modal-check-pro information-icon-pro"></span>
                                        <h2>Are You Sure!</h2>
                                        <p class="fail_model_p">You want to delete this account.</p>
                                    </div>
                                    <div class="modal-footer danger-md">
                                        <button class="btn btn-primary" type="button" data-dismiss="modal" style="width:80px; background-color:#2c6be0;">No</button>
                                        <button data-delete_id="" id="del_model_bt" class="btn btn-primary" type="button"  style="width:80px; background-color:#39ae60;">Yes</button>
                                    
									</div>
                                </div>
                            </div>
                        </div>
        
	</div>

   <?php $this->load->view('common/footer_script'); ?>
    <script src="<?php echo base_url('catalogs'); ?>/js/select2/select2.full.min.js"></script>
    <script src="<?php echo base_url('catalogs'); ?>/js/select2/select2-active.js"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="<?php echo base_url('catalogs'); ?>/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url('catalogs'); ?>/js/datapicker/datepicker-active.js"></script>
    
        <script type="text/javascript">
function validateNumber(evt) {
    var e = evt || window.event;
    var key = e.keyCode || e.which;

    if (!e.shiftKey && !e.altKey && !e.ctrlKey &&
    // numbers   
    key >= 48 && key <= 57 ||
    // Numeric keypad
    key >= 96 && key <= 105 ||
    // Backspace and Tab and Enter
    key == 8 || key == 9 || key == 13 ||
    // Home and End
    key == 35 || key == 36 ||
    // left and right arrows
    key == 37 || key == 39 ||
    // Del and Ins
    key == 46 || key == 45) {
        // input is VALID
    }
    else {
        // input is INVALID
        e.returnValue = false;
        if (e.preventDefault) e.preventDefault();
    }
}
        
   function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode === 32)
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }      
       
</script>
   <script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click','button[title=update_status]',function(){ 
            $(this).find('.load_img').show();
            
            var status = $(this).parent().parent().find('.select_status_td').val();
            var id = $(this).data("status_id");
            
            var privious_status  = $('.current_status'+id).text();
            var lo_privious_status  = privious_status.toLowerCase();
            
            
           // alert(status+id);
           if(lo_privious_status === status){
                $('.load_img').hide(0);
                $('#no_change').modal('toggle');
            }else{
            $.ajax({
     				 type: 'POST',
     				 url: '<?php echo base_url(); ?>report/change_atm_card_status',
     				 data:{status:status,id:id},
                     
				     complete: function(){
				    	 $('.load_img').hide(0);
				      },
     				 success:function(noti){
     					 if(noti === 'success'){
                             
                             $('#success_alert').modal('toggle');
                             $('.current_status'+id).html(status).css('textTransform', 'capitalize');
                         }else{
                             
                             $('#failed_alert').modal('toggle');
                         }
     				 },
                     error: function (jqXHR, exception) {
	                     var msg = '';
	                	 if (jqXHR.status === 0) {
	                	 msg = 'Internet Connection Seems Dead. Check Your Network.';
	                		} else if (jqXHR.status == 404) {
	                	 msg = 'Requested page not found. [404]';
	                	 } else if (jqXHR.status == 500) {
	                	 msg = 'Internal Server Error [500].';
	                	 } else if (exception === 'parsererror') {
	                	 msg = 'Requested JSON parse failed.';
	                	 } else if (exception === 'timeout') {
	                	 msg = 'Time out error.';
	                	 } else if (exception === 'abort') {
	                	 msg = 'Ajax request aborted.';
	                	} else {
	                	msg = 'Uncaught Error.\n' + jqXHR.responseText;
	                		}
	                    alert(msg);
                
                }
            });
            }
        });
        
        
        function select_take(){ 
             var select_colony = $('input[id=return_colony]').val();
             var select_delivery = $('input[id=return_delivery]').val();
             var select_status = $('input[id=return_status]').val();                 
             
            $('select[name=colony_search]').val(select_colony);
            $('select[name=delivery_search]').val(select_delivery);
            $('select[name=status_search]').val(select_status);
      
        } 
        select_take();
        
        $(document).on('click', '#tbl_refresh',function(){
            
           window.location.href =   window.location.href;
            
        });
        
        $(document).on('click', 'input[name=card_search]',function(){
            
           $('select[name=status_search]').val('');
            
        });
        
        $(document).on('click', 'select[name=status_search]',function(){
            
           $('input[name=card_search]').val('');
            
        });
        
          
    });
    
   
    </script>
</body>
</html>