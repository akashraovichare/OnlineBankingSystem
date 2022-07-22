<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
//include('../../../includes/find_functions.php');
//define('DATE_FORMAT', 'DD-MM-YYYY');
//$db = new DB_FUNCTIONS();
//$orgid=$_SESSION['orgid'];

echo'
<div class="content" class="col-md-12" style="font-family:Open sans;">
	<div class="col-md-12 tabs-area">
		<ul id="tabs-state" class="nav nav-tabs nav-tabs-v2" role="tablist">
            <li role="presentation" class="active">
                <a href="#tabs-state-area2" role="tab" id="tabs-state-2" data-toggle="tab" aria-expanded="false"  tabindex="1">Add New</a>
            </li>
		</ul>
		<div id="tabStateContent" class="tab-content tabs-content-v2">
			<div role="tabpanel" class="tab-pane fade active in" style="min-height:550px;margin-top:40px;" id="tabs-state-area2" aria-labelledby="tabs-state-area2">
				<div class="col-xs-12 col-md-4" style="font-size:17px;">
					<form id="add_state_form" >			
						<div class="panel panel-default">
							<div class="panel-heading text-center">
								<strong style="letter-spacing:1px;">State Details</strong>
							</div>
							<div class="panel-body">
								<div class="col-xs-12 col-md-12">
									<div class="form-group" style="margin-top:20px;">
										<input type="text" class="form-control" name="state_name" id="state_name" placeholder="State Name"  title="Address" tabindex="2">
									</div>
									<div class="form-group" style="margin-bottom:40px;">
										<input type="text" class="form-control" name="state_abbr" id="state_abbr" placeholder="State Abbreviation"  title="Address" tabindex="3">
									</div>
									<div class="form-group"">
										<button  type="button" class="btn btn-success btn-block" onclick="addstate();" name="action_create_employe" id="create_state" tabindex="4">Save</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12" id="alert_addstate"></div>
					</form>
				</div>
				<div id="genstate_datatable" class="col-xs-12 col-md-8 table-responsive"></div>	
			</div>
		</div>
	</div>
</div>
<script>	
	$(document).ready(function(){
		genstate_datatable();
	})

	function addstate(){
		var state_name = $("#state_name").val();
		var state_abbr = $("#state_abbr").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Place/State/add_state.php",
			data:{
				state_name : state_name,
				state_abbr : state_abbr,
			},
			success:function(result){
				$("#alert_addstate").html(result);
				$("#add_state_form").trigger("reset");
				genstate_datatable();
			}
		});
	}
	
	function genstate_datatable(){	
		$.ajax({
			type:"get",
			url:"../get_files/Place/State/genstate_datatable.php",
			success:function(result){
				$("#genstate_datatable").html(result);
			}
		});
	}
</script>';
?>