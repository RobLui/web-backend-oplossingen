<?php
session_start();
unset($_SESSION["boodschap"]);

$can_upload = 0;   // mag standaard niet uploaden, tenzij ergens gelijk aan 1 (true) wordt gezet
// Check if image file is a actual image or fake image

if (isset($_POST["submit"])) {  //btn submit pressed
  $dir_location = "uploads/";   //dir waar de file naartoe moet geupload worden
  $file_location = $dir_location . basename($_FILES["fileToUpload"]["name"]); //welk pad de file moet in terechtkomen bv: oplossingen/opdracht_file_upload/..
  $image_extension = pathinfo($file_location,PATHINFO_EXTENSION); //geeft de extensie van het bestand terug, gebruikt voor te checken jpeg, jpg, etc
  $can_upload = 1; //mag uploaden

  $check_upload = getimagesize($_FILES["fileToUpload"]["tmp_name"]); //check of het een image is
  if($check_upload) // true , is een image
  {
      $_SESSION["boodschap"] =  "File is an image - " . $check_upload["mime"];
      $can_upload = 1; //mag uploaden
  } else {
      $_SESSION["boodschap"] = "File is not an image";
      $can_upload = 0;
  }

  $error_files_lvl = false;

  if (isset($_FILES["file"]))
    {
    $target_file = $_POST["file"];
    }
  try
    {
    //connectie met db
    $db = new PDO('mysql:host=localhost;dbname=cmd_database_copy', 'root','');
    //query && zet de waardes op verschillende variabelen
    $db_query = "SELECT * FROM users";
    //query in db
    $db_access = $db->prepare($db_query);
    //voer uit
    $db_access->execute();
    // var_dump($db_access);
    }
  catch (PDOException $e)
    {
      $_SESSION["foutboodschap"] = "database error = " . ($e->getMessage()); //foutbericht database
    }

  if (file_exists($target_file))
    {
      $_SESSION["boodschap"] = "file bestaat al";
      $can_upload = 0; //can't upload
    }

  // Het moet een .png, .jpg of .gif zijn // Het bestand mag niet groter zijn dan 2mb // Als er een error is op het $_FILES-niveau
  if ($error_files_lvl)
    {
  // moet er geredirect worden naar gegevens-wijzigen-form.php en de gepaste boodschap getoond worden.
    header("location: gegevens-wijzigen-form.php");
    $_SESSION["boodschap"] = "Error op files niveau";
    }
  // Als het bestand voldoet aan de voorwaarden moet de bestandsnaam als volgt worden samengesteld: timestamp_bestandsnaam.extensie
}

 ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FILE UPLOAD</title>
  </head>
  <body>

  </body>
</html>
