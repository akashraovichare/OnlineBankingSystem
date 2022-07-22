<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
//$orgid = $_SESSION['orgid'];

$fetchallfromdistrict = $db->fetchallfromdistrict(/*$orgid*/);
if($fetchallfromdistrict){
	echo'<table class="table table-striped table-compact table-hover" cellspacing="0" width="100%" id="district_table">
			<thead>
				<tr>
					<th style="text-align:center;"><h4>District UID</h4></th>
					<th style="text-align:center;"><h4>District Name</h4></th>
					<th style="text-align:center;"><h4>State</h4></th>
					<th style="text-align:center;"><h4>Actions</h4></th>
				</tr>
			</thead>
			<tbody>';
				foreach($fetchallfromdistrict as $row){
					echo'<tr style="text-align:center;">
							<td>'.$row["district_uid"].'</td>
							<td>'.$row["district_name"].'</td>
							<td>'.$row["state"].'</td>
							<td>
								<a href="#" class="btn btn-success btn-xs"  target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>&nbsp;
								<a data-toggle="modal" data-target="#update_district" onclick=edit_district("'.$row["district_uid"].'") class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>';
				}
		echo'</tbody>
		</table>
		<div class="modal fade" id="update_district" role="dialog">
		<div class="modal-dialog modal-sm" style="width:350px;">
			<div class="modal-content">
				<div class="modal-header" style="background-color:yellowgreen;color:white;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title text-center"><b>Update District Details</b></h4>
				</div>
				<div class="modal-body col-md-12">
					<div id="updatedistrict"></div>
				</div>
				<div class="modal-footer"></div>
			</div>
		</div>
	</div>';
}
else{
	echo "<div style='text-align:center;font-family:Open Sans;'><b>There are no employee details data to display</b></div>";
}		  
echo'
<script>
	$(document).ready(function(){	
		var table = $("#district_table").DataTable({
			stateSave: true,
			"deferRender": true,
			dom: "Blfrtip",
			buttons: [
				{
					text: "Refresh",
					className: "btn btn-default",
					action: function ( e, dt, node, config ) {
						genemployee_datatable();
					}
				},
				{
					extend: "pdf",
					text: "Pdf selected",
					title: "Docket Info" ,
					className: "btn btn-default",
					exportOptions: {
						modifier: {
							selected: true
						},
						columns: [ 0, 1, 2, 3 ,4 ,5 ]
					}
				}
			],
			select: true
		});
		$("div.dataTables_wrapper").addClass("form-group");
		$("div.dataTables_length").css({"float":"left","font-size":"16px"});
		$("div.dt-buttons").css({"display":"inline-block","margin-left":"2%"});
		$("div.dataTables_filter input").addClass("form-control");
		$("div.dataTables_filter input").attr("placeholder", "Search" );
		$("div.dataTables_filter").css({"color":"transparent","font-size":"1px"});
	});
	
	function edit_district(district_uid){
		$.ajax({
            type: "POST",
            url:"../get_files/Place/District/updt_district_dtls.php",
            data: {
				district_uid : district_uid,
            },
            success:function(result){
				$("#updatedistrict").html(result);
            }
        });	
	}
</script>';
?>