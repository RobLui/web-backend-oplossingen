

<?php
//session_start bij elke pagina bijvoegen!
session_start();


$POST_VAN_EMAIL = $_POST["email"];
$POST_VAN_NICKNAME = $_POST["nickname"];

$_SESSION["email"] = $POST_VAN_EMAIL;
$_SESSION["nickname"] = $POST_VAN_NICKNAME;

//Als er een email is doorgegeven..
if (isset($POST_VAN_EMAIL)) {
  //dan wordt de sessie email variabele gelijk gesteld aan de waarde die in de post van de email zit
}
//Als er een nickname is doorgegeven..
if (isset($POST_VAN_NICKNAME)) {
  //dan wordt de sessie nickname variabele gelijk gesteld aan de waarde die in de post van de nickname zit
// echo $POST_VAN_NICKNAME;
}

$email_value = "";

if (isset($_SESSION["straat"])){
   $email_value =  $_SESSION["straat"];
 }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Registratiegegevens van vorige pagina:</h1>
    <p>
      E-mail: <?= $_SESSION["email"];  ?>
      <br>
      Nickname: <?= $_SESSION["nickname"];  ?>
    </p>


    <h1>Deel 2: Adresgegevens</h1>
    <form action="overzichtspagina.php" method="post">

      <label for="straat">Straat:</label>
      <br>
      <input type="text" name="straat" value="">
      <br>

      <label for="nummer">Nummer:</label>
      <br>
      <input type="text" name="nummer" value="<?= $email_value ?>">
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

<!-- <br> -->
<!-- <?php print_r($_SESSION); ?> -->

  </body>
</html>
