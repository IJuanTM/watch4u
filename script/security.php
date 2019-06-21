<?php
	// Start session met variabellen (Voor 20 Min)
	session_start();
	
	// Als session is gestart maak dan variabellen
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
		
		// Mocht er toch een (slechte) sessie zijn stop deze
		session_destroy();
		
		// Verbreek de verbinding met de database
		die();

		// Niet ingelogd tekst
		header("Refresh: 3; url=./index.php");
		
		// stop dit script en alle scripten die nog volgen na dit script
		exit();
		
	}
?>