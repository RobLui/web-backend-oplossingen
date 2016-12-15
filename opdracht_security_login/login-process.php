<?php
session_start();

// $_COOKIE["email"] = $_SESSION["email"];
// $_COOKIE["password"] = $_SESSION["password"];
// $_COOKIE["generated_pass"] = $_SESSION["generated_pass"];
// $_COOKIE["session_pass"] = $_SESSION["session_pass"];
// unset($_COOKIE['pwd_cookie']);
// unset($_COOKIE['mail_cookie']);

$login_state;

if(isset($_SESSION))
{
  $mail = $_SESSION["email"];
  $pwd = $_SESSION["session_pass"];
  echo $mail . " = message <br> " . $pwd . " = paswoord " ;
  $login_state = true;
}
else {
  // var_dump("Dit zijn alle sessions die aangemaakt zijn: " . $_SESSION);
}

if (isset($mail))
{
var_dump($mail);
}
else {
  header("location: login-form.php");
}
// kill sessie
// session_destroy();
var_dump($_COOKIE);
var_dump($_SESSIOn);
// session_unset();

 ?>
