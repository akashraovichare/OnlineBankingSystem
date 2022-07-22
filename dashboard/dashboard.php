<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> User Dashboard</title>
	<link rel="stylesheet" href="../assets/css/dashboard.css">
	<link rel="stylesheet" href="../assets/css/left-menu.css">
	<link rel="stylesheet" href="../assets/css/Basic-Header.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"rel="stylesheet" type="text/css" />
	<!--font used elsewhere-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js" type="application/javascript"></script>
	<link href="../assets/css/popnotify.css" rel="stylesheet" type="text/css">
	  
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js" type="application/javascript"></script>
	<script src="../assets/js/moment.min.js"></script>

    <link rel="stylesheet" href="../assets/css/bootstrap.datetimepicker.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
	
	<script src="../assets/js/bootstrap.datetime.js" type="application/javascript"></script>
	
	<script src="../assets/js/popnotify.js" type="application/javascript"></script>

	<link rel="stylesheet" type="text/css" href="../assets/css/mgDialog.css">
	<script type="text/javascript" src="../assets/js/mgDialog.js" ></script>
    <link rel="stylesheet" href="../assets/css/Basic-Header.css">
	<script src="../assets/js/plugins/jquery.nicescroll.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/css/plugins/fSelect.css">

</head>
<?php
@session_start();
if($_SESSION['login'] == "1")
{
include("dash_header.php");
?>
<body>
	<div class="col-md-2" id="accordion">
		<div id="left-menu"></div>
	</div>
	<div class="tab-content">	
		<div id="home" class="tab-pane active"></div>
		<div id="office" class="tab-pane"></div>
		<div id="employee" class="tab-pane"></div>
		<div id="saving_account" class="tab-pane"></div>
		<div id="current_account" class="tab-pane"></div>
		<div id="fd_account" class="tab-pane"></div>
		<div id="rd_account" class="tab-pane"></div>
		<div id="state" class="tab-pane"></div>
		<div id="city" class="tab-pane"></div>
		<div id="tehsil" class="tab-pane"></div>
		<div id="dist" class="tab-pane"></div>
		<div id="emp_cat" class="tab-pane"></div>
		<div id="department" class="tab-pane"></div>
		<div id="degree" class="tab-pane"></div>
		<div id="profile" class="tab-pane"></div>
	</div>

<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="application/javascript"></script>
<script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js" type="text/javascript"></script>
<script src="../assets/js/jquery.toaster.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
</body>
<script>
	$(document).ready(function(){
		$.ajax({
			type: "GET",
			url:"leftmenu.php",
			async:true,
			cache:false,
			success:function(result){
				$("#left-menu").html(result);
			}
		});
	
		$.ajax({
			type: "GET",
			url:"dash_home.php",
			async:true,
			cache:false,
			success:function(data){
				$("#home").html(data);
			}
		});
	});

	function home(){
		$.ajax({
			type: "GET",
			url:"dash_home.php",
			async:true,
			cache:false,
			success:function(data){
				$("#home").html(data);
			}
		});
	}
	
	function add_branch(){
		$.ajax({
			type: "GET",
			url:"../get_files/Orgnisation/Branch/genbranch.php",
			async:true,
			cache:false,
			success:function(result){
				$("#office").html(result);
			}
		});
	}
	
	function add_employee(){
		$.ajax({
			type: "GET",
			url:"../get_files/Orgnisation/Staff/Employee/genemp.php",
			async:true,
			cache:false,
			success:function(result){
				$("#employee").html(result);
			}
		});
	}
	
	function add_emp_cat(){
		$.ajax({
			type: "GET",
			url:"../get_files/Orgnisation/Staff/Designation/gendesignation.php",
			async:true,
			cache:false,
			success:function(result){
				$("#emp_cat").html(result);
			}
		});
	}
	
	function add_department(){
		$.ajax({
			type: "GET",
			url:"../get_files/Orgnisation/Staff/Department/gendepartment.php",
			async:true,
			cache:false,
			success:function(result){
				$("#department").html(result);
			}
		});
	}
	
	function add_degree(){
		$.ajax({
			type: "GET",
			url:"../get_files/Orgnisation/Staff/Degree/gendegree.php",
			async:true,
			cache:false,
			success:function(result){
				$("#degree").html(result);
			}
		});
	}
	
	function add_state(){
		$.ajax({
			type: "GET",
			url:"../get_files/Place/State/genstate.php",
			async:true,
			cache:false,
			success:function(result){
				$("#state").html(result);
			}
		});
	}
	
	function gen_profile(){
		$.ajax({
			type: "GET",
			url:"../get_files/Profile/superProfile.php",
			async:true,
			cache:false,
			success:function(result){
				$("#profile").html(result);
			}
		});
	}
	
	function add_city(){
		$.ajax({
			type: "GET",
			url:"../get_files/Place/City/gencity.php",
			async:true,
			cache:false,
			success:function(result){
				$("#city").html(result);
			}
		});
	}
	
	function add_tehsil(){
		$.ajax({
			type: "GET",
			url:"../get_files/Place/Tehsil/gentehsil.php",
			async:true,
			cache:false,
			success:function(result){
				$("#tehsil").html(result);
			}
		});
	}
	
	function add_dist(){
		$.ajax({
			type: "GET",
			url:"../get_files/Place/District/gendist.php",
			async:true,
			cache:false,
			success:function(result){
				$("#dist").html(result);
			}
		});
	}
	
	function add_customer(){
		$.ajax({
			type: "GET",
			url:"../get_files/Customers/gencustomer.php",
			async:true,
			cache:false,
			success:function(result){
				$("#customer").html(result);
			}
		});
	}
	
	function add_saving(){
		$.ajax({
			type: "GET",
			url:"../get_files/Customers/Saving/gensaving_acc.php",
			async:true,
			cache:false,
			success:function(result){
				$("#saving_account").html(result);
			}
		});
	}
	
	function add_current(){
		$.ajax({
			type: "GET",
			url:"../get_files/Customers/Current/gencurrent_acc.php",
			async:true,
			cache:false,
			success:function(result){
				$("#current_account").html(result);
			}
		});
	}
	
	function add_fd(){
		$.ajax({
			type: "GET",
			url:"../get_files/Customers/FD/genfd_acc.php",
			async:true,
			cache:false,
			success:function(result){
				$("#fd_account").html(result);
			}
		});
	}
	
	function add_rd(){
		$.ajax({
			type: "GET",
			url:"../get_files/Customers/RD/genrd_acc.php",
			async:true,
			cache:false,
			success:function(result){
				$("#rd_account").html(result);
			}
		});
	} 
</script>  
<script type="text/javascript" src="../assets/js/plugins/fSelect.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="application/javascript"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="application/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" type="application/javascript"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="application/javascript"></script>
<script src="https://cdn.datatables.net/select/1.2.3/js/dataTables.select.min.js" type="application/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js" type="application/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="application/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js" type="application/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js" type="application/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js" type="application/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js" type="application/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.colVis.min.js" type="application/javascript"></script>
<?php
}
else{
	echo "<script>document.location='../index.php'</script>";
}
?>
</html>