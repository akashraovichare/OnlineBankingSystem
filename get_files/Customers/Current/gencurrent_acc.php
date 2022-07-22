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
		<ul id="tabs-curacc" class="nav nav-tabs nav-tabs-v2" role="tablist">
            <li role="presentation" class="active">
                <a href="#tabs-curacc-area2" role="tab" id="tabs-curacc-2" data-toggle="tab" aria-expanded="false" tabindex="1">Add New</a>
            </li>
            <li role="presentation">
                <a href="#tabs-curacc-area4" role="tab" id="tabs-curacc-4" data-toggle="tab" onclick="curacc_datatable();" aria-expanded="false" tabindex="2">View All</a>
            </li>
		</ul>
		<div id="tabsconsignorContent" class="tab-content tabs-content-v2">
			<div role="tabpanel" class="tab-pane fade active in" style="min-height:550px;" id="tabs-curacc-area2" aria-labelledby="tabs-curacc-area2">
				<form id="add_curacc_form" >
					<div class="col-xs-12 col-md-12" style="margin-top:40px;font-size:17px;">
						<div class="panel panel-default">
							<div class="panel-heading">
								<strong style="letter-spacing:1px;">Personal Details</strong>
							</div>
							<div class="panel-body">
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control"  name="curacc_fname" id="curacc_fname" title="Name" placeholder="First Name" tabindex="3">	
									</div>
									<div class="form-group">
										<select class="form-control"  name="curacc_marriage" id="curacc_marriage" placeholder="Martial Status" title="Martial Status" tabindex="7">
											<option value="" selected>-- Marriage Status --</option>
											<option value="married">Married</option>
											<option value="unmarried">Unmarried</option>
										</select>	
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control"  name="curacc_mname" id="curacc_mname" title="Name" placeholder="Middle Name" tabindex="4">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control"  name="curacc_adhar" id="curacc_adhar" placeholder="Adhar Card Number"  title="Address" tabindex="8">
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control"  name="curacc_sname" id="curacc_sname" title="Name" placeholder="Sir Name" tabindex="5">	
									</div>
									<div class="form-group">
										<input type="email" class="form-control"  name="curacc_pan" id="curacc_pan" title="Email id" placeholder="PAN Card Number" autocomplete="off" tabindex="9">
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<select class="form-control"  name="curacc_sex" id="curacc_sex" placeholder="Sex"  title="Sex" tabindex="6">
											<option value="" selected>-- Sex --</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
											<option value="Transgender">Transgender</option>
										</select>
									</div>
									<div class="form-group">
										<input type="text" class="form-control"  name="curacc_dob" id="curacc_dob" title="DOB" autocomplete="off" placeholder="Date of Birth" data-date-format="'. DATE_FORMAT .'" tabindex="10"/>
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
										<input type="text" class="form-control"  name="curacc_building" id="curacc_building" title="Building / Block" placeholder="Building / Block" tabindex="11">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control"  name="curacc_area" id="curacc_area" title="Area" placeholder="Area" tabindex="12">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control"  name="curacc_street" id="curacc_street" title="Street" placeholder="Street" tabindex="13">	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input type="text" class="form-control"  name="curacc_milestone" id="curacc_milestone" title="Milestone" placeholder="Milestone" tabindex="14">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control"  name="curacc_pincode" id="curacc_pincode" title="Pincode" placeholder="Pincode" tabindex="15">	
									</div>
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true"  name="curacc_city" id="curacc_city" placeholder="Select State" title="Select City" tabindex="16">
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true"  name="curacc_teh" id="curacc_teh" placeholder="State" title="Belonging State" tabindex="17">
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true"  name="curacc_dist" id="curacc_dist" placeholder="Belonging State" title="Belonging State" tabindex="18">
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true"  name="curacc_state" id="curacc_state" placeholder="Select State" title="Select State" tabindex="19">
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
										<input type="text" class="form-control"  name="curacc_phone" id="curacc_phone" title="Phone 1" placeholder="Phone Number" tabindex="20">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control"  name="curacc_mob" id="curacc_mob" title="(Mobile)" placeholder="Mobile Number" tabindex="21">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control"  name="curacc_email" id="curacc_email" title="Contact 2 (Email)" placeholder="Email Address" tabindex="22">	
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
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true"  name="curacc_quali" id="curacc_quali" placeholder="Belonging State" title="Belonging State" tabindex="23">
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
										<input type="text" class="form-control" name="curacc_amount" id="curacc_amount" title="Contact 2 (Email)" placeholder="Balance Amount" tabindex="24">	
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="form-group">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true"  name="curacc_branch" id="curacc_branch" placeholder="Belonging State" title="Belonging State" tabindex="25">
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
										<input type="text" class="form-control"  name="curacc_joining" id="curacc_joining" title="Hired Date" placeholder="Joining Date" data-date-format="'. DATE_FORMAT .'" tabindex="26">	
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7" id="alertaddcuracc"></div>
						<div class="col-md-5 col-xs-5" style="margin-top:20px;margin-bottom:120px;padding:0;">
							<input type="submit" class="btn btn-success pull-right" style="font-weight:600;width:30%;" name="create_curacc" id="create_curacc" value="Save" tabindex="27"/>
						</div>
					</div>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="tabs-curacc-area4" aria-labelledby="tabs-curacc-area4">
				<div style="margin-top:50px;font-size:15px;" id="curacc_datatable" class="col-xs-12 table-responsive"></div>
			</div>
		</div>
	</div>
