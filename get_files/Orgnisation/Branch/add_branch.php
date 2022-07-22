<?php
@session_start();	
error_reporting(E_ALL ^ E_DEPRECATED);

include('../../../includes/find_functions.php');

$superuser = $_SESSION["fullname"];

$db = new DB_FUNCTIONS();

$br_code = $_POST['br_code'];
$ifsc = 'ABCB0'.str_pad($_POST['br_code'], 6, "0", STR_PAD_LEFT);
$br_name = $_POST['br_name'];
$br_mngr = $_POST['br_mngr'];
$br_asmngr = $_POST['br_asmngr'];
$br_email = $_POST['br_email'];
$br_contact = $_POST['br_contact'];
$br_building = $_POST['br_building'];
$br_area = $_POST['br_area'];
$br_street = $_POST['br_street'];
$br_milestone = $_POST['br_milestone'];
$br_pincode = $_POST['br_pincode'];
$br_city = $_POST['br_city'];
$br_teh = $_POST['br_teh'];
$br_dist = $_POST['br_dist'];
$br_state = $_POST['br_state'];
$br_fax = $_POST['br_fax'];
$br_mngr_phone = $_POST['br_mngr_phone'];
$br_mngr_mob = $_POST['br_mngr_mob'];
$br_mngr_email = $_POST['br_mngr_email'];
$br_asm_phone = $_POST['br_asm_phone'];
$br_asm_mob = $_POST['br_asm_mob'];
$br_asm_email = $_POST['br_asm_email'];

$add_branch = $db->add_branch($br_code,$ifsc,$br_name,$br_mngr,$br_asmngr,$br_email,$br_contact,$br_building,$br_area,$br_street,$br_milestone,$br_pincode,$br_city,$br_teh,$br_dist,$br_state,$br_fax,$br_mngr_phone,$br_mngr_mob,$br_mngr_email,$br_asm_phone,$br_asm_mob,$br_asm_email,$superuser);

if($add_branch){
	echo'<div style="font-size:16px;" id="add_br_msg" class="alert alert-success alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>&nbsp;<strong>Branch</strong> is <strong>successfully</strong> created.
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