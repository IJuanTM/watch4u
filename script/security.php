<?php
	
	session_start();

	if (isset($_SESSION["iduser"])) {

		$iduser = $_SESSION["iduser"];
		$firstname = $_SESSION["firstname"];
		$infix = $_SESSION["infix"];
		$lastname = $_SESSION["lastname"];
		$email = $_SESSION["email"];
		$password = $_SESSION["password"];
		$phone = $_SESSION["phone"];
		$address = $_SESSION["address"];
		$postalcode = $_SESSION["postalcode"];
		$city = $_SESSION["city"];
		$userrole = $_SESSION["userrole"];
		$date = $_SESSION["date"];
		$code = $_SESSION["code"];
	}/* else {
		session_destroy();
		die();
		location ("Refresh: 3; url=../index.php");
		exit();
	}*/
?>