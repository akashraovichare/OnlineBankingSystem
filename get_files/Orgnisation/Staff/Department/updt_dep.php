<?php
session_start();
include('../../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];

$department_uid = $_POST["department_uid"];
$updt_dep_name = $_POST["updt_dep_name"];
$updt_dep_code = $_POST["updt_dep_code"];

$update_dep = $db->update_dep($department_uid,$updt_dep_name,$updt_dep_code,$superuser);
if($update_dep){
    echo'<div style="font-size:16px;" class="alert alert-success alert-dismissable" id="updt_dep_msg">
			class="panel-close close" data-dismiss="alert">×</a> 
			class="fa fa-thumbs-o-up"></i>
			&nbsp;<strong>Department</strong> is <strong>successfully</strong> updated.
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