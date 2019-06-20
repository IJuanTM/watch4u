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
    include ("./database.php");
	
	// Maak input schoon van gekke tekens
	include ("./sanitize.php");

	// ############################################################################################## Variabellen maken
    // Maak variabelen van de input uit het formulier
	$datum = date('d-m-Y, H:i:s');
	$voornaam = ucwords(strtolower(sanitize($_POST["voornaam"])));
    $tussenvoegsel = strtolower(sanitize($_POST["tussenvoegsel"]));
    $achternaam = ucwords(strtolower(sanitize($_POST["achternaam"])));
    $email = strtolower(sanitize($_POST["email"]));
    $gebruikersnaam = gebruiker(sanitize($_POST["gebruikersnaam"]));
	$wachtwoord = "Geheim";
	$code = "";
	$wijzigingsdatum = "";
	$userrole = "klant";
	$adres = "";
	$postcode = "";
	$plaats = "";

	// ############################################################################################## Mag niet leeg zijn
	// Als datum leeg is geef dan de volgende melding
	if (empty($datum)){
		
		// Datum is leeg
		echo "Er is geen registreer datum aangemaakt";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../index.php?content=registreren");
	
	// Als voornaam leeg is geef dan de volgende melding
	} else if (empty($voornaam)) {
		
		// Voornaam is leeg
		echo "Waarom is je voornaam nog leeg?";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../index.php?content=registreren");

	// Als achternaam leeg is geef dan de volgende melding
	} else if (empty($achternaam)) {
		
		// Achternaam is leeg
		echo "Waarom is je achternaam nog leeg?";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../index.php?content=registreren");

	// Als email leeg is geef dan de volgende melding
	} else if (empty($email)) {
		
		// Email is leeg
		echo "Waarom is je email nog leeg?";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../index.php?content=registreren");

	// Als gebruikersnaam leeg is geef dan de volgende melding
	} else if (empty($gebruikersnaam)) {
		
		// Gebruikersnaam is leeg
		echo "Waarom is je gebruikersnaam nog leeg?";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../index.php?content=registreren");
	
	// ############################################################################################## Mag niet korter zijn
	// Als voornaam leeg is geef dan de volgende melding
	} else if (strlen($voornaam) < 3 ) {
		
		// Gebruikersnaam
		echo "Voornaam is geen 3 tekens of langer!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../index.php?content=registreren");
	
	// Als achternaam leeg is geef dan de volgende melding
	} else if (strlen($achternaam) < 3 ) {
		
		// Achternaam
		echo "Achternaam is geen 3 tekens of langer!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../index.php?content=registreren");
	
	// Als email leeg is geef dan de volgende melding
	} else if (strlen($email) < 6 ) {
		
		// Email
		echo "Email is geen 3 tekens of langer!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../index.php?content=registreren");
	
	// Als gebruikersnaam leeg is geef dan de volgende melding
	} else if (strlen($gebruikersnaam) < 8 ) {
		
		// Gebruikersnaam
		echo "Gebruikersnaam is niet langer dan 8 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../index.php?content=registreren");
	
	// ############################################################################################## Mag niet langer zijn
	// Als voornaam leeg is geef dan de volgende melding
	} else if (strlen($voornaam) > 30 ) {
		
		// Gebruikersnaam
		echo "Voornaam is langer dan 30 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../index.php?content=registreren");
	
	// Als tussenvoegsel leeg is geef dan de volgende melding
	} else if (strlen($tussenvoegsel) > 8 ) {
		
		// tussenvoegsel
		echo "tussenvoegsel is langer dan 8 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../index.php?content=registreren");
	
	// Als achternaam leeg is geef dan de volgende melding
	} else if (strlen($achternaam) > 30 ) {
		
		// Achternaam
		echo "Achternaam is langer dan 30 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../index.php?content=registreren");
	
	// Als email leeg is geef dan de volgende melding
	} else if (strlen($email) > 50 ) {
		
		// Email
		echo "Email is langer dan 50 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../index.php?content=registreren");
	
	// Als gebruikersnaam leeg is geef dan de volgende melding
	} else if (strlen($gebruikersnaam) > 30 ) {
		
		// Gebruikersnaam
		echo "Gebruikersnaam is langer dan 30 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../index.php?content=registreren");
	
	// ############################################################################################## Email en gebruikersnaam mogen niet eerder voorgekomen zijn
	// Als niets leeg is doe het volgende
	} else {
		
		// Maak een select-query om te controleren of het e-mailadres al bestaat.
		$sql1 = "SELECT * FROM `depri` WHERE `email` = '$email'";
		
		// Stuur de query af op de database
		$result1 = mysqli_query($conn, $sql1);
		
		// Maak een select-query om te controleren of het e-mailadres al bestaat.
		$sql2 = "SELECT * FROM `depri` WHERE `gebruikersnaam` = '$gebruikersnaam'";
		
		// Stuur de query af op de database
		$result2 = mysqli_query($conn, $sql2);
		
		// Als email al bestaat geef de volgende melding
		if (mysqli_num_rows($result1)) {
			
			// Deze email is al in gebruik
			echo 'Dit email adres is al bekend, log in of gebruik een ander email adres';
		
			// Refresh de pagina in 5 seconden, en ga naar de registreer pagina
			header("Refresh: 5; url=../index.php?content=registreren");
			
		// Als gebruikersnaam al bestaat geef de volgende melding
		} else if (mysqli_num_rows($result2)) {
			
			// Deze email is al in gebruik
			echo 'Deze gebruikersnaam is al bekend, log in of gebruik een andere gebruikersnaam';
		
			// Refresh de pagina in 5 seconden, en ga naar de registreer pagina
			header("Refresh: 5; url=../index.php?content=registreren");
		
		// ############################################################################################## gegevens wegschrijven naar de database en een mail versturen
		// Zijn email en gebruikersnaam nog niet bekend, doe dan het volgende.
		} else {
			
			// Gegevens in SQL string zetten
			$sql3 = "INSERT INTO `depri` (`id`,`gebruikersnaam`,`wachtwoord`,`voornaam`,`tussenvoegsel`,`achternaam`,`email`,`datum`,`code`,`wijzigingsdatum`,`userrole`,`adres`,`postcode`,`plaats`) VALUES (NULL,'$gebruikersnaam','$wachtwoord','$voornaam','$tussenvoegsel','$achternaam','$email','$datum','$code','$wijzigingsdatum','$userrole','$adres','$postcode','$plaats');";
			
			// Stuur de gegevens naar de database
			$result3 = mysqli_query($conn, $sql3);
			
			// ID opvragen uit de database (ID is gebruikersnaam uit de database)
			$id = mysqli_insert_id($conn);
			
			// If result3 is verstuurd, gebeurd het volgende
			if ($result3) {
				
				// De email opstelling zelf (met een van, en naar email adres en het onderwerp en het bericht zelf.)
				$to = $email;
				$subject = "Activatie link Depri.nl";
				$headers = "From: activatie@depri.nl \r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				$message = "<html><head><title>Depri Activatie</title></head><body style='background:#000000;padding:20px;color:#ffffff;'><img class='img' src='http://www.ridis.nl/depri/img/logo.svg' style='position: absolute; background:#000080; border-radius:10px; left: 0px; top: 0px;' height='250px' width='250px' /><br><h1 style='color:blue'>Beste ".$voornaam." ".$tussenvoegsel." ".$achternaam.",</h1><br>je hebt je geregistreerd bij Depri.nl.<br><br>Voor het bevestigen van jouw gegevens klik je op de activatie link:<br><a href='http://www.RiDis.nl/depri/index.php?content=wachtwoord&id=".$id."' style='color:#0000ff;font-size:14px;'>http://www.RiDis.nl/depri/index.php?content=wachtwoord&id=".$id."</a><br><br><br><b>Gegroet,<br><pre style='font-size:16px;'>	Medewerkers van Depri.nl</pre></b><br><img src='http://www.ridis.nl/depri/img/logo.svg' width='30px'>Depri.nl<br><br><span style='font-size:12px;'>Dit is een gegenereerd bericht en er kan niet op geantwoord worden.</span></body></html>";
				
				// Stuur de mail met de gegevens van hierboven
				mail($to, $subject, $message, $headers);
				
				// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
				header("Refresh: 0; url=../index.php?content=activatie");
				
			// Email niet verzonden, geef volgende melding
			} else {
				
				// Geef een bericht weer dat de email niet is verzonden
				echo 'De activatie mail is "NIET" verzonden, er is geen verbinding met de database.';
		
				// Refresh de pagina in 5 seconden, en ga naar de registreer pagina
				header("Refresh: 5; url=../index.php?content=registreren");
			}
		}
	}
?>