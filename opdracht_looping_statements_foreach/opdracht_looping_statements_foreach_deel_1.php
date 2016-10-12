<?php

//inhoud file gaan ophalen
$file = file_get_contents("text-file.txt");
//split alle karakters
$splitted = str_split($file,1);
//sorteer Z naar A
$sorteer_groot_naar_klein = rsort($splitted);
//Draai de string om
$reversed_string = strrev($sorteer_groot_naar_klein);
//Tel hoeveel keer een letter in de string voorkomt
$tellen = count_chars($reversed_string);
//
$array_to_add_in = array();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
foreach ($reversed_string as $nieuwe_naam) {
    $array_to_add_in[$nieuwe_naam];
}
    ?>



  </body>
</html>
