<?php

//inhoud file gaan ophalen
$file = file_get_contents("text-file.txt");
//split alle karakters
$splitted = str_split($file,1);
//sorteer Z naar A
$sorteer_groot_naar_klein = rsort($splitted);
//Draai de string om
$reverse_stuff = strrev($sorteer_groot_naar_klein);
//Tel hoeveel keer een letter in de string voorkomt
$tellen =  count_chars($reverse_stuff);



?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

?>



  </body>
</html>
