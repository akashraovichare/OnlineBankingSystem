<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();

$district_uid = $_POST["district_uid"];
/*
$dist_name =  $_POST["dist_name"];
$dist_state_abbr =  $_POST["dist_state_abbr"];
*/
echo'
<form id="updt_dist_form" >			
	<div class="col-xs-12 col-md-12">
		<div class="form-group" style="margin-top:20px;">
			<input type="text" class="form-control" name="dist_name" id="updt_dist_name" placeholder="District Name"  title="Address" tabindex="7">
		</div>
		<div class="form-group" style="margin-bottom:20px;">
			<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="state_abbr" id="updt_dist_state" placeholder="Belonging State" title="Belonging State">
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
			<button  type="button" class="btn btn-warning btn-block" onclick=updt_dist("'.$district_uid.'"); name="create_dist" id="create_dist">Update</button>
		</div>
	</div>
	<div class="col-md-7" id="alert_updt_dist"></div>
</form>
<script>
	$(document).ready(function() {
		$(".selectpicker").selectpicker();
	});
	
	function updt_dist(district_uid){
		
		var updt_dist_name = $("#updt_dist_name").val();
		var updt_dist_state = $("#updt_dist_state").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Place/District/updt_district.php",
			data:{
				district_uid : district_uid,
				updt_dist_name : updt_dist_name,
				updt_dist_state : updt_dist_state,
			},
			success:function(result){
				$("#alert_updt_dist").html(result);
				$("#updt_dist_form").trigger("reset");
			}
		});
	}
</script>';
?>