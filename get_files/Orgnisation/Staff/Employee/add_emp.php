<?php

@session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
include('../../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];
//$myorgid=$_SESSION['orgid'];

$emp_fname =  $_POST["emp_fname"];
$emp_mname =  $_POST["emp_mname"];
$emp_sname =  $_POST["emp_sname"];
$emp_sex =  $_POST["emp_sex"];
$emp_marriage =  $_POST["emp_marriage"];
$emp_adhar =  $_POST["emp_adhar"];
$emp_pan =  $_POST["emp_pan"];
$emp_dob =  @date('Y-m-d',strtotime(str_replace("/","-",$_POST["emp_dob"])));
$emp_building =  $_POST["emp_building"];
$emp_area =  $_POST["emp_area"];
$emp_street =  $_POST["emp_street"];
$emp_milestone =  $_POST["emp_milestone"];
$emp_pincode =  $_POST["emp_pincode"];
$emp_city =  $_POST["emp_city"];
$emp_teh =  $_POST["emp_teh"];
$emp_dist =  $_POST["emp_dist"];
$emp_state =  $_POST["emp_state"];
$emp_phone =  $_POST["emp_phone"];
$emp_mob =  $_POST["emp_mob"];
$emp_email =  $_POST["emp_email"];
$emp_quali =  $_POST["emp_quali"];
$emp_branch =  $_POST["emp_branch"];
$emp_department =  $_POST["emp_department"];
$emp_designation =  $_POST["emp_designation"];
$emp_hired_date =  @date('Y-m-d',strtotime(str_replace("/","-",$_POST["emp_hired_date"])));

$add_employe = $db->add_employe($emp_fname,$emp_mname,$emp_sname,$emp_sex,$emp_marriage,$emp_adhar,$emp_pan,$emp_dob,$emp_building,$emp_area,$emp_street,$emp_milestone,$emp_pincode,$emp_city,$emp_teh,$emp_dist,$emp_state,$emp_phone,$emp_mob,$emp_email,$emp_quali,$emp_branch,$emp_department,$emp_designation,$emp_hired_date,$superuser);

if($add_employe){
	echo'<div class="alert alert-success alert-dismissable" id="add_emp_msg">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumb"></i>
			<strong> '.$emp_fname.' '.$emp_mname.' '.$emp_sname.' </strong> has been <strong>successfully </strong>added to Employee.
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