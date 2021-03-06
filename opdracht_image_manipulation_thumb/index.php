<?php
session_start();
// session_unset();
$can_upload = 0;   // mag standaard niet uploaden, tenzij ergens gelijk aan 1 (true) wordt gezet
// Check if image file is a actual image or fake image

if (isset($_POST["submit"])) {  //btn submit pressed
/* 1 */
    if (isset($_FILES["fileToUpload"] )) //als er een file is
    {
      $target_file = $_FILES["fileToUpload"]["name"];
      /* 2 */
      if (empty($target_file))
      {
      $_SESSION["boodschap"] = "No file found, pls enter a file to upload";
      header("location: gegevens-wijzigen-form.php");
      }
      /* 2 */
      else
      {
      // $_SESSION["show_target_file"] = $target_file;
      $dir_location = "img/";   //dir waar de file naartoe moet geupload worden - deze oefening img/
      $file_location = $dir_location . basename($target_file); //welk pad de file moet in terechtkomen bv: oplossingen/opdracht_file_upload/..
      $image_extension = pathinfo($file_location,PATHINFO_EXTENSION); //geeft de extensie van het bestand terug, gebruikt voor te checken jpeg, jpg, etc

      $check_upload = getimagesize($_FILES["fileToUpload"]["tmp_name"]); //check of het een image is
      $file_size = $_FILES["fileToUpload"]["size"];
      /* 2 */
      if ($file_size > 5120) // 5 mb = 5120 kb
      {
        $_SESSION["boodschap"] = "The file is too large"; // Het bestand mag niet groter zijn dan 5mb
        $can_upload = 0;
      }
      /* 2 */
      if ($check_upload) // true, is een image
      {
          $_SESSION["boodschap"] =  "File is an image - " . $check_upload["mime"]; //mime geeft de soort extentie terug in woorden (image/jpeg) in dit geval bij bv jpg extentie
          $can_upload = 1; //mag uploaden // want het moet een .png, .jpg of .gif zijn
      }
      /* 2 */
      else // false, is een andere soort extentie - laat zien de welke
      {
          $_SESSION["boodschap"] = "Wrong file extention - " . $image_extension; // geeft weer welke file extention het dan wel is als het niet jpeg/img is
          $can_upload = 0; //mag niet uploaden
          header("location: gegevens-wijzigen-form.php");
      }
      $error_files_lvl = false;

      // $_SESSION["boodschap"] = "can upload = " . $can_upload;

      /* 2 */
      if (file_exists($file_location))
      {
        $_SESSION["boodschap"] = "file bestaat al";
        $can_upload = 0; //can't upload
      }

  }

  /* 2 */
  if (is_dir($dir_location) && $can_upload) //check for the directory waar je moet in uploaden bestaat // $_FILES-niveau geen errors geeft 1 als het bestaat
    {

      $filename = $_FILES["fileToUpload"]["tmp_name"];

      /* 3 */
      if (move_uploaded_file($filename, $file_location))
      {
       // $_SESSION["show_target_file"] = is_dir($dir_location);
       $_SESSION["boodschap"] = "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded."; //uploaden geslaagd -> geeft weer welke file geupload is

       // IMAGE LANDSCAPE OR PORTRAIT
       /* 4 */
       if ($width > $height)
       {
           // Landscape
          //  $_SESSION["boodschap"] = "landscape";
       }
       /* 4 */
       else
       {
           // Portrait or Square
          //  $_SESSION["boodschap"] = "portrait";
       }
      }
      try
        {
        $testemail = "test@test.email";
        $testpassword = "test@test.password";
        $testsalt = "test@test.salt";
        $testusertype = 1;
        // connectie met db
        $db = new PDO('mysql:host=localhost;dbname=cmd_database_copy', 'root','');
        //query && zet de waardes op verschillende variabelen
        // $db_query = "SELECT * FROM users";
        $db_query = "INSERT INTO users (email, password, salt, user_type, date, profile_picture)
                    VALUES(:email,:password,:salt,:user_type,:date,:profile_picture)";
        //query in db
        $db_access = $db->prepare($db_query);
        //voer uit
        $db_access->execute(array(
                ':email'            => $testemail,
                ':password'         => $testpassword,
                ':salt'             => $testsalt,
                ':user_type'        => $testusertype,
                ':date'             => date('Y-m-d H:i:s'), //huidige tijd = deze manier van noteren om in db te uploaden
                ':profile_picture'  => basename($_FILES["fileToUpload"]["name"])
          ));
            // $_SESSION["boodschap"] = "test upload to db";
        }
      catch (PDOException $e)
        {
          $_SESSION["boodschap"] = "database error = " . ($e->getMessage()); //foutbericht database
        }
        header("location: index.php");
        // $_SESSION["boodschap"] = "uploaded";
      }
    }

/* 1 */
else
{
  echo "upload een file plox";
  header("location: gegevens-wijzigen-form.php");
}

  // header("location: gegevens-wijzigen-form.php");
  // Als het bestand voldoet aan de voorwaarden moet de bestandsnaam als volgt worden samengesteld: timestamp_bestandsnaam.extensie
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IMAGE MANIPULATION</title>
  </head>
  <body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data"> <!-- gebruikt zichzelf -->
      <label for="file">Bestand:</label>
      <input type="file" name="fileToUpload" id="file">
      <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (isset($_SESSION["boodschap"]))
      {
        echo $_SESSION["boodschap"];
      }
      // var_dump($_SESSION); // test leeg
      ?>
  </body>
</html>
