<?php

//resume sessie
session_start();

//als de session_pass is gezet op vorige pass mag die in deze pagina gebruikt worden
if (isset($_SESSION['session_pass'])) {
$email_db = "";
$pass_db = $_SESSION['session_pass'];
// var_dump($_SESSION['session_pass']); -> Check welk passwoord is aangemaakt -> shh! :)
}
else {
echo "Error :(";
}

?>
