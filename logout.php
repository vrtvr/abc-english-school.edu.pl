<?php

session_start();

session_unset();

unset($_SESSION['logout_error']);
$_SESSION['logout_error'] = '<span style="color:green">Prawidłowo wylogowano!</span>';

header('Location: lp_logout.php');

?>