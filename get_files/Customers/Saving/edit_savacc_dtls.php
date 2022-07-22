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
	$created_date =	 date("d-m-Y",strtotime($fetchacustomer["created_date"]));
}
echo'
<form id="updt_savacc_form" >
	<div class="col-xs-12 col-md-12" style="margin-top:40px;font-size:17px;">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong style="letter-spacing:1px;">Personal Details</strong>
			</div>
			<div class="panel-body">
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<input type="hidden" name="customer_uid" id="customer_uid" value="'.$customer_uid.'">
						<input type="text" class="form-control" name="updt_savacc_fname" id="updt_savacc_fname" title="Name" placeholder="First Name" value="'.$first_name.'" tabindex="3"/>	
					</div>
					<div class="form-group">
						<select class="form-control" name="savacc_marriage" id="updt_savacc_marriage" placeholder="Martial Status" title="Martial Status" tabindex="7">
							<option value="" selected>- Marriage Status -</option>';
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
						<input type="text" class="form-control" name="savacc_mname" id="updt_savacc_mname" title="Name" placeholder="Middle Name" value="'.$middle_name.'" tabindex="4"/>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="savacc_adhar" id="updt_savacc_adhar" placeholder="Adhar Card Number"  title="Address" value="'.$adhar.'" tabindex="8"/>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="savacc_sname" id="updt_savacc_sname" title="Name" placeholder="Sir Name" value="'.$sir_name.'" tabindex="5"/>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="savacc_pan" id="updt_savacc_pan" title="Email id" placeholder="PAN Card Number" value="'.$pan.'" tabindex="9"/>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<select class="form-control" name="savacc_sex" id="updt_savacc_sex" placeholder="Sex"  title="Sex" tabindex="6">
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
						<input type="text" class="form-control" name="savacc_dob" id="updt_savacc_dob" title="DOB" autocomplete="off" placeholder="Date of Birth" data-date-format="'. DATE_FORMAT .'" value="'.$birth_date.'" tabindex="10"/>
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
						<input type="text" class="form-control" name="savacc_building" id="updt_savacc_building" title="Building / Block" placeholder="Building / Block" value="'.$building.'" tabindex="11"/>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="savacc_area" id="updt_savacc_area" title="Area" placeholder="Area" value="'.$area.'" tabindex="12"/>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="savacc_street" id="updt_savacc_street" title="Street" placeholder="Street" value="'.$street.'" tabindex="13"/>	
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="savacc_milestone" id="updt_savacc_milestone" title="Milestone" placeholder="Milestone" value="'.$milestone.'" tabindex="14"/>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="savacc_pincode" id="updt_savacc_pincode" title="Pincode" placeholder="Pincode" value="'.$pin_code.'" tabindex="15"/>	
					</div>
					<div class="form-group">
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="savacc_city" id="updt_savacc_city" placeholder="Select State" title="Select City" tabindex="16">
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
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="savacc_teh" id="updt_savacc_teh" placeholder="State" title="Belonging State" tabindex="17">
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
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="savacc_dist" id="updt_savacc_dist" placeholder="Belonging State" title="Belonging State" tabindex="18">
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
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="savacc_state" id="updt_savacc_state" placeholder="Select State" title="Select State" tabindex="19">
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
						<input type="text" class="form-control" name="savacc_phone" id="updt_savacc_phone" title="Phone 1" placeholder="Phone Number" value="'.$phone_no.'" tabindex="20"/>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="savacc_mob" id="updt_savacc_mob" title="(Mobile)" placeholder="Mobile Number" value="'.$mobile_no.'" tabindex="21"/>	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="savacc_email" id="updt_savacc_email" title="Contact 2 (Email)" placeholder="Email Address" value="'.$email.'" tabindex="22"/>	
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
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="savacc_quali" id="updt_savacc_quali" placeholder="Belonging State" title="Belonging State" tabindex="23">
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
						<input type="text" class="form-control" name="savacc_amount" id="updt_savacc_amount" title="Contact 2 (Email)" placeholder="Balance Amount" value="'.$balance.'" tabindex="24"/>	
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="savacc_branch" id="updt_savacc_branch" placeholder="Belonging State" title="Belonging State" tabindex="25">
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
						<input type="text" class="form-control" name="savacc_joining" id="updt_savacc_joining" title="Hired Date" placeholder="Joining Date" data-date-format="'. DATE_FORMAT .'" value="'.$created_date.'" tabindex="26"/>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7" id="alertupdtsavacc"></div>
		<div class="col-md-5 col-xs-5" style="margin-top:20px;margin-bottom:120px;padding:0;">
			<input type="submit" class="btn btn-warning pull-right" style="font-weight:600;width:30%;" name="updt_savacc" id="updt_savacc" value="Update"/>
		</div>
	</div>
