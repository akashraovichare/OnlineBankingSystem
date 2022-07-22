<?php
session_start();
include('../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();

//$myorgid = $_SESSION['orgid'];
//$username = $_SESSION['sessionuser'];
//$office_priv = $_SESSION['my_organization'];

$getofficedata = $db->getofficedata(/*$myorgid*/);
if($getofficedata){
	echo'<table class="table table-striped table-compact table-hover" style="text-align:center;" id="office_table">
			<thead>
				<tr>
					<th><h4 style="text-align:center;">Branch Code</h4></th>
					<th><h4 style="text-align:center;">Branch Name</h4></th>
					<th><h4 style="text-align:center;">Manager</h4></th>
					<th><h4 style="text-align:center;">Assignment Manager</h4></th>
					<th><h4 style="text-align:center;">Action</h4></th>
				</tr>
			</thead>
			<tbody>';
				foreach($getofficedata as $row){
					echo'<tr>
							<td>'.$row["br_code"].'</td>
							<td style="text-transform:uppercase;">'.$row["br_name"].'</td>
							<td>'.$row["manager"].'</td>
							<td>'.$row["asm"].'</td>
							<td>
								<a href="#" class="btn btn-success btn-xs"  target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>&nbsp;
								<a data-toggle="modal" data-target="#update_office"  onclick=edit_branch("'.$row['br_uid'].'"); class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>		
							</td>
						</tr>';
				}
		echo'</tbody>
		</table>
	
		<div class="modal fade" id="update_office" role="dialog">
			<div class="modal-dialog modal-lg" style="width:80%;">
				<div class="modal-content">
					<div class="modal-header" style="background-color:yellowgreen;color:white;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title text-center"><b>Update Branch Details</b></h4>
					</div>
					<div class="modal-body col-md-12">
						<div id="updatebranch"></div>
					</div>
					<div class="modal-footer"></div>
				</div>
			</div>
		</div>';
}
else{
	echo "<div style='text-align:center;font-family:Open Sans;font-size:20px;'><strong>There are no Office / Branches to display.</strong></div>";
}
echo"
<script>
	$(document).ready(function(){
		var table = $('#office_table').DataTable({
			stateSave: true,
			'deferRender': true,
			dom: 'Blfrtip',
			buttons:[
				{
					text: 'Refresh',
					className: 'btn btn-default',
					action: function ( e, dt, node, config ) {
						genemployee_datatable();
					}
				},
				{
					extend: 'pdf',
					text: 'Pdf selected',
					title: 'Docket Info' ,
					className: 'btn btn-default',
					exportOptions:{
						modifier: {
							selected: true
						},
						columns: [ 0, 1, 2, 3 ,4 ,5 ]
					}
				},
				{
					extend: 'excel',
					text: 'excel selected',
					title: 'Docket Info' ,
					className: 'btn btn-default',
					exportOptions: {
						modifier: {
							selected: true
						},
						columns: [ 0, 1, 2, 3 ,4 ,5  ]
					}
				},
				{
					extend: 'excel',
					text: 'excel',
					title: 'Docket Info' ,
					className: 'btn btn-default',
					exportOptions: {
						columns: [ 0, 1, 2, 3 ,4 ,5 ]
					}
				}
			],
			select: true
		});
				$('div.dataTables_wrapper').addClass('form-group');
				$('div.dataTables_length').css({'float':'left','font-size':'16px'});
				$('div.dt-buttons').css({'display':'inline-block','margin-left':'2%'});
				$('div.dataTables_filter input').addClass('form-control');
				$('div.dataTables_filter input').attr('placeholder', 'Search' );
				$('div.dataTables_filter').css({'color':'transparent','font-size':'1px'});
	});
	
	function edit_branch(br_uid){
		$.ajax({
            type: 'POST',
            url:'../get_files/Orgnisation/Branch/edit_branch_dtls.php',
            data: {
				br_uid : br_uid,
            },
            success:function(result){
				$('#updatebranch').html(result);
            }
        });	
	}	
</script>";
?>