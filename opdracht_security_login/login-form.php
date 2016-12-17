<?php
session_start();
// var_dump($_SESSION);

 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>INLOGGEN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login-process.php" method="post" class="form-wrapper">
        <ul>
            <li>
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email_login" value="<?php if (isset($_SESSION["email_login"])){echo $_SESSION["email_login"];}?>">
            </li>
            <li>
                <label for="password">Paswoord</label>
                <input type="password" id="password" name="pwd_login" value="<?php if (isset($_SESSION["pwd_login"])){echo $_SESSION["pwd_login"];}?>">
            </li>
            <input class="button_styling" type="submit" name="log_in" value="log in">
        </ul>
    </form>
  <p>Nog geen account? Maak er dan eentje aan op de <a href="registratie-form.php">registratiepagina</a>.</p>
</body>
</html>
<?php
if(isset($_SESSION["boodschap"]))
{
  // echo $_SESSION["boodschap"];
  var_dump($_SESSION["boodschap"]);
  var_dump($_COOKIE);
}
?>
