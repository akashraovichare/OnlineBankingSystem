<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];
//$myorgid=$_SESSION['orgid'];

$degree_name =  $_POST["degree_name"];
$degree_code =  $_POST["degree_code"];

$add_degree = $db->add_degree($degree_name,$degree_code,$superuser);
if($add_degree){
	echo'<div class="alert alert-success alert-dismissable" id="add_degree_msg">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumb"></i>
			<strong> '.$degree_name.' </strong> has been <strong>successfully </strong>added to Degree Master.
		</div>';
}
else{
	echo'<div class="alert alert-danger alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>&nbsp;
			<strong>Error</strong> Degree not updated!
		</div>';
}
?>