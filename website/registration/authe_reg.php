<?php

error_reporting(E_ALL ^ E_DEPRECATED);
include('../../includes/find_functions.php');

$db = new DB_FUNCTIONS();

$userEmail = addslashes($_POST["userEmail"]);
$regOtp = addslashes($_POST["regOtp"]);

$fetchacustomerbyemail = $db->fetchacustomerbyemail($userEmail);

if($fetchacustomerbyemail){
	if($fetchacustomerbyemail["OTP"] === $regOtp){
		echo'<form id="regForm">
				<input class="form-control" type="hidden" name="userEmail" id="userEmail" placeholder=" Enter Registered Email Id " value="'.$userEmail.'"/>
				<div class="form-group">							
					<label for="regUser">Please Enter User Name of Your Choice:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input class="form-control" type="text" name="regUser" id="regUser" placeholder=" Enter User Name of your choice " />
						<span class="input-group-btn">
							<button type="submit" class="btn btn-info"> Next <span class="glyphicon glyphicon-circle-arrow-right"></span> </button>
						</span>
					</div>
					<div class="errorTxt"></div>
				</div>
				<div class="form-group" >														
					<label for="regPwd">Please Enter Password of Your Choice:</label>					
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
						<input class="form-control" type="password" name="password" id="regPwd" placeholder="Enter Password of your choice" disabled />
						<span class="input-group-btn">
							<button type="button" class="btn btn-warning" name="showPwd" id="showPwd" onclick="showpwd();"disabled> Show </button>
						</span>
					</div>
				</div><br/>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-success" onclick="reg();" id="register" disabled> Register </button><br/>
				</div>
			</form>
			<div class="alert alert-success alert-dismissable" id="regAlertDiv">
				<a class="panel-close close" data-dismiss="alert">×</a> 
				<i class="fa fa-thumb"></i>
				<strong>Congrats </strong>OTP successfully Match.
			</div>
			<script>
				$(document).ready(function(){
					$("#regForm").validate({
						rules:{
							regUser:{
								required:true,
							}
						},
						messages:{
							regUser:{
								required:"Please enter User Name",
							}
						},
						errorElement : "div",
						errorLabelContainer: ".errorTxt",
						submitHandler: function(form){
							check_user();
						}
					});
				});
			</script>';
	}
	else{
		echo'<form id="regForm">
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
					<button type="submit" class="btn btn-info" id="auth"> Next <span class="glyphicon glyphicon-circle-arrow-right"></span>  </button><br/>
				</div>
			</form>
			<div class="alert alert-danger alert-dismissable" id="regAlertDiv">
				<a class="panel-close close" data-dismiss="alert">×</a> 
				<i class="fa fa-thumbs-o-down"></i>&nbsp;
				<strong>Error</strong> OTP and Email Are not Matching!
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
			</script>';
	}
}
?>