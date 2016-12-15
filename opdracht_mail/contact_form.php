<?php



 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="contact.php" method="post">

      <label for="email">E-mail:</label>
      <input type="email" name="email" value="">

      <label for="boodschap">Boodschap:</label>
      <input type="boodschap" name="boodschap" value="">

      <button type="submit" name="submit-button">submit</button>
    </form>


    <?php
    session_start();
    // var_dump($_SESSION);
    // if (isset($_SESSION["errormessage"])) {
    //   echo $_SESSION["errormessage"];
    // }
    unset($_SESSION["errormessage"]);
    session_unset($_SESSION["errormessage"]);
    ?>
  </body>
</html>
