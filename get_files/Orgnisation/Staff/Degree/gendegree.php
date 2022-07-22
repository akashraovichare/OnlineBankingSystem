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
		<ul id="tabs-degree" class="nav nav-tabs nav-tabs-v2" role="tablist">
            <li role="presentation" class="active">
                <a href="#tabs-degree-area2" role="tab" id="tabs-degree-2" data-toggle="tab" aria-expanded="false" tabindex="1">Add New</a>
            </li>
		</ul>
		<div id="tabsconsignorContent" class="tab-content tabs-content-v2">
			<div role="tabpanel" class="tab-pane fade active in" style="min-height:550px;margin-top:40px;" id="tabs-degree-area2" aria-labelledby="tabs-degree-area2">
				<div class="col-xs-12 col-md-4" style="font-size:17px;">
					<form id="add_degree_form" >			
						<div class="panel panel-default">
							<div class="panel-heading text-center">
								<strong style="letter-spacing:1px;">Degree Details</strong>
							</div>
							<div class="panel-body">
								<div class="col-xs-12 col-md-12">
									<div class="form-group" style="margin-top:20px;">
										<input type="text" class="form-control" name="degree_name" id="degree_name" placeholder="Degree Name"  title="Address" autocomplete="off" tabindex="2">
									</div>
									<div class="form-group" style="margin-bottom:40px;">
										<input type="text" class="form-control" name="degree_code" id="degree_code" placeholder="Degree Code"  title="Address" autocomplete="off" tabindex="3">
									</div>
									<div class="form-group"">
										<input type="submit" class="btn btn-success btn-block" style="font-weight:600;margin-bottom:30px;" name="create_degree" id="create_degree" value="Save" tabindex="4"/>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12" id="alert_adddegree"></div>
					</form>
				</div>
				<div id="degree_datatable" class="col-xs-12 col-md-8 table-responsive"></div>	
			</div>
		</div>
	</div>
</div>
<script>	
	$(document).ready(function(){
		degree_datatable();
		
		$("#add_degree_form").validate({
			rules:{
				degree_name: "required",
				degree_code: "required"
			},
			messages:{
				degree_name: "Please Enter Branch",
				degree_code: "Please Enter Branch"
			},
			submitHandler: function(form) {
				adddegree();
			}		
		});
	});

	function adddegree(){
		$("#create_degree").val("Saving");
		var degree_name = $("#degree_name").val();
		var degree_code = $("#degree_code").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Orgnisation/Staff/Degree/add_degree.php",
			data:{
				degree_name : degree_name,
				degree_code : degree_code,
			},
			success:function(result){
				$("#alert_adddegree").html(result);
				$("#add_degree_msg").fadeOut(10000);
				$("#create_degree").val("Save");
				$("#add_degree_form").trigger("reset");
				degree_datatable();
			}
		});
	}
	
	function degree_datatable(){
		$.ajax({
			type:"get",
			url:"../get_files/Orgnisation/Staff/Degree/degree_datatable.php",
			success:function(result){
				$("#degree_datatable").html(result);
			}
		});
	}
</script>';
?>