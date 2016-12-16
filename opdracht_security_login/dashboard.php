<?php

if (isset($_COOKIE["login"])) {
echo "ingelogd!";
$explode_array    =   array();
$explode_array    =   explode("," , $_COOKIE["login"]); // eerste param  = op wat te scheiden, 2e is welke array er gebruikt moet worden
$email_no_hash     =   $explode_array[0]; //email
$email_with_hash   =   $explode_array[1]; // gehashte email

var_dump($email_no_hash); // geeft terug op [0] = het emailadres , op [1] = het gehashte emailadres

// Haal op basis van het cookie-e-mailadres de salt die bij dit e-mailadres hoort op uit de database
try {
  $db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root',''); // db connectie
  $q = $db->prepare("SELECT email FROM users WHERE email = :email LIMIT 10"); // query && zet de waardes op verschillende variabelen
  $q->bindValue(':email', $email_no_hash);
  $q->execute();

  if ($q->rowCount() > 0)   //email al in db
  {
      $check = $q->fetch(PDO::FETCH_ASSOC);
      $row = $check['email'];
      $_SESSION["boodschap"] = $row . 'bestaat al in de database, wil je anders inloggen?';
  }
}
catch (PDOException $e) {

}











}
else {
  $_SESSION["boodschap"] = "U moet eerst inloggen!";
  header("location: /opdracht_security_login/login-form.php"); //stuur terug naar de login-form
}
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Dashboard</title>
   </head>
   <body>

   </body>
 </html>
