<?php

error_reporting(E_ALL ^ E_DEPRECATED);
include('../../includes/find_functions.php');

$db = new DB_FUNCTIONS();

$forEmail = addslashes($_POST["forEmail"]);
$forOtp = addslashes($_POST["forOtp"]);

$fetchacustomerbyemail = $db->fetchacustomerbyemail($forEmail);

if($fetchacustomerbyemail){
	if($fetchacustomerbyemail["OTP"] === $forOtp){
		echo'<form id="forForm">
				<input class="form-control" type="hidden" name="forEmail" id="forEmail" placeholder=" Enter Registered Email Id " value="'.$forEmail.'"/>
				<div class="form-group">							
					<label for="forUser">Your User Name :</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input class="form-control" type="text" name="forUser" id="forUser" placeholder=" Enter User Name of your choice " value="'.$fetchacustomerbyemail["user_name"].'" readonly/ />
					</div>
				</div>
				<div class="form-group" >														
					<label for="forPwd">Please Enter New Password :</label>					
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
						<input class="form-control" type="password" name="forPwd" id="forPwd" placeholder="Enter New Password "/>
						<span class="input-group-btn">
							<button type="button" class="btn btn-warning" name="showForPwd" id="showForPwd" onclick="showpwd();"> Show </button>
						</span>
					</div>
					<div class="errorTxt"></div>
				</div><br/>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-success" id="register"> Submit </button><br/>
				</div>
			</form>
			<div class="alert alert-success alert-dismissable" id="forAlertDiv">
				<a class="panel-close close" data-dismiss="alert">×</a> 
				<i class="fa fa-thumb"></i>
				<strong>Congrats </strong>OTP successfully Match.
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
	else{
		echo'<form id="forForm">
				<div class="form-group">							
					<label for="forEmail">Please Enter Your Email:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fas fa-at" aria-hidden="true"></i></span>
						<input class="form-control" type="text" name="forEmail" id="forEmail" placeholder=" Enter Registered Email Id " value="'.$forEmail.'" readonly/>
						<span class="input-group-btn">
							<button type="button" onclick="ontp2();" class="btn btn-primary pull-right" id="otp2"> Send OTP </button>
						</span>
					</div>
				</div>
				<div class="form-group">							
					<label for="forOtp">Please Enter Received OTP:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fas fa-keyboard" aria-hidden="true"></i></span>
						<input class="form-control" type="text" name="forOtp" id="forOtp" placeholder="Enter Received OTP" />
					</div>
					<div class="errorTxt"></div>
				</div><br/>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-info" id="auth"> Next <span class="glyphicon glyphicon-circle-arrow-right"></span>  </button><br/>
				</div>
			</form>
			<div class="alert alert-danger alert-dismissable" id="forAlertDiv">
				<a class="panel-close close" data-dismiss="alert">×</a> 
				<i class="fa fa-thumbs-o-down"></i>&nbsp;
				<strong>Error</strong> OTP and Email Are not Matching!
			</div>
			<script>
				$(document).ready(function(){
					$("#forForm").validate({
						rules:{
							forOtp:{
								required:true,
							}
						},
						messages:{
							forOtp:{
								required:"Please enter Received OTP",
							}
						},
						errorElement : "div",
						errorLabelContainer: ".errorTxt",
						submitHandler: function(form){
							otpauth2();
						}
					});
				});
			</script>';
	}
}
?>