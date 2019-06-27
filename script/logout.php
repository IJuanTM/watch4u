<?php
    session_start();
    unset($_SESSION["userrole"]);
    header("Refresh: 0; url=../index.php?content=homepage");
?>