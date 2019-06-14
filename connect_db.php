<?php

    /*
     * Copyright (C) 2009, 2019 RiDi Cage Productions, Inc.
     * Amersfoort, Utrecht, The netherlands
     * 
     * Everyone is permitted to copy and distribute verbatim copies
     * of this license document, but changing it is not allowed.
     *
     * Licensed under MIT ( http://www.ridis.nl/depri/index.php?content=license )
    */

    // Met deze gegevens kunnen we inloggen op de mysql-server en een database selecteren
    $server = "localhost";
    $username = "u37477p32749_school";
    $password = "Watch4U";
    $dbname = "u37477p32749_watch4u";

	// Als servernaam leeg is of onjuist is geef dan de volgende melding
	if (empty($server)){
		
		// Servernaam is leeg
		echo "<div class='alert alert-info' role='alert'>Onbekende servernaam</div>";
	
	// Als username leeg is of onjuist is geef dan de volgende melding
	} else if (empty($username)) {
		
		// Username is leeg
		echo "<div class='alert alert-info' role='alert'>Onbekende gebruikersnaam voor de server</div>";

	// Als password leeg is of onjuist is geef dan de volgende melding
	} else if (empty($password)) {
		
		// Password is leeg
		echo "<div class='alert alert-info' role='alert'>Onbekend wachtwoord voor de server</div>";

	// Als dbname leeg is of onjuist is geef dan de volgende melding
	} else if (empty($dbname)) {
		
		// Databasename is leeg
		echo "<div class='alert alert-info' role='alert'>Onbekende database naam</div>";

	// Als niets leeg is of onjuist is doe dan het volgende
	} else {
	
		// Met deze functie maken we contact met de mysql-server en kan er geen verbinding worden gemaakt geen dan de melding "Kan niet verbinden"
		$conn = mysqli_connect($servername, $username, $password, $dbname) or die ("Kan niet verbinden, er is een probleem met de connectie");
	}

?>