<?php
/*
 * Copyright (C) 2009, 2019 RiDi Cage Productions, Inc.
 * Amersfoort, Utrecht, The netherlands
 * 
 * Everyone is permitted to copy and distribute verbatim copies
 * of this license document, but changing it is not allowed.
 
 * Licensed under MIT ( http://www.ridis.nl/depri/index.php?content=license )
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
		header("Refresh: 3; url=./index.php?content=inloggen");
		
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
			$_SESSION["id"] = $record["id"];
			$_SESSION["gebruikersnaam"] = $record["gebruikersnaam"];
			$_SESSION["voornaam"] = $record["voornaam"];
			$_SESSION["tussenvoegsel"] = $record["tussenvoegsel"];
			$_SESSION["achternaam"] = $record["achternaam"];
			$_SESSION["email"] = $record["email"];
			$_SESSION["datum"] = $record["datum"];
			$_SESSION["userrole"] = $record["userrole"];
			$_SESSION["kleur"] = $record["kleur"];
			$_SESSION["kleurthema"] = $record["kleurthema"];
			$_SESSION["adres"] = $record["adres"];
			$_SESSION["postcode"] = $record["postcode"];
			$_SESSION["plaats"] = $record["plaats"];
			// $_SESSION["hoi"] = "Ik zeg Hoi!";

			// Switch per userrole, stuur de gebruiker door naar:
			switch ($userrole) {
				case 'klant':
				header("Refresh: 0; url=../log.php?content=profiel");
			break;
				case 'marketing':
				header("Refresh: 0; url=../log.php?content=profiel");
			break;
				case 'admin':
				header("Refresh: 0; url=../log.php?content=profiel");
			break;
				case 'root':
				header("Refresh: 0; url=../log.php?content=profiel");
			break;
				default:
				
				header("Refresh: 0; url=../index.php?content=watishet");
			break;
			}
				
		} else {
	
			// Melding van fout wachtwoord
			echo "Het opgegeven wachtwoord is niet bekend, probeer het opnieuw";
			
			// Locatie
			header("Refresh: 3; url=../index.php?content=inloggen");
		}
		
	} else {
		
		// gebruikersnaam bestaat niet
		echo "Opgegeven gebruikersnaam is onbekend, of gegevens zijn niet ingevuld";
			
		// Locatie
		header("Refresh: 5; url=../index.php?content=inloggen");
	}
?>