<?php
session_start();
$_SESSION['loggedin'] = false;
header("location: check_auth.php");
?>