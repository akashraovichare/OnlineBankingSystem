<?php

@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];

$rdacc_fname = $_POST["rdacc_fname"];
$rdacc_mname = $_POST["rdacc_mname"];
$rdacc_sname = $_POST["rdacc_sname"];
$rdacc_sex = $_POST["rdacc_sex"];
$rdacc_marriage = $_POST["rdacc_marriage"];
$rdacc_adhar = $_POST["rdacc_adhar"];
$rdacc_pan = $_POST["rdacc_pan"];
$rdacc_dob = @date('Y-m-d',strtotime(str_replace("/","-",$_POST["rdacc_dob"])));
$rdacc_building = $_POST["rdacc_building"];
$rdacc_area = $_POST["rdacc_area"];
$rdacc_street = $_POST["rdacc_street"];
$rdacc_milestone = $_POST["rdacc_milestone"];
$rdacc_pincode = $_POST["rdacc_pincode"];
$rdacc_city = $_POST["rdacc_city"];
$rdacc_teh = $_POST["rdacc_teh"];
$rdacc_dist = $_POST["rdacc_dist"];
$rdacc_state = $_POST["rdacc_state"];
$rdacc_phone = $_POST["rdacc_phone"];
$rdacc_mob = $_POST["rdacc_mob"];
$rdacc_email = $_POST["rdacc_email"];
$rdacc_quali = $_POST["rdacc_quali"];
$rdacc_amount = $_POST["rdacc_amount"];
$rdacc_branch = $_POST["rdacc_branch"];
//$rdacc_joining = @date('Y-m-d',strtotime(str_replace("/","-",$_POST["rdacc_joining"])));
$is_savacc = 0;
$is_curacc = 0;
$is_fdacc = 0;
$is_rdacc = 1;

$add_customer = $db->add_customer($rdacc_fname,$rdacc_mname,$rdacc_sname,$rdacc_sex,$rdacc_marriage,$rdacc_adhar,$rdacc_pan,$rdacc_dob,$rdacc_building,$rdacc_area,$rdacc_street,$rdacc_milestone,$rdacc_pincode,$rdacc_city,$rdacc_teh,$rdacc_dist,$rdacc_state,$rdacc_phone,$rdacc_mob,$rdacc_email,$rdacc_quali,$rdacc_amount,$rdacc_branch,$is_savacc,$is_curacc,$is_fdacc,$is_rdacc,$superuser/*,$savacc_joining*/);

if($add_customer){
	echo'<div class="alert alert-success alert-dismissable" id="add_rd_msg">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumb"></i>
			<strong> '.$rdacc_fname.' </strong> has been <strong>successfully </strong>added to Employee.
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