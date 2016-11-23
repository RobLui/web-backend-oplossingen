<?php

$inhoud_art_1 = "Dit jaar gaat de Nobelprijs voor de literatuur naar de Bob Dylan. Hij volgt de Wit-Russische onderzoekjournaliste Svetlana Aleksijevitsj op.
Dat maakte het Nobelprijscomité in de Zweedse hoofdstad Stockholm vandaag bekend.
De Amerikaanse folk- en protestzanger (75) werd op 24 mei 1941 als Robert Allen Zimmerman geboren in Duluth, Minnesota.
Zijn grote doorbraak kwam er in de jaren zestig, met albums als 'The times they are a-changin\' (1964).
Hij werd een van de meest invloedrijke artiesten van de twintigste eeuw en ook nu is hij nog enorm populair.
'Als ooit een zanger de Nobelprijs voor Literatuur wint, zal het Bob Dylan zijn.' Daarover was iedereen het eens.
De protestzanger groeide uit tot een rockicoon: geen enkele soloartiest sierde vaker de cover van muziekblad ‘Rolling Stone’.
Hij trekt sinds 1988 onophoudelijk de wereld rond met zijn ‘Never ending tour’, waarmee hij al meer dan 2.000 shows speelde.";

$inhoud_art_2 =   "De inhoud van het laatste CD&V-voorstel is al enkele dagen bekend.
De christendemocraten willen een algemene meerwaardebelasting op aandelen en afgeleide producten van dertig procent,
waarbij de belastbare grondslag jaarlijks met een dertigste omlaag gaat.
Aandelen die men dertig jaar in portefeuille houdt, zouden dus vrijgesteld zijn.
Meerwaarden op aandelen van starters en KMO\’s wil CD&V vrijstellen.
Wanneer een KMO doorgroeit naar een grote onderneming, wordt de meerwaarde berekend vanaf dat ogenblik.
Ook een wederbelegging van meerwaarden in startersaandelen worden in het voorstel vrijgesteld, op voorwaarde dat die minstens vijf jaar worden aangehouden.";

$inhoud_art_3 ="Eerste minister Prayuth Chan-ocha verklaarde dat er al in 1972 een opvolger voor koning Bhumibol werd aangewezen,
en dat de grondwettelijke raad daarvan op de hoogte gebracht wordt.
Volgens AP is het - zoals algemeen verwacht wordt - inderdaad kroonprins Maha Vajiralongkorn zijn vader zal opvolgen.
De kroonprins is in Thaïland niet erg populair, vanwegen zijn amoureuze escapades - Vajiralongkorn is al drie keer getrouwd -
en omdat hij het grootste deel van de tijd in Duitsland woont. Eerder werd zelfs geopperd om één van Bhumibols dochters tot koningin te kronen. ";

$artikels = array(
  //index 0
array(
'titel' => "Bob Dylan wint nobelprijs voor literatuur",
'text' => $inhoud_art_1,
'tags' =>"artikel 1 beschrijving"),
  //index 1
array(
'titel' => "Dit is het Cd&V voorstel voor de meerwaardebelasting",
'text' => $inhoud_art_2,
'tags' => "artikel 2 beschrijving"),
  //index 2
array(
'titel' => "Thaise koning Bhumibol overleden",
'text' > $inhoud_art_3,
'tags' => "artikel 3 beschrijving"),
);
//

// // ----- VRAAG PASCAL -----// //

//Hierdoor wordt de header van de file in de index.php "geinjecteerd", wel handig om dat je zo alles in aparte delen kan zien
include "view/partial-header.html";
//Als er niet 1 artikel moet weergegven worden maar meerdere
if (!isset($_GET["artikel"])) {
  include "view/partial-artikels.html";
}
else {
  include "view/partial-artikel.html";
}
//de include volgorde maakt uit waar de delen komen te staan, bv bij de footer:
//als je hem laatst included gaat hij ook op de laatste positie komen te staan (onderaan)
include "view/partial-footer.html";

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Totale site
    </title>
  </head>
  <body>

  </body>
</html>
