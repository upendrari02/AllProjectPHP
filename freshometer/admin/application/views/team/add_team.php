<!doctype html>
<html class="no-js" lang="en">

<head>
   <?php $this->load->view('common/header_link'); ?>
   
   <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/modals.css">
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/preloader/preloader-style.css">
   <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/calendar/fullcalendar.print.min.css">
    
<style type="text/css">
        .message{
            width:100%;
            height:40px;
           
            padding-top:8px;
            text-align:center; color:red;
            box-shadow: 0px 3px 7px -1px rgba(0,0,0,0.6);
            display: none;
           
        }
        .message.error{
              color: #ffffff;
             background-color: #e91e63;
             border:1px solid #e91e63;
        }
        .message.success{
             color: #ffffff;
             background-color: #4caf50;
             border:1px solid green;
        }
        .message.card{
             color: #ffffff;
             background-color: #ff9600;
             border:1px solid #ff9600;
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
		
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding:0px;">
            <div class="container-fluid" style="margin-top:15px;">
               <div class="product-status-wrap mycard">
			    <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div id="myheadtitle" style=" ">
                                Add Team Member
                               <ul class="my_quick_bt" style="">
                                    
                                    <li>
                                        <a href="<?php echo base_url(); ?>team">
                                            <i class="ion-ios-undo-outline"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                      <div class="message error" style="display:<?php if(isset($message) && $message === "failed"){ echo "block"; } ?>">
                                                          Process Is Failed!
                                                          <button type="button" title="close" style="background-color:transparent; border:none; float:right;">X</button>
                                                          <br>
                                                      </div>
                                                     <div class="message success" style="display:<?php if(isset($message) && $message === "success"){ echo "block"; } ?>">
                                                          Team member is successfully added. 
                                                         <button type="button" title="close" style="background-color:transparent; border:none; float:right;">X</button>
                                                         <br>
                                                      </div>
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                     
                                                    <form action="<?php echo base_url(); ?>team/add_team" method="post" class="dropzone dropzone-custom needsclick add-professors" id="myForm">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="input-group">
																    <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                                                                    <input name="team_name" id="team_name" type="text" class="form-control" value="<?php if(isset($team_name)){ echo $team_name; } ?>" placeholder="Name" required>
                                                                </div>
                                                                <div class="input-group">
																    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                                                    <input name="team_email" id="team_email" type="email" class="form-control" value="<?php if(isset($team_email)){ echo $team_email; } ?>" placeholder="Email Address" >
                                                                </div>
                                                                <div class="input-group">
																    <span class="input-group-addon"><i class="ion-social-whatsapp-outline" style="font-size: 18px;"></i></span>
                                                                    <input name="team_number" id="team_number" type="text" class="form-control" value="<?php if(isset($team_number)){ echo $team_number; } ?>" placeholder="Mobile No."  minlength="10" onkeydown="validateNumber(event);" required>
                                                                </div>
                                                                <div class="input-group">
																    <span class="input-group-addon"><i class="ion-ios-paperplane-outline" style="font-size: 24px;"></i></span>
                                                                    <select name="team_role" class="form-control" style="width:100%;" required>
                                                                        <option value="Agent" >Agent</option>
                                                                        <option value="Counter">Counter</option>
                                                                    </select>
                                                                    
                                                                    <input   type="hidden" id="return_role" class="form-control" value="<?php if(isset($team_role)){ echo $team_role; }else{ echo 'Agent'; } ?>" placeholder="Role" required />
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                
                                                                <div class="input-group">
																    <span class="input-group-addon"><i class="ion-ios-paperplane-outline" style="font-size: 24px;"></i></span>
                                                                    <input name="user_name"  type="text" class="form-control" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="User Name" autocomplete="new-password" required />
                                                                     <span style="color:red;">  <?php if(isset($exist)){ echo $exist; } ?></span>
                                                                </div>
                                                                <div class="input-group">
																    <span class="input-group-addon"><i class="ion-ios-locked-outline" style="font-size: 20px;"></i></span>
                                                                    <input name="team_pass1"  type="password" class="form-control" value="<?php if(isset($pass)){ echo $pass; } ?>" placeholder="New Password" required autocomplete="new-password" >
                                                                </div>
                                                                <div class="input-group">
																    <span class="input-group-addon"><i class="ion-ios-locked-outline" style="font-size: 20px;"></i></span>
                                                                    <input name="team_pass2"  type="password" class="form-control" value="<?php if(isset($pass)){ echo $pass; } ?>" placeholder="Retype Password" required autocomplete="new-password" >
                                                                    <span style="color:red;" id="pass_unmatch">  <?php if(isset($unmatch)){ echo $unmatch; } ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress" >
																    
                                                                    <input type="submit" class="btn btn-primary" name="submit" value="submit" id="submit">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        
                                                    </form>
													
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
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
                                        <h2>Awesome!</h2>
                                        <p>Team Member Is Successfully Added</p>
                                    </div>
                                    <div class="modal-footer">
                                        
                                       <button class="btn btn-primary" type="button" id="success_ok" style="width:80px; background-color:#2c6be0;">OK</button>
                                    
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
                                        <p>Sorry Process Is failed</p>
                                    </div>
                                    <div class="modal-footer danger-md">
                                       
                                        <button class="btn btn-primary" type="button" data-dismiss="modal" style="width:80px; background-color:#2c6be0;">OK</button>
                                    
									</div>
                                </div>
                            </div>
                        </div>

	</div>

   <?php $this->load->view('common/footer_script'); ?>
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
</script>
    
    <script type="text/javascript">
	$(document).ready(function(){
		
       /* $("#myForm").submit(function(e) {
            e.preventDefault();
          
        });*/
		$(document).on('click','#add_team_bt1',function(){
			$('#my_loader').show();
			var name = $('input[id=team_name]').val();
			var email = $('input[id=team_email]').val();
			var mobile = $('input[id=team_number]').val();
            
			
            if(name == "" || email == "" || mobile == ""){
                
                alert("fille required field");
            }else{
			$.ajax({
				type: "POST",
				url: '<?php echo base_url(); ?>team/add_submit',
				
				data:{
					name:name,
                    email:email,
                    mobile:mobile
					
					},
				success: function(data){
					$('#my_loader').hide();
					if(data == "success"){
						
						$('#success_alert').modal("toggle");
						
					}else if(data == "failed"){
						$('#failed_alert').modal("toggle");
						
					}else{
						
						
						alert("something Wrong");
					}
					
				}
				
				
			});
            }
			/* alert(firstname+lastname+mobileno+email+address1+address2+postcode+colony+city+advance_payment+card_no);
			*/
		});
		
		$(document).on('click','#success_ok',function(){
			
			window.location.href = '<?php echo base_url(); ?>team';
			
			
		});
		$(document).on('click','#fail_ok',function(){
			
			 window.location.href = window.location.href;
			
		});
        
         $(document).on('click','input[class=form-control]',function(){
			$('.success').hide();
			
		});
        
        $(document).on('click','button[title=close]',function(){
			$(this).parent().css('display','none');
			
		});
        
        $(document).on('keyup','input[name=team_pass2]',function(){
             var pass1 = $('input[name=team_pass1]').val();
             var pass2 = $('input[name=team_pass2]').val();
             
            if(pass1 === pass2){
                
                $('#pass_unmatch').html('');
            }else if(pass1 !== pass2){
                
                $('#pass_unmatch').html('Password is not matched');
            }
            
        });
        
        $(document).on('keyup','input[name=team_pass1]',function(){
             var pass1 = $('input[name=team_pass1]').val();
             var pass2 = $('input[name=team_pass2]').val();
             
            if(pass2 === '' || pass1 === pass2){
                
                $('#pass_unmatch').html('');
            }else if(pass2 !== '' && pass1 !== pass2){
                
                $('#pass_unmatch').html('Password is not matched');
            }
            
        });
        
        function select_role(){
            var role_select =  $('input[id=return_role]').val();
            $('select[name=team_role]').val(role_select);
            
        }
       
        select_role();
		
	});
	</script>
</body>
</html>