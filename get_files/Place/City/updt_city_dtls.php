<?php
@session_start();
include('../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$city_uid = $_POST["city_uid"];
//echo $city_uid;
/*
$fetchcitybyid = $db->fetchcitybyid($city_uid);

if($fetchcitybyid){
	$city_name =  $_POST["city_name"];
	$city_abbr =  $_POST["city_abbr"];
	$city_teh =  $_POST["city_teh"];
	$city_dist =  $_POST["city_dist"];
	$city_state =  $_POST["city_state"];
}*/
echo'
<form id="updt_city_form" >			
	<div class="col-xs-12 col-md-12">
		<div class="form-group" style="margin-top:20px;">
			<input type="text" class="form-control" name="city_name" id="updt_city_name" placeholder="City Name"  title="Address" tabindex="7">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="city_abbr" id="updt_city_abbr" title="Name" placeholder="City Abbreviation" tabindex="2">	
		</div>
		<div class="form-group">
			<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="city_teh" id="updt_city_teh" placeholder="Belonging State" title="Belonging State">
				<option value="">- Select Tehsil -</option>';
				$fetchallfromtehsil = $db->fetchallfromtehsil();
					if($fetchallfromtehsil){
						foreach($fetchallfromtehsil as $crow){
							echo '<option value="'.$crow["tehsil_uid"].'">'.$crow["tehsil_name"].'</option>';
						}
					}
					else{
						echo '<option data-subtext="" disabled>No Records</option>';
					}
		echo'</select>	
		</div>
		<div class="form-group">
			<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="city_dist" id="updt_city_dist" placeholder="Belonging State" title="Belonging State">
				<option value="">- Select District -</option>';
				$fetchallfromdistrict = $db->fetchallfromdistrict();
					if($fetchallfromdistrict){
						foreach($fetchallfromdistrict as $crow){
							echo '<option value="'.$crow["district_uid"].'">'.$crow["district_name"].'</option>';
						}
					}
					else{
						echo '<option data-subtext="" disabled>No Records</option>';
					}
		echo'</select>	
		</div>
		<div class="form-group" style="margin-bottom:20px;">
			<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="city_state" id="updt_city_state" placeholder="Belonging State" title="Belonging State">
				<option value="">- Select State -</option>';
				$fetchallfromstate = $db->fetchallfromstate();
					if($fetchallfromstate){
						foreach($fetchallfromstate as $crow){
							echo '<option value="'.$crow["state_uid"].'" data-subtext="('.$crow["state_abbr"].')">'.$crow["state_name"].'</option>';
						}
					}
					else{
						echo '<option data-subtext="" disabled>No Records</option>';
					}
		echo'</select>
		</div>
		<div class="form-group"">
			<button type="button" class="btn btn-warning btn-block" onclick=updt_city("'.$city_uid.'"); name="create_city" id="create_city">Update</button>
		</div>
	</div>
	<div class="col-md-12" id="alert_updt_city"></div>
</form>
<script>
	$(document).ready(function() {
		$(".selectpicker").selectpicker();
	});
	
	function updt_city(city_uid){
		var updt_city_name = $("#updt_city_name").val();
		var updt_city_abbr = $("#updt_city_abbr").val();
		var updt_city_teh = $("#updt_city_teh").val();
		var updt_city_dist = $("#updt_city_dist").val();
		var updt_city_state = $("#updt_city_state").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Place/City/updt_city.php",
			data:{
				city_uid : city_uid,
				updt_city_name : updt_city_name,
				updt_city_abbr : updt_city_abbr,
				updt_city_teh : updt_city_teh,
				updt_city_dist : updt_city_dist,
				updt_city_state : updt_city_state,
			},
			success:function(result){
				$("#alert_updt_city").html(result);
				$("#updt_city_form").trigger("reset");
			}
		});
	}
</script>';
?>