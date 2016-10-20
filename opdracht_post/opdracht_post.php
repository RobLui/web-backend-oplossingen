
<?php
$password = "azerty";
$username = "Robbert";
$message = "";

if( isset( $_POST ['submit']) )
{
  if
  ($_POST["username"] == $username && $_POST["password"] == $password)
  {
    $message = "username & password match, welcome!";
    echo $message;
  }
  else{
    $message = "username & password don't match";
  }
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP POST</title>
</head>

<body>
    <form action="opdracht_post.php" method="post">
        <label for="username">Gebruikersnaam</label>
        <br>
        <input type="username" name="username" placeholder="how can I call u?">
        <br>
        <label for="password">Paswoord:</label>
        <br>
        <input type="password" name="password" placeholder="choose wisely">
        <br>
        <br>
        <!--  NAME MOET ERBIJ ! -->
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
</form>

</body>

</html>
