
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
    .style-submit{
      display: block;
      height:25px;
      width:200px;
    }
    </style>
  </head>
  <body>
    <form class="email_form" action="contact.php" method="post" id="email_form">
      <label for="email" >E-mail:</label>
      <input type="email" name="email" class="style-email" value="<?php if (isset($_SESSION["email"])){echo $_SESSION["email"];} ?>">
      <label for="boodschap">Boodschap:</label>
      <input type="text" name="boodschap" class="style-boodschap" value="<?php if(isset($_SESSION["boodschap"])){echo $_SESSION["boodschap"];} ?>">
      <input type="checkbox" name="checkbox" >Stuur een kopie naar mezelf<br>
      <button type="submit" name="verzenden" class="style-submit">verzenden</button>
    </form>
    <div id="test_echo">
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> <!-- jQuery library toevoegen -->
    <script type="text/javascript">
      $(document).ready(function(){ // Handler for .ready() called
        // let form_input= $( "#email_form :input" ); // input
        // let form_submit= $( "#email_form :submit" ); // submit
        let form_data = $("#email_form").submit(function(){ // alles
      } //hoort bij de .submit
    ) //hoort bij de .submit
  } //hoort bij de .ready
); //hoort bij de .ready
    </script>
  </body>
</html>
