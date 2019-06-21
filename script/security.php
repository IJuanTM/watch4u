<?php

session_start();

if (isset($_SESSION["iduser"])) {

	$id = $_SESSION["iduser"];
	$firstname = $_SESSION["firstname"];
	$infix = $_SESSION["infix"];
	$lastname = $_SESSION["lastname"];
	$email = $_SESSION["email"];
	$password = $_SESSION["password"];
	$userrole = $_SESSION["userrole"];
	$address = $_SESSION["adres"];
	$postalcode = $_SESSION["postcode"];
	$city = $_SESSION["plaats"];
	$phone = $_SESSION["phone"];
	$date = $_SESSION["date"];
} else {
	session_destroy();
	die();
	header("Refresh: 3; url=./index.php");
	exit();
}
