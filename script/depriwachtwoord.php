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
	$id =  sanitize($_POST["id"]);
	$email = sanitize($_POST["email"]);
	$wachtwoord1 = wachtwoord_check(sanitize($_POST["wachtwoord1"]));
	$wachtwoord2 = sanitize($_POST["wachtwoord2"]);
	
	// ############################################################################################## Controle wachtwoord
	// Maak een select-query om te controleren of het gebruikersnaam al bestaat.
	$sql1 = "select * from `depri` where (`id` = '$id') && (`wachtwoord` != 'Geheim');";

	// Stuur de query (sql string hierboven) af op de database.
	$result1 = mysqli_query($conn, $sql1);
	
	// Als er één resultaat is, geef dan aan, wachtwoord bestaat al
	if (mysqli_num_rows($result1) == 1) {
		
		// Wachtwoord mag niet veranderd worden als dit al het huidige wachtwoord is
		echo "Je hebt je wachtwoord al eerder veranderd.";
		
		// Refresh de pagina in 3 seconden, en ga naar de wachtwoord verander pagina
		header("Refresh: 3; url=http://www.ridis.nl/depri/index.php?content=wachtwoord&id=$id");
	
	// Als id leeg is geef dan de volgende melding
	} else if ($wachtwoord1 == "Geheim"){
		
		// Refresh de pagina in 3 seconden, en ga naar de wachtwoord verander pagina
		header("Refresh: 0; url=http://www.ridis.nl/depri/index.php?content=activatie");
	
	// Als id leeg is geef dan de volgende melding
	} else if ($wachtwoord1 != $wachtwoord2){
		
		// Wachtwoorden komen niet overeen met elkaar
		echo "Wachtwoorden komen niet overeen met elkaar.";
		
		// Refresh de pagina in 3 seconden, en ga naar de wachtwoord verander pagina
		header("Refresh: 3; url=http://www.ridis.nl/depri/index.php?content=wachtwoord&id=$id");
	
	// ############################################################################################## Mag niet leeg zijn
	// Als id leeg is geef dan de volgende melding
	} else if (empty($id)){
		
		// ID is leeg
		echo "Er is geen registreer identiteit aangemaakt.<br>Klik opnieuw op de link uit de mail, of registreer je opnieuw.";
		
		// Refresh de pagina in 5 seconden, en ga naar de wachtwoord verander pagina
		header("Refresh: 5; url=http://www.ridis.nl/depri/index.php?content=wachtwoord&id=$id");
	
	// Als Wachtwoord1 leeg is geef dan de volgende melding
	} else if (empty($wachtwoord1)) {
		
		// Wachtwoord1 is leeg
		echo "Waarom is je 1e wachtwoord nog leeg?";
		
		// Refresh de pagina in 3 seconden, en ga naar de wachtwoord verander pagina
		header("Refresh: 3; url=http://www.ridis.nl/depri/index.php?content=wachtwoord&id=$id");
	
	// Als Wachtwoord2 leeg is geef dan de volgende melding
	} else if (empty($wachtwoord2)) {
		
		// Wachtwoord2 is leeg
		echo "Waarom is je 2e wachtwoord nog leeg?";
		
		// Refresh de pagina in 3 seconden, en ga naar de wachtwoord verander pagina
		header("Refresh: 3; url=http://www.ridis.nl/depri/index.php?content=wachtwoord&id=$id");

	// ############################################################################################## Mag niet korter of langer zijn
	// Als wachtwoord1 kort is geef dan de volgende melding
	} else if (strlen($wachtwoord1) < 8 ) {
		
		// wachtwoord1
		echo "Wachtwoord is korter dan 8 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=http://www.ridis.nl/depri/index.php?content=wachtwoord&id=$id");
		
	// Als wachtwoord1 lang is geef dan de volgende melding
	} else if (strlen($wachtwoord1) > 30 ) {
		
		// wachtwoord1
		echo "Wachtwoord is langer dan 30 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=http://www.ridis.nl/depri/index.php?content=wachtwoord&id=$id");
		
	// ############################################################################################## Versturen naar database en emal verzenden
	// Als alles goed is en ingevult is dan gebeurd het volgende
	} else {
		
		// Maak een hash code van je wachtwoord
		$blowfish_wachtwoord = password_hash($wachtwoord1, PASSWORD_BCRYPT);
		
		// Zet wachtwoord in een SQL string
		$sql2 = "UPDATE `depri` 
				SET `wachtwoord` = '$blowfish_wachtwoord'
				WHERE `id` = '$id';";

		// Stuur de query (sql string hierboven) af op de database.
		$result2 = mysqli_query($conn, $sql2);
		
		// If result3 is verstuurd, gebeurd het volgende
		if ($result2) {
			
			// Zoek email uit de database met id nummer
			$sql3 = "select email, voornaam, tussenvoegsel, achternaam, gebruikersnaam from `depri` where (`id` = '$id');";

			// Dit is de functie die de query $sql via de verbinding $conn naar de database stuurt.
			$result3 = mysqli_query($conn, $sql3);
			
			// While geeft het email adres uit de database weer
			while ($gegeven = mysqli_fetch_assoc($result3)) {
			
				// De email opstelling zelf (met een van, en naar email adres en het onderwerp en het bericht zelf.)
				$to = $gegeven["email"];
				$subject = "Wachtwoord is gewijzigd Depri.nl";
				$headers = "From: wachtwoord@depri.nl \r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				$message = "<html><head><title>Depri Wachtwoord gewijzigd</title></head><body style='background:#000000;padding:20px;color:#ffffff;'><img class='img' src='http://www.ridis.nl/depri/img/logo.svg' style='position: absolute; background:#000080; border-radius:10px; left: 0px; top: 0px;' height='250px' width='250px' /><br><h1 style='color:blue'>Beste ".$gegeven["voornaam"]." ".$gegeven["tussenvoegsel"]." ".$gegeven["achternaam"].",</h1><br>je hebt je gebruikersnaam '".$gegeven["gebruikersnaam"]."' en wachtwoord succesvol opgeslagen bij Depri.nl.<br><br>Je kunt nu inloggen.<br>Klik op de link om naar de inlog pagina te gaan:<br><a href='http://www.RiDis.nl/depri/index.php?content=inloggen' style='color:#0000ff;font-size:14px;'>http://www.RiDis.nl/depri/index.php?content=inloggen</a><br><br><br><b>Gegroet,<br><pre style='font-size:16px;'>	Medewerkers van Depri.nl</pre></b><br><img src='http://www.ridis.nl/depri/img/logo.svg' width='30px'>Depri.nl<br><br><span style='font-size:12px;'>Dit is een gegenereerd bericht en er kan niet op geantwoord worden.</span></body></html>";
				
				// Stuur de mail met de gegevens van hierboven
				mail($to, $subject, $message, $headers);
				
				// Refresh de pagina in 0 seconden, en ga naar de inlog pagina
				header("Refresh: 0; url=http://www.ridis.nl/depri/index.php?content=voltooid");
			
			}
			
		// Email niet verzonden, geef volgende melding
		} else {
			
			// Database connectie is niet gemaakt
			echo "Geen verbinding met de database";
	
			// Refresh de pagina in 3 seconden, en ga naar de wachtwoord verander pagina
			header("Refresh: 3; url=http://www.ridis.nl/depri/index.php?content=wachtwoord&id=$id");
		}
	}
?>