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
$address = ucwords(sanitize($_POST["address"]));
$postalcode = sanitize($_POST["postalcode"]);
$plaats = ucwords(sanitize($_POST["city"]));
$phone = sanitize($_POST["phone"]);
$userrole = sanitize($_POST["userrole"]);

if (empty($firstname)) {
	echo "Please enter your firstname.";
	header("Refresh: 3; url=../index.php?content=update");
} else if (empty($lastname)) {
	echo "Please enter your lastname.";
	header("Refresh: 3; url=../index.php?content=update");
} else if (empty($email)) {
	echo "Please enter an email address";
	header("Refresh: 3; url=../index.php?content=update");
} else if (empty($userrole)) {
	echo "You don't have any userrole assigned.";
	header("Refresh: 3; url=../index.php?content=update");
} else if (strlen($firstname) < 2) {
	echo "Please enter a firstname longer than 2 characters!";
	header("Refresh: 3; url=../index.php?content=update");
} else if (strlen($lastname) < 3) {
	echo "Please enter a lastname longer than 3 characters!";
	header("Refresh: 3; url=../index.php?content=update");
} else if (strlen($email) < 6) {
	echo "Please enter a email longer than 6 characters!";
	header("Refresh: 3; url=../index.php?content=update");
} else if (strlen($firstname) > 30) {
	echo "Your firstname exceeded the 30 character limit!";
	header("Refresh: 3; url=../index.php?content=update");
} else if (strlen($infix) > 8) {
	echo "Your infix exceeded the 8 character limit!";
	header("Refresh: 3; url=../index.php?content=update");
} else if (strlen($lastname) > 30) {
	echo "Your lastname exceeded the 30 character limit!";
	header("Refresh: 3; url=../index.php?content=update");
} else if (strlen($email) > 50) {
	echo "Your email exceeded the 50 character limit!";
	header("Refresh: 3; url=../index.php?content=update");
} else {

	$sql = "UPDATE `user` SET `firstname` = '$firstname', `infix` = '$infix', `lastname` = '$lastname', `email` = '$email', `address` = '$address', `postalcode` = '$postalcode', `city` = '$city', `userrole` = '$userrole'
				WHERE `user`.`iduser` = '$iduser';";

	$result = mysqli_query($conn, $sql);

	header("Refresh: 0; url=./index.php?content=account");
}
