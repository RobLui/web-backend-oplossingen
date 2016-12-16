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
                <input type="text" id="email" name="email_login">
            </li>
            <li>
                <label for="password">Paswoord</label>
                <input type="password" id="password" name="pwd_login" value="">
            </li>
            <input class="button_styling" type="submit" value="log in" name="log_in">
        </ul>
    </form>
</body>
</html>
<?php
if (isset($_SESSION["boodschap"]))
{
  echo $_SESSION["boodschap"];
}
?>
