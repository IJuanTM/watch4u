<?php
include("./error1.php");
include("./connect_db.php");
include("./sanitize.php");

$email = sanitize($_POST["email"]);
$code = sanitize($_POST["code"]);

$sql = "SELECT * FROM `user` WHERE `email` = '$email';";
$result = mysqli_query($conn, $sql);
$sql2 = "SELECT * FROM `user` WHERE `email` = '$email' and `code` = '$code';";
$result2 = mysqli_query($conn, $sql2);


if (mysqli_num_rows($result) == 0) {
	echo "Email is unknown, you need to register first<br>";
}
if (mysqli_num_rows($result2) == 0) {
	echo "Your code does not match<br>";
}
if (mysqli_num_rows($result2) == 1) {
    echo "Your account is activated<br>";
    $sql3 = "UPDATE `user` SET `code` = '0' WHERE `email` = '$email';";
    $result3 = mysqli_query($conn, $sql3);
    header("Refresh: 0; url=../index.php?content=login");
}

echo "<a href='javascript:history.go(-1)'>Click here to try again.</a>";
include("./error2.php");
?>