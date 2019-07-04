<?php
	// Finally, destroy the session.
    session_start();
    $_SESSION = array();
    session_destroy();
?>