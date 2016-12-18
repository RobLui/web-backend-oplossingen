<?php
session_start();
session_unset();

$can_upload = 0;   // mag standaard niet uploaden, tenzij ergens gelijk aan 1 (true) wordt gezet
// Check if image file is a actual image or fake image

if (isset($_POST["submit"])) {  //btn submit pressed
  if (isset($_FILES["fileToUpload"] )) //als er een file is
    {
      $target_file = $_FILES["fileToUpload"];
      $dir_location = "uploads/";   //dir waar de file naartoe moet geupload worden
      $file_location = $dir_location . basename($target_file["name"]); //welk pad de file moet in terechtkomen bv: oplossingen/opdracht_file_upload/..
      $image_extension = pathinfo($file_location,PATHINFO_EXTENSION); //geeft de extensie van het bestand terug, gebruikt voor te checken jpeg, jpg, etc

      $check_upload = getimagesize($_FILES["fileToUpload"]["tmp_name"]); //check of het een image is
      if($check_upload) // true , is een image
      {
          $_SESSION["boodschap"] =  "File is an image - " . $check_upload["mime"]; //mime geeft de soort extentie terug in woorden (image/jpeg) in dit geval bij bv jpg extentie
          $can_upload = 1; //mag uploaden
      } else {
          $_SESSION["boodschap"] = "Wrong file extention - " . $image_extension; // geeft weer welke file extention het dan wel is als het niet jpeg/img is
          $can_upload = 0; //mag niet uploaden
      }
      $error_files_lvl = false;

      // $_SESSION["boodschap"] = "can upload = " . $can_upload;

  if (file_exists($file_location))
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

  if ($can_upload) //als je mag uploaden
    {
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
          $_SESSION["boodschap"] = "database error = " . ($e->getMessage()); //foutbericht database
        }
        header("location: index.php");
        $_SESSION["boodschap"] = "uploaded";
    }
  }
  // header("location: gegevens-wijzigen-form.php");
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
