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
		<ul id="tabs-tehsil" class="nav nav-tabs nav-tabs-v2" role="tablist">
            <li role="presentation" class="active">
                <a href="#tabs-tehsil-area2" role="tab" id="tabs-tehsil-2" data-toggle="tab" aria-expanded="false">Add New</a>
            </li>
		</ul>
		<div id="tabsTehsilContent" class="tab-content tabs-content-v2">
			<div role="tabpanel" class="tab-pane fade active in" style="min-height:550px;margin-top:40px;" id="tabs-tehsil-area2" aria-labelledby="tabs-tehsil-area2">
				<div class="col-sm-12 col-md-4" style="font-size:17px;">
					<form id="add_tehsil_form" >			
						<div class="panel panel-default">
							<div class="panel-heading text-center">
								<strong style="letter-spacing:1px;">Tehsil Details</strong>
							</div>
							<div class="panel-body">
								<div class="col-xs-12 col-md-12">
									<div class="form-group" style="margin-top:20px;">
										<input type="text" class="form-control" name="tehsil_name" id="tehsil_name" placeholder="Tehsil Name"  title="Address" tabindex="7">
									</div>
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="tehsil_dist" id="tehsil_dist" placeholder="Belonging State" title="Belonging State">
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
									<div class="form-group" style="margin-bottom:40px;">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="tehsil_state" id="tehsil_state" placeholder="Belonging State" title="Belonging State">
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
										<button  type="button" class="btn btn-success btn-block" onclick="addtehsil();" name="create_tehsil" id="create_tehsil">Save</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12" id="alert_addtehsil"></div>
					</form>
				</div>
				<div id="gentehsil_datatable" class="col-sm-12 col-md-8 table-responsive"></div>
			</div>
		</div>
	</div>
</div>
<script>	
	$(document).ready(function(){
		$(".selectpicker").selectpicker();
		gentehsil_datatable();
	})
	
	function addtehsil(){	
		var tehsil_name = $("#tehsil_name").val();
		var tehsil_dist = $("#tehsil_dist").val();
		var tehsil_state = $("#tehsil_state").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Place/Tehsil/add_tehsil.php",
			data:{
				tehsil_name : tehsil_name,
				tehsil_dist : tehsil_dist,
				tehsil_state : tehsil_state,
			},
			success:function(result){
				$("#alert_addtehsil").html(result);
				$("#add_tehsil_form").trigger("reset");
				gentehsil_datatable();
			}
		});
	}
	
	function gentehsil_datatable(){
		$.ajax({
			type:"get",
			url:"../get_files/Place/Tehsil/gentehsil_datatable.php",
			success:function(result){
				$("#gentehsil_datatable").html(result);
			}
		});
	}
</script>';
?>