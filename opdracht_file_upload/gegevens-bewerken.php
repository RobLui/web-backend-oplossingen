<?php

$error_files_lvl = false;

// Het moet een .png, .jpg of .gif zijn

// Het bestand mag niet groter zijn dan 2mb

// Als er een error is op het $_FILES-niveau
if ($error_files_lvl) {
  // moet er geredirect worden naar gegevens-wijzigen-form.php en de gepaste boodschap getoond worden.
  header("location: opdracht_cookies.php");
}
// Als het bestand voldoet aan de voorwaarden moet de bestandsnaam als volgt worden samengesteld: timestamp_bestandsnaam.extensie

 ?>
