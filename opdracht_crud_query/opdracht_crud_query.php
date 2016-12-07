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

// VELDNAMEN
  $veldnamen = array();
  //vertrek bij 0 tot en met de lengte van de beschikbare lengte van verschillende kolommen , -- returns the number of columns in the result set --
  for ( $i = 0; $i < $db_access->columnCount(); ++$i )
  {
    //meta inhoud opvragen gaat door getColumnMeta();
    $veldnamen[]	=	$db_access->getColumnMeta( $i )['name'];
  }

// DATA IN VELDEN
  $alle_waardes = array();
  while ( $rijen = $db_access->fetch(PDO::FETCH_ASSOC))
  {
    $alle_waardes[] =	$rijen;
    // $rij geeft de verschillende mogelijkheden terug die in de database zitten
    // var_dump($rij);
  }

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
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<table>
  <!--  thead moet de kolomnamen krijgen - key's zijn hier mijn rijnamen -->
  <thead>
    <th><?= "#" ?></th>
    <?php foreach ($veldnamen as $key => $hoofding): ?>
        <th>
          <?= $hoofding ?>
        </th>
    <?php endforeach; ?>
  </thead>
  <!--  tbody komen alle gevonden resultaten -->
  <tbody>

    <?php foreach ($alle_waardes as $sleutel => $value): ?>
    <!--  check dat het geen infi loop kan worden -->
        <tr>
          <td> <?= ++$sleutel; ?> </td>
          <?php foreach ($value as $waarde): ?>
              <td><?= $waarde ?></td>
          <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>

  </tbody>
  <!--  tfoot mag leeg blijven -->
  <tfoot>

  </tfoot>
</table>

  </body>
</html>
