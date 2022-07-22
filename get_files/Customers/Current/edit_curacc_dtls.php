<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
//$orgid=$_SESSION['orgid'];

$customer_uid = $_POST['customer_uid'];

$fetchacustomer = $db->fetchacustomer($customer_uid);

if($fetchacustomer){
	$first_name =  $fetchacustomer["first_name"];
	$middle_name =  $fetchacustomer["middle_name"];
	$sir_name =  $fetchacustomer["sir_name"];
	$sex =  $fetchacustomer["sex"];
	$is_married =  $fetchacustomer["is_married"];
	$adhar =  $fetchacustomer["adhar"];
	$pan =  $fetchacustomer["pan"];
	$birth_date =  date("d-m-Y",strtotime($fetchacustomer["birth_date"]));
	$building =  $fetchacustomer["building"];
	$area =  $fetchacustomer["area"];
	$street =  $fetchacustomer["street"];
	$milestone =  $fetchacustomer["milestone"];
	$pin_code =  $fetchacustomer["pin_code"];
	$city =  $fetchacustomer["city"];
	$tehsil =  $fetchacustomer["tehsil"];
	$district =  $fetchacustomer["district"];
	$state =  $fetchacustomer["state"];
	$phone_no =  $fetchacustomer["phone_no"];
	$mobile_no =  $fetchacustomer["mobile_no"];
	$email =  $fetchacustomer["email"];
	$qualification =  $fetchacustomer["qualification"];
	$balance =  $fetchacustomer["balance"];
	$branch =  $fetchacustomer["branch"];
	$created_date =  date("d-m-Y",strtotime($fetchacustomer["created_date"]));
}


