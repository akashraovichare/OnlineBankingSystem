<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
//$orgid=$_SESSION['orgid'];

echo'
<div class="content" class="col-md-12" style="font-family:Open sans;">
	<div class="col-md-12 tabs-area">
		<ul id="tabs-employee" class="nav nav-tabs nav-tabs-v2" role="tablist">
            <li role="presentation" class="active">
                <a href="#tabs-employee-area2" role="tab" id="tabs-employee-2" data-toggle="tab" aria-expanded="false" autocomplete="off" tabindex="1">Add New</a>
            </li>
            <li role="presentation">
                <a href="#tabs-employee-area4" role="tab" id="tabs-employee-4" data-toggle="tab" onclick="genemployee_datatable();" aria-expanded="false" autocomplete="off" tabindex="2">View All</a>
            </li>
		</ul>
		<div id="tabsconsignorContent" class="tab-content tabs-content-v2">
			<div role="tabpanel" class="tab-pane fade active in" style="min-height:550px;" id="tabs-employee-area2" aria-labelledby="tabs-employee-area2">
				<form id="add_employee_form" >
					<div class="col-xs-12 col-md-12" style="margin-top:40px;font-size:17px;">
						<div class="panel panel-default">
							<div class="panel-heading">
								<strong style="letter-spacing:1px;">Personal Details</strong>
							</div>
							<div class="panel-body">
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="emp_fname" id="emp_fname" title="Name" placeholder="First Name" autocomplete="off" tabindex="3"/>	
									</div>
									<div class="form-group">
										<select class="form-control" name="emp_marriage" id="emp_marriage" title="Martial Status" placeholder="Martial Status" autocomplete="off" tabindex="7">
											<option value="" disabled selected>-- Marriage Status --</option>
											<option value="0">Married</option>
											<option value="1">Unmarried</option>
										</select>	
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="emp_mname" id="emp_mname" title="Name" placeholder="Middle Name" autocomplete="off" tabindex="4"/>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="emp_adhar" id="emp_adhar" title="Address" placeholder="Adhar Card Number" autocomplete="off" tabindex="8"/>
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="emp_sname" id="emp_sname" title="Name" placeholder="Sir Name" autocomplete="off" tabindex="5"/>	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="emp_pan" id="emp_pan" title="Email id" placeholder="PAN Card Number" autocomplete="off" autocomplete="off" tabindex="9"/>
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<select class="form-control" name="emp_sex" id="emp_sex" title="Sex" autocomplete="off" tabindex="6">
											<option value=""disabled selected>-- Sex --</option>
											<option value="0">Male</option>
											<option value="1">Female</option>
											<option value="2">Transgender</option>
										</select>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="employe_dob" id="emp_dob" title="DOB" placeholder="Date of Birth" autocomplete="off" data-date-format="'. DATE_FORMAT .'" autocomplete="off" tabindex="10"/>
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
										<input type="text" class="form-control" name="emp_building" id="emp_building" title="Building / Block" placeholder="Building / Block" autocomplete="off" tabindex="11"/>	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="emp_area" id="emp_area" title="Area" placeholder="Area" autocomplete="off" tabindex="12"/>	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="emp_street" id="emp_street" title="Street" placeholder="Street" autocomplete="off" tabindex="13"/>	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="emp_milestone" id="emp_milestone" title="Milestone" placeholder="Milestone" autocomplete="off" tabindex="14"/>	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="emp_pincode" id="emp_pincode" title="Pincode" placeholder="Pincode" autocomplete="off" tabindex="15"/>	
									</div>
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="emp_city" id="emp_city" title="Select City" placeholder="Select State" autocomplete="off" tabindex="16">
											<option value="">- Select City -</option>';
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
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="emp_teh" id="emp_teh" title="Belonging State" placeholder="State" autocomplete="off" tabindex="17">
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="emp_dist" id="emp_dist" title="Belonging State" placeholder="Belonging State" autocomplete="off" tabindex="18">
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
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="emp_state" id="emp_state" placeholder="Select State" title="Select State" autocomplete="off" tabindex="19">
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
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="emp_phone" id="emp_phone" title="Phone 1" placeholder="Phone Number" autocomplete="off" tabindex="20"/>	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="emp_mob" id="emp_mob" title="(Mobile)" placeholder="Mobile Number" autocomplete="off" tabindex="21"/>	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="emp_email" id="emp_email" title="Contact 2 (Email)" placeholder="Email Address" autocomplete="off" tabindex="22"/>	
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default" style="margin-top:40px;">
							<div class="panel-heading">
								<strong style="letter-spacing:1px;">Professional Details</strong>
							</div>
							<div class="panel-body">
								<div class="col-xs-12 col-md-4">
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="emp_quali" id="emp_quali" placeholder="Belonging State" title="Belonging State" autocomplete="off" tabindex="23">
											<option value="">- Select Qualifications -</option>';
												$fetchallfromdegree = $db->fetchallfromdegree();
												if($fetchallfromdegree){
													foreach($fetchallfromdegree as $crow){
														echo '<option value="'.$crow["degree_uid"].'" data-subtext="('.$crow["degree_code"].')">'.$crow["degree"].'</option>';
													}
												}
												else{
													echo '<option data-subtext="" disabled>No Records</option>';
												}
									echo'</select>	
									</div>
									<div class="form-group">
										<select class="selectpicker form-control"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="emp_branch" id="emp_branch" title="Belonging State" autocomplete="off" tabindex="24">
											<option value="">- Select Branch -</option>';
												$getofficedata = $db->getofficedata();
												if($getofficedata){
													foreach($getofficedata as $crow){
														echo '<option value="'.$crow["br_uid"].'" data-subtext="('.$crow["br_code"].')">'.$crow["br_name"].'</option>';
													}
												}
												else{
													echo '<option data-subtext="" disabled>No Records</option>';
												}
									echo'</select>	
									</div>
								</div>
								<div class="col-xs-12 col-md-4">
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="emp_department" id="emp_department" placeholder="Belonging State" title="Belonging State" autocomplete="off" tabindex="25">
											<option value="">- Select Department -</option>';
												$fetchallfromdepartment = $db->fetchallfromdepartment();
												if($fetchallfromdepartment){
													foreach($fetchallfromdepartment as $crow){
														echo '<option value="'.$crow["department_uid"].'" data-subtext="('.$crow["department_code"].')">'.$crow["department"].'</option>';
													}
												}
												else{
													echo '<option data-subtext="" disabled>No Records</option>';
												}
									echo'</select>
									</div>
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="emp_designation" id="emp_designation" placeholder="Belonging State" title="Belonging State" autocomplete="off" tabindex="26">
											<option value="">- Select Designation -</option>';
												$fetchallfromdesignation = $db->fetchallfromdesignation();
												if($fetchallfromdesignation){
													foreach($fetchallfromdesignation as $crow){
														echo '<option value="'.$crow["des_uid"].'" data-subtext="('.$crow["desi_code"].')">'.$crow["designation"].'</option>';
													}
												}
												else{
													echo '<option data-subtext="" disabled>No Records</option>';
												}
									echo'</select>	
									</div>
								</div>
								<div class="col-xs-12 col-md-4">
									<div class="form-group">
										<input type="text" class="form-control" name="emp_hired_date" id="emp_hired_date" title="Hired Date" placeholder="Joining Date" data-date-format="'. DATE_FORMAT .'" autocomplete="off" tabindex="27"/>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7" id="alertaddemploye"></div>
						<div class="col-md-5 col-xs-5" style="margin-top:20px;margin-bottom:120px;padding:0;">
							<input type="submit" class="btn btn-success pull-right" style="font-weight:600;width:30%;" name="add_emp" id="add_emp" value="Save" autocomplete="off" tabindex="28"/>
						</div>
					</div>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="tabs-employee-area4" aria-labelledby="tabs-employee-area4">
				<div style="margin-top:50px;font-size:15px;" id="genemployee_datatable" class="col-xs-12 table-responsive"></div>
			</div>
		</div>
	</div>
