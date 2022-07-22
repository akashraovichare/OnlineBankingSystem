<?php
session_start();
include("../../includes/find_functions.php");
$db = new DB_FUNCTIONS();
 
$forEmail = addslashes($_POST["forEmail"]);
$forUser = addslashes($_POST["forUser"]);
$forPwd = addslashes($_POST["forPwd"]);

$fetchacustomerbyemail = $db->fetchacustomerbyemail($forEmail);

if($fetchacustomerbyemail){
	$hashedPwd = hash('sha256', $forPwd);
	$regcustomer = $db->regcustomer($forUser,$hashedPwd,$forEmail);
	if($regcustomer){
		echo'<form id="forForm">
				<div class="form-group">							
					<label for="forEmail">Please Enter Your Email:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fas fa-at" aria-hidden="true"></i></span>
						<input class="form-control" type="text" name="forEmail" id="forEmail" placeholder=" Enter Registered Email Id " />
						<span class="input-group-btn">
							<button type="submit" class="btn btn-primary pull-right" id="otp2"> Send OTP </button>
						</span>
					</div>
					<div class="errorTxt"></div>
				</div>
				<div class="form-group">							
					<label for="forOtp">Please Enter Received OTP:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fas fa-keyboard" aria-hidden="true"></i></span>
						<input class="form-control" type="text" id="forOtp" placeholder="Enter Received OTP" disabled />
					</div>
				</div><br/>
				<div class="form-group text-right">
					<button type="button" class="btn btn-info" disabled> Next <span class="glyphicon glyphicon-circle-arrow-right"></span> </button>
				</div>
				<div class="text-center">
					<a class="text-danger" id="forgot" onclick="log_module2();"><b id="l4"> Login Module </b></a>
				</div>
			</form>
			<div class="alert alert-success alert-dismissable" id="forAlertDiv">
				<a class="panel-close close" data-dismiss="alert">×</a> 
				<i class="fa fa-thumb"></i>
				<strong>Congrats </strong>You have successfully Changed your password.
			</div>
			<script>
				$(document).ready(function(){
			
					$("#forForm").validate({
						rules:{
							forEmail:{
								required:true,
								email:true
							}
						},
						messages:{
							forEmail:{
								required:"Please enter an email address",
								email:"Please eneter valid email"
							}
						},
						errorElement : "div",
						errorLabelContainer: ".errorTxt",
						submitHandler: function(form){
							ontp2();
						}
					});
				});
			</script>';
	}
	else{
		echo'<form id="forForm">
				<input class="form-control" type="hidden" name="forEmail" id="forEmail" placeholder=" Enter Registered Email Id " value="'.$forEmail.'"/>
				<div class="form-group">							
					<label for="forUser">Your User Name :</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input class="form-control" type="text" name="forUser" id="forUser" placeholder=" Enter User Name of your choice " value="'.$fetchacustomerbyemail["user_name"].'" readonly/ />
					</div>
					<div class="errorTxt"></div>
				</div>
				<div class="form-group" >														
					<label for="forPwd">Please Enter New Password :</label>					
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
						<input class="form-control" type="password" name="forPwd" id="forPwd" placeholder="Enter New Password "/>
						<span class="input-group-btn">
							<button type="button" class="btn btn-warning" name="showPwd" id="showPwd" onclick="showpwd();"> Show </button>
						</span>
					</div>
				</div><br/>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-success" id="register"> Submit </button><br/>
				</div>
			</form>
			<div class="alert alert-danger alert-dismissable" id="forAlertDiv">
				<a class="panel-close close" data-dismiss="alert">×</a> 
				<i class="fa fa-thumbs-o-up"></i>&nbsp;
				<strong>Error</strong> Something goes wrong!
			</div>
			<script>
				$(document).ready(function(){
					$("#forForm").validate({
						rules:{
							forPwd:{
								required:true,
							}
						},
						messages:{
							forPwd:{
								required:"Please Enter New Password",
							}
						},
						errorElement : "div",
						errorLabelContainer: ".errorTxt",
						submitHandler: function(form){
							new_password();
						}
					});
				});
			</script>';
	}
}
else{
	echo'<div class="alert alert-danger alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>&nbsp;
			<strong>Error</strong> Please Enter Registered email Id and Received OTP !
		</div>';
}
?>