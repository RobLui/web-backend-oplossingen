<!-- <?php
// WERKT
session_start();
var_dump($_SESSION["session_pass"]);
?> -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FORM LOGICA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="registratie-process.php" method="post">
        <h2>Registreren</h2>
        <ul>
            <li>
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email">
            </li>
            <li>
                <label for="password">Paswoord</label>
                <input type="password" id="password" name="password" value="
                <?php if(isset($_SESSION["session_pass"])){
                  echo $_SESSION["session_pass"];
                }
              ?>">
            </li>
            <button class="button_styling" type="submit" name="generate_pass">Genereer paswoord</button>
            <input class="button_styling" type="submit" value="registreer">
        </ul>
    </form>

    <form action="login-form.php" method="post">
        <input class="button_styling" type="submit" value="log in">
    </form>

</body>

</html>
