<?php

// Maakt een instantie van de PDO class
// Maakt connectie met de lokale db
// Standaard paswoord als je "pasword" ingeeft, krijg je YES terug
// "username" staat standaard ook ingesteld, die moet veranderen in "root"
$db = new pdo('mysql:host=localhost;dbname=bieren', 'root','');

//wat als er geen verbinding gemaakt kan worden? Voer uit..
if (!$db) {
    die('Could not connect: error backtrace =   ' . debug_backtrace());
}

?>
