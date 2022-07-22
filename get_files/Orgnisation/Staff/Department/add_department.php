<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];
//$myorgid=$_SESSION['orgid'];

$department_name =  $_POST["department_name"];
$department_code =  $_POST["department_code"];

$add_department = $db->add_department($department_name,$department_code,$superuser);
if($add_department){
	echo'<div class="alert alert-success alert-dismissable" id="add_dep_msg">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumb"></i>
			<strong> '.$department_name.' </strong> has been <strong>successfully </strong>added to Department Master.
		</div>';
}
else{
	echo'<div class="alert alert-danger alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>&nbsp;
			<strong>Error</strong> Department not updated!
		</div>';
}
?>