<?php
/*
 * Copyright (C) 2009, 2019 RiDi Cage Productions, Inc.
 * Amersfoort, Utrecht, The netherlands
 * 
 * Everyone is permitted to copy and distribute verbatim copies
 * of this license document, but changing it is not allowed.
 
 * Licensed under MIT ( https://www.ridis.nl/page/index.php?content=license )
 */
	
	// Maak contact met de mysql-server en de database
    include ("./connect_db.php");
	
	// Maak input schoon van gekke tekens
	include ("./sanitize.php");
	
	// Variabellen uit het formulier
	$email = sanitize($_POST["email"]);
	$password = sanitize($_POST["password"]);
	
	// Maak een select-query om te controleren of de gebruikersnaam al bestaat.
	$sql = "SELECT * FROM `user` WHERE `email` = '$email'";

	// Maak een select-query om te controleren of de gebruiker al bestaat.
	$result = mysqli_query($conn, $sql);
	
	// Als een van de velden leeg is, of allebei de velden leeg zijn.
	if (empty($email) && empty($password)){
		
		// Melding van lege velden
		echo "Er is een van de velden niet ingevuld, probeer het opnieuw";
		
		// Locatie
		header("Refresh: 3; url=../index.php?content=login");
		
	} else if (mysqli_num_rows($result) == 1 ) {

		//gebruikersnaam bestaat, maak er een aray van
		$record = mysqli_fetch_assoc($result);
		
		// Zet wachtwoord uit database om naar variabel
		$hash = $record["password"];
		
		// als encrypt wachtwoord klopt met ingevulde wachtwoord
		if (password_verify ($password, $hash)) {
				
			// Selecteer userrole uit de database
			$userrole = $record["userrole"];
			
			// start de sessie met de volgende variabellen
			session_start();

			// variabellen
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

			// Switch per userrole, stuur de gebruiker door naar:
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
	
			// Melding van fout wachtwoord
			echo "Het opgegeven wachtwoord is niet bekend, probeer het opnieuw";
			
			// Locatie
			header("Refresh: 3; url=../index.php?content=login");
		}
		
	} else {
		
		// gebruikersnaam bestaat niet
		echo "Opgegeven gebruikersnaam is onbekend, of gegevens zijn niet ingevuld";
			
		// Locatie
		header("Refresh: 5; url=../index.php?content=login");
	}
?>