<?php
include("./error1.php");
include("./connect_db.php");
include("./sanitize.php");

$email = sanitize($_POST["email"]);
$password = sanitize($_POST["password"]);

$sql = "SELECT * FROM `user` WHERE `email` = '$email';";
$result = mysqli_query($conn, $sql);
$sql2 = "SELECT * FROM `user` WHERE `email` = '$email' and `code` = '';";
$result2 = mysqli_query($conn, $sql2);


if (mysqli_num_rows($result) == 0) {
	echo "Email is unknown, you need to register first<br>";
}
if (mysqli_num_rows($result2) == 0) {
	echo "You still need to activate your email<br><a href='../index.php?content=activate'>Activate here</a><br>";
}