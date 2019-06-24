<?php

include("./connect_db.php");
include("./sanitize.php");

$iduser =  sanitize($_POST["iduser"]);
$email = sanitize($_POST["email"]);
$password1 = password_check(sanitize($_POST["password1"]));
$password2 = sanitize($_POST["password2"]);

$sql1 = "select * from `user` where (`id` = '$id') && (`password` != 'Geheim');";

$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) == 1) {
	echo "Je hebt je password al eerder veranderd.";
	header("Refresh: 3; url=http://www.ridis.nl/depri/index.php?content=password&id=$id");
} else if ($password1 == "Geheim") {
	header("Refresh: 0; url=http://www.ridis.nl/depri/index.php?content=activatie");
} else if ($password1 != $password2) {
	echo "passworden komen niet overeen met elkaar.";
	header("Refresh: 3; url=http://www.ridis.nl/depri/index.php?content=password&id=$id");
} else if (empty($id)) {
	echo "Er is geen registreer identiteit aangemaakt.<br>Klik opnieuw op de link uit de mail, of registreer je opnieuw.";
	header("Refresh: 5; url=http://www.ridis.nl/depri/index.php?content=password&id=$id");
} else if (empty($password1)) {
	echo "Waarom is je 1e password nog leeg?";
	header("Refresh: 3; url=http://www.ridis.nl/depri/index.php?content=password&id=$id");
} else if (empty($password2)) {
	echo "Waarom is je 2e password nog leeg?";
	header("Refresh: 3; url=http://www.ridis.nl/depri/index.php?content=password&id=$id");
} else if (strlen($password1) < 8) {
	echo "password is korter dan 8 tekens!";
	header("Refresh: 3; url=http://www.ridis.nl/depri/index.php?content=password&id=$id");
} else if (strlen($password1) > 30) {
	echo "password is langer dan 30 tekens!";
	header("Refresh: 3; url=http://www.ridis.nl/depri/index.php?content=password&id=$id");
} else {

	$blowfish_password = password_hash($password1, PASSWORD_BCRYPT);

	$sql2 = "UPDATE `user` 
				SET `password` = '$blowfish_password'
				WHERE `id` = '$id';";

	$result2 = mysqli_query($conn, $sql2);

	if ($result2) {

		$sql3 = "select email, voornaam, tussenvoegsel, achternaam, gebruikersnaam from `depri` where (`id` = '$id');";

		$result3 = mysqli_query($conn, $sql3);

		while ($gegeven = mysqli_fetch_assoc($result3)) {

			$to = $gegeven["email"];
			$subject = "password is gewijzigd Depri.nl";
			$headers = "From: password@depri.nl \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$message = "<html><head><title>Depri password gewijzigd</title></head><body style='background:#000000;padding:20px;color:#ffffff;'><img class='img' src='http://www.ridis.nl/depri/img/logo.svg' style='position: absolute; background:#000080; border-radius:10px; left: 0px; top: 0px;' height='250px' width='250px' /><br><h1 style='color:blue'>Beste " . $gegeven["voornaam"] . " " . $gegeven["tussenvoegsel"] . " " . $gegeven["achternaam"] . ",</h1><br>je hebt je gebruikersnaam '" . $gegeven["gebruikersnaam"] . "' en password succesvol opgeslagen bij Depri.nl.<br><br>Je kunt nu inloggen.<br>Klik op de link om naar de inlog pagina te gaan:<br><a href='http://www.RiDis.nl/depri/index.php?content=inloggen' style='color:#0000ff;font-size:14px;'>http://www.RiDis.nl/depri/index.php?content=inloggen</a><br><br><br><b>Gegroet,<br><pre style='font-size:16px;'>	Medewerkers van Depri.nl</pre></b><br><img src='http://www.ridis.nl/depri/img/logo.svg' width='30px'>Depri.nl<br><br><span style='font-size:12px;'>Dit is een gegenereerd bericht en er kan niet op geantwoord worden.</span></body></html>";

			mail($to, $subject, $message, $headers);

			header("Refresh: 0; url=http://www.ridis.nl/depri/index.php?content=voltooid");
		}
	} else {

		echo "Geen verbinding met de database";
		header("Refresh: 3; url=http://www.ridis.nl/depri/index.php?content=password&id=$id");
	}
}
