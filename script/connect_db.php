<?php

$server = "localhost";
$username = "u37477p32749_school";
$password = "Watch4U";
$dbname = "u37477p32749_watch4u";
?>

<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/error.css">
    <title>Error&trade;</title>
    <link rel="shortcut icon" href="../img/icon/Watch.ico">
    <link rel="apple-touch-icon-precomposed" sizes="200x200" href="../img/icon/Watch.png">
    <link rel="icon" href="../img/icon/Watch.svg" type="image/x-icon">
    <link rel="icon" href="../img/icon/Watch.gif">
</head>

<body>
    <div class='back-error'>
        <div class='error'>
            <hr>

            <?php

            // Als servernaam leeg is of onjuist is geef dan de volgende melding
            if (empty($server)) {

                // Servernaam is leeg
                echo "Onbekende servernaam";

                // Als username leeg is of onjuist is geef dan de volgende melding
            } else if (empty($username)) {

                // Username is leeg
                echo "Onbekende gebruikersnaam voor de server";

                // Als password leeg is of onjuist is geef dan de volgende melding
            } else if (empty($password)) {

                // Password is leeg
                echo "Onbekend wachtwoord voor de server";

                // Als dbname leeg is of onjuist is geef dan de volgende melding
            } else if (empty($dbname)) {

                // Databasename is leeg
                echo "Onbekende database naam";

                // Als niets leeg is of onjuist is doe dan het volgende
            } else {

                // Databasename is leeg
                echo "Loading... ";

                // Met deze functie maken we contact met de mysql-server en kan er geen verbinding worden gemaakt geen dan de melding "Kan niet verbinden"
                $conn = mysqli_connect($server, $username, $password, $dbname) or die("Kan niet verbinden, er is een probleem met de connectie<hr>");
            }

            ?>

            <hr>
        </div>
    </div>
</body>

</html>