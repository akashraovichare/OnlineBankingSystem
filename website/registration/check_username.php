<?php

error_reporting(E_ALL ^ E_DEPRECATED);
include('../../includes/find_functions.php');

$db = new DB_FUNCTIONS();

$userEmail = addslashes($_POST["userEmail"]);
$regUser = addslashes($_POST["regUser"]);

//fetching a customer by username
$fetchacustomerbyusername = $db->fetchacustomerbyusername($regUser);

if($fetchacustomerbyusername){
	if($fetchacustomerbyusername["user_name"] === $regUser){
		echo'<form id="regForm">
				<input class="form-control" type="hidden" name="userEmail" id="userEmail" placeholder=" Enter Registered Email Id " value="'.$userEmail.'"/>
				<div class="form-group">							
					<label for="regUser">Please Enter User Name of Your Choice:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input class="form-control" type="text" name="regUser" id="regUser" placeholder=" Enter User Name of your choice " />
						<span class="input-group-btn">
							<button type="submit" class="btn btn-info" id="showPwd"> Next <span class="glyphicon glyphicon-circle-arrow-right"></span> </button>
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
							<button type="button" class="btn btn-warning" name="showRegPwd" id="showRegPwd" onclick="showpwd();"disabled> Show </button>
						</span>
					</div>
				</div><br/>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-success" id="register" disabled> Register </button><br/>
				</div>
			</form>
			<div class="alert alert-danger alert-dismissable" id="regAlertDiv">
				<a class="panel-close close" data-dismiss="alert">×</a> 
				<i class="fa fa-thumbs-o-down"></i>&nbsp;
				<strong>Error!!!</strong> Please Choose Another User name!
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
}
else{
	echo'<form id="regForm">
			<input class="form-control" type="hidden" name="userEmail" id="userEmail" placeholder=" Enter Registered Email Id " value="'.$userEmail.'"/>
			<div class="form-group">
				<label for="regUser">Please Enter User Name of Your Choice:</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
					<input class="form-control" type="text" name="regUser" id="regUser" placeholder=" Enter User Name of your choice" value="'.$regUser.'" readonly />
					<span class="input-group-btn">
						<button type="button" class="btn btn-info" id="otp" disabled><span class="glyphicon glyphicon-ok"></span> </button>
						<button type="button" class="btn btn-info" id="change" onclick="change_reg();"> Change </button>
					</span>
				</div>
			</div>
			<div class="form-group" >														
				<label for="regPwd">Please Enter Password of Your Choice:</label>					
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
					<input class="form-control" type="password" name="regPwd" id="regPwd" placeholder="Enter Password of your choice" />
					<span class="input-group-btn">
						<button type="button" class="btn btn-warning" name="showRegPwd" id="showRegPwd" onclick="showpwd();"> Show </button>
					</span>
				</div>
				<div class="errorTxt"></div>
			</div><br/>
			<div class="form-group text-right">
				<button type="submit" class="btn btn-success" id="register"> Register </button>
			</div>
		</form>
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
?>