<?php
@session_start();
if($_SESSION["login"] == "1")
{
echo'
<div class="content">
	<div class="container-fluid">
		<h3 class="animated fadeInLeft effect1" style="text-align:center;font-family:Open Sans;color:#414a4c;display:inline-block;margin-left:-20px;padding:8px;">Welcome, '.$_SESSION["fullname"].'</h3>
		<div class="col-md-12 " style="margin-top:20px;padding-top:20px;background-color:#E6EFF3;">
			<div class="col-md-3">
				<center><img src="../get_files/Profile/Profile_Pic/face.jpg" id="imgProfile" style="width: 180px; height: 230px; margin-top:30px;margin-right:15px;" class="img-thumbnail"/></center>
			</div>
			<div class="col-md-8" style="background-color:white;">
				<h2 style="font-weight:bold;">Akash Vichare</h2>
				<h4 style="font-weight:bold;">Rs. 2022</h4>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<td><b> Account Number </b></td>
						<td><u> XXXXX-23433-XXX </u></td>
					</tr>
					<tr>
						<td><b> Account Branch </b> </td>
						<td><u> Mulund East </u></td>
					</tr>
					<tr>
						<td><b> Branch Code</b> </td>
						<td><u> 150 </u></td>
					</tr>
					<tr>
						<td><b> Account Type</b> </td>
						<td><u> Savings </u></td>
					</tr>
					<tr>
						<td><b> ISBN Number </b> </td>
						<td><u> BKDN150 </u></td>
					</tr>
				</table>
			</div>
			<div class="col-md-1" ></div>
		</div>
	</div>
</div>';
}
?>