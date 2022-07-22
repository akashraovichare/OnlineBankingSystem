<?php
session_start();
include('../../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];

$desi_uid = $_POST["desi_uid"];
$updt_desi_name = $_POST["updt_desi_name"];
$updt_desi_code = $_POST["updt_desi_code"];

$update_desi = $db->update_desi($desi_uid,$updt_desi_name,$updt_desi_code,$superuser);
if($update_desi){
    echo'<div style="font-size:16px;" class="alert alert-success alert-dismissable" id="updt_desi_msg">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>
			&nbsp;<strong>Designation</strong> is <strong>successfully</strong> updated.
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