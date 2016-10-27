<?php



//begin sessie
session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sessions</title>
  </head>
  <body>
    		<h1>Deel 1: registratiegegevens</h1>
        <form action="adresgegevens.php" method="post">
          <label for="email">E-mail:</label>
          <br>
          <input type="text" name="email" value="">
          <br>
          <label for="nickname">Nickname:</label>
          <br>
          <input type="text" name="nickname" value="">
          <br>
          <input type="submit" name="submit">
        </form>
  </body>
</html>