echo'
<form id="updt_curacc_form" >
	<div class="col-xs-12 col-md-12" style="margin-top:40px;font-size:17px;">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong style="letter-spacing:1px;">Personal Details</strong>
			</div>
			<div class="panel-body">
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<input type="hidden" name="customer_uid" id="customer_uid" value="'.$customer_uid.'">
						<input type="text" class="form-control"  name="curacc_fname" id="updt_curacc_fname" title="Name" placeholder="First Name" tabindex="3" value="'.$first_name.'">	
					</div>
					<div class="form-group">
						<select class="form-control"  name="curacc_marriage" id="updt_curacc_marriage" placeholder="Martial Status" title="Martial Status" tabindex="7" value="'.$is_married.'">
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
						<input type="text" class="form-control"  name="curacc_mname" id="updt_curacc_mname" title="Name" placeholder="Middle Name" tabindex="4" value="'.$middle_name.'">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control"  name="curacc_adhar" id="updt_curacc_adhar" placeholder="Adhar Card Number"  title="Address" tabindex="8" value="'.$adhar.'">
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<input type="text" class="form-control"  name="curacc_sname" id="updt_curacc_sname" title="Name" placeholder="Sir Name" tabindex="5" value="'.$sir_name.'">	
					</div>
					<div class="form-group">
						<input type="email" class="form-control"  name="curacc_pan" id="updt_curacc_pan" title="Email id" placeholder="PAN Card Number" autocomplete="off" tabindex="9" value="'.$pan.'">
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<select class="form-control"  name="curacc_sex" id="updt_curacc_sex" placeholder="Sex"  title="Sex" tabindex="6">
							<option value="" selected>-- Sex --</option>';
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
						<input type="text" class="form-control"  name="curacc_dob" id="updt_curacc_dob" title="DOB" autocomplete="off" placeholder="Date of Birth" data-date-format="'. DATE_FORMAT .'" tabindex="10" value="'.$birth_date.'"/>
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
						<input type="text" class="form-control"  name="curacc_building" id="updt_curacc_building" title="Building / Block" placeholder="Building / Block" tabindex="11" value="'.$building.'">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control"  name="curacc_area" id="updt_curacc_area" title="Area" placeholder="Area" tabindex="12" value="'.$area.'">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control"  name="curacc_street" id="updt_curacc_street" title="Street" placeholder="Street" tabindex="13" value="'.$street.'">	
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control"  name="curacc_milestone" id="updt_curacc_milestone" title="Milestone" placeholder="Milestone" tabindex="14" value="'.$milestone.'">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control"  name="curacc_pincode" id="updt_curacc_pincode" title="Pincode" placeholder="Pincode" tabindex="15" value="'.$pin_code.'">	
					</div>
					<div class="form-group">
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true"  name="curacc_city" id="updt_curacc_city" placeholder="Select State" title="Select City" tabindex="16">
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
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="curacc_teh" id="updt_curacc_teh" placeholder="State" title="Belonging State" tabindex="17">
							<option value="">- Select Tehsil -</option>';
							$fetchallfromtehsil = $db->fetchallfromtehsil();
								if($fetchallfromtehsil){
									foreach($fetchallfromtehsil as $crow){
										if($tehsil == $crow["tehsil_uid"]){
											echo '<option value="'.$crow["tehsil_uid"].'">'.$crow["tehsil_name"].'</option>';
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
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true"  name="curacc_dist" id="updt_curacc_dist" placeholder="Belonging State" title="Belonging State" tabindex="18">
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
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true"  name="curacc_state" id="updt_curacc_state" placeholder="Select State" title="Select State" tabindex="19">
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
						<input type="text" class="form-control"  name="curacc_phone" id="updt_curacc_phone" title="Phone 1" placeholder="Phone Number" tabindex="20" value="'.$phone_no.'">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control"  name="curacc_mob" id="updt_curacc_mob" title="(Mobile)" placeholder="Mobile Number" tabindex="21" value="'.$mobile_no.'">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control"  name="curacc_email" id="updt_curacc_email" title="Contact 2 (Email)" placeholder="Email Address" tabindex="22" value="'.$email.'">	
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default" style="margin-top:40px;">
			<div class="panel-heading">
				<strong style="letter-spacing:1px;">Professional Details</strong>
			</div>
			<div class="panel-body">
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true"  name="curacc_quali" id="updt_curacc_quali" placeholder="Belonging State" title="Belonging State" tabindex="23">
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
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="curacc_amount" id="updt_curacc_amount" title="Contact 2 (Email)" placeholder="Balance Amount" tabindex="24" value="'.$balance.'">	
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true"  name="curacc_branch" id="updt_curacc_branch" placeholder="Belonging State" title="Belonging State" tabindex="25">
							<option value="">- Select Branch -</option>
							<option value="">-<b> Not Assigned </b>-</option>';
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
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<input type="text" class="form-control"  name="curacc_joining" id="updt_curacc_joining" title="Hired Date" placeholder="Joining Date" data-date-format="'. DATE_FORMAT .'" tabindex="26" value="'.$created_date.'">	
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7" id="alertupdtcuracc"></div>
		<div class="col-md-5 col-xs-5" style="margin-top:20px;margin-bottom:120px;padding:0;">
			<input type="submit" class="btn btn-warning pull-right" style="font-weight:600;width:30%;" name="updt_curacc" id="updt_curacc" value="Update"/>
		</div>
	</div>
</form>
<script>	
	$(document).ready(function(){
		$(".selectpicker").selectpicker();
		
		var dateFormat = $(this).attr("data-vat-rate");
		$("#curacc_dob").datetimepicker({
			showClose: true,
			format: dateFormat
		});
		$("#curacc_joining").datetimepicker({
			showClose: true,
			format: dateFormat
		});
		
		$("#updt_curacc_form").validate({
			rules: {
				updt_curacc_fname: "required"
			},
			messages: {
				updt_curacc_fname: "Please Enter First Name"
			},
			submitHandler: function(form) {
				//alert("submitted");
				updt_curacc();
	
			}		
		});
	});
	
	function updt_curacc(){
		$("#updt_curacc").val("Updating");	
		var customer_uid = $("#customer_uid").val();
		var updt_curacc_fname = $("#updt_curacc_fname").val();
		var updt_curacc_mname = $("#updt_curacc_mname").val();
		var updt_curacc_sname = $("#updt_curacc_sname").val();
		var updt_curacc_sex = $("#updt_curacc_sex").val();
		var updt_curacc_marriage = $("#updt_curacc_marriage").val();
		var updt_curacc_adhar = $("#updt_curacc_adhar").val();
		var updt_curacc_pan = $("#updt_curacc_pan").val();
		var updt_curacc_dob = $("#updt_curacc_dob").val();
		var updt_curacc_building = $("#updt_curacc_building").val();
		var updt_curacc_area = $("#updt_curacc_area").val();
		var updt_curacc_street = $("#updt_curacc_street").val();
		var updt_curacc_milestone = $("#updt_curacc_milestone").val();
		var updt_curacc_pincode = $("#updt_curacc_pincode").val();
		var updt_curacc_city = $("#updt_curacc_city").val();
		var updt_curacc_teh = $("#updt_curacc_teh").val();
		var updt_curacc_dist = $("#updt_curacc_dist").val();
		var updt_curacc_state = $("#updt_curacc_state").val();
		var updt_curacc_phone = $("#updt_curacc_phone").val();
		var updt_curacc_mob = $("#updt_curacc_mob").val();
		var updt_curacc_email = $("#updt_curacc_email").val();
		var updt_curacc_quali = $("#updt_curacc_quali").val();
		var updt_curacc_amount = $("#updt_curacc_amount").val();
		var updt_curacc_branch = $("#updt_curacc_branch").val();
		var updt_curacc_joining = $("#updt_curacc_joining").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Customers/Current/updt_curacc.php",
			data:{
				customer_uid : customer_uid,
				updt_curacc_fname : updt_curacc_fname,
				updt_curacc_mname : updt_curacc_mname,
				updt_curacc_sname : updt_curacc_sname,
				updt_curacc_sex : updt_curacc_sex,
				updt_curacc_marriage : updt_curacc_marriage,
				updt_curacc_adhar : updt_curacc_adhar,
				updt_curacc_pan : updt_curacc_pan,
				updt_curacc_dob : updt_curacc_dob,
				updt_curacc_building : updt_curacc_building,
				updt_curacc_area : updt_curacc_area,
				updt_curacc_street : updt_curacc_street,
				updt_curacc_milestone : updt_curacc_milestone,
				updt_curacc_pincode : updt_curacc_pincode,
				updt_curacc_city : updt_curacc_city,
				updt_curacc_teh : updt_curacc_teh,
				updt_curacc_dist : updt_curacc_dist,
				updt_curacc_state : updt_curacc_state,
				updt_curacc_phone : updt_curacc_phone,
				updt_curacc_mob : updt_curacc_mob,
				updt_curacc_email : updt_curacc_email,
				updt_curacc_quali : updt_curacc_quali,
				updt_curacc_amount : updt_curacc_amount,
				updt_curacc_branch : updt_curacc_branch,
				updt_curacc_joining : updt_curacc_joining,
			},
			success:function(result){
				$("#alertupdtcuracc").html(result);
				$("#updt_curacc_msg").fadeOut(20000);
				$("#updt_curacc").val("Update");	
				$("#updt_curacc_form").trigger("reset");
				$(".selectpicker").selectpicker("refresh");
			}
		});
	}
</script>';
?>