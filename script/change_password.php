<?php

include("./error1.php");
include("./connect_db.php");
include("./sanitize.php");

$iduser = sanitize($_POST["iduser"]);
$password1 = sanitize($_POST["password1"]);
$password2 = sanitize($_POST["password2"]);

if (empty($password1)) {
    echo "You didn't enter a password!<br>";
}
if (empty($password2)) {
    echo "You didn't enter a password!<br>";
}
if ($password1 != $password2) {
    echo "The given passwords are not the same.<br>";
} 
if (strlen($password1) < 8) {
    echo "password to short, use 8 characters!<br>";
    include("./error2.php");
} else {
    $blowfish_password = password_hash($password1, PASSWORD_BCRYPT);

    $sql = "UPDATE `user` SET `password` = '$blowfish_password',
            WHERE `user`.`iduser` = '$iduser';";
echo $sql;
    include("./error1.php");
    // $result = mysqli_query($conn, $sql);

    // header("Refresh: 0; url=../index.php?content=account");
}
