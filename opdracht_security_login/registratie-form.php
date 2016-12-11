<?php

//resume sessie
session_start();

if (isset($_SESSION)) {
  //als de session_pass is gezet op vorige pass mag die in deze pagina gebruikt worden
  $pass_db = $_SESSION['session_pass'];
  // var_dump($_SESSION['session_pass']); -> Check welk passwoord is aangemaakt -> shh! :)
  $email_db = $_SESSION['email'];
}

?>
