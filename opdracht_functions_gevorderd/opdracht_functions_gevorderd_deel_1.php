<?php

// Maak een globale variable $md5HashKey met als value 'd1fa402db91a7a93c4f414b8278ce073'
$md5HashKey = "d1fa402db91a7a93c4f414b8278ce073";
// Maak drie verschillende functies die de global variable $md5HashKey telkens op een andere manier aanspreken.
function manier_1($originele){
$originele_zin = $originele;
$lengte = strlen($originele_zin);
//letter a komt hoeveel keer voor in $tekst? ($tekst = $md5HashKey)
$letter_hoeveelheid_in_orig = substr_count($originele_zin, '2');
//return de waarde hiervan
$procent = ($letter_hoeveelheid_in_orig / $lengte) * 100;
return $procent;
}
function manier_2($zin, $letter_of_teken_in_zin_aantal){
$originele = strlen($zin);
$letter_of_teken_in_zin_aantal = substr_count($zin,$letter_of_teken_in_zin_aantal);
$procent = ($letter_of_teken_in_zin_aantal /$originele)*100;
return $procent;
}
function manier_3(){
  //globals laat toe je variabele uit de globale direct te gebruiken!
$originele_global_var = $GLOBALS["md5HashKey"];
$lengte_originele = strlen($originele_global_var);
$letter_of_teken_in_zin_aantal = substr_count($originele_global_var,"a");
$procent = ($letter_of_teken_in_zin_aantal / $lengte_originele)*100;
return $procent;
}
$antw_1 = manier_1($md5HashKey);
$antw_2 =  manier_2($md5HashKey,"8");
$antw_3 = manier_3();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <p>antwoord 1:
<?php echo $antw_1?>%</br>
  antwoord 2:
  <?php echo $antw_2?>%</br>
  antwoord 3:
  <?php echo $antw_3?>%
  </p>

  </body>
</html>
