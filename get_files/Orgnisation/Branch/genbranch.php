<?php
@session_start();
	
error_reporting(E_ALL ^ E_DEPRECATED);
	
include('../../../includes/find_functions.php');
	
$db = new DB_FUNCTIONS();
	
//$orgid=$_SESSION["orgid"];
	
//$local_branch_id = $db->local_branch_id($orgid);
	
//$myorgid = $_SESSION['orgid'];

echo'
<div class="content" class="col-md-12" style="font-family:Open sans;">
	<div class="col-md-12 tabs-area">
		<ul id="tabs-branch" class="nav nav-tabs nav-tabs-v2" role="tablist">
            <li role="presentation" class="active">
                <a href="#tabs-branch-area2" role="tab" id="tabs-branch-2" data-toggle="tab" aria-expanded="true">Add New</a>
            </li>
            <li role="presentation" class="">
                <a href="#tabs-branch-area4" role="tab" id="tabs-branch-4" data-toggle="tab" onclick="branch_datatable();" aria-expanded="false">View All</a>
            </li>
		</ul>
		<div id="tabsBranchContent" class="tab-content tabs-content-v2">
			<div role="tabpanel" class="tab-pane fade active in"  style="min-height:550px;"  id="tabs-branch-area2" aria-labelledby="tabs-branch-area2">
				<form id="add_branch_form">
					<div class="col-xs-12 col-md-12" style="margin-top:40px;font-size:17px;">
						<div class="panel panel-default">
							<div class="panel-heading">
								<strong style="letter-spacing:1px;">General Details</strong>
							</div>
							<div class="panel-body">
								<div class="col-xs-12 col-md-4">
									<div class="form-group">
										<input type="text" class="form-control" name="br_code" id="br_code" title="Branch Code" placeholder="Branch Code" autocomplete="off" tabindex="1"/>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="br_name" id="br_name" title="Branch Name (eg : pune,mumbai)" placeholder="Branch Name (eg : Mulund East)" autocomplete="off" tabindex="2"/>
									</div>
								</div>
								<div class="col-xs-12 col-md-4">
									<div class="form-group">
										<input type="text" class="form-control" name="br_mngr" id="br_mngr" title="Branch Manager" placeholder="Branch Manager" autocomplete="off" tabindex="3"/>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="br_asmngr" id="br_asmngr" title="Assistant Branch Manager" placeholder="Assistant Manager"  size="40" autocomplete="off" tabindex="4"/>
									</div>
								</div>
								<div class="col-xs-12 col-md-4">
									<div class="form-group">
										<input type="text" class="form-control" name="br_email" id="br_email" title="Branch E-Mail Id" placeholder="Branch E-Mail Id" aria-describedby="sizing-addon1" autocomplete="off" tabindex="5"/>
									</div>
									<div class="form-group">
										<input type="text" class="form-control"  name="br_contact" id="br_contact" title="Contact Number" placeholder="Contact Number" aria-describedby="sizing-addon1" autocomplete="off" tabindex="6"/>
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
										<input type="text" class="form-control" name="br_building" id="br_building" title="Building / Block" placeholder="Building / Block" autocomplete="off" tabindex="7"/>	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="br_area" id="br_area" title="Area" placeholder="Area" autocomplete="off" tabindex="8"/>	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="br_street" id="br_street" title="Street" placeholder="Street" autocomplete="off" tabindex="9"/>	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="br_milestone" id="br_milestone" title="Milestone" placeholder="Milestone" autocomplete="off" tabindex="10"/>	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input type="text" class="form-control"  name="br_pincode" id="br_pincode" title="Pin code" placeholder="Pin code" autocomplete="off" tabindex="11"/>	
									</div>
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true"  name="br_city" id="br_city" title="Select City" placeholder="Select State" autocomplete="off" tabindex="12">
											<option value="">- Select City -</option>
											<option value=""> None </option>';
												$fetchallfromcity = $db->fetchallfromcity();
													if($fetchallfromcity){
														foreach($fetchallfromcity as $crow){
															echo '<option value="'.$crow["city_uid"].'" data-subtext="('.$crow["city_abbr"].')">'.$crow["city_name"].'</option>';
														}
													}
													else{
															echo '<option data-subtext="" disabled>No Records</option>';
													}
									echo'</select>
									</div>
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true"  name="br_teh" id="br_teh" placeholder="State" title="Belonging State" autocomplete="off" tabindex="13">
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true"  name="br_dist" id="br_dist" placeholder="Belonging State" title="Belonging State" autocomplete="off" tabindex="14">
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
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true"  name="br_state" id="br_state" placeholder="Select State" title="Select State" autocomplete="off" tabindex="15">
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
												echo '
													</select>	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="br_fax" id="br_fax" title="FAX" placeholder="FAX" autocomplete="off" tabindex="16"/>	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="br_mngr_phone" id="br_mngr_phone" title="Phone 1" placeholder="Manager Phone" autocomplete="off" tabindex="17"/>	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="br_mngr_mob" id="br_mngr_mob" title="Manager Mobile Number" placeholder="Manager Mobile Number" autocomplete="off" tabindex="18"/>	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="br_mngr_email" id="br_mngr_email" title="Contact 2 (Email)" placeholder="Manager Email Address" autocomplete="off" tabindex="19"/>	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="br_asm_phone" id="br_asm_phone" title="Assistant Manager Phone Number" placeholder="Assi. Manager Phone" autocomplete="off" tabindex="20"/>	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="br_asm_mob" id="br_asm_mob" title="Assistant Manager Mobile Number" placeholder="Ass. Manager Mobile Number" autocomplete="off" tabindex="21"/>
									</div>
									<div class="form-group">
										<input type="text" class="form-control"  name="br_asm_email" id="br_asm_email" title="Contact 2 (Email)" placeholder="Ass. Manager Email Address" autocomplete="off" tabindex="22"/>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-xs-12" style="margin-top:20px;margin-bottom:120px;padding:0;">
							<div class="col-md-8 col-xs-8" id="branch_add_alert"></div>
							<div class="col-md-4 col-xs-4">
								<input type="submit" class="btn btn-success pull-right" style="font-weight:600;width:30%;" name="add_branch" id="add_branch" value="Save"/>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="tabs-branch-area4" aria-labelledby="tabs-branch-area4">
				<div style="margin-top:50px;font-size:15px;" id="genbranch_datatable" class="col-xs-12 table-responsive"></div>
			</div>
		</div>
	</div>
