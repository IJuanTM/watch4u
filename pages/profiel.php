<?php
	// include("../script/security.php");

    if ($userrole == 'Root'){
        echo 'Root Hello' . $firstname;
    } else if ($userrole == 'Admin') {
        echo 'Admin Hello' . $firstname;
    } else {
        echo 'Costumer Hello' . $firstnameS;
    }
?>
