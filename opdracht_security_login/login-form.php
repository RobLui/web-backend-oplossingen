
<?php
require_once("login-process.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>INLOGGEN</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="registratie-process.php" method="post" class="form-wrapper">
        <ul>
            <li>
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email">
            </li>
            <li>
              <!--  password == NAME FOR POST-->
                <label for="password">Paswoord</label>
                <input type="password" id="password" name="password" value="
                <?php
                if (isset($_COOKIE["generated_pass"])) {
                  if($_COOKIE["generated_pass"] !== NULL)
                  {
                    echo $_SESSION["generated_pass"];
                  }
                }
                else
                {
                if(isset($_COOKIE["session_pass"]))
                  {
                    echo $_COOKIE["session_pass"];
                  }
                }
                ?>">
            </li>
            <input class="button_styling" type="submit" value="log in" name="log_in">
        </ul>
    </form>
    <?php if(isset($_SESSION["foutboodschap"])){echo $_SESSION["foutboodschap"];} ?>

</body>

</html>
