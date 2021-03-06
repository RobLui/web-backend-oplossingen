
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

  <div id="form_wrapper">
    <form class="email_form" action="contact.php" method="post" id="email_form">
      <label for="email" >E-mail:</label>
      <input type="email" name="email" class="style-email" value="<?php if (isset($_SESSION["email"])){echo $_SESSION["email"];} ?>">
      <label for="boodschap">Boodschap:</label>
      <input type="text" name="boodschap" class="style-boodschap" value="<?php if(isset($_SESSION["boodschap"])){echo $_SESSION["boodschap"];} ?>">
      <input type="checkbox" name="checkbox" >Stuur een kopie naar mezelf<br>
      <button type="submit" name="verzenden" class="style-submit">verzenden</button>
    </form>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> <!-- jQuery library toevoegen -->
    <script type="text/javascript">
    $('#email-form').submit(function(){
  					// var formData	=	$('#mail-form').serialize();
  					$.ajax({
  						type: 'POST',
  						url: 'contact_api.php',
  						data: $('#email_data').serialize()
  						success: function(data) {
  							data = JSON.parse(data);
  										if (data['type'] == "success")
  										{
  											$('$#form_wrapper').fadeOut('slow', function(){

  												$('#form_wrapper').append('<p>Bedankt! Uw bericht is goed verzonden!</p>').hide().fadeIn('slow');
  											});

  										}
  										else if (data['type'] == "error")
  										{
  											$('#form_wrapper').prepend('<p>Oeps, er ging iets mis. Probeer opnieuw!</p>').hide().fadeIn('slow');
  											// Wat gebeurt er in deze opstelling als er opnieuw iets mis gaat? Hoe kan je dit verhelpen?
  										}
  									}
  						})
  					return false;
    </script>
  </body>
</html>
