<?php
session_start();
include('../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];

$customer_uid = $_POST["customer_uid"];
$updt_savacc_fname = $_POST["updt_savacc_fname"];
$updt_savacc_mname = $_POST["updt_savacc_mname"];
$updt_savacc_sname = $_POST["updt_savacc_sname"];
$updt_savacc_sex = $_POST["updt_savacc_sex"];
$updt_savacc_marriage = $_POST["updt_savacc_marriage"];
$updt_savacc_adhar = $_POST["updt_savacc_adhar"];
$updt_savacc_pan = $_POST["updt_savacc_pan"];
$updt_savacc_dob = @date('Y-m-d',strtotime(str_replace("/","-",$_POST["updt_savacc_dob"])));
$updt_savacc_building = $_POST["updt_savacc_building"];
$updt_savacc_area = $_POST["updt_savacc_area"];
$updt_savacc_street = $_POST["updt_savacc_street"];
$updt_savacc_milestone = $_POST["updt_savacc_milestone"];
$updt_savacc_pincode = $_POST["updt_savacc_pincode"];
$updt_savacc_city = $_POST["updt_savacc_city"];
$updt_savacc_teh = $_POST["updt_savacc_teh"];
$updt_savacc_dist = $_POST["updt_savacc_dist"];
$updt_savacc_state = $_POST["updt_savacc_state"];
$updt_savacc_phone = $_POST["updt_savacc_phone"];
$updt_savacc_mob = $_POST["updt_savacc_mob"];
$updt_savacc_email = $_POST["updt_savacc_email"];
$updt_savacc_quali = $_POST["updt_savacc_quali"];
$updt_savacc_amount = $_POST["updt_savacc_amount"];
$updt_savacc_branch = $_POST["updt_savacc_branch"];
$updt_savacc_joining = @date('Y-m-d',strtotime(str_replace("/","-",$_POST["updt_savacc_joining"])));

$update_customer = $db->update_customer($customer_uid,$updt_savacc_fname,$updt_savacc_mname,$updt_savacc_sname,$updt_savacc_sex,$updt_savacc_marriage,$updt_savacc_adhar,$updt_savacc_pan,$updt_savacc_dob,$updt_savacc_building ,$updt_savacc_area,$updt_savacc_street,$updt_savacc_milestone,$updt_savacc_pincode,$updt_savacc_city,$updt_savacc_teh,$updt_savacc_dist,$updt_savacc_state,$updt_savacc_phone,$updt_savacc_mob,$updt_savacc_email,$updt_savacc_quali,$updt_savacc_amount,$updt_savacc_branch,$updt_savacc_joining,$superuser);

if($update_customer){
    echo'<div style="font-size:16px;" class="alert alert-success alert-dismissable" id="updt_savacc_msg">
        <a class="panel-close close" data-dismiss="alert">×</a> 
        <i class="fa fa-thumbs-o-up"></i>
		&nbsp;<strong>Account</strong> is <strong>successfully</strong> updated.
        </div>';
}
else{
    echo'<div class="alert alert-danger alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-exclamation"></i>
			<b>Error :</b> Something Went Wrong Try Again!.
        </div>';
}  
?>