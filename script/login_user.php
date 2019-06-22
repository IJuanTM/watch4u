<?php
	include("./error1.php");
	include("./connect_db.php");
	include("./sanitize.php");

	$email = sanitize($_POST["email"]);
	$password = sanitize($_POST["password"]);

	$sql = "SELECT * FROM `user` WHERE `email` = '$email'";
	$result = mysqli_query($conn, $sql);

	if (empty($email) && empty($password)) {
		echo "Email and password are empty<br>";
	}
	if (mysqli_num_rows($result) == 0) {
		echo "Email is unknown, you need to register first<br>";
	}
	if (!password_verify($password, $hash)) {
		echo "Your password is incorrect.<br>";
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
	}

	
	echo "<a href='javascript:history.go(-1)'>Click here to go back</a>";

	include("./error2.php");
?>