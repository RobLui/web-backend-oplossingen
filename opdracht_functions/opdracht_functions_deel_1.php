<?php

function berekenSom($getal1, $getal2){

  return $getal1 + $getal2;
}

function vermenigvuldig($getal1, $getal2){
    return $getal1 * $getal2;
}

function isEven($getal){
  $true_or_false = "";
  if($getal%2 == 0)
  {
    $true_or_false = true;
  }
  else
  {
    $true_or_false = true;
  }
  return $true_or_false;
}

$antwoord = berekenSom(2,4);
$antwoord_vermenigvuldiging = vermenigvuldig(5,6);
$antwoord_even_oneven = isEven(5);

$teststring = "dit is een teststring";

//lengte van een array afdrukken
$lengte_string = strlen($teststring);
//lengte & uppercase versie afdrukken
$string_upper = $teststring;
$str_to_upper = strtoupper($teststring);


?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>het antwoord van de som = <?php echo $antwoord ?></p>
      <p>het antwoord van de vermenigvuldiging = <?php echo $antwoord_vermenigvuldiging ?></p>
<p>
    string lengte = <?php echo $lengte_string ?>
</p>
<p>
  string uppercase = <?php echo $str_to_upper?>
</p>

  </body>
</html>
