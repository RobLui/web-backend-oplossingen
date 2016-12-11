<?php
session_start();

if(isset($_SESSION['email']))
{
  $msg = $_SESSION["email"] . " = email en ";
  $pwd =  " paswoord = " . $_SESSION["password"];

  echo $msg . " " . $pwd;
}
else {
  var_dump($_SESSION);
}
 ?>
