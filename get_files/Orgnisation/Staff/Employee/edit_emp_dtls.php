<?php
@session_start();
include('../../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
define('DATE_FORMAT', 'DD-MM-YYYY');

$employee_uid = $_POST["employee_uid"];

$fetchaemp = $db->fetchaemp($employee_uid);
if($fetchaemp){
	$first_name =  $fetchaemp["first_name"];
	$middle_name =  $fetchaemp["middle_name"];
	$sir_name =  $fetchaemp["sir_name"];
	$sex =  $fetchaemp["sex"];
	$is_married =  $fetchaemp["is_married"];
	$adhar_card =  $fetchaemp["adhar_card"];
	$pan_card =  $fetchaemp["pan_card"];
	$birthdate =  date("d-m-Y",strtotime($fetchaemp["birthdate"]));
	$building_block =  $fetchaemp["building_block"];
	$area =  $fetchaemp["area"];
	$street =  $fetchaemp["street"];
	$milestone =  $fetchaemp["milestone"];
	$pin_code =  $fetchaemp["pin_code"];
	$city =  $fetchaemp["city"];
	$tehsil =  $fetchaemp["tehsil"];
	$district =  $fetchaemp["district"];
	$state =  $fetchaemp["state"];
	$phone_no =  $fetchaemp["phone_no"];
	$mobile_no =  $fetchaemp["mobile_no"];
	$email_id =  $fetchaemp["email_id"];
	$qualification =  $fetchaemp["qualification"];
	$branch =  $fetchaemp["branch"];
	$department =  $fetchaemp["department"];
	$designation =  $fetchaemp["designation"];
	$joining_date =  date("d-m-Y",strtotime($fetchaemp["joining_date"]));
}
echo'
<form id="updt_employee_form" >
	<div class="col-xs-12 col-md-12" style="margin-top:40px;font-size:17px;">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong style="letter-spacing:1px;">Personal Details</strong>
			</div>
			<div class="panel-body">
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<input type="hidden" name="employee_uid" id="employee_uid" value="'.$employee_uid.'">
						<input type="text" class="form-control" name="updt_emp_fname" id="updt_emp_fname" title="Name" placeholder="First Name" value="'.$first_name.'" autocomplete="off" tabindex="3"/>	
					</div>
					<div class="form-group">
						<select class="form-control" name="updt_emp_marriage" id="updt_emp_marriage" placeholder="Martial Status" title="Martial Status" autocomplete="off" tabindex="7">
							<option value="" selected>-- Marriage Status --</option>';
							if($is_married == 0 ){
								echo'<option value="0" selected>Married</option>
									<option value="1">Unmarried</option>';
								}
							else{
								echo'<option value="0">Married</option>
									<option value="1" selected>Unmarried</option>';
							}
					echo'</select>	
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="updt_emp_mname" id="updt_emp_mname" title="Name" placeholder="Middle Name" value="'.$middle_name.'" autocomplete="off" tabindex="4"/>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_emp_adhar" id="updt_emp_adhar" placeholder="Adhar Card Number"  title="Address" value="'.$adhar_card.'" autocomplete="off" tabindex="8"/>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="updt_emp_sname" id="updt_emp_sname" title="Name" placeholder="Sir Name" value="'.$sir_name.'" autocomplete="off" tabindex="5"/>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_emp_pan" id="updt_emp_pan" title="Email id" placeholder="PAN Card Number" autocomplete="off" value="'.$pan_card.'" autocomplete="off" tabindex="9"/>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<select class="form-control" name="updt_emp_sex" id="updt_emp_sex" placeholder="Sex"  title="Sex" autocomplete="off" tabindex="6">
							<option value="">-- Sex --</option>';
								if($sex == 0 ){
									echo'<option value="0" selected>Male</option>
										<option value="1">Female</option>
										<option value="2">Transgender</option>';
								}
								else if($sex == 1 ){
									echo'<option value="0">Male</option>
										<option value="1" selected>Female</option>
										<option value="2">Transgender</option>';
								}
								else if($sex == 2 ){
									echo'<option value="0">Male</option>
										<option value="1">Female</option>
										<option value="2" selected>Transgender</option>';
								}
					echo'</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_emp_dob" id="updt_emp_dob" title="DOB" autocomplete="off" placeholder="Date of Birth" data-date-format="'. DATE_FORMAT .'" value="'.$birthdate.'" autocomplete="off" tabindex="10"/>
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
						<input type="text" class="form-control" name="updt_emp_building" id="updt_emp_building" title="Building / Block" placeholder="Building / Block" autocomplete="off" tabindex="11" value="'.$building_block.'">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_emp_area" id="updt_emp_area" title="Area" placeholder="Area" value="'.$area.'" autocomplete="off" tabindex="12"/>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_emp_street" id="updt_emp_street" title="Street" placeholder="Street" value="'.$street.'" autocomplete="off" tabindex="13"/>	
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="updt_emp_milestone" id="updt_emp_milestone" title="Milestone" placeholder="Milestone" value="'.$milestone.'" autocomplete="off" tabindex="14"/>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="updt_emp_pincode" id="updt_emp_pincode" title="Pincode" placeholder="Pincode" value="'.$pin_code.'" autocomplete="off" tabindex="13"/>	
					</div>
					<div class="form-group">
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="updt_emp_city" id="updt_emp_city" placeholder="Select State" title="Select City" autocomplete="off" tabindex="16">
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
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="updt_emp_teh" id="updt_emp_teh" placeholder="State" title="Belonging State" autocomplete="off" tabindex="17">
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
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="updt_emp_dist" id="updt_emp_dist" placeholder="Belonging State" title="Belonging State" autocomplete="off" tabindex="18">
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
					<div class="form-group">
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="updt_emp_state" id="updt_emp_state" placeholder="Select State" title="Select State" autocomplete="off" tabindex="19">
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
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="emp_phone" id="updt_emp_phone" title="Phone 1" placeholder="Phone Number" value="'.$phone_no.'" autocomplete="off" tabindex="20"/>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="emp_mob" id="updt_emp_mob" title="(Mobile)" placeholder="Mobile Number" value="'.$mobile_no.'" autocomplete="off" tabindex="21"/>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="emp_email" id="updt_emp_email" title="Contact 2 (Email)" placeholder="Email Address" value="'.$email_id.'" autocomplete="off" tabindex="22"/>	
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
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="emp_quali" id="updt_emp_quali" placeholder="Belonging State" title="Belonging State" autocomplete="off" tabindex="23">
							<option value="">- Select Qualifications -</option>';
								$fetchallfromdegree = $db->fetchallfromdegree();
								if($fetchallfromdegree){
									foreach($fetchallfromdegree as $crow){
										if($qualification == $crow["degree_uid"]){
											echo '<option value="'.$crow["degree_uid"].'" data-subtext="('.$crow["degree_code"].')" selected>'.$crow["degree"].'</option>';
										}
										else{
											echo '<option value="'.$crow["degree_uid"].'" data-subtext="('.$crow["degree_code"].')">'.$crow["degree"].'</option>';
										}
									}
								}
								else{
									echo '<option data-subtext="" disabled>No Records</option>';
								}
					echo'</select>	
					</div>
					<div class="form-group">
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="emp_branch" id="updt_emp_branch" placeholder="Belonging State" title="Belonging State" autocomplete="off" tabindex="24">
							<option value="">- Select Branch -</option>';
								$getofficedata = $db->getofficedata();
								if($getofficedata){
									foreach($getofficedata as $crow){
										if($branch == $crow["br_uid"]){
											echo '<option value="'.$crow["br_uid"].'" data-subtext="('.$crow["br_code"].')" selected>'.$crow["br_name"].'</option>';
										}
										else{
											echo '<option value="'.$crow["br_uid"].'" data-subtext="('.$crow["br_code"].')">'.$crow["br_name"].'</option>';
										}
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
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="emp_department" id="updt_emp_department" placeholder="Belonging State" title="Belonging State" autocomplete="off" tabindex="25">
							<option value="">- Select Department -</option>';
								$fetchallfromdepartment = $db->fetchallfromdepartment();
								if($fetchallfromdepartment){
									foreach($fetchallfromdepartment as $crow){
										if($department == $crow["department_uid"]){
											echo '<option value="'.$crow["department_uid"].'" data-subtext="('.$crow["department_code"].')" selected>'.$crow["department"].'</option>';
										}
										else{
											echo '<option value="'.$crow["department_uid"].'" data-subtext="('.$crow["department_code"].')">'.$crow["department"].'</option>';
										}										
									}
								}
								else{
									echo '<option data-subtext="" disabled>No Records</option>';
								}
					echo'</select>
					</div>
					<div class="form-group">
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="emp_designation" id="updt_emp_designation" placeholder="Belonging State" title="Belonging State" autocomplete="off" tabindex="26">
							<option value="">- Select Designation -</option>';
								$fetchallfromdesignation = $db->fetchallfromdesignation();
								if($fetchallfromdesignation){
									foreach($fetchallfromdesignation as $crow){
										if($designation == $crow["des_uid"]){
											echo '<option value="'.$crow["des_uid"].'" data-subtext="('.$crow["desi_code"].')" selected>'.$crow["designation"].'</option>';
										}
										else{
											echo '<option value="'.$crow["des_uid"].'" data-subtext="('.$crow["desi_code"].')">'.$crow["designation"].'</option>';
										}										
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
						<input type="text" class="form-control" name="emp_hired_date" id="updt_emp_hired_date" title="Hired Date" placeholder="Joining Date" data-date-format="'. DATE_FORMAT .'" autocomplete="off" tabindex="27" value="'.$joining_date.'">	
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7" id="alertupdtemploye"></div>
		<div class="col-md-5 col-xs-5" style="margin-top:20px;margin-bottom:60px;padding:0;">
			<input type="submit" class="btn btn-warning pull-right" style="font-weight:600;width:30%;" name="action_create_employe" id="action_create_employe" value="Update" tabindex="28"/>
		</div>
	</div>
</form>
<script>
	$(document).ready(function() {
		$(".selectpicker").selectpicker();
		
		var dateFormat = $(this).attr("data-vat-rate");
		$("#updt_emp_dob").datetimepicker({
			showClose: true,
			format: dateFormat
		});
		$("#updt_emp_hired_date").datetimepicker({
			showClose: true,
			format: dateFormat
		});
		
		$("#updt_employee_form").validate({
			rules: {
				updt_emp_fname: "required"
			},
	
			messages: {
				updt_emp_fname: "Please Enter First Name"
			},
			submitHandler: function(form) {
				updt_employee();
			}		
		});
	});
		
	function updt_employee(){
		$("#action_create_employe").val("Updating...");	
		var employee_uid = $("#employee_uid").val();
		var updt_emp_fname = $("#updt_emp_fname").val();
		var updt_emp_mname = $("#updt_emp_mname").val();
		var updt_emp_sname = $("#updt_emp_sname").val();
		var updt_emp_sex = $("#updt_emp_sex").val();
		var updt_emp_marriage = $("#updt_emp_marriage").val();
		var updt_emp_adhar = $("#updt_emp_adhar").val();
		var updt_emp_pan = $("#updt_emp_pan").val();
		var updt_emp_dob = $("#updt_emp_dob").val();
		var updt_emp_building = $("#updt_emp_building").val();
		var updt_emp_area = $("#updt_emp_area").val();
		var updt_emp_street = $("#updt_emp_street").val();
		var updt_emp_milestone = $("#updt_emp_milestone").val();
		var updt_emp_pincode = $("#updt_emp_pincode").val();
		var updt_emp_city = $("#updt_emp_city").val();
		var updt_emp_teh = $("#updt_emp_teh").val();
		var updt_emp_dist = $("#updt_emp_dist").val();
		var updt_emp_state = $("#updt_emp_state").val();
		var updt_emp_phone = $("#updt_emp_phone").val();
		var updt_emp_mob = $("#updt_emp_mob").val();
		var updt_emp_email = $("#updt_emp_email").val();
		var updt_emp_quali = $("#updt_emp_quali").val();
		var updt_emp_branch = $("#updt_emp_branch").val();
		var updt_emp_department = $("#updt_emp_department").val();
		var updt_emp_designation = $("#updt_emp_designation").val();
		var updt_emp_hired_date = $("#updt_emp_hired_date").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Orgnisation/Staff/Employee/updt_emp.php",
			data:{
				employee_uid : employee_uid,
				updt_emp_fname : updt_emp_fname,
				updt_emp_mname : updt_emp_mname,
				updt_emp_sname : updt_emp_sname,
				updt_emp_sex : updt_emp_sex,
				updt_emp_marriage : updt_emp_marriage,
				updt_emp_adhar : updt_emp_adhar,
				updt_emp_pan : updt_emp_pan,
				updt_emp_dob : updt_emp_dob,
				updt_emp_building : updt_emp_building,
				updt_emp_area : updt_emp_area,
				updt_emp_street : updt_emp_street,
				updt_emp_milestone : updt_emp_milestone,
				updt_emp_pincode : updt_emp_pincode,
				updt_emp_city : updt_emp_city,
				updt_emp_teh : updt_emp_teh,
				updt_emp_dist : updt_emp_dist,
				updt_emp_state : updt_emp_state,
				updt_emp_phone : updt_emp_phone,
				updt_emp_mob : updt_emp_mob,
				updt_emp_email : updt_emp_email,
				updt_emp_quali : updt_emp_quali,
				updt_emp_branch : updt_emp_branch,
				updt_emp_department : updt_emp_department,
				updt_emp_designation : updt_emp_designation,
				updt_emp_hired_date : updt_emp_hired_date,
			},
			success:function(result){
				$("#alertupdtemploye").html(result);
                $("#updt_br_msg").fadeOut(20000);
				$("#action_create_employe").val("Update");
				$("#updt_employee_form").trigger("reset");
				$(".selectpicker").selectpicker("refresh");
			}
		});
	}
</script>';
?>