<?php
    include("./error1.php");
    include("./connect_db.php");
    include("./sanitize.php");

    $email= strtolower(sanitize($_POST["email"]));

    $sql = "SELECT * FROM `user` WHERE `email` = '$email';";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {

        echo "Email is unknown, you need to register first<br>";
        echo "Unknown email address, login or register first<br>";
        include("./error2.php");

    } else {

        $record = mysqli_fetch_assoc($result);
        $firstname = $record["firstname"];
        $infix = $record["infix"];
        $lastname = $record["lastname"];
        
        $no1 = rand(0, 9999);
        $no1 = str_pad($no1, 4, "0", STR_PAD_LEFT);

        $code = $no1;

        $sql1 = "UPDATE `user` SET `code` = '$code'
                WHERE `user`.`email` = '$email';";
        $result1 = mysqli_query($conn, $sql1);

        $to = $email;
        $subject = "Activatie link Watch4U.com";
        $headers = "From: activatie@watch4u.com \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $message =
            "<html>
                <head>
                    <title>
                        Watch4U Activatie
                    </title>
                </head>
                
                <body style='background:#202020;padding:20px;color:gold;'>
                    <img class='img' src='http://www.ridis.nl/watch4u/img/logo/Watch4U.svg' style='position: absolute; background:#000080; border-radius:10px; left: 0px; top: 0px;' height='250px' width='250px' />
                    <br>
                    <h1 style='color:blue'>
                        Hello " . $firstname . " " . $infix . " " . $lastname . ",
                    </h1>
                    <br>
                    you are registered by Watch4U.com .<br>
                    <br>
                    before you can buy or edit something you need to activate your account to use it:<br>
                    <a href='http://www.RiDis.nl/watch4u/index.php?content=create_password' style='color:#0000ff;font-size:14px;'>https://www.RiDis.nl/watch4u/index.php?content=create_password</a><br>
                    On this page you need to enter the next code:<br>
                    " . $code . "<br>
                    <br>
                    <br>
                    <b>Kind regards,<br>
                    <pre style='font-size:16px;'>	Watch4U.com</pre></b><br>
                    <br>
                    <span style='font-size:12px;'>This is a generaded email.</span>
                </body>
            </html>";
    
        mail($to, $subject, $message, $headers);
    
        header("Refresh: 0; url=../index.php?content=create_password&email=$email");
    }
?>