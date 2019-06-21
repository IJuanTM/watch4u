<?php

include("./connect_db.php");
include("./sanitize.php");

$password1 = sanitize($_POST["password"]);
$password2 = sanitize($_POST["password"]);

if (empty($password1)) {
    echo "You didn't enter a password!";
    header("Refresh: 3; url=../index.php?content=update");
} else if (empty($password2)) {
    echo "You didn't enter a password!";
    header("Refresh: 3; url=../index.php?content=update");
} else if ($password1 != $password2) {
    echo "The given passwords are not the same.";
    header("Refresh: 3; url=.index.php?content=update");
} else if (strlen($password1) < 8) {
    echo "password is korter dan 8 tekens!";
    header("Refresh: 3; url=http://www.ridis.nl/depri/index.php?content=password& id = $ id");
} else {
    $blowfish_password = password_hash($password1, PASSWORD_BCRYPT);

    $sql = "UPDATE `user` SET`password` = '$blowfish_password',
                WHERE `user`.`iduser` = '$iduser';";

    $result = mysqli_query($conn, $sql);

    header("Refresh: 0; url=./index.php?content=account");
}
