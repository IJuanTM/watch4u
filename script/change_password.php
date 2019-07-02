<?php

include("./error1.php");
include("./connect_db.php");
include("./sanitize.php");

$iduser = sanitize($_POST["iduser"]);
$password0 = sanitize($_POST["password0"]);
$password1 = sanitize(password_check($_POST["password1"]));
$password2 = sanitize(password_check($_POST["password2"]));

$sql = "SELECT * FROM `user` WHERE `password` = '$password0';";
$result = mysqli_query($conn, $sql);

$record = mysqli_fetch_assoc($result);
$hash = $record["password"];

if (password_verify($password0, $hash)) {
	echo "Old Password is unknown<br>";
}
if (empty($iduser)) {
    echo "You have to login first<br>";
}
if (empty($password0)) {
    echo "You didn't enter the old password!<br>";
}
if (empty($password1)) {
    echo "You didn't enter a new password!<br>";
}
if (empty($password2)) {
    echo "You didn't enter a new password!<br>";
}
if ($password1 != $password2) {
    echo "The given passwords are not the same.<br>";
}

if (strlen($password1) < 8) {
    echo "password to short, use 8 characters!<br>";
    echo "<a href='javascript:history.go(-1)'>Click here to go back</a>";
    include("./error2.php");
} else {
    $blowfish_password = password_hash($password1, PASSWORD_BCRYPT);

    $sql1 = "UPDATE `user` SET `password` = '$blowfish_password'
            WHERE `user`.`iduser` = '$iduser';";
    $result1 = mysqli_query($conn, $sql1);

    echo "<a href='javascript:history.go(-1)'>Click here to go back</a>";
    include("./error2.php");

    header("Refresh: 0; url=../index.php?content=account");
}
?>