<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
//include('../../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
//$db = new DB_FUNCTIONS();
//$orgid=$_SESSION['orgid'];

echo'
<div class="content" class="col-md-12" style="font-family:Open sans;">
	<div class="col-md-12 tabs-area">
		<ul id="tabs-designation" class="nav nav-tabs nav-tabs-v2" role="tablist">
            <li role="presentation" class="active">
                <a href="#tabs-designation-area2" role="tab" id="tabs-designation-2" data-toggle="tab" aria-expanded="false" tabindex="1">Add New</a>
            </li>
		</ul>
		<div id="tabsconsignorContent" class="tab-content tabs-content-v2">
			<div role="tabpanel" class="tab-pane fade active in" style="min-height:550px;margin-top:40px;" id="tabs-designation-area2" aria-labelledby="tabs-designation-area2">
				<div class="col-xs-12 col-md-4" style="font-size:17px;">
					<form id="add_designation_form" >			
						<div class="panel panel-default">
							<div class="panel-heading text-center">
								<strong style="letter-spacing:1px;">designation Details</strong>
							</div>
							<div class="panel-body">
								<div class="col-xs-12 col-md-12">
									<div class="form-group" style="margin-top:20px;">
										<input type="text" class="form-control" name="designation_name" id="designation_name" placeholder="Designation Name"  title="Address" autocomplete="off" tabindex="2"/>
									</div>
									<div class="form-group" style="margin-bottom:40px;">
										<input type="text" class="form-control" name="designation_code" id="designation_code" placeholder="Designation Code"  title="Address" autocomplete="off" tabindex="3"/>
									</div>
									<div class="form-group"">
										<input type="submit" class="btn btn-success btn-block" style="font-weight:600;margin-bottom:30px;" name="create_designation" id="create_designation" value="Save" tabindex="4"/>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12" id="alert_adddesignation"></div>
					</form>
				</div>
				<div id="gendesi_datatable" class="col-xs-12 col-md-8 table-responsive"></div>	
			</div>
		</div>
	</div>
</div>';

echo '<script>	
	$(document).ready(function(){
		gendesi_datatable();
		
		$("#add_designation_form").validate({
			rules: {
				designation_name: "required",
				designation_code: "required"
			},
	
			messages: {
				designation_name: "Please Enter Designation Name",
				designation_code: "Please Enter Designation Code"
			},
			submitHandler: function(form) {
				//alert("submitted");
				adddesignation();
			}		
		});
	});

	function adddesignation(){
		$("#create_designation").val("Saving");		
		var designation_name = $("#designation_name").val();
		var designation_code = $("#designation_code").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Orgnisation/Staff/Designation/add_designation.php",
			data:{
				designation_name : designation_name,
				designation_code : designation_code,
			},
			success:function(result){
				$("#alert_adddesignation").html(result);
				$("#add_desi_msg").fadeOut(20000);
				$("#create_designation").val("Save");
				$("#add_designation_form").trigger("reset");
				gendesi_datatable();
			}
		});
	}
	
	function gendesi_datatable(){	
		$.ajax({
			type:"get",
			url:"../get_files/Orgnisation/Staff/Designation/designation_datatable.php",
			success:function(result){
				$("#gendesi_datatable").html(result);
			}
		});
	}
</script>';
?>