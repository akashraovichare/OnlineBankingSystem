<?php
@session_start();

error_reporting(E_ALL ^ E_DEPRECATED);

include('../../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
//$orgid = $_SESSION['orgid'];

$fetchallfromstaff = $db->fetchallfromstaff(/*$orgid*/);
if($fetchallfromstaff){
	echo'<table class="table table-striped table-hover" cellspacing="0" width="100%" id="employe_table">
			<thead>
				<tr>
					<th style="text-align:center;"><h4>Emp No</h4></th>
					<th style="text-align:center;"><h4>Name</h4></th>
					<th style="text-align:center;"><h4>Branch</h4></th>
					<th style="text-align:center;"><h4>Department</h4></th>
					<th style="text-align:center;"><h4>Designation</h4></th>
					<th style="text-align:center;"><h4>Actions</h4></th>
				</tr>
			</thead>
			<tbody>';
				foreach($fetchallfromstaff as $row){
					echo'<tr style="text-align:center;">
							<td>'.$row["emp_no"].'</td>
							<td>'.$row["first_name"].' '.$row["middle_name"].' '.$row["sir_name"].'</td>';
							$fetchabranch = $db->fetchabranch($row["branch"]);
								if($fetchabranch){
									echo '<td>'.$fetchabranch["br_name"].' ('.$fetchabranch["br_code"].')</td>';
								}
								else{
									echo '<td>No Records</td>';
								}
							$fetchadepartment = $db->fetchadepartment($row["department"]);
								if($fetchadepartment){
									echo '<td>'.$fetchadepartment["department"].' ('.$fetchadepartment["department_code"].')</td>';
								}
								else{
									echo '<td>No Records</td>';
								}
							$fetchadesignation = $db->fetchadesignation($row["designation"]);
								if($fetchadesignation){
									echo '<td>'.$fetchadesignation["designation"].' ('.$fetchadesignation["desi_code"].')</td>';
								}
								else{
									echo '<td>No Records</td>';
								}
						echo'<td>
								<a href="#" class="btn btn-success btn-xs"  target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>&nbsp;
								<a data-toggle="modal" data-target="#update_employee" onclick=edit_employee("'.$row["emp_uid"].'") class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>';
				}
		echo'</tbody>
		</table>
		
		<div class="modal fade" id="update_employee" role="dialog">
			<div class="modal-dialog modal-lg" style="width:80%;">
				<div class="modal-content">
					<div class="modal-header" style="background-color:yellowgreen;color:white;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title text-center"><b>Update Employee Details</b></h4>
					</div>
					<div class="modal-body col-md-12">
						<div id="updateemployee"></div>
					</div>
					<div class="modal-footer"></div>
				</div>
			</div>
		</div>';
}
else{
	echo "<div style='text-align:center;font-family:Open Sans;font-size:20px;'><strong>There Are No Staff Data To Display.</strong></div>";
}
echo'
<script>
	$(document).ready(function() {	
		var table = $("#employe_table").DataTable({
			stateSave: true,
			"deferRender": true,
			dom: "Blfrtip",
			buttons:[
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
				},
				{
					extend: "excel",
					text: "excel selected",
					title: "Docket Info" ,
					className: "btn btn-default",
					exportOptions: {
						modifier: {
							selected: true
						},
						columns: [ 0, 1, 2, 3 ,4 ,5  ]
					}
				},
				{
					extend: "excel",
					text: "excel",
					title: "Docket Info" ,
					className: "btn btn-default",
					exportOptions: {
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
	
	function edit_employee(employee_uid){
		$.ajax({
            type: "POST",
            url:"../get_files/Orgnisation/Staff/Employee/edit_emp_dtls.php",
            data:{
				employee_uid : employee_uid,
            },
            success:function(result){
				$("#updateemployee").html(result);
            }
        });	
	}	
</script>'; 
?>