</form>
<script>		
	$(document).ready(function(){
		$(".selectpicker").selectpicker();
		
		var dateFormat = $(this).attr("data-vat-rate");
		$("#savacc_dob").datetimepicker({
			showClose: true,
			format: dateFormat
		});
		$("#savacc_joining").datetimepicker({
			showClose: true,
			format: dateFormat
		});
		
		$("#updt_savacc_form").validate({
			rules: {
				updt_savacc_fname: "required"
			},
			messages: {
				updt_savacc_fname: "Please Enter First Name"
			},
			submitHandler: function(form) {
				//alert("submitted");
				updt_savacc();
	
			}		
		});
	});
	
	function updt_savacc(){
		$("#updt_savacc").val("Updating");	
		var customer_uid = $("#customer_uid").val();
		var updt_savacc_fname = $("#updt_savacc_fname").val();
		var updt_savacc_mname = $("#updt_savacc_mname").val();
		var updt_savacc_sname = $("#updt_savacc_sname").val();
		var updt_savacc_sex = $("#updt_savacc_sex").val();
		var updt_savacc_marriage = $("#updt_savacc_marriage").val();
		var updt_savacc_adhar = $("#updt_savacc_adhar").val();
		var updt_savacc_pan = $("#updt_savacc_pan").val();
		var updt_savacc_dob = $("#updt_savacc_dob").val();
		var updt_savacc_building = $("#updt_savacc_building").val();
		var updt_savacc_area = $("#updt_savacc_area").val();
		var updt_savacc_street = $("#updt_savacc_street").val();
		var updt_savacc_milestone = $("#updt_savacc_milestone").val();
		var updt_savacc_pincode = $("#updt_savacc_pincode").val();
		var updt_savacc_city = $("#updt_savacc_city").val();
		var updt_savacc_teh = $("#updt_savacc_teh").val();
		var updt_savacc_dist = $("#updt_savacc_dist").val();
		var updt_savacc_state = $("#updt_savacc_state").val();
		var updt_savacc_phone = $("#updt_savacc_phone").val();
		var updt_savacc_mob = $("#updt_savacc_mob").val();
		var updt_savacc_email = $("#updt_savacc_email").val();
		var updt_savacc_quali = $("#updt_savacc_quali").val();
		var updt_savacc_amount = $("#updt_savacc_amount").val();
		var updt_savacc_branch = $("#updt_savacc_branch").val();
		var updt_savacc_joining = $("#updt_savacc_joining").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Customers/Saving/updt_savacc.php",
			data:{
				customer_uid : customer_uid,
				updt_savacc_fname : updt_savacc_fname,
				updt_savacc_mname : updt_savacc_mname,
				updt_savacc_sname : updt_savacc_sname,
				updt_savacc_sex : updt_savacc_sex,
				updt_savacc_marriage : updt_savacc_marriage,
				updt_savacc_adhar : updt_savacc_adhar,
				updt_savacc_pan : updt_savacc_pan,
				updt_savacc_dob : updt_savacc_dob,
				updt_savacc_building : updt_savacc_building,
				updt_savacc_area : updt_savacc_area,
				updt_savacc_street : updt_savacc_street,
				updt_savacc_milestone : updt_savacc_milestone,
				updt_savacc_pincode : updt_savacc_pincode,
				updt_savacc_city : updt_savacc_city,
				updt_savacc_teh : updt_savacc_teh,
				updt_savacc_dist : updt_savacc_dist,
				updt_savacc_state : updt_savacc_state,
				updt_savacc_phone : updt_savacc_phone,
				updt_savacc_mob : updt_savacc_mob,
				updt_savacc_email : updt_savacc_email,
				updt_savacc_quali : updt_savacc_quali,
				updt_savacc_amount : updt_savacc_amount,
				updt_savacc_branch : updt_savacc_branch,
				updt_savacc_joining : updt_savacc_joining,
			},
			success:function(result){
				$("#alertupdtsavacc").html(result);
				$("#updt_savacc_msg").fadeOut(20000);
				$("#updt_savacc").val("Update");	
				$("#add_savacc_form").trigger("reset");
				$(".selectpicker").selectpicker("refresh");
			}
		});
	}
</script>';
?>