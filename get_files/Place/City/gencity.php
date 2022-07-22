<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
//$orgid=$_SESSION['orgid'];

echo'
<div class="content" class="col-md-12" style="font-family:Open sans;">
	<div class="col-md-12 tabs-area">
		<ul id="tabs-city" class="nav nav-tabs nav-tabs-v2" role="tablist">
            <li role="presentation" class="active">
                <a href="#tabs-city-area2" role="tab" id="tabs-city-2" data-toggle="tab" aria-expanded="false">Add New</a>
            </li>
		</ul>
		<div id="tabsCityContent" class="tab-content tabs-content-v2">
			<div role="tabpanel" class="tab-pane fade active in" style="min-height:550px;margin-top:40px;" id="tabs-city-area2" aria-labelledby="tabs-city-area2">
				<div class="col-xs-12 col-md-4" style="font-size:17px;">
					<form id="add_city_form" >			
						<div class="panel panel-default">
							<div class="panel-heading text-center">
								<strong style="letter-spacing:1px;">City Details</strong>
							</div>
							<div class="panel-body">
								<div class="col-xs-12 col-md-12">
									<div class="form-group" style="margin-top:20px;">
										<input type="text" class="form-control" name="city_name" id="city_name" placeholder="City Name"  title="Address" tabindex="7">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="city_abbr" id="city_abbr" title="Name" placeholder="City Abbreviation" tabindex="2">	
									</div>
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="city_teh" id="city_teh" placeholder="Belonging State" title="Belonging State">
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="city_dist" id="city_dist" placeholder="Belonging State" title="Belonging State">
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
									<div class="form-group" style="margin-bottom:40px;">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="city_state" id="city_state" placeholder="Belonging State" title="Belonging State">
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
										<button type="button" class="btn btn-success btn-block" onclick="addcity();" name="create_city" id="create_city">Save</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12" id="alert_addcity"></div>
					</form>
				</div>
				<div id="gencity_datatable" class="col-xs-12 col-md-8 table-responsive"></div>
			</div>
		</div>
	</div>
</div>
<script>		
	$(document).ready(function(){
		$(".selectpicker").selectpicker();
		gencity_datatable();
	})
	
	function addcity(){
		var city_name = $("#city_name").val();
		var city_abbr = $("#city_abbr").val();
		var city_teh = $("#city_teh").val();
		var city_dist = $("#city_dist").val();
		var city_state = $("#city_state").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Place/City/add_city.php",
			data:{
				city_name : city_name,
				city_abbr : city_abbr,
				city_teh : city_teh,
				city_dist : city_dist,
				city_state : city_state,
			},
			success:function(result){
				$("#alert_addcity").html(result);
				$("#add_city_form").trigger("reset");
				gencity_datatable();
			}
		});
	}
	
	function gencity_datatable(){
		$.ajax({
			type:"get",
			url:"../get_files/Place/City/gencity_datatable.php",
			success:function(result){
				$("#gencity_datatable").html(result);
			}
		});
	}
</script>';
?>