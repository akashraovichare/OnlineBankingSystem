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
		<ul id="tabs-fdacc" class="nav nav-tabs nav-tabs-v2" role="tablist">
            <li role="presentation" class="active">
                <a href="#tabs-fdacc-area2" role="tab" id="tabs-fdacc-2" data-toggle="tab" aria-expanded="false"  tabindex="1">Add New</a>
            </li>
            <li role="presentation">
                <a href="#tabs-fdacc-area4" role="tab" id="tabs-fdacc-4" data-toggle="tab" onclick="fdacc_datatable();" aria-expanded="false"  tabindex="2">View All</a>
            </li>
		</ul>
		<div id="tabsconsignorContent" class="tab-content tabs-content-v2">
			<div role="tabpanel" class="tab-pane fade active in" style="min-height:550px;" id="tabs-fdacc-area2" aria-labelledby="tabs-fdacc-area2">
				<form id="add_fdacc_form" >
					<div class="col-xs-12 col-md-12" style="margin-top:40px;font-size:17px;">
						<div class="panel panel-default">
							<div class="panel-heading">
								<strong style="letter-spacing:1px;">Personal Details</strong>
							</div>
							<div class="panel-body">
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="fdacc_fname" id="fdacc_fname" title="Name" placeholder="First Name" tabindex="3">	
									</div>
									<div class="form-group">
										<select class="form-control" name="fdacc_marriage" id="fdacc_marriage" placeholder="Martial Status" title="Martial Status" tabindex="7">
											<option value="" selected>-- Marriage Status --</option>
											<option value="0">Married</option>
											<option value="1">Unmarried</option>
										</select>	
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="fdacc_mname" id="fdacc_mname" title="Name" placeholder="Middle Name" tabindex="4">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="fdacc_adhar" id="fdacc_adhar" placeholder="Adhar Card Number"  title="Address" tabindex="8">
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="fdacc_sname" id="fdacc_sname" title="Name" placeholder="Sir Name" tabindex="5">	
									</div>
									<div class="form-group">
										<input type="email" class="form-control" name="fdacc_pan" id="fdacc_pan" title="Email id" placeholder="PAN Card Number" autocomplete="off" tabindex="9">
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<select class="form-control" name="fdacc_sex" id="fdacc_sex" placeholder="Sex"  title="Sex" tabindex="6">
											<option value="" selected>-- Sex --</option>
											<option value="0">Male</option>
											<option value="1">Female</option>
											<option value="2">Transgender</option>
										</select>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="fdacc_dob" id="fdacc_dob" title="DOB" autocomplete="off" placeholder="Date of Birth" data-date-format="'. DATE_FORMAT .'" tabindex="10"/>
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
										<input type="text" class="form-control" name="fdacc_building" id="fdacc_building" title="Building / Block" placeholder="Building / Block" tabindex="11">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="fdacc_area" id="fdacc_area" title="Area" placeholder="Area" tabindex="12">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="fdacc_street" id="fdacc_street" title="Street" placeholder="Street" tabindex="13">	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="fdacc_milestone" id="fdacc_milestone" title="Milestone" placeholder="Milestone" tabindex="14">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="fdacc_pincode" id="fdacc_pincode" title="Pincode" placeholder="Pincode" tabindex="15">	
									</div>
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="fdacc_city" id="fdacc_city" placeholder="Select State" title="Select City"  tabindex="16">
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="fdacc_teh" id="fdacc_teh" placeholder="State" title="Belonging State"  tabindex="17">
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="fdacc_dist" id="fdacc_dist" placeholder="Belonging State" title="Belonging State"  tabindex="18">
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="fdacc_state" id="fdacc_state" placeholder="Select State" title="Select State"  tabindex="19">
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
										<input type="text" class="form-control" name="fdacc_phone" id="fdacc_phone" title="Phone 1" placeholder="Phone Number" tabindex="20">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="fdacc_mob" id="fdacc_mob" title="(Mobile)" placeholder="Mobile Number" tabindex="21">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="fdacc_email" id="fdacc_email" title="Contact 2 (Email)" placeholder="Email Address" tabindex="22">	
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="fdacc_quali" id="fdacc_quali" placeholder="Belonging State" title="Belonging State"  tabindex="23">
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
										<input type="text" class="form-control" name="fdacc_amount" id="fdacc_amount" title="Contact 2 (Email)" placeholder="Balance Amount" tabindex="24">	
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="fdacc_branch" id="fdacc_branch" placeholder="Belonging State" title="Belonging State"  tabindex="25">
											<option value="">- Select Branch -</option>
											<option value="">-<b> Not Assigned </b>-</option>';
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
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="fdacc_joining" id="fdacc_joining" title="Hired Date" placeholder="Joining Date" data-date-format="'. DATE_FORMAT .'" tabindex="26"/>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7" id="alertaddfdacc"></div>
						<div class="col-md-5 col-xs-5" style="margin-top:20px;margin-bottom:120px;padding:0;">
							<input type="submit" class="btn btn-success pull-right" style="font-weight:600;width:30%;" name="create_fdacc" id="create_fdacc" value="Save" tabindex="27"/>
						</div>
					</div>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="tabs-fdacc-area4" aria-labelledby="tabs-fdacc-area4">
				<div style="margin-top:50px;font-size:15px;" id="fdacc_datatable" class="col-xs-12 table-responsive"></div>
			</div>
		</div>
	</div>
