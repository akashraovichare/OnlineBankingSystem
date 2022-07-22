<?php
@session_start();
include('../../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();

$degree_uid = $_POST["degree_uid"];

$fetchadegree = $db->fetchadegree($degree_uid);
if($fetchadegree){
	$degree =  $fetchadegree["degree"];
	$degree_code =  $fetchadegree["degree_code"];
}
echo'
<form id="updt_deg_form" >			
	<div class="col-xs-12 col-md-12">
		<div class="form-group" style="margin-top:20px;">
			<input type="hidden" name="degree_uid" id="degree_uid" value="'.$degree_uid.'">				
			<input type="text" class="form-control" name="degree_name" id="updt_deg_name" placeholder="Degree Name"  title="Address" value="'.$degree.'" autocomplete="off" tabindex="7">
		</div>
		<div class="form-group" style="margin-bottom:40px;">
			<input type="text" class="form-control" name="degree_code" id="updt_deg_code" placeholder="Degree Code"  title="Address" value="'.$degree_code.'" autocomplete="off" tabindex="7">
		</div>
		<div class="form-group"">
			<input type="submit" class="btn btn-warning btn-block" style="font-weight:600;margin-bottom:30px;" name="updt_degree" id="updt_degree" value="Update"/>
		</div>
	</div>
	<div class="col-md-12" id="alert_updt_deg"></div>
</form>
<script>
	$(document).ready(function() {
		$("#updt_deg_form").validate({
			rules:{
				updt_deg_name: "required",
				updt_deg_code: "required"
			},
			messages:{
				updt_deg_name: "Please Enter Branch",
				updt_deg_code: "Please Enter Branch"
			},
			submitHandler: function(form) {
				//alert("submitted");
				updt_degree();
			}		
		});
	});
	
	function updt_degree(degree_uid){
		$("#updt_degree").val("Updating");
		var degree_uid = $("#degree_uid").val();
		var updt_deg_name = $("#updt_deg_name").val();
		var updt_deg_code = $("#updt_deg_code").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Orgnisation/Staff/Degree/updt_degree.php",
			data:{
				degree_uid : degree_uid,
				updt_deg_name : updt_deg_name,
				updt_deg_code : updt_deg_code,
			},
			success:function(result){
				$("#alert_updt_deg").html(result);
				$("#updt_degree_msg").fadeOut(10000);
				$("#updt_degree").val("Update");
				$("#updt_deg_form").trigger("reset");
			}
		});
	}
</script>';
?>