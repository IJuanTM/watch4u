<?php
include("./error1.php");
include("./connect_db.php");
include("./sanitize.php");

$iduser= sanitize($_POST["iduser"]);
$firstname = ucwords(strtolower(sanitize($_POST["firstname"])));
$infix = strtolower(sanitize($_POST["infix"]));
$lastname = ucwords(strtolower(sanitize($_POST["lastname"])));
$email = strtolower(sanitize($_POST["email"]));
$phone = sanitize($_POST["phone"]);
$address = ucwords(sanitize($_POST["address"]));
$postalcode = sanitize($_POST["postalcode"]);
$city = ucwords(sanitize($_POST["city"]));
$userrole = ucwords(sanitize($_POST["userrole"]));

$sql = "SELECT * FROM `user` WHERE `email` = '$email';";
$result = mysqli_query($conn, $sql);


if (empty($phone)) {
	echo "Add your phone number<br>";
}
if (empty($address)) {
	echo "Add your address<br>";
}
if (empty($postalcode)) {
	echo "Add your postalcode / zipcode<br>";
}
if (empty($city)) {
	echo "Add your city<br>";
}


if (empty($firstname)) {
	echo "Add your firstname<br>";
}
if (empty($lastname)) {
	echo "Add your lastname<br>";
}


if (strlen($firstname) < 2) {
	echo "Firstname need at least 2 characters<br>";
}
if (strlen($lastname) < 2) {
	echo "Lastname need at least 2 characters<br>";
}
if (strlen($postalcode) > 8) {
	echo "Postalcode is to long ( Example: 4312AB )<br>";
}


if (!mysqli_num_rows($result)) {
	echo "Unknown email address, login or register first<br>";
	include("./error2.php");
} else {
	$sql2 = "UPDATE `user` SET `firstname` = '$firstname', `infix` = '$infix', `lastname` = '$lastname', `phone` = '$phone', `address` = '$address', `postalcode` = '$postalcode', `city` = '$city', `userrole` = '$userrole'
			WHERE `user`.`iduser` = '$iduser';";
	$result2 = mysqli_query($conn, $sql2);

	echo 'Loading...';
	include("./error2.php");

    session_start();
    unset($_SESSION["userrole"]);

	header("Refresh: 0; url=../index.php?content=login");
}
?>
