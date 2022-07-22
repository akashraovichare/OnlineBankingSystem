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
		<ul id="tabs-rdacc" class="nav nav-tabs nav-tabs-v2" role="tablist">
            <li role="presentation" class="active">
                <a href="#tabs-rdacc-area2" role="tab" id="tabs-rdacc-2" data-toggle="tab" aria-expanded="false"  tabindex="1">Add New</a>
            </li>
            <li role="presentation">
                <a href="#tabs-rdacc-area4" role="tab" id="tabs-rdacc-4" data-toggle="tab" onclick="rdacc_datatable();" aria-expanded="false"  tabindex="2">View All</a>
            </li>
		</ul>
		<div id="tabsconsignorContent" class="tab-content tabs-content-v2">
			<div role="tabpanel" class="tab-pane fade active in" style="min-height:550px;" id="tabs-rdacc-area2" aria-labelledby="tabs-rdacc-area2">
				<form id="add_rdacc_form" >
					<div class="col-xs-12 col-md-12" style="margin-top:40px;font-size:17px;">
						<div class="panel panel-default">
							<div class="panel-heading">
								<strong style="letter-spacing:1px;">Personal Details</strong>
							</div>
							<div class="panel-body">
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="rdacc_fname" id="rdacc_fname" title="Name" placeholder="First Name" tabindex="3">	
									</div>
									<div class="form-group">
										<select class="form-control" name="rdacc_marriage" id="rdacc_marriage" placeholder="Martial Status" title="Martial Status" tabindex="7">
											<option value="" selected>-- Marriage Status --</option>
											<option value="0">Married</option>
											<option value="1">Unmarried</option>
										</select>	
									</div>									
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="rdacc_mname" id="rdacc_mname" title="Name" placeholder="Middle Name" tabindex="4">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="rdacc_adhar" id="rdacc_adhar" placeholder="Adhar Card Number"  title="Address" tabindex="8">
									</div>									
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="rdacc_sname" id="rdacc_sname" title="Name" placeholder="Sir Name" tabindex="5">	
									</div>
									<div class="form-group">
										<input type="email" class="form-control" name="rdacc_pan" id="rdacc_pan" title="Email id" placeholder="PAN Card Number" autocomplete="off" tabindex="9">
									</div>									
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<select class="form-control" name="rdacc_sex" id="rdacc_sex" placeholder="Sex"  title="Sex" tabindex="6">
											<option value="" selected>-- Sex --</option>
											<option value="0">Male</option>
											<option value="1">Female</option>
											<option value="2">Transgender</option>
										</select>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="rdacc_dob" id="rdacc_dob" title="DOB" autocomplete="off" placeholder="Date of Birth" data-date-format="'. DATE_FORMAT .'" tabindex="10"/>
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
										<input type="text" class="form-control" name="rdacc_building" id="rdacc_building" title="Building / Block" placeholder="Building / Block" tabindex="11">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="rdacc_area" id="rdacc_area" title="Area" placeholder="Area" tabindex="12">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="rdacc_street" id="rdacc_street" title="Street" placeholder="Street" tabindex="13">	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input type="text" class="form-control" name="rdacc_milestone" id="rdacc_milestone" title="Milestone" placeholder="Milestone" tabindex="14">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="rdacc_pincode" id="rdacc_pincode" title="Pincode" placeholder="Pincode" tabindex="15">	
									</div>
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="rdacc_city" id="rdacc_city" placeholder="Select State" title="Select City" tabindex="16">
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="rdacc_teh" id="rdacc_teh" placeholder="State" title="Belonging State" tabindex="17">
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="rdacc_dist" id="rdacc_dist" placeholder="Belonging State" title="Belonging State" tabindex="18">
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="rdacc_state" id="rdacc_state" placeholder="Select State" title="Select State" tabindex="19">
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
										<input type="text" class="form-control" name="rdacc_phone" id="rdacc_phone" title="Phone 1" placeholder="Phone Number" tabindex="20">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="rdacc_mob" id="rdacc_mob" title="(Mobile)" placeholder="Mobile Number" tabindex="21">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="rdacc_email" id="rdacc_email" title="Contact 2 (Email)" placeholder="Email Address" tabindex="22">	
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="rdacc_quali" id="rdacc_quali" placeholder="Belonging State" title="Belonging State"  tabindex="23">
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
										<input type="text" class="form-control" name="rdacc_amount" id="rdacc_amount" title="Contact 2 (Email)" placeholder="Balance Amount" tabindex="24">	
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="rdacc_branch" id="rdacc_branch" placeholder="Belonging State" title="Belonging State" tabindex="25">
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
										<input type="text" class="form-control" name="rdacc_joining" id="rdacc_joining" title="Hired Date" placeholder="Joining Date" data-date-format="'. DATE_FORMAT .'" tabindex="26">	
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7" id="alertaddrdacc"></div>
						<div class="col-md-5 col-xs-5" style="margin-top:20px;margin-bottom:120px;padding:0;">
							<input type="submit" class="btn btn-success pull-right" style="font-weight:600;width:30%;" name="create_rdacc" id="create_rdacc" value="Save" tabindex="27"/>
						</div>
					</div>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="tabs-rdacc-area4" aria-labelledby="tabs-rdacc-area4">
				<div style="margin-top:50px;font-size:15px;" id="rdacc_datatable" class="col-xs-12 table-responsive"></div>
			</div>
		</div>
	</div>
