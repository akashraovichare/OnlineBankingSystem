<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../includes/find_functions.php');
define('DATE_FORMAT', 'DD-MM-YYYY');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];

$fdacc_fname = $_POST["fdacc_fname"];
$fdacc_mname = $_POST["fdacc_mname"];
$fdacc_sname = $_POST["fdacc_sname"];
$fdacc_sex = $_POST["fdacc_sex"];
$fdacc_marriage = $_POST["fdacc_marriage"];
$fdacc_adhar = $_POST["fdacc_adhar"];
$fdacc_pan = $_POST["fdacc_pan"];
$fdacc_dob = @date('Y-m-d',strtotime(str_replace("/","-",$_POST["fdacc_dob"])));
$fdacc_building = $_POST["fdacc_building"];
$fdacc_area = $_POST["fdacc_area"];
$fdacc_street = $_POST["fdacc_street"];
$fdacc_milestone = $_POST["fdacc_milestone"];
$fdacc_pincode = $_POST["fdacc_pincode"];
$fdacc_city = $_POST["fdacc_city"];
$fdacc_teh = $_POST["fdacc_teh"];
$fdacc_dist = $_POST["fdacc_dist"];
$fdacc_state = $_POST["fdacc_state"];
$fdacc_phone = $_POST["fdacc_phone"];
$fdacc_mob = $_POST["fdacc_mob"];
$fdacc_email = $_POST["fdacc_email"];
$fdacc_quali = $_POST["fdacc_quali"];
$fdacc_amount = $_POST["fdacc_amount"];
$fdacc_branch = $_POST["fdacc_branch"];
//$fdacc_joining = @date('Y-m-d',strtotime(str_replace("/","-",$_POST["fdacc_joining"])));
$is_savacc = 0;
$is_curacc = 0;
$is_fdacc = 1;
$is_rdacc = 0;

$add_customer = $db->add_customer($fdacc_fname,$fdacc_mname,$fdacc_sname,$fdacc_sex,$fdacc_marriage,$fdacc_adhar,$fdacc_pan,$fdacc_dob,$fdacc_building,$fdacc_area,$fdacc_street,$fdacc_milestone,$fdacc_pincode,$fdacc_city,$fdacc_teh,$fdacc_dist,$fdacc_state,$fdacc_phone,$fdacc_mob,$fdacc_email,$fdacc_quali,$fdacc_amount,$fdacc_branch,$is_savacc,$is_curacc,$is_fdacc,$is_rdacc,$superuser/*,$savacc_joining*/);

if($add_customer){
	echo'<div class="alert alert-success alert-dismissable" id="add_fd_msg">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumb"></i>
			<strong> '.$fdacc_fname.' </strong> has been <strong>successfully </strong>added to Employee.
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