<?php
    $server = "localhost";
    $username = "u37477p32749_school";
    $password = "Watch4U";
    $dbname = "u37477p32749_watch4u";

    if (empty($server)) {

        echo "Empty server-name<br>";

    } else if (empty($username)) {

        echo "Empty username for connection<br>";

    } else if (empty($password)) {

        echo "Empty password for connection<br>";

    } else if (empty($dbname)) {

        echo "Empty database-name<br>";

    } else {

        echo "Loading...<br><br>";
        $conn = mysqli_connect($server, $username, $password, $dbname);
        
    }
?>