


<?php
$POST_VAN_EMAIL = $_POST["straat"];
$_SESSION["straat"] = $POST_VAN_EMAIL;
//array element (1)
$POST_VAN_NICKNAME = $_POST["nummer"];
$_SESSION["nummer"] = $POST_VAN_NICKNAME;

$POST_VAN_EMAIL = $_POST["gemeente"];
$_SESSION["gemeente"] = $POST_VAN_EMAIL;
//array element (1)
$POST_VAN_NICKNAME = $_POST["postcode"];
$_SESSION["postcode"] = $POST_VAN_NICKNAME;

$_NICKNAME = $POST_VAN_NICKNAME;


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>overzichtspagina</title>
  </head>
  <body>

<form class="" action="index.html" method="post">

</form>

  <?php
    if (isset($_SESSION["straat"])) {
      echo $_SESSION["straat"];
    }
   ?>
   <br>
   <?php
     if (isset($_SESSION["nummer"])) {
       echo $_SESSION["nummer"];
     }
   ?>
   <br>
   <?php
   if (isset($_SESSION["postcode"])) {
     echo $_SESSION["postcode"];
   }
   ?>
   <br>
   <?php
    if (isset($_SESSION["gemeente"])) {
      echo $_SESSION["gemeente"];
    }
   ?>
   <br>
   <?php
     if (isset($_SESSION["nickname"])) {
       echo $_NICKNAME ;
     }
    ?>

  </body>
</html>
