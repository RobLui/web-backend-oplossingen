<?php
session_start();

$login_state;

if(isset($_SESSION))
{
  $mail = $_SESSION["email"];
  $pwd = $_SESSION["session_pass"];
  echo $mail . " = message <br> " . $pwd . " = paswoord " ;
  $login_state = true;
  // test cookies
  setcookie("mail_cookie", $mail);
  setcookie('pwd_cookie', $pwd);
}
else {
  // var_dump("Dit zijn alle sessions die aangemaakt zijn: " . $_SESSION);
}

if (isset($mail))
{
// var_dump($mail);
}
else {
  header("location: http://oplossingen.web-backend.local/opdracht_security_login/registratie-form.php");
}
// kill sessie
// session_destroy();
var_dump($_COOKIE);
 ?>
