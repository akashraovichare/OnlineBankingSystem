<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];
//$myorgid=$_SESSION['orgid'];

$tehsil_name =  $_POST["tehsil_name"];
$tehsil_dist =  $_POST["tehsil_dist"];
$tehsil_state =  $_POST["tehsil_state"];

$add_tehsil = $db->add_tehsil($tehsil_name,$tehsil_dist,$tehsil_state,$superuser);
if($add_tehsil){
	echo'<div class="alert alert-success alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumb"></i>
			<strong> '.$tehsil_name.' </strong> has been <strong>successfully </strong>added to Tehsil Master.
		</div>';
}
else{
	echo'<div class="alert alert-danger alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>&nbsp;
			<strong>Error</strong> Tehsil not updated!
		</div>';
}
?>