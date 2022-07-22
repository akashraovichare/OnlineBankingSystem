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
		<ul id="tabs-department" class="nav nav-tabs nav-tabs-v2" role="tablist">
            <li role="presentation" class="active">
                <a href="#tabs-department-area2" role="tab" id="tabs-department-2" data-toggle="tab" aria-expanded="false" tabindex="1">Add New</a>
            </li>
		</ul>
		<div id="tabsconsignorContent" class="tab-content tabs-content-v2">
			<div role="tabpanel" class="tab-pane fade active in" style="min-height:550px;margin-top:40px;" id="tabs-department-area2" aria-labelledby="tabs-department-area2">
				<div class="col-xs-12 col-md-4" style="font-size:17px;">
					<form id="add_department_form" >			
						<div class="panel panel-default">
							<div class="panel-heading text-center">
								<strong style="letter-spacing:1px;">Department Details</strong>
							</div>
							<div class="panel-body">
								<div class="col-xs-12 col-md-12">
									<div class="form-group" style="margin-top:20px;">
										<input type="text" class="form-control" name="department_name" id="department_name" placeholder="Department Name"  title="Address" autocomplete="off" tabindex="2">
									</div>
									<div class="form-group" style="margin-bottom:40px;">
										<input type="text" class="form-control" name="department_code" id="department_code" placeholder="Department Code"  title="Address" autocomplete="off" tabindex="3">
									</div>
									<div class="form-group"">
										<input type="submit" class="btn btn-success btn-block" style="font-weight:600;" name="create_department" id="create_department" value="Save" tabindex="4"/>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12" id="alert_adddepartment"></div>
					</form>
				</div>
				<div id="department_datatable" class="col-xs-12 col-md-8 table-responsive"></div>	
			</div>
		</div>
	</div>
</div>';

echo '<script>	
	$(document).ready(function(){
		department_datatable();
		
		$("#add_department_form").validate({
			rules: {
				department_name: "required",
				department_code: "required"
			},
	
			messages: {
				department_name: "Please Enter Department Name",
				department_code: "Please Enter Department Code"
			},
			submitHandler: function(form) {
				//alert("submitted);
				adddepartment();
	
			}		
		});
	});
	
	function adddepartment(){	
		$("#create_department").val("Saving");		
		var department_name = $("#department_name").val();
		var department_code = $("#department_code").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Orgnisation/Staff/Department/add_department.php",
			data:{
				department_name : department_name,
				department_code : department_code,
			},
			success:function(result){
				$("#alert_adddepartment").html(result);
				$("#add_dep_msg").fadeOut(10000);
				$("#create_department").val("Save");
				$("#add_department_form").trigger("reset");
				department_datatable();
			}
		});
	}
	
	function department_datatable(){	
		$.ajax({
			type:"get",
			url:"../get_files/Orgnisation/Staff/Department/department_datatable.php",
			success:function(result){
				$("#department_datatable").html(result);
			}
		});
	}
</script>';
?>