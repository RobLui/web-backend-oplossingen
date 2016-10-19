<?php

//inhoud file gaan ophalen
$file = file_get_contents("text-file.txt");
//split alle karakters
$splitted = str_split($file,1);
//sorteer Z naar A

//Hoe komt het dat.. wanneer je hem in een andere variabele zet, ik het niet meer kan doen met array_reverse?
rsort($splitted);
//Draai de string om
$reversed_array = array_reverse($splitted);
//Tel hoeveel keer een letter in de string voorkomt
$tellen = count($reversed_array);

$array_topush_in = array();
// $array_to_add_in = array();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    foreach($reversed_array as $value){
        if(!in_array($value, $array_topush_in, true)){
            array_push($array_topush_in,$value);
        }
    }
    var_dump($array_topush_in);
    ?>
  </body>
</html>
