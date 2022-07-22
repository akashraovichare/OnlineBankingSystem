<?php
session_start();
	if(isset($_SESSION['fullname'])){
		unset($_SESSION['fullname']);
	}
	if(isset($_SESSION['login'])){
		unset($_SESSION['login']);
	}
	session_destroy();echo "<script>document.location='../index.php'</script>";
?>