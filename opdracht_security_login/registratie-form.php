<?php
session_start();

if (isset($_SESSION['session_pass'])) {
  var_dump($_SESSION['session_pass']);
}
else {
echo "niet gelukt";
}

?>
