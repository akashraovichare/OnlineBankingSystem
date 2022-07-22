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
		<ul id="tabs-savacc" class="nav nav-tabs nav-tabs-v2" role="tablist">
            <li role="presentation" class="active">
                <a href="#tabs-savacc-area2" role="tab" id="tabs-savacc-2" data-toggle="tab" aria-expanded="false" tabindex="1">Add New</a>
            </li>
            <li role="presentation">
                <a href="#tabs-savacc-area4" role="tab" id="tabs-savacc-4" data-toggle="tab" onclick="savacc_datatable();" aria-expanded="false" tabindex="2">View All</a>
            </li>
		</ul>
		<div id="tabsconsignorContent" class="tab-content tabs-content-v2">
			<div role="tabpanel" class="tab-pane fade active in" style="min-height:550px;" id="tabs-savacc-area2" aria-labelledby="tabs-savacc-area2">
				<form id="add_savacc_form" >
					<div class="col-xs-12 col-md-12" style="margin-top:40px;font-size:17px;">
						<div class="panel panel-default">
							<div class="panel-heading">
								<strong style="letter-spacing:1px;">Personal Details</strong>
							</div>
							<div class="panel-body">
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="savacc_fname" id="savacc_fname" title="Name" placeholder="First Name" tabindex="3">	
									</div>
									<div class="form-group">
										<select class="form-control" name="savacc_marriage" id="savacc_marriage" placeholder="Martial Status" title="Martial Status" tabindex="7">
											<option value="" selected>- Marriage Status -</option>
											<option value="0">Married</option>
											<option value="1">Unmarried</option>
										</select>	
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="savacc_mname" id="savacc_mname" title="Name" placeholder="Middle Name" tabindex="4">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="savacc_adhar" id="savacc_adhar" placeholder="Adhar Card Number"  title="Address" tabindex="8">
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="savacc_sname" id="savacc_sname" title="Name" placeholder="Sir Name" tabindex="5">	
									</div>
									<div class="form-group">
										<input type="email" class="form-control" name="savacc_pan" id="savacc_pan" title="Email id" placeholder="PAN Card Number" autocomplete="off" tabindex="9">
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<select class="form-control" name="savacc_sex" id="savacc_sex" placeholder="Sex"  title="Sex" tabindex="6">
											<option value="" selected>-- Sex --</option>
											<option value="0">Male</option>
											<option value="1">Female</option>
											<option value="2">Transgender</option>
										</select>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="savacc_dob" id="savacc_dob" title="DOB" autocomplete="off" placeholder="Date of Birth" data-date-format="'. DATE_FORMAT .'" tabindex="10"/>
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
										<input type="text" class="form-control" name="savacc_building" id="savacc_building" title="Building / Block" placeholder="Building / Block" tabindex="11">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="savacc_area" id="savacc_area" title="Area" placeholder="Area" tabindex="12">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="savacc_street" id="savacc_street" title="Street" placeholder="Street" tabindex="13">	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="savacc_milestone" id="savacc_milestone" title="Milestone" placeholder="Milestone" tabindex="14">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="savacc_pincode" id="savacc_pincode" title="Pincode" placeholder="Pincode" tabindex="15">	
									</div>
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="savacc_city" id="savacc_city" placeholder="Select State" title="Select City" tabindex="16">
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="savacc_teh" id="savacc_teh" placeholder="State" title="Belonging State" tabindex="17">
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="savacc_dist" id="savacc_dist" placeholder="Belonging State" title="Belonging State" tabindex="18">
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="savacc_state" id="savacc_state" placeholder="Select State" title="Select State" tabindex="19">
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
										<input type="text" class="form-control" name="savacc_phone" id="savacc_phone" title="Phone 1" placeholder="Phone Number" tabindex="20">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="savacc_mob" id="savacc_mob" title="(Mobile)" placeholder="Mobile Number" tabindex="21">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="savacc_email" id="savacc_email" title="Contact 2 (Email)" placeholder="Email Address" tabindex="22">	
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="savacc_quali" id="savacc_quali" placeholder="Belonging State" title="Belonging State" tabindex="23">
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
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="savacc_amount" id="savacc_amount" title="Contact 2 (Email)" placeholder="Balance Amount" tabindex="24">	
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="savacc_branch" id="savacc_branch" placeholder="Belonging State" title="Belonging State" tabindex="25">
											<option value="">- Select Branch -</option>
											<option value="">-<b> Not Assigned </b>-</option>';
												$getofficedata = $db->getofficedata();
												if($getofficedata){
													foreach($getofficedata as $crow){
														echo '<option value="'.$crow["branch_uid"].'" data-subtext="('.$crow["branch_code"].')">'.$crow["branch_name"].'</option>';
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
										<input type="text" class="form-control" name="savacc_joining" id="savacc_joining" title="Hired Date" placeholder="Joining Date" data-date-format="'. DATE_FORMAT .'" tabindex="26">	
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7" id="alertaddsavacc"></div>
						<div class="col-md-5 col-xs-5" style="margin-top:20px;margin-bottom:120px;padding:0;">
							<input type="submit" class="btn btn-success pull-right" style="font-weight:600;width:30%;" name="create_savacc" id="create_savacc" value="Save" tabindex="27"/>
						</div>
					</div>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="tabs-savacc-area4" aria-labelledby="tabs-savacc-area4">
				<div style="margin-top:50px;font-size:15px;" id="savacc_datatable" class="col-xs-12 table-responsive"></div>
			</div>
		</div>
	</div>
</div>
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
		
		$("#add_savacc_form").validate({
			rules: {
				savacc_fname: "required"
			},
			messages: {
				savacc_fname: "Please Enter First Name"
			},
			submitHandler: function(form) {
				//alert("submitted");
				addsavacc();
	
			}		
		});
	});
	
	function addsavacc(){	
		$("#create_savacc").val("Saving");
		var savacc_fname = $("#savacc_fname").val();
		var savacc_mname = $("#savacc_mname").val();
		var savacc_sname = $("#savacc_sname").val();
		var savacc_sex = $("#savacc_sex").val();
		var savacc_marriage = $("#savacc_marriage").val();
		var savacc_adhar = $("#savacc_adhar").val();
		var savacc_pan = $("#savacc_pan").val();
		var savacc_dob = $("#savacc_dob").val();
		var savacc_building = $("#savacc_building").val();
		var savacc_area = $("#savacc_area").val();
		var savacc_street = $("#savacc_street").val();
		var savacc_milestone = $("#savacc_milestone").val();
		var savacc_pincode = $("#savacc_pincode").val();
		var savacc_city = $("#savacc_city").val();
		var savacc_teh = $("#savacc_teh").val();
		var savacc_dist = $("#savacc_dist").val();
		var savacc_state = $("#savacc_state").val();
		var savacc_phone = $("#savacc_phone").val();
		var savacc_mob = $("#savacc_mob").val();
		var savacc_email = $("#savacc_email").val();
		var savacc_quali = $("#savacc_quali").val();
		var savacc_amount = $("#savacc_amount").val();
		var savacc_branch = $("#savacc_branch").val();
		var savacc_joining = $("#savacc_joining").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Customers/Saving/add_saving_acc.php",
			data:{
				savacc_fname : savacc_fname,
				savacc_mname : savacc_mname,
				savacc_sname : savacc_sname,
				savacc_sex : savacc_sex,
				savacc_marriage : savacc_marriage,
				savacc_adhar : savacc_adhar,
				savacc_pan : savacc_pan,
				savacc_dob : savacc_dob,
				savacc_building : savacc_building,
				savacc_area : savacc_area,
				savacc_street : savacc_street,
				savacc_milestone : savacc_milestone,
				savacc_pincode : savacc_pincode,
				savacc_city : savacc_city,
				savacc_teh : savacc_teh,
				savacc_dist : savacc_dist,
				savacc_state : savacc_state,
				savacc_phone : savacc_phone,
				savacc_mob : savacc_mob,
				savacc_email : savacc_email,
				savacc_quali : savacc_quali,
				savacc_amount : savacc_amount,
				savacc_branch : savacc_branch,
				savacc_joining : savacc_joining,
			},
			success:function(result){
				$("#alertaddsavacc").html(result);
				$("#add_saving_msg").fadeOut(10000);
				$("#create_savacc").val("Save");
				$("#add_savacc_form").trigger("reset");
				$(".selectpicker").selectpicker("refresh");
			}
		});
	}
	
	function savacc_datatable(){
		$.ajax({
			type:"get",
			url:"../get_files/Customers/Saving/savacc_datatable.php",
			success:function(result){
				$("#savacc_datatable").html(result);
			}
		});
	}
</script>';
?>