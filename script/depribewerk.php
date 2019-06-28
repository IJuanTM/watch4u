<?php

include("./database.php");
include("./sanitize.php");

$id = sanitize($_POST["id"]);
$gebruikersnaam = gebruiker(sanitize($_POST["gebruikersnaam"]));
$voornaam = ucwords(sanitize($_POST["voornaam"]));
$tussenvoegsel = strtolower(sanitize($_POST["tussenvoegsel"]));
$achternaam = ucwords(sanitize($_POST["achternaam"]));
$email = ucwords(sanitize($_POST["email"]));
$datum = $_POST["datum"];
$userrole = sanitize($_POST["userrole"]);
$adres = ucwords(sanitize($_POST["adres"]));
$postcode = sanitize($_POST["postcode"]);
$plaats = ucwords(sanitize($_POST["plaats"]));
$wijzigingsdatum = date('d-m-Y, H:i:s');

if (empty($datum)) {
	echo "Er is geen registreer datum aangemaakt";
	header("Refresh: 3; url=../log.php?content=bewerk");
} else if (empty($voornaam)) {
	echo "Waarom is je voornaam nog leeg?";
	header("Refresh: 3; url=../log.php?content=bewerk");
} else if (empty($achternaam)) {
	echo "Waarom is je achternaam nog leeg?";
	header("Refresh: 3; url=../log.php?content=bewerk");
} else if (empty($email)) {
	echo "Waarom is je email nog leeg?";
	header("Refresh: 3; url=../log.php?content=bewerk");
} else if (empty($gebruikersnaam)) {
	echo "Waarom is je gebruikersnaam nog leeg?";
	header("Refresh: 3; url=../log.php?content=bewerk");
} else if (empty($kleur)) {
	echo "Waarom is je kleur nog leeg?";
	header("Refresh: 3; url=../log.php?content=bewerk");
} else if (strlen($voornaam) < 3) {
	echo "Voornaam is niet langer dan 3 tekens!";
	header("Refresh: 3; url=../log.php?content=bewerk");
} else if (strlen($achternaam) < 3) {
	echo "Achternaam is niet langer dan 3 tekens!";
	header("Refresh: 3; url=../log.php?content=bewerk");
} else if (strlen($email) < 6) {
	echo "Email is niet langer dan 6 tekens!";
	header("Refresh: 3; url=../log.php?content=bewerk");
} else if (strlen($gebruikersnaam) < 8) {
	echo "Gebruikersnaam is niet langer dan 8 tekens!";
	header("Refresh: 3; url=../log.php?content=bewerk");
} else if (strlen($voornaam) > 30) {
	echo "Voornaam is langer dan 30 tekens!";
	header("Refresh: 3; url=../log.php?content=bewerk");
} else if (strlen($tussenvoegsel) > 8) {
	echo "tussenvoegsel is langer dan 8 tekens!";
	header("Refresh: 3; url=../log.php?content=bewerk");
} else if (strlen($achternaam) > 30) {
	echo "Achternaam is langer dan 30 tekens!";
	header("Refresh: 3; url=../log.php?content=bewerk");
} else if (strlen($email) > 50) {
	echo "Email is langer dan 50 tekens!";
	header("Refresh: 3; url=../log.php?content=bewerk");
} else if (strlen($gebruikersnaam) > 30) {
	echo "Gebruikersnaam is langer dan 30 tekens!";
	header("Refresh: 3; url=../log.php?content=bewerk");
} else {

	$sql = "UPDATE `depri` SET `voornaam` = '$voornaam', `tussenvoegsel` = '$tussenvoegsel', `achternaam` = '$achternaam', `email` = '$email', `gebruikersnaam` = '$gebruikersnaam', `adres` = '$adres', `postcode` = '$postcode', `plaats` = '$plaats', `kleur` = '$kleur', `kleurthema` = '$kleurthema', `wijzigingsdatum` = '$wijzigingsdatum'
				WHERE `depri`.`id` = '$id';";

	$result = mysqli_query($conn, $sql);

	session_start();
	$_SESSION = array();
	//session_destroy();


	$_SESSION["id"] = $id;
	$_SESSION["gebruikersnaam"] = $gebruikersnaam;
	$_SESSION["voornaam"] = $voornaam;
	$_SESSION["tussenvoegsel"] = $tussenvoegsel;
	$_SESSION["achternaam"] = $achternaam;
	$_SESSION["email"] = $email;
	$_SESSION["datum"] = $datum;
	$_SESSION["userrole"] = $userrole;
	$_SESSION["adres"] = $adres;
	$_SESSION["postcode"] = $postcode;
	$_SESSION["plaats"] = $plaats;

	header("Refresh: 0; url=../log.php?content=bewerk");
}
