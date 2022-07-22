<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
//$myorgid=$_SESSION['orgid'];
$superuser = $_SESSION["fullname"];

$state_name =  $_POST["state_name"];
$state_abbr =  $_POST["state_abbr"];

$add_state = $db->add_state($state_name,$state_abbr,$superuser);
if($add_state){
	echo'<div class="alert alert-success alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumb"></i>
			<strong> '.$state_name.' </strong> has been <strong>successfully </strong>added to State Master.
		</div>';
}
else{
	echo'<div class="alert alert-danger alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>&nbsp;
			<strong>Error</strong> State not updated!
		</div>';
}
?>