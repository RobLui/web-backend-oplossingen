<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FORM LOGICA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="registratie-process.php" method="post" class="form-wrapper">
        <h2>Registreren</h2>
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
                if (isset($_SESSION["generated_pass"])) {
                  if($_SESSION["generated_pass"] !== NULL)
                  {
                    echo $_SESSION["generated_pass"];
                  }
                }
                else
                {
                if(isset($_SESSION["session_pass"]))
                  {
                    echo $_SESSION["session_pass"];
                  }
                }
                ?>">
            </li>
            <!--  generate_pass == NAME FOR POST-->
            <button class="button_styling" type="submit" name="generate_pass">Genereer paswoord</button>
            <!--  registreer == NAME FOR POST-->
            <input class="button_styling" type="submit" value="registreer" name="registreer">
            <input class="button_styling" type="submit" value="log in" name="log_in">
        </ul>
    </form>
    <?php if(isset($_SESSION["foutboodschap"])){echo $_SESSION["foutboodschap"];} ?>

</body>

</html>
