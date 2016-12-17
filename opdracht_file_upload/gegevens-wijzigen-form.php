<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gegevens wijzigen Form</title>
  </head>
  <body>
    <form action="gegevens-bewerken.php" method="post" enctype="multipart/form-data">
      <label for="file">Bestand:</label>
      <input type="file" name="file" id="file">
      <input type="submit" name="submit" value="Submit">
    </form>
    <?php if (isset($_SESSION["boodschap"])) {
      echo $_SESSION["boodschap"];
    } ?>
  </body>
</html>
