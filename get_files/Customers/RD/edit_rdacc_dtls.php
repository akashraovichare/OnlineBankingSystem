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
	$birth_date =  @date('Y-m-d',strtotime(str_replace("/","-",$fetchacustomer["birth_date"])));
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
	$created_date =  @date('Y-m-d',strtotime(str_replace("/","-",$fetchacustomer["created_date"])));
}

echo'
<form id="updt_rdacc_form" >
	<div class="col-xs-12 col-md-12" style="margin-top:40px;font-size:17px;">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong style="letter-spacing:1px;">Personal Details</strong>
			</div>
			<div class="panel-body">
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<input type="hidden" name="customer_uid" id="customer_uid" value="'.$customer_uid.'">
						<input type="text" class="form-control" name="updt_rdacc_fname" id="updt_rdacc_fname" title="Name" placeholder="First Name" tabindex="3" value="'.$first_name.'">	
					</div>
					<div class="form-group">
						<select class="form-control" name="rdacc_marriage" id="updt_rdacc_marriage" placeholder="Martial Status" title="Martial Status" tabindex="7" value="'.$is_married.'">
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
						<input type="text" class="form-control" name="rdacc_mname" id="updt_rdacc_mname" title="Name" placeholder="Middle Name" tabindex="4" value="'.$middle_name.'">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="rdacc_adhar" id="updt_rdacc_adhar" placeholder="Adhar Card Number"  title="Address" tabindex="8" value="'.$adhar.'">
					</div>									
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="rdacc_sname" id="updt_rdacc_sname" title="Name" placeholder="Sir Name" tabindex="5" value="'.$sir_name.'">	
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="rdacc_pan" id="updt_rdacc_pan" title="Email id" placeholder="PAN Card Number" autocomplete="off" tabindex="9" value="'.$pan.'">
					</div>									
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<select class="form-control" name="rdacc_sex" id="updt_rdacc_sex" placeholder="Sex"  title="Sex" tabindex="6">
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
						<input type="text" class="form-control" name="rdacc_dob" id="updt_rdacc_dob" title="DOB" autocomplete="off" placeholder="Date of Birth" data-date-format="'. DATE_FORMAT .'" tabindex="10" value="'.$birth_date.'"/>
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
						<input type="text" class="form-control" name="rdacc_building" id="updt_rdacc_building" title="Building / Block" placeholder="Building / Block" tabindex="11" value="'.$building.'">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="rdacc_area" id="updt_rdacc_area" title="Area" placeholder="Area" tabindex="12" value="'.$area.'">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="rdacc_street" id="updt_rdacc_street" title="Street" placeholder="Street" tabindex="13" value="'.$street.'">	
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="rdacc_milestone" id="updt_rdacc_milestone" title="Milestone" placeholder="Milestone" tabindex="14" value="'.$milestone.'">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="rdacc_pincode" id="updt_rdacc_pincode" title="Pincode" placeholder="Pincode" tabindex="15" value="'.$pin_code.'">	
					</div>
					<div class="form-group">
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="rdacc_city" id="updt_rdacc_city" placeholder="Select State" title="Select City" tabindex="16">
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
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="rdacc_teh" id="updt_rdacc_teh" placeholder="State" title="Belonging State" tabindex="17">
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
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="rdacc_dist" id="updt_rdacc_dist" placeholder="Belonging State" title="Belonging State" tabindex="18">
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
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="rdacc_state" id="updt_rdacc_state" placeholder="Select State" title="Select State" tabindex="19">
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
						<input type="text" class="form-control" name="rdacc_phone" id="updt_rdacc_phone" title="Phone 1" placeholder="Phone Number" tabindex="20" value="'.$phone_no.'">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="rdacc_mob" id="updt_rdacc_mob" title="(Mobile)" placeholder="Mobile Number" tabindex="21" value="'.$mobile_no.'">	
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="rdacc_email" id="updt_rdacc_email" title="Contact 2 (Email)" placeholder="Email Address" tabindex="22" value="'.$email.'">	
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
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="rdacc_quali" id="updt_rdacc_quali" placeholder="Belonging State" title="Belonging State"  tabindex="23">
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
						<input type="text" class="form-control" name="rdacc_amount" id="updt_rdacc_amount" title="Contact 2 (Email)" placeholder="Balance Amount" tabindex="24" value="'.$balance.'">	
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="form-group">
						<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="rdacc_branch" id="updt_rdacc_branch" placeholder="Belonging State" title="Belonging State" tabindex="25">
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
						<input type="text" class="form-control" name="rdacc_joining" id="updt_rdacc_joining" title="Hired Date" placeholder="Joining Date" data-date-format="'. DATE_FORMAT .'" tabindex="26" value="'.$created_date.'">	
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7" id="alertupdtrdacc"></div>
		<div class="col-md-5 col-xs-5" style="margin-top:20px;margin-bottom:120px;padding:0;">
			<input type="submit" class="btn btn-warning pull-right" style="font-weight:600;width:30%;" name="updt_rdacc" id="updt_rdacc" value="Update"/>
		</div>
	</div>