</div>';
echo"
<script>
	$(document).ready(function() {
		$('.selectpicker').selectpicker();
		
		$('#add_branch_form').validate({
			rules: {
				br_name: 'required'
			},
			messages: {
				br_name: 'Please Enter Branch'
			},
			submitHandler: function(form) {
				//alert('submitted');
				addbranch();
	
			}		
		});
	});

	function branch_datatable(){
		$.ajax({
			type: 'GET',
			url:'../get_files/Orgnisation/Branch/branch_datatable.php',
			success:function(result){
				$('#genbranch_datatable').html(result);
			}
		});
	}

	function addbranch() {		
	
		$('#add_branch').val('Saving...');
		var br_code = $('#br_code').val();
		var br_name =  $('#br_name').val();
		var br_mngr = $('#br_mngr').val();
		var br_asmngr = $('#br_asmngr').val();
		var br_email = $('#br_email').val();
		var br_contact = $('#br_contact').val();
		var br_building = $('#br_building').val();
		var br_area = $('#br_area').val();
		var br_street = $('#br_street').val();
		var br_milestone = $('#br_milestone').val();
		var br_pincode = $('#br_pincode').val();
		var br_city = $('#br_city').val();
		var br_teh = $('#br_teh').val();
		var br_dist = $('#br_dist').val();
		var br_state = $('#br_state').val();
		var br_fax = $('#br_fax').val();
		var br_mngr_phone = $('#br_mngr_phone').val();
		var br_mngr_mob = $('#br_mngr_mob').val();
		var br_mngr_email = $('#br_mngr_email').val();
		var br_asm_phone = $('#br_asm_phone').val();
		var br_asm_mob = $('#br_asm_mob').val();
		var br_asm_email = $('#br_asm_email').val();
		
		$.ajax({
			type:'POST',
			url:'../get_files/Orgnisation/Branch/add_branch.php',
			async:true,
			cache:false,
			data:{
				br_code : br_code,
				br_name : br_name,
				br_mngr : br_mngr,
				br_asmngr : br_asmngr,
				br_email : br_email,
				br_contact : br_contact,
				br_building : br_building,
				br_area : br_area,
				br_street : br_street,
				br_milestone : br_milestone,
				br_pincode : br_pincode,
				br_city : br_city,
				br_teh : br_teh,
				br_dist : br_dist,
				br_state : br_state,
				br_fax : br_fax,
				br_mngr_phone : br_mngr_phone,
				br_mngr_mob : br_mngr_mob,
				br_mngr_email : br_mngr_email,
				br_asm_phone : br_asm_phone,
				br_asm_mob : br_asm_mob,
				br_asm_email : br_asm_email,
			},
			success:function(result){
				$('#branch_add_alert').html(result);
				$('#add_br_msg').fadeOut(20000);
				$('#add_branch').val('Save');
				$('#add_branch_form').trigger('reset');
				$('.selectpicker').selectpicker('refresh');
			}
		});
	}
</script>";
?>