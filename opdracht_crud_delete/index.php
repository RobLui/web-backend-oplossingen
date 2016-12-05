<?php


try {
  // Maak een connectie met de lokale MySQL server en selecteer de database bieren
  $db = new  PDO('mysql:host=localhost;dbname=bieren', 'root','');
  // Voer de volgende query uit: selecteer alles uit de tabel brouwers
  $db_query = "SELECT * FROM brouwers";

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
  $alle_brouwer_data	=	array();

  while( $rij_van_data = $db_access->fetch( PDO::FETCH_ASSOC ) )
  {
    $alle_brouwer_data[]	=	$rij_van_data;
  }


}
catch (PDOException $e) {
  // Zorg ervoor dat wanneer er niet kan geconnecteerd worden met de database, er een custom foutboodschap verschijnt, inclusief de specifieke fout.
  echo "Hier liep het fout: " . $e->getMessage();
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD DELETE</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
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
          <?php endforeach; ?>
      </thead>

      <tbody>
        <!--  Maakt gebruik van alle brouwer_data en ga hierin dieper werken-->
        <?php foreach ($alle_brouwer_data as $individu_data => $gegevens): ?>
              <tr>
                <td><?= $key++ ?></td>
                  <?php foreach ($gegevens as $waarde): ?>
    						      <td><?= $waarde ?></td>
    					     <?php endforeach ?>
      				</tr>
      			<?php endforeach ?>

      </tbody>


      <tfoot>
        <!--  Mag leeg blijven -->
      </tfoot>
    </table>



  </body>
</html>
