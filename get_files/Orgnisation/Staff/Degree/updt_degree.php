<?php
session_start();
include('../../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();

$superuser = $_SESSION["fullname"];

$degree_uid = $_POST["degree_uid"];
$updt_deg_name = $_POST["updt_deg_name"];
$updt_deg_code = $_POST["updt_deg_code"];

$update_degree = $db->update_degree($degree_uid,$updt_deg_name,$updt_deg_code,$superuser);
if($update_degree){
    echo'<div style="font-size:16px;" class="alert alert-success alert-dismissable" id="updt_degree_msg">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>
			&nbsp;<strong>Degree</strong> is <strong>successfully</strong> updated.
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