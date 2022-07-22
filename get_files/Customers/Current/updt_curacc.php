<?php
session_start();
include('../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];

$customer_uid = $_POST["customer_uid"];
$updt_curacc_fname = $_POST["updt_curacc_fname"];
$updt_curacc_mname = $_POST["updt_curacc_mname"];
$updt_curacc_sname = $_POST["updt_curacc_sname"];
$updt_curacc_sex = $_POST["updt_curacc_sex"];
$updt_curacc_marriage = $_POST["updt_curacc_marriage"];
$updt_curacc_adhar = $_POST["updt_curacc_adhar"];
$updt_curacc_pan = $_POST["updt_curacc_pan"];
$updt_curacc_dob = $_POST["updt_curacc_dob"];
$updt_curacc_building = $_POST["updt_curacc_building"];
$updt_curacc_area = $_POST["updt_curacc_area"];
$updt_curacc_street = $_POST["updt_curacc_street"];
$updt_curacc_milestone = $_POST["updt_curacc_milestone"];
$updt_curacc_pincode = $_POST["updt_curacc_pincode"];
$updt_curacc_city = $_POST["updt_curacc_city"];
$updt_curacc_teh = $_POST["updt_curacc_teh"];
$updt_curacc_dist = $_POST["updt_curacc_dist"];
$updt_curacc_state = $_POST["updt_curacc_state"];
$updt_curacc_phone = $_POST["updt_curacc_phone"];
$updt_curacc_mob = $_POST["updt_curacc_mob"];
$updt_curacc_email = $_POST["updt_curacc_email"];
$updt_curacc_quali = $_POST["updt_curacc_quali"];
$updt_curacc_amount = $_POST["updt_curacc_amount"];
$updt_curacc_branch = $_POST["updt_curacc_branch"];
$updt_curacc_joining = $_POST["updt_curacc_joining"];

$update_customer = $db->update_customer($customer_uid,$updt_curacc_fname,$updt_curacc_mname,$updt_curacc_sname,$updt_curacc_sex,$updt_curacc_marriage,$updt_curacc_adhar,$updt_curacc_pan,$updt_curacc_dob,$updt_curacc_building ,$updt_curacc_area,$updt_curacc_street,$updt_curacc_milestone,$updt_curacc_pincode,$updt_curacc_city,$updt_curacc_teh,$updt_curacc_dist,$updt_curacc_state,$updt_curacc_phone,$updt_curacc_mob,$updt_curacc_email,$updt_curacc_quali,$updt_curacc_amount,$updt_curacc_branch,$updt_curacc_joining,$superuser);

if($update_customer){
    echo'<div style="font-size:16px;" class="alert alert-success alert-dismissable" id="updt_curacc_msg">
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