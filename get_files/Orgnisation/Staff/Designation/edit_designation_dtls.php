<?php
@session_start();

include('../../../../includes/find_functions.php');

$db = new DB_FUNCTIONS();

$designation_uid = $_POST["designation_uid"];

$fetchadesignation = $db->fetchadesignation($designation_uid);

if($fetchadesignation){
	$designation =  $fetchadesignation["designation"];
	$desi_code =  $fetchadesignation["desi_code"];
}

echo'
<form id="updt_desi_form" >			
	<div class="col-xs-12 col-md-12">
		<div class="form-group" style="margin-top:20px;">
			<input type="hidden" name="desi_uid" id="desi_uid" value="'.$designation_uid.'">
			<input type="text" class="form-control" name="designation_name" id="updt_desi_name" placeholder="Designation Name"  title="Address" value="'.$designation.'" autocomplete="off" tabindex="7">
		</div>
		<div class="form-group" style="margin-bottom:40px;">
			<input type="text" class="form-control" name="designation_code" id="updt_desi_code" placeholder="Designation Code"  title="Address" value="'.$desi_code.'" autocomplete="off" tabindex="7">
		</div>
		<div class="form-group"">
			<input type="submit" class="btn btn-warning btn-block" style="font-weight:600;margin-bottom:30px;" name="updt_designation" id="updt_designation" value="Update"/>
		</div>
	</div>
	<div class="col-md-12" id="alert_updt_desi"></div>
</form>
<script>
	$(document).ready(function() {
		$("#updt_desi_form").validate({
			rules: {
				updt_desi_name: "required",
				designation_code: "required"
			},
	
			messages: {
				updt_desi_name: "Please Enter Designation Name",
				designation_code: "Please Enter Designation Code"
			},
			submitHandler: function(form) {
				//alert("submitted");
				updt_desi();
			}		
		});
	});
	
	function updt_desi(desi_uid){
		$("#updt_designation").val("Updating");
		var desi_uid = $("#desi_uid").val();
		var updt_desi_name = $("#updt_desi_name").val();
		var updt_desi_code = $("#updt_desi_code").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Orgnisation/Staff/Designation/updt_desi.php",
			data:{
				desi_uid : desi_uid,
				updt_desi_name : updt_desi_name,
				updt_desi_code : updt_desi_code,
			},
			success:function(result){
				$("#alert_updt_desi").html(result);
				$("#updt_desi_msg").fadeOut(20000);
				$("#updt_designation").val("Update");
				$("#updt_desi_form").trigger("reset");
			}
		});
	}
</script>';
?>