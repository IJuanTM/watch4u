<?php

include("./connect_db.php");
include("./sanitize.php");

$email = sanitize($_POST["email"]);
$password = sanitize($_POST["password"]);
$sql = "SELECT * FROM `user` WHERE `email` = '$email'";
$result = mysqli_query($conn, $sql);

if (empty($email) && empty($password)) {
	echo "Er is een van de velden niet ingevuld, probeer het opnieuw";
	header("Refresh: 3; url=../index.php?content=login");
} else if (mysqli_num_rows($result) == 1) {

	$record = mysqli_fetch_assoc($result);
	$hash = $record["password"];

	if (password_verify($password, $hash)) {

		$userrole = $record["userrole"];
		session_start();

		$_SESSION["iduser"] = $record["iduser"];
		$_SESSION["firstname"] = $record["firstname"];
		$_SESSION["infix"] = $record["infix"];
		$_SESSION["lastname"] = $record["lastname"];
		$_SESSION["email"] = $record["email"];
		$_SESSION["password"] = $record["password"];
		$_SESSION["phone"] = $record["phone"];
		$_SESSION["address"] = $record["address"];
		$_SESSION["postalcode"] = $record["postalcode"];
		$_SESSION["city"] = $record["city"];
		$_SESSION["userrole"] = $record["userrole"];

		switch ($userrole) {
			case 'Customer':
				header("Refresh: 0; url=../index.php?content=profiel");
				break;
			case 'Admin':
				header("Refresh: 0; url=../index.php?content=profiel");
				break;
			case 'Root':
				header("Refresh: 0; url=../index.php?content=profiel");
				break;
			default:
				header("Refresh: 0; url=../index.php?content=homepage");
				break;
		}
	} else {
		echo "Het opgegeven wachtwoord is niet bekend, probeer het opnieuw";
		header("Refresh: 3; url=../index.php?content=login");
	}
} else {
	echo "Opgegeven gebruikersnaam is onbekend, of gegevens zijn niet ingevuld";
	header("Refresh: 5; url=../index.php?content=login");
}
