<?php
session_start();
include('../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];

$customer_uid = $_POST["customer_uid"];
$updt_fdacc_fname = $_POST["updt_fdacc_fname"];
$updt_fdacc_mname = $_POST["updt_fdacc_mname"];
$updt_fdacc_sname = $_POST["updt_fdacc_sname"];
$updt_fdacc_sex = $_POST["updt_fdacc_sex"];
$updt_fdacc_marriage = $_POST["updt_fdacc_marriage"];
$updt_fdacc_adhar = $_POST["updt_fdacc_adhar"];
$updt_fdacc_pan = $_POST["updt_fdacc_pan"];
$updt_fdacc_dob = $_POST["updt_fdacc_dob"];
$updt_fdacc_building = $_POST["updt_fdacc_building"];
$updt_fdacc_area = $_POST["updt_fdacc_area"];
$updt_fdacc_street = $_POST["updt_fdacc_street"];
$updt_fdacc_milestone = $_POST["updt_fdacc_milestone"];
$updt_fdacc_pincode = $_POST["updt_fdacc_pincode"];
$updt_fdacc_city = $_POST["updt_fdacc_city"];
$updt_fdacc_teh = $_POST["updt_fdacc_teh"];
$updt_fdacc_dist = $_POST["updt_fdacc_dist"];
$updt_fdacc_state = $_POST["updt_fdacc_state"];
$updt_fdacc_phone = $_POST["updt_fdacc_phone"];
$updt_fdacc_mob = $_POST["updt_fdacc_mob"];
$updt_fdacc_email = $_POST["updt_fdacc_email"];
$updt_fdacc_quali = $_POST["updt_fdacc_quali"];
$updt_fdacc_amount = $_POST["updt_fdacc_amount"];
$updt_fdacc_branch = $_POST["updt_fdacc_branch"];
$updt_fdacc_joining = $_POST["updt_fdacc_joining"];

$update_customer = $db->update_customer($customer_uid,$updt_fdacc_fname,$updt_fdacc_mname,$updt_fdacc_sname,$updt_fdacc_sex,$updt_fdacc_marriage,$updt_fdacc_adhar,$updt_fdacc_pan,$updt_fdacc_dob,$updt_fdacc_building ,$updt_fdacc_area,$updt_fdacc_street,$updt_fdacc_milestone,$updt_fdacc_pincode,$updt_fdacc_city,$updt_fdacc_teh,$updt_fdacc_dist,$updt_fdacc_state,$updt_fdacc_phone,$updt_fdacc_mob,$updt_fdacc_email,$updt_fdacc_quali,$updt_fdacc_amount,$updt_fdacc_branch,$updt_fdacc_joining,$superuser);

if($update_customer){
    echo'<div style="font-size:16px;" class="alert alert-success alert-dismissable" id="updt_fdacc_msg">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>
			&nbsp;<strong>Account</strong> is <strong>successfully</strong> updated.
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