</div>
<script>		
	$(document).ready(function(){
		$(".selectpicker").selectpicker();
		
		var dateFormat = $(this).attr("data-vat-rate");
		$("#fdacc_dob").datetimepicker({
			showClose: true,
			format: dateFormat
		});
		$("#fdacc_joining").datetimepicker({
			showClose: true,
			format: dateFormat
		});
		
		$("#add_fdacc_form").validate({
			rules: {
				fdacc_fname: "required"
			},
			messages: {
				fdacc_fname: "Please Enter First Name"
			},
			submitHandler: function(form) {
				//alert("submitted");
				addfdacc();
	
			}		
		});
	});
	
	function addfdacc(){
		$("#create_fdacc").val("Saving");
		var fdacc_fname = $("#fdacc_fname").val();
		var fdacc_mname = $("#fdacc_mname").val();
		var fdacc_sname = $("#fdacc_sname").val();
		var fdacc_sex = $("#fdacc_sex").val();
		var fdacc_marriage = $("#fdacc_marriage").val();
		var fdacc_adhar = $("#fdacc_adhar").val();
		var fdacc_pan = $("#fdacc_pan").val();
		var fdacc_dob = $("#fdacc_dob").val();
		var fdacc_building = $("#fdacc_building").val();
		var fdacc_area = $("#fdacc_area").val();
		var fdacc_street = $("#fdacc_street").val();
		var fdacc_milestone = $("#fdacc_milestone").val();
		var fdacc_pincode = $("#fdacc_pincode").val();
		var fdacc_city = $("#fdacc_city").val();
		var fdacc_teh = $("#fdacc_teh").val();
		var fdacc_dist = $("#fdacc_dist").val();
		var fdacc_state = $("#fdacc_state").val();
		var fdacc_phone = $("#fdacc_phone").val();
		var fdacc_mob = $("#fdacc_mob").val();
		var fdacc_email = $("#fdacc_email").val();
		var fdacc_quali = $("#fdacc_quali").val();
		var fdacc_amount = $("#fdacc_amount").val();
		var fdacc_branch = $("#fdacc_branch").val();
		var fdacc_joining = $("#fdacc_joining").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Customers/FD/add_fd_acc.php",
			data:{
				fdacc_fname : fdacc_fname,
				fdacc_mname : fdacc_mname,
				fdacc_sname : fdacc_sname,
				fdacc_sex : fdacc_sex,
				fdacc_marriage : fdacc_marriage,
				fdacc_adhar : fdacc_adhar,
				fdacc_pan : fdacc_pan,
				fdacc_dob : fdacc_dob,
				fdacc_building : fdacc_building,
				fdacc_area : fdacc_area,
				fdacc_street : fdacc_street,
				fdacc_milestone : fdacc_milestone,
				fdacc_pincode : fdacc_pincode,
				fdacc_city : fdacc_city,
				fdacc_teh : fdacc_teh,
				fdacc_dist : fdacc_dist,
				fdacc_state : fdacc_state,
				fdacc_phone : fdacc_phone,
				fdacc_mob : fdacc_mob,
				fdacc_email : fdacc_email,
				fdacc_quali : fdacc_quali,
				fdacc_amount : fdacc_amount,
				fdacc_branch : fdacc_branch,
				fdacc_joining : fdacc_joining,
			},
			success:function(result){
				$("#alertaddfdacc").html(result);
				$("#add_fd_msg").fadeOut(20000);
				$("#create_fdacc").val("Save");
				$("#add_fdacc_form").trigger("reset");
				$(".selectpicker").selectpicker("refresh");
			}
		});
	}
	
	function fdacc_datatable(){
		$.ajax({
			type:"get",
			url:"../get_files/Customers/FD/fd_acc_datatable.php",
			success:function(result){
				$("#fdacc_datatable").html(result);
			}
		});
	}
</script>';
?>