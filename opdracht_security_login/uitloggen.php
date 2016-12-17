<?php
session_start();
unset($_COOKIE["login"]);
header("location: /opdracht_security_login/login-form.php"); // redirect to login
$_SESSION["boodschap"] = "Uitgelogd c u next time";
unset($_SESSION["boodschap"]);

?>
