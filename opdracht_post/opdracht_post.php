<?php
$password = "azerty";
$username = "Robbert";

if( isset( $_POST ["submit"]) )
{
  if( $_POST["username"] == $username && $_POST["password"] == $password )
  {
    echo "welcome " . $username;
  }
}
else{
  echo "nothing filled in";
   var_dump($_POST["username"] );
}

 ?>
