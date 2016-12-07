<?php

try {
  //db connectie
  $db = new  PDO('mysql:host=localhost;dbname=bieren', 'root','');

  $db_query = "SELECT * FROM bieren";

  $db_access = $db->prepare($db_query);
  $db_access->execute();

  $veldnamen	=	array();
  //vertrek bij 0 tot en met de lengte van de beschikbare lengte van verschillende kolommen , -- returns the number of columns in the result set --
  for ( $i = 0; $i < $db_access->columnCount(); ++$i )
  {
    //meta inhoud opvragen gaat door getColumnMeta();
    $veldnamen[]	=	$db_access->getColumnMeta( $i )['name'];
  }
  //De brouwer-data ophalen
  $alle_bieren	=	array();
  while( $rij_van_data = $db_access->fetch( PDO::FETCH_ASSOC ) )
  {
    $alle_bieren[]	=	$rij_van_data;
  }

}
catch (PDOException $e) {
echo ("Fout bevind zich hier: " . $e->getMessage());
}


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD ORDER BY</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="index.php" method="post">
    <!-- Bouw een <table> met de gevonden resultaten. -->
    <table>
      <thead>
        <th><?= "#" ?></th>
        <!-- Laat de waarde in elk veldnaam van parameter ['name'] als hoofding van de kolom dienen -->
        <!--  Dit zijn de waardes: brouwernr,	brnaam,	adres,	postcode,	gemeente,	omzet -->
        <?php foreach ($veldnamen as $key => $value): ?>
            <th>
              <!--  Display deze waarde in nieuwe kolommen voor zolang er kolommen zijn-->
              <?= $value ?>
            </th>
            <?= var_dump($value); ?>
          <?php endforeach; ?>
      </thead>

      <tbody>
        <!--  Maakt gebruik van alle alle_brouwer_data en ga hierin dieper werken-->
        <?php foreach ($alle_bieren as $individu_data => $gegevens): ?>
              <tr>
                <td>
                  <?= $individu_data++; ?>
                </td>
                <?php foreach ($gegevens as $waarde): ?>
  						      <td><?= $waarde ?></td>
  					    <?php endforeach ?>
              </tr>
          <?php endforeach ?>
      </tbody>
    </form>

      <tfoot>
        <!--  Mag leeg blijven -->
      </tfoot>
    </table>



  </body>
</html>
