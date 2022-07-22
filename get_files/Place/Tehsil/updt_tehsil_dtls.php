<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
$tehsil_uid = $_POST["tehsil_uid"];
/*
$tehsil_name =  $_POST["tehsil_name"];
$tehsil_dist =  $_POST["tehsil_dist"];
$tehsil_state =  $_POST["tehsil_state"];
*/
echo'
<form id="updt_teh_form" >			
	<div class="col-xs-12 col-md-12">
		<div class="form-group" style="margin-top:20px;">
			<input type="text" class="form-control" name="tehsil_name" id="updt_teh_name" placeholder="Tehsil Name"  title="Address" tabindex="7">
		</div>
		<div class="form-group">
			<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="tehsil_dist" id="updt_teh_dist" placeholder="Belonging State" title="Belonging State">
				<option value="">- Select District -</option>';
				$fetchallfromdistrict = $db->fetchallfromdistrict();
					if($fetchallfromdistrict){
						foreach($fetchallfromdistrict as $crow){
							echo '<option value="'.$crow["district_name"].'">'.$crow["district_name"].'</option>';
						}
					}
					else{
						echo '<option data-subtext="" disabled>No Records</option>';
					}
		echo'</select>	
		</div>
		<div class="form-group" style="margin-bottom:20px;">
			<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="tehsil_state" id="updt_teh_state" placeholder="Belonging State" title="Belonging State">
				<option value="">- Select State -</option>';
				$fetchallfromstate = $db->fetchallfromstate();
					if($fetchallfromstate){
						foreach($fetchallfromstate as $crow){
							echo '<option value="'.$crow["state_name"].'" data-subtext="('.$crow["state_abbr"].')">'.$crow["state_name"].'</option>';
						}
					}
					else{
						echo '<option data-subtext="" disabled>No Records</option>';
					}
		echo'</select>
		</div>
		<div class="form-group"">
			<button  type="button" class="btn btn-warning btn-block" onclick=updt_tehsil("'.$tehsil_uid.'"); name="create_tehsil" id="create_tehsil">Update</button>
		</div>
	</div>
	<div class="col-md-12" id="alert_updt_teh"></div>
</form>
<script>
	$(document).ready(function() {
		$(".selectpicker").selectpicker();
	});
	
	function updt_tehsil(tehsil_uid){	
		var updt_teh_name = $("#updt_teh_name").val();
		var updt_teh_dist = $("#updt_teh_dist").val();
		var updt_teh_state = $("#updt_teh_state").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Place/Tehsil/updt_tehsil.php",
			data:{
				tehsil_uid : tehsil_uid,
				updt_teh_name : updt_teh_name,
				updt_teh_dist : updt_teh_dist,
				updt_teh_state : updt_teh_state,
			},
			success:function(result){
				$("#alert_updt_teh").html(result);
				$("#updt_teh_form").trigger("reset");
			}
		});
	}
</script>';
?>