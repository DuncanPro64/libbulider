<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("Location: adminlogin.php");
} else if (isset($_SESSION['user'])!="") {
	header("Location: ../User/homepage.php");
}

	if("username"){
	session_destroy();
	unset($_SESSION['user']['username']);
	include'adminlogin.php';
	}
?>
