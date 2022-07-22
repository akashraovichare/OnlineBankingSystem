<?php
include('../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
?>
<div class="topnav" id="myTopnav">
	<div class="container">
		<a href="index.php">ABC Bank Ltd.</a>
		<a onclick="get_data_home();"><span class="fa-home fa"></span> Home </a>
		<a onclick="get_loan_services();"><i class="fas fa-money-bill-wave"></i> Loan </a>
		<a onclick="get_card_services();"><span class="fa-credit-card fa"></span> Card </a>
		<a onclick="get_other_services();"><i class="fas fa-magic"></i> Other Services</a>
		<a class="active" onclick="get_data_career();"><i class="fas fa-briefcase"></i> Career </a>
		<a onclick="get_help();"><i class="fas fa-headphones"></i> Help</a>
		<a onclick="reg_module();"><span class="glyphicon glyphicon-user"></span> Register </a>
		<a onclick="log_module();"><span class="glyphicon glyphicon-log-in"></span> Login </a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
	</div>
</div>
<div class="container" style="font-weight:bold;font-size:12px;padding:8px;">
	Home >> Career
</div>
<img src="assets/images/join.jpg" alt="New York" style="width:100%;min-height:200px;"/>
<div class="container-fluid">		
	<div class="col-lg-3 col-md-3 col-sm-hidden col-xs-hidden" style="background-color:white;padding:20px;">
		<h4 style="background-color:lightgrey;padding:10px;">Work With Us</h4>
	</div>
	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="background-color:white;padding:20px;">
        <h1>Work With Us</h1>
        <p>
            With a tradition of over 100 years, ABC Bank has gained a loyal customer-base by winning their trust with our impeccable service. As an organization, ABC Bank is synonymous to a family of young individuals readily embracing progressive thoughts and ideas. Every member of the ABC family is treated with utmost warmth and respect. Work with ABC Bank and become a part of its 100 year-old legacy.<br /><br />
			The Careers section is dedicated to job opening for all sorts of positions in ABC Bank.<br /><br />
			<h4 style="color:red;">Fake Message on Recruitment</h4>
			The bank has noticed unreliable and erroneous messages being circulated via Whatsapp and few other recruiting sites by unidentified agencies or individuals, inviting applicants to apply for various posts for Mumbai, Thane or Pune regions. The bank DOES NOT advertise for recruitments through agents or agencies.<br /><br />
        </p>
		<a href="#" data-toggle="modal" data-target="#myModal3">
			<button type="button" class="btn btn-info">Apply for the Job</button>
		</a>
	</div>
</div>
<div id="myModal3" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header" style="background-color:#1289A7; padding:16px 16px; color:#FFF;">
				<h2 class="modal-title text-center"> Form for job application </h2>
			</div>
			<div class="modal-body">
				<form id="add_job_form" autocomplete="off" >
					<div class="panel panel-default" style="margin-top:20px;">
						<div class="panel-heading">
							<strong style="letter-spacing:1px;">Personal Details</strong>
						</div>
						<div class="panel-body">
							<div class="col-xs-12 col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" name="job_fname" id="job_fname" data-toggle="tooltip" title="first Name" placeholder="First Name" tabindex="1"/>	
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="job_adhar" id="job_adhar" placeholder="Adhar Card Number" data-toggle="tooltip" title="Adhar Card Number" tabindex="5"/>
								</div>
							</div>
							<div class="col-xs-12 col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" name="job_mname" id="job_mname" data-toggle="tooltip" title="Middle Name" placeholder="Middle Name" tabindex="2"/>	
								</div>
								<div class="form-group">
									<input type="date" class="form-control" name="job_dob" id="job_dob" data-toggle="tooltip" title="Date of Birth" placeholder="Date of Birth" data-date-format="'. DATE_FORMAT .'" tabindex="6"/>
								</div>
							</div>
							<div class="col-xs-12 col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" name="job_sname" id="job_sname" data-toggle="tooltip" title="Sir Name" placeholder="Sir Name" tabindex="3"/>	
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="job_email" id="job_email" data-toggle="tooltip" title="Pan Card Number" placeholder="Pan Card Number" autocomplete="off" tabindex="7"/>
								</div>
							</div>
							<div class="col-xs-12 col-md-3">
								<div class="form-group">
									<select class="form-control" name="job_sex" id="job_sex" placeholder="Sex" data-toggle="tooltip" title="Sex" tabindex="4">
										<option value="" disabled selected>-- Sex --</option>
										<option value="male">Male</option>
										<option value="female">Female</option>
										<option value="Transgender">Transgender</option>
									</select>
								</div>
								<div class="form-group">
									<select class="form-control" name="job_marriage" id="job_marriage" placeholder="Martial Status" data-toggle="tooltip" title="Martial Status" tabindex="8">
										<option value="" disabled selected>-- Marriage Status --</option>
										<option value="married">Married</option>
										<option value="unmarried">Unmarried</option>
									</select>	
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default" style="margin-top:30px;">
						<div class="panel-heading">
							<strong class="" style="letter-spacing:1px;">Address Details</strong>
						</div>
						<div class="panel-body">
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" name="genoffice_building" id="genoffice_building" data-toggle="tooltip" title="Building / Block" placeholder="Building / Block" tabindex="9"/>	
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="genoffice_area" id="genoffice_area" data-toggle="tooltip" title="Area" placeholder="Area" tabindex="10"/>	
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="genoffice_street" id="genoffice_street" data-toggle="tooltip" title="Street" placeholder="Street" tabindex="11"/>	
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" name="genoffice_milestone" id="genoffice_milestone" data-toggle="tooltip" title="Milestone" placeholder="Milestone" tabindex="12"/>	
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="genoffice_pincode" id="genoffice_pincode" data-toggle="tooltip" title="Pincode" placeholder="Pincode" tabindex="13"/>	
								</div>
								<div class="form-group">
									<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="genoffice_add_city" id="genoffice_add_city" placeholder="Select State" data-toggle="tooltip" title="Select City" tabindex="14">
										<option value="">- Select City -</option>
											<?php
												$fetchallfromcity = $db->fetchallfromcity();
													if($fetchallfromcity){
														foreach($fetchallfromcity as $crow){
															echo '<option value="" data-subtext="('.$crow["city_abbr"].')">'.$crow["city_name"].'</option>';
														}
													}
													else{
														echo '<option data-subtext="" disabled>No Records</option>';
													}
											?>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="genemp_add_state" id="genemp_add_state" placeholder="Select State" data-toggle="tooltip" title="Select State" tabindex="15">
										<option value="">- Select State -</option>
											<?php
												$fetchallfromstate = $db->fetchallfromstate();
													if($fetchallfromstate){
														foreach($fetchallfromstate as $crow){
															echo '<option value="" data-subtext="('.$crow["state_abbr"].')">'.$crow["state_name"].'</option>';
														}
													}
													else{
														echo '<option data-subtext="" disabled>No Records</option>';
													}
											?>
									</select>	
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="genoffice_fax" id="genoffice_fax" data-toggle="tooltip" title="FAX" placeholder="FAX" tabindex="16"/>	
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="genoffice_phone1" id="genoffice_phone1" data-toggle="tooltip" title="Phone 1" placeholder="Phone Number" tabindex="17"/>	
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" class="form-control" name="genoffice_cont1mob" id="genoffice_cont1mob" data-toggle="tooltip" title="(Mobile)" placeholder="Mobile Number" tabindex="18"/>	
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="genoffice_cont2email" id="genoffice_cont2email" data-toggle="tooltip" title="Contact 2 (Email)" placeholder="Email Address" tabindex="19"/>	
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default" style="margin-top:30px;">
						<div class="panel-heading">
							<strong style="letter-spacing:1px;">Upload Your CV</strong>
						</div>
						<div class="panel-body">
							<div class="col-xs-12 col-md-6 col-lg-6">
										<div class="form-group">
											<input type="file" class="file" name="emp_join_date" id="emp_join_date" data-toggle="tooltip" title="Upload CV" tabindex="20"/>	
										</div>
							</div>
						</div>
					</div>	
					<div class="form-group" style="margin-top:20px;margin-bottom:80px;padding:0;">
						<button style="padding-left:50px;padding-right:50px;margin:0;" type="button" class="btn btn-success pull-right" onclick="career_application();" name="action_create_employe" id="action_create_employe" tabindex="21">Apply</button>
					</div>
					<div class="col-md-7" id="alertaddemploye"></div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>	
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip(); 
		
		$(".selectpicker").selectpicker();
		
		var dateFormat = $(this).attr("data-vat-rate");
	});
</script>