



<?php
// recursieve functies zijn functies die zichzelf oproepen

// Hans heeft 100 000€ geërfd. Hij kan zijn geld aan de bank geven tegen een rentevoet van 8%.
// Als hij dat doet is hij wel verplicht om zijn geld 10 jaar op de bank te laten staan. Hans wil weten hoeveel geld hij na 10 jaar zal overhouden.
// Maak gebruik van een recursieve functie om te berekenen hoeveel geld Hans na 10 jaar zal overhouden
// Zorg er ook voor dat Hans kan ziet hoeveel zijn geld na elk jaar waard is. Rond daarbij alle getallen af naar beneden.
// Je mag hiervoor -voorlopig- met static variabelen werken
//


// Recursive functions
// A recursive function is a function that calls itself
// A bit more in depth:
// If the function keeps calling itself, how does it know when to stop?
// You set up a condition, known as a base case. Base cases tell our recursive call when to stop, otherwise it will loop infinitely.
// What was a good learning example for me, since I have a strong background in math, was factorial.
// By the comments below, it seems the factorial function may be a bit too much, I'll leave it here just in case you wanted it.


function bank_opdracht($erfenis_,$rente,$jaar){
  if  ($jaar > 0) {
  //telt jaren af
  $jaar--;
  //$rente die je moet betalen per jaar
  $rente = floor($erfenis_ * ($rente/100));
  //nieuwe erfenis (ttl van nieuwe_erfenis en nieuwe_rente)
  $nieuwe_erfenis = $erfenis_ + $rente;
  //test
  echo $nieuwe_erfenis . "</br>";
  //recursive
  return bank_opdracht($nieuwe_erfenis,$rente,$jaar);
}
  else {
    echo "einde";
  }
}

$erfenis = 100000;
$rentevoet = 8;
$aantal_jaar = 10;
//1e param = 100.000 , 2e param = 8%, 3e param = aantal jaar
bank_opdracht($erfenis,$rentevoet,$aantal_jaar);
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
