<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];
//$myorgid=$_SESSION['orgid'];

$city_name =  $_POST["city_name"];
$city_abbr =  $_POST["city_abbr"];
$city_teh =  $_POST["city_teh"];
$city_dist =  $_POST["city_dist"];
$city_state =  $_POST["city_state"];

$add_city = $db->add_city($city_name,$city_abbr,$city_teh,$city_dist,$city_state,$superuser);
if($add_city){
	echo'<div class="alert alert-success alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumb"></i>
			<strong> '.$city_name.' </strong> has been <strong>successfully </strong>added to City Master.
		</div>';
}
else{
	echo'<div class="alert alert-danger alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>&nbsp;
			<strong>Error</strong> City not updated!
	</div>';
}
?>