</div>
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
		
		$("#add_rdacc_form").validate({
			rules: {
				rdacc_fname: "required"
			},
			messages: {
				rdacc_fname: "Please Enter First Name"
			},
			submitHandler: function(form){
				addrdacc();
			}		
		});
	});
	
	function addrdacc(){	
		$("#create_rdacc").val("Saving");
		var rdacc_fname = $("#rdacc_fname").val();
		var rdacc_mname = $("#rdacc_mname").val();
		var rdacc_sname = $("#rdacc_sname").val();
		var rdacc_sex = $("#rdacc_sex").val();
		var rdacc_marriage = $("#rdacc_marriage").val();
		var rdacc_adhar = $("#rdacc_adhar").val();
		var rdacc_pan = $("#rdacc_pan").val();
		var rdacc_dob = $("#rdacc_dob").val();
		var rdacc_building = $("#rdacc_building").val();
		var rdacc_area = $("#rdacc_area").val();
		var rdacc_street = $("#rdacc_street").val();
		var rdacc_milestone = $("#rdacc_milestone").val();
		var rdacc_pincode = $("#rdacc_pincode").val();
		var rdacc_city = $("#rdacc_city").val();
		var rdacc_teh = $("#rdacc_teh").val();
		var rdacc_dist = $("#rdacc_dist").val();
		var rdacc_state = $("#rdacc_state").val();
		var rdacc_phone = $("#rdacc_phone").val();
		var rdacc_mob = $("#rdacc_mob").val();
		var rdacc_email = $("#rdacc_email").val();
		var rdacc_quali = $("#rdacc_quali").val();
		var rdacc_amount = $("#rdacc_amount").val();
		var rdacc_branch = $("#rdacc_branch").val();
		var rdacc_joining = $("#rdacc_joining").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Customers/RD/add_rd_acc.php",
			data:{
				rdacc_fname : rdacc_fname,
				rdacc_mname : rdacc_mname,
				rdacc_sname : rdacc_sname,
				rdacc_sex : rdacc_sex,
				rdacc_marriage : rdacc_marriage,
				rdacc_adhar : rdacc_adhar,
				rdacc_pan : rdacc_pan,
				rdacc_dob : rdacc_dob,
				rdacc_building : rdacc_building,
				rdacc_area : rdacc_area,
				rdacc_street : rdacc_street,
				rdacc_milestone : rdacc_milestone,
				rdacc_pincode : rdacc_pincode,
				rdacc_city : rdacc_city,
				rdacc_teh : rdacc_teh,
				rdacc_dist : rdacc_dist,
				rdacc_state : rdacc_state,
				rdacc_phone : rdacc_phone,
				rdacc_mob : rdacc_mob,
				rdacc_email : rdacc_email,
				rdacc_quali : rdacc_quali,
				rdacc_amount : rdacc_amount,
				rdacc_branch : rdacc_branch,
				rdacc_joining : rdacc_joining,
			},
			success:function(result){
				$("#alertaddrdacc").html(result);
				$("#add_rd_msg").fadeOut(20000);
				$("#create_rdacc").val("Save");
				$("#add_rdacc_form").trigger("reset");
				$(".selectpicker").selectpicker("refresh");
			}
		});
	}
	
	function rdacc_datatable(){
		$.ajax({
			type:"get",
			url:"../get_files/Customers/RD/rd_acc_datatable.php",
			success:function(result){
				$("#rdacc_datatable").html(result);
			}
		});
	}
</script>';
?>