</div>';
echo'
<script>		
	$(document).ready(function(){
		$(".selectpicker").selectpicker();
		
		var dateFormat = $(this).attr("data-vat-rate");
		$("#emp_dob").datetimepicker({
			showClose: true,
			format: dateFormat
		});
		$("#emp_hired_date").datetimepicker({
			showClose: true,
			format: dateFormat
		});
		
		$("#add_employee_form").validate({
			rules: {
				emp_fname: "required",
			},
			messages: {
				emp_fname: "Please Enter First Name",
			},
			submitHandler: function(form) {
				//alert("submitted");
				addemployee();
			}		
		});
	});
	
	function addemployee(){	
		$("#add_emp").val("Saving...");
		var emp_fname = $("#emp_fname").val();
		var emp_mname = $("#emp_mname").val();
		var emp_sname = $("#emp_sname").val();
		var emp_sex = $("#emp_sex").val();
		var emp_marriage = $("#emp_marriage").val();
		var emp_adhar = $("#emp_adhar").val();
		var emp_pan = $("#emp_pan").val();
		var emp_dob = $("#emp_dob").val();
		var emp_building = $("#emp_building").val();
		var emp_area = $("#emp_area").val();
		var emp_street = $("#emp_street").val();
		var emp_milestone = $("#emp_milestone").val();
		var emp_pincode = $("#emp_pincode").val();
		var emp_city = $("#emp_city").val();
		var emp_teh = $("#emp_teh").val();
		var emp_dist = $("#emp_dist").val();
		var emp_state = $("#emp_state").val();
		var emp_phone = $("#emp_phone").val();
		var emp_mob = $("#emp_mob").val();
		var emp_email = $("#emp_email").val();
		var emp_quali = $("#emp_quali").val();
		var emp_branch = $("#emp_branch").val();
		var emp_department = $("#emp_department").val();
		var emp_designation = $("#emp_designation").val();
		var emp_hired_date = $("#emp_hired_date").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Orgnisation/Staff/Employee/add_emp.php",
			data:{
				emp_fname : emp_fname,
				emp_mname : emp_mname,
				emp_sname : emp_sname,
				emp_sex : emp_sex,
				emp_marriage : emp_marriage,
				emp_adhar : emp_adhar,
				emp_pan : emp_pan,
				emp_dob : emp_dob,
				emp_building : emp_building,
				emp_area : emp_area,
				emp_street : emp_street,
				emp_milestone : emp_milestone,
				emp_pincode : emp_pincode,
				emp_city : emp_city,
				emp_teh : emp_teh,
				emp_dist : emp_dist,
				emp_state : emp_state,
				emp_phone : emp_phone,
				emp_mob : emp_mob,
				emp_email : emp_email,
				emp_quali : emp_quali,
				emp_branch : emp_branch,
				emp_department : emp_department,
				emp_designation : emp_designation,
				emp_hired_date : emp_hired_date,
			},
			success:function(result){	
				$("#alertaddemploye").html(result);
                $("#add_emp_msg").fadeOut(20000);
				$("#add_emp").val("Save");
				$("#add_employee_form").trigger("reset");
				$(".selectpicker").selectpicker("refresh");
			}
		});
	}
	
	function genemployee_datatable(){		
		$.ajax({
			type:"get",
			url:"../get_files/Orgnisation/Staff/Employee/emp_datatable.php",
			success:function(result){
				$("#genemployee_datatable").html(result);
			}
		});
	}
</script>';
?>