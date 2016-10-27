



<?php
//array element (0)
$POST_VAN_EMAIL = $_POST["email"];
$_SESSION["email"] = $POST_VAN_EMAIL;
//array element (1)
$POST_VAN_NICKNAME = $_POST["nickname"];
$_SESSION["nickname"] = $POST_VAN_NICKNAME;


?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <h1>Deel2: Adresgegevens</h1>
    <form action="adresgegevens.php" method="post">

      <label for="straat">Straat:</label>
      <br>
      <input type="text" name="straat" value="">
      <br>

      <label for="nummer">Nummer:</label>
      <br>
      <input type="text" name="nummer" value="">
      <br>

      <label for="gemeente">Gemeente:</label>
      <br>
      <input type="text" name="gemeente" value="">
      <br>

      <label for="postcode">Postcode:</label>
      <br>
      <input type="text" name="postcode" value="">
      <br>

      <input type="submit" name="submit">

    </form>
    
<br>
<?php print_r($_SESSION); ?>

<p>
  <?= $_SESSION["email"]  ?>
  <br>
  <?= $_SESSION["nickname"]  ?>
</p>

  </body>
</html>
