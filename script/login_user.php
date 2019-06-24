<?php
include("./error1.php");
include("./connect_db.php");
include("./sanitize.php");

$email = sanitize($_POST["email"]);
$password = sanitize($_POST["password"]);

$sql = "SELECT * FROM `user` WHERE `email` = '$email';";
$result = mysqli_query($conn, $sql);
$sql2 = "SELECT * FROM `user` WHERE `email` = '$email' and `code` = NULL;";
$result2 = mysqli_query($conn, $sql2);

if (empty($email) && empty($password)) {
	echo "Email and password are empty<br>";
}
if (mysqli_num_rows($result) == 0) {
	echo "Email is unknown, you need to register first<br>";
}
if (mysqli_num_rows($result2) == 0) {
	echo "You still need to activate your email<br><a href='../index.php?content=activate'>Activate here</a><br>";
}

$record = mysqli_fetch_assoc($result);
$hash = $record["password"];

if (password_verify($password, $hash)) {

	$userrole = $record["userrole"];
	session_start();

	$_SESSION["iduser"] = $record["iduser"];
	$_SESSION["firstname"] = $record["firstname"];
	$_SESSION["infix"] = $record["infix"];
	$_SESSION["lastname"] = $record["lastname"];
	$_SESSION["email"] = $record["email"];
	$_SESSION["password"] = $record["password"];
	$_SESSION["phone"] = $record["phone"];
	$_SESSION["address"] = $record["address"];
	$_SESSION["postalcode"] = $record["postalcode"];
	$_SESSION["city"] = $record["city"];
	$_SESSION["userrole"] = $record["userrole"];
	$_SESSION["date"] = $record["date"];
	$_SESSION["code"] = $record["code"];

	header("Refresh: 0; url=../index.php?content=profiel");


	echo 'session:<br>'
	 . $_SESSION["iduser"] . ' - ID<br>'
	 . $_SESSION["firstname"] . ' - firstname<br>'
	 . $_SESSION["infix"] . ' - infix<br>'
	 . $_SESSION["lastname"] . ' - lastname<br>'
	 . $_SESSION["email"] . ' - email<br>'
	 . $_SESSION["password"] . ' - password<br>'
	 . $_SESSION["phone"] . ' - phone<br>'
	 . $_SESSION["address"] . ' - address<br>'
	 . $_SESSION["postalcode"] . ' - postalcode<br>'
	 . $_SESSION["city"] . ' - city<br>'
	 . $_SESSION["userrole"] . ' - userrole<br>'
	 . $_SESSION["date"] . ' - date<br>'
	 . $_SESSION["code"] . ' - code<br>';

	 echo "<a href='javascript:history.go(-1)'>Click here to try again.</a>";
	 include("./error2.php");
} else {
	echo "Password is unknown, did you forget your password?<br>";
	echo "<a href='javascript:history.go(-1)'>Click here to try again.</a>";
	include("./error2.php");
}
