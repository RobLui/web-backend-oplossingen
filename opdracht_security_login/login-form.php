<?php
session_start();

if(isset($_SESSION))
{
  $msg = $_SESSION["email"] . " = email en ";
  $pwd =  " paswoord = " . $_SESSION["session_pass"];
  echo $msg . " " . $pwd;
}
else {
  var_dump($_SESSION);
}
 ?>
