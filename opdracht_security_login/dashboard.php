<?php
session_start();

if (isset($_COOKIE["login"])) {

$explode_array     =   array();
$explode_array     =   explode("," , $_COOKIE["login"]); // eerste param  = op wat te scheiden, 2e is welke array er gebruikt moet worden
$email_no_hash     =   $explode_array[0]; //email
$email_with_hash   =   $explode_array[1]; // gehashte email // 7eee27580015c635a2f5e5f1a44e5764b164cbac13c299476f8473005dd06a3109a1d41bfd3b3c1aafeeb073fbffc5703b91c34797be0e7327ec4d95ed5d648c

// var_dump($email_with_hash); // geeft terug op [0] = het emailadres , op [1] = het gehashte emailadres

// Haal op basis van het cookie-e-mailadres de salt die bij dit e-mailadres hoort op uit de database
try {
  $db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root',''); // db connectie
  $q = $db->prepare("SELECT * FROM users WHERE email = :email LIMIT 10"); // query && zet de waardes op verschillende variabelen
  $q->bindValue(':email', $email_no_hash);
  $q->execute();

  if ($q->rowCount() > 0)   // email in in db
  {
      $check = $q->fetch(PDO::FETCH_ASSOC);
      $row = $check['email'];
      $salt = $check['salt'];
      // $_SESSION["boodschap"] = "EMAIL = " . $row . " SALT = " . $salt; // test om individuele waardes te zien

      // controleer of de hash van ()$row en $salt) gelijk is aan de hash van het emailadres die in de database zit
      $hash_to_check = hash("sha512",($row . $salt)); // 7eee27580015c635a2f5e5f1a44e5764b164cbac13c299476f8473005dd06a3109a1d41bfd3b3c1aafeeb073fbffc5703b91c34797be0e7327ec4d95ed5d648c
      // var_dump($hash_to_check);
      if ($hash_to_check == $email_with_hash) {
        echo "Ingelogd! <br> <br> <br>";
        echo "<a href= /login-form.php>Uitloggen</a>";
        // /opdracht_security_login
      }
      else {
        unset($_COOKIE["login"]);
        header("location: /login-form.php"); //stuur terug naar de login-form
        // /opdracht_security_login
      }
  }
}
catch (PDOException $e) {
$_SESSION["boodschap"] = "dashboard database error = ". $e->getMessage();
}


}
else {
  $_SESSION["boodschap"] = "U moet eerst inloggen!";
  header("location: /login-form.php"); //stuur terug naar de login-form
  // /opdracht_security_login
}
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Dashboard</title>
   </head>
   <body>
<?php var_dump($_SESSION);  ?>
<?php var_dump($_COOKIE); ?>
   </body>
 </html>
