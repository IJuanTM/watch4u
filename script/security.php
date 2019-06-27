<?php
	session_start();
/*
	echo 'session:<br>'
	. $_SESSION["iduser"] . ' - ID<br>'
	. $_SESSION["firstname"] . ' - firstname<br>'
	. $_SESSION["infix"] . ' - infix<br>'
	. $_SESSION["lastname"] . ' - lastname<br>'
	. $_SESSION["email"] . ' - email<br>'
	. $_SESSION["password"] . ' - password<br>'
	. $_SESSION["phone"] . ' - phone<br>'
	. $_SESSION["address"] . ' - address<br>'
	. $_SESSION["postalcode"] . ' - postalcode<br>'
	. $_SESSION["city"] . ' - city<br>'
	. $_SESSION["userrole"] . ' - userrole<br>'
	. $_SESSION["date"] . ' - date<br>'
	. $_SESSION["code"] . ' - code<br>';
*/
if (isset($_SESSION["userrole"])) {

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
} else {
	session_destroy();
	die();
	location("Refresh: 0; url=./index.php?content=homepage");
}

?>
