
<?php
session_start();

if(isset($_SESSION["foutboodschap"])){
  var_dump($_SESSION["foutboodschap"]);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CONTACT FORM</title>
    <style>
    .style-email{
      display: block;
      height:25px;
      width:200px;
    }
    .style-boodschap{
      display: block;
      height:50px;
      width:200px;
    }
    .style-sumbit{
      display: block;
      height:25px;
      width:200px;
    }
    </style>
  </head>
  <body>
    <form class="style-class" action="contact.php" method="post">
      <label for="email" >E-mail:</label>
      <input type="email" name="email" class="style-email" value="<?php if (isset($_SESSION["email"])){echo $_SESSION["email"];} ?>">
      <label for="boodschap">Boodschap:</label>
      <input type="text" name="boodschap" class="style-boodschap" value="<?php if(isset($_SESSION["boodschap"])){echo $_SESSION["boodschap"];} ?>">
      <input type="checkbox" name="checkbox" >Stuur een kopie naar mezelf<br>
      <button type="submit" name="verzenden" class="style-sumbit">verzenden</button>
    </form>
  </body>
</html>
