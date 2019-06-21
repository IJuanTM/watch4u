<?php
	// Start session met variabellen (Voor 20 Min)
	session_start();
	
	// Als session is gestart maak dan variabellen
	if (isset($_SESSION["id"])) {
		
		$id = $_SESSION["id"];
		$firstname = $_SESSION["firstname"];
		$infix = $_SESSION["infix"];
		$lastname = $_SESSION["lastname"];
		$email = $_SESSION["email"];
		$password = $_SESSION["password"];
		$userrole = $_SESSION["userrole"];
		$adres = $_SESSION["adres"];
		$postalcode = $_SESSION["postcode"];
		$city = $_SESSION["plaats"];
		$phone = $_SESSION["phone"];
		$date = $_SESSION["date"];
		
	} else {
		
		// Niet ingelogd tekst
		echo '
		<!--
		 * Copyright (C) 2009, 2019 RiDi Cage Productions, Inc.
		 * Amersfoort, Utrecht, The netherlands
		 * 
		 * Everyone is permitted to copy and distribute verbatim copies
		 * of this license document, but changing it is not allowed.
		 
		 * Licensed under MIT ( http://www.ridis.nl/depri/index.php?content=license )
		-->

		<!DOCTYPE html>
		<!-- HTML indeling in het Nederlands -->
		<html lang="nl-NL">

		<!-- Niet zichtbare gedeelte van de site -->
		<head>
			<!-- Benodigde meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			
			<!-- Theme color: Chrome, Firefox OS and Opera -->
			<meta name="theme-color" content="#000080">
			<meta name="apple-mobile-web-app-status-bar-style" content="#000080">
			
			<!-- Theme color: Windows Phone -->
			<meta name="msapplication-navbutton-color" content="#000080">
			
			<!-- Theme color: iOS Safari -->
			<meta name="apple-mobile-web-app-capable" content="yes">
			<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

			<!-- Eigen Javascript bestand -->
			<script src="./js/jquery.min.js"></script>
			<script src="./js/nokey.js" type="text/javascript"></script>
			
			<!-- Icoontjes -->
			<link rel="shortcut icon" href="./img/logo.png">
			<link rel="apple-touch-icon-precomposed" sizes="144x144" href="./img/logo.png">
			<link rel="icon" href="./img/logo.png" type="image/x-icon">
			<link rel="icon" href="./img/logo.png">

			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			
			<!-- Font Awesome JS/SVG -->
			<script defer src="./js/fontawesome.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>

			<!-- Optional CSS -->
			<link rel="stylesheet" href="./css/'; if (empty($kleur)) { echo "blauw"; } else { echo $kleur; } echo '.css">
			

			<title>Depressie&trade;</title>
		</head>

		<!-- Wel zichtbare gedeelte van de site -->
		<body onContextMenu="return false" >
			<main>
			
				<!-- Navigatie menu -->
				<div class="row">
					<div class="col-12">
						<nav class="navbar">
							<div class="navbar-header">
								<a class="navbar-brand" href="./index.php?content=watishet"><img src="./img/logo.svg" id="logo" alt="Logo" width="100px" height="100px" /> <span class="watch" id="logotekst">Depressie<span></a>
							</div>
							
							<!-- Zichtbare menu op laptop en pc -->
							<div class="navbar-right laptop">
								<ul class="nav navbar-right">
									<li class="nav-item"><a class="nav-link" href="./index.php?content=watishet">Wat is het</a></li>
									<li class="nav-item"><a class="nav-link" href="./index.php?content=hoevoelthet">Hoe voelt het</a></li>
									<li class="nav-item"><a class="nav-link" href="./index.php?content=deoorzaak">De oorzaak</a></li>
									<li class="nav-item"><a class="nav-link" href="./index.php?content=hulp">Hulp nodig</a></li>
									<li class="nav-item"><a class="nav-link" href="./index.php?content=antidepressieva">Antidepressiva</a></li>
									<li class="nav-item"><a class="nav-link" href="./index.php?content=contact">Contact</a></li>
									<li class="nav-item"><a class="nav-link" href="./index.php?content=inloggen"><i class="fas fa-sign-in-alt"></i> Inloggen</a></li>
								</ul>
							</div>

							<!-- Zichtbare menu op telefoon en tablet -->
							<button class="navbar-toggler mobile" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<i class="fas fa-bars"></i>
							</button>
							
							<div class="collapse navbar-collapse mobile" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
									<li class="nav-item"><a class="nav-link" href="./index.php?content=watishet">Wat is het</a></li>
									<li class="nav-item"><a class="nav-link" href="./index.php?content=hoevoelthet">Hoe voelt het</a></li>
									<li class="nav-item"><a class="nav-link" href="./index.php?content=deoorzaak">De oorzaak</a></li>
									<li class="nav-item"><a class="nav-link" href="./index.php?content=hulp">Hulp nodig</a></li>
									<li class="nav-item"><a class="nav-link" href="./index.php?content=antidepressieva">Antidepressiva</a></li>
									<li class="nav-item"><a class="nav-link" href="./index.php?content=contact">Contact</a></li>
									<li class="nav-item"><a class="nav-link" href="./index.php?content=inloggen"><i class="fas fa-sign-in-alt"></i> Inloggen</a></li>
									<li class="nav-item"><a class="nav-link" href="#"> </a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>

				<!-- Pagina inhoud -->
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="page">
								<h1>Opnieuw Inloggen</h1>
								<br>
								<p>Er is niet ingelogd, of er is iets fout gegaan!</p>
									
								<!-- Inlog link -->
								<p>Opnieuw Inloggen <a href="./index.php?content=inloggen">Opnieuw inloggen!</a></p>

								<!-- Registreren link -->
								<br>
								<hr>
								<p>Nog geen inlog gegevens? <a href="./index.php?content=registreren">Registreer je dan nu!</a></p>

								<!-- Wachtwoord vergeten link -->
								<p>Gebruikersnaam of wachtwoord vergeten? <a href="./index.php?content=vergeten">Gegevens vergeten!</a></p>
							</div>
						</div>
					</div>
				</div>

				<!-- Footer -->
				<div class="row">
					<div class="col-12">
						<div class="footer">
							<center>
								<!-- Copyright logo en tekst met javascript voor het huidige jaar -->
								<a href="http://www.ridis.nl/depri/index.php?content=license">&copy; 2009 - <script>document.write(new Date().getFullYear());</script></a> <a href="http://www.ridis.nl/">RiDi Cage&trade; Producties</a> - <a href="http://www.ridis.nl/depri/index.php?content=license">Alle rechten voorbehouden.</a>
							</center>
						</div>
					</div>
				</div>
			
			</main>
			
			<!-- Bootstrap JavaScript -->
			<script src="./js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="./js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="./js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			
			<!-- Optional JavaScript -->
			<script src="./js/app.js"></script>
		</body>
		</html>
		';
		
		// Mocht er toch een (slechte) sessie zijn stop deze
		session_destroy();
		
		// Verbreek de verbinding met de database
		die();
		
		// stop dit script en alle scripten die nog volgen na dit script
		exit();
		
	}
?>