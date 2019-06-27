<?php
include("./error1.php");
include("./connect_db.php");
include("./sanitize.php");

$no1 = rand(0, 9999);
$no1 = str_pad($no1, 4, "0", STR_PAD_LEFT);
$no2 = rand(0, 9999);
$no2 = str_pad($no2, 4, "0", STR_PAD_LEFT);
$no3 = rand(0, 9999);
$no3 = str_pad($no3, 4, "0", STR_PAD_LEFT);

$code = $no1 . "-" . $no2 . "-" . $no3;

$sqli = "SELECT * FROM `user`;";
$resulti = mysqli_query($conn, $sqli);

$iduser = (mysqli_num_rows($resulti) + 1);
$firstname = ucwords(strtolower(sanitize($_POST["firstname"])));
$infix = strtolower(sanitize($_POST["infix"]));
$lastname = ucwords(strtolower(sanitize($_POST["lastname"])));
$email = strtolower(sanitize($_POST["email"]));
$password = wachtwoord_check(sanitize($_POST["password1"]));
$password2 = sanitize($_POST["password2"]);
$phone = "";
$address = "";
$postalcode = "";
$city = "";
$userrole = "Customer";

date_default_timezone_set("Europe/Amsterdam");
$date = date("d-m-Y, H:i:s");

$sql = "SELECT * FROM `user` WHERE `email` = '$email';";
$result = mysqli_query($conn, $sql);


if (!empty($phone)) {
	echo "Phone error - " . $phone . "<br>";
}
if (!empty($address)) {
	echo "Address error - " . $address . "<br>";
}
if (!empty($postalcode)) {
	echo "Postalcode error - " . $postalcode . "<br>";
}
if (!empty($city)) {
	echo "City error - " . $city . "<br>";
}


if (empty($iduser)) {
	echo "ID exist - " . $iduser . "<br>";
}
if (empty($firstname)) {
	echo "Add your firstname<br>";
}
if (empty($lastname)) {
	echo "Add your lastname<br>";
}
if (empty($email)) {
	echo "Add your email<br>";
}
if (empty($password)) {
	echo "Add your password<br>";
}
if (empty($password2)) {
	echo "Add check password<br>";
}


if (strlen($firstname) < 2) {
	echo "Firstname need at least 2 characters<br>";
}
if (strlen($lastname) < 2) {
	echo "Lastname need at least 2 characters<br>";
}
if (strlen($email) < 6) {
	echo "Email need at least 6 characters<br>";
}
if (strlen($password) < 8) {
	echo "Password need at least 8 characters<br>";
}


if ($password != $password2) {
	echo "Passwords are not the same<br>";
}
if (mysqli_num_rows($result)) {
	echo 'Known email address, login or use an other email<br>';
}


echo "<a href='javascript:history.go(-1)'>Click here to go back</a>";

$blowfish_password = password_hash($password, PASSWORD_BCRYPT);


if ($password = $password2) {

	$sql2 = "INSERT INTO `user` (`iduser`,
									`firstname`,
									`infix`,
									`lastname`,
									`email`,
									`password`,
									`phone`,
									`address`,
									`postalcode`,
									`city`,
									`userrole`,
									`date`,
									`code`)
							VALUES 	('$iduser',
									'$firstname',
									'$infix',
									'$lastname',
									'$email',
									'$blowfish_password',
									'$phone',
									'$address',
									'$postalcode',
									'$city',
									'$userrole',
									'$date',
									'$code');";


	$result2 = mysqli_query($conn, $sql2);


	$to = $email;
	$subject = "Activatie link Watch4U.com";
	$headers = "From: activatie@watch4u.com \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$message =
		"<html>
			<head>
				<title>
					Watch4U Activatie
				</title>
			</head>
			
			<body style='background:#202020;padding:20px;color:gold;'>
				<img class='img' src='https://www.ridis.nl/watch4u/img/logo/Watch4U.svg' style='position: absolute; background:#000080; border-radius:10px; left: 0px; top: 0px;' height='250px' width='250px' />
				<br>
				<h1 style='color:blue'>
					Hello " . $firstname . " " . $infix . " " . $lastname . ",
				</h1>
				<br>
				you are registered by Watch4U.com .<br>
				<br>
				before you can buy or edit something you need to activate your account to use it:<br>
				<a href='http://www.RiDis.nl/watch4u/index.php?content=activate' style='color:#0000ff;font-size:14px;'>https://www.RiDis.nl/watch4u/index.php?content=activate'</a><br>
				On this page you need to enter the next code:<br>
				" . $code . "<br>
				<br>
				<br>
				<b>Kind regards,<br>
				<pre style='font-size:16px;'>	Watch4U.com</pre></b><br>
				<br>
				<span style='font-size:12px;'>This is a generaded email.</span>
			</body>
		</html>";

	mail($to, $subject, $message, $headers);

	header("Refresh: 0; url=../index.php?content=activate");
}

include("./error2.php");
