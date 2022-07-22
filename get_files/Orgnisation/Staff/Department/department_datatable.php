<?php
@session_start();

error_reporting(E_ALL ^ E_DEPRECATED);

include('../../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
//$orgid = $_SESSION['orgid'];

$fetchallfromdepartment = $db->fetchallfromdepartment(/*$orgid*/);
if($fetchallfromdepartment){
	echo'<table class="table table-striped table-compact table-hover" cellspacing="0" width="95%" id="department_table">
			<thead>
				<tr>
					<th style="text-align:center;"><h4>Department UID</h4></th>
					<th style="text-align:center;"><h4>Department</h4></th>
					<th style="text-align:center;"><h4>Department Code</h4></th>
					<th style="text-align:center;"><h4>Actions</h4></th>
				</tr>
			</thead>
			<tbody>';
				foreach($fetchallfromdepartment as $row){
					echo'<tr style="text-align:center;">
							<td>'.$row["department_uid"].'</td>
							<td>'.$row["department"].'</td>
							<td>'.$row["department_code"].'</td>
							<td>
								<a href="#" class="btn btn-success btn-xs"  target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>&nbsp;
								<a data-toggle="modal" data-target="#update_department" onclick=edit_department("'.$row["department_uid"].'"); class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
						</tr>';
			  }
			echo '</tbody>
			</table>
			
			<div class="modal fade" id="update_department" role="dialog">
				<div class="modal-dialog modal-sm" style="width:350px;">
					<div class="modal-content">
						<div class="modal-header" style="background-color:yellowgreen;color:white;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title text-center"><b>Update Department Details</b></h4>
						</div>
						<div class="modal-body col-md-12">
							<div id="updatedepartment"></div>
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>';
}
else{
	echo "<div style='text-align:center;font-family:Open Sans;'><b>There are no Department details data to display</b></div>";
} 
echo'
<script>
	$(document).ready(function(){	
		var table = $("#department_table").DataTable({
			stateSave: true,
			"deferRender": true,
			dom: "Blfrtip",
			buttons: [
				{
					text: "Refresh",
					className: "btn btn-default",
					action: function ( e, dt, node, config ) {
						department_datatable();
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
	
	function edit_department(department_uid){
		$.ajax({
            type: "POST",
            url:"../get_files/Orgnisation/Staff/Department/edit_department_dtls.php",
            data:{
				department_uid : department_uid,
            },
            success:function(result){
				$("#updatedepartment").html(result);
            }
        });	
	}	
</script>';  
?>