<?php
	session_start();
	include("includes/find_functions.php");
	$db = new DB_FUNCTIONS;
	
//checks whether form submitted or not
if(isset($_POST["submit"])){
		
	//sql prevention using addslashes function which returns a string with backslashes in front of predefined characters.	
	$username = addslashes($_POST["username"]);
	$password = addslashes($_POST["password"]);
	
	//sql prevention using mysqli_real_escape_string function which escapes special characters in a string for use in an SQL statement.
	$escapedname = mysqli_real_escape_string($db->db,$username);
	$escapedpwd = mysqli_real_escape_string($db->db,$password);
	
	//hashing(encryption) of password using sha256
	$hashedPwd = hash('sha256', $escapedpwd);
	
	//fetching superuser Data by username	
	$fetchasupebyusername = $db->fetchasupebyusername($escapedname);
	
	//fetching manager Data by username
	$fetchamngrbyusername = $db->fetchamngrbyusername($escapedname);
	
	//fetching staff Data by username
	$fetchastaffbyusername = $db->fetchastaffbyusername($escapedname);
		
	//fetching customer Data by username
	$fetchacustomerbyusername = $db->fetchacustomerbyusername($escapedname);
	
	//checking whether user is customer,staff,manager,superuser
	if($fetchasupebyusername){
		if($fetchasupebyusername["password"] === $hashedPwd){
			$_SESSION["fullname"]=$fetchasupebyusername["name"]; // Initializing fullname Session
			$_SESSION["user"]=$fetchasupebyusername["super_uid"]; // Initializing user Session
			$_SESSION["user_type"]="superuser"; // Initializing user type Session
			$_SESSION["login"]=1; // Initializing Login Session
			header("location:dashboard/dashboard.php"); // Redirecting To Super User Dashboard Page
		}
	}
	else if($fetchamngrbyusername){
		if($fetchamngrbyusername["password"]===$hashedPwd){
			$_SESSION["fullname"]=$fetchamngrbyusername["name"]; // Initializing Full name Session
			$_SESSION["branch"]=$fetchamngrbyusername["branch"]; // Initializing Branch Session
			$_SESSION["user"]=$fetchamngrbyusername["mngr_uid"]; // Initializing user Session
			$_SESSION["user_type"]="manager"; // Initializing User Type Session
			$_SESSION["login"]=1; // Initializing Login Session
			header("location:dashboard/dashboard.php"); // Redirecting To Manager Dashboard Page
		}
	}
	else if($fetchastaffbyusername){
		if($fetchastaffbyusername["password"]===$hashedPwd){
			$_SESSION["fullname"]=$fetchastaffbyusername["first_name"]." ".$fetchastaffbyusername["middle_name"]." ".$fetchastaffbyusername["sir_name"]; // Initializing Full name Session
			$_SESSION["branch"]=$fetchastaffbyusername["branch"]; // Initializing Branch Session
			$_SESSION["user"]=$fetchastaffbyusername["emp_uid"]; // Initializing user Session 
			$_SESSION["user_type"]="employee"; // Initializing User Type Session
			$_SESSION["login"]=1; // Initializing Login Session
			header("location:dashboard/dashboard.php"); // Redirecting Staff Dashboard Page
		}
	}
	else if($fetchacustomerbyusername){
		if($fetchacustomerbyusername["password"]===$hashedPwd){
			$_SESSION["fullname"]=$fetchacustomerbyusername["first_name"]." ".$fetchacustomerbyusername["middle_name"]." ".$fetchacustomerbyusername["sir_name"]; // Initializing Full name Session
			$_SESSION["branch"]=$fetchacustomerbyusername["branch"]; //  Initializing Branch Session
			$_SESSION["user"]=$fetchacustomerbyusername["customer_uid"]; // Initializing user Session
			$_SESSION["user_type"]="customer"; // Initializing User Type Session
			$_SESSION["login"]=1; // Initializing Login Session
			header("location:dashboard/dashboard.php"); // Redirecting Customer Dashboard Page
		}			
	}
}
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Index Page</title>
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
		<link rel="stylesheet" href="website/web_asset/header.css"/>
		<!--font-awesome-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!--Bootstrap CSS-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<style>
				.errorTxt{
				color:red;
			}
		</style>
	</head>
	<body>
		<!--fetching data from header.php-->
		<?php include("website/header/header.php");?>
		
		<!--fetching data using ajax-->
		<main id="content"> </main>
		
		<div id="modalDiv"></div>
		
		<!--fetching data from footer.php-->
		<?php include("website/footer/footer.php");?>
		

		<!--JQuery min.js file-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!--Bootstrap min.js file-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
		
		<script>
			$(document).ready(function(){
				
				get_data_home();
				
			});
			
			function myFunction() {
				var x = document.getElementById("myTopnav");
				if (x.className === "topnav") {
					x.className += " responsive";
				} else {
					x.className = "topnav";
				}
			}
			
			function showpwd(){
				$("#regPwd").attr('type', 'text');	
				$("#forPwd").attr('type', 'text');	
				$("#showRegPwd").attr('onclick', 'hidepwd();');	
				$("#showForPwd").attr('onclick', 'hidepwd();');	
				$("#showRegPwd").text(' Hide ');		
				$("#showForPwd").text(' Hide ');		
			}
			
			function hidepwd(){
				$("#regPwd").attr('type', 'password');	
				$("#forPwd").attr('type', 'password');	
				$("#showRegPwd").attr('onclick', 'showpwd();');	
				$("#showForPwd").attr('onclick', 'showpwd();');	
				$("#showRegPwd").text(' Show ');	
				$("#showForPwd").text(' Show ');	
			}
			
			function ontp(){
				var userEmail = $('#userEmail').val(); 
					$("#otp").html("Processing...");
					$.ajax({
						type:'POST',
						url:'website/registration/gen_otp.php',
						data: {
								userEmail : userEmail,
							},
						success:function(result){
							$("#regFormDiv").html(result);
							$("#otpAlertDiv").fadeOut(10000);
						}	
					});	
			}
			
			function ontp2(){
				var forEmail = $('#forEmail').val(); 
					$("#otp2").html("Processing...");
					$.ajax({
						type:'POST',
						url:'website/forgot/forgot_otp.php',
						data: {
								forEmail : forEmail,
							},
						success:function(result){
							$("#forFormDiv").html(result);
							$("#forAlertDiv").fadeOut(10000);
						}	
				});
			}
			
			function otpauth(){
				$("#auth").val("Authenticating...");
				var userEmail = $('#userEmail').val(); 
				var regOtp = $('#regOtp').val(); 
				$.ajax({
						type:'POST',
						url:'website/registration/authe_reg.php',
						data: {
								userEmail : userEmail,
								regOtp : regOtp,
							},
						success:function(result){
							$("#regFormDiv").html(result);
						}	
					});
			}
			
			function otpauth2(){
				$("#auth2").val("Authenticating...");
				var forEmail = $('#forEmail').val(); 
				var forOtp = $('#forOtp').val(); 
				$.ajax({
						type:'POST',
						url:'website/forgot/auth_forgot.php',
						data: {
								forEmail : forEmail,
								forOtp : forOtp,
							},
						success:function(result){
							$("#forFormDiv").html(result);
							$("#forAlertDiv").fadeOut(10000);
						}	
					});
			}
			
			function check_user(){
				$("#auth").val("<i class=\"fa fa-spinner fa-spin\" style=\"font-size:24px\"></i>");
				var userEmail = $('#userEmail').val(); 
				var regUser = $('#regUser').val(); 
					$.ajax({
						type:'POST',
						url:'website/registration/check_username.php',
						data: {
								userEmail : userEmail,
								regUser : regUser,
							},
						success:function(result){
							$("#regFormDiv").html(result);
						}	
					});
			}
			
			
			function reg(){	
				$('#register').val("Processing...");
				var userEmail = $('#userEmail').val();		
				var regUser = $('#regUser').val();		
				var regPwd = $('#regPwd').val();		
					$.ajax({
						type:'POST',
						url:'website/registration/register.php',
						data: {
								userEmail : userEmail,
								regUser : regUser,
								regPwd : regPwd,
							},
						success:function(result){
							$("#regFormDiv").html(result);
							$("#regAlertDiv").fadeOut(8000);
							setTimeout("$('#myModal2').modal('hide');",8000);
						}	
					});
			}
			
			function new_password(){	
				$('#register').val("Processing...");
				var forEmail = $('#forEmail').val();		
				var forUser = $('#forUser').val();		
				var forPwd = $('#forPwd').val();		
					$.ajax({
						type:'POST',
						url:'website/forgot/new_password.php',
						data: {
								forEmail : forEmail,
								forUser : forUser,
								forPwd : forPwd,
							},
						success:function(result){
							$("#forFormDiv").html(result);
							$("#forAlertDiv").fadeOut(8000);
							setTimeout("$('#myModal2').modal('hide');",8000);
						}	
					});
			}
			
			function change_reg(){
				$("#otp").html(" Next <span class=\"glyphicon glyphicon-circle-arrow-right\"></span>");
				$("#otp").attr("onclick","check_user();");
				$("#regUser").removeAttr("readonly");
				$("#otp").removeAttr("disabled");
				$("#regPwd").attr("readonly", "readonly");
				$("#showPwd").attr("readonly", "readonly");
				$("#register").attr("readonly", "readonly");
				$("#change").hide();
			}
				
			function for_module(){
				$("#l5").html(" Forgot Password ");	
				$("#forFormDiv").show();	
				$("#regFormDiv").hide();	
				$("#logFormDiv").hide();	
			}
			
			function log_module(){
				$.ajax({
					type:'POST',
					url:'website/login/login_form.php',
					success:function(result){
						$("#modalDiv").html(result);
						$('#myModal').modal('show');
						$("#l5").html(" Login ");	
						$("#regFormDiv").hide();	
						$("#logFormDiv").show();	
						$("#forFormDiv").hide();
					}	
				});
			}
			
			function log_module2(){
				$("#l5").html(" Login ");	
				$("#regFormDiv").hide();	
				$("#logFormDiv").show();	
				$("#forFormDiv").hide();
			}

			function reg_module(){
				$.ajax({
					type:'POST',
					url:'website/registration/reg_form.php',
					success:function(result){
						$("#modalDiv").html(result);
						$('#myModal').modal('show');
					}	
				});
			}
			
			function get_data_home(){
				$.ajax({
					type:'POST',
					url:'website/web_pages/home.php',
					success:function(result){
						$("#content").html(result);
					}	
				});
			}
			
			function get_loan_services(){
				$.ajax({
					type:'POST',
					url:'website/web_pages/loan_services.php',
					success:function(result){
						$("#content").html(result);
					}	
				});
			}
			
			function get_card_services(){
				$.ajax({
					type:'POST',
					url:'website/web_pages/card_services.php',
					success:function(result){
						$("#content").html(result);
					}	
				});
			}
			
			function get_other_services(){
				$.ajax({
					type:'POST',
					url:'website/web_pages/other_services.php',
					success:function(result){
						$("#content").html(result);
					}	
				});
			}
			
			function get_data_career(){
				$.ajax({
					type:'POST',
					url:'website/web_pages/career.php',
					success:function(result){
						$("#content").html(result);
					}	
				});
			}
			
			function get_help(){
				$.ajax({
					type:'POST',
					url:'website/web_pages/help.php',
					success:function(result){
						$("#content").html(result);
					}	
				});
			}		
		</script>
		<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="application/javascript"></script>
	</body>
</html>