</div>
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
		
		$("#add_curacc_form").validate({
			rules:{
				curacc_fname: "required"
			},
			messages:{
				curacc_fname: "Please Enter First Name"
			},
			 submitHandler: function(form) {
				//alert("submitted");
				addcuracc();
			}		
		});
	});
	
	function addcuracc(){
		$("#create_curacc").val("Saving...");
		var curacc_fname = $("#curacc_fname").val();
		var curacc_mname = $("#curacc_mname").val();
		var curacc_sname = $("#curacc_sname").val();
		var curacc_sex = $("#curacc_sex").val();
		var curacc_marriage = $("#curacc_marriage").val();
		var curacc_adhar = $("#curacc_adhar").val();
		var curacc_pan = $("#curacc_pan").val();
		var curacc_dob = $("#curacc_dob").val();
		var curacc_building = $("#curacc_building").val();
		var curacc_area = $("#curacc_area").val();
		var curacc_street = $("#curacc_street").val();
		var curacc_milestone = $("#curacc_milestone").val();
		var curacc_pincode = $("#curacc_pincode").val();
		var curacc_city = $("#curacc_city").val();
		var curacc_teh = $("#curacc_teh").val();
		var curacc_dist = $("#curacc_dist").val();
		var curacc_state = $("#curacc_state").val();
		var curacc_phone = $("#curacc_phone").val();
		var curacc_mob = $("#curacc_mob").val();
		var curacc_email = $("#curacc_email").val();
		var curacc_quali = $("#curacc_quali").val();
		var curacc_amount = $("#curacc_amount").val();
		var curacc_branch = $("#curacc_branch").val();
		var curacc_joining = $("#curacc_joining").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Customers/Current/add_current_acc.php",
			data:{
				curacc_fname : curacc_fname,
				curacc_mname : curacc_mname,
				curacc_sname : curacc_sname,
				curacc_sex : curacc_sex,
				curacc_marriage : curacc_marriage,
				curacc_adhar : curacc_adhar,
				curacc_pan : curacc_pan,
				curacc_dob : curacc_dob,
				curacc_building : curacc_building,
				curacc_area : curacc_area,
				curacc_street : curacc_street,
				curacc_milestone : curacc_milestone,
				curacc_pincode : curacc_pincode,
				curacc_city : curacc_city,
				curacc_teh : curacc_teh,
				curacc_dist : curacc_dist,
				curacc_state : curacc_state,
				curacc_phone : curacc_phone,
				curacc_mob : curacc_mob,
				curacc_email : curacc_email,
				curacc_quali : curacc_quali,
				curacc_amount : curacc_amount,
				curacc_branch : curacc_branch,
				curacc_joining : curacc_joining,
			},
			success:function(result){
				$("#alertaddcuracc").html(result);
				$("#add_cur_msg").fadeOut(10000);
				$("#create_curacc").val("Save");
				$("#add_curacc_form").trigger("reset");
				$(".selectpicker").selectpicker("refresh");
			}
		});
	}
	
	function curacc_datatable(){
		$.ajax({
			type:"get",
			url:"../get_files/Customers/Current/current_acc_datatable.php",
			success:function(result){
				$("#curacc_datatable").html(result);
			}
		});
	}
</script>';
?>