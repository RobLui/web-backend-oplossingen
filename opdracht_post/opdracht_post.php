<?php
$password = "azerty";
$username = "Robbert";
$message = "";

if( isset( $_POST ["submit"]) )
{
  if
  ($_POST["username"] == $username && $_POST["password"] == $password)
  {
    $message = "username & password match, welcome!";
  }
  else{
    $message = "username & password don't match";
  }
}
var_dump($_POST["username"] );
var_dump($_POST["password"] );
?>
