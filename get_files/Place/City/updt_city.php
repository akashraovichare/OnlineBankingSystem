<?php
session_start();
include('../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];

$city_uid = $_POST["city_uid"];
$updt_city_name = $_POST["updt_city_name"];
$updt_city_abbr = $_POST["updt_city_abbr"];
$updt_city_teh = $_POST["updt_city_teh"];
$updt_city_dist = $_POST["updt_city_dist"];
$updt_city_state = $_POST["updt_city_state"];

$update_city = $db->update_city($city_uid,$updt_city_name,$updt_city_abbr,$updt_city_teh,$updt_city_dist,$updt_city_state,$superuser);
if($update_city){
    echo'<div style="font-size:14px;" class="alert alert-success alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>
			&nbsp;<strong>City</strong> is <strong>successfully<strong> updated.
        </div>';
}
else{
    echo'<div class="alert alert-danger alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-exclamation"></i>
			<strong>Error :</strong> Something Went Wrong Try Again!.
        </div>';
}  
?>