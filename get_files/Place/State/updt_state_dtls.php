<?php
@session_start();
include('../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$state_uid = $_POST["state_uid"];
/*
$state_name =  $_POST["state_name"];
$state_abbr =  $_POST["state_abbr"];
*/
echo'
<form id="updt_state_form" >			
	<div class="col-xs-12 col-md-12">
		<div class="form-group" style="margin-top:20px;">
			<input type="text" class="form-control" name="state_name" id="updt_state_name" placeholder="State Name"  title="Address" tabindex="7">
		</div>
		<div class="form-group" style="margin-bottom:50px;">
			<input type="text" class="form-control" name="state_abbr" id="updt_state_abbr" placeholder="State Abbreviation"  title="Address" tabindex="7">
		</div>
		<div class="form-group"">
			<button  type="button" class="btn btn-warning btn-block" onclick=updt_state("'.$state_uid.'"); name="action_create_employe" id="create_state">Update</button>
		</div>
	</div>
	<div class="col-md-12" id="alert_updt_state"></div>
</form>
<script>
	$(document).ready(function() {
		$(".selectpicker").selectpicker();
	});
	
	function updt_state(state_uid){	
		var updt_state_name = $("#updt_state_name").val();
		var updt_state_abbr = $("#updt_state_abbr").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Place/State/updt_state.php",
			data:{
				state_uid : state_uid,
				updt_state_name : updt_state_name,
				updt_state_abbr : updt_state_abbr,
			},
			success:function(result){
				$("#alert_updt_state").html(result);
				$("#updt_state_form").trigger("reset");
			}
		});
	}
</script>';
?>