</form>
<script>		
	$(document).ready(function(){
		$(".selectpicker").selectpicker();
		
		var dateFormat = $(this).attr("data-vat-rate");
		$("#rdacc_dob").datetimepicker({
			showClose: true,
			format: dateFormat
		});
		$("#rdacc_joining").datetimepicker({
			showClose: true,
			format: dateFormat
		});
		
		$("#updt_rdacc_form").validate({
			rules:{
				updt_rdacc_fname: "required"
			},
			messages:{
				updt_rdacc_fname: "Please Enter First Name"
			},
			submitHandler: function(form) {
				updt_rdacc();
			}		
		});
	})
	
	function updt_rdacc(){
		$("#updt_rdacc").val("Updating");	
		var customer_uid = $("#customer_uid").val();
		var updt_rdacc_fname = $("#updt_rdacc_fname").val();
		var updt_rdacc_mname = $("#updt_rdacc_mname").val();
		var updt_rdacc_sname = $("#updt_rdacc_sname").val();
		var updt_rdacc_sex = $("#updt_rdacc_sex").val();
		var updt_rdacc_marriage = $("#updt_rdacc_marriage").val();
		var updt_rdacc_adhar = $("#updt_rdacc_adhar").val();
		var updt_rdacc_pan = $("#updt_rdacc_pan").val();
		var updt_rdacc_dob = $("#updt_rdacc_dob").val();
		var updt_rdacc_building = $("#updt_rdacc_building").val();
		var updt_rdacc_area = $("#updt_rdacc_area").val();
		var updt_rdacc_street = $("#updt_rdacc_street").val();
		var updt_rdacc_milestone = $("#updt_rdacc_milestone").val();
		var updt_rdacc_pincode = $("#updt_rdacc_pincode").val();
		var updt_rdacc_city = $("#updt_rdacc_city").val();
		var updt_rdacc_teh = $("#updt_rdacc_teh").val();
		var updt_rdacc_dist = $("#updt_rdacc_dist").val();
		var updt_rdacc_state = $("#updt_rdacc_state").val();
		var updt_rdacc_phone = $("#updt_rdacc_phone").val();
		var updt_rdacc_mob = $("#updt_rdacc_mob").val();
		var updt_rdacc_email = $("#updt_rdacc_email").val();
		var updt_rdacc_quali = $("#updt_rdacc_quali").val();
		var updt_rdacc_amount = $("#updt_rdacc_amount").val();
		var updt_rdacc_branch = $("#updt_rdacc_branch").val();
		var updt_rdacc_joining = $("#updt_rdacc_joining").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Customers/RD/updt_rdacc.php",
			data:{
				customer_uid : customer_uid,
				updt_rdacc_fname : updt_rdacc_fname,
				updt_rdacc_mname : updt_rdacc_mname,
				updt_rdacc_sname : updt_rdacc_sname,
				updt_rdacc_sex : updt_rdacc_sex,
				updt_rdacc_marriage : updt_rdacc_marriage,
				updt_rdacc_adhar : updt_rdacc_adhar,
				updt_rdacc_pan : updt_rdacc_pan,
				updt_rdacc_dob : updt_rdacc_dob,
				updt_rdacc_building : updt_rdacc_building,
				updt_rdacc_area : updt_rdacc_area,
				updt_rdacc_street : updt_rdacc_street,
				updt_rdacc_milestone : updt_rdacc_milestone,
				updt_rdacc_pincode : updt_rdacc_pincode,
				updt_rdacc_city : updt_rdacc_city,
				updt_rdacc_teh : updt_rdacc_teh,
				updt_rdacc_dist : updt_rdacc_dist,
				updt_rdacc_state : updt_rdacc_state,
				updt_rdacc_phone : updt_rdacc_phone,
				updt_rdacc_mob : updt_rdacc_mob,
				updt_rdacc_email : updt_rdacc_email,
				updt_rdacc_quali : updt_rdacc_quali,
				updt_rdacc_amount : updt_rdacc_amount,
				updt_rdacc_branch : updt_rdacc_branch,
				updt_rdacc_joining : updt_rdacc_joining,
			},
			success:function(result){
				$("#alertupdtrdacc").html(result);
				$("#updt_rdacc_msg").fadeOut(20000);
				$("#updt_rdacc").val("Update");	
				$("#updt_rdacc_form").trigger("reset");
				$(".selectpicker").selectpicker("refresh");
			}
		});
	}
</script>';
?>