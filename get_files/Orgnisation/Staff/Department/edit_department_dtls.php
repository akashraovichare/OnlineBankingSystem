<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
define('DATE_FORMAT', 'DD-MM-YYYY');

$department_uid = $_POST["department_uid"];

$fetchadepartment = $db->fetchadepartment($department_uid);
if($fetchadepartment){
	$department =  $fetchadepartment["department"];
	$department_code =  $fetchadepartment["department_code"];
}

echo'
<form id="updt_department_form" >					
	<div class="col-xs-12 col-md-12">
		<div class="form-group" style="margin-top:20px;">
			<input type="hidden" name="department_uid" id="department_uid" value="'.$department_uid.'">
			<input type="text" class="form-control" name="department_name" id="updt_dep_name" placeholder="Department Name"  title="Address" value="'.$department.'" tabindex="2"/>
		</div>
		<div class="form-group" style="margin-bottom:40px;">
			<input type="text" class="form-control" name="department_code" id="updt_dep_code" placeholder="Department Code"  title="Address" value="'.$department_code.'" tabindex="3"/>
		</div>
		<div class="form-group"">
			<input type="submit" class="btn btn-warning btn-block" style="font-weight:600;" name="updt_department" id="updt_department" value="Update" tabindex="4"/>
		</div>
	</div>	
	<div class="col-md-12" id="alert_updtdepartment"></div>
</form>
<script>	
	$(document).ready(function(){
		$("#updt_department_form").validate({
			rules: {
				updt_dep_name: "required",
				updt_dep_code: "required"
			},
			messages: {
				updt_dep_name: "Please Enter Department Name",
				updt_dep_code: "Please Enter Department Code"
			},
			submitHandler: function(form) {
				//alert("submitted);
				updt_department();
	
			}		
		});
	});
	
	function updt_department(){
		$("#updt_department").val("Updating");
		var department_uid = $("#department_uid").val();
		var updt_dep_name = $("#updt_dep_name").val();
		var updt_dep_code = $("#updt_dep_code").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Orgnisation/Staff/Department/updt_dep.php",
			data:{
				department_uid : department_uid,
				updt_dep_name : updt_dep_name,
				updt_dep_code : updt_dep_code,
			},
			success:function(result){
				$("#alert_updtdepartment").html(result);
				$("#updt_dep_msg").fadeOut(10000);
				$("#updt_department").val("Update");
				$("#updt_department_form").trigger("reset");
				//department_datatable();
			}
		});
	}
</script>';
?>