<?php

try {

  // $array_van_bieren
  // Maakt een instantie van de PDO class
  // Maakt connectie met de lokale db
  // Standaard paswoord als je "pasword" ingeeft, krijg je YES terug
  // "username" staat standaard ook ingesteld, die moet veranderen in "root"
  $db = new PDO('mysql:host=localhost;dbname=bieren', 'root','');
  // Query op database die moet worden uitgevoerd
  $db_query =    'SELECT * FROM bieren
                  INNER JOIN brouwers ON bieren.brouwernr = brouwers.brouwernr
  								WHERE bieren.naam LIKE "Du%" AND brouwers.brnaam LIKE "%a%"';
  //laat weten dat je in de database moet zijn
  $db_access = $db->prepare($db_query);
  //voer deze query uit !-!-!--- LET OP DE PIJL '->' ---!-!-!
  $db_access->execute();
  // var_dump($db_access);

  $rijen = $db_access->fetch(PDO::FETCH_ASSOC);

  //  var_dump($rijen); --- ONDER DIT STAAN DE RESULTATEN DIE DE DUMP TERUG GEEFT
  // 'biernr' => string '454' (length=3)                   0
  // 'naam' => string 'Duvel groen' (length=11)            1
  // 'brouwernr' => string '74' (length=2)                 2
  // 'soortnr' => string '15' (length=2)                   3
  // 'alcohol' => string '7.5' (length=3)                  4
  // 'brnaam' => string 'Moortgat' (length=8)              5
  // 'adres' => string 'Breendonkdorp 58' (length=16)      6
  // 'postcode' => string '2870' (length=4)                7
  // 'gemeente' => string 'Breendonk-Puurs' (length=15)    8
  // 'omzet' => string '250000' (length=6)                 9


}
catch (PDOException $e) {
  // custom foutboodschap bij geen connectie met database
echo "Geen connectie met db kunnen maken: " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD_PAGE</title>
  </head>
  <body>
<table>
  <!--  thead moet de kolomnamen krijgen -->
  <thead>
    <?php foreach ($rijen as $key => $value): ?>
      <!-- key's zijn hier mijn rijnamen -->
      <?= $key ?>
    <?php endforeach; ?>
  </thead>
  <!--  tbody komen alle gevonden resultaten -->
  <tbody>

  </tbody>
  <!--  tfoot mag leeg blijven -->
  <tfoot>

  </tfoot>
</table>

  </body>
</html>
