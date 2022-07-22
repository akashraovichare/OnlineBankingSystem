<?php
session_start();
include('../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];

$tehsil_uid = $_POST["tehsil_uid"];
$updt_teh_name = $_POST["updt_teh_name"];
$updt_teh_dist = $_POST["updt_teh_dist"];
$updt_teh_state = $_POST["updt_teh_state"];

$update_teh = $db->update_teh($tehsil_uid,$updt_teh_name,$updt_teh_dist,$updt_teh_state,$superuser);
if($update_teh){
    echo'<div style="font-size:14px;" class="alert alert-success alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>
			&nbsp;<strong>Tehsil</strong> is <strong>successfully</strong> updated.
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