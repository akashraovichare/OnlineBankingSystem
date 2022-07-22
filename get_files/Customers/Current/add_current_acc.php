<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];

$curacc_fname = $_POST["curacc_fname"];
$curacc_mname = $_POST["curacc_mname"];
$curacc_sname = $_POST["curacc_sname"];
$curacc_sex = $_POST["curacc_sex"];
$curacc_marriage = $_POST["curacc_marriage"];
$curacc_adhar = $_POST["curacc_adhar"];
$curacc_pan = $_POST["curacc_pan"];
$curacc_dob = @date('Y-m-d',strtotime(str_replace("/","-",$_POST["curacc_dob"])));
$curacc_building = $_POST["curacc_building"];
$curacc_area = $_POST["curacc_area"];
$curacc_street = $_POST["curacc_street"];
$curacc_milestone = $_POST["curacc_milestone"];
$curacc_pincode = $_POST["curacc_pincode"];
$curacc_city = $_POST["curacc_city"];
$curacc_teh = $_POST["curacc_teh"];
$curacc_dist = $_POST["curacc_dist"];
$curacc_state = $_POST["curacc_state"];
$curacc_phone = $_POST["curacc_phone"];
$curacc_mob = $_POST["curacc_mob"];
$curacc_email = $_POST["curacc_email"];
$curacc_quali = $_POST["curacc_quali"];
$curacc_amount = $_POST["curacc_amount"];
$curacc_branch = $_POST["curacc_branch"];
//$curacc_joining = @date('Y-m-d',strtotime(str_replace("/","-",$_POST["curacc_joining"])));
$is_savacc = 0;
$is_curacc = 1;
$is_fdacc = 0;
$is_rdacc = 0;


$add_customer = $db->add_customer($curacc_fname,$curacc_mname,$curacc_sname,$curacc_sex,$curacc_marriage,$curacc_adhar,$curacc_pan,$curacc_dob,$curacc_building,$curacc_area,$curacc_street,$curacc_milestone,$curacc_pincode,$curacc_city,$curacc_teh,$curacc_dist,$curacc_state,$curacc_phone,$curacc_mob,$curacc_email,$curacc_quali,$curacc_amount,$curacc_branch,$is_savacc,$is_curacc,$is_fdacc,$is_rdacc,$superuser/*,$curacc_joining*/);

if($add_customer){
	echo'<div class="alert alert-success alert-dismissable" id="add_cur_msg">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumb"></i>
			<strong> '.$curacc_fname.' </strong> has been <strong>successfully </strong>added to Employee.
		</div>';
}
else{
	echo'<div class="alert alert-danger alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>&nbsp;
			<strong>Error</strong> Employee not updated!
		</div>';	
}
?>