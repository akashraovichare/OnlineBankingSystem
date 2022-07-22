<?php
session_start();
include('../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];

$district_uid = $_POST["district_uid"];
$updt_dist_name = $_POST["updt_dist_name"];
$updt_dist_state = $_POST["updt_dist_state"];

$update_distr = $db->update_distr($district_uid,$updt_dist_name,$updt_dist_state,$superuser);
if($update_distr){
    echo'<div style="font-size:14px;" class="alert alert-success alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>
			&nbsp;<strong>District</strong> is successfully updated.
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