<?php
session_start();
include('../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];

$customer_uid = $_POST["customer_uid"];
$updt_rdacc_fname = $_POST["updt_rdacc_fname"];
$updt_rdacc_mname = $_POST["updt_rdacc_mname"];
$updt_rdacc_sname = $_POST["updt_rdacc_sname"];
$updt_rdacc_sex = $_POST["updt_rdacc_sex"];
$updt_rdacc_marriage = $_POST["updt_rdacc_marriage"];
$updt_rdacc_adhar = $_POST["updt_rdacc_adhar"];
$updt_rdacc_pan = $_POST["updt_rdacc_pan"];
$updt_rdacc_dob = $_POST["updt_rdacc_dob"];
$updt_rdacc_building = $_POST["updt_rdacc_building"];
$updt_rdacc_area = $_POST["updt_rdacc_area"];
$updt_rdacc_street = $_POST["updt_rdacc_street"];
$updt_rdacc_milestone = $_POST["updt_rdacc_milestone"];
$updt_rdacc_pincode = $_POST["updt_rdacc_pincode"];
$updt_rdacc_city = $_POST["updt_rdacc_city"];
$updt_rdacc_teh = $_POST["updt_rdacc_teh"];
$updt_rdacc_dist = $_POST["updt_rdacc_dist"];
$updt_rdacc_state = $_POST["updt_rdacc_state"];
$updt_rdacc_phone = $_POST["updt_rdacc_phone"];
$updt_rdacc_mob = $_POST["updt_rdacc_mob"];
$updt_rdacc_email = $_POST["updt_rdacc_email"];
$updt_rdacc_quali = $_POST["updt_rdacc_quali"];
$updt_rdacc_amount = $_POST["updt_rdacc_amount"];
$updt_rdacc_branch = $_POST["updt_rdacc_branch"];
$updt_rdacc_joining = $_POST["updt_rdacc_joining"];

$update_customer = $db->update_customer($customer_uid,$updt_rdacc_fname,$updt_rdacc_mname,$updt_rdacc_sname,$updt_rdacc_sex,$updt_rdacc_marriage,$updt_rdacc_adhar,$updt_rdacc_pan,$updt_rdacc_dob,$updt_rdacc_building ,$updt_rdacc_area,$updt_rdacc_street,$updt_rdacc_milestone,$updt_rdacc_pincode,$updt_rdacc_city,$updt_rdacc_teh,$updt_rdacc_dist,$updt_rdacc_state,$updt_rdacc_phone,$updt_rdacc_mob,$updt_rdacc_email,$updt_rdacc_quali,$updt_rdacc_amount,$updt_rdacc_branch,$updt_rdacc_joining,$superuser);

if($update_customer){
	echo'<div style="font-size:16px;" class="alert alert-success alert-dismissable" id="updt_rdacc_msg">
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