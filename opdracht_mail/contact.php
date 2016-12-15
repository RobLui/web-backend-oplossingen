<?php

session_start();
if (isset($_POST["email"])) {
  $_SESSION["email"] = $_POST["email"];
}
if (isset($_POST["email"])) {
  $_SESSION["boodschap"] = $_POST["boodschap"];
}
$_SESSION["errormessage"] = "";

// $_POST["submit"];
unset($_SESSION);
 ?>
