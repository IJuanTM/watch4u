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
	include ("./sanitize.php");

	// Variabelen die zijn ingevult bij page/update.php
	$id = sanitize($_POST["id"]);
	$gebruikersnaam = gebruiker(sanitize($_POST["gebruikersnaam"]));
	$voornaam = ucwords(sanitize($_POST["voornaam"]));
	$tussenvoegsel = strtolower(sanitize($_POST["tussenvoegsel"]));
	$achternaam = ucwords(sanitize($_POST["achternaam"]));
	$email = ucwords(sanitize($_POST["email"]));
	$datum = $_POST["datum"];
	$userrole = sanitize($_POST["userrole"]);
	$kleur = sanitize($_POST["kleur"]);
	$kleurthema = sanitize($_POST["kleurthema"]);
	$adres = ucwords(sanitize($_POST["adres"]));
	$postcode = sanitize($_POST["postcode"]);
	$plaats = ucwords(sanitize($_POST["plaats"]));
	$wijzigingsdatum = date('d-m-Y, H:i:s');

	// Als kleur is .... verander thema kleur naar
	if ($kleur == 'rood'){
		
		// verander in thema kleur
		$kleurthema = "rgba(80,0,0,1)";
		
	// Als kleur is .... verander thema kleur naar
	} else if ($kleur == 'lichtrood'){
		
		// verander in thema kleur
		$kleurthema = "rgba(180,0,0,1)";
		
	// Als kleur is .... verander thema kleur naar
	} else if ($kleur == 'groen'){
		
		// verander in thema kleur
		$kleurthema = "rgba(0,80,0,1)";
		
	// Als kleur is .... verander thema kleur naar
	} else if ($kleur == 'lichtgroen'){
		
		// verander in thema kleur
		$kleurthema = "rgba(0,128,0,1)";
		
	// Als kleur is .... verander thema kleur naar
	} else if ($kleur == 'blauw'){
		
		// verander in thema kleur
		$kleurthema = "rgba(0,0,128,1)";
		
	// Als kleur is .... verander thema kleur naar
	} else if ($kleur == 'lichtblauw'){
		
		// verander in thema kleur
		$kleurthema = "rgba(0,180,180,1)";
		
	// Als kleur is .... verander thema kleur naar
	} else if ($kleur == 'cyan'){
		
		// verander in thema kleur
		$kleurthema = "rgba(0,80,80,1)";
		
	// Als kleur is .... verander thema kleur naar
	} else if ($kleur == 'geel'){
		
		// verander in thema kleur
		$kleurthema = "rgba(80,80,0,1)";
		
	// Als kleur is .... verander thema kleur naar
	} else if ($kleur == 'paars'){
		
		// verander in thema kleur
		$kleurthema = "rgba(80,0,80,1)";
		
	// Als kleur is .... verander thema kleur naar
	} else if ($kleur == 'roze'){
		
		// verander in thema kleur
		$kleurthema = "rgba(180,0,180,1)";
		
	// Als kleur is .... verander thema kleur naar
	} else {
		
		// verander in thema kleur
		$kleurthema = "rgba(0,0,128,1)";
	
	}
	
	// ############################################################################################## Mag niet leeg zijn
	// Als datum leeg is geef dan de volgende melding
	if (empty($datum)){
		
		// Datum is leeg
		echo "Er is geen registreer datum aangemaakt";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../log.php?content=update");
	
	// Als voornaam leeg is geef dan de volgende melding
	} else if (empty($voornaam)) {
		
		// Voornaam is leeg
		echo "Waarom is je voornaam nog leeg?";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../log.php?content=update");

	// Als achternaam leeg is geef dan de volgende melding
	} else if (empty($achternaam)) {
		
		// Achternaam is leeg
		echo "Waarom is je achternaam nog leeg?";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../log.php?content=update");

	// Als email leeg is geef dan de volgende melding
	} else if (empty($email)) {
		
		// Email is leeg
		echo "Waarom is je email nog leeg?";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../log.php?content=update");

	// Als gebruikersnaam leeg is geef dan de volgende melding
	} else if (empty($gebruikersnaam)) {
		
		// Gebruikersnaam is leeg
		echo "Waarom is je gebruikersnaam nog leeg?";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../log.php?content=update");

	// Als gebruikersnaam leeg is geef dan de volgende melding
	} else if (empty($kleur)) {
		
		// Gebruikersnaam is leeg
		echo "Waarom is je kleur nog leeg?";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../log.php?content=update");

	// Als gebruikersnaam leeg is geef dan de volgende melding
	} else if (empty($userrole)) {
		
		// userrole is leeg
		echo "Waarom is je rank nog leeg?";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../log.php?content=update");
	
	// ############################################################################################## Mag niet korter zijn
	// Als voornaam leeg is geef dan de volgende melding
	} else if (strlen($voornaam) < 3 ) {
		
		// Gebruikersnaam
		echo "Voornaam is niet langer dan 3 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../log.php?content=update");
	
	// Als achternaam leeg is geef dan de volgende melding
	} else if (strlen($achternaam) < 3 ) {
		
		// Achternaam
		echo "Achternaam is niet langer dan 3 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../log.php?content=update");
	
	// Als email leeg is geef dan de volgende melding
	} else if (strlen($email) < 6 ) {
		
		// Email
		echo "Email is niet langer dan 6 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../log.php?content=update");
	
	// Als gebruikersnaam leeg is geef dan de volgende melding
	} else if (strlen($gebruikersnaam) < 8 ) {
		
		// Gebruikersnaam
		echo "Gebruikersnaam is niet langer dan 8 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../log.php?content=update");
	
	// ############################################################################################## Mag niet langer zijn
	// Als voornaam leeg is geef dan de volgende melding
	} else if (strlen($voornaam) > 30 ) {
		
		// Gebruikersnaam
		echo "Voornaam is langer dan 30 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../log.php?content=update");
	
	// Als tussenvoegsel leeg is geef dan de volgende melding
	} else if (strlen($tussenvoegsel) > 8 ) {
		
		// tussenvoegsel
		echo "tussenvoegsel is langer dan 8 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../log.php?content=update");
	
	// Als achternaam leeg is geef dan de volgende melding
	} else if (strlen($achternaam) > 30 ) {
		
		// Achternaam
		echo "Achternaam is langer dan 30 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../log.php?content=update");
	
	// Als email leeg is geef dan de volgende melding
	} else if (strlen($email) > 50 ) {
		
		// Email
		echo "Email is langer dan 50 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../log.php?content=update");
	
	// Als gebruikersnaam leeg is geef dan de volgende melding
	} else if (strlen($gebruikersnaam) > 30 ) {
		
		// Gebruikersnaam
		echo "Gebruikersnaam is langer dan 30 tekens!";
		
		// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
		header("Refresh: 3; url=../log.php?content=update");
	
	// ############################################################################################## Email en gebruikersnaam mogen niet eerder voorgekomen zijn
	// Als niets leeg is doe het volgende
	} else {
	
		// Dit is de sql-query die de ingevulde gegevens wegschrijft naar de tabel selers
		$sql = "UPDATE `depri` SET `voornaam` = '$voornaam', `tussenvoegsel` = '$tussenvoegsel', `achternaam` = '$achternaam', `email` = '$email', `gebruikersnaam` = '$gebruikersnaam', `adres` = '$adres', `postcode` = '$postcode', `plaats` = '$plaats', `kleur` = '$kleur', `kleurthema` = '$kleurthema', `wijzigingsdatum` = '$wijzigingsdatum', `userrole` = '$userrole'
				WHERE `depri`.`id` = '$id';";
		
		// Stuur de query (sql string hierboven) af op de database.
		$result = mysqli_query($conn, $sql);
			
		// Ga naar de volgende pagina.
		header("Refresh: 0; url=../log.php?content=list");
	}
?>