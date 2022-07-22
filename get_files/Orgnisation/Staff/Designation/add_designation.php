<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];
//$myorgid=$_SESSION['orgid'];

$designation_name =  $_POST["designation_name"];
$designation_code =  $_POST["designation_code"];

$add_designation = $db->add_designation($designation_name,$designation_code,$superuser);
if($add_designation){
	echo'<div class="alert alert-success alert-dismissable" id="add_desi_msg">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumb"></i>
			<strong> '.$designation_name.' </strong> has been <strong>successfully </strong>added to Designation Master.
		</div>';	
}
else{
	echo'<div class="alert alert-danger alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>&nbsp;
			<strong>Error</strong> Designation not updated!
		</div>';	
}
?>