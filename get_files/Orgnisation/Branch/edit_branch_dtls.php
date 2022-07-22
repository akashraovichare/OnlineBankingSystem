<?php
session_start();
include('../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$br_uid = $_POST['br_uid'];

$fetchabranch = $db->fetchabranch($br_uid);
if($fetchabranch){
	$branch_code = $fetchabranch["br_code"];
	$branch_name = $fetchabranch["br_name"];
	$manager = $fetchabranch["manager"];
	$assi_manager = $fetchabranch["asm"];
	$branch_email = $fetchabranch["br_email"];
	$branch_contact = $fetchabranch["br_contact"];
	$building_block = $fetchabranch["building"];
	$area = $fetchabranch["area"];
	$street = $fetchabranch["street"];
	$milestone = $fetchabranch["milestone"];
	$pin_code = $fetchabranch["pin_code"];
	$city = $fetchabranch["city"];
	$tehsil = $fetchabranch["tehsil"];
	$district = $fetchabranch["district"];
	$state = $fetchabranch["state"];
	$fax = $fetchabranch["fax"];
	$mngr_phone = $fetchabranch["mngr_phone"];
	$mngr_mobile = $fetchabranch["mngr_mobile"];
	$mngr_email = $fetchabranch["mngr_email"];
	$assi_mngr_phone = $fetchabranch["asm_phone"];
	$assi_mngr_mobile = $fetchabranch["asm_mobile"];
	$assi_mngr_email = $fetchabranch["asm_email"];
}
echo'
<form id="updt_branch_form">
	<div class="col-xs-12 col-md-12" style="margin-top:40px;font-size:17px;">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong style="letter-spacing:1px;">General Details</strong>
			</div>
			<div class="panel-body">
				<div class="col-xs-12 col-md-4">
					<div class="form-group">
						<input type="hidden" name="br_uid" id="updt_br_uid" value="'.$br_uid.'">
						<input type="text" class="form-control" name="updt_br_code" id="updt_br_code" title="Branch Code" placeholder="Branch Code" value="'.$branch_code.'" tabindex="1"/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_br_name" id="updt_br_name" title="Branch Name (eg : pune,mumbai)" placeholder="Branch Name (eg : Mulund East)" value="'.$branch_name.'" tabindex="2"/>
					</div>
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="form-group">
						<input type="text" class="form-control" name="updt_br_mngr" id="updt_br_mngr" title="Branch Manager" placeholder="Branch Manager" value="'.$manager.'"  tabindex="3"/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_br_asmngr" id="updt_br_asmngr" title="Assistant Branch Manager" placeholder="Assistant Manager" value="'.$assi_manager.'" size="40" tabindex="4"/>
					</div>
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="form-group">
						<input type="email" class="form-control" name="updt_br_email" id="updt_br_email" title="Branch E-Mail Id" placeholder="Branch E-Mail Id" value="'.$branch_email.'" aria-describedby="sizing-addon1" tabindex="5"/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_br_contact" id="updt_br_contact" title="Contact Number" placeholder="Contact Number" value="'.$branch_contact.'" aria-describedby="sizing-addon1" tabindex="6"/>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default" style="margin-top:40px;">
			<div class="panel-heading">
				<strong class="" style="letter-spacing:1px;">Address Details</strong>
			</div>
			<div class="panel-body">
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="updt_br_building" id="updt_br_building" title="Building / Block" placeholder="Building / Block" value="'.$building_block.'" tabindex="7"/>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_br_area" id="updt_br_area" title="Area" placeholder="Area" value="'.$area.'" tabindex="8"/>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_br_street" id="updt_br_street" title="Street" value="'.$street.'" placeholder="Street" tabindex="9"/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_br_milestone" id="updt_br_milestone" title="Milestone" value="'.$milestone.'" placeholder="Milestone" tabindex="10">	
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="updt_br_pincode" id="updt_br_pincode" title="Pincode" value="'.$pin_code.'" placeholder="Pincode" tabindex="11">
					</div>
					<div class="form-group">
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="updt_br_city" id="updt_br_city" placeholder="Select State" title="Select City" tabindex="12">
							<option value="">- Select City -</option>';
								$fetchallfromcity = $db->fetchallfromcity();
									if($fetchallfromcity){
										foreach($fetchallfromcity as $crow){
											if($city == $crow["city_uid"]){
												echo '<option value="'.$crow["city_uid"].'" data-subtext="('.$crow["city_abbr"].')" selected>'.$crow["city_name"].'</option>';
											}
											else{
												echo '<option value="'.$crow["city_uid"].'" data-subtext="('.$crow["city_abbr"].')">'.$crow["city_name"].'</option>';
											}
										}
									}
									else{
											echo '<option data-subtext="" disabled>No Records</option>';
									}
					echo'</select>
					</div>
					<div class="form-group">
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="updt_br_teh" id="updt_br_teh" placeholder="State" title="Belonging State" tabindex="13">
							<option value="">- Select Tehsil -</option>';
							$fetchallfromtehsil = $db->fetchallfromtehsil();
								if($fetchallfromtehsil){
									foreach($fetchallfromtehsil as $crow){
										if($tehsil == $crow["tehsil_uid"]){
											echo '<option value="'.$crow["tehsil_uid"].'" selected>'.$crow["tehsil_name"].'</option>';
										}
										else{
											echo '<option value="'.$crow["tehsil_uid"].'">'.$crow["tehsil_name"].'</option>';
										}
									}
								}
								else{
									echo '<option data-subtext="" disabled>No Records</option>';
								}
					echo'</select>	
					</div>
					<div class="form-group">
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="updt_br_dist" id="updt_br_dist" placeholder="Belonging State" title="Belonging State" tabindex="14">
							<option value="">- Select District -</option>';
							$fetchallfromdistrict = $db->fetchallfromdistrict();
								if($fetchallfromdistrict){
									foreach($fetchallfromdistrict as $crow){
										if($district == $crow["district_uid"]){
											echo '<option value="'.$crow["district_uid"].'" selected>'.$crow["district_name"].'</option>';
										}
										else{
											echo '<option value="'.$crow["district_uid"].'">'.$crow["district_name"].'</option>';
										}
									}
								}
								else{
									echo '<option data-subtext="" disabled>No Records</option>';
								}
					echo'</select>	
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="updt_br_state" id="updt_br_state" placeholder="Select State" title="Select State" tabindex="15">
							<option value="">- Select State -</option>';
								$fetchallfromstate = $db->fetchallfromstate();
									if($fetchallfromstate){
										foreach($fetchallfromstate as $crow){
											if($state == $crow["state_uid"]){
												echo '<option value="'.$crow["state_uid"].'" data-subtext="('.$crow["state_abbr"].')" selected>'.$crow["state_name"].'</option>';
											}
											else{
												echo '<option value="'.$crow["state_uid"].'" data-subtext="('.$crow["state_abbr"].')">'.$crow["state_name"].'</option>';
											}
										}
									}
									else{
										echo '<option data-subtext="" disabled>No Records</option>';
									}
					echo'</select>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_br_fax" id="updt_br_fax" title="FAX" placeholder="FAX" value="'.$fax.'" tabindex="16">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_br_mngr_phone" id="updt_br_mngr_phone" title="Phone 1" placeholder="Manager Phone" value="'.$mngr_phone.'" tabindex="17">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_br_mngr_mob" id="updt_br_mngr_mob" title="Manager Mobile Number" value="'.$mngr_mobile.'" placeholder="Manager Mobile Number" tabindex="18">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="updt_br_mngr_email" id="updt_br_mngr_email" title="Contact 2 (Email)" value="'.$mngr_email.'" placeholder="Manager Email Address" tabindex="19">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_br_asm_phone" id="updt_br_asm_phone" title="Assistant Manager Phone Number" value="'.$assi_mngr_phone.'" placeholder="Assi. Manager Phone" tabindex="20">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_br_asm_mob" id="updt_br_asm_mob" title="Assistant Manager Mobile Number" value="'.$assi_mngr_mobile.'" placeholder="Ass. Manager Mobile Number" tabindex="21">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_br_asm_email" id="updt_br_asm_email" title="Contact 2 (Email)" value="'.$assi_mngr_email.'" placeholder="Ass. Manager Email Address" tabindex="22">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-xs-12" style="margin-top:20px;margin-bottom:60px;padding:0;">
			<div class="col-md-8 col-xs-8" id="branch_updt_alert"></div>
			<div class="col-md-4 col-xs-4">
				<input type="submit" class="btn btn-warning pull-right" style="font-weight:600;width:30%;" name="updt_branch" id="updt_branch" value="Update"/>
			</div>
		</div>
	</div>
</form>';
echo'
<script>
	$(document).ready(function() {
		$(".selectpicker").selectpicker();
		
		$("#updt_branch_form").validate({
			rules: {
				updt_br_name: "required"
			},
	
			messages: {
				updt_br_name: "Please Enter Branch"
			},
			submitHandler: function(form) {
				//alert("submitted");
				update_branch();
	
			}		
		});
	});
	
	function update_branch(){
		$("#updt_branch").val("Updating...");	
		var updt_br_uid = $("#updt_br_uid").val();
		var updt_br_code = $("#updt_br_code").val();
		var updt_br_name =  $("#updt_br_name").val();
		var updt_br_mngr = $("#updt_br_mngr").val();
		var updt_br_asmngr = $("#updt_br_asmngr").val();
		var updt_br_email = $("#updt_br_email").val();
		var updt_br_contact = $("#updt_br_contact").val();
		var updt_br_building = $("#updt_br_building").val();
		var updt_br_area = $("#updt_br_area").val();
		var updt_br_street = $("#updt_br_street").val();
		var updt_br_milestone = $("#updt_br_milestone").val();
		var updt_br_pincode = $("#updt_br_pincode").val();
		var updt_br_city = $("#updt_br_city").val();
		var updt_br_teh = $("#updt_br_teh").val();
		var updt_br_dist = $("#updt_br_dist").val();
		var updt_br_state = $("#updt_br_state").val();
		var updt_br_fax = $("#updt_br_fax").val();
		var updt_br_mngr_phone = $("#updt_br_mngr_phone").val();
		var updt_br_mngr_mob = $("#updt_br_mngr_mob").val();
		var updt_br_mngr_email = $("#updt_br_mngr_email").val();
		var updt_br_asm_phone = $("#updt_br_asm_phone").val();
		var updt_br_asm_mob = $("#updt_br_asm_mob").val();
		var updt_br_asm_email = $("#updt_br_asm_email").val();
		
		$.ajax({
			type:"POST",
			url:"../get_files/Orgnisation/Branch/updt_branch.php",
			async:true,
			cache:false,
			data:{
				updt_br_uid : updt_br_uid,
				updt_br_code : updt_br_code,
				updt_br_name : updt_br_name,
				updt_br_mngr : updt_br_mngr,
				updt_br_asmngr : updt_br_asmngr,
				updt_br_email : updt_br_email,
				updt_br_contact : updt_br_contact,
				updt_br_building : updt_br_building,
				updt_br_area : updt_br_area,
				updt_br_street : updt_br_street,
				updt_br_milestone : updt_br_milestone,
				updt_br_pincode : updt_br_pincode,
				updt_br_city : updt_br_city,
				updt_br_teh : updt_br_teh,
				updt_br_dist : updt_br_dist,
				updt_br_state : updt_br_state,
				updt_br_fax : updt_br_fax,
				updt_br_mngr_phone : updt_br_mngr_phone,
				updt_br_mngr_mob : updt_br_mngr_mob,
				updt_br_mngr_email : updt_br_mngr_email,
				updt_br_asm_phone : updt_br_asm_phone,
				updt_br_asm_mob : updt_br_asm_mob,
				updt_br_asm_email : updt_br_asm_email
            },
            success:function(result){
				$("#branch_updt_alert").html(result);
				$("#updt_br_msg").fadeOut(20000);
				$("#updt_branch").val("Update");
				$("#updt_branch_form").trigger("reset");
				$(".selectpicker").selectpicker("refresh");
			}
        });
	}
</script>';
?>