<?php
session_start();
include('../../../../includes/find_functions.php');
$db = new DB_FUNCTIONS();
$superuser = $_SESSION["fullname"];

$employee_uid = $_POST["employee_uid"];
$updt_emp_fname = $_POST["updt_emp_fname"];
$updt_emp_mname = $_POST["updt_emp_mname"];
$updt_emp_sname = $_POST["updt_emp_sname"];
$updt_emp_sex = $_POST["updt_emp_sex"];
$updt_emp_marriage = $_POST["updt_emp_marriage"];
$updt_emp_adhar = $_POST["updt_emp_adhar"];
$updt_emp_pan = $_POST["updt_emp_pan"];
$updt_emp_dob = @date('Y-m-d',strtotime(str_replace("/","-",$_POST["updt_emp_dob"])));
$updt_emp_building = $_POST["updt_emp_building"];
$updt_emp_area = $_POST["updt_emp_area"];
$updt_emp_street = $_POST["updt_emp_street"];
$updt_emp_milestone = $_POST["updt_emp_milestone"];
$updt_emp_pincode = $_POST["updt_emp_pincode"];
$updt_emp_city = $_POST["updt_emp_city"];
$updt_emp_teh = $_POST["updt_emp_teh"];
$updt_emp_dist = $_POST["updt_emp_dist"];
$updt_emp_state = $_POST["updt_emp_state"];
$updt_emp_phone = $_POST["updt_emp_phone"];
$updt_emp_mob = $_POST["updt_emp_mob"];
$updt_emp_email = $_POST["updt_emp_email"];
$updt_emp_quali = $_POST["updt_emp_quali"];
$updt_emp_branch = $_POST["updt_emp_branch"];
$updt_emp_department = $_POST["updt_emp_department"];
$updt_emp_designation = $_POST["updt_emp_designation"];
$updt_emp_hired_date = @date('Y-m-d',strtotime(str_replace("/","-",$_POST["updt_emp_hired_date"])));

$update_emp = $db->update_emp($employee_uid,$updt_emp_fname,$updt_emp_mname,$updt_emp_sname,$updt_emp_sex,$updt_emp_marriage,$updt_emp_adhar,$updt_emp_pan,$updt_emp_dob,$updt_emp_building,$updt_emp_area,$updt_emp_street,$updt_emp_milestone,$updt_emp_pincode,$updt_emp_city,$updt_emp_teh,$updt_emp_dist,$updt_emp_state,$updt_emp_phone,$updt_emp_mob,$updt_emp_email,$updt_emp_quali,$updt_emp_branch,$updt_emp_department,$updt_emp_designation,$updt_emp_hired_date,$superuser);

if($update_emp){
    echo'<div style="font-size:16px;" class="alert alert-success alert-dismissable">
			<a class="panel-close close" data-dismiss="alert">×</a> 
			<i class="fa fa-thumbs-o-up"></i>
			&nbsp;<strong>Employee Details</strong> are <strong>successfully</strong> updated.
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