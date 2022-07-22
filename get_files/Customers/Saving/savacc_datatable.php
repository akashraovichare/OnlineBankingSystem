<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
//$myorgid = $_SESSION['orgid'];

$fetchallfromsaving = $db->fetchallfromsaving();
if($fetchallfromsaving){
	echo'<table class="table table-striped table-hover" cellspacing="0" width="100%" id="savacc_table">
			<thead>
				<tr>
					<th style="text-align:center;"><h4>Customer UID</h4></th>
					<th style="text-align:center;"><h4>Account Number</h4></th>
					<th style="text-align:center;"><h4>Full Name</h4></th>
					<th style="text-align:center;"><h4>Email</h4></th>
					<th style="text-align:center;"><h4>Actions</h4></th>
				</tr>
			</thead>
			<tbody>';
				foreach($fetchallfromsaving as $row){
					echo'<tr style="text-align:center;">
							<td>'.$row["customer_uid"].'</td>
							<td>'.$row["acc_no"].'</td>
							<td>'.$row["first_name"].' '.$row["middle_name"].' '.$row["sir_name"].'</td> 
							<td>'.$row["email"].'</td> 
							<td><a href="#" class="btn btn-success btn-xs"  target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>&nbsp;
								<a data-toggle="modal" data-target="#update_savacc" class="btn btn-info btn-xs" onclick=edit_savacc("'.$row['customer_uid'].'");><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
						</tr>';
				}
		echo'</tbody>
		</table>
			
		<div class="modal fade" id="update_savacc" role="dialog">
			<div class="modal-dialog modal-lg" style="width:80%;">
				<div class="modal-content">
					<div class="modal-header" style="background-color:yellowgreen;color:white;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title text-center"><b>Update Saving Account Details</b></h4>
					</div>
					<div class="modal-body col-md-12">
						<div id="updatesavacc"></div>
					</div>
					<div class="modal-footer"></div>
				</div>
			</div>
		</div>';
}
else{
	echo "<div style='text-align:center;font-family:Open Sans;font-size:20px;'><b>There Are No Saving Account To Display</b></div>";
} 
echo'
<script>
	$(document).ready(function() {	
		var table = $("#savacc_table").DataTable({
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
	
	function edit_savacc(customer_uid){
		$.ajax({
            type: "POST",
            url:"../get_files/Customers/Saving/edit_savacc_dtls.php",
            data:{
				customer_uid : customer_uid,
            },
            success:function(result){
				$("#updatesavacc").html(result);
            }
        });	
	}	
</script>';	  
?>