<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
//$myorgid=$_SESSION['orgid'];
$superuser = $_SESSION["fullname"];

$dist_name =  $_POST["dist_name"];
$dist_state_abbr =  $_POST["dist_state_abbr"];

$add_dist = $db->add_dist($dist_name,$dist_state_abbr,$superuser);
if($add_dist){
	echo'<div class="alert alert-success alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumb"></i>
			<strong> '.$dist_name.' </strong> has been <strong>successfully </strong>added to District Master.
		</div>';
}
else{
	echo'<div class="alert alert-danger alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>&nbsp;
			<strong>Error</strong> District not updated!
		</div>';
}
?>