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
		<ul id="tabs-dist" class="nav nav-tabs nav-tabs-v2" role="tablist">
            <li role="presentation" class="active">
                <a href="#tabs-dist-area2" role="tab" id="tabs-dist-2" data-toggle="tab" aria-expanded="false">Add New</a>
            </li>
		</ul>
		<div id="tabsDistContent" class="tab-content tabs-content-v2">
			<div role="tabpanel" class="tab-pane fade active in" style="min-height:550px;margin-top:40px;" id="tabs-dist-area2" aria-labelledby="tabs-dist-area2">
				<div class="col-xs-12 col-md-4" style="font-size:17px;">
					<form id="add_dist_form" >			
						<div class="panel panel-default">
							<div class="panel-heading text-center">
								<strong style="letter-spacing:1px;">Dist Details</strong>
							</div>
							<div class="panel-body">
								<div class="col-xs-12 col-md-12">
									<div class="form-group" style="margin-top:20px;">
										<input type="text" class="form-control" name="dist_name" id="dist_name" placeholder="District Name"  title="Address" tabindex="7">
									</div>
									<div class="form-group" style="margin-bottom:40px;">
										<select class="selectpicker form-group"  data-width="100%" data-size="5" data-show-subtext="true" data-live-search="true" name="state_abbr" id="dist_state_abbr" placeholder="Belonging State" title="Belonging State">
											<option value="">- Select State -</option>';
											$fetchallfromstate = $db->fetchallfromstate();
												if($fetchallfromstate){
													foreach($fetchallfromstate as $crow){
														echo '<option value="'.$crow["state_name"].'" data-subtext="('.$crow["state_abbr"].')">'.$crow["state_name"].'</option>';
													}
												}
												else{
													echo '<option data-subtext="" disabled>No Records</option>';
												}
									echo'</select>
									</div>
									<div class="form-group"">
										<button  type="button" class="btn btn-success btn-block" onclick="adddist();" name="create_dist" id="create_dist">Save</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7" id="alert_adddist"></div>
					</form>
				</div>
				<div id="gendist_datatable" class="col-xs-12 col-md-8 table-responsive"></div>
			</div>
		</div>
	</div>
</div>
<script>		
	$(document).ready(function(){
		$(".selectpicker").selectpicker();
		gendist_datatable();
	})
	
	function adddist(){		
		var dist_name = $("#dist_name").val();
		var dist_state_abbr = $("#dist_state_abbr").val();
		
		$.ajax({
			type:"post",
			url:"../get_files/Place/District/add_dist.php",
			data:{
				dist_name : dist_name,
				dist_state_abbr : dist_state_abbr,
			},
			success:function(result){
				$("#alert_adddist").html(result);
				$("#add_dist_form").trigger("reset");
				gendist_datatable();
			}
		});
	}
	
	function gendist_datatable(){
		$.ajax({
			type:"get",
			url:"../get_files/Place/District/gendist_datatable.php",
			success:function(result){
				$("#gendist_datatable").html(result);
			}
		});
	}
</script>';
?>