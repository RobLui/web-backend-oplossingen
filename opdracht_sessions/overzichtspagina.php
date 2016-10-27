


<!-- session_start bij elke pagina bijvoegen! -->

<?php
session_start();
// var_dump( $_SESSION );
$POST_VAN_STRAAT = $_POST["straat"];
$POST_VAN_NUMMER = $_POST["nummer"];
$POST_VAN_GEMEENTE = $_POST["gemeente"];
$POST_VAN_POSTCODE = $_POST["postcode"];

$_SESSION["straat"] = $POST_VAN_STRAAT;
$_SESSION["nummer"] = $POST_VAN_NUMMER;
$_SESSION["postcode"] = $POST_VAN_POSTCODE;
$_SESSION["gemeente"] = $POST_VAN_GEMEENTE;

$vernietig = session_destroy();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>overzichtspagina</title>
  </head>
  <body>

<form action="overzichtspagina.php" method="post">

</form>

  <?php
    if (isset($_SESSION["straat"])) {
      echo $POST_VAN_STRAAT;
    }
   ?>
   <br>
   <?php
     if (isset($_SESSION["nummer"])) {
       echo $POST_VAN_NUMMER;
     }
   ?>
   <br>
   <?php
   if (isset($_SESSION["postcode"])) {
     echo $POST_VAN_GEMEENTE;
   }
   ?>
   <br>
   <?php
    if (isset($_SESSION["gemeente"])) {
      echo $POST_VAN_POSTCODE;
    }
   ?>
   <br>
   <?php
     if (isset($_SESSION["nickname"])) {
       echo $_SESSION["nickname"];
     }
    ?>
    <br>
    <input type="submit" name="submit">
    <br>
    <br>
    <a href="adresgegevens.php">Vernietig sessie<?php $vernietig ?></a>
  </body>
</html>
