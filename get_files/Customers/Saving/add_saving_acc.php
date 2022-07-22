<?php
@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];

$savacc_fname =  $_POST["savacc_fname"];
$savacc_mname =  $_POST["savacc_mname"];
$savacc_sname =  $_POST["savacc_sname"];
$savacc_sex =  $_POST["savacc_sex"];
$savacc_marriage =  $_POST["savacc_marriage"];
$savacc_adhar =  $_POST["savacc_adhar"];
$savacc_pan =  $_POST["savacc_pan"];
$savacc_dob =  @date('Y-m-d',strtotime(str_replace("/","-",$_POST["savacc_dob"])));
$savacc_building =  $_POST["savacc_building"];
$savacc_area =  $_POST["savacc_area"];
$savacc_street =  $_POST["savacc_street"];
$savacc_milestone =  $_POST["savacc_milestone"];
$savacc_pincode =  $_POST["savacc_pincode"];
$savacc_city =  $_POST["savacc_city"];
$savacc_teh =  $_POST["savacc_teh"];
$savacc_dist =  $_POST["savacc_dist"];
$savacc_state =  $_POST["savacc_state"];
$savacc_phone =  $_POST["savacc_phone"];
$savacc_mob =  $_POST["savacc_mob"];
$savacc_email =  $_POST["savacc_email"];
$savacc_quali =  $_POST["savacc_quali"];
$savacc_amount =  $_POST["savacc_amount"];
$savacc_branch =  $_POST["savacc_branch"];
//$savacc_joining =  @date('Y-m-d',strtotime(str_replace("/","-",$_POST["savacc_joining"])));
$is_savacc = 1;
$is_curacc = 0;
$is_fdacc = 0;
$is_rdacc = 0;

$add_customer = $db->add_customer($savacc_fname,$savacc_mname,$savacc_sname,$savacc_sex,$savacc_marriage,$savacc_adhar,$savacc_pan,$savacc_dob,$savacc_building,$savacc_area,$savacc_street,$savacc_milestone,$savacc_pincode,$savacc_city,$savacc_teh,$savacc_dist,$savacc_state,$savacc_phone,$savacc_mob,$savacc_email,$savacc_quali,$savacc_amount,$savacc_branch,$is_savacc,$is_curacc,$is_fdacc,$is_rdacc,$superuser/*,$savacc_joining*/);

if($add_customer){
	echo'<div class="alert alert-success alert-dismissable"id="add_saving_msg">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumb"></i>
			<strong> '.$savacc_fname.' </strong> has been <strong>successfully </strong>added to Saving Account.
		</div>';	
}
else{
	echo'<div class="alert alert-danger alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>&nbsp;
			<strong>Error</strong> Account not added!
		</div>';	
}
?>