<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>REGISTRATIE</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="reg_process_cleanup_testfile.php" method="post">
        <ul>
            <li>
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" value="<?php if (isset($_SESSION["email"])){echo $_SESSION["email"];}?>">
            </li>
            <li>
              <!--  password == NAME FOR POST-->
                <label for="password">Paswoord</label>
                <input type="password" id="password" name="session_pass" value="<?php if (isset($_SESSION["session_pass"])){echo $_SESSION["session_pass"];}?>">
            </li>
            <!--  generate_pass == NAME FOR POST-->
            <button class="button_styling" type="submit" name="generate_pass">Genereer paswoord</button>
            <!--  registreer == NAME FOR POST-->
            <input class="button_styling" type="submit" value="registreer" name="registreer">
        </ul>
    </form>
</body>
</html>
<?php
if(isset($_SESSION["boodschap"]))
{
  echo "<br>" . $_SESSION["boodschap"];
}
var_dump($_SESSION);
?>
