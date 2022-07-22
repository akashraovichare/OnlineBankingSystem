<?php

error_reporting(E_ALL ^ E_DEPRECATED);
include('../../includes/find_functions.php');

$db = new DB_FUNCTIONS();

$userEmail = addslashes($_POST["userEmail"]);

//fetching customer on the basis of email id
$fetchacustomerbyemail = $db->fetchacustomerbyemail($userEmail);

if($fetchacustomerbyemail){
	if(($fetchacustomerbyemail["user_name"] == "") && ($fetchacustomerbyemail["password"] == "")){
		
		//creating random six digit number the function get_rand_otp() is defined in find_functions file
		$otp = $db->get_rand_otp(6);
		
		//saving generated otp into database where email id=$userEmail	
		$cust_otp = $db->cust_otp($otp,$userEmail);
		
		//Email id of an receiver of email
		$to = $userEmail;
		
		//Email Subject
		$subject = "OTP for first time registration ABC Bank ";
		
		//Email Body
		$txt = "Respected Sir/Madam,
		The OTP for your registration is ".$otp;
		
		//mail settings has done in php.ini and sendmail.ini file (default from="user_defined_email_address") , This function is to send an OTP using email to customer 
		$m = mail($to,$subject,$txt);
		
		//checking if mail send to the customer
		if($m){
			echo'
				<form id="regForm">
					<div class="form-group">							
						<label for="userEmail">Please Enter Your Email:</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-at" aria-hidden="true"></i></span>
							<input class="form-control" type="text" name="userEmail" id="userEmail" placeholder=" Enter Registered Email Id " value="'.$userEmail.'" readonly/>
							<span class="input-group-btn">
								<button type="button" onclick="ontp();" class="btn btn-primary pull-right" id="otp"> Send OTP </button>
							</span>
						</div>
					</div>
					<div class="form-group">							
						<label for="regOtp">Please Enter Received OTP:</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-keyboard" aria-hidden="true"></i></span>
							<input class="form-control" type="text" name="regOtp" id="regOtp" placeholder="Enter Received OTP" />
						</div>
						<div class="errorTxt"></div>
					</div><br/>
					<div class="form-group text-right">
						<button type="submit" class="btn btn-info" id="auth">  Next <span class="glyphicon glyphicon-circle-arrow-right"></span>  </button><br/>
					</div>
				</form>
				<div class="alert alert-success alert-dismissable" id="otpAlertDiv">
					<a class="panel-close close" data-dismiss="alert">×</a> 
					<i class="fa fa-thumb"></i>
					<strong>Congrats </strong>OTP successfully sent to your registered Email Id.
				</div>
				<script>
					$(document).ready(function(){
						$("#regForm").validate({
							rules:{
								regOtp:{
									required:true,
								}
							},
							messages:{
								regOtp:{
									required:"Please enter Received OTP",
								}
							},
							errorElement : "div",
							errorLabelContainer: ".errorTxt",
							submitHandler: function(form){
								otpauth();
							}
						});
					});
				</script>
				';
		}
		else{
			echo'
				<form id="regForm">
					<div class="form-group">							
						<label for="userEmail">Please Enter Your Email:</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-at" aria-hidden="true"></i></span>
							<input class="form-control" type="text" name="userEmail" id="userEmail" placeholder=" Enter Registered Email Id " value="'.$userEmail.'" />
							<span class="input-group-btn">
								<button type="submit" class="btn btn-primary pull-right" id="otp"> Send OTP </button>
							</span>
						</div>
					</div>
					<div class="form-group">							
						<label for="regOtp">Please Enter Received OTP:</label>
					<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-keyboard" aria-hidden="true"></i></span>
							<input class="form-control" type="text" name="regOtp" id="regOtp" disabled placeholder="Enter Received OTP" />
						</div>
					</div><br/>
					<div class="form-group text-right">
						<button type="button" class="btn btn-info" disabled>  Next <span class="glyphicon glyphicon-circle-arrow-right"></span>  </button><br/>
					</div>
				</form>
				<div class="alert alert-danger alert-dismissable" id="otpAlertDiv">
					<a class="panel-close close" data-dismiss="alert">×</a> 
					<i class="fa fa-thumbs-o-down"></i>&nbsp;
					<strong>Error</strong> Something goes wrong Cannot send an email!
				</div>
				<script>
					$(document).ready(function(){
					
						$("#regForm").validate({
							rules:{
								userEmail:{
									required:true,
									email:true
								}
							},
							messages:{
								userEmail:{
									required:"Please enter an email address",
									email:"Please eneter valid email"
								}
							},
							errorElement : "div",
							errorLabelContainer: ".errorTxt",
							submitHandler: function(form){
								ontp();
							}
						});	
					});
				</script>';
		}
	}
	else{
		echo'
			<form id="regForm">
				<div class="form-group">							
					<label for="userEmail">Please Enter Your Email:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fas fa-at" aria-hidden="true"></i></span>
						<input class="form-control" type="text" name="userEmail" id="userEmail" placeholder=" Enter Registered Email Id " value="'.$userEmail.'" />
						<span class="input-group-btn">
							<button type="submit" class="btn btn-primary pull-right" id="otp"> Send OTP </button>
						</span>
					</div>
				</div>
				<div class="form-group">							
					<label for="regOtp">Please Enter Received OTP:</label>
				<div class="input-group">
						<span class="input-group-addon"><i class="fas fa-keyboard" aria-hidden="true"></i></span>
						<input class="form-control" type="text" name="regOtp" id="regOtp" disabled placeholder="Enter Received OTP" />
					</div>
				</div><br/>
				<div class="form-group text-right">
					<button type="button" class="btn btn-info" disabled>  Next <span class="glyphicon glyphicon-circle-arrow-right"></span>  </button><br/>
				</div>
			</form>
			<div class="alert alert-danger alert-dismissable" id="otpAlertDiv">
				<a class="panel-close close" data-dismiss="alert">×</a> 
				<i class="fa fa-thumbs-o-down"></i>&nbsp;
				<strong>Error!!!</strong> You are already Registered.
			</div>
			<script>
			$(document).ready(function(){
			
				$("#regForm").validate({
					rules:{
						userEmail:{
							required:true,
							email:true
						}
					},
					messages:{
						userEmail:{
							required:"Please enter an email address",
							email:"Please eneter valid email"
						}
					},
					errorElement : "div",
					errorLabelContainer: ".errorTxt",
					submitHandler: function(form){
						ontp();
					}
				});	
			});
		</script>';
	}
}
else{
	echo'<form id="regForm">
			<div class="form-group">							
				<label for="userEmail">Please Enter Your Email:</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="fas fa-at" aria-hidden="true"></i></span>
					<input class="form-control" type="text" name="userEmail" id="userEmail" placeholder=" Enter Registered Email Id " value="'.$userEmail.'" />
					<span class="input-group-btn">
						<button type="submit" class="btn btn-primary pull-right" id="otp"> Send OTP </button>
					</span>
				</div>
				<div class="errorTxt"></div>
			</div>
			<div class="form-group">							
				<label for="regOtp">Please Enter Received OTP:</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="fas fa-keyboard" aria-hidden="true"></i></span>
					<input class="form-control" type="text" placeholder="Enter Received OTP" disabled />
				</div>
			</div><br/>
			<div class="form-group text-right">
				<button type="button" class="btn btn-info" disabled>  Next <span class="glyphicon glyphicon-circle-arrow-right"></span>  </button><br/>
			</div>
		</form>
		<div class="alert alert-danger alert-dismissable" id="otpAlertDiv">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-down"></i>&nbsp;
			<strong>Error!!!</strong> Please enter your registered email id
		</div>
		<script>
			$(document).ready(function(){
			
				$("#regForm").validate({
					rules:{
						userEmail:{
							required:true,
							email:true
						}
					},
					messages:{
						userEmail:{
							required:"Please enter an email address",
							email:"Please eneter valid email"
						}
					},
					errorElement : "div",
					errorLabelContainer: ".errorTxt",
					submitHandler: function(form){
						ontp();
					}
				});	
			});
		</script>';
}
?>