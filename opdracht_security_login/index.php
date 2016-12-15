
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Login/Registreer</title>
     <link href="style.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
    <div class="wrapper">
      <form action="index.php" method="post">
        <button class ="button_styling" type="submit" name="registreer_" value="">registreer</button>
        <button class ="button_styling" type="submit" name="login_" value="">log in</button>
      </form>
    </div>
   </body>
 </html>

 <?php
 session_start();
 // verwijder alle voorgaande sessie variabelen die er ergens aangemaakt kunnen zijn
 session_unset();

 if (isset($_POST["registreer_"])) {
   header("location: registratie-form.php");
 }
 if (isset($_POST["login_"])) {
   header("location: login-form.php");
 }
  ?>
