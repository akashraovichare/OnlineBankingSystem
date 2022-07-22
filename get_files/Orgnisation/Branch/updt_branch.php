<?php
session_start();

include('../../../includes/find_functions.php');

$db = new DB_FUNCTIONS();

$superuser = $_SESSION["fullname"];

$updt_br_uid = $_POST["updt_br_uid"];
$updt_br_code = $_POST["updt_br_code"];
$ifsc = 'ABCB0'.str_pad($_POST['updt_br_code'], 6, "0", STR_PAD_LEFT);
$updt_br_name = $_POST["updt_br_name"];
$updt_br_mngr = $_POST["updt_br_mngr"];
$updt_br_asmngr = $_POST["updt_br_asmngr"];
$updt_br_email = $_POST["updt_br_email"];
$updt_br_contact = $_POST["updt_br_contact"];
$updt_br_building = $_POST["updt_br_building"];
$updt_br_area = $_POST["updt_br_area"];
$updt_br_street = $_POST["updt_br_street"];
$updt_br_milestone = $_POST["updt_br_milestone"];
$updt_br_pincode = $_POST["updt_br_pincode"];
$updt_br_city = $_POST["updt_br_city"];
$updt_br_teh = $_POST["updt_br_teh"];
$updt_br_dist = $_POST["updt_br_dist"];
$updt_br_state = $_POST["updt_br_state"];
$updt_br_fax = $_POST["updt_br_fax"];
$updt_br_mngr_phone = $_POST["updt_br_mngr_phone"];
$updt_br_mngr_mob = $_POST["updt_br_mngr_mob"];
$updt_br_mngr_email = $_POST["updt_br_mngr_email"];
$updt_br_asm_phone = $_POST["updt_br_asm_phone"];
$updt_br_asm_mob = $_POST["updt_br_asm_mob"];
$updt_br_asm_email = $_POST["updt_br_asm_email"];	

$update_branch = $db->update_branch($updt_br_uid,$updt_br_code,$ifsc,$updt_br_name,$updt_br_mngr,$updt_br_asmngr,$updt_br_email,$updt_br_contact ,$updt_br_building,$updt_br_area,$updt_br_street,$updt_br_milestone,$updt_br_pincode,$updt_br_city,$updt_br_teh,$updt_br_dist,$updt_br_state,$updt_br_fax,$updt_br_mngr_phone,$updt_br_mngr_mob,$updt_br_mngr_email,$updt_br_asm_phone ,$updt_br_asm_mob,$updt_br_asm_email,$superuser);

if($update_branch){
    echo'<div style="font-size:16px;" id="updt_br_msg" class="alert alert-success alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>&nbsp;<strong>Branch '.$updt_br_code.'</strong> is <strong>successfully</strong> updated.
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