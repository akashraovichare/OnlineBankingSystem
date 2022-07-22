<?php
session_start();
include("../../includes/find_functions.php");
$db = new DB_FUNCTIONS();
 
$userEmail = addslashes($_POST["userEmail"]);
$regUser = addslashes($_POST["regUser"]);
$regPwd = addslashes($_POST["regPwd"]);

$fetchacustomerbyemail = $db->fetchacustomerbyemail($userEmail);

if($fetchacustomerbyemail){
	if(($fetchacustomerbyemail["user_name"] == "") && ($fetchacustomerbyemail["password"] == "")){
		
		//hashing password using sha256
		$hashedPwd = hash('sha256', $regPwd);
		
		//function for customer registration
		$regcustomer = $db->regcustomer($regUser,$hashedPwd,$userEmail);
		
		//checking if customer registered or not
		if($regcustomer){
			echo'<form id="regForm">
					<div class="form-group">							
						<label for="userEmail">Please Enter Your Email:</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-at" aria-hidden="true"></i></span>
							<input class="form-control" type="text" name="userEmail" id="userEmail" placeholder=" Enter Registered Email Id " />
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
						<button type="button" class="btn btn-info" disabled> Next <span class="glyphicon glyphicon-circle-arrow-right"></span></button><br/>
					</div>
				</form>
				<div class="alert alert-success alert-dismissable" id="regAlertDiv">
					<a class="panel-close close" data-dismiss="alert">×</a> 
					<i class="fa fa-thumb"></i>
					<strong>Congrats </strong>You have successfully Registered.
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
		else{
			echo'
				<form id="regForm">
					<input class="form-control" type="hidden" name="userEmail" id="userEmail" placeholder=" Enter Registered Email Id " value="'.$userEmail.'"/>
					<div class="form-group">
						<label for="regUser">Please Enter User Name of Your Choice:</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
							<input class="form-control" type="text" name="regUser" id="regUser" placeholder=" Enter User Name of your choice" value="'.$regUser.'" readonly />
							<span class="input-group-btn">
								<button type="button" class="btn btn-primary" id="showPwd" disabled> <span class="glyphicon glyphicon-ok"></span> </button>
							</span>
						</div>
						<div class="errorTxt"></div>
					</div>
					<div class="form-group" >														
						<label for="regPwd">Please Enter Password of Your Choice:</label>					
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
							<input class="form-control" type="password" name="password" id="regPwd" placeholder="Enter Password of your choice" />
							<span class="input-group-btn">
								<button type="button" class="btn btn-warning" name="showPwd" id="showPwd" onclick="showpwd();"> Show </button>
							</span>
						</div>
					</div><br/>
					<div class="form-group text-right">
						<button type="submit" class="btn btn-success" id="register"> Register </button>
					</div>
				</form>
				<div class="alert alert-danger alert-dismissable" id="regAlertDiv">
					<a class="panel-close close" data-dismiss="alert">×</a> 
					<i class="fa fa-thumbs-o-down"></i>&nbsp;
					<strong>Error!!!</strong> Something goes wrong in Registration!
				</div>
				<script>
					$(document).ready(function(){
						$("#regForm").validate({
							rules:{
								regPwd:{
									required:true,
								}
							},
							messages:{
								regPwd:{
									required:"Please enter Password",
								}
							},
							errorElement : "div",
							errorLabelContainer: ".errorTxt",
							submitHandler: function(form){
								reg();
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
						<input class="form-control" type="text" name="userEmail" id="userEmail" placeholder=" Enter Registered Email Id " />
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
			<div class="alert alert-danger alert-dismissable" id="regAlertDiv">
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
?>