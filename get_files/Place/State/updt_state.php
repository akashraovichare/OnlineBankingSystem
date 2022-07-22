<?php
session_start();
include('../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];

$state_uid = $_POST["state_uid"];
$updt_state_name = $_POST["updt_state_name"];
$updt_state_abbr = $_POST["updt_state_abbr"];

$update_state = $db->update_state($state_uid,$updt_state_name,$updt_state_abbr,$superuser);
if($update_state){
    echo'<div style="font-size:14px;" class="alert alert-success alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>
			&nbsp;<strong>State</strong> is <strong>successfully</strong> updated.
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