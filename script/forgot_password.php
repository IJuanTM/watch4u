<?php
    include("./error1.php");
    include("./connect_db.php");
    include("./sanitize.php");

    $email= sanitize($_POST["email"]);

    $sql = "SELECT * FROM `user` WHERE `email` = '$email';";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        echo "Email is unknown, you need to register first<br>";
    }
    
?>