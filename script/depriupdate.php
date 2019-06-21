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
include("./connect_db.php");
include("./sanitize.php");

// Variabelen die zijn ingevult bij page/update.php
$iduser = sanitize($_POST["iduser"]);
$firstname = ucwords(sanitize($_POST["firstname"]));
$infix = strtolower(sanitize($_POST["infix"]));
$lastname = ucwords(sanitize($_POST["lastname"]));
$email = ucwords(sanitize($_POST["email"]));
$password = sanitize($_POST["password"]);
$phone = sanitize($_POST["phone"]);
$address = ucwords(sanitize($_POST["address"]));
$postalcode = sanitize($_POST["postalcode"]);
$plaats = ucwords(sanitize($_POST["city"]));
$userrole = sanitize($_POST["userrole"]);

// ############################################################################################## Mag niet leeg zijn
// Als firstname leeg is geef dan de volgende melding
if (empty($firstname)) {

	// firstname is leeg
	echo "Please enter your firstname.";

	// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
	header("Refresh: 3; url=../index.php?content=update");

	// Als lastname leeg is geef dan de volgende melding
} else if (empty($lastname)) {

	// lastname is leeg
	echo "Please enter your lastname.";

	// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
	header("Refresh: 3; url=../index.php?content=update");

	// Als email leeg is geef dan de volgende melding
} else if (empty($email)) {

	// Email is leeg
	echo "Please enter an email address";

	// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
	header("Refresh: 3; url=../index.php?content=update");

	// Als gebruikersnaam leeg is geef dan de volgende melding
} else if (empty($userrole)) {

	// userrole is leeg
	echo "You don't have any userrole assigned.";

	// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
	header("Refresh: 3; url=../index.php?content=update");

	// ############################################################################################## Mag niet korter zijn
	// Als firstname leeg is geef dan de volgende melding
} else if (strlen($firstname) < 2) {

	// Gebruikersnaam
	echo "Please enter a firstname longer than 2 characters!";

	// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
	header("Refresh: 3; url=../index.php?content=update");

	// Als lastname leeg is geef dan de volgende melding
} else if (strlen($lastname) < 3) {

	// lastname
	echo "Please enter a lastname longer than 3 characters!";

	// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
	header("Refresh: 3; url=../index.php?content=update");

	// Als email leeg is geef dan de volgende melding
} else if (strlen($email) < 6) {

	// Email
	echo "Please enter a email longer than 6 characters!";

	// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
	header("Refresh: 3; url=../index.php?content=update");

	// ############################################################################################## Mag niet langer zijn
	// Als firstname leeg is geef dan de volgende melding
} else if (strlen($firstname) > 30) {

	// Gebruikersnaam
	echo "Your firstname exceeded the 30 character limit!";

	// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
	header("Refresh: 3; url=../index.php?content=update");

	// Als infix leeg is geef dan de volgende melding
} else if (strlen($infix) > 8) {

	// infix
	echo "Your infix exceeded the 8 character limit!";

	// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
	header("Refresh: 3; url=../index.php?content=update");

	// Als lastname leeg is geef dan de volgende melding
} else if (strlen($lastname) > 30) {

	// lastname
	echo "Your lastname exceeded the 30 character limit!";

	// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
	header("Refresh: 3; url=../index.php?content=update");

	// Als email leeg is geef dan de volgende melding
} else if (strlen($email) > 50) {

	// Email
	echo "Your email exceeded the 50 character limit!";

	// Refresh de pagina in 3 seconden, en ga naar de registreer pagina
	header("Refresh: 3; url=../index.php?content=update");

	// ############################################################################################## Email en gebruikersnaam mogen niet eerder voorgekomen zijn
	// Als niets leeg is doe het volgende
} else {

	// Dit is de sql-query die de ingevulde gegevens wegschrijft naar de tabel selers
	$sql = "UPDATE `depri` SET `firstname` = '$firstname', `infix` = '$infix', `lastname` = '$lastname', `email` = '$email', `address` = '$address', `postalcode` = '$postalcode', `city` = '$city', `userrole` = '$userrole'
				WHERE `depri`.`iduser` = '$iduser';";

	// Stuur de query (sql string hierboven) af op de database.
	$result = mysqli_query($conn, $sql);

	// Ga naar de volgende pagina.
	header("Refresh: 0; url=../index.php?content=list");
}
