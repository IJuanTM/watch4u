<?php

include("./database.php");
include("./sanitize.php");

$date = date('d-m-Y, H:i:s');
$firstname = ucwords(strtolower(sanitize($_POST["firstname"])));
$infix = strtolower(sanitize($_POST["infix"]));
$lastname = ucwords(strtolower(sanitize($_POST["lastname"])));
$email = strtolower(sanitize($_POST["email"]));
$wachtwoord = "Geheim";
$userrole = "Customer";
$address = "";
$postalcode = "";
$city = "";
$phone = "";

if (empty($date)) {
	echo "Er is geen registreer datum aangemaakt";
	header("Refresh: 3; url=../index.php?content=registreren");
} else if (empty($firstname)) {
	echo "Waarom is je voornaam nog leeg?";
	header("Refresh: 3; url=../index.php?content=registreren");
} else if (empty($lastname)) {
	echo "Waarom is je achternaam nog leeg?";
	header("Refresh: 3; url=../index.php?content=registreren");
} else if (empty($email)) {
	echo "Waarom is je email nog leeg?";
	header("Refresh: 3; url=../index.php?content=registreren");
} else if (strlen($firstname) < 3) {
	echo "Voornaam is geen 3 tekens of langer!";
	header("Refresh: 3; url=../index.php?content=registreren");
} else if (strlen($lastname) < 3) {
	echo "Achternaam is geen 3 tekens of langer!";
	header("Refresh: 3; url=../index.php?content=registreren");
} else if (strlen($email) < 6) {
	echo "Email is geen 3 tekens of langer!";
	header("Refresh: 3; url=../index.php?content=registreren");
} else if (strlen($firstname) > 30) {
	echo "Voornaam is langer dan 30 tekens!";
	header("Refresh: 3; url=../index.php?content=registreren");
} else if (strlen($infix) > 8) {
	echo "tussenvoegsel is langer dan 8 tekens!";
	header("Refresh: 3; url=../index.php?content=registreren");
} else if (strlen($lastame) > 30) {
	echo "Achternaam is langer dan 30 tekens!";
	header("Refresh: 3; url=../index.php?content=registreren");
} else if (strlen($email) > 50) {
	echo "Email is langer dan 50 tekens!";
	header("Refresh: 3; url=../index.php?content=registreren");
} else {

	$sql1 = "SELECT * FROM `user` WHERE `email` = '$email'";
	$result1 = mysqli_query($conn, $sql1);

	$sql2 = "SELECT * FROM `user` WHERE `email` = '$email'";
	$result2 = mysqli_query($conn, $sql2);

	if (mysqli_num_rows($result1)) {
		echo 'Dit email adres is al bekend, log in of gebruik een ander email adres';
		header("Refresh: 5; url=../index.php?content=registreren");
	} else if (mysqli_num_rows($result2)) {
		echo 'Deze gebruikersnaam is al bekend, log in of gebruik een andere gebruikersnaam';
		header("Refresh: 5; url=../index.php?content=registreren");
	} else {

		$sql3 = "INSERT INTO `user` (`iduser`,`firstname`,`infix`,`lastame`,`email`,`password`,`address`,`postalcode`,`city`,`phone`,`userrole`,`date`)
						VALUES (NULL,'$firstname','$infix','$lastname','$email','$password','$address','$postalcode','$city','$phone','$userrole','$date');";

		$result3 = mysqli_query($conn, $sql3);

		$id = mysqli_insert_id($conn);

		if ($result3) {

			$to = $email;
			$subject = "Activatie link Watch4U.com";
			$headers = "From: activatie@watch4u.com \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$message = "<html><head><title>Watch4U Activatie</title></head><body style='background:#000000;padding:20px;color:#ffffff;'><img class='img' src='http://www.ridis.nl/watch4u/img/logo/Watch4U.svg' style='position: absolute; background:#000080; border-radius:10px; left: 0px; top: 0px;' height='250px' width='250px' /><br><h1 style='color:blue'>Beste " . $firstname . " " . $infix . " " . $lastname . ",</h1><br>je hebt je geregistreerd bij Watch4U.com .<br><br>Voor het bevestigen van jouw gegevens klik je op de activatie link:<br><a href='http://www.RiDis.nl/watch4u/index.php?content=wachtwoord&id=" . $iduser . "' style='color:#0000ff;font-size:14px;'>http://www.RiDis.nl/watch4u/index.php?content=wachtwoord&id=" . $id . "</a><br><br><br><b>Gegroet,<br><pre style='font-size:16px;'>	Medewerkers van Depri.nl</pre></b><br><img src='http://www.ridis.nl/watch4u/img/logo/watch4u.svg' width='30px'>Depri.nl<br><br><span style='font-size:12px;'>Dit is een gegenereerd bericht en er kan niet op geantwoord worden.</span></body></html>";

			mail($to, $subject, $message, $headers);
			header("Refresh: 0; url=../index.php?content=activatie");
		} else {
			echo 'De activatie mail is "NIET" verzonden, er is geen verbinding met de database.';
			header("Refresh: 5; url=../index.php?content=registreren");
		}